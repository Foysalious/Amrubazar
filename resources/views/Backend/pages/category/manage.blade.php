@extends('Backend.template.layout');
@section('main-content')

<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">

         
        <!-- Category Table Start -->
        <table id="tableSorting" class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Icon Image</th>
              <th scope="col">Thumb Image</th>
              <th scope="col">Parent Catgory</th>
              <th scope="col">Is Featured</th>
              <th scope="col">Action</th>

            </tr>
          </thead>
          <tbody>


              @foreach( $categories as $category )
                  <tr>
                    <th scope="row"> {{ $category->id }} </th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->icon_image }}</td>
                    <td>{{ $category->thumb_image }}</td>
                    <td>{{ $category->parent_id }}</td>
                    <td>{{ $category->is_featured }}</td>
                  
                   
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('editCategory', $category->slug) }}" class="btn btn-success btn-sm">Update</a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCategory{{ $category->slug }}">Delete</button>
                        </div>

                  <!-- Modal -->
								<div class="modal fade" id="deleteCategory{{ $category->slug }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Do You want to delete this category?</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                             <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                          <form action="{{ route('deleteCategory', $category->slug ) }}" method="POST">
                                              @csrf
                                              <button type="submit" class="btn btn-danger">Delete</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                    </td>
                </tr>
               
              @endforeach		    

          </tbody>
        </table>
        <!-- Category Table End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->


</div><!-- br-section-wrapper -->

@endsection