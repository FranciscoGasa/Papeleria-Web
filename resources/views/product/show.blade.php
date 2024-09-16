@extends('templates.master')

@section('content-center')
@foreach ($errors->all() as $sError)
 <div class="alert alert-warning">{{ $sError }}</div>
 @endforeach
    <div class="col-sm-6 ">
        <div class="card border-0">
            <img src="{{ $product->imgUrl }}" alt="{{ $product->name }}" class="card-img-top">

            <div class="card-body">
                <h1 class="card-title">{{ $product->name }}</h1>

                @if($product->hasDiscount())
                    <h7><del>${{ $product->price }}</del></h7>
                    <h3>${{ $product->makeDiscount() }}</h3>
                @else
                    <h5>${{ $product->price }}</h5>
                @endif

                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text"><small class="text-muted">{{ $product->company->name }}</small></p>

                <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">
                    <img src="https://cdn-icons-png.flaticon.com/512/1/1393.png" alt="Añadir al carrito" style="height: 20px; width: 20px; margin-right: 5px;">
                    Añadir al carrito
                </a>
                @if (Illuminate\Support\Facades\Auth::check() && \App\Models\User::isEditor(Illuminate\Support\Facades\Auth::user())) 
                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">
                    <img src="https://cdn-icons-png.flaticon.com/512/1/1393.png" alt="Añadir al carrito" style="height: 20px; width: 20px; margin-right: 5px;">
                    Editar producto
                </a>
                @endif
            </div>
        </div>
    </div>

@endsection
