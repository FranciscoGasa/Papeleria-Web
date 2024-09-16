@extends('templates.master')

@section('content-center')

    <div class="row">
        @php
     
            $cart = session()->get('cart', null);
            $num = ($cart && is_object($cart) && property_exists($cart, 'htItem') && is_array($cart->htItem)) ? $cart->iTotalItems : 0;
        @endphp

        @if($num > 0)
            @foreach($cart->htItem as $item)
                <div class="col-sm-3 mb-4">
                    <div class="card border-0">
                        <img src="{{ $item['imgUrl'] }}" alt="{{ $item['imgUrl'] }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p class="card-text">Precio: ${{ $item['price'] }}</p>
                            <p class="card-text">Cantidad: {{ $item['quantity'] }}</p>

                            <div class="btn-group" role="group">
                                <a href="{{ route('cart.operate', [ 'operation' => 'remove', 'product' => $item['id'] ]) }}" class="btn btn-primary">
                                    <img src="https://cdn.icon-icons.com/icons2/495/PNG/512/subtract-circle-1_icon-icons.com_48430.png" alt="Restar al carrito" style="height: 20px; width: 20px;"> Restar
                                </a>

                                <a href="{{ route('cart.operate', [ 'operation' => 'add', 'product' => $item['id'] ]) }}" class="btn btn-primary">
                                    <img src="https://cdn-icons-png.flaticon.com/512/107/107075.png" alt="Añadir al carrito" style="height: 20px; width: 20px;"> Añadir
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-sm-12 mt-4">
                <a href="{{ route('cart.operate', [ 'operation' => 'removeAll', 'product' => $item['id'] ]) }}" class="btn btn-danger">
                Eliminar todo
                </a>
            </div>
            <div class="col-sm-12 mt-4">
                <a href="{{ route('cart.operate', [ 'operation' => 'reset', 'product' => $item['id'] ]) }}" class="btn btn-success">
                reset variables
                </a>
            </div>

            <div class="col-sm-12 mt-4">
                <h3>Productos totales: {{ $cart->iTotalItems }}</h3>
                <h3>Precio total: ${{ $cart->dTotalPrice }}</h3>
            </div>
        @else
            <div class="col-sm-12 text-center">
                <p>No hay productos en el carrito.</p>
            </div>
        @endif
    </div>

@endsection
