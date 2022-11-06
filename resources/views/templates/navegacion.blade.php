<nav class='nav'>
    <div class='navHomeLogo'>
        <img src={{asset('img/logo.jpeg')}} alt="logo" />
    </div>

    <div onclick="changeMenu()" class="navHamburguerMenu">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M32 96v64h448V96H32zm0 128v64h448v-64H32zm0 128v64h448v-64H32z"></path></svg>
    </div>


    <div class="nav-options">
        <div onclick="changeMenu()" class="navHamburguerMenu">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 0 0 203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z"></path></svg>
        </div>

    <a class='nav-option'  href="/"  >Inicio</a>
    <a class='nav-option'  href="{{route('states.show','quintana-roo')}}"  >Quintana Roo</a>
    <a  class='nav-option' href="/yucatan"  >Yucatán</a>
    <a  class='nav-option' href="https://www.elegircarrera.net/test-vocacional/" target="_BLANK"  >Test</a>
    <form action="{{route('universities.indexui')}}" method="get" class='nav-buscador'>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Buscar" value="" name='buscar' />
        <button class='nav-buscador-submit' type="submit" ><img src="{{asset('img/search.png')}}" alt="buscar" /></button>
    </form>

    </div>

</nav>

<script>
    function changeMenu(){
        const menu = document.querySelector('.nav-options');
        menu.classList.toggle('nav-optionsOpen')

    }
</script>
