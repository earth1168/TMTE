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
                    <span class="m-3">{{ session('success') }}</span>
                @endif
                <div class="container">
                    @if ($profile->count() != 0)
                        @foreach ($profile as $profile)
                            <a href="">
                                <div class="card m-3" style="width: 20rem; background-color: #4aa96c">
                                    <div class="card-body">
                                        <h4 class="card-title pb-5 text-center text-uppercase text-white">{{ $profile }}</h4><br>
                                        <div class="d-flex justify-content-center">
                                            <span>
                                                <a href="#" class="btn fixed-bottom mx-2" style="background-color: #564a4a">Edit</a>
                                            </span>
                                            <span>
                                                <a href="#" class="btn fixed-bottom mx-2" style="background-color: #f55c47">Delete</a>
                                            </span>
                                        </div>
                                    </div> 
                                </div>
                            </a>
                                
                            
                            <!-- @if ($count == 2)
                                <br>
                            @endif -->

                            <?php
                                $count = $count + 1;
                            ?>
                            
                        @endforeach
                    @else
                        <h2 class="m-3">You don't have any profile yet.</h2>
                    @endif
                </div>
                
                <br>
                <a href="{{route('profileView')}}">
                    <button type="button" class="btn btn-outline-primary btn-lg m-3">Create Profile</button>
                </a>
                
            </div>
        </div>
    </div>
</x-app-layout>
