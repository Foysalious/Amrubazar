<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

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
        $category->description      = $request->cat_description;
        $category->parent_id        = $request->parent_id;

        if ( $request->image )
        {
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/category/' . $img);
            Image::make($image)->save($location);
            $category->image = $img;
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
        $category->description      = $request->cat_description;
        $category->parent_id        = $request->parent_id;

        if ( $request->image )
        {
            // Delete Existing Image
            if ( File::exists('images/category/' . $category->image ) ){
                File::delete('images/category/' . $category->image);
            }
            // Upload New Image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/category/' . $img);
            Image::make($image)->save($location);
            $category->image = $img;
        }

        $category->save();

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
            // If it is a Parent Category, We Will Delete all it's Sub Category Too
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

            // Delete Category Image
            if ( File::exists('images/category/' . $category->image ) ){
                        File::delete('images/category/' . $category->image);
            }
            $category->delete(); 
        }
        return redirect()->route('manageCategory');
    }
}