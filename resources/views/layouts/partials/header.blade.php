<header>
    <h1>Ofertas MK</h1>
    <nav>
      <ul>
        <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>          
        <li><a href="{{route('products.index')}}" class="{{request()->routeIs('products.*') ? 'active' : ''}}">Productos</a></li>           
        <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a></li>
        <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contactanos</a></li>

      </ul>
    </nav>
  </header>