<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TMTE Video Streaming </title>
  <link rel="shortcut icon" href="image/faviconre.png" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href=" {{asset('./css/mediaAd/fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{asset('./css/mediaAd/cssForm/montserrat-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('./css/mediaAd/fontsForm/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('./css/mediaAd/cssForm/style.css')}}"/>
</head>
<body>
    <div class = "d-flex justify-content-center">
    <body class="form-v10">
	<div class="page-content">
		<div class = "row">
			<div class = " col-xl-">
			</div>
			<div class = "col-xl-11">
			<a href  = "/mediaAd">
				<i class="fas fa-arrow-alt-circle-left fa-3x" id="bluee" ></i>
			</a>
		</div>
	</div>
		<div class="form-v10-content">
			<form class="form-detail" action="/mediaAd/mediaform/addMedia" method="post" id="myform">
			@csrf
				<div class="form-left">
					<h2>General Infomation
					<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Please use , to seperate multi value data">
					<i class="fas fa-info-circle"></i>
					</h2>
					@if(session("success"))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Success!</strong> You can go back to home page.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					@endif
					<div class="form-row">
					<input type="text" name="title" id="title" class="input-text" required>
					<span class="floating-label">Media Title</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="studio" id="studio" class="input-text"  required>
							<span class="floating-label">Studio Name</span>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="creator" id="studio" class="input-text" placeholder="Creator (Optional)">
						</div>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
						<input class="input-text" name="date" type="date" id="example-date-input">
						</div>
						<div class="form-row form-row-2">
							<select name="rating">
								<option value="" disabled selected>Rating</option>
								<option value="G">G</option>
								<option value="PG">PG</option>
								<option value="PG-13">PG-13</option>
								<option value="R">R</option>
								<option value="NC-17">NC-17</option>
							</select>
							<span class="select-btn">
								<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
					<div class="form-row form">
					<textarea class="form-control" id="plot" name = "plot" rows="3" placeholder="Movie Synopsis"></textarea>
					</textarea>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
						<input type="text" name="time" id="time" class="input-text"  required>
						<span class="floating-label">Movie Time in minutes</span>

						</div>
						<div class="form-row form-row-2">
						<select name="type">
								<option value="" disabled selected>Media Type</option>
								<option value="movie">Movie</option>
								<option value="serie">Serie</option>
							</select> 
							<span class="select-btn">
								<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
						<div class="form-row form-row-3">
						<input type="text" name="actor" class="input-text" id="actor" required>
						<span class="floating-label">Actor</span>
						</div>
						<div class="form-row form-row-4">
						<input type="text" name="director" class="input-text" id="director" required>
						<span class="floating-label">Director</span>
						</div>
						<div class="form-row">
						<input type="text" name="scriptwriter" class="input-text" id="scriptwriter" required>
						<span class="floating-label">Screenwriter</span>
					</div>

				</div>
				<div class="form-right">
					<h2>Media Details
					<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Please use , to seperate multi value data">
					<i class="fas fa-info-circle"></i>
					</span>
					</h2>

					<div class="form-row">
						<input type="text" name="sub" class="input-text" id="sub" required>
						<span class="floating-label" id="left-float">Subtitles</span>		</div>
					<div class="form-row">
						<input type="text" name="sound" class="input-text" id="sound" required>
						<span class="floating-label" id="left-float">Soundtrack</span>
					</div>
						<div class="form-row form-row-1">
						<select name="genre">
							    <option value="" disabled selected>Genre</option>
							    <option value="Action">Action</option>
								<option value="Anime">Anime</option>
							    <option value="Comedies">Comedies</option>
							    <option value="Dramas">Dramas</option>		
								<option value="Romantic">Romantic</option>
								<option value="Sports">Sports</option>
								<option value="TV Show">TV Show</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>

						</div>
						<div class="form-row form-row-2">
						<input type="text" name="genreDes" id="genreDes" required>
						<span class="floating-label" id="left-float">Genre Description</span>
						
						</div>
						
					<div class="form-row">
						<input type="text" name="caution" id="caution" placeholder = "Caution (Optional)">
						
					</div>					
					<div class="form-row">
						<input type="text" name="mediaImg" id="mediaImg" required>
						<span class="floating-label" id="left-float">Media Image</span>
					</div>
					<div class="form-row">
						<input type="text" name="mediaSource" id="mediaSource" required>
						<span class="floating-label" id="left-float">Media Source</span>
					</div>

					<div class="form-row-last">
						<div class = "row">
						<input type="submit" name="addMedia" class="register" value="Add media">

					
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
        </div>

</body>
 <script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

</html>