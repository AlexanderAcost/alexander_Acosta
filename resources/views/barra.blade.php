<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #1d678a;">
    <a class="navbar-brand" href="{{url('/')}}">
    
      <img src="{{url('imagenes/logo.png')}}" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy">
      Quiero a mi Mascota
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      
      <li class="nav-item dropdown active" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu " style="background-color: #a0abb0;" aria-labelledby="navbarDropdown" >
          <a class="dropdown-item" href="{{url('perros')}}">Para Perros</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('gatos')}}">Para Gatos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="">Otros</a>
          </div>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="{{url('informacion')}}">Informacion</a>
      </li> 
      

       
        

      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>