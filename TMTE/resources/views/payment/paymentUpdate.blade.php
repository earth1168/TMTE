<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Payment</title>
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
</html>
<body class="font-sans antialiased bg-gray-100">

    <div>
        @livewire('navigation-menu')
    </div><br>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow overflow-hidden shadow-xl sm:rounded-lg">
                @if (session('warningMessage'))
                    <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                        {{ session('warningMessage') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card m-3">
                    <div class="card-header">
                        <h4 class="m-3">Edit your credit card</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action ="{{ url('/paymentEdited') }}" method = "post">
                            @csrf
                            <input type="hidden" id="id" name="id" value="{{ $creditCard->id }}">
                            <div class="col-md-5">
                                <label for="Name" class="form-label">Name</label>
                                <input type="name" class="form-control" name="Name" value="{{ $creditCard->name }}">
                            </div>
                            @error('Name')
                                <div class = my-2>
                                    <span class="text-danger">{{$message}}</span>
                                </div>
                            @enderror

                            <div class="col-md-5">
                                <label for="Lastname" class="form-label">Lastname</label>
                                <input type="lastname" class="form-control" name="LastName" value="{{ $creditCard->lastname }}">
                            </div>
                            @error('LastName')
                                <div class = my-2>
                                    <span class="text-danger">{{$message}}</span>
                                </div>
                            @enderror

                            <div class="col-md-8">
                                <label for="CardID" class="form-label">Card ID</label>
                                <input type="text" class="form-control" name="CardID" placeholder="Card ID" value="{{ $creditCard->card_id }}">
                                <input type="hidden" id="oldCardID" name="oldCardID" value="{{ $creditCard->card_id }}">
                            </div>
                            @error('CardID')
                                <div class = my-2>
                                    <span class="text-danger">{{$message}}</span>
                                </div>
                            @enderror

                            <fieldset class="row mb-2">
                                <div class ="row g-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Type card</legend>
                                <div class="col-sm-10">
                                <div class="form-check">
                                    @if ($creditCard->typecard == "Master Card")
                                        <input class="form-check-input" type="radio" name="gridRadios"  value ="Master Card" checked>
                                    @else
                                        <input class="form-check-input" type="radio" name="gridRadios"  value ="Master Card">
                                    @endif
                                    <label class="form-check-label" for="gridRadios1">
                                        Master Card
                                    </label>
                                </div>
                                <div class="form-check">
                                    @if ($creditCard->typecard == "Visa Card")
                                        <input class="form-check-input" type="radio" name="gridRadios"  value ="Visa Card" checked>
                                    @else
                                        <input class="form-check-input" type="radio" name="gridRadios"  value ="Visa Card">
                                    @endif
                                    <label class="form-check-label" for="gridRadios2">
                                        Visa Card
                                    </label>
                                </div>
                            </div> 
                            </div>   
                            </fieldset>

                            <div class="col-md-2">
                                <label for="CVV" class="form-label">CVV</label>
                                <input type="text" class="form-control" name="CVV" placeholder="CVV" value="{{ $creditCard->cvv }}">
                            </div>
                            @error('CVV')
                                <div class = my-2>
                                    <span class="text-danger">{{$message}}</span>
                                </div>
                            @enderror

                            <?php 
                                $mm = substr($creditCard->mmyy,0,2);
                                $yy = substr($creditCard->mmyy,3,4);
                            ?>

                            <div class="col-md-3">
                                    <label for="MMYY" class="form-label">Expired date(MM/YY)</label>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" name="MM" placeholder = "MM" value="{{ $mm }}">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" name="YY" placeholder = "YY" value="{{ $yy }}">
                                        </div>
                                    </div>
                                </div>
                                @error('MM')
                                    <div class = my-2>
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                @error('YY')
                                    <div class = my-2>
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                            
                            <div class="d-flex justify-content-start">
                                <div class="row">
                                    <div class="col mx-3">
                                        <a href="{{ url('/payment') }}">
                                            <button type="button" value="back" class="btn mt-4 text-white text-center m-3" style="background-color: black;">Back</button>
                                        </a>
                                    </div>
                                    <div class="col mx-3">
                                        <button type="submit" class="btn mt-4 text-white text-center m-3" style="background-color: black;">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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