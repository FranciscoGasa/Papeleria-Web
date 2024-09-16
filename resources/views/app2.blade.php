<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Bootstrap JavaScript and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <style>
        .fakeimg { height: 100px; background: #aaa; }
        a {
            text-decoration: none; /* Elimina el subrayado */
        }
        .navbar-nav.ml-0{
        margin-left: auto; /* Empujar hacia la derecha */
    }
    .navbar-nav.mr-auto {
    
}

    </style>

    

    <title>Papeleitor3000</title>
</head>

<body>
    <header>
    <!-- SECTION: Main menu -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a style="padding-left: 10px" class="navbar-brand" href="#">Papeleitor3000</a>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
            <li>
                <form class="d-flex form-inline" action="" method="get">
                    <input style="width: 205px" class="form-control mr-sm-2" type="text" name="q" placeholder="Escribe tu búsqueda aquí">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </form>
            </li>
        </ul>
        <ul class="navbar-nav ml-0">
                <a href="" class="btn btn-outline-secondary">
                    <img src="http://imgfz.com/i/LEu61UB.png" alt="Carrito de compras" style="height: 30px; width: 30px;">
                </a>
        </li>
        </ul>
    </div>
</nav>



@section('content-center')
<!-- LAYOUT: CENTER -->
<div class="container" style="margin-top: 30px; margin-left: 10px; margin-bottom: 30px;">
    <div class="row">
        <!-- BLOCK: LEFT -->
        <div class="col-sm-10">
            <!-- SECTION: About me -->
            <h2>OFERTAS FLASH</h2>
            <div class="container-fluid">
            <div class="row">
                <!-- Product 1 -->
                <div class="col-sm-2">
                    <a href="product1.html">
                        <div class="card border-0">
                            <img src="http://imgfz.com/i/PFSKHXT.png" alt="Product 1">
                            <h5>Cuaderno</h5>
                            <p>$25</p>
                        </div>
                    </a>
                </div>
                <!-- Product 2 -->
                <div class="col-sm-2" style="margin-left: 20px;">
                    <a href="product2.html">
                        <div class="card border-0">
                            <img src="http://imgfz.com/i/BKYvnJ0.png" alt="Product 2">
                            <h5>Pegamento</h5>
                            <p>$2</p>
                        </div>
                    </a>
                </div>
                <!-- Product 3 -->
                <div class="col-sm-2" style="margin-left: 20px;">
                    <a href="product3.html">
                        <div class="card border-0">
                            <img src="http://imgfz.com/i/rDyfO8s.png" alt="Product 3">
                            <h5>3 gomas Milan</h5>
                            <p>$3</p>
                        </div>
                    </a>
                </div>
                <!-- Product 4 -->
                <div class="col-sm-2" style="margin-left: 20px;">
                    <a href="product4.html">
                        <div class="card border-0">
                            <img src="http://imgfz.com/i/5DoA0ey.png" alt="Product 4">
                            <h5>Casio AS-220RTS</h5>
                            <p>$3</p>
                        </div>
                    </a>
                </div>
                <!-- Product 5 -->
                <div class="col-sm-2" style="margin-left: 20px;">
                    <a href="product5.html">
                        <div class="card border-0">
                            <img src="http://imgfz.com/i/lR3Qni6.png" alt="Product 5">
                            <h5>Pack Bolis Bic</h5>
                            <p>$3</p>
                        </div>
                    </a>
                </div>
                </div>
      </div>
            <div style="margin-top: 30px;">
                <!-- SECTION: Some links -->
                <h3 style="margin-bottom: 10px">NUEVOS PRODUCTOS</h3>
                <div class="container-fluid">
                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-sm-2">
                        <a href="new_product1.html">
                            <div class="card border-0">
                                <img src="http://imgfz.com/i/xYc915p.png" alt="New Product 1">
                                <h5>Pack Estudiante</h5>
                                <p>$50</p>
                            </div>
                        </a>
                    </div>
                    <!-- Product 2 -->
                    <div class="col-sm-2" style="margin-left: 20px;">
                        <a href="new_product2.html">
                            <div class="card border-0">
                                <img src="http://imgfz.com/i/C0qh5cy.png" alt="New Product 2">
                                <h5>Pack Dibujo</h5>
                                <p>$20</p>
                            </div>
                        </a>
                    </div>
                    <!-- Product 3 -->
                    <div class="col-sm-2" style="margin-left: 20px;">
                        <a href="new_product3.html">
                            <div class="card border-0">
                                <img src="http://imgfz.com/i/WwSrzpM.png" alt="New Product 3">
                                <h5>Permanentes</h5>
                                <p>$3</p>
                            </div>
                        </a>
                    </div>
                    <!-- Product 4 -->
                    <div class="col-sm-2" style="margin-left: 20px;">
                        <a href="new_product4.html">
                            <div class="card border-0">
                                <img src="http://imgfz.com/i/trkoMEG.png" alt="New Product 4">
                                <h5>Agenda fornite</h5>
                                <p>$3</p>
                            </div>
                        </a>
                    </div>
                    <!-- Product 5 -->
                    <div class="col-sm-2" style="margin-left: 20px;">
                        <a href="new_product5.html">
                            <div class="card border-0">
                                <img src="http://imgfz.com/i/RtDXW6d.png" alt="New Product 5">
                                <h5>Tipex</h5>
                                <p>$3</p>
                            </div>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
@endsection
@section('content-right')
        <!-- BLOCK: RIGHT -->
        <div class="col-sm-2 sidenav">
            <!-- SECTION: Cards -->
            <h2>TENDENCIAS</h2>
            <!-- Style is directly included in the style attribute just for illustrative reasons. -->
            <!-- However, including them in <style> or in a CSS file is a better practice. -->
            <div class="card card-body bg-faded" style="background-color: #E0FFFF; margin-bottom: 15px;">
            <div class=container>
                <div class="row">
                    <ol>
                        <li style="margin: 10px"><a href="trending1.html"><img src="http://imgfz.com/i/xYc915p.png" height="100px" /></a></li>
                        <li style="margin: 10px"><a href="trending2.html"><img src="http://imgfz.com/i/5DoA0ey.png" height="100px" /></a></li>
                        <li style="margin: 10px"><a href="trending3.html"><img src="http://imgfz.com/i/lR3Qni6.png" height="100px" /></a></li>
                        <li style="margin: 10px"><a href="trending4.html"><img src="http://imgfz.com/i/CEcnuOw.jpeg" height="100px" /></a></li>
                    </ol>
                </div>
                </div>
              
            </div>
        </div>
    </div>
</div>
@endsection
</header>

<!-- LAYOUT: FOOTER -->
<footer class="bg-dark text-center text-white">
    <div class="container p-4">
        <section class="mb-4">
            <!-- Social Media Links -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
        </section>
        <section class="mb-4">
            <h3>Acerca de nosotros</h3>
            <p>Somos tu tienda en línea de papelería de confianza, ofreciendo una amplia gama de productos de calidad para tus necesidades escolares y de oficina. ¡Estamos aquí para ayudarte a tener un año exitoso!</p>
        </section>
        <section class="">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Navegacion</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#!" class="text-white">Idioma / languajes</a></li>
                        <li><a href="#!" class="text-white">Mapa del sitio</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Ayuda</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#!" class="text-white">Gestionar compras</a></li>
                        <li><a href="#!" class="text-white">Tarifas y politicas de envío</a></li>
                        <li><a href="#!" class="text-white">Devolver o reemplazar</a></li>
                        <li><a href="#!" class="text-white">Contacto para ayuda</a></li>
                        <li><a href="#!" class="text-white">Metodos de pago</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contacto</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#!" class="text-white">atencion al cliente</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Acerca de</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#!" class="text-white">Trabaja con nosotros 1</a></li>
                        <li><a href="#!" class="text-white">Aviso legal</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">© 2020 Copyright</div>
</footer>

<!-- Loading Javascripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>