<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminSiteSettingController extends Controller
{    
   public function slugify($slug){
		
	  // replace non letter or digits by -
	  
	  $slug = preg_replace('~[^\pL\d]+~u', '-', $slug);
	
	  // transliterate
	  if (function_exists('iconv')){
		$slug = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
	  } 
	
	  // remove unwanted characters
	  $slug = preg_replace('~[^-\w]+~', '', $slug);
	
	  // trim
	  $slug = trim($slug, '-');
	
	  // remove duplicate -
	  $slug = preg_replace('~-+~', '-', $slug);
	
	  // lowercase
	  $slug = strtolower($slug);
	
	  if (empty($slug)) {
		return 'n-a';
	  }
	
	  return $slug;
	}
	
	public function imageType(){	
		$extensions = array('gif','jpg','jpeg','png');	
		return $extensions;
	}
}
