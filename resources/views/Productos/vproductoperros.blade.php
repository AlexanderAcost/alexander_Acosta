@extends('principal')
@section('contenido')
<br><br>
    <h1>PRODUCTOS PARA PERROS</h1> 
    <br><br>
    <div class="container">
        <div class="row">   
            <div class="card-deck">
                <div class="card text-white bg-dark col-md-3" style="width: 18rem;">
                    <img src="{{url('imagenes/comidaperro.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body  ">
                        <h5 class="card-header text-center bg-secondary ">{{$np1}}</h5>
                        <ul>
                            @foreach($prodp1 as $p)                       
                                <li>{{$p}}</li>
                            @endforeach
                        </ul>
                        <div class="card-footer bg-transparent border-secondary ">
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    
                </div>
                <div class="card text-white bg-dark col-md-3" style="width: 18rem;">
                    <img src="{{url('imagenes/tperro.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body  ">
                        <h5 class="card-header text-center bg-secondary ">{{$np2}}</h5>
                        <ul>
                            @foreach($prodp2 as $p)                       
                                <li>{{$p}}</li>
                            @endforeach
                        </ul>
                        <div class="card-footer bg-transparent border-secondary ">
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    
                </div>
                <div class="card text-white bg-dark col-md-3" style="width: 18rem;">
                    <img src="{{url('imagenes/juperro.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body  ">
                        <h5 class="card-header text-center bg-secondary ">{{$np3}}</h5>
                        <ul>
                            @foreach($prodp3 as $p)                       
                                <li>{{$p}}</li>
                            @endforeach
                        </ul>
                        <div class="card-footer bg-transparent border-secondary ">
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    
                </div>

                <div class="card text-white bg-dark col-md-3" style="width: 18rem;">
                    <img src="{{url('imagenes/rperro.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body  ">
                        <h5 class="card-header text-center bg-secondary ">{{$np4}}</h5>
                        <ul>
                            @foreach($prodp4 as $p)                       
                                <li>{{$p}}</li>
                            @endforeach
                        </ul>
                        <div class="card-footer bg-transparent border-secondary ">
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
                       
            
        </div>
        <br><br>
        <div class="row">   
            <div class="card-deck">
                <div class="card text-white bg-dark col-md-3" style="width: 18rem;">
                    <img src="{{url('imagenes/pperro.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body  ">
                        <h5 class="card-header text-center bg-secondary ">{{$np5}}</h5>
                        <ul>
                            @foreach($prodp5 as $p)                       
                                <li>{{$p}}</li>
                            @endforeach
                        </ul>
                        <div class="card-footer bg-transparent border-secondary ">
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    
                </div>
                <div class="card text-white bg-dark col-md-3" style="width: 18rem;">
                    <img src="{{url('imagenes/coperro.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body  ">
                        <h5 class="card-header text-center bg-secondary ">{{$np6}}</h5>
                        <ul>
                            @foreach($prodp6 as $p)                       
                                <li>{{$p}}</li>
                            @endforeach
                        </ul>
                        <div class="card-footer bg-transparent border-secondary ">
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    
                </div>
               <div class="card col-md-3"  style="width: 18rem;">
               </div>
               <div class="card col-md-3"  style="width: 18rem;">
               </div>
            </div>
            
            
                       
            
        </div>
        
    </div>
    <br><br>
    <br><br>
    <br><br>
    <br>
    <br>


@stop