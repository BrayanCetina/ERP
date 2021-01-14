<div class="nav-scroller bg-white box-shadow">
  <nav class="nav nav-underline">
    <a class="nav-link" href="{{ route('home') }}" style="color: #000;">Inicio
      <i class="fa fa-home m-auto btn" style="color: #ff922b;"></i>
    </a>
    <a class="nav-link" href="{{ route('clientesVista') }}" style="color: #000;">CRM
      <i class="fas fa-handshake m-auto btn" style="color: #ff922b;"></i>
    </a>
    <a class="nav-link" href="{{ route('pedidosVista') }}" style="color: #000;">Pedidos
      <i class="fas fa-file-signature m-auto btn" style="color: #ff922b;"></i>
    </a>
    <a class="nav-link" href="{{ route('mrpIndex') }}" style="color: #000;">MRP
      <i  id="btnmrpindex" class="fas fa-warehouse m-auto btn" style="color: #ff922b;"></i>
    </a>
    <a class="nav-link" href="{{ route('documentosVista') }}" style="color: #000;">Productos
      <i class="fas fa-boxes m-auto btn" style="color: #ff922b;"></i>
    </a>
    <a class="nav-link" href="{{ route('ofertasVista') }}" style="color: #000;">Ofertas
      <i class="fas fa-chart-bar m-auto btn" style="color: #ff922b;"></i>
    </a>

    <div class="navbar-nav mr-auto">
    </div>
   <!-- <form class="form-inline mt-2 mt-md-0" style="margin:10px">
        <input class="form-control mr-sm-2" type="text" placeholder="Numero de rastreo" aria-label="Buscar">
        <button class="buttonV btn my-2 my-sm-0" type="submit" >Buscar</button>
    </form>-->
  </nav>
</div>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src = "https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" defer ></script>
<script src = "https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js" defer ></script>