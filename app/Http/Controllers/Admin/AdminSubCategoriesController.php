<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Categories;
use App\Models\CategoriesDetail;
class AdminSubCategoriesController extends Controller
{    
   
    public function categories()
    {  
        $data=array();
        
        $maincategories=Categories::with('detail')->where('parent_id', '=', '0')->get();
        $data['maincategories']=$maincategories;
        
        $subcategories=Categories::with('detail')
                ->with('maindetail')
                ->where('parent_id', '>', '0')
                ->get();
        
        $data['subcategories']=$subcategories;

        return view('admin.sub_categories.list',$data);
    }  
    public function add(){
        $data=array();
        $maincategories=Categories::with('detail')->where('parent_id', '=', '0')->get();
        $data['maincategories']=$maincategories;       
        return view('admin.sub_categories.add',$data);
    }
    public function createSubCategories(Request $request){

        $result = array();
        $date_added = date('y-m-d h:i:s');
        
        //get function from other controller
        $myVar = new AdminSiteSettingController();       	
        $extensions = $myVar->imageType();
        $slug=$request->categories_name;
        $currentSlug = $myVar->slugify($slug);
       
        if($request->hasFile('newImage') and in_array($request->newImage->extension(), $extensions)){
            $image = $request->newImage;
            $fileName = time().'_'.$image->getClientOriginalName();
            $image->move('resources/assets/images/category_images/', $fileName);
            $uploadImage = 'resources/assets/images/category_images/'.$fileName; 
        }else{
            $uploadImage = 'resources/assets/images/default.png';
        }	

        if($request->hasFile('newIcon') and in_array($request->newIcon->extension(), $extensions)){
            $icon = $request->newIcon;
            $iconName = time().'_'.$icon->getClientOriginalName();
            $icon->move('resources/assets/images/category_icons/', $iconName);
            $uploadIcon = 'resources/assets/images/category_icons/'.$iconName; 
        }else{
            $uploadIcon = 'resources/assets/images/default.png';
        }
        
        $categories =new Categories();
        
          
        $categories->date_added         =   $date_added;
        $categories->parent_id          =   $request->main_categories;
        $categories->categories_slug    =   $currentSlug;
        $categories->categories_image   =   $uploadImage;
        $categories->categories_icon    =   $uploadIcon;            
        $categories->save();  
        
        $categories_detail =new CategoriesDetail;
        
        $categories_detail->categories_name     =   $request->categories_name;
        $categories_detail->categories_id       =   $categories->categories_id;
       
        $categories_detail->save();
        return redirect()->back()->with('success','Successfully created...'); 
    }
    
    public function edit($id){
        
        $data=array();
        $maincategories=Categories::with('detail')->where('parent_id', '=', '0')->get();
        $data['maincategories']=$maincategories;  
        
        $categories=Categories::with('detail')->where('categories_id',$id)->first();        
        $data['categories']=$categories;
        return view('admin.sub_categories.edit',$data);
    }
    public function updateCategories(Request $request){
        $result = array();
        $last_modified = date('y-m-d h:i:s');
        
        //get function from other controller
        $myVar = new AdminSiteSettingController();       	
        $extensions = $myVar->imageType();
        $slug=$request->categories_name;
        $currentSlug = $myVar->slugify($slug);
//        $categories=Categories::with('detail')->where('categories_id',$id)->first();        
        $categories = Categories::where('categories_id',$request->categories_id)->first();    

        if($request->hasFile('newImage') and in_array($request->newImage->extension(), $extensions)){
            $image = $request->newImage;
            $fileName = time().'_'.$image->getClientOriginalName();
            $image->move('resources/assets/images/category_images/', $fileName);
            $uploadImage = 'resources/assets/images/category_images/'.$fileName; 
        }else{
            $uploadImage = $categories->categories_image;
        }	

        if($request->hasFile('newIcon') and in_array($request->newIcon->extension(), $extensions)){
            $icon = $request->newIcon;
            $iconName = time().'_'.$icon->getClientOriginalName();
            $icon->move('resources/assets/images/category_icons/', $iconName);
            $uploadIcon = 'resources/assets/images/category_icons/'.$iconName; 
        }else{
            $uploadIcon = $categories->categories_icon;
        }
        
          
        $categories->last_modified      =   $last_modified;
        $categories->parent_id          =   $request->main_categories;
        $categories->categories_slug    =   $currentSlug;
        $categories->categories_image   =   $uploadImage;
        $categories->categories_icon    =   $uploadIcon;            
        $categories->save();  
        
        $categories_detail = CategoriesDetail::where('categories_id',$request->categories_id)->first();
        
        $categories_detail->categories_name     =   $request->categories_name;
        $categories_detail->categories_id       =   $request->categories_id;       
        $categories_detail->save();
        
        return redirect('admin/sub-categories')->with('success','Successfully updated...'); 

    }
    public function deleteCategories($id){
        $categories = Categories::where('categories_id',$id)->first();
        $categories->delete();
        
        $categories_detail = CategoriesDetail::where('categories_id',$id)->first();
        $categories_detail->delete();
        
        return redirect('admin/sub-categories')->with('success','Successfully Record deleted...'); 

    }
    
}
