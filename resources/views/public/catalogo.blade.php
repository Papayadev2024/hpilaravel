@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')

    <main>
        <section class="pt-[155px]">

            <div class="bg-[#F7F8F8] pb-20">
                <div class="w-11/12 md:w-10/12 mx-auto">
                    <div class="flex flex-col items-center text-center pt-20 pb-20 gap-5">
                        <div class="flex flex-col gap-2 w-full md:max-w-[850px]" data-aos="fade-up" data-aos-offset="150">
                            <h3
                                class="text-[#082252] font-roboto font-bold text-text48 md:text-text56 leading-tight text-center">
                                Descubre Nuestra Gama de Soluciones</h3>
                            <p class="font-roboto font-normal text-text18 text-[#082252] text-center">
                                Explora nuestra selección de productos innovadores y eficientes para el tratamiento de agua,
                                diseñados para satisfacer tus necesidades industriales y residenciales
                            </p>
                        </div>

                        <div class="relative w-full md:max-w-[450px] pb-8 lg:py-0">
                            <input type="text" placeholder="Buscar"
                                class="w-full md:max-w-[450px] pl-8 pr-10 py-2 border border-[#E6E4E5] rounded-lg focus:outline-none focus:ring-0 text-[#082252] placeholder:text-[#E6E4E5] lg:placeholder:text-[#E6E4E5] focus:border-[#E6E4E5]">
                            <span
                                class="absolute inset-y-0 left-0 flex items-start lg:items-center px-2 pb-2 pt-[9px] lg:p-2">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.6851 13.6011C14.3544 13.2811 13.8268 13.2898 13.5068 13.6206C13.1868 13.9514 13.1955 14.4789 13.5263 14.7989L14.6851 13.6011ZM16.4206 17.5989C16.7514 17.9189 17.2789 17.9102 17.5989 17.5794C17.9189 17.2486 17.9102 16.7211 17.5794 16.4011L16.4206 17.5989ZM15.2333 9.53333C15.2333 12.6814 12.6814 15.2333 9.53333 15.2333V16.9C13.6018 16.9 16.9 13.6018 16.9 9.53333H15.2333ZM9.53333 15.2333C6.38531 15.2333 3.83333 12.6814 3.83333 9.53333H2.16667C2.16667 13.6018 5.46484 16.9 9.53333 16.9V15.2333ZM3.83333 9.53333C3.83333 6.38531 6.38531 3.83333 9.53333 3.83333V2.16667C5.46484 2.16667 2.16667 5.46484 2.16667 9.53333H3.83333ZM9.53333 3.83333C12.6814 3.83333 15.2333 6.38531 15.2333 9.53333H16.9C16.9 5.46484 13.6018 2.16667 9.53333 2.16667V3.83333ZM13.5263 14.7989L16.4206 17.5989L17.5794 16.4011L14.6851 13.6011L13.5263 14.7989Z"
                                        fill="#E6E4E5" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div>
                        <div class="swiper logos">
                            <div class="swiper-wrapper">
                                @foreach ($categorias as $item)
                                    <div class="swiper-slide !flex justify-center">
                                        {{-- <a href="{{route('catalogo', $item->id)}}"> --}}
                                        <a id="{{ $item->id }}" class="categoryselect">
                                            <div class="inline-flex flex-col gap-3 w-[142px] h-[202px]">
                                                <div
                                                    class="rounded-full bg-white hover:bg-[#245BC8] md:duration-300 w-[142px] h-[142px] flex justify-center items-center">
                                                    <div>
                                                        <img src="{{ asset('images/img/image_24.png') }}"
                                                            alt="tratamiento de agua"
                                                            class="w-[96px] h-[64px] object-cover">
                                                    </div>
                                                </div>
                                                <h2 class="text-[#082252] font-roboto font-bold text-text18 text-center">
                                                    {{ $item->name }}</h2>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section>
            <div class="flex flex-col gap-5 md:gap-10 w-11/12 mx-auto py-10">
                <div class="flex flex-col gap-5">
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#082252] font-roboto font-bold text-text32">Soluciones Efectivas para Tratamiento
                            de
                            Agua</h2>
                        <p class="text-[#082252] font-roboto font-normal text-text18">Descubre nuestra variedad de productos
                            químicos diseñados para el tratamiento de agua, garantizando resultados eficientes y de calidad.
                        </p>
                    </div>

                    <div>
                        <div class="flex flex-col md:flex-row md:justify-start gap-3">
                            <div class="relative inline-block text-left min-w-64 w-auto">
                                <select id="selectSubcategory"
                                    class="bg-[#FF5E14] w-full py-3 text-left px-4 text-white font-bold font-roboto hover:bg-[#FF5E14] hover:bg-opacity-80 text-text16 focus:outline-none border-b-[1.5px] border-x-0 border-t-0 border-gray-200 focus:ring-0 focus:border-gray-200 focus:border-b-[1.5px] rounded-lg">
                                    <option>Selecciona subcategoria</option>
                                </select>
                            </div>
                            <div class="relative inline-block text-left min-w-64 w-auto">
                                <select id="selectMicrocategory"
                                    class="bg-[#FF5E14] w-full py-3 text-left px-4 text-white font-bold font-roboto hover:bg-[#FF5E14] hover:bg-opacity-80 text-text16 focus:outline-none border-b-[1.5px] border-x-0 border-t-0 border-gray-200 focus:ring-0 focus:border-gray-200 focus:border-b-[1.5px] rounded-lg">
                                    <option>Selecciona microcategoria</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div id="getProductAjax"
                    class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-11/12 mx-auto gap-x-5 gap-y-10 pb-10 md:pb-20">

                    @foreach ($productos as $item)
                        <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                            <div class="flex justify-center items-center">
                                <a href="{{route('producto', $item->id)}}" class="w-full"><img src="{{ asset($item->imagen) }}"
                                        alt="planta de tratmiento de agua" class="w-full object-cover rounded-lg"></a>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">{{$item->categoria->name}}
                                </h3>
                                <a href="{{route('producto', $item->id)}}">
                                    <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">
                                        {{$item->producto}}</h2>
                                </a>
                                <p class="font-roboto font-normal text-text16 text-[#082252]">
                                    {{$item->extract}}
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </main>


