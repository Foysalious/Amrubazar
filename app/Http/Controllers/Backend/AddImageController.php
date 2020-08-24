<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AddImage;

class AddImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = AddImage::orderBy('id', 'desc')->get();
        return view('backend.pages.AddImage.manage', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.addImage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $AddImage = new AddImage();

        if ( $request->left_image )
        {
            $image = $request->file('left_image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/addImage/' . $img);
            Image::make($image)->save($location);
            $AddImage->icon_image = $img;
        }

        if ( $request->right_image )
        {
            $image = $request->file('thumb_image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/addImage/' . $img);
            Image::make($image)->save($location);
            $AddImage->thumb_image = $img;
        }

        if ( $request->bottom_image )
        {
            $image = $request->file('bottom_image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/addImage/' . $img);
            Image::make($image)->save($location);
            $AddImage->bottom_image = $img;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
