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
    <!-- @livewireStyles -->
</head>
<body class="font-sans antialiased">

    <div class="bg-gray-100">
        @livewire('navigation-menu')
    </div><br>
    
    <div class="container">
        <h1 class="text-dark">Create a profile</h1><br>

        <form action="{{route('createProfile')}}" method="post">
            @csrf
            <div class="mt-4">
                <label for="profileName">Profile Name</label><br>
                <input type="text" id="profileName" name="profileName" required>
            </div>
            @error('profileName')
                <span class="text-danger my-2">{{ message }}</span>
            @enderror

            <div class="mt-4">
                <label for="language">Language</label><br>
                <select name="language" id="language">
                    <option value="Thai">Thai</option>
                    <option value="English">English</option>
                    <option value="Japanese">Japanese</option>
                </select>
            </div>

            <div class="mt-4">
                <input type="checkbox" id="playNext" name="playNext" value="TRUE" checked>
                <label for="playNext">Play next video</label>
            </div>

            <div class="mt-4">
                <input type="checkbox" id="playTrailer" name="playTrailer" value="TRUE" checked>
                <label for="playTrailer">Play a trailer</label>
            </div>

            <div class="mt-4">
                <input type="checkbox" id="kidUser" name="kidUser" value="TRUE">
                <label for="kidUser">Kid user</label>
            </div>

            <input type="submit" value="Create" class="btn btn-lg btn-outline-primary mt-4">
        </form>
    </div>





    <!-- @livewireScripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>
</html>