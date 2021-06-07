@extends('admin.layouts.app')

@section('content')
<!-- BEGIN: Page Main-->
    
      <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
      <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
         <!-- Search for small screen-->
         <div class="container">
            <div class="row">
                <div class="col s10 m6 l6">
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Categories</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item"><a href="index.html">Home</a>
                     </li>                  
                     <li class="breadcrumb-item active">Edit Categories
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12">
         <div class="container">
            <!-- users edit start -->
            <div class="section users-edit">
               <div class="card">
                  <div class="card-content">
                    <div class="row">
                        <div class="col s12" id="account">                       
                           <!-- users edit account form start -->
                           <form class="accountForm" method="POST" action='{{ url('admin/categories/update-categories') }}' aria-label="categories" enctype="multipart/form-data">
                                @csrf 
                                <input type="hidden" name="categories_id" value="{{ $categories->categories_id }}">
                              <div class="row">
                                 <div class="col s12 m12">
                                    <div class="row">
                                       <div class="col s12 input-field">
                                           <input id="name" name="categories_name" type="text" class="validate" required="" value="{{ $categories->detail->categories_name }}"
                                             data-error=".errorTxt1">
                                          <label for="name">Categories Name</label>
                                          <small class="errorTxt1"></small>
                                       </div>                                                                              
                                       <div class="col s12">
                                          <div class="divider mb-1"></div>
                                            <!--file-upload-->
                                            <div id="file-upload" class="section">
                                                <!--Default version-->
                                                <div class="row section">
                                                    <div class="col s12 m4 l3">
                                                        <p>Image</p>
                                                    </div>
                                                    <div class="col s12 m8 l5">
                                                        <input type="file" id="input-file-now" class="dropify" data-default-file="" name="newImage"/>
                                                    </div>
                                                    <div class="col 12 m4 5">
                                                        <img src="{{asset('').'/'.$categories->categories_image}}" alt="{{ $categories->categories_image }}" width=" 100px">
                                                    </div>
                                                </div>
                                            </div>                                                                              
                                          <div class="divider mb-1"></div>
                                            <!--file-upload-->
                                            <div id="file-upload" class="section">
                                                <!--Default version-->
                                                <div class="row section">
                                                    <div class="col s12 m4 l3">
                                                        <p>Icon</p>
                                                    </div>
                                                    <div class="col s12 m8 l5">
                                                        <input type="file" id="input-file-now" class="dropify" data-default-file="" name="newIcon"/>
                                                    </div>
                                                    <div class="col 12 m4 5">
                                                        <img src="{{asset('').'/'.$categories->categories_icon}}" alt="{{ $categories->categories_icon }}" width=" 100px">
                                                    </div>
                                                </div>
                                            </div>                                                                              
                                        </div>
                                    </div>
                                 </div>
                                <div class="col s12 display-flex justify-content-end mt-3">
                                   <button type="submit" class="btn indigo">Submit</button>
                                    <button type="button" class="btn btn-light">Cancel</button>                                     
                                </div>
                              </div>
                            </form>
                           
                           <!-- users edit account form ends -->
                        </div>
                        
                        
                     </div>
                     <!-- </div> -->
                  </div>
               </div>
            </div>
            <!-- users edit ends --><!-- START RIGHT SIDEBAR NAV -->
           
            
         </div>
         <div class="content-overlay"></div>
      </div>
   
<!-- END: Page Main-->


@endsection