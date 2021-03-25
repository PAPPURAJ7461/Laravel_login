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
                   @if (Session::has('message'))
                   <div class="alert {{ Session::get('class') }}">{{ Session::get('message')  }}
                   </div>
                 @endif 
                <form method="post" action="artical_update">
                  @csrf
                  <input  type="hidden" name="id"  value="{{  $data['viewdata']['0']->id}}" >
                <div class="form-group">
                  <input class="form-control" name="artical_name" placeholder="Artical Name" value="{{ $data['viewdata']['0']->Name}}">
                   @if (count($errors) > 0)       
                       @foreach ($errors->get('artical_name') as $error)
                          <p class="text-danger">{{ $error }}</p>
                       @endforeach        
                  @endif
                </div>
                <div class="form-group">
                  <input class="form-control" name="author" value="{{  $data['viewdata']['0']->Author}}" readonly>
                </div>
                 <div class="form-group">
                  <select class="form-control" name="cetegory">

                    @if(count($data['cetegory'])> 0 )
                        <option>select Cetegory</option>
                        @foreach($data['cetegory'] as $result) 
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
                     {{ $data['viewdata']['0']->content}}
                    </textarea>
                </div>
             
              </div>
              <!-- /.card-body -->
               <div class="card-footer">
                <div class="float-right">
                
                  <button type="submit" class="btn btn-dark">Update</button>
                </div>
                <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
              </div>
              <!-- /.card-footer -->
              </form>
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