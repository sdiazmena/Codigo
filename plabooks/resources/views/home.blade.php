@extends('layouts.nav')

@section('content')
<header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">
     
        <div class="row">
            
            <!-- Sidebar -->
            <aside class="col-md-4 sidebar sidebar-left">

            <hr>
            <div class="container" style="margin-top: 60px;">
                <button class="btn btn-primary" data-toggle="modal" data-target="#ventana"><i class="fa fa-file-text" aria-hidden="true"> Crear Nuevo Ebooks</i>                  
                </button>
                <div class="modal fade" id="ventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4> Crear Nuevo Ebooks </h4>
                            </div> 
                            <div class="modal-body">
                                {!! Form::open(['route' => 'crear.ebooks.store', 'method' => 'POST']) !!}
                                   <div class="form-group">
                                       {!! Form::label('name', 'Nombre') !!}
                                       {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
                                   </div>
                                   <div class="form-group">
                                       {!! Form::label('descripcion', 'Descripción') !!}
                                       {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripcion del texto', 'required']) !!}
                                   </div>
                                   <div class="form-group">
                                       {!! Form::label('category', 'Categoria') !!}
                                       {!! Form::select('category',['' => 'Seleccione una categoria...'], null, ['class' => 'form-control']) !!}
                                   </div>       
                                   <div class="form-group">
                                       {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                                   </div>
                                {!! Form::close() !!}
                            </div>  

                        </div>
                    </div>
                </div>
            </div>
          

            
            <hr>
                <div class="row widget">
                    <div class="col-xs-12">
                        <h4>Lorem ipsum dolor sit</h4>
                        <p><img src="images/2.jpg" alt=""></p>
                        <p>Qui, debitis, ad, neque reprehenderit laborum soluta dolor voluptate eligendi enim consequuntur eveniet recusandae rerum? Atque eos corporis provident tenetur.</p>
                    </div>
                </div>

            </aside>
            <!-- /Sidebar -->

            <!-- Article main content -->
            <article class="col-md-8 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Lorem ipsum dolor sit amet, consectetur.</h1>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, itaque, cumque, maxime obcaecati reprehenderit ea dignissimos amet voluptatem id excepturi facilis totam veritatis maiores eveniet neque explicabo temporibus quisquam in ex ab fugiat ipsa tempore sunt corporis nostrum quam illum!</p>
                <p>Consectetur cupiditate labore repudiandae beatae nisi fugiat facilis natus illum vitae doloremque. In, perspiciatis, natus, impedit voluptas itaque odio repudiandae placeat nisi totam repellendus earum dolores mollitia tempore quasi beatae alias cum dicta maxime laborum corporis harum porro magnam laboriosam.</p>
                <p>Aut, eaque, minus atque alias odio mollitia cum nisi ipsa nulla natus quae minima similique ipsam aspernatur molestias animi in deleniti nam. Tempora, labore, modi eum perspiciatis doloremque sequi nam illo corporis iusto maiores nisi recusandae repellat animi reiciendis accusamus.</p>

                <h2>A, quibusdam, nobis, eveniet consequatur</h2>
                <p>A, quibusdam, nobis, eveniet consequatur alias doloremque officia blanditiis fuga et numquam labore reiciendis voluptas quis repellat quos sunt non dolore consectetur at sit nam tenetur dolorem? Harum, quas, sit perspiciatis esse odit temporibus aperiam nulla aspernatur sequi fugiat tempore?</p>
                <p>Ad velit consequuntur quo qui odit quam sapiente repudiandae et ea pariatur? Ex sapiente beatae nobis consectetur ea. Deleniti, beatae, magnam, dolorum, fuga nostrum quas laboriosam sapiente temporibus enim voluptates ullam impedit atque quae provident quos mollitia aperiam perferendis amet.</p>

                <blockquote>Numquam, ut iure quia facere totam quas odit illo incidunt. Voluptatem, nostrum, ex, quasi incidunt similique cum maxime expedita unde labore inventore excepturi veniam corporis sequi facere ullam voluptates amet illum quam fuga voluptatibus ipsum atque sunt eos. Ut, necessitatibus.</blockquote>
                <p>Odit, laudantium, dolores, natus distinctio labore voluptates in inventore quasi qui nobis quis adipisci fugit id! Aliquam alias ea modi. Porro, odio, sed veniam hic numquam qui ad molestiae sint placeat expedita? Perferendis, enim qui numquam sequi obcaecati molestiae fugiat!</p>
                <p>Aperiam, odit, quasi, voluptate fugiat quisquam velit magni provident corporis animi facilis illo eveniet eum obcaecati adipisci blanditiis quas labore doloribus eos veniam repudiandae suscipit tempora ad harum odio eius distinctio hic deleniti. Sunt fuga ad perspiciatis repellat deleniti omnis!</p>

                <h3>Numquam, ut iure quia facere totam quas odit illo incidunt</h3>
                <p>Est, maiores, fuga sed nemo qui veritatis ducimus placeat odit quisquam dolorum. Rem, sunt, praesentium veniam maiores quia molestias eos fugit eaque ducimus veritatis provident assumenda. Quia, fuga, voluptates voluptatibus quis enim nam asperiores aliquam dignissimos ullam recusandae debitis iste.</p>
                <p>Dignissimos, beatae, praesentium illum eos autem perspiciatis? Minus, non, tempore, illo, mollitia exercitationem tempora quas harum odio dolores delectus quidem laudantium adipisci ducimus ullam placeat eaque minima quae iure itaque corporis magni nesciunt eius sed dolor doloremque id quasi nisi.</p>
            </article>
            <!-- /Article -->

        </div>
    </div>  <!-- /container -->
@endsection
