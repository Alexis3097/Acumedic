<?php

namespace App\ViewModel;
use Illuminate\Support\Facades\Hash;
use App\User;
class UsuarioViewModel
{
    public function create($userData){
        
        $modelUsuario = $userData->except('_token','password_confirmation');
        $modelUsuario['password'] = Hash::make($modelUsuario['password']);
        if($archivo = $userData->file('Foto'))
        {
          $nombre = time().'.'.$archivo->getClientOriginalExtension();
          $archivo->move('uploads', $nombre);
          $modelUsuario['Foto']  = $nombre;
        }
        return User::create($modelUsuario);
    }

    public function update($userData,$id){
      $usuario = User::find($id);
      if($archivo = $userData->file('Foto'))
      {
        if(!is_null($usuario->Foto)){
           $rutaImagen = public_path().'/uploads/'.$usuario->Foto;
          if (@getimagesize($rutaImagen)){
            unlink($rutaImagen);
          }
        }
        $nombre = time().'.'.$archivo->getClientOriginalExtension();
        $archivo->move('uploads', $nombre);
        $usuario->Foto = $nombre;
      }

      $usuario->IdSexo = $userData->IdSexo;
      $usuario->name = $userData->name;
      $usuario->ApellidoPaterno = $userData->ApellidoPaterno;
      $usuario->ApellidoMaterno = $userData->ApellidoMaterno;
      $usuario->FechaNacimiento = $userData->FechaNacimiento;
      $usuario->Telefono = $userData->Telefono;
      $usuario->email = $userData->email;
      $usuario->save();
      return $usuario;
    }

    public function delete($id){
      $usuario = User::find($id);
      $usuario->delete();
      return $usuario;
    }
    public function getUsuarios(){
      $usuarios =  User::where('id', '!=', auth()->id())->get();
      return $usuarios;
    }

    public function getUsuarioXId($IdUsuario){
      $usuario = User::find($IdUsuario);
      return $usuario;
    }
}