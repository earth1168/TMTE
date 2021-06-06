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

</head>

<body id="page-top">

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
                        <h1 class="h3 mb-0 text-gray-800">Media Admin</h1>
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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalMedia}}</div>
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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalMo}}</div>
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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalSe}}</div>
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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalLi}}</div>
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
                                    @foreach($medias as $media)
                                        <tr>
                                            <td>{{$media -> mediaName}}</td>
                                            <td>{{$media -> studioName}}</td>
                                            <td>{{$media -> rating}}</td>
                                            <td>{{$media -> director}}</td>
                                            <td>{{$media -> mediaTime}}</td>
                                            <td>
                                            <i class="fas fa-pen-alt" data-toggle="modal" style="color:#2271dd" data-target="#myModal-{{$media -> id}}"></i>
                                            <i class="fas fa-trash-alt"  data-toggle="modal" style="color:red" data-target="#myModalDelete-{{$media -> id}}"></i>
                                            </td>
                                            
                                              <!-- Modal -->
                                                <div class="modal fade" id="myModal-{{$media -> id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                                                <input type="text" class="form-control"  name="id" value="{{$media -> id}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Media Name</label>
                                                               
                                                                <input type="text" class="form-control" id="title"  name="title" placeholder="{{$media -> mediaName}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Studio</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="{{$media -> studioName}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Rating</label>
                                                                    <select name="rating">
                                                                        <option value="{{$media -> rating}}">{{$media -> rating}}</option>
                                                                        <option value="G">G</option>
                                                                        <option value="PG">PG</option>
                                                                        <option value="PG-13">PG-13</option>
                                                                        <option value="R">R</option>
                                                                        <option value="NC-17">NC-17</option>
                                                                    </select>    
                                                                    </div>
                                                            <div class="form-group">
                                                                <label>Movie Synopsis </label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="{{$media -> plot}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Actor</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="{{$media -> actor}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Date</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="{{$media -> date}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Director</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="{{$media -> director}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Scriptwriter</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="{{$media -> scriptwriter}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Creator</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="{{$media -> creator}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Media type</label>
                                                                    <select name="type">
                                                                        <option value="{{$media -> mediaType}}" >{{$media -> mediaType}}</option>
                                                                        <option value="movie">Movie</option>
                                                                        <option value="serie">Serie</option>
                                                                    </select> 
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Movie Time</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="{{$media -> time}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Media Image</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="{{$media -> mediaImg}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Media Source</label>
                                                                <input type="text" class="form-control"  name="studio" placeholder="{{$media -> mediaSource}}">
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

                                                <div class="modal" tabindex="-1" role="dialog" id="myModalDelete-{{$media -> id}}">
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
                                                                <input type="text" class="form-control"  name="id" value="{{$media -> id}}">
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
                                        @endforeach
                                    </tbody>
                                </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class = "row">
                            <div class = "col-xl-1 col-lg-1">
                                
                            </div>

                            <div class = "col-xl-10 col-lg-4">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <div class = "row">
                                <div class = "col-xl-10 col-lg-4">
                                    <h6 class="m-0 font-weight-bold text-primary">License List</h6>
                                </div>
                                <div class = "col-xl-2 col-lg-1">
                                    <button class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text" data-toggle="modal" data-target="#myModalLicense" >Add License</span>
                                    </button>
                                    <div class="modal fade" id="myModalLicense" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                    <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <div class = "modal-title">
                                                        <h4>Add license</h4>
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
                                                        <form class="form-detail" action="/mediaAd/licenseAdd" method="post" id="myform"> 
                                                        @csrf
                                                            <div class="form-group">
                                                                <label>Media Name</label>
                                                               
                                                                <input type="text" class="form-control" id="title"  name="title">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Country 
                                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Please use , to seperate multi value data">
					                                            <i class="fas fa-info-circle"></i></label>
                                                                <input type="text" class="form-control"  name="country" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Expired Date</label>
                                                                <input class="input-text" name="expire" type="date" id="example-date-input">
                                                            </div>

                                                     </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <input type="submit" class="btn btn-primary" value = "Add license">
                                                        </form>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Media ID</th>
                                            <th>Country</th>
                                            <th>Expiry Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Media ID</th>
                                            <th>Country</th>
                                            <th>Expiry Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($licenses as $license)
                                        <tr>
                                            <td>{{$license -> mediaID}}</td>
                                            <td>{{$license -> country}}</td>
                                            <td>{{$license -> expiredDate}}</td>
                                            <td>
                                            <i class="fas fa-pen-alt" data-toggle="modal" style="color:#2271dd" data-target="#myLicense-{{$license -> id}}"></i>
                                            <i class="fas fa-trash-alt"  data-toggle="modal"  style="color:red"data-target="#myLicenseDelete-{{$license -> id}}"></i>
                                            </td>
                                        </tr>
                                                         <!-- Modal -->
                                                 <div class="modal fade" id="myLicense-{{$license -> id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                    <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <div class = "modal-title">
                                                        <h4>Update data</h4>
                                                        </div>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form class="form-detail" action="/mediaAd/licenseUpdate" method="post" id="myform"> 
                                                        @csrf
                                                            <div class="form-group d-none">
                                                                <label>ID</label>
                                                                <input type="text" class="form-control"  name="id" value="{{$license -> id}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Country</label>
                                                                <input type="text" class="form-control" id="title"  name="country" placeholder="{{$license -> country}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Expiry Date</label>
                                                                <input type="text" class="form-control"  name="expire" placeholder="{{$license -> expiredDate}}">
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

                                                <div class="modal" tabindex="-1" role="dialog" id="myLicenseDelete-{{$license -> id}}">
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
                                                        <form class="form-detail" action="/mediaAd/licenseDelete" method="post" id="myform"> 
                                                        @csrf
                                                        <div class="form-group d-none">
                                                                <label>ID</label>
                                                                <input type="text" class="form-control"  name="id" value="{{$license -> id}}">
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
                                    @endforeach
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

        <script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

        </script>
        <script>
        
$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls form:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
});

        </script>
    
</body>

</html>