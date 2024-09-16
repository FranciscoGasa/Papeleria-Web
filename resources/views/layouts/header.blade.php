

    <!-- SECTION: Main menu -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a style="margin-left: 10px" class="navbar-brand" href="http://127.0.0.1:8000">Papeleitor3000 </a>
  
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
            <li>
                <form style = "margin-top:10px"class="d-flex form-inline" action="" method="get">
                    <input style="width: 205px" class="form-control mr-sm-2" type="text" name="q" placeholder="Escribe tu búsqueda aquí">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </form>
            </li>
           
        </ul>
        <ul class="navbar-nav ml-0">
        @if (Auth::check())
        <a href="{{ route('user.edit')}}" style="margin-left: 30px"  class="navbar-brand">  usuario : {{Auth::user()->name}}
        </a>
        <a href="{{ route('user.logout')}}" style="margin-left: 20px;margin-right: 20px;"  class="btn btn-primary">  logout
        </a>
         @else 
        <a href="{{ route('login')}}"   class="btn btn-primary" style="margin-left: 40px;margin-right: 20px; " class="navbar-brand">  Autenticarse
        </a>
        @endif
        <a href="{{ route('cart.show')}}" class="btn btn-outline-secondary">
            <img src="http://imgfz.com/i/LEu61UB.png" alt="Carrito de compras" style="height: 30px; width: 30px;">
            @php
                $numElementosCart = session()->get('cart', null);
                $num=($numElementosCart) ? $numElementosCart->iTotalItems: 0;
            @endphp

            @if ($num > 0)
                <h5>{{$num}}</h5>
            @endif
        </a>
        </li>
        
        </ul>
    </div>
</nav>

</header>
