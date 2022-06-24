<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registerUser(Request $request){
        $request->validate();
        $user = new user();
        $url_imagen = $this->upload($request->file('imagen_usuario'));
        $user->imagen_usuario = $url_imagen;
        $user->nombres = $request->input('nombres');
        $user->apellidos = $request->input('apellidos');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->idEstadoUsuario = 1;

        $res = $user->save();

        if($res){
            return response()->json(['message'=>'Usuario creado satisfactoriamente'],201);
        }else{
            return response()->json(['message'=>'Ocurrio un error inesperado al registrar al usuario'],500);
        }
    }
    private function upload($image){
        $path_info = pathinfo($image->getClientOriginalName());
        $post_path = 'images/users';

        $rename = uniqid().'.'.$path_info['extension'];
        $image->move(public_path()."/$post_path",$rename);
        return "$post_path/$rename";
    }
}
