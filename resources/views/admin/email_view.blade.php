
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')
      <!-- partial -->
      
      @include('admin.navbar')

<!--  <div class="container-fluid page-body-wrapper">
      <h1>Add Doctor</h1>
</div> -->

  <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

                <!-- add doctor -->

                

          
          <div class="col-12 grid-margin stretch-card" style="float: right;">

            
                <div class="card">
                  <div class="card-body">

                @if(session()->has('message'))
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      
                    </button>
                    {{session()->get('message')}}
                  </div>
                @endif

                    <h4 class="card-title">Add Doctor</h4>
                  
                    <form class="forms-sample" action="{{ url('sendemail',$data->id) }}" method="POST">

                      @csrf

                      <div class="form-group">
                        <label for="exampleInputName1">Greeting</label>
                        <input type="text" name="greeting" class="form-control" id="exampleInputName1" placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Body</label>
                        <input type="text" name="body" class="form-control" id="exampleInputEmail3" required>
                      </div>

                      
                      <div class="form-group">
                        <label for="exampleInputCity1"> Action Text.</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="actiontext" placeholder="Write the room no" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputCity1"> Action Url.</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="actionurl" placeholder="Write the room no" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputCity1"> End Part.</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="endpart" placeholder="Write the room no" required>
                      </div>

                      
                      
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

  


          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © rexdesign</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">admin template</a> from rexdesign.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <!-- container-scroller -->

      @include('admin.script')
      
  </body>
</html>