<x-app-layout>
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
                                                    <form action="{{ route('userPage') }}" method="post" >
                                                        @csrf
                                                        <button type="submit" name="profileID" value="{{ $profileID }}, {{$i++}}" class="py-5 text-center btn fs-2">{{ $profile }}</button>
                                                    </form>
                                                    
                                                    <br>
                                                </div>
                                                <div class="d-flex flex-row justify-content-center">
                                                    <div class="mx-3">
                                                        <div class="col-6"> 
                                                            <form action="{{ route('editProfile')  }}" method="get" >
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
                        <button type="button" class="btn m-3 text-white" style="background-color: black;">Create Profile</button>
                    </a> 
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
