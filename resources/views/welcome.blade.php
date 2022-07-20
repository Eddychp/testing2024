<!DOCTYPE html>
<html lang="es">

<head>
    <title>Túpac Amaru</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Pacifico&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="icon" href="./images/tupac.png">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap');
    font-family: 'Roboto Slab', serif;
    body {
        font-family: georgia, times, serif;

    }

    /*Menu*/

    .contacto {
        background-color: #333;
    }

    /* Slider */
    .carousel-inner {
        max-height: 42rem !important;
    }


    /*Mapa*/
    #local {
        margin-top: 50px;
        background-color: #f3f3f3;
        display: flex;
        justify-content: center;
        padding-bottom: 300px;
    }

    .mapa {
        width: 100%;
        height: 500px;
    }


    .wrapper-local {
        width: 50%;
        margin-left: 100px;
        padding-top: 150px;
    }

    /*Ubicación*/

    #numeros-local {
        margin: 0 !important;
        padding: 0 !important;
    }

    #numeros-local div {
        padding: 0 20px 0 0;
        text-align: left;
        height: 48px;
    }

    #numeros-local div:not(:last-child) {
        border-right: 2px solid #3f3f3f;
    }

    #numeros-local div:not(:first-child) {
        padding-left: 20px;
    }

    #numeros-local p {
        margin: 0;
    }

    /*Footer*/

    footer {
        background: #333;
        min-height: 100px;
        ;
    }

    footer p {
        color: #f3f3f3;
        text-align: center;
    }

    #iconos i {
        font-size: 26px;
        padding: 0 8px;
        color: #f3f3f3;
    }

    /* Media Queries */

    @media (max-width:1200px) {

        #intro,
        #acerca {
            width: 90% !important;
            margin: auto;
        }

        #local {
            flex-wrap: wrap;
            padding-top: 30px;
        }

        .wrapper-local {
            width: 90%;
            margin: auto;
            padding-top: 50px;
        }

    }

    @media (max-width:768px) {

        #intro,
        #acerca {
            width: 90% !important;
            margin: auto;
        }

        .wrapper-local {
            width: 90%;
            margin: auto;
            padding-top: 50px;
        }

        #local {
            flex-wrap: wrap;
        }

        #bg-contactos {
            top: -120px;
        }

    }


    @media (max-width: 576px) {
        #productos-fila-2 {
            width: 100% !important;
        }

        #productos-fila-1 {
            width: 100% !important;
        }

        .icono-wrap {
            flex-wrap: wrap !important;
            justify-content: center !important;
            text-align: center;
        }
    }


</style>

