<?php
namespace App\ViewModel;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class PermisosViewModel
{
    /**
     * obtiene todos los permisos existentes
     */
    public function getPermisos()
    {
        $permisos = Permission::all();
        return $permisos;
    }
    /**
     * obtienen todos los redes
     */
    public function getRoles()
    {
        $roles = Role::all();
        return $roles;
    }
    /**
     * crea un rol con todos los permisos que se seleccionaron
     */
    public function crearRol($permisosData)
    {  
        $permisos = $permisosData->except('_token','Rol');
        $rol = Role::create(['name' => $permisosData->Rol]);
        $rol->syncPermissions($permisos);
        return;
    }

    public function getRolXid($id){
        $rol = Role::find($id);
        return $rol;
    }
    /**
     * obtiene los permisos relacionados con el rol_id que recibe como parametro
     */
    public function getPermisosXRol($id){
        $permisosArrays = Permission::all();
        $rol = $this->getRolXid($id);
        $permisosQueTengo = $rol->permissions()->get();
        $nombrePermisosAll = [];
        $nombrePermisosQueTengo = [];
        $permisosAmostrar = [];

        //me quedo solo con los nombre de los permisos (todos los permisos)
        foreach ($permisosArrays as $permisos){
            
            array_push($nombrePermisosAll, $permisos->name);
        }
        //me quedo solo con los nombre de los permisos (Permisos que tengo)
        foreach ($permisosQueTengo as $permisos){
            
            array_push($nombrePermisosQueTengo, $permisos->name);
        }
        //dejo todos los permisos en unchecked por default
        foreach ($nombrePermisosAll as $clave=>$valorTodosLosPermisos){
            $permisosAmostrar[$valorTodosLosPermisos] = 'unchecked';
        }
        //solo pongo check cuando el rol cuenta con el permiso
        foreach ($nombrePermisosAll as $clave => $valorTodosLosPermisos){
            foreach ($nombrePermisosQueTengo as $clave => $valorPermisoTengo){
                if($valorTodosLosPermisos === $valorPermisoTengo){
                    $permisosAmostrar[$valorTodosLosPermisos] = 'checked';
                }
            }
        }
        return $permisosAmostrar;
    }

    /**
     * Actualiza los permisos del idRol que se mande
     */
    public function update($permisosData, $idRol){
        //obtengo y actualizo el rol
        $rol = $this->getRolXid($idRol);
        $rol->name = $permisosData->Rol;
        $rol->save();
        //dejo solo los permisos
        $permisos = $permisosData->except('_token','_method','Rol');
        $rol->permissions()->detach();
        $rol->syncPermissions($permisos);
        return $rol;
    }

    public function eliminarRol($idRol){
        $rol = $this->getRolXid($idRol);
        $rol->permissions()->detach();
        $rol->delete();
        return $rol;
    }
}