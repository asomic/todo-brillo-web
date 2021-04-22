

@extends('layouts.cascara')

@section('all')

    <!-- Hero -->
    <section class="hero">
        <div class="in pd-lr">
            <img src="{{asset('/img//logo.png')}}" alt="Todo Brillo">
            <h3>
                {{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. --}}
                Explora sensaciones y nuevas fragancias
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
                            <h1>Desodorante ambiental</h1>
                            <p>
                                Deja que los aromatizantes ambientales Todo Brillo dejen fuera de tu hogar los olores fuertes y refresquen al instante cada espacio donde los utilizas. Su intensa fragancia permitirá una larga duración y permanencia del olor en el aire. Pruébalos en todos sus aromas y transpórtate a un ambiente diferente sin salir de casa. 
                            </p>
                        </div>
                        <div class="hawaiian">
                            <h1>Desodorante ambiental</h1>
                            <p>
                                Deja que los aromatizantes ambientales Todo Brillo dejen fuera de tu hogar los olores fuertes y refresquen al instante cada espacio donde los utilizas. Su intensa fragancia permitirá una larga duración y permanencia del olor en el aire. Pruébalos en todos sus aromas y transpórtate a un ambiente diferente sin salir de casa. 
                            </p>
                        </div>
                        <div class="algodon">
                            <h1>Desodorante ambiental</h1>
                            <p>
                                Deja que los aromatizantes ambientales Todo Brillo dejen fuera de tu hogar los olores fuertes y refresquen al instante cada espacio donde los utilizas. Su intensa fragancia permitirá una larga duración y permanencia del olor en el aire. Pruébalos en todos sus aromas y transpórtate a un ambiente diferente sin salir de casa. 
                            </p>
                        </div>
                        <div class="bambu">
                            <h1>Desodorante ambiental</h1>
                            <p>
                                Deja que los aromatizantes ambientales Todo Brillo dejen fuera de tu hogar los olores fuertes y refresquen al instante cada espacio donde los utilizas. Su intensa fragancia permitirá una larga duración y permanencia del olor en el aire. Pruébalos en todos sus aromas y transpórtate a un ambiente diferente sin salir de casa. 
                            </p>
                        </div>
                        <div class="lavanda">
                            <h1>Desodorante ambiental</h1>
                            <p>
                                Deja que los aromatizantes ambientales Todo Brillo dejen fuera de tu hogar los olores fuertes y refresquen al instante cada espacio donde los utilizas. Su intensa fragancia permitirá una larga duración y permanencia del olor en el aire. Pruébalos en todos sus aromas y transpórtate a un ambiente diferente sin salir de casa. 
                            </p>
                        </div>
                        <div class="floral">
                            <h1>Desodorante ambiental</h1>
                            <p>
                                Deja que los aromatizantes ambientales Todo Brillo dejen fuera de tu hogar los olores fuertes y refresquen al instante cada espacio donde los utilizas. Su intensa fragancia permitirá una larga duración y permanencia del olor en el aire. Pruébalos en todos sus aromas y transpórtate a un ambiente diferente sin salir de casa. 
                            </p>
                        </div>
                        <div class="bebe">
                            <h1>Desodorante ambiental</h1>
                            <p>
                                Deja que los aromatizantes ambientales Todo Brillo dejen fuera de tu hogar los olores fuertes y refresquen al instante cada espacio donde los utilizas. Su intensa fragancia permitirá una larga duración y permanencia del olor en el aire. Pruébalos en todos sus aromas y transpórtate a un ambiente diferente sin salir de casa. 
                            </p>
                        </div>
                        <div class="vainilla">
                            <h1>Desodorante ambiental</h1>
                            <p>
                                Deja que los aromatizantes ambientales Todo Brillo dejen fuera de tu hogar los olores fuertes y refresquen al instante cada espacio donde los utilizas. Su intensa fragancia permitirá una larga duración y permanencia del olor en el aire. Pruébalos en todos sus aromas y transpórtate a un ambiente diferente sin salir de casa. 
                            </p>
                        </div>
                        <div class="anti-tabaco">
                            <h1>Desodorante ambiental</h1>
                            <p>
                                Deja que los aromatizantes ambientales Todo Brillo dejen fuera de tu hogar los olores fuertes y refresquen al instante cada espacio donde los utilizas. Su intensa fragancia permitirá una larga duración y permanencia del olor en el aire. Pruébalos en todos sus aromas y transpórtate a un ambiente diferente sin salir de casa. 
                            </p>
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
                    <h4>
                        Desodorante ambiental automático
                    </h4>
                    <p>
                        Despreocúpate y haz que tu vida sea más fácil con el aromatizante ambiental automático de Todo Brillo. Con capacidad de 2500 disparos y una duración aproximada de 60 días te asegura un ambiente fresco y sin malos olores
                    </p>
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
                    <h4>
                        Desodorante ambiental eléctrico
                    </h4>
                    <p>
                        Aromatizante Todo Brillo eléctrico llega para automatizar tu hogar y darle toques de frescura al espacio que tu elijas, gracias a su formato que permite alta movilidad y duración de 75 días. Contiene aceites naturales que junto a la variedad de aromas disponibles te harán experimentar nuevas sensaciones en tu hogar.
                    </p>
                </div>
            </div>
        </section>
    </div>
    <!-- Desinfectantes -->
    <section class="desinfectantes">
        <div class="img" style="background-image: url('{{asset('/img/es-backs/bath-back.jpg')}}');"></div>
        <div class="data pd-lr">
            <img src="{{asset('/img/desinfectantes/1.png')}}">
            <h1>Pronto llega la nueva linea de desinfectantes</h1>
            <p>
                Mantén a tu familia fuera del alcance de microbios, la nueva línea de desinfectantes Todo Brillo promete proteger tu hogar y eliminar el 99,9% de virus y bacterias, dejando exquisitas fragancias en el proceso.
            </p>
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
                    <h4>Lustra muebles</h4>
                    <p>
                        Lustra muebles Todo Brillo te asegura protección y eficacia al momento de cuidar tu hogar, su intensa fórmula embellece y deja reluciente todo a su alcance. 
                    </p>
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
                    <h4>Renovador de Gomas</h4>
                    <p>
                        Haz que tu automóvil luzca como se merece, el Renovador de Gomas Todo Brillo mantendrá impecable cada rincón, desde neumáticos hasta parachoques, entregando el toque de renovación que necesitas. 
                    </p>
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
            <p>
                Nos acredita una larga experiencia en el mercado, hoy en día estamos posicionados en Bolivia y Chile con miras de expansión. Descubre nuestros productos y comprueba su calidad.  
            </p>
        </div>
    </section>
    <!-- Contacto -->
    <section class="contacto">
        <div class="in pd-lr">
            <div class="data">
                <h1>Sé nuestro distribuidor</h1>
                <p>
                    Contamos con convenios especiales para expandir tu negocio, escríbenos y se parte de Todo Brillo Chile.
                </p>
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
