@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateCategory', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Category Name</label>
                <input type="text" name="cat_name" class="form-control" value="{{ $category->name }}">
            </div>

         <div>Nice </div>

            <div class="form-group">
                <label>Parent Category</label>
                <select class="form-control" name="parent_id">
                    <option value="0">Select a Primary Category (Optional)</option>
                    @foreach( $parent_categories as $parent )
                        <option value="{{ $parent->id }}" {{ $parent->id == $category->parent_id ? 'selected' : '' }}>{{ $parent->name }}</option>
                    @endforeach                			
                </select>
            </div>

            <div class="form-group">
                <label>Is Featured</label>
                <select class="form-control" name="featured_id">
                    <option value="0">Select a featured Category (Optional)</option>
                    
                        <option value="0">Featured</option>
                        <option value="1">Not Featured</option>

                      			
                </select>
            </div>


            <div class="form-group">
                <label>Category Icon</label>
                @if ( $category->icon_image == NULL )
                No Image Uploaded
                @else 
              <img src="{{ asset('images/category/' . $category->icon_image ) }}" width="100"><br><br>
              @endif
                <input type="file" name="icon_image" class="form-control-file" value="{{ $category->icon_image	 }}">
            </div>

            <div class="form-group">
                <label>Category Thumbnail Image</label>
                @if ( $category->thumb_image == NULL )
                No Image Uploaded
                @else 
              <img src="{{ asset('images/category/' . $category->thumb_image ) }}" width="100"><br><br>
              @endif
                <input type="file" name="thumb_image" class="form-control-file"value="{{ $category->thumb_image	 }}">
            </div>

            <div class="form-group">
                <input type="submit" name="addCategory" value="Add Category" class="btn btn-primary">
            </div>

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection