<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InsertarClienteController extends Controller {
   public function insertform() {
      return view('nuevo_cliente');
   }
    
   public function insert(Request $request) {
    $id = null;
    $user = $request->input('user');
    $mail = $request->input('mail');
    DB::table('Clientes')->insert([
        'ID_Cliente'=>$id,
        'Nombre'=>$name,
        'Email'=>$mail,
        'Telefono'=>$phone,
        'CIF_NIF'=>$dni,
        'Direccion'=>$address,
        'Provincia'=>$country,
        'Localidad'=>$city,
        'CP'=>$cp,
        'Fecha_Modificacion'=>$mytime
        ]);
    return back();
    }
}