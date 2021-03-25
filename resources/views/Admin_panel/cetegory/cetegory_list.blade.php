<?php echo View::make('includes/header'); ?>

<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cetegory List</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
              <li class="breadcrumb-item active">Add cetegory</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Compose New Artical</h3>               
                <div class="float-right">            
                   <a href="add_cetegory" class="btn btn-success btn-sm">Add Cetegory</a> 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                 <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Author</th>
                      <th>Status</th>
                      <th></th>           
                    </tr>
                  </thead>
                  <tbody>
                     @if(count($tabledata) > 0)
                  
                      @foreach($tabledata as $result)
                          <tr>
                          <td>{{$result->id}}</td>
                          <td>{{$result->name}}</td>
                          <td>{{$result->author}}</td>
                         
                          <td>
                            @if($result->status=='1')
                            <span class="badge badge-success">Active</span>
                            @else
                            <span class="badge badge-danger">Deactive</span>
                            @endif
                          </td>
                          <td>
                          <button type="button" class="btn btn-dark"><i class="fas fa-eye"></i></button>
                          <button type="button" class="btn btn-info"><i class="fas fa-pencil-alt"></i></button>
                          <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                          </td>
                          </tr>
                                   
                   @endforeach
              
                 @endif
                                                        
                  </tbody>
                </table>
                
            </div>
            <!-- /.card -->
          </div>
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
 <?php echo View::make('includes/footer'); ?>