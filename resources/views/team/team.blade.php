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
              <h2 class="card-title">Admin Panel</h2>


              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a type="button" href="{{route('tCreate')}}" class="btn btn-info">Add Team Member</a>
                </div>
              </div>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Image</th>
                    <th>Number</th>
                    <th>Address</th>
                    <th>action</th>

                  </tr>
                </thead>
                <tbody>
               <?php $i=0 ?>
                @foreach ($test as $value)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->designation}}</td>
                        <td><img src="{{ asset($value->image) }}" width="30px"  heigh="20px" alt="no image" /></td>
                        <td>{{$value->number}}</td>
                        <td>{{$value->address}}</td>
                
                        <td><a type="button" href="{{route('teamDelete',$value->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> delete</a>
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