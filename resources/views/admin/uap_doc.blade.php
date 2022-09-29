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
                @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

                <form class="forms-sample"  action="{{url('updaet_doc',$id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">Doctor name:</label>
                    <input style="color: rgb(225, 221, 8);" name="name" type="text" class="form-control" id="exampleInputName1" value="{{$upd->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Phone:</label>
                    <input style="color: rgb(225, 221, 8);"  name="phone" type="tel" class="form-control"  value="{{$upd->phone}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleSelectGender">Speciality:</label>
                    <select style="color:rgb(225, 221, 8);" class="form-control" name="Speciality" id="exampleSelectGender">
                    <option hidden selected value="{{$upd->Speciality}}">{{$upd->Speciality}}</option>
                    <option value="skin">skin</option>
                    <option value="heart">heart</option>
                    <option value="eye">eye</option>
                    <option value="nose">nose</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="lname">Doctor image:</label><br>
                    <div class="docimage">
                    <img src="../images/{{$upd->image}}" alt="" style="width:300px">
                </div>
                    <input class="form-control file-upload-info" style="color: black;"   type="file" id="file" name="image">
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