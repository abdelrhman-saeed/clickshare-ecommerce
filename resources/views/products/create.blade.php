@extends('structure.app')

@section('body')

    <div class="container w-50 rounded mt-5 p-5 default-bg-secondary">
        <div class="row">
            <div class="col-10 p-5 m-auto rounded text-secondary">
                <h3> Create Product </h3>

                <div class="form-container mt-5">
                    <form action="{{route('products.store')}}" method="POST" class="validatable">
                        @csrf

                        <div class="my-4">
                            <label class="d-block fw-bold mb-1" for="name">name</label>
                            <input id="name" type="text" name="name" class="border-0 p-3 w-100 validate required alpha_num">
                                @error('name')
                                    <div class="error-message-container default-color my-4">
                                        <p> {{$message}} </p>
                                    </div>
                                @enderror
                        </div>

                        <div class="my-4">
                            <label class="d-block fw-bold mb-1" for="description">description</label>
                            <textarea id="description" name="description" class="border-0 w-100 p-4 validate required alpha_num"></textarea>
                            @error('description')
                                <div class="default-color my-4">
                                    <p> {{$message}} </p>
                                </div>
                            @enderror
                        </div>

                        <div class="my-4">
                            <label class="d-block fw-bold mb-1" for="price">price</label>
                            <input id="price" type="text" name="price" class="border-0 p-3 w-100 validate required num">
                                @error('price')
                                    <div class="default-color my-4">
                                        <p> {{$message}} </p>
                                    </div>
                                @enderror
                        </div>

                        <div class="my-4">
                            <label class="d-block fw-bold mb-1" for="quantity">quantity</label>
                            <input id="quantity" type="text" name="quantity" class="border-0 p-3 w-100 validate required num">
                                @error('quantity')
                                    <div class="default-color my-4">
                                        <p> {{$message}} </p>
                                    </div>
                                @enderror
                        </div>

                        <div class="my-4 row justify-content-center">
                            <input type="submit" value="save" class="global-button w-50 fw-bold border-0 text-light rounded p-3">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

<script src="{{asset('js/validations.js')}}"></script>
@endsection
