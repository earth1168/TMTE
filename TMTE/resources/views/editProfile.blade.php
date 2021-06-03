<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
                
                <div class="container">
                    
                    @if (session('warningMessage'))
                        <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                            {{ session('warningMessage') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="d-flex justify-content-center">
                        <div class="card m-3" style="width: 50rem;">
                            <div class="card-header">
                                <div class="d-flex justify-content-center">
                                    <div class="text-dark fs-1">Edit a profile</div><br>
                                </div>  
                            </div>
                            <div class="card-body">
                                <form action="{{ route('edit') }}" method="post">
                                    @csrf
                                    <div class="mt-4">
                                        <label for="profileName">Profile Name</label><br>
                                        <input type="text" id="profileName" name="profileName" value="{{ $query->profileName }}">
                                        <input type="hidden" id="oldProfileName" name="oldProfileName" value="{{ $query->profileName }}">
                                    </div>
                                    @error('profileName')
                                        <span class="text-danger my-2">{{ message }}</span>
                                    @enderror

                                    <div class="mt-4">
                                        <label for="language">Language</label><br>
                                        <select name="language" id="language">
                                            @if ($query->language == "Thai")
                                                <option value="Thai" selected>Thai</option>
                                            @else
                                                <option value="Thai">Thai</option>
                                            @endif
                                            @if ($query->language == "English")
                                                <option value="English" selected>English</option>
                                            @else
                                                <option value="English">English</option>
                                            @endif
                                            @if ($query->language == "Japanese")
                                                <option value="Japanese" selected>Japanese</option>
                                            @else
                                                <option value="Japanese">Japanese</option>
                                            @endif
                                        </select>
                                    </div>

                                    <div class="mt-4">
                                        @if  ($query->playNext)
                                            <input type="checkbox" id="playNext" name="playNext" value="TRUE" checked>
                                        @elseif (!$query->playNext)
                                            <input type="checkbox" id="playNext" name="playNext" value="TRUE">
                                        @endif
                                        <label class="mx-3 for="playNext">Play next video</label>
                                    </div>

                                    <div class="mt-4">
                                        @if  ($query->playTrailer)
                                            <input type="checkbox" id="playTrailer" name="playTrailer" value="TRUE" checked>
                                        @elseif (!$query->playTrailer)
                                            <input type="checkbox" id="playTrailer" name="playTrailer" value="TRUE">
                                        @endif
                                        <label class="mx-3 for="playTrailer">Play a trailer</label>
                                    </div>

                                    <div class="mt-4">
                                        @if  ($query->kidUser)
                                            <input type="checkbox" id="kidUser" name="kidUser" value="TRUE" checked>
                                        @elseif (!$query->kidUser)
                                            <input type="checkbox" id="kidUser" name="kidUser" value="TRUE">
                                        @endif
                                        <label class="mx-3 for="kidUser">Kid user</label>
                                    </div>

                                    <a href="{{ route('dashboard') }}">
                                        <button type="button" value="back" class="btn mt-4 text-center text-white m-3" style="background-color: black">Back</button>
                                    </a>
                                    <button type="submit" value="Edit" class="btn mt-4 text-center text-white m-3" style="background-color: black">Edit</button>
                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

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