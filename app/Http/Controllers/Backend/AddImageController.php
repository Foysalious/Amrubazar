<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\AddImage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;

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
        $AddImage = AddImage::orderBy('id', 'asc')->get();
        if (count($AddImage) == NULL) {
            $AddImage = new AddImage();
        if ( $request->left_image )
        {
            $image1 = $request->file('left_image');
            $img1 = time().Str::random(12) . '.' . $image1->getClientOriginalExtension();
            $location = public_path('images/addImages/' . $img1);
            Image::make($image1)->save($location);
            $AddImage->left_image = $img1;
        }

        if ( $request->right_image )
        {
            $image2 = $request->file('right_image');
            $img2 = time().Str::random(12) . '.' . $image2->getClientOriginalExtension();
            $location = public_path('images/addImages/' . $img2);
            Image::make($image2)->save($location);
            $AddImage->right_image = $img2;
        }

        if ( $request->bottom_image )
        {
            $image3 = $request->file('bottom_image');
            $img3 = time().Str::random(12) . '.' . $image3->getClientOriginalExtension();
            $location = public_path('images/addImages/' . $img3);
            Image::make($image3)->save($location);
            $AddImage->bottom_image = $img3;
        }
        $AddImage->save();
        Toastr::success('Banner Image Created');

        return redirect()->route('manageImage');
    }else {
        //write unsuccess message
        Toastr::error('Banner Already Added');

        return redirect()->route('manageImage');
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
    public function edit(AddImage $AddImage,$id)
    {   
        $image = AddImage::find($id);
        return view('Backend.pages.AddImage.edit',compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,AddImage $AddImage, $id)
    {
        $AddImage = AddImage::find($id);

       
        $uploadImages = ['left_image' => $request->left_image,'right_image' =>$request->right_image,'bottom_image' =>$request->bottom_image];
        
        foreach($uploadImages as $key => $image){
            if($image){

                $imageName = time().Str::random(12).'.png';
                Image::make($image)->encode('png', 100)->save(public_path('images/addImages/'.$imageName));

                if(File::exists(public_path('images/addImages/'.$AddImage[$key]))){
                    File::delete(public_path('images/addImages/'.$AddImage[$key]));
                }


                $AddImage[$key] = $imageName;
            }
        }
       
        $AddImage->save();
        Toastr::success('Banner Image Updated');

        return redirect()->route('manageImage');

    }
            

    //Handle File Upload
          
               
                

             
             

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddImage $addImage, $id)
    {
        $addImage = AddImage::find($id);

        if ( !is_null($addImage) ){
         
      


            $upImage = ['left' => $addImage->left_image,'right' =>$addImage->right_image,'bottom' =>$addImage->bottom_image];
            foreach($upImage as $key => $image){
                
                if($image){
                    if($key == 'left'){
                        if ( File::exists('images/AddImage/' . $addImage->left_image )  ){
                            File::delete('images/AddImage/' . $addImage->left_image);
                        }
                    }

                    if($key == 'right'){
                        if ( File::exists('images/AddImage/' . $addImage->right_image )  ){
                            File::delete('images/AddImage/' . $addImage->right_image);
                        }
                    }

                    if($key == 'bottom'){
                        if ( File::exists('images/AddImage/' . $addImage->bottom_image )  ){
                            File::delete('images/AddImage/' . $addImage->bottom_image);
                        }
                    }
                }
                
            }
            // Delete Category Image
         
            $addImage->delete(); 
            Toastr::error('Banner Image Deleted');

        }
        return redirect()->route('manageImage');
    }
    }

