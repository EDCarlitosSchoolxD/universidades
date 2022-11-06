
    @extends('templates.base')

    @section('content')
        @include('templates.navegacion')


        <style>
            .home .home-slid .box{
    position: relative;
    height: 100vh;
}
.home .home-slid .box::before{
    content: "";
    background: rgba(0, 0, 0, 0.5);
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
}
.home .home-slid .box .content{
    position: absolute;
    display: flex;
    flex-direction: column;
    top: 0;
    left: 0;
    right: 0;
    bottom:0;
    justify-content: center;
    align-items: center;
    text-align: center;
    gap: 2rem;
}
.home .home-slid .box .content h3{
    font-size: 4rem;

}
.home .home-slid .box .content p{
    font-size: 2.5rem;
    margin: 1rem 0;

}
        </style>


        <div class="home -z-10" id="home">
            <div class="swiper home-slid">
                <div class="swiper-wrapper">

                    <div class="swiper-slide box">
                        <div class="h-screen">
                            <img class="h-full" src="{{asset('img/slide/slide-1.jpg')}}" alt="image">
                        </div>
                        <div class="content">
                            <h3 class="text-white">Quintana Roo</h3>
                            <p class="text-white">TODAS LAS OPORTUNIDADES QUE TE PUEDEN OFRECER</p>
                            <a class="text-center bg-white px-10 py-4 font-bold  rounded-full " href="{{route('states.show','quintana-roo')}}" class="btn">Comencemos</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="h-screen">
                            <img class="h-full"  src="{{asset('img/slide/slide-2.jpg')}}" alt="image">
                        </div>
                        <div class="content">
                            <h3 class="text-white">Yucatán</h3>
                            <p class="text-white">TODAS LAS OPORTUNIDADES QUE TE PUEDEN OFRECER</p>
                            <a class="text-center bg-white px-10 py-4 font-bold  rounded-full " href="../grovine/universidadesy.php" class="btn">Comencemos</a>
                        </div>

                    </div>

                    <div class="swiper-slide box">
                        <div class="h-screen">
                            <img class="h-full" src="{{asset('img/slide/slide-3.jpg')}}" alt="image">
                        </div>
                        <div class="content">
                            <h3 class="text-white">Test Vocacional</h3>
                            <p class="text-white">Conoce mejor tus hailidades para tomar una desición con mayor seguridad</p>
                            <a class="text-center bg-white px-10 py-4 font-bold  rounded-full " href="https://www.elegircarrera.net/test-vocacional/" class="btn">Comencemos</a>
                        </div>

                    </div>


                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-[3fr,4fr] mx-auto container-sm" >
        <img class="max-h-[32rem] max-w-[30rem] py-4 w-4/5 mx-auto my-auto object-cover object-center" src="{{asset('img/about.jpg')}}" alt="about">
        <div class="p-10 flex flex-col gap-5  h-full">
            <h2 class="font-semibold text-3xl">Razones por las que es bueno estudiar la universidad</h2>
            <p class="text-xl  font-normal">Sabemos que al momento de terminar la preparatoria muchas opciones de vida vienen a tu mente, no sólo la de estudiar una carrera universitaria; sin embargo, si quieres conseguir trabajos bien pagados, cursar una licenciatura sin duda será tu mejor opción.</p>
            <ul class="grid sm:grid-cols-2 grid-cols-1 gap-3">
                <li class="list-disc text-xl">Te ayuda a adquirir
                    habilidades únicas y
                    especializadas.</li>
                <li class="list-disc text-xl">Desarrollas pensamiento crítico
                    y tienes una visión global.</li>
                <li class="list-disc text-xl">Aprendes a trabajar orientado
                    a metas.</li>
                <li class="list-disc text-xl">Te conviertes en un profesional.</li>
            </ul>
        </div>
    </div>

    <div class="grid md:grid-cols-4 container gap-4">
        <div class="grid grid-cols-2 items-center gap-2">
            <img class="w-3/4 m-auto h-4/5" src="{{asset('img/logo/logo1.png')}}" alt="Logo 1">
            <p class="text-center">“Todo logro
                empieza con la
                decisión de
                intentarlo.”</p>
        </div>
        <div class="grid grid-cols-2 items-center gap-2">
            <img class="w-3/4 m-auto h-3/4" src="{{asset('img/logo/logo2.png')}}" alt="Logo2">
            <p class="text-center">
                “No se puede abrir
                un libro sin tener
                que aprender
                algo."</p>
        </div>
        <div class="grid grid-cols-2 items-center gap-2">
            <img class="w-3/4 m-auto h-3/4" src="{{asset('img/logo/logo3.png')}}" alt="Logo3">
            <p class="text-center">
                “No se puede abrir
                un libro sin tener
                que aprender
                algo."</p>
        </div>
        <div class="grid grid-cols-2 items-center gap-2">
            <img class="w-3/4 m-auto h-3/4" src="{{asset('img/logo/logo4.png')}}" alt="Logo4">
            <p class="text-center">
                “No se puede abrir
                un libro sin tener
                que aprender
                algo."</p>
        </div>
    </div>

        <div class="container mt-10 p-4">
            <h2 class="text-center font-bold font-serif text-4xl">ANÍMATE A ESTUDIAR EN ESTOS BELLOS LUGARES</h2>

            <div class="grid md:grid-cols-3 gap-4 w-3/4 mx-auto mt-4">

                <div>
                    <img class="hover:scale-105 duration-300" src="{{asset('img/portfolio/portfolio-1.jpg')}}" alt="portfolio 1">
                </div>

                <div>
                    <img class="hover:scale-105 duration-300" src="{{asset('img/portfolio/portfolio-2.jpg')}}" alt="portfolio 2">
                </div>

                <div>
                    <img class="hover:scale-105 duration-300" src="{{asset('img/portfolio/portfolio-3.jpg')}}" alt="portfolio 3">
                </div>

                <div>
                    <img class="hover:scale-105 duration-300" src="{{asset('img/portfolio/portfolio-4.jpg')}}" alt="portfolio 4">
                </div>

                <div>
                    <img class="hover:scale-105 duration-300" src="{{asset('img/portfolio/portfolio-5.jpg')}}" alt="portfolio 5">
                </div>

                <div>
                    <img class="hover:scale-105 duration-300" src="{{asset('img/portfolio/portfolio-6.jpg')}}" alt="portfolio 6">
                </div>

            </div>
        </div>



          <script>

            var swiper = new Swiper(".home-slid", {
                navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
                },
                loop:true,
            });

          </script>

    @endsection




