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
              <th scope="col">Phone Number</th>
              <th scope="col">Address</th>
              <th scope="col">Facebook</th>
              <th scope="col">Youtube</th>
              <th scope="col">Instagram</th>
              <th scope="col">Contact Email</th>
              <th scope="col">Action</th>

            </tr>
          </thead>
          <tbody>
 

              @foreach( $contact as $contacts )
                  <tr>
                    <th scope="row"> {{ $contacts->id }} </th>
                    <td>{{ $contacts->phone_Number }}</td>
                    <td>{{ $contacts->address }}</td>
                    <td>{{ $contacts->Facebook }}</td>
                    <td>{{ $contacts->youtube }}</td>
                    <td>{{ $contacts->instagram }}</td>
                    <td>{{ $contacts->email }}</td>
                    
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('editContact', $contacts->id) }}" class="btn btn-success btn-sm">Update</a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCategory{{ $contacts->id }}">Delete</button>
                        </div>

                  <!-- Modal -->
								<div class="modal fade" id="deleteCategory{{ $contacts->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                          <form action="{{ route('deleteContact', $contacts->id ) }}" method="POST">
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