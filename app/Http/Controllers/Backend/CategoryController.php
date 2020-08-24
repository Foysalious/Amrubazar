<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{


    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('backend.pages.category.manage', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_categories = Category::orderBy('name', 'asc')->where('parent_id', 0)->get();
        return view('backend.pages.category.create', compact('parent_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form Validation
        $request->validate([
            'cat_name'  => 'required|max:255',
        ],
        [
            'cat_name.required'     => 'Please Insert a Caregory Name',
        ]);

        // Store a Category in DB
        $category = new Category();
        $category->name             = $request->cat_name;
        $category->slug             = Str::slug($request->cat_name);
        $category->parent_id        = $request->parent_id;
        $category->is_featured      = $request->is_featured ? $request->is_featured : 0;

        if ( $request->icon_image )
        {
            $image = $request->file('icon_image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/category/' . $img);
            Image::make($image)->save($location);
            $category->icon_image = $img;
        }

        if ( $request->thumb_image )
        {
            $image = $request->file('thumb_image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/category/' . $img);
            Image::make($image)->save($location);
            $category->thumb_image = $img;
        }

        $category->save();

        // Write Flash Message

        return redirect()->route('manageCategory');
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        $parent_categories = Category::orderBy('name', 'asc')->where('parent_id', 0)->get();
        
        $category = Category::find($id);

        if ( !is_null($category) ){
            return view('backend.pages.category.edit', compact('category', 'parent_categories'));
        }
        else{
            return route('manageCategory');
        }

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
        // Form Validation
        $request->validate([
            'cat_name'  => 'required|max:255',
        ],
        [
            'cat_name.required'     => 'Please Insert a Caregory Name',
        ]);

        // Store a Category in DB
        $category = Category::find($id);
        $category->name             = $request->cat_name;
        $category->slug             = Str::slug($request->cat_name);
        $category->parent_id        = $request->parent_id;
        $category->is_featured      = $request->is_featured ? $request->is_featured : 0;

        $upImage = ['icon' => $category->icon_image,'thumb' =>$category->thumb_image];
        foreach($upImage as $key => $image){
            
            if($image){
                if($key == 'icon'){
                    if ( File::exists('images/category/' . $category->icon_image )  ){
                        File::delete('images/category/' . $category->icon_image);
                    }
                }

                if($key == 'thumb'){
                    if ( File::exists('images/category/' . $category->thumb_image )  ){
                        File::delete('images/category/' . $category->thumb_image);
                    }
                }
            
            
        } 
        
        //Image Upload
        if ( $request->icon_image )
        {
            $image = $request->file('icon_image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/category/' . $img);
            Image::make($image)->save($location);
            $category->icon_image = $img;
        }

        if ( $request->thumb_image )
        {
            $image = $request->file('thumb_image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/category/' . $img);
            Image::make($image)->save($location);
            $category->thumb_image = $img;
        }
        

        $category->save();
    }
        return redirect()->route('manageCategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {

        
 
        
        $category = Category::find($id);

        if ( !is_null($category) ){
         
            if ( $category->parent_id == 0 )
            {
                $sub_cat = Category::orderBy('name', 'asc')->where('parent_id', $category->id)->get();
                // Delete all the Sub Category and It's Images
                foreach ($sub_cat as $sub) {
                    if ( File::exists('images/category/' . $sub->image ) ){
                        File::delete('images/category/' . $sub->image);
                    }
                    $sub->delete();
                }
            }


            $upImage = ['icon' => $category->icon_image,'thumb' =>$category->thumb_image];
            foreach($upImage as $key => $image){
                
                if($image){
                    if($key == 'icon'){
                        if ( File::exists('images/category/' . $category->icon_image )  ){
                            File::delete('images/category/' . $category->icon_image);
                        }
                    }

                    if($key == 'thumb'){
                        if ( File::exists('images/category/' . $category->thumb_image )  ){
                            File::delete('images/category/' . $category->thumb_image);
                        }
                    }
                }
                
            }
            // Delete Category Image
         
            $category->delete(); 
        }
        return redirect()->route('manageCategory');
    }
}