@extends('principal')
@section('contenido')

    <br><br><br>
    <h1>Encuentrenos en: </h1> 


    <div id="map-container-google-3" class="z-depth-1-half map-container-3">
        <iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=la%20floresta%20ipiales+(Ipiales)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> 
           
    </div>



            
    <div>
    <div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Mi pedido aun no a llegado
            </button>
        </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
        Si tu pedido no ha llegado, puede ser por varios motivos.
Primero comprueba la fecha estimada de entrega y el estado del pedido en tu menú de usuario, o también la verás en el correo de confirmación de tu pedido que has recibido.
Si la fecha de entrega es superior al día de hoy, no te preocupes, todo va bajo lo previsto.
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Como puedo devolver un articulo
            </button>
        </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
        ¿Cuándo puedo devolver un producto?
Puedes devolver los artículos en su estado original en un plazo de 14 días tras recibirlos. 
El producto a devolver debe estar en las condiciones originales del fabricante, es decir, en la misma caja de origen, bien precintada, y dentro de otra caja o bolsa, para que el transporte no enganche etiquetas en el producto.
Cualquier anomalía o desperfecto en la paquetería o el producto, podría dar lugar a la anulación de la devolución del importe.
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
        <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Informacion  y opciones de envio
            </button>
        </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
        Los tiempos de envío se contabilizan únicamente en días laborables. Los fines de semana y festivos no se realizan envíos.
Puedes seleccionar cualquiera de los siguientes servicios de envío:
Envío regular
Es el servicio de menor coste, con el que vas a disponer de tus productos en un tiempo razonable al menor coste posible.
        </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="c4">
        <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#c4" aria-expanded="false" aria-controls="collapseTwo">
            Contactos
            </button>
        </h2>
        </div>
        <div id="c4" class="collapse" aria-labelledby="c4" data-parent="#accordionExample">
        <div class="card-body">
        Carrera 2da Norte <br>
    Barrio Obrero. <br>
Teléfonos: 3115988953 – 3112641818.
        </div>
        </div>
    </div>
    </div>       
    </div>
<br><br>
@stop