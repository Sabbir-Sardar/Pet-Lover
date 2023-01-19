@extends('layouts.master')
@section('mainContent')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
             

            
            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Reservation Start Date</th>
                    <th>Reservation End Date</th>
                    <th>Plan</th>
                    <th>Action</th>
                   
                    

                  </tr>
                </thead>
                <tbody>

               <?php $i=0 ?>
               @foreach ($test as $value)
                  <tr>
                      <td>{{$loop->iteration}} </td>
                      <td>{{$value->name}}</td>
                      <td>{{$value->email}}</td>
                      <td>{{$value->sdate}}</td>
                      <td>{{$value->edate}}</td>
                      <td>{{$value->service}}</td>
                     
                      <td><a type="button" href="{{route('customerDelete',$value->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> delete</a>
                       </td>
                
                  </tr>
               @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->



@endsection