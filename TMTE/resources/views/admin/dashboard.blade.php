<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    @livewireStyles
</head>

<body class="bg-gray-100">
    <div>
        @livewire('navigation-menu')
    </div><br>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-blue-100 overflow-hidden shadow-xl sm:rounded-lg">
                    @if(session("success"))
                        <div class="alert alert-success" role="alert">
                        <button button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{session('success')}}
                        </div>
                    @endif
                    <h1>temp add media form</h1>
                    <div class="card-body">
                        <form action="{{route('adminAddMedia')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="mediaName">Media name:</label>
                                <input type="text" class="form-contol" name="mediaName">
                                <br><br>

                                <label for="studioName">Studio name:</label>
                                <input type="text" class="form-contol" name="studioName">
                                <br><br>

                                <span style="margin-right: 10px;">Film type:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="mediaType" id="inlineRadio1" value="Series">
                                    <label class="form-check-label" for="inlineRadio1">Series</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="mediaType" id="inlineRadio2" value="Movie">
                                    <label class="form-check-label" for="inlineRadio2">Movie</label>
                                </div>
                                <br><br>
                          
                                <label for="exampleFormControlTextarea1">Plot:</label>
                                <textarea class="form-control" name="plot" id="exampleFormControlTextarea1" rows="3" style="width: 300px;height: 150px;"></textarea>
                                <br><br>

                                <label for="actor">actor name:</label>
                                <input type="text" class="form-contol" name="actor">
                                <br><br>

                                <label for="mediaDate">Media date:</label>
                                <input type="date" name="mediaDate">
                                <br><br>

                                <label for="mediaAppro">Rating:</label>
                                <input type="text" class="form-contol" name="mediaRating">
                                <br><br>

                                <span style="margin-right: 10px;">kid:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kid" id="inlineRadio1" value="Yes">
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kid" id="inlineRadio2" value="No">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <br><br>

                                <label for="totalTime">Total time:</label>
                                <input type="text" class="form-contol" name="totalTime">
                                <br><br>
    
                                <label for="creator">Creator:</label>
                                <input type="text" class="form-contol" name="creator">
                                <br><br>

                                <label for="director">Director:</label>
                                <input type="text" class="form-contol" name="director">
                                <br><br>

                                <label for="scriptwriter">Scriptwriter:</label>
                                <input type="text" class="form-contol" name="scriptwriter">
                                <br><br>

                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Primary</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
 

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
    <script src="./script.js"></script>
</body>

</html>