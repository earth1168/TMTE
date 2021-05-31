<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
</html>
<body>
    <h1>แบบฟอร์มข้อมูลการชำระเงิน</h1>
    <div class="py-12">
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

            <div class="col-md-2">
                <label for="MMYY" class="form-label">Expired date</label>
                <input type="text" class="form-control" name="MMYY" placeholder = "MM/YY">
            </div>
            @error('MMYY')
                <div class = my-2>
                    <span class="text-danger">{{$message}}</span>
                </div>
            @enderror
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

            @if(session("success"))
                <div class = "col-4">
                    <div class = "alert alert-success">{{session('success')}}</div>
                </div>
            @endif
        </form>
    </div>
</body>
</html>
