<nav class='nav'>
    <div class='navHomeLogo'>
        <img src={{asset('img/logo.jpeg')}} alt="logo" />
    </div>
    <div onclick="changeMenu()" class="navHamburguerMenu">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M32 96v64h448V96H32zm0 128v64h448v-64H32zm0 128v64h448v-64H32z"></path></svg>
    </div>



    <div class="nav-options">
    <a class='nav-option'  href="/"  >Inicio</a>
    <a class='nav-option'  href="/quintanaroo"  >Quintana Roo</a>
    <a  class='nav-option' href="/yucatan"  >Yucatán</a>
    <a  class='nav-option' href="/"  >Test</a>
    <form class='nav-buscador'>
        <input class='nav-buscador-input' type="text" name='buscar' />
        <button class='nav-buscador-submit' type="submit" ><img src="{{asset('img/search.png')}}" /></button>
    </form>

    </div>

</nav>

<script>
    function changeMenu(){
        const menu = document.querySelector('.nav-options');
        menu.classList.toggle('nav-optionsOpen')

    }
</script>
