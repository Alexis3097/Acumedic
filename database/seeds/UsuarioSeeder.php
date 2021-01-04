<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use Illuminate\Support\Facades\Hash;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //creando un rol
        $role = Role::create(['name' => 'Administrador']);
        //creando permisos, para clientes
        $PermissionsArray = [];
        //CITAS
        array_push($PermissionsArray, Permission::create(['name' => 'ListadoCitas']));
        array_push($PermissionsArray, Permission::create(['name' => 'CrearCita']));
        array_push($PermissionsArray, Permission::create(['name' => 'EditarCita']));
        array_push($PermissionsArray, Permission::create(['name' => 'EliminarCita']));
        //PACIENTES
        array_push($PermissionsArray, Permission::create(['name' => 'ListadoPacientes']));
        array_push($PermissionsArray, Permission::create(['name' => 'CrearPaciente']));
        array_push($PermissionsArray, Permission::create(['name' => 'EditarPaciente']));
        array_push($PermissionsArray, Permission::create(['name' => 'EliminarPaciente']));
        //USUARIOS
        array_push($PermissionsArray, Permission::create(['name' => 'ListadoUsuarios']));
        array_push($PermissionsArray, Permission::create(['name' => 'CrearUsuario']));
        array_push($PermissionsArray, Permission::create(['name' => 'EditarUsuario']));
        array_push($PermissionsArray, Permission::create(['name' => 'EliminarUsuario']));
        //FICHAS
        array_push($PermissionsArray, Permission::create(['name' => 'ListadoFicha']));
        array_push($PermissionsArray, Permission::create(['name' => 'CrearFicha']));
        array_push($PermissionsArray, Permission::create(['name' => 'EditarFicha']));
        array_push($PermissionsArray, Permission::create(['name' => 'EliminarFicha']));
        //CONSULTA
        array_push($PermissionsArray, Permission::create(['name' => 'Consulta']));
        array_push($PermissionsArray, Permission::create(['name' => 'Historial']));
        array_push($PermissionsArray, Permission::create(['name' => 'InicarConsulta']));
        array_push($PermissionsArray, Permission::create(['name' => 'Antecedentes']));
        array_push($PermissionsArray, Permission::create(['name' => 'EstudiosGabinete']));
        //ROLES
        array_push($PermissionsArray, Permission::create(['name' => 'ListarRoles']));
        array_push($PermissionsArray, Permission::create(['name' => 'CrearRol']));
        array_push($PermissionsArray, Permission::create(['name' => 'EditarRol']));
        array_push($PermissionsArray, Permission::create(['name' => 'EliminarRol']));
        //PRODUCTOS
        array_push($PermissionsArray, Permission::create(['name' => 'ListadoProducto']));
        array_push($PermissionsArray, Permission::create(['name' => 'CrearProducto']));
        array_push($PermissionsArray, Permission::create(['name' => 'EditarProducto']));
        array_push($PermissionsArray, Permission::create(['name' => 'EliminarProducto']));
        //SERVICIOS
        array_push($PermissionsArray, Permission::create(['name' => 'ListadoServicio']));
        array_push($PermissionsArray, Permission::create(['name' => 'CrearServicio']));
        array_push($PermissionsArray, Permission::create(['name' => 'EditarServicio']));
        array_push($PermissionsArray, Permission::create(['name' => 'EliminarServicio']));
        //INVENTARIO
        array_push($PermissionsArray, Permission::create(['name' => 'ListadoInventario']));
        array_push($PermissionsArray, Permission::create(['name' => 'CrearInventario']));
        array_push($PermissionsArray, Permission::create(['name' => 'EditarInventario']));
        array_push($PermissionsArray, Permission::create(['name' => 'EliminarInventario']));
        //SOBRE ACUMEDIC
        array_push($PermissionsArray, Permission::create(['name' => 'SobreAcumedic']));
        //asignando los permisos al rol
        $role->syncPermissions($PermissionsArray);

        //creando usuario 
        $Administrador = User::create([
            'name' => 'ADMINISTRADOR',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('administrador'),
        ]);
        
        //asignando el rol al usuario
        $Administrador->assignRole('Administrador');

        
    }
}
