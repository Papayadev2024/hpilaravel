@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')
    <main>
        <section class="pt-44 pb-20">
            <div class="w-11/12 mx-auto">
                <div class="w-full md:max-w-[1000px] mx-auto flex flex-col gap-16 py-20">
                    <div class="flex flex-col gap-2">
                        <h2
                            class="text-[#082252] font-roboto font-bold text-text48 md:text-text56 text-center leading-tight">
                            Explora Nuestro Catálogo</h2>
                        <p class="text-[#082252] font-roboto font-normal text-text18 text-center">Descubre nuestra amplia
                            gama de soluciones de tratamiento de agua en nuestro catálogo.</p>
                    </div>
                    {{-- preguntar --}}
                    <div class="flex flex-col md:flex-row md:flew-row md:justify-center gap-5 md:gap-8 md:items-center">
                        <a href="{{route('descargables', 0)}}" 
                            class="font-roboto text-text16 rounded-lg py-3 px-5 text-center  {{$filtro == 0 ?  'bg-[#FF5E14] font-semibold text-white' : ' bg-[#E6E4E5] bg-opacity-40 text-[#082252] font-normal ' }}  ">Todas</a>
                        @foreach ($categorias as $item)
                            <a href="{{route('descargables', $item->id)}}"
                                class=" font-roboto text-text16 rounded-lg py-3 px-5 text-center bg-[#E6E4E5]  text-[#082252] font-normal    @if ($filtro == 0) @else {{ $item->id == $filtro ? 'bg-[#FF5E14] font-semibold text-white' : 'bg-[#E6E4E5] bg-opacity-40 text-[#082252] font-normal ' }} @endif">
                            {{ $item->name}}</a>
                        @endforeach     
                    </div>
                    {{-- ---- --}}
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                    @foreach ($descargables as $descargable)
                        <div class="flex justify-start items-center gap-8 h-[150px] md:h-[250px]">
                            <div class="bg-[#F5F4F5] rounded-xl flex justify-center items-center w-2/5 h-full">
                                <img src="{{ asset($descargable->url_image.$descargable->name_image ) }}" alt="catalogo"
                                    class="w-[80px] h-[115px] md:w-[150px] md:h-[190px]">
                            </div>
                            <div class="flex flex-col gap-4 w-3/5">
                                <div class="flex flex-col gap-2">
                                    <h2 class="text-[#082252] font-roboto font-bold text-text18 md:text-text24 leading-tight">
                                        {{$descargable->title}}</h2>
                                    <p class="text-[#082252] font-roboto font-normal text-text10 md:text-text16">{{$descargable->description}}</p>
                                </div>

                                <a href="{{ asset('storage/archives/'.$descargable->name_archive) }}" target="_blank" 
                                    class="text-[#FF5E14] font-roboto font-normal text-text10 md:text-text16 flex justify-start items-center gap-2">
                                    <span>Descargar</span>
                                    <div>
                                        <img src="{{ asset('images/svg/image_42.svg') }}" alt="download"
                                            class="w-[8px] h-[9px] md:w-[auto] md:h-auto">
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                  

                    {{-- <div class="flex justify-start items-center gap-8 h-[150px] md:h-[250px]">
                        <div class="bg-[#F5F4F5] rounded-xl flex justify-center items-center w-full h-full">
                            <img src="{{ asset('images/img/image_63.png') }}" alt="catalogo"
                                class="w-[80px] h-[115px] md:w-[150px] md:h-[190px]">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#082252] font-roboto font-bold text-text18 md:text-text24 leading-tight">
                                    Nunc faucibus, augue at bibendum feugiat</h2>
                                <p class="text-[#082252] font-roboto font-normal text-text10 md:text-text16">Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim...</p>
                            </div>

                            <a href="#"
                                class="text-[#FF5E14] font-roboto font-normal text-text10 md:text-text16 flex justify-start items-center gap-2">
                                <span>Descargar</span>
                                <div>
                                    <img src="{{ asset('images/svg/image_42.svg') }}" alt="download"
                                        class="w-[8px] h-[9px] md:w-auto md:h-auto">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="flex justify-start items-center gap-8 h-[150px] md:h-[250px]">
                        <div class="bg-[#F5F4F5] rounded-xl flex justify-center items-center w-full h-full">
                            <img src="{{ asset('images/img/image_64.png') }}" alt="catalogo"
                                class="w-[80px] h-[115px] md:w-[150px] md:h-[190px]">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#082252] font-roboto font-bold text-text18 md:text-text24 leading-tight">
                                    Nunc faucibus, augue at bibendum feugiat</h2>
                                <p class="text-[#082252] font-roboto font-normal text-text10 md:text-text16">Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim...</p>
                            </div>

                            <a href="#"
                                class="text-[#FF5E14] font-roboto font-normal text-text10 md:text-text16 flex justify-start items-center gap-2">
                                <span>Descargar</span>
                                <div>
                                    <img src="{{ asset('images/svg/image_42.svg') }}" alt="download"
                                        class="w-[8px] h-[9px] md:w-auto md:h-auto">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="flex justify-start items-center gap-8 h-[150px] md:h-[250px]">
                        <div class="bg-[#F5F4F5] rounded-xl flex justify-center items-center w-full h-full">
                            <img src="{{ asset('images/img/image_65.png') }}" alt="catalogo"
                                class="w-[80px] h-[115px] md:w-[150px] md:h-[190px]">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#082252] font-roboto font-bold text-text18 md:text-text24 leading-tight">
                                    Nunc faucibus, augue at bibendum feugiat</h2>
                                <p class="text-[#082252] font-roboto font-normal text-text10 md:text-text16">Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim...</p>
                            </div>

                            <a href="#"
                                class="text-[#FF5E14] font-roboto font-normal text-text10 md:text-text16 flex justify-start items-center gap-2">
                                <span>Descargar</span>
                                <div>
                                    <img src="{{ asset('images/svg/image_42.svg') }}" alt="download"
                                        class="w-[8px] h-[9px] md:w-auto md:h-auto">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="flex justify-start items-center gap-8 h-[150px] md:h-[250px]">
                        <div class="bg-[#F5F4F5] rounded-xl flex justify-center items-center w-full h-full">
                            <img src="{{ asset('images/img/image_66.png') }}" alt="catalogo"
                                class="w-[80px] h-[115px] md:w-[150px] md:h-[190px]">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#082252] font-roboto font-bold text-text18 md:text-text24 leading-tight">
                                    Nunc faucibus, augue at bibendum feugiat</h2>
                                <p class="text-[#082252] font-roboto font-normal text-text10 md:text-text16">Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim...</p>
                            </div>

                            <a href="#"
                                class="text-[#FF5E14] font-roboto font-normal text-text10 md:text-text16 flex justify-start items-center gap-2">
                                <span>Descargar</span>
                                <div>
                                    <img src="{{ asset('images/svg/image_42.svg') }}" alt="download"
                                        class="w-[8px] h-[9px] md:w-auto md:h-auto">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="flex justify-start items-center gap-8 h-[150px] md:h-[250px]">
                        <div class="bg-[#F5F4F5] rounded-xl flex justify-center items-center w-full h-full">
                            <img src="{{ asset('images/img/image_67.png') }}" alt="catalogo"
                                class="w-[80px] h-[115px] md:w-[150px] md:h-[190px]">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#082252] font-roboto font-bold text-text18 md:text-text24 leading-tight">
                                    Nunc faucibus, augue at bibendum feugiat</h2>
                                <p class="text-[#082252] font-roboto font-normal text-text10 md:text-text16">Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim...</p>
                            </div>

                            <a href="#"
                                class="text-[#FF5E14] font-roboto font-normal text-text10 md:text-text16 flex justify-start items-center gap-2">
                                <span>Descargar</span>
                                <div>
                                    <img src="{{ asset('images/svg/image_42.svg') }}" alt="download"
                                        class="w-[8px] h-[9px] md:w-auto md:h-auto">
                                </div>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <section class="pb-20">
            <div class="relative w-11/12 mx-auto ">
                <img src="{{ asset('images/img/image_68.png') }}" alt="fondo"
                    class="w-full h-[270px] object-cover rounded-xl hidden md:block">
                <img src="{{ asset('images/img/image_69.png') }}" alt="fondo"
                    class="w-full h-[485px] object-cover rounded-xl block md:hidden">
                <div class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-11/12 mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="flex flex-col gap-3 justify-center">
                            <h3 class="text-white font-roboto font-bold text-text40 leading-tight">Únete a Nuestra
                                Comunidad
                            </h3>
                            <p class="text-white font-roboto font-normal text-text18">
                                Mantente al día con las últimas noticias, consejos y tendencias sobre tratamiento de agua.
                                ¡Inscríbete ahora y no te pierdas ninguna actualización!
                            </p>
                        </div>

                        <div class="flex flex-col gap-2 justify-center">

                            <form action="" id="footerFormulario"
                                class="flex flex-col md:flex-row md:justify-start md:items-center gap-5">
                                <div class="w-full">
                                    <input type="text"
                                        class="bg-white px-5 py-3 rounded-xl w-full placeholder:text-opacity-40 text-[#082252] transition-all focus:border-transparent border-0 focus:font-semibold"
                                        placeholder="Introduce tu correo electrónico" />
                                </div>

                                <div class="flex justify-center items-center w-full md:w-auto">
                                    <a href="#"
                                        class="font-roboto font-normal text-text16 text-white py-3 px-6 rounded-xl w-full md:w-auto text-center bg-[#FF5E14]">
                                        Suscribe
                                    </a>
                                </div>
                            </form>

                            <div class="text-white font-roboto font-semibold text-text10 flex flex-wrap justify-start items-center gap-1">
                                <p>Al hacer clic en Registrarse, confirma que está de acuerdo con nuestros </p> 
                                <a href="#" target="_blank" class="underline "> Términos y condiciones</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


@section('scripts_importados')


@stop

@stop
