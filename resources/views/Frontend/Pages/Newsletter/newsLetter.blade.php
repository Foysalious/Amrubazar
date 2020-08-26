@extends('Backend.template.layout');
@section('main-content')

<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">

         
        <!-- Category Table Start -->
        <table id="tableSorting myTable" class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Email</th>
             

            </tr>
          </thead>
          <tbody>
 

              @foreach( $lead as $leads )
                  <tr>
                    <th scope="row"> {{ $leads->id }} </th>
                    <td>{{ $leads->email }}</td>
                    
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