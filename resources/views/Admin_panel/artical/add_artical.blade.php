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
          <div class="col-md-9">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Compose New Artical</h3>
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 @if (Session::has('message'))
                   <div class="alert {{ Session::get('class') }}">{{ Session::get('message')  }}
                   </div>
                 @endif 
                <form method="post" action="arical_save">
                  @csrf
                <div class="form-group">
                  <input class="form-control" name="artical_name" placeholder="Artical Name">
                  @if (count($errors) > 0)       
                       @foreach ($errors->get('artical_name') as $error)
                          <p class="text-danger">{{ $error }}</p>
                       @endforeach        
                  @endif
                </div>
                <div class="form-group">
                  <input class="form-control" name="author" value="{{ Session::get('email')}}" readonly>
                </div>
                 <div class="form-group">
                  
                  <select class="form-control" name="cetegory">

                    @if(count($cetegory)> 0 )
                        <option>select Cetegory</option>
                        @foreach($cetegory as $result) 
                        @if($result->status=='1')                    
                        <option>{{$result->name}}</option>
                        @endif
                        @endforeach
              
                    @endif
                  </select>
                </div>
                <div class="form-group">
                   @if (count($errors) > 0)       
                       @foreach ($errors->get('artical_content') as $error)
                          <p class="text-danger">{{ $error }}</p>
                       @endforeach        
                  @endif
                    <textarea id="compose-textarea" class="form-control" style="height:600px" name="artical_content">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                    </textarea>
                </div>
             
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
              </div>
              <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-3">
            <a href="artical_list" class="btn btn-primary btn-block mb-3">Back to Artical List</a>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Folders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item active">
                    <a href="#" class="nav-link">
                      <i class="fas fa-inbox"></i> Inbox
                      <span class="badge bg-primary float-right">12</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-envelope"></i> Sent
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-file-alt"></i> Drafts
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fas fa-filter"></i> Junk
                      <span class="badge bg-warning float-right">65</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-trash-alt"></i> Trash
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Labels</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
             
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
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