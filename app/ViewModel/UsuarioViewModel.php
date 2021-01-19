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
        $usuario =  User::create($modelUsuario);
        $usuario->assignRole($userData->Rol);
        return $usuario;
    }

    public function update($userData,$id){
      $usuario = User::find($id);
      $usuario->roles()->detach();
      $usuario->assignRole($userData->Rol);
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
      if(!is_null($usuario)){
        $usuario->roles()->detach();
        $usuario->delete();
      }
      return $usuario;
    }
    public function getUsuarios(){
      $usuarios =  User::where('id', '!=', auth()->id())->paginate(15);
      return $usuarios;
    }

    public function getUsuarioXId($IdUsuario){
      $usuario = User::find($IdUsuario);
      return $usuario;
    }

    public function buscarUsuario($Nombre, $variableurl){
      $usuario = User::where('id', '!=', auth()->id())
                  ->where('name', 'like','%' . $Nombre. '%')
                  ->orWhere('ApellidoPaterno', 'like','%' . $Nombre. '%')
                  ->orWhere('ApellidoMaterno', 'like','%' . $Nombre. '%')
                  ->paginate()->appends($variableurl);
      return $usuario;
    }
/**
 * cambia contraseñas de los usuarios(el administrador)
 */
    public function changePassword($IdUsuario, $password){
      $usuario = User::find($IdUsuario);
      $pass = Hash::make($password);
      $usuario->password = $pass;
      $usuario->save();
    }
    /**
     * Cada usuarios puede cambiara su contraseña
     */
    public function changePasswordMiCuenta($IdUsuario, $password){
      $usuario = User::find($IdUsuario);
      $pass = Hash::make($password);
      $usuario->password = $pass;
      $usuario->save();
    }

    /**
     * actualiza los dato del usuario logeado
     */
    public function updateMyAcount($userData,$id){
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
}