<?php

use Illuminate\Database\Seeder;
use App\Models\SobreAcumedic;
use App\Models\Informacion;
use App\Models\Contacto;
class SobreAcumedicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sobreAcumedic = SobreAcumedic::create([
            'Titulo1' => 'SOBRE NOSOTROS',
            'Informacion1' => 'Centro especializado en Acupuntura-naturopatia y geriatría. Diplomados profesionales en salud alternativa.',
            'Titulo2' => 'Nuestra historia',
            'Informacion2' => 'Acumedic nace en en año 2008 como un centro Profesional de Asistencia Médica donde se combinan la Medicina Tradicional China y Acupuntura tanto como la medicina Moderna; con el objetivo de brindar a pacientes una eficaz manera de atender sus padecimientos y asi mismo, mantener y restaurar la salud, Teniendo atención especial a Adultos Mayores, enfermedades crónicas y degenerativas y casos donde se curse con Dolor.',
            'Titulo3' => 'Mision y vision',
            'Informacion3' => 'Vestibulum nec lacus vel sapien blandit blandit id id urna. Nulla sed venenatis sapien. Praesent vel orci a risus fringilla scelerisque nec a nunc. Cras blandit ante leo, vel mollis nisi lobortis ac. Nam fermentum suscipit velit at scelerisque.
                                Fusce cursus nec odio eu accumsan. Sed quis pharetra dui. Fusce mattis et eros ac hendrerit. Cras maximus ipsum sed leo commodo laoreet. Praesent urna lectus, porta auctor arcu in, tempus facilisis justo',
            'Foto' => 'about-example.png',
            'TituloImagen'=> 'Acumedic',
            'TextoAlterno'=> 'Acumedic'
        ]);

        $informacion = Informacion::create([
            'Titulo1' => 'ABOUT US',
            'Informacion1' => 'Acumedic nace en en año 2008 como un centro Profesional de Asistencia Médica donde se combinan la Medicina Tradicional China y Acupuntura tanto como la medicina Moderna; con el objetivo de brindar a pacientes una eficaz manera de atender sus padecimientos y asi mismo, mantener y restaurar la salud, Teniendo atención especial a Adultos Mayores, enfermedades crónicas y degenerativas y casos donde se curse con Dolor.',
            'Titulo2' => 'Mision y vision',
            'Informacion2' => 'Vestibulum nec lacus vel sapien blandit blandit id id urna. Nulla sed venenatis sapien. Praesent vel orci a risus fringilla scelerisque nec a nunc. Cras blandit ante leo, vel mollis nisi lobortis ac. Nam fermentum suscipit velit at scelerisque.
                                Fusce cursus nec odio eu accumsan. Sed quis pharetra dui. Fusce mattis et eros ac hendrerit. Cras maximus ipsum sed leo commodo laoreet. Praesent urna lectus, porta auctor arcu in, tempus facilisis justo',
            'Foto' => 'about-example2.png',
            'TituloImagen'=> 'Acumedic',
            'TextoAlterno'=> 'Acumedic'
        ]);

        $contacto = Contacto::create([
            'Telefono' => '961-359-1414',
            'Horario'=> 'Lunes a Sábado (11:00 - 15:00 , 17:00 - 19:00)'
        ]);
    }
}
