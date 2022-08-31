<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUDICME</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" href="{{ asset('img/ICONLUC.png') }}">
    <!-- CSS only -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.2/dist/boxicons.js' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>


<body>

    <div class="container_global">

        <!-- MEMU -->
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#"><img src="{{ asset('img/favicon.ico') }}" alt="Logo_ludicme"
                        id="logo"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#about">¿PARA QUIÉN?</a>
                            <ul class="menu-vertical">
                                <li><a href="#">FORMADOR COACH</a></li>
                                <li><a href="#">LIDER DE BIENESTAR</a></li>
                                <li><a href="#">DESARROLLO HUMANO</a></li>
                                <li><a href="#">DOCENTE </a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="#fc5">¿POR QUÉ LUDIC ME?</a></li>&nbsp;
                        <li class="nav-item"><a class="nav-link" href="#Contactanos">CONTÁCTANOS</a></li>&nbsp;
                        <li class="nav-item"><a class="nav-link" href="/demo/register" id="valori">
                                VALORILAND
                                &nbsp;</a></li>

                    </ul>

                </div>
            </div>
        </nav>
        <!--END MENU-->

        <!--CARRUSEL-->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>

            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active" id="fc1">
                    <img src="{{ asset('img/Ludicme.png') }}" alt="Ludicme" class="d-block w-100">
                </div>
                <div class="carousel-item" id="fc2">
                    <img src="{{ asset('img/divertida.png') }}" alt="Ludicme_2" class="d-block w-100">
                </div>

            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!--END-CARRUSEL-->


        <!--CUERPO DE LA PAGINA-->
        <!--MISION Y VISION-->
        <section class="fc3" id="vision">


            <p>Ser los proveedores de experiencias lúdicas y de gamificación para el aprendizaje más grandiosos de
                Latinoamérica; conectando a cada persona con herramientas motivantes, creativas y divertidas que
                edifiquen su vida desde su <b>SER</b> hacia el <b>HACER.</b></p>
            <img src="{{ asset('img/img_2/web3.png') }}" alt="vision" class="d-block w-100">
        </section>
        <section class="fc4" id="Mision">

            <p>Creando gran variedad de herramientas lúdicas digitales personalizables que puedas adaptar a cualquier
                tipo de público y entorno (presencial, digital o mixto); y creando un ecosistema colaborativo para
                que
                usuarios de todo el mundo puedan promover sus creaciones y recursos didácticos de acuerdo con su
                área de
                experticia.</p>
            <img src="{{ asset('img/img_2/web4.png') }}" alt="mision" class="d-block w-100">
        </section>
        <!--END MISION Y VISION-->

        <!--INTERACCION, CREATIVIDAD, PERSONALIZACION-->

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

            <div class="carousel-inner" id="fc5">
                <div class="carousel-item active" id="fc5">

                    <h1 id="fantastic"><b>LO MÁS<br>
                            FANTASTICO</b> <br>DE NOSOSTROS</h1>
                    <p>Notarás que la interacción con tu audiencia se incrementará hasta las nubes, y que comenzarán a
                        esperar cada sesión o clase contigo, con una gran expectativa y emoción. <b>¡Tienes que probar
                            esto!</b></p>

                    <img src="{{ asset('img/img_2/iteraccion.png') }}" alt="creatividad" class="d-block w-100"
                        id="mascontenido">

                </div>
                <div class="carousel-item" id="fc5">


                    <h1 id="fantastic"><b>LO MÁS<br>
                            FANTASTICO</b> <br>DE NOSOSTROS</h1>
                    <p>Tienes la posibilidad de <B>PERSONALIZAR</B> cada aventura de acuerdo a tus gustos y necesidades
                        de tus usuarios o clientes (historias intros, mensajes de los personajes, presentaciones, reglas
                        e items), de tal manera que podrás ser el <b>guionista</b> en todo.</p>


                    <img src="{{ asset('img/img_2/personaliza.png') }}" id="creatividad" alt="valoriland_1"
                        class="d-block w-100">

                </div>
                <div class="carousel-item" id="fc5">

                    <h1 id="fantastic"><b>LO MÁS<br>
                            FANTASTICO</b> <br>DE NOSOSTROS</h1>
                    <p>Te enseñaremos a desarrollar de manera sencilla tu <b>“YO CREATIVO”</b>, de tal manera que
                        aprendas a crear herramientas lúdicas desde “0” de acuerdo a tu carácter, personalidad gustos y
                        públicos. <b>“TODOS SOMOS CREATIVOS”</b></p>

                    <img src="{{ asset('img/img_2/creatividad.png') }}" id="creatividad" alt="valoriland_1"
                        class="d-block w-100">

                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <section class="fc6" id="Contactanos">
            <h1><b>AGENDA TU CITA</b></h1>
            <img src="{{ asset('img/img_2/web5.png') }}" class="d-block w-100">
            <p id="p2">Dejanos tu opinión con respecto <br>a nustros juegos <br>
                Y haz parte de este proceso.</p>

            <p>Si manejas procesos de bienestar o formación a nivel empresarial, o procesos educativos en escuelas,
                corporaciones, puedes solicitar una asesoría de 1 hora con nosotros completamente gratis.</p>
            <p id="p2">Dejanos tu opinión con respecto <br>a nustros juegos <br>
                Y haz parte de este proceso.</p>
            <p id="h2">COMENTA:</p>
            <input type="text" name="" id="comenta">
            <button type="submit" class="btn_2"><i class='bx bxs-right-arrow'></i></button>


            <button type="submit" class="btn_1">CLICK PARA AGENDAR AHORA</button>
     
        </section>







    </div>

    {{-- <a href="/demo/register ">DEMO</a> --}}

    <!--end Image-->





    <!--FINAL DEL CUERPO DE LA PAGINA-->



    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

{{-- <li><a href="#">¿PARA QUIÉN?</a></li>
<li><a href="#">¿POR QUÉ LUDIC ME?</a></li>
<li><a href="#">CONTÁCTANOS</a></li>
<li><a href="#">PLANES Y LANZAMIENTOS</a></li>
</ul> --}}
{{-- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; --}}
{{-- <i class='bx bx-align-middle'></i> --}}
{{-- mockup --}}
