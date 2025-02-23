<header>
    <div class="absolute left-0 right-0 z-[200]">
        <div class=" bg-[#0C4AC3] z-[1000] relative">
            <div class="flex justify-end md:justify-between items-center py-4 w-11/12 mx-auto ">
                <div class="hidden md:flex justify-center items-center gap-5">
                    <div class="flex justify-start items-center gap-2">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/svg/image_18.svg') }}" alt="telefono">
                        </div>
                        <p class="font-roboto font-normal text-text16 text-white">01-6556920 / 01-6556922</p>
                    </div>
    
                    <div class="flex justify-start items-center gap-2">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/svg/image_19.svg') }}" alt="telefono">
                        </div>
                        <p class="font-roboto font-normal text-text16 text-white">ventas@hpi.com.pe</p>
                    </div>
                </div>
                <div class="flex justify-center items-center gap-3">
                    <a href="#" target="_blank"><img src="{{ asset('images/svg/image_20.svg') }}" alt="facebook"></a>
                    <a href="#" target="_blank"><img src="{{ asset('images/svg/image_21.svg') }}" alt="instagram"></a>
                    <a href="#" target="_blank"><img src="{{ asset('images/svg/image_22.svg') }}" alt="twitter"></a>
                    <a href="#" target="_blank"><img src="{{ asset('images/svg/image_23.svg') }}" alt="linkedin"></a>
                    <a href="#" target="_blank"><img src="{{ asset('images/svg/image_24.svg') }}" alt="youtube"></a>
                </div>
            </div>
        </div>
    
        <div class="flex justify-between w-11/12 mx-auto">
    
            <nav class="flex h-24 items-center justify-between gap-10 w-full">
                <input type="checkbox" id="menu" class="peer/menu menu hidden" />
                <label for="menu"
                    class="transition-all flex flex-col gap-1 z-40 lg:hidden hamburguesa justify-center items-center order-3 lg:order-3">
                    <p class="w-7 h-1 bg-[#082252] transition-transform duration-500"></p>
                    <p class="w-7 h-1 bg-[#082252] transition-transform duration-500"></p>
                    <p class="w-7 h-1 bg-[#082252] transition-transform duration-500"></p>
                </label>
    
                <div class="flex justify-center items-center z-40">
                    <a href="{{route('index')}}">
                        {{-- <img src="./images/svg/image_27.svg" alt="HPI" /> --}}
                        <img src="{{asset('images/img/image_27.png')}}" alt="HPI">
                    </a>
                </div>
    
                <ul
                    class="fixed inset-0 bg-white px-[5%] flex flex-col lg:flex-row lg:items-center pt-40 clip-circle-0 peer-checked/menu:clip-circle-full transition-[clip-path] duration-500 gap-5 lg:gap-10 lg:clip-circle-full lg:relative lg:flex lg:justify-items-center lg:p-0 lg:bg-transparent font-roboto font-bold lg:font-normal text-text24 lg:text-text16 text-[#082252] flex-1">
    
                    <div class="flex flex-col lg:flex-row order-2 lg:order-1 lg:w-[80%] lg:justify-center gap-5 lg:gap-10">
                        <li class="flex flex-col">
                            <a href="{{route('index')}}">Inicio</a>
                        </li>
                        <li class="flex flex-col">
                            <a href="{{route('nosotros')}}" class="text-[#FF5E14] font-semibold">Nosotros</a>
                            <p class="hidden lg:block lg:after:content-[''] lg:after:w-full lg:after:h-[2px] lg:after:bg-[#FF5E14] lg:after:block"></p>
                        </li>
                        <li class="flex flex-col">
                            <a href="{{route('catalogo', 0)}}">Productos</a>
                            {{-- <a href="{{route('productos')}}">Productos</a> --}}
                        </li>
                        <li class="flex flex-col">
                            <a href="{{route('descargables', 0)}}">Catálogo</a>
                            {{-- <a href="{{route('catalogo')}}">Catálogo</a> --}}
                        </li>
                        <li class="flex flex-col">
                            <a href="{{route('blog', 0)}}">Blog</a>
                            {{-- <a href="{{route('blog')}}">Blog</a> --}}

                        </li>
                        <li class="flex flex-col">
                            <a href="{{route('contacto')}}">Contacto</a>
                            {{-- <a href="{{route('contacto')}}">Contacto</a> --}}

                        </li>
                    </div>
    
                    <div
                        class="relative w-full order-1 lg:order-2  lg:w-[20%] pb-8 lg:py-0 border-b lg:border-0 border-[#082252]">
                        <input type="text" placeholder="Buscar..."
                            class="w-full pl-8 pr-10 py-2 border border-[#082252] lg:border-[#E6E4E5] rounded-lg focus:outline-none focus:ring-0 text-[#082252] placeholder:text-[#082252] lg:placeholder:text-[#E6E4E5]">
                        <span class="absolute inset-y-0 left-0 flex items-start lg:items-center px-2 pb-2 pt-[9px] lg:p-2">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.6851 13.6011C14.3544 13.2811 13.8268 13.2898 13.5068 13.6206C13.1868 13.9514 13.1955 14.4789 13.5263 14.7989L14.6851 13.6011ZM16.4206 17.5989C16.7514 17.9189 17.2789 17.9102 17.5989 17.5794C17.9189 17.2486 17.9102 16.7211 17.5794 16.4011L16.4206 17.5989ZM15.2333 9.53333C15.2333 12.6814 12.6814 15.2333 9.53333 15.2333V16.9C13.6018 16.9 16.9 13.6018 16.9 9.53333H15.2333ZM9.53333 15.2333C6.38531 15.2333 3.83333 12.6814 3.83333 9.53333H2.16667C2.16667 13.6018 5.46484 16.9 9.53333 16.9V15.2333ZM3.83333 9.53333C3.83333 6.38531 6.38531 3.83333 9.53333 3.83333V2.16667C5.46484 2.16667 2.16667 5.46484 2.16667 9.53333H3.83333ZM9.53333 3.83333C12.6814 3.83333 15.2333 6.38531 15.2333 9.53333H16.9C16.9 5.46484 13.6018 2.16667 9.53333 2.16667V3.83333ZM13.5263 14.7989L16.4206 17.5989L17.5794 16.4011L14.6851 13.6011L13.5263 14.7989Z"
                                    fill="#E6E4E5" class="fill-fillAzulPetroleo lg:fill-fillPink" />
                            </svg>
                        </span>
                    </div>
                </ul>
            </nav>
        </div>
    </div>

    {{-- whatssapp --}}
    <div class="flex justify-end w-11/12 mx-auto z-[100] relative">
        <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20">
            <a target="_blank" href="#">
                <img src="{{ asset('images/svg/image_31.svg') }}" alt="whatsapp" class="w-20 h-20 md:w-full md:h-full">
            </a>
        </div>
    </div>

</header>

<script>
    const menu = document.querySelector(".menu");
    const body = document.body;
    menu.addEventListener("click", (e) => {
        body.classList.toggle("overflow-hidden");
    });
</script>
