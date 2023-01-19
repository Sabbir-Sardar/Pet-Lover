@extends('layouts.master')
@section('mainContent')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" Action="{{route('teamCreate')}}" method="post" id="quickForm" enctype="multipart/form-data">
               @csrf
              <div class="card-body">

                <div class="form-group">
                  <label for="exampleInputPassword1">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputPassword1" >

                </div>

                
                <div class="form-group">
                    <label for="exampleInputPassword1">	Designation</label>
                    <input type="text" name="designation" class="form-control" id="exampleInputPassword1" >
  
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">	Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" >
  
                  </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Number</label>
                  <input type="number" name="number" class="form-control" id="exampleInputPassword1" >

                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <input type="text" name="address" class="form-control" id="exampleInputPassword1" >

                </div>

              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection