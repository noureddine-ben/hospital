<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
          <!-- content-wrapper ends -->
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div style="margin-top: 60px" class="card-body">
                <form class="forms-sample"action="{{url('adminappointment')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">Doctor name:</label>
                    <input style="color: rgb(225, 221, 8);" name="doctorname" type="text" class="form-control" id="exampleInputName1" placeholder="Doctor name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Name:</label>
                    <input style="color: rgb(225, 221, 8);"  name="name1" type="text" class="form-control"  placeholder="Phone:">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Phone:</label>
                    <input style="color: rgb(225, 221, 8);"  name="phone" type="number" class="form-control"  placeholder="Phone:">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Date:</label>
                    <input style="color: rgb(225, 221, 8);"  name="dat" type="date" class="form-control"  placeholder="Phone:">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Note:</label>
                    <input style="color: rgb(225, 221, 8);"  name="message" type="text" class="form-control"  placeholder="Phone:">
                  </div>
                  
                  
                 
                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
              </div>
            </div>
          </div>
            



<!-- partial:partials/_footer.html -->
          <footer class="footer">
            
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>