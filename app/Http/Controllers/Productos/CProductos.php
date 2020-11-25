<?php

namespace App\Http\Controllers\Productos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CProductos extends Controller
{
    //array('id'=>'2','nombre'=>'Gabriel','precio'=>'1000'),
        //    array('id'=>'3','nombre'=>'Juan','precio'=>'1000'),
      //      array('id'=>'4','nombre'=>'Leo','precio'=>'1000'),
     //       array('id'=>'5','nombre'=>'b','precio'=>'1000'),
     //       array('id'=>'6','nombre'=>'c','precio'=>'1000'),
    //        -->
    public function productoperros(){
         //un arreglo de arreglos tipo matriz
         $n1 = 'Comda Chunki';
         $prod1=[
             '1',
             '10.000'
         ];
         $n2 = 'Bolsa de brazo';
         $prod2=[
             '2',
             '20.000'
         ];
         $n3 = 'Pierna de pollo';
         $prod3=[
             '3',
             '30.000'
         ];
         $n4 = 'chaqueta invierno cachorro';
         $prod4=[
             '4',
             '40.000'
         ];
         $n5 = 'Mesa Agua y Comida';
         $prod5=[
             '5',
             '50.000'
         ];
         $n6 = 'Collar corbatin';
         $prod6=[
             '6',
             '60.000'
         ];
 
         
 
 
         return view('Productos.vproductoperros')
         ->with('np1' , $n1)
         ->with('prodp1', $prod1)
         ->with('np2' , $n2)
         ->with('prodp2', $prod2)
         ->with('np3' , $n3)
         ->with('prodp3', $prod3)
         ->with('np4' , $n4)
         ->with('prodp4', $prod4)
         ->with('np5' , $n5)
         ->with('prodp5', $prod5)
         ->with('np6' , $n6)
         ->with('prodp6', $prod6);

    }
    public function productogatos(){
        $n1 = 'Monello';
        $prod1=[
            '1',
            '10.000'
        ];
        $n2 = 'Bolsa Transparente';
        $prod2=[
            '2',
            '20.000'
        ];
        $n3 = 'Poste rascador';
        $prod3=[
            '3',
            '30.000'
        ];
        $n4 = 'chaqueta gatito';
        $prod4=[
            '4',
            '40.000'
        ];
        $n5 = 'Mesa Agua y Comida';
        $prod5=[
            '5',
            '50.000'
        ];
        $n6 = 'Collar Pañoleta';
        $prod6=[
            '6',
            '60.000'
        ];

        


        return view('Productos.vproductogatos')
        ->with('ng1' , $n1)
        ->with('prodg1', $prod1)
        ->with('ng2' , $n2)
        ->with('prodg2', $prod2)
        ->with('ng3' , $n3)
        ->with('prodg3', $prod3)
        ->with('ng4' , $n4)
        ->with('prodg4', $prod4)
        ->with('ng5' , $n5)
        ->with('prodg5', $prod5)
        ->with('ng6' , $n6)
        ->with('prodg6', $prod6);

        
    }
}
