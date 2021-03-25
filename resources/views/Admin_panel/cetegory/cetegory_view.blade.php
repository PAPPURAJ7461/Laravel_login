<?php echo View::make('includes/header'); ?>

<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Cetegory</h1>
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
                <h3 class="card-title">Compose New Cetegory</h3>
                 <div class="float-right">            
                   <a href="cetegory_list" class="btn btn-success btn-sm">Back to Cetegory List</a> 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <div class="form-group">
                  <input class="form-control" value="{{ $viewdata['0']->name}}"readonly>
                  
                </div>
                <div class="form-group">
                  <input class="form-control" value="{{ $viewdata['0']->author}}" readonly>
                </div>
                 <div class="form-group">
                  <input class="form-control" value="{{ $viewdata['0']->status}}" readonly>
                </div>
                        
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