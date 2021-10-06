<?php

namespace App\ViewModel;
use Illuminate\Support\Facades\Hash;
use App\User;
class UsuarioViewModel
{
    public function create($userData){
        $modelUsuario = $userData->except('_token','password_confirmation');
        $modelUsuario['password'] = Hash::make($modelUsuario['password']);

        if(!is_null($userData->file('Foto'))){

            $foto = cloudinary()->upload($userData->file('Foto')->getRealPath());
            $modelUsuario['Foto']  = $foto->getSecurePath();
            $modelUsuario['FotoId']  =  $foto->getPublicId();
        }

        $usuario =  User::create($modelUsuario);
        $usuario->assignRole($userData->Rol);
        return $usuario;
    }

    public function update($userData,$id){
      $usuario = User::find($id);
      $usuario->roles()->detach();
      $usuario->assignRole($userData->Rol);
        if(!is_null($userData->file('Foto'))){
            $foto = cloudinary()->upload($userData->file('Foto')->getRealPath());
            //elimino la foto vieja si es que tiene
            if(!is_null($usuario->Foto)){
                cloudinary()->destroy($usuario->FotoId);
            }
            //actualizo el url de la nueva fotp
            $usuario->Foto =$foto->getSecurePath();
            $usuario->FotoId =$foto->getPublicId();
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
          if(!is_null($usuario->Foto)){
              cloudinary()->destroy($usuario->FotoId);
          }
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
        if(!is_null($userData->file('Foto'))){
            $foto = cloudinary()->upload($userData->file('Foto')->getRealPath());
            //elimino la foto vieja si es que tiene
            if(!is_null($usuario->Foto)){
                cloudinary()->destroy($usuario->FotoId);
            }
            //actualizo el url de la nueva fotp
            $usuario->Foto =$foto->getSecurePath();
            $usuario->FotoId =$foto->getPublicId();
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
