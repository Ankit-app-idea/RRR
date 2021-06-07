<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function dashboard()
    {      
        return view('admin.dashboard');
    }  
    public function manageUser(){
        $data=array();
        $users=User::with('role')->get();
        $role=Role::get();
        $data['users']=$users;
        $data['role']=$role;
        return view('admin.manage_users.userlist',$data);
    }   
    public function editUser($id){
        $data=array();
        $role=Role::get();
        $data['role']=$role;
        $users=User::with('role')->find($id);
        $data['users']=$users;
        return view('admin.manage_users.edituser',$data);
    }
    public function updateUserProfile(Request $request){
        $users=User::find($request->user_id);
        $users->f_name=$request->f_name;
        $users->l_name=$request->l_name;
        $users->email=$request->email;
        $users->rolle_id=$request->role;
        $users->save();
        return redirect()->back()->with('success','Successfully profile update...'); 
            
    }
    public function updateAdminProfile(Request $request){

        $admin=Admin::find($request->admin_id);

        $admin->name=$request->name;
        $admin->email=$request->email;        
        if(isset($request->password) && !empty($request->password)){
            $admin->password=Hash::make($request->password);
        }
        
        $admin->save();
        
        return redirect()->back()->with('success','Successfully profile update...'); 
            
    }
    public function manageAdmin(){
        $data=array();
        $users=Admin::get();
        $data['adminlist']=$users;       
        return view('admin.manage_users.adminlist',$data);
    }
    public function editAdmin($id){
        $data=array();
        $users=Admin::find($id);
        $data['admin']=$users;
        
        return view('admin.manage_users.editadmin',$data);
    }
    public function addNewAdmin(){
        $data=array();
        return view('admin.manage_users.add-new-admin',$data);
    }
    protected function createAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6',
        ]);
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->back()->with('success','Successfully created...'); 
    }
    public function addNewUser(){
        
        $data=array();
        $role=Role::get();
        $data['role']=$role;
        return view('admin.manage_users.add-new-user',$data);
    }
    public function createUser(Request $request){
        $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        User::create([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'rolle_id' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->back()->with('success','Successfully created...'); 
    }
}
