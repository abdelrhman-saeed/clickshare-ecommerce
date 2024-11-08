

@extends('structure.app')

@section('body')

    <div class="container-fluid rounded p-5 fh default-bg-secondary">
        <div class="row justify-content-between mt-5">
            <!-- left side -->
            <div class="col-5 p-2 position-relative">
                <div class="w-50 position-absolute end-0">
                    <form action="{{route('signin')}}" method="POST">
                        @csrf
                        <h2 class="fw-bold mb-5"> Sign In </h2>

                        <div class="mb-3">
                            <label class="d-block fw-bold mb-1" for="email">Email address</label>
                            <input id="email" type="text" name="email" class="border-0 p-3 w-100">
                                @error('email')
                                    <div class="default-color my-4">
                                        <p> {{$message}} </p>
                                    </div>
                                @enderror
                        </div>

                        <div>
                            <label class="d-block fw-bold mb-1" for="password">Password</label>
                            <input id="password" type="password" name="password" class="border-0 p-3 w-100"/>
                            @error('password')
                                <div class="default-color my-4">
                                    <p> {{$message}} </p>
                                </div>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <input class="global-button text-light fw-bold py-3 w-25 border-0" type="submit" value="Sign In">
                        </div>

                    </form>
                </div
            </div>
        </div>
        <!-- /left side -->

        <!--  right side-->
        <div class="col-6 p-2 position-relative">
            <div class="w-50 position-absolute start-0 border-start border-secondary border-2 ps-5">
                <form action="{{route('signup')}}" method="POST">
                    @csrf
                    <h2 class="fw-bold mb-5"> Sign Up </h2>

                    <div class="mb-3">
                        <label class="d-block fw-bold mb-1" for="name">Name</label>
                        <input id="name" type="text" name="name" class="border-0 p-3 w-100">

                            @error('name')
                                <div class="default-color my-4">
                                    <p> {{$message}} </p>
                                </div>
                            @enderror

                    </div>

                    <div class="mb-3">
                        <label class="d-block fw-bold mb-1" for="email">Email address</label>
                        <input id="email" type="text" name="email" class="border-0 p-3 w-100">

                            @error('email')
                                <div class="default-color my-4">
                                    <p> {{$message}} </p>
                                </div>
                            @enderror

                    </div>

                    <div class="mb-3">
                        <label class="d-block fw-bold mb-1" for="password">Password</label>
                        <input id="password" type="password" name="password" class="border-0 p-3 w-100">

                            @error('password')
                                <div class="default-color my-4">
                                    <p> {{$message}} </p>
                                </div>
                            @enderror

                    </div>

                    <div class="mb-3">
                        <label class="d-block fw-bold mb-1" for="password-confirmation">Password Confirmation</label>
                        <input id="password-confirmation" type="password" name="password_confirmation" class="border-0 p-3 w-100">


                            @error('password_confirmation')
                                <div class="default-color my-4">
                                    <p> {{$message}} </p>
                                </div>
                            @enderror
                    </div>


                    <div class="mt-5">
                        <input class="global-button text-light fw-bold py-3 w-25 border-0" type="submit" value="Sign Up">
                    </div>

                </form>
            </div
        </div>
        <!--  /right side-->
    </div>


@endsection
