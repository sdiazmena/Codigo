@extends('layouts.nav')

@section('content')
    <!-- Header -->
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead">  Plabooks!  </h1>
                <p class="tagline">  Tu plataforma de creación de ebooks online  </p>
                <p><a class="btn btn-default btn-lg" role="button">Conoce Mas</a> <a class="btn btn-action btn-lg" role="button">Ingresa Ahora!</a></p>
            </div>
        </div>
    </header>
    <!-- /Header -->

    <!-- Intro -->
    <div class="container text-center">
        <br> <br>
        <h2 class="thin">Todo lo que tu necesitas!</h2>
        <p class="text-muted">
            Comienza con nuestra plataforma y ten todas las herramientas que necesitas para publicar tus libros electronicos. Todo desde la web!
        </p>
    </div>
    <!-- /Intro-->
        
    <!-- Highlights - jumbotron -->
    <div class="jumbotron top-space">
        <div class="container">
            
            <h3 class="text-center thin">  Nuestros Servicios  </h3>
            
            <div class="row">
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h3><i class="fa fa-4x fa-check-square-o text-primary sr-icons"></i>Crear</h3></div>
                    <div class="h-body text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h3><i class="fa fa-4x fa-files-o text-primary sr-icons"></i>Editar</h3></div>
                    <div class="h-body text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h3><i class="fa fa-4x fa-rocket text-primary sr-icons"></i>Publicar</h3></div>
                    <div class="h-body text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h3><i class="fa fa-4x fa-cloud-download text-primary sr-icons"></i>Descargar</h3></div>
                    <div class="h-body text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
                    </div>
                </div>
            </div> <!-- /row  -->
        
        </div>
    </div>
    <!-- /Highlights -->

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Registrate gratis y comienza a escribir. YA!</h2>
                <a href="#ingresar" class="btn btn-default btn-xl sr-button">Registrarse!</a>
            </div>
        </div>
    </aside>
   
    <!-- Social links. @TODO: replace by link/instructions in template -->
    <section id="social">
        <div class="container">
            <div class="wrapper clearfix">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_linkedin_counter"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                </div>
                <!-- AddThis Button END -->
            </div>
        </div>
    </section>
    <!-- /social links -->

@endsection
