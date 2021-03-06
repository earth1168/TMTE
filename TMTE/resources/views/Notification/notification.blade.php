<!DOCTYPE html>
  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Notification</title>
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
            <div class="bg-white shadow overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="m-3">Form Notification</h1>
                <h2 class = "text-end"> Hello, {{Auth:: user()-> role}}</h2>
                
                <div class="py-12">
                    <form class="row g-3", action ="{{route('sended')}}", method = "Post">
                        @csrf

                        <div class="col-md-8">
                            <label for="Description" class="form-label">Description</label>
                            <textarea class="form-control" rows="3" name = Description></textarea>
                        </div>
                        @error('Description')
                            <div class = my-2>
                                <span class="text-danger">{{$message}}</span>
                            </div>
                        @enderror
                        

                        <div class = "py-12">
                        <div class = "container">
                            <div class = "row">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Select</th>
                                            <th scope="col">UserID</th>
                                            <th scope="col">Profilename</th>
                                        </tr>
                                    </thead>
                                        
                                    <tbody>
                                        @foreach($profile as $row)
                                            <tr>
                                                <td>
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{$row -> id}}" name = check[]>
                                                <label class="form-check-label" for="check[]" name = check[]>
                                                    select
                                                </label>
                                                </div>
                                                </td>
                                                <td>{{$row -> userID}}</td>
                                                <td>{{$row -> profileName}}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                    {{$profile -> links()}}


                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                                
                                @if(session("alert"))
                                    <div class="col-4">
                                        <div class="alert alert-danger">{{session('alert')}}</div>
                                    </div>
                                @endif

                                @if(session("success"))
                                    <div class = "col-4">
                                        <div class = "alert alert-success">{{session('success')}}</div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        </div>   
                    </form>
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

    