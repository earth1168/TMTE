<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-100">

    <div>
        @include('navigation-menu')
    </div><br>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->
                <h1 class="m-4">Welcome {{$user->firstName}}</h1>
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (session('warningMessage'))
                <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                    {{ session('warningMessage') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if ($payment == null)
                <h2 class="m-4">Sorry, look like your package is out of time</h2>
                <a href="/payment">
                    <button type="button" class="btn m-3 text-white" style="background-color: #E50914;">Continue watching</button>
                </a>
                @elseif ($dateNow->greaterThanOrEqualTo($payment->paymentDate))
                <h2 class="m-3">Sorry, look like your package is out of time</h2>
                <a href="/payment">
                    <button type="button" class="btn m-3 text-white" style="background-color: #E50914;">Continue watching</button>
                </a>
                @else
                @if ($profile->count() != 0)
                <div class="container">
                    <div class="row">
                        @php($i = 1)
                        @foreach ($profile as $profile)
                        <div class="col d-flex justify-content-center">
                            <div class="card my-3" style="width: auto; background-color: #DCDCDC">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <form action="{{ route('userPage') }}" method="post">
                                            @csrf
                                            <button type="submit" name="profileID" value="{{ $profileID }}, {{$i++}}" class="py-5 text-center btn fs-2">{{ $profile }}</button>
                                        </form>

                                        <br>
                                    </div>
                                    <div class="d-flex flex-row justify-content-center">
                                        <div class="mx-3">
                                            <div class="col-6">
                                                <form action="{{ route('editProfile')  }}" method="get">
                                                    @csrf
                                                    <button type="submit" name="profileName" value="{{ $profile }}" class="btn text-center text-white" style="background-color: black;">EDIT</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="mx-3">
                                            <div class="col-6">
                                                <form action="{{ route('dropProfile') }}" method="post">
                                                    @csrf
                                                    <button type="submit" name="profileName" value="{{ $profile }}" class="btn text-center text-white" style="background-color: #E50914;">DELETE</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @else
                <div class="col">
                    <h2 class="m-4">You don't have any profile yet.</h2>
                </div>
                @endif
                <br>
                <br>
                <a href="{{ route('profileView') }}">
                    <button type="button" value="{{ $profileID }}" class="btn m-3 text-white" style="background-color: black;">Create Profile</button>
                </a>
                @endif
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