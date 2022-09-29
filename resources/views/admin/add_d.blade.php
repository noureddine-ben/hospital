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
                <form class="forms-sample"action="{{url('uplead_doc')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">Doctor name:</label>
                    <input style="color: rgb(225, 221, 8);" name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Doctor name">
                    <span style="color: red">@error('name'){{$message}}@enderror</span>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Phone:</label>
                    <input style="color: rgb(225, 221, 8);"  name="phone" type="number" class="form-control"  placeholder="Phone:">
                    <span style="color: red">@error('phone'){{$message}}@enderror</span>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleSelectGender">Speciality:</label>
                    <select style="color:rgb(225, 221, 8) ;" class="form-control" name="Speciality" id="exampleSelectGender">
                    <option value="skin">skin</option>
                    <option value="heart">heart</option>
                    <option value="eye">eye</option>
                    <option value="nose">nose</option>
                    </select>
                    <span style="color: red">@error('Speciality'){{$message}}@enderror</span>

                  </div>
                  <div class="form-group">
                    <label for="lname">Doctor image:</label><br>
                    <input class="form-control file-upload-info" style="color: black;"  type="file" id="file" name="image">
                    <span style="color: red">@error('image'){{$message}}@enderror</span>

                </div>
                  
                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>
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