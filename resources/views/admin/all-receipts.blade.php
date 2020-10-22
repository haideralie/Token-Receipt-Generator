  @extends('admin.master');

@section('content');


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Receipts</h1>

               <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Receipt Title</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Customer Fathername</th>
                    <th scope="col">Customer Address</th>
                    <th scope="col">Customer Contact</th>
                    <th scope="col">Plot Size</th>
                    <th scope="col">Plot Totalprice</th>
                    <th scope="col">Plot Tokenprice</th>
                    <th scope="col">Block Location</th>
                    <th scope="col">Plot Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>


                  @foreach($receipts_data as $receipts)

                  <tr>
                    
                    <td>{{ $receipts['receipt_title'] }}</td>
                    <td>{{ $receipts['customername'] }}</td>
                    <td>{{ $receipts['customerfathername'] }}</td>

                    <td>{{ $receipts['customeraddress'] }}</td>
                    <td>{{ $receipts['customercontact'] }}</td>
                    <td>{{ $receipts['plot_size'] }}</td>

                    <td>{{ $receipts['plot_totalprice'] }}</td>
                    <td>{{ $receipts['plot_tokenprice'] }}</td>
                    <td>{{ $receipts['block_location'] }}</td>

                    <td>{{ $receipts['plot_description'] }}</td>
                    <td>{{ $receipts['image'] }}</td>

                    <td><a href="" class= "btn btn-primary" > Edit </a></td>
                    <td><a href="/delete/{{ $receipts ['id'] }}" class= "btn btn-danger" >Delete </a></td>
                  </tr> 

                  @endforeach
                
                </tbody>
              </table>     


                      


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