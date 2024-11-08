@extends('structure.app')

@section('body')


<div class="fh w-75 rounded mt-5 m-auto p-5 default-bg-secondary">

    <h3> Products: {{$products->count()}} </h3>
    <a href="{{route('products.create')}}" class="btn default-bg px-4 my-2 text-light text-decoration-none"> Add </a>

    <div class="row justify-content-between">

        @foreach($products as $product)
            <div class="card col-3 p-4 mx-1">
                <img class="card-img-top" src="https://dummyimage.com/383x180/000/fff" alt="Card image cap">

                <div class="card-body px-0">
                    <h5 class="card-title text-secondary">name: {{$product->name}}</h5>

                    <div class="action-btns row justify-content-around">
                        <button class="btn global-button show-product-details text-light col-3">Details</button>

                        <button class="btn btn-primary text-light col-3">
                            <a href="{{route('products.edit', $product->id)}}" class="text-light text-decoration-none">Update</a>
                        </button>

                        <button class="btn btn-danger text-light col-3">
                            <form action="{{route('products.destroy', $product->id)}}" method="POST">
                                @csrf
                                @method('delete')

                                <input class="bg-transparent border-0 text-light" type="submit" value="Delete">
                            </form>
                        </button>
                    </div>

                    <div class="d-none product-details p-2 border border-3 rounded my-3 default-border-color">
                        <div class="numeric-data mb-3 row justify-content-between">
                            <small class="text-muted col">Price: {{$product->price}}</small>
                            <small class="text-muted col">Quantity: {{$product->quantity}}</small>
                        </div>
                        <p class="card-text text-secondary">Description: {{$product->description}}</p>
                    </div>
                </div>

                <div class="card-footer">
                    <small class="text-muted d-block">Created: {{$product->created_at}}</small>
                    <small class="text-muted d-block">Updated: {{$product->updated_at}}</small>
                </div>

            </div>

            @endforeach
        </div>

        <div>
            <p> {{ $products->links() }} </p>
        </div>

</div>


<script>
    $(".show-product-details").click(function () {
        $(this).parent().siblings('.product-details').toggleClass('d-none');
    });
</script>

@endsection
