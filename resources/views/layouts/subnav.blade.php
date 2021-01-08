<div class="nav-scroller bg-white box-shadow">
  <nav class="nav nav-underline">
    <a class="nav-link" href="{{ route('home') }}" style="color: #000;">Inicio
      <i class="fa fa-home m-auto btn" style="color: #ff922b;"></i>
    </a>
    <a class="nav-link" href="{{ route('pedimentosVista') }}" style="color: #000;">Pedimentos
      <i class="fa fa-ship m-auto btn" style="color: #ff922b;"></i>
    </a>
    <a class="nav-link" href="{{ route('facturasVista') }}" style="color: #000;">Facturación
      <i class="fa fa-coins m-auto btn" style="color: #ff922b;"></i>
    </a>
    <a class="nav-link" href="{{ route('documentosVista') }}" style="color: #000;">Documentos
      <i class="fa fa-folder m-auto btn" style="color: #ff922b;"></i>
    </a>
    <div class="navbar-nav mr-auto">
    </div>
    <form class="form-inline mt-2 mt-md-0" style="margin:10px">
        <input class="form-control mr-sm-2" type="text" placeholder="Numero de rastreo" aria-label="Buscar">
        <button class="buttonV btn my-2 my-sm-0" type="submit" >Buscar</button>
    </form>
  </nav>
</div>
