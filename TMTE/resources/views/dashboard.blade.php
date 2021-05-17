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
                    <div class="alert alert-success" role="alert">
                        <h3 class="m-3 text-success">{{ session('success') }}</h3>
                    </div> 
                @endif
                <div class="row">   
                    @if ($profile->count() != 0)    
                        <div class="col">
                            <div class="container">
                                <div class="row">
                                    @foreach ($profile as $profile)
                                        <div class="col-4">
                                            <div class="card m-3" style="width: 20rem; background-color: #4aa96c">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-center">
                                                        <form action="{{ route('userPage') }}" method="post" class="pb-5 text-center btn fs-2">
                                                            @csrf
                                                            <button type="submit" name="profile" value="{{ $profile }}">{{ $profile }}</button>
                                                        </form><br>
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <span>
                                                            <form action="{{ route('editProfile')  }}" method="post" class="text-center btn mx-3" style="background-color: #564a4a;">
                                                                @csrf
                                                                <button type="submit" name="profile" value="{{ $profile }}">EDIT</button>
                                                            </form>
                                                        </span>
                                                        <span>
                                                            <form action="{{ route('dropProfile')  }}" method="post" class="text-center btn mx-3" style="background-color: #f55c47;">
                                                                @csrf
                                                                <button type="submit" name="profile" value="{{ $profile }}">DELETE</button>
                                                            </form>
                                                        </span>
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
                        </div>
                        @else
                            <div class="col">
                                <h2 class="m-3">You don't have any profile yet.</h2>
                            </div>
                        @endif
                </div><br>

                <br>
                <a href="{{ route('profileView') }}">
                    <button type="button" class="btn btn-outline-primary m-3">Create Profile</button>
                </a>

                @if (session('deleteMessage'))
                    <div class="alert alert-danger" role="alert">
                        <h3 class="m-3 text-danger">{{ session('deleteMessage') }}</h3>
                    </div>
                <!-- @elseif (session('editMessage'))
                    <div class="alert alert-warning" role="alert">
                        <h3 class="m-3 text-warning">{{ session('editMessage') }}</h3><br>
                    </div> -->
                @endif

                
                
            </div>
        </div>
    </div>
</x-app-layout>
