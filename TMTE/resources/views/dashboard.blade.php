<x-app-layout>
    
    <?php
        $count = 1;
    ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->
                <h1 class="m-4">Welcome {{$user->firstName}}</h1>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                @endif
                @if (session('warningMessage'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('warningMessage') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if ($profile->count() != 0)    
                    <div class="container">
                        <div class="row">
                            @foreach ($profile as $profile)
                                <div class="col-4">
                                    <div class="card m-3" style="width: auto; background-color: #4aa96c">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center">
                                                <form action="{{ route('userPage') }}" method="post" >
                                                    @csrf
                                                    <button type="submit" name="profileName" value="{{ $profile }}" class="py-5 text-center btn fs-2">{{ $profile }}</button>
                                                </form>
                                                
                                                <br>
                                            </div>
                                            <div class="d-flex flex-row justify-content-center">
                                                <!-- <div class="dropdown">
                                                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li>
                                                            <form action="{{ route('editProfile')  }}" method="get" >
                                                                @csrf
                                                                <button type="submit" name="profileName" value="{{ $profile }}" class="dropdown-item text-center">EDIT</button>
                                                            </form>
                                                        </li>
                                                        <li>   
                                                            <form action="{{ route('dropProfile')  }}" method="post" class="">
                                                                @csrf
                                                                <button type="submit" name="profileName" value="{{ $profile }}" class="dropdown-item text-center">DELETE</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                <div class="mx-3">
                                                    <div class="col-6"> 
                                                        <form action="{{ route('editProfile')  }}" method="get" >
                                                            @csrf
                                                            <button type="submit" name="profileName" value="{{ $profile }}" class="btn text-center" style="background-color: #564a4a;">EDIT</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="mx-3">
                                                    <div class="col-6">
                                                        <form action="{{ route('dropProfile')  }}" method="post">
                                                            @csrf
                                                            <button type="submit" name="profileName" value="{{ $profile }}" class="btn text-center" style="background-color: #f55c47;">DELETE</button>
                                                        </form>
                                                    </div>
                                                </div>   
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                    
                                @if ($count == 3)
                                    <br>
                                @endif

                                <?php
                                    $count = $count + 1;
                                ?>
                                    
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="col">
                        <h2 class="m-3">You don't have any profile yet.</h2>
                    </div>
                @endif
                <br>

                <br>
                <a href="{{ route('profileView') }}">
                    <button type="button" class="btn btn-outline-primary m-3">Create Profile</button>
                </a>     
            </div>
        </div>
    </div>
</x-app-layout>
