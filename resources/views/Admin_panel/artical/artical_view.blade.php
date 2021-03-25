<?php echo View::make('includes/header'); ?>

<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Artical</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
              <li class="breadcrumb-item active">View Artical</li>
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
                   <a href="artical_list" class="btn btn-success btn-sm">Back To  Artical_list</a> 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">         
               
                  <input  type="hidden" name="id"  value="{{ $viewdata['0']->id}}" >
                <div class="form-group">
                  <input class="form-control" name="artical_name" placeholder="Artical Name" value="{{ $viewdata['0']->Name}}" readonly>
                </div>
                <div class="form-group">
                  <input class="form-control" name="author" value="{{ $viewdata['0']->Author}}" readonly>
                </div>
                 <div class="form-group">
                  <input class="form-control" name="cetegory" value="{{ $viewdata['0']->cetegory}}">
                                  
                 </div>
                <div class="form-group">
                  
                    <textarea id="compose-textarea" class="form-control" style="height:600px" name="artical_content">
                     {{$viewdata['0']->content}}
                    </textarea>
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