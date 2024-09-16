@extends('templates.master')

@section('content-center')
<div class="container" style="margin-top: 30px; margin-left: 10px; margin-bottom: 30px;">
    <div class="row">
        <div class="col-sm-10">
            <h2>OFERTAS FLASH</h2>
            <div class="container-fluid">
                <div class="row">
                    @foreach($aProduct_offering as $product)
                    <div class="col-sm-2">
                        <a href="product/{{$product->id}}">
                            <div class="card border-0">
                                <img src="{{$product->imgUrl}}" alt="{{$product->name}}">
                                <h5>{{$product->name}}</h5>
                                <h7><del>{{$product->price}}$</del></h7>
                                <h5>{{$product->makeDiscount()}}$</h5>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="container" style="margin-top: 30px;">
                <h3 style="margin-bottom: 10px">NUEVOS PRODUCTOS</h3>
                <div class="row">
                    @foreach($aProduct_new as $product)
                    <div class="col-sm-2">
                        <a href="product1.html">
                            <div class="card border-0">
                                <img src="{{$product->imgUrl}}" alt="{{$product->name}}">
                                <h5>{{$product->name}}</h5>
                                @if($product->HasDiscount())
                                <h5>{{ $product->makeDiscount()  }}$</h5>
                            
                                @else
                                <h5>{{ $product->price }}$</h5>
                                @endif
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-sm-2 sidenav">
            <h2>TENDENCIAS</h2>
            <div class="card card-body bg-faded" style="background-color: #E0FFFF; margin-bottom: 15px;">
                <div class="container">
                    <div class="row">
                        <ol>
                        @foreach($aProduct_offering as $product)
                            <a href="product/{{$product->id}}">
                            <li style="margin: 10px"><img src="{{$product->imgUrl}}" height="100px" /></a></li>
                        @endforeach  
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html>