@section('scripts_importados')
    <script>
        var swiper = new Swiper(".logos", {
            slidesPerView: 4,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 4,
                },
            },
        });
    </script>

    <script>
        $('document').ready(function() {

            $('#selectMicrocategory').change(function() {

                var id = $('#selectMicrocategory').val();
                $.ajax({
                    url: '{{ route('getProductMicrocategoria') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {

                        $('#getProductAjax').empty();
                        $.each(response.productos, function(key, value) {

                            $('#getProductAjax').append(
                                `<div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                                    <div class="flex justify-center items-center">
                                        <a href=" " class="w-full"><img src="{{ asset('${value.imagen}') }}"
                                                alt="planta de tratmiento de agua" class="w-full object-cover rounded-lg"></a>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">${value.category_name}</h3>
                                        <a href=" ">
                                            <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">${value.producto}</h2>
                                        </a>
                                        <p class="font-roboto font-normal text-text16 text-[#082252]">
                                            ${value.extract}
                                        </p>
                                    </div>
                                </div>`
                            );
                        });


                    },
                    error: function(error) {

                    }
                });


            });



            $('#selectSubcategory').change(function() {

                var id = $('#selectSubcategory').val();
                $.ajax({
                    url: '{{ route('getMicrocategoria') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {
                        //    console.log(response);
                        $('#selectMicrocategory').empty();
                        $.each(response.microcategorias, function(key, value) {

                            console.log(value);
                            $('#selectMicrocategory').append(
                                '<option value="' + value['id'] + '">' + value[
                                    'name'] +
                                '</option>'
                            );
                        });


                        $('#getProductAjax').empty();
                        $.each(response.productos, function(key, value) {

                            $('#getProductAjax').append(
                                `<a href="producto/${value.id}" ><div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                                    <div class="flex justify-center items-center">
                                        <a href=" " class="w-full"><img src="{{ asset('${value.imagen}') }}"
                                                alt="planta de tratmiento de agua" class="w-full object-cover rounded-lg"></a>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">${value.category_name}</h3>
                                        <a href=" ">
                                            <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">${value.producto}</h2>
                                        </a>
                                        <p class="font-roboto font-normal text-text16 text-[#082252]">
                                            ${value.extract}
                                        </p>
                                    </div>
                                </div></a>`
                            );
                        });


                    },
                    error: function(error) {

                    }
                });


            });




            $('.categoryselect').click(function() {

                var id = $(this).attr('id');
                // var status = $(this).attr('data-val');


                $.ajax({
                    url: '{{ route('getSubcategoria') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        $('#selectSubcategory').empty();
                        $('#selectMicrocategory').empty();
                        $('#selectMicrocategory').append(
                            '<option value="">Selecciona microcategoria</option>');
                        $('#selectSubcategory').append(
                            '<option value="">Selecciona subcategoria</option>');


                        $.each(response.subcategorias, function(key, value) {


                            $('#selectSubcategory').append(
                                '<option value="' + value['id'] + '">' + value[
                                    'name'] +
                                '</option>'
                            );

                        });

                        $('#getProductAjax').empty();
                        $.each(response.productos, function(key, value) {

                            var productoUrl = `{{ route('producto', ':id') }}`.replace(
                                ':id', value.id);

                            $('#getProductAjax').append(
                                `<div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                                    
                                    <div class="flex justify-center items-center">
                                        <a href='${productoUrl}' class="w-full"><img src="{{ asset('${value.imagen}') }}"
                                                alt="planta de tratmiento de agua" class="w-full object-cover rounded-lg"></a>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">${value.category_name}</h3>
                                        <a href='${productoUrl}'>
                                            <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">${value.producto}</h2>
                                        </a>
                                        <p class="font-roboto font-normal text-text16 text-[#082252]">
                                            ${value.extract}
                                        </p>
                                    </div>
                                    
                                </div>`
                            );
                        });


                    },
                    error: function(error) {

                    }
                });

            });

        });
    </script>

@stop

@stop