<body>
    <header class="container-fluid d-flex justify-content-center contacto" id="contact">
        <p class="text-light mb-0 p-2 fs-6">Contactanos +51 98654126</p>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light p-3" id="menu">
        <div class="container">
            <a class="navbar-brand" href="/iniciar">
                <span class="fs-5 text-primary fw-bold">Acomita2.</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#acerca">Acerca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ubicacion">Ubiquenos</a>
                    </li>
                </ul>
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="btn btn-primary btn-primary-outline-success text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="btn btn-primary btn-primary-outline-success text-sm text-gray-700 dark:text-gray-500 underline">Iniciar Sesión</a>


                        @endauth
                    </div>
                @endif
            </div>

        </div>
    </nav>

    <div class="container">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="https://raw.githubusercontent.com/Cristhian-32/Proyecto-Integrador-Acomita-II-Ciclo3/master/public/images/slider4.jpg"
                        class="d-block w-100" alt="">
                </div>


                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://raw.githubusercontent.com/Cristhian-32/Proyecto-Integrador-Acomita-II-Ciclo3/master/public/images/slider2.jpg"
                        class="d-block w-100" alt="...">
                </div>


                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://raw.githubusercontent.com/Cristhian-32/Proyecto-Integrador-Acomita-II-Ciclo3/master/public/images/slider3.jpg"
                        class="d-block w-100" alt="...">
                </div>


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto"
        id="intro">
        <h1 class="p-3 fs-2 border-top border-3">Plaza Internacional<span class="text-primary"> Túpac Amaru</span>
        </h1>
        <p class="p-3 fs-4">Mercado
            <span class="text-primary">Túpac Amaru</span> donde encontraras todo tipo de productos, desde prendas
            de vestir, calzados, articulos electronicos y mucho más.
        </p>
    </section>

    <section class="w-100" id="productos container">
        <div class="row w-75 mx-auto" id="productos-fila-1">
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
                <img src="https://raw.githubusercontent.com/Cristhian-32/Proyecto-Integrador-Acomita-II-Ciclo3/master/public/images/prendas.png"
                    alt="prendas" width="180" height="160">

                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Prendas de vestir</h3>
                    <p class="px-4">Casacas, pantalones, sacos, camisas, chompas, gorros todo esta y más
                        aquí en tu stand de prendas de vestir.
                    </p>
                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
                <img src="https://raw.githubusercontent.com/Cristhian-32/Proyecto-Integrador-Acomita-II-Ciclo3/master/public/images/calzado.png"
                    alt="calzado" width="180" height="160">

                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Calzado</h3>
                    <p class="px-4">Te ofrecemos una variedad de calzado para todas las edades, calzado deportivo,
                        formal, casual para toda ocación.
                    </p>
                </div>
            </div>
        </div>

        <div class="row w-75 mx-auto mb-5" id="productos-fila-2">
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
                <img src="https://raw.githubusercontent.com/Cristhian-32/Proyecto-Integrador-Acomita-II-Ciclo3/master/public/images/abarrotes.png"
                    alt="abarrotes" width="180" height="160">

                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Abarrotes</h3>
                    <p class="px-4">Encuentra los productos para tu hogas y tu cocina. Te ofrecemos prodcutos al por
                        mayor
                        y menor..</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
                <img src="https://raw.githubusercontent.com/Cristhian-32/Proyecto-Integrador-Acomita-II-Ciclo3/master/public/images/electronico.png"
                    alt="electronico" width="180" height="160">

                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Articulos Electronicos</h3>
                    <p class="px-4">Encuentra los mejores articulos electrónicos, desde auriculares hasta memorias
                        externas para
                        computadora. Además ofrecemos la mejor calidad en equipos para el hogar como Televisores desde
                        62 pulgadas
                        y una amplia variedad de equipo de sonido.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="w-75 m-auto text-center" id="acerca">
            <h1 class="mb-5 fs-1">Te ofrecemos un<span class="text-primary"> servicio de primera</span></h1>
            <p class="fs-4">Acomita2, encuentra todo tipo de productos, desde calzados, prendas de vestir, aborrotes
                en
                general, equipos electrónicos y muchos más. Te ofrecemos en servicio amable y confiable, como también
                nuestro
                stock variado de productos llegados en las ultimas semanas.<br>

                No olvides visitar nuestro stand de comida donde disfrutarás de los platillos únicos y deliciosos... que
                esperás!?
                aproximate ahora. <br> Te esperamos!! </p>
        </div>
        <div class="ratio ratio-16x9 container" autoplay>
            <iframe class="pt-3" width="560" height="315" src="https://www.youtube.com/embed/IG2dsM6vU5k"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

        <div id="local" class="border-top border-2">
            <iframe class="mapa" id="ubicacion"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7689.941476851612!2d-70.13867997331278!3d-15.48600606
                7621531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9167f3ea3bd66659%3A0xc4966a970d6b7316!2sMercado%20Internaciona
                l%20T%C3%BApac%20Amaru!5e0!3m2!1ses!2spe!4v1636999274520!5m2!1ses!2spe"
                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div>
                <div class="wrapper-local">
                    <h2>Ubicado en Juliaca, Puno</h2>
                    <h2 class="text-primary mb-4" id="typewriter"></h2>
                    <p class="fs-5 text-body">No hay mercado más emblemático para la ciudad
                        de Juliaca que el “Túpac Amaru”.
                        El centro comercial es uno de los más tradicionales, pero, sin duda,
                        el más visitado por propios y extraños.
                    </p>
                    <section class="d-flex justify-content-start" id="numeros-local">
                        <div>
                            <p class="text-primary fs-5">56</p>
                            <p>Dias de Sol</p>
                        </div>
                        <div>
                            <p class="text-primary fs-5">100%</p>
                            <p>Aprobado</p>
                        </div>
                        <div>
                            <p class="text-primary fs-5">21 °C</p>
                            <p>Temperatura</p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
        <p class="fs-5 px-3  pt-3">Acomita2. &copy; Todos Los Derechos Reservados 2021</p>
        <div id="iconos">
            <a href="https://www.facebook.com/TUPAC-AMARU-II-1559718421004403/"><i
                    class="icon ion-logo-facebook"></i></a>
            <a href="https://api.whatsapp.com/send?phone=51935166200"><i class="icon ion-logo-whatsapp"></i></a>
            <a href="#"><i class="icon ion-logo-instagram"></i></i></a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
        let app = document.getElementById('typewriter');

        let typewriter = new Typewriter(app, {
            loop: true,
            delay: 75,
        });

        typewriter
            .pauseFor(2500)
            .typeString('La Ciudad de los Vientos')
            .pauseFor(200)
            .deleteChars(10)
            .start();
    </script>

</body>

</html>
