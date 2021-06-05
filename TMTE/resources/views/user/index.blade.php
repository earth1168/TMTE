<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Create Profile</title>
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
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="{{asset('./css/main.css')}}">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('./css/userHomepage/style.css')}}">
    <!-- noti icon -->
    <link rel="stylesheet" href="{{asset('./css/userHomepage/notiLayout.css')}}">
    <link rel="stylesheet" href="{{asset('./css/userHomepage/searchbar.css')}}">
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-100">

    <div>
        @livewire('navigation-menu')
    </div><br>
    <span>profile {{$profile}}</span>
    <form class="expanding-search-form">
                <div class="search-dropdown">
                    <button class="button dropdown-toggle" type="button">   
                        <span class="toggle-active">Everything</span>
                        <span class="ion-arrow-down-b"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li class="menu-active"><a href="#">Everything</a></li>
                        <li><a href="#">Movie</a></li>
                        <li><a href="#">Series</a></li>
                    </ul>
                </div>
                <input class="search-input" id="global-search" type="search" placeholder="Search">
                <label class="search-label" for="global-search">
                    <span class="sr-only">Global Search</span>
                </label>
                <button class="button search-button" type="button">
                    <span class="icon ion-search">
                        <span class="sr-only">Search</span>
                    </span>
                </button>
            </form>


    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">

            <div div class="wrapper">
                <div type="button" class="icon-button dropdown-toggle">
                    <span class="material-icons">notifications</span>
                    <span class="icon-button__badge" id="icon_buttonn"></span>
                </div>
                <ul class="dropdown">
                    
                </ul>
            </div>

        
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="thumbSection">
                    <h2 class="thumbTitle">Popular Now</h2>
                    <br>
                    <div class="thumbTiles swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <a class="thumbTile" href="#">
                                    <img class="thumbTile__image" src="https://i.ytimg.com/vi/E_wWsU3mxRI/maxresdefault.jpg" alt="sample1">
                                    <div class="overlay">Sample1</div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a class="thumbTile" href="#">
                                    <img class="thumbTile__image" src="https://image.shutterstock.com/image-vector/online-cinema-art-movie-watching-260nw-586719869.jpg" alt="sample2">
                                    <div class="overlay">Sample2</div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a class="thumbTile" href="#">
                                    <img class="thumbTile__image" src="https://via.placeholder.com/468x500?text=sample3" alt="sample3">
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a class="thumbTile" href="#">
                                    <img class="thumbTile__image" src="https://via.placeholder.com/468x500?text=sample4" alt="sampl4">
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a class="thumbTile" href="#">
                                    <img class="thumbTile__image" src="https://via.placeholder.com/468x500?text=sample5" alt="sample5">
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a class="thumbTile" href="#">
                                    <img class="thumbTile__image" src="https://via.placeholder.com/468x500?text=sample6" alt="sample6">
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a class="thumbTile" href="#">
                                    <img class="thumbTile__image" src="https://via.placeholder.com/468x500?text=sample7" alt="sample7">
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a class="thumbTile" href="#">
                                    <img class="thumbTile__image" src="https://via.placeholder.com/468x500?text=sample8" alt="sample8">
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a class="thumbTile" href="#">
                                    <img class="thumbTile__image" src="https://via.placeholder.com/468x500?text=sample9" alt="sample9">
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a class="thumbTile" href="#">
                                    <img class="thumbTile__image" src="https://via.placeholder.com/468x500?text=sample10" alt="sample10">
                                </a>
                            </div>

                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <br><br>
                </section>
            </div>
        </div>

        <br>
        <br>

        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>asdasd</h1>
            </div>
        </div>
    </div>


    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

    <!-- Vendor Scripts -->
    <script src="js/vendor.min.js"></script>
    <script src="./plugins/aos/aos.min.js"></script>
    <script src="./plugins/menu/menu.js"></script>
    <!-- Activation Script -->
    <script src="js/custom.js"></script>
    <script src="js/userHomepage/slide.js"></script>
    <script src="js/userHomepage/noti.js"></script>
    <script src="js/userHomepage/searchbar.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <!--SweetAlert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        var pID = "<?php echo "$profile" ?>";
        setInterval(function() {
            $.ajax({
                url: "user/noti",
                data: {
                    pID: pID
                },
                success: function(data) {
                    var allNoti = $(data).find(".text-left").length;
                    var seenNoti = $(data).find(".seennoti").length;
                    $('#icon_buttonn').text(allNoti-seenNoti);
                    $('.dropdown').html(data);
                }
            });
        }, 1000);
    </script>


</body>

</html>