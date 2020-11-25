@extends('principal')
@section('contenido')
    <br><br>
    <h1>PRODUCTOS PARA GATO</h1> 
    <br><br>
    <div class="container">
        <div class="row">   
            <div class="card-deck">
                <div class="card text-white bg-dark col-md-3" style="width: 18rem;">
                    <img src="{{url('imagenes/comidagato.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body  ">
                        <h5 class="card-header text-center bg-secondary ">{{$ng1}}</h5>
                        <ul>
                            @foreach($prodg1 as $p)                       
                                <li>{{$p}}</li>
                            @endforeach
                        </ul>
                        <div class="card-footer bg-transparent border-secondary ">
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    
                </div>
                <div class="card text-white bg-dark col-md-3" style="width: 18rem;">
                    <img src="{{url('imagenes/trgato.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body  ">
                        <h5 class="card-header text-center bg-secondary ">{{$ng2}}</h5>
                        <ul>
                            @foreach($prodg2 as $p)                       
                                <li>{{$p}}</li>
                            @endforeach
                        </ul>
                        <div class="card-footer bg-transparent border-secondary ">
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    
                </div>
                <div class="card text-white bg-dark col-md-3" style="width: 18rem;">
                    <img src="{{url('imagenes/jugato.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body  ">
                        <h5 class="card-header text-center bg-secondary ">{{$ng3}}</h5>
                        <ul>
                            @foreach($prodg3 as $p)                       
                                <li>{{$p}}</li>
                            @endforeach
                        </ul>
                        <div class="card-footer bg-transparent border-secondary ">
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    
                </div>

                <div class="card text-white bg-dark col-md-3" style="width: 18rem;">
                    <img src="{{url('imagenes/rgato.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body  ">
                        <h5 class="card-header text-center bg-secondary ">{{$ng4}}</h5>
                        <ul>
                            @foreach($prodg4 as $p)                       
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
                    <img src="{{url('imagenes/pgato.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body  ">
                        <h5 class="card-header text-center bg-secondary ">{{$ng5}}</h5>
                        <ul>
                            @foreach($prodg5 as $p)                       
                                <li>{{$p}}</li>
                            @endforeach
                        </ul>
                        <div class="card-footer bg-transparent border-secondary ">
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    
                </div>
                <div class="card text-white bg-dark col-md-3" style="width: 18rem;">
                    <img src="{{url('imagenes/cogato.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body  ">
                        <h5 class="card-header text-center bg-secondary ">{{$ng6}}</h5>
                        <ul>
                            @foreach($prodg6 as $p)                       
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