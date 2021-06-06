<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TMTE Video Streaming</title>

    <!-- Custom fonts for this template-->
    <link href=" {{asset('./css/mediaAd/fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('./css/mediaAd/admin-2.min.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
   
    


    @livewireStyles

</head>

<body id="page-top">

    <div>
        @livewire('navigation-menu')
    </div><br>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                    </div>

                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Number of Media</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-photo-video fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Number of Movies</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-film fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Number of Series</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">1}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tv fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Number of Licenses</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-scroll fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class ="row">
                    <div class="col-xl-2 col-lg-1">
                    </div>

                    </div>



                    <div class = "row">
                        <div class = "col-xl-1 col-lg-1">
                            
                        </div>
                        <div class = "col-xl-10 col-lg-4">
                        <!-- DataTales  -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class = "row">
                                <div class = "col-xl-10 col-lg-4">
                                    <h6 class="m-0 font-weight-bold text-primary">Media List</h6>
                                </div>
                                    <div class = "col-xl-2 col-lg-1">
                                    <a href = "/mediaAd/mediaform" type = "button"  class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Add Media</span>
                                    </a>
                                
                                    </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Studio</th>
                                            <th>Rating</th>
                                            <th>Director</th>
                                            <th>Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                 
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>
                                            <i class="fas fa-pen-alt" data-toggle="modal" style="color:#2271dd" data-target="#myModal"></i>
                                            <i class="fas fa-trash-alt"  data-toggle="modal" style="color:red" data-target="#myModalDelete"></i>
                                            </td>
                                            
                                              <!-- Modal -->
                                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                    <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <div class = "modal-title">
                                                        <h4>Update data</h4>
                                                        </div>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @if(session("success"))
                                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                                <strong>Success!</strong> You can go back to home page.
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                          @endif 
                                                        <form class="form-detail" action="/mediaAd/mediaUpdate" method="post" id="myform"> 
                                                        @csrf
                                                            <div class="form-group d-none">
                                                                <label>ID</label>
                                                                <input type="text" class="form-control"  name="id" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Media Name</label>
                                                               
                                                                <input type="text" class="form-control" id="title"  name="title" placeholder="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Studio</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Rating</label>
                                                                    <select name="rating">
                                                                        <option value="">1</option>
                                                                        <option value="G">G</option>
                                                                        <option value="PG">PG</option>
                                                                        <option value="PG-13">PG-13</option>
                                                                        <option value="R">R</option>
                                                                        <option value="NC-17">NC-17</option>
                                                                    </select>    
                                                                    </div>
                                                            <div class="form-group">
                                                                <label>Movie Synopsis </label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Actor</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Date</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Director</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Scriptwriter</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Creator</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Media type</label>
                                                                    <select name="type">
                                                                        <option value="1" ></option>
                                                                        <option value="movie">Movie</option>
                                                                        <option value="serie">Serie</option>
                                                                    </select> 
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Movie Time</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Media Image</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Media Source</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="">
                                                            </div>
                                                        
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <input type="submit" class="btn btn-primary" value = "Save changes">
                                                        </form>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="modal" tabindex="-1" role="dialog" id="myModalDelete">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Delete Media</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <h6>Are you sure to delete data? </h6>
                                                        <form class="form-detail" action="/mediaAd/mediaDelete" method="post" id="myform"> 
                                                        @csrf
                                                        <div class="form-group d-none">
                                                                <label>ID</label>
                                                                <input type="text" class="form-control"  name="id" value="">
                                                            </div>
                                                       
                                                        
                                                        </div>
                                                        <div class="modal-footer">
                                                        <input type="submit" class="btn btn-danger" value = "Delete">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                        </form>
                                                        </div>
                                                    </div>
                                                    </div>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>

            
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Core plugin JavaScript-->
    <script src="{{asset('./css/mediaAd/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('./css/mediaAd/js/sb-admin-2.min.js')}}"></script>

      <!-- Page level plugins -->
      <script src="{{asset('./css/mediaAd/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('./css/mediaAd/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('./css/mediaAd/js/demo/datatables-demo.js')}}"></script>



  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>


    @livewireScripts
</body>

</html>