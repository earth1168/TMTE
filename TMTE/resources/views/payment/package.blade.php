<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Packages</title>
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

        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-100">
        
        <div>
            @livewire('navigation-menu')
        </div><br>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h1 class="m-4 d-flex justify-content-center">Select your package</h1>
                    @foreach($package as $package)
                        <div class="d-flex justify-content-center">
                            <div class="card mb-3" style="width: 550px;">
                                <div class="row g-0" style="background-color: black">
                                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                                        <form action="{{ route('addPackage') }}" method="post">
                                            @csrf
                                            <button type="submit" name="packageID" value="{{ $package->id }}" class="m-3 py-5 text-center btn fs-2 text-white" style="background-color: #E50914; width: 150px;">
                                                {{ $package->packageName }}
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            @if($package->id == 1)
                                                <p class="card-text text-white fs-5">For mobile user</p>
                                            @elseif($package->id == 2)
                                                <p class="card-text text-white fs-5">Fun with basic</p>
                                            @elseif($package->id == 3)
                                                <p class="card-text text-white fs-5">Good time with standard</p>
                                            @elseif($package->id == 4)
                                                <p class="card-text text-white fs-5">Exclusive premium</p>
                                            @endif
                                            <p class="card-text text-white">Price: {{ $package->price }} Bath</p>
                                            <p class="card-text text-white">Resolution: {{ $package->resolution }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <a href="{{ route('viewPayment') }}">
                        <button type="button" value="back" class="btn btn-lg btn-outline-primary mt-4 text-center m-3">Back</button>
                    </a>
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
    </body>
</html>