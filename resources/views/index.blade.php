

@extends('layouts.cascara')

@section('all')

    <!-- Hero -->
    <section class="hero">
        <div class="in pd-lr">
            <img src="{{asset('/img//logo.png')}}" alt="Todo Brillo">
            <h3>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </h3>
        </div>
        <div class="on"></div>
    </section>
    <!-- Aromatizantes -->
    <section class="aromatizantes" id="aromatizantes-section">
        <div class="aroma-info">
            <div class="aroma-img"></div>
            <div class="aroma-data pd-lr">
                <div class="item-data">
                    <div class="img">
                    </div>
                    <div class="text">
                        <div class="standard">
                            <h1>Brisa Marina loem ipsum dolorem sit amet</h1>
                            <p>Brisa Marina Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, magni nemo. Aut, cupiditate ab odio libero facere cumque voluptatum alias ipsa veniam nostrum voluptate, repellat quibusdam deserunt error, quos cum!</p>
                        </div>
                        <div class="hawaiian">
                            <h1>Hawaiian loem ipsum dolorem sit amet</h1>
                            <p>Hawaiian Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, magni nemo. Aut, cupiditate ab odio libero facere cumque voluptatum alias ipsa veniam nostrum voluptate, repellat quibusdam deserunt error, quos cum!</p>
                        </div>
                        <div class="algodon">
                            <h1>Algodón loem ipsum dolorem sit amet</h1>
                            <p>Algodón Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, magni nemo. Aut, cupiditate ab odio libero facere cumque voluptatum alias ipsa veniam nostrum voluptate, repellat quibusdam deserunt error, quos cum!</p>
                        </div>
                        <div class="bambu">
                            <h1>Bambú loem ipsum dolorem sit amet</h1>
                            <p>Bambú Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, magni nemo. Aut, cupiditate ab odio libero facere cumque voluptatum alias ipsa veniam nostrum voluptate, repellat quibusdam deserunt error, quos cum!</p>
                        </div>
                        <div class="lavanda">
                            <h1>Lavanda loem ipsum dolorem sit amet</h1>
                            <p>Lavanda Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, magni nemo. Aut, cupiditate ab odio libero facere cumque voluptatum alias ipsa veniam nostrum voluptate, repellat quibusdam deserunt error, quos cum!</p>
                        </div>
                        <div class="floral">
                            <h1>Floral loem ipsum dolorem sit amet</h1>
                            <p>Floral Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, magni nemo. Aut, cupiditate ab odio libero facere cumque voluptatum alias ipsa veniam nostrum voluptate, repellat quibusdam deserunt error, quos cum!</p>
                        </div>
                        <div class="bebe">
                            <h1>Bebé loem ipsum dolorem sit amet</h1>
                            <p>Bebé Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, magni nemo. Aut, cupiditate ab odio libero facere cumque voluptatum alias ipsa veniam nostrum voluptate, repellat quibusdam deserunt error, quos cum!</p>
                        </div>
                        <div class="vainilla">
                            <h1>Vainilla loem ipsum dolorem sit amet</h1>
                            <p>Vainilla Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, magni nemo. Aut, cupiditate ab odio libero facere cumque voluptatum alias ipsa veniam nostrum voluptate, repellat quibusdam deserunt error, quos cum!</p>
                        </div>
                        <div class="anti-tabaco">
                            <h1>Anti Tabaco loem ipsum dolorem sit amet</h1>
                            <p>Anti Tabaco Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, magni nemo. Aut, cupiditate ab odio libero facere cumque voluptatum alias ipsa veniam nostrum voluptate, repellat quibusdam deserunt error, quos cum!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="selector">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" id="ar-1">
                        <img src="{{asset('/img/aromatizantes/1.png')}}">
                        <h6>Brisa Marina</h6>
                    </div>
                    <div class="swiper-slide" id="ar-2">
                        <img src="{{asset('/img/aromatizantes/2.png')}}">
                        <h6>Hawaiian</h6>
                    </div>
                    <div class="swiper-slide" id="ar-3">
                        <img src="{{asset('/img/aromatizantes/3.png')}}">
                        <h6>Algodón</h6>
                    </div>
                    <div class="swiper-slide" id="ar-4">
                        <img src="{{asset('/img/aromatizantes/4.png')}}">
                        <h6>Bambú</h6>
                    </div>
                    <div class="swiper-slide" id="ar-5">
                        <img src="{{asset('/img/aromatizantes/5.png/')}}">
                        <h6>Lavanda</h6>
                    </div>
                    <div class="swiper-slide" id="ar-6">
                        <img src="{{asset('/img/aromatizantes/6.png')}}">
                        <h6>Floral</h6>
                    </div>
                    <div class="swiper-slide" id="ar-7">
                        <img src="{{asset('/img/aromatizantes/7.png')}}">
                        <h6>Bebé</h6>
                    </div>
                    <div class="swiper-slide" id="ar-8">
                        <img src="{{asset('/img/aromatizantes/8.png')}}">
                        <h6>Vainilla</h6>
                    </div>
                    <div class="swiper-slide" id="ar-9">
                        <img src="{{asset('/img/aromatizantes/9.png')}}">
                        <h6>Anti Tabaco</h6>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- Division dos columnas -->
    <div class="columns">
        <!-- Automatico -->
        <section class="column automatico">
            <div class="header" style="background-image: url('{{asset('/img/es-backs/home-2.jpg')}}');">
                <!-- <img src="/img/automaticos/1.png" alt=""> -->
                <div class="img"></div>
                <div class="badges"></div>
            </div>
            <div class="body">
                <div class="selector">
                    <div class="in">
                        <div class="item a-1">
                            <img src="{{asset('/img/automaticos/lavanda.png')}}">
                            <div class="name"><p>Lavanda</p></div>
                        </div>
                        <div class="item a-2">
                            <img src="{{asset('/img/automaticos/manzana-y-canela.png')}}">
                            <div class="name"><p>Manzana y Canela</p></div>
                        </div>
                        <div class="item a-3">
                            <img src="{{asset('/img/automaticos/bebe.png')}}">
                            <div class="name"><p>Bebé</p></div>
                        </div>
                        <div class="item a-4">
                            <img src="{{asset('/img/automaticos/brisa-marina.png')}}">
                            <div class="name"><p>Brisa Marina</p></div>
                        </div>
                    </div>
                </div>
                <div class="data pd-lr">
                    <h4>Este es un mensaje que tiene que ver con el producto.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor placerat purus quis semper. Aliquam sed dapibus mi. Praesent nulla sem, fermentum vel nisl a.</p>
                </div>
            </div>
        </section>
        <!-- Eléctricos -->
        <section class="column electricos">
            <div class="header" style="background-image: url('{{asset('/img/es-backs/home-1.jpg')}}');">
                <!-- <img src="/img/electricos/1.png"> -->
                <div class="img"></div>
                <div class="badges"></div>
            </div>
            <div class="body">
                <div class="selector">
                    <div class="in">
                        <div class="item e-1">
                            <img src="{{asset('/img/automaticos/lavanda.png')}}">
                            <div class="name"><p>Lavanda</p></div>
                        </div>
                        <div class="item e-2">
                            <img src="{{asset('/img/automaticos/manzana-y-canela.png')}}">
                            <div class="name"><p>Manzana y Canela</p></div>
                        </div>
                        <div class="item e-3">
                            <img src="{{asset('/img/automaticos/bebe.png')}}">
                            <div class="name"><p>Bebé</p></div>
                        </div>
                        <div class="item e-4">
                            <img src="{{asset('/img/automaticos/brisa-marina.png')}}">
                            <div class="name"><p>Brisa Marina</p></div>
                        </div>
                    </div>
                </div>
                <div class="data pd-lr">
                    <h4>Este es un mensaje que tiene que ver con el producto.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor placerat purus quis semper. Aliquam sed dapibus mi. Praesent nulla sem, fermentum vel nisl a.</p>
                </div>
            </div>
        </section>
    </div>
    <!-- Desinfectantes -->
    <section class="desinfectantes">
        <div class="img" style="background-image: url('{{asset('/img/es-backs/bath-back.jpg')}}');"></div>
        <div class="data pd-lr">
            <img src="{{asset('/img/desinfectantes/1.png')}}">
            <h1>Pronto llega la nueva linea de desinfectantes.</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor placerat purus quis semper. Aliquam sed dapibus mi. Praesent nulla sem, fermentum vel nisl a.</p>
        </div>
    </section>
    <!-- Division dos columnas -->
    <div class="columns">
        <!-- Automatico -->
        <section class="column lustramuebles">
            <div class="header" style="background-image: url('{{asset('/img/es-backs/fur-polish-back.jpg')}}');">
                <img src="{{asset('/img/lustramuebles/1.png')}}">
            </div>
            <div class="body">
                <div class="data pd-lr">
                    <h4>Este es un mensaje que tiene que ver con el producto.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor placerat purus quis semper. Aliquam sed dapibus mi. Praesent nulla sem, fermentum vel nisl a.</p>
                </div>
            </div>
        </section>
        <!-- Automatico -->
        <section class="column renovador">
            <div class="header" style="background-image: url('{{asset('/img/es-backs/car-back.jpg')}}');">
                <img src="{{asset('/img/renovadores/1.png')}}">
            </div>
            <div class="body">
                <div class="data pd-lr">
                    <h4>Este es un mensaje que tiene que ver con el producto.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor placerat purus quis semper. Aliquam sed dapibus mi. Praesent nulla sem, fermentum vel nisl a.</p>
                </div>
            </div>
        </section>
    </div>
    <!-- Lideres -->
    <section class="lideres">
        <div class="header" style="background-image: url('{{asset('/img/world-back.jpg')}}');">
            <img src="{{asset('/img/all-products.png')}}">
        </div>
        <div class="body pd-lr">
            <h1>Productos líderes en Latino América ahora llegan a Chile</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor placerat purus quis semper. Aliquam sed dapibus mi. Praesent nulla sem, fermentum vel nisl a.</p>
        </div>
    </section>
    <!-- Contacto -->
    <section class="contacto">
        <div class="in pd-lr">
            <div class="data">
                <h1>Sé nuestro distribuidor</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor placerat purus quis semper. Aliquam sed dapibus mi. Praesent nulla sem, fermentum vel nisl a.</p>
            </div>



            <div class="form" >
                <form action="{{ route('ruta') }}" method="POST">
                    @csrf
                    <input type="text" placeholder="Nombre" name="name" required>
                    <input type="email" placeholder="Correo"  name="mail" required>
                    <input type="text" placeholder="Empresa"   name="company" required>
                    <input type="text" placeholder="Dirección"  name="address" required>
                    <textarea placeholder="Mensaje" name="message"></textarea>
                    <button type="submit" id="enviarContacto">Enviar</button>
                </form>
            </div>



        </div>
    </section>

 @endsection
