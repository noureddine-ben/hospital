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
          <div class="col-lg-12 stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Table with contextual classes</h4>
                <div class="table-responsive">
                  <table style="margin-top: 50px" class="table table-primary table-contextual">
                    <thead>
                      <tr>
                        <th> Doctor name </th>
                        <th> phone </th>
                        <th> Name </th>
                        <th> Note </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $datas)
                      <tr class="table-info">
                        
                        <td> {{$datas->doctorname}} </td>
                        <td> {{$datas->phone}} </td>
                        <td> {{$datas->name}} </td>
                        <td> {{$datas->message}} </td>                        
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
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