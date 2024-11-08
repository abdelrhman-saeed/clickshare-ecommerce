
@extends('structure.app')

@section('body')

    <div class="container-fluid rounded p-5 fh default-bg-secondary">
        <div class="row">
            <!-- left side -->
            <div class="welcome-message col-7 p-5 border border-5 default-border-color rounded">
                <!-- message -->
                <p class="message display-6 lh-base text-secondary">
                    At "ClickShare," we work diligently to always be the optimal choice in the world of commerce.
                </p>
                <!-- /message -->

                @guest
                    <!-- buttons -->
                    <div class="buttons row text-center">

                        <a class="w-25 py-3 global-button text-decoration-none text-light fw-bold rounded border-0"
                            href="{{ route('signing') }}"> Log in <span class="text-light mx-4">|</span> Register
                        </a>

                    </div>
                    <!-- /buttons -->
                @endguest
            </div>
            <!-- /left side -->
        </div>
    </div>


@endsection
