<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Media name</title>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Bootstrap , fonts & icons  -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./fonts/icon-font/css/style.css">
    <link rel="stylesheet" href="./fonts/typography-font/typo.css">
    <link rel="stylesheet" href="./fonts/fontawesome-5/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="{{asset('./plugins/aos/aos.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="{{asset('./css/main.css')}}">
    <link rel="stylesheet" href="{{asset('./css/userHomepage/media.css')}}">
    <!-- Custom stylesheet -->
    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-100">
    <div>
        @include('navigation-menu')
    </div><br>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-100 overflow-hidden shadow-xl sm:rounded-lg">

                <div class="mt-10" style="text-align: center; font-size: 180%; ">{{$mediaData[0]->mediaName}}</div>

                <div class="wrapperIcon">
                    

                </div>

                <br>

                <div class="o-video ml-5">
                    <iframe src="{{$mediaData[0]->mediaSource}}" allowfullscreen></iframe>
                </div>

                <br>
                
                <div class="ml-20"style="display: inline-block;>
                    <label for="subtitles" style="font-size: 1.1em;">Choose a subtitles:</label>
                    <select id="subtitles"style="font-size: 1.1em;">
                        @foreach($subtitles as $row)
                            <option value="{{$row->subtitle}}">{{$row->subtitle}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="ml-20" style="display: inline-block;">
                    <label for="soundtracks" style="font-size: 1.1em;">Choose a soundtracks:</label>
                    <select id="soundtracks"style="font-size: 1.1em;">
                        @foreach($soundtracks as $row)
                            <option value="{{$row->soundtrack}}">{{$row->soundtrack}}</option>
                        @endforeach
                    </select>
                </div>

                <br><br>

                <div style="text-align: left; font-size: 180%; display:inline-block" class='ml-3'>description
                    <div style="text-align: left; font-size: 80%; width: 600px;
                         overflow: hidden;" class='ml-6 bg-purple-600 bg-opacity-25 mr-6 mb-6'>{{$mediaData[0]->plot}}</div>
                </div>

                @if($mediaData[0]->creator == '0')
                <div style="text-align: left; font-size: 180%; display:inline-block;" class='ml-3'>
                    <div style="text-align: left; font-size: 80%; width: 600px;
                            overflow: hidden;" class='ml-6 bg-opacity-25 mr-6 mb-3'>Director: {{$mediaData[0]->director}}<br>
                        scriptwriter: {{$mediaData[0]->scriptwriter}}</div>
                </div>
                @else
                <div style="text-align: left; font-size: 180%; display:inline-block" class='ml-3'>
                    <div style="text-align: left; font-size: 80%; width: 600px;
                            overflow: hidden;" class='ml-6 bg-opacity-25 mr-6 mb-6'>Creator: {{$mediaData[0]->creator}}<br>
                        Director: {{$mediaData[0]->director}}<br>
                        scriptwriter: {{$mediaData[0]->scriptwriter}}</div>
                </div>
                @endif



                <div style="text-align: left; font-size: 180%; display:inline-block" class='ml-3'>Actor
                    <div style="text-align: left; font-size: 80%; width: 600px;
                         overflow: hidden;" class='ml-6 bg-purple-600 bg-opacity-25 mr-6 mb-6'>{{$mediaData[0]->actor}}</div>
                </div>

                <?php $genreN = '';$genredes = '';?>

                @foreach($genre as $row)
                    <?php $genreN.=$row->genre ?>
                    <?php $genredes.=$row->genreDescription ?>
                @endforeach

                <div style="text-align: left; font-size: 180%; display:inline-block" class='ml-3'>
                    <div style="text-align: left; font-size: 80%; width: 600px;
                            overflow: hidden;" class='ml-6 bg-opacity-25 mr-6 mb-6'>Genre: {{$genreN}}<br>
                        Genre description: {{$genredes}}
                    </div>
                </div>






            </div>
        </div>
    </div>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d6aebf2809.js" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <!-- Vendor Scripts -->
    <script src="js/vendor.min.js"></script>
    <script src="./plugins/aos/aos.min.js"></script>
    <script src="./plugins/menu/menu.js"></script>
    <!-- Activation Script -->
    <script src="js/custom.js"></script>
    <script type="text/javascript" src="{{ asset('js/userHomepage/iconMedia.js') }}"></script>

    <script type="text/javascript">
        var mediaLogID = "<?php echo "$mediaLogID" ?>";
        setInterval(function() {
            $.ajax({headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                method: 'get',
                url: "media/getStatus",
                data: {
                    mediaLogID:mediaLogID
                },
                success: function(data3) {
                    
                    $('.wrapperIcon').html(data3);
                }
            });

        }, 500);
    </script>
</body>

</html>