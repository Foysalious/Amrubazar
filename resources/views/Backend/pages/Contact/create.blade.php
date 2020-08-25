@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('storeContact') }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" name="phone_Number" class="form-control" placeholder="Please Insert Contact Number">
            </div>

            <div class="form-group">
                <label>Contact Address</label>
                <input type="text" name="address" class="form-control" placeholder="Please Insert Contact Number">
            </div>

            <div class="form-group">
                <label>Facebook Link</label>
                <input type="text" name="Facebook" class="form-control" placeholder="Please Insert your official facebook link">
            </div>

            <div class="form-group">
                <label>Youtube Link</label>
                <input type="text" name="youtube" class="form-control" placeholder="Please Insert your official youtube link">
            </div>

            <div class="form-group">
                <label>Instagram Link</label>
                <input type="text" name="instagram" class="form-control" placeholder="Please Insert instagram link">
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="text" name="email" class="form-control" placeholder="Please Insert email address">
            </div>

            <div class="form-group">
                <input type="submit" name="addCategory" value="Add Contact Info" class="btn btn-primary">
            </div>
         

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection