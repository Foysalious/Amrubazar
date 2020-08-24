@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateImage',$image->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            

            <div class="form-group">
                <label>Left Side Image: </label>
                @if ( $image->left_image == NULL )
                No Image Uploaded
                @else 
                <img src="{{ asset('images/addImages/' . $image->left_image ) }}" width="100"><br><br>
                @endif
                <input type="file" name="left_image" class="form-control-file">
            </div>
            <br>
            <br>
            <br>

            <div class="form-group">
                <label>Right Side Image :</label>
                @if ( $image->right_image == NULL )
                No Image Uploaded
                @else 
                <img src="{{ asset('images/addImages/' . $image->right_image ) }}" width="100"><br><br>
                @endif
                <input type="file" name="right_image" class="form-control-file">
            </div>
            <br>
            <br>
            <br>
            <div class="form-group">
                <label>Bottom Side Image:</label>
                @if ( $image->bottom_image == NULL )
                No Image Uploaded
                @else 
                <img src="{{ asset('images/addImages/' . $image->bottom_image ) }}" width="100"><br><br>
                @endif
                <input type="file" name="bottom_image" class="form-control-file">
            </div>
            <br>
            <br>
            <br>
            
            <div class="form-group">
                <input type="submit" name="addImage" value="Add Image" class="btn btn-primary">
            </div>

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection