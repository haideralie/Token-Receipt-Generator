  @extends('admin.master');

@section('content');


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Receipts</h1>

                    
                      <form action="{{ url('/receipt') }}" method="post" >
                       
                        @csrf 


                          <form>

                             <div class="form-group">
                                <label for="exampleInputEmail1">Receipt Title</label>
                                <input type="text"name= "rtitle" class="form-control" placeholder="Enter Receipt Title">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text"name= "cname" class="form-control" placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Father Name</label>
                                <input type="text"name= "cfathername" class="form-control" placeholder="Enter Father Name ">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text"name= "caddress" class="form-control" placeholder="Enter Address">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Contact</label>
                                <input type="text"name= "ccontact" class="form-control" placeholder="Enter Contact Number">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Plot Size</label>
                                <input type="text"name= "psize" class="form-control" placeholder="Enter Plot Size">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Plot Total Price</label>
                                <input type="text"name= "ptotalprice" class="form-control" placeholder="Enter Total Price">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Plot Token Price</label>
                                <input type="text"name= "ptokenprice" class="form-control" placeholder="Enter Token Price">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Block / Sector</label>
                                <input type="text"name= "blocation" class="form-control" placeholder="Enter Block Location">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Plot Description</label>
                                <textarea  name="pdescription" class="form-control">  </textarea>
                            </div>

                          <!-- <div class="form-group">
                                <label for="exampleInputEmail1">image</label>
                                <input type="text"name= "img" class="form-control" placeholder="Enter Receipt Title">
                            </div> 
                          -->
                          
                              <button type="submit" class="btn btn-primary">Submit</button>

                            </form>


          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Generate Receipt</li>
            </ol>
          </div><!-- /.col --> 
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection