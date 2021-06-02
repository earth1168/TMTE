<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
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
                <h1 class="m-3">แบบฟอร์มข้อมูลการชำระเงิน</h1>
                <div class="m-3">
                    @if (session('warningMessage'))
                        <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                            {{ session('warningMessage') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                    @endif
                    @if($currentPackage != null) 
                        <div class="d-flex justify-content-center">
                            <h3 class="mb-3">Your current package : {{ $currentPackage->packageName }}</h3>
                        </div>
                    @else
                        <div class="d-flex justify-content-center">
                            <h3 class="mb-3">Your current package : None</h3>
                        </div>
                    @endif
                    <div class="d-flex justify-content-center">
                        <div class="card text-center" style="width: 50rem;">
                            <div class="card-header">
                                <h4 class="m-3">Your credit card</h4>
                            </div>
                            <div class="card-body">
                                @foreach ($payment as $payment)
                                    <?php 
                                        $id = substr($payment->card_id,12,16);;
                                    ?>
                                    <h5 class="card-title">{{ $payment->typecard }}</h5>
                                    <p class="card-text">*************{{ $id }}</p>
                                    <div class="d-flex flex-row justify-content-center">
                                        <form action="{{ route('viewPackage') }}" method="get">
                                            @csrf
                                            <button type="submit" name="selectID" value="{{ $payment->id }}" class="btn btn-primary text-white mx-3" style="background-color: black;">
                                                Select
                                            </button>
                                        </form>
                                        <form action="{{ route('toEditPayment') }}" method="get">
                                            @csrf
                                            <button type="submit" name="editID" value="{{ $payment->id }}" class="btn btn-primary text-white mx-3" style="background-color: black;">
                                                Edit
                                            </button>
                                        </form>
                                        <form action="{{ route('dropCreditCard') }}" method="post">
                                            @csrf
                                            <button type="submit" name="deleteID" value="{{ $payment->id }}" class="btn btn-primary text-white mx-3" style="background-color: #E50914;">
                                                Delete
                                            </button>
                                        </form>
                                    </div><br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card m-3">
                        <div class="card-header">
                            <h4 class="m-3">Or use new credit card</h4>
                        </div>
                        <div class="card-body">
                            <form class="row g-3", action ="{{route('addpayment')}}", method = "Post">
                                @csrf

                                <div class="col-md-5">
                                    <label for="Name" class="form-label">Name</label>
                                    <input type="name" class="form-control" name="Name">
                                </div>
                                @error('Name')
                                    <div class = my-2>
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror

                                <div class="col-md-5">
                                    <label for="Lastname" class="form-label">Lastname</label>
                                    <input type="lastname" class="form-control" name="LastName">
                                </div>
                                @error('LastName')
                                    <div class = my-2>
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror

                                <div class="col-md-8">
                                    <label for="CardID" class="form-label">Card ID</label>
                                    <input type="text" class="form-control" name="CardID" placeholder="Card ID">
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
                                        <input class="form-check-input" type="radio" name="gridRadios" = value ="Master Card" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Master Card
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" = value ="Visa Card">
                                        <label class="form-check-label" for="gridRadios2">
                                            Visa Card
                                        </label>
                                    </div>
                                </div> 
                                </div>   
                                </fieldset>

                                <div class="col-md-2">
                                    <label for="CVV" class="form-label">CVV</label>
                                    <input type="text" class="form-control" name="CVV" placeholder="CVV">
                                    
                                </div>
                                @error('CVV')
                                    <div class = my-2>
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror

                                <div class="col-md-3">
                                    <label for="MMYY" class="form-label">Expired date</label>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" name="MM" placeholder = "MM">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" name="YY" placeholder = "YY">
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
                                            <a href="{{ route('dashboard') }}">
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
