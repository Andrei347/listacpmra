<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{



    public function getIndex(){

        $arrayProducto=$this->arrayProductos;

        return view('productos.index',array('arrayProductos'=>$arrayProducto));
    }

    public function getShow($id){
        $tx=$this->arrayProductos[$id-1];

        return view('productos.show', array('producto'=>$tx),array('id'=>$id));
    }

    public function getCreate(){
        return view('productos.create');
    }
    public function getEdit($id){
        return view('productos.edit', array('id' => $id));

    }
    

}
