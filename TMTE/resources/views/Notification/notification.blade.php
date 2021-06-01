<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Form Notification</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </head>
  <body>
  <h1>Form Notification</h1>

  <a href="{{route('member')}}">Member</a>
  
    <div class="py-12">
        <form class="row g-3", action ="{{route('sended')}}", method = "Post">
            @csrf


            <div class="col-md-5">
                <label for="Name" class="form-label">Name</label>
                <input type="name" class="form-control"  placeholder = name>
            </div>

            <div class="col-md-3">
                <label for="Name" class="form-label">AdminID</label>
                <input type="name" class="form-control">
            </div>
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
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">UserID</th>
                            <th scope="col">FirstName</th>
                            <th scope="col">LastName</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach($users as $row)
                                <tr>
                                    <td>{{$row -> id}}</td>
                                    <td>{{$row -> firstName}}</td>
                                    <td>{{$row -> lastName}}</td>
                                    <td>{{$row -> role}}</td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Send</button>
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

    