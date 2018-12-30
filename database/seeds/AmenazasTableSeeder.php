<?php

use Illuminate\Database\Seeder;

class AmenazasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('amenazas')->insert([
                 ['tipo' => '1','codigo' => 'DN1','nombre' => 'Fuego (incendios) [N1]','descripcion' => 'Posibilidad de que el fuego acabe con recursos del sistema',],
                 ['tipo' => '1','codigo' => 'DN2','nombre' => 'Daños por agua (Inundaciones) [N2]','descripcion' => 'Posibilidad de que el agua acabe con recursos del sistema',],
                 ['tipo' => '2','codigo' => 'OI1','nombre' => 'Avería de origen físico o lógico [I1]','descripcion' => 'Fallos en los equipos (hardware) o falla en los programas (software)',],
                 ['tipo' => '2','codigo' => 'OI2','nombre' => 'Corte del suministro eléctrico [I2]','descripcion' => 'Pérdida o cese del fluido eléctrico',],
                 ['tipo' => '2','codigo' => 'OI3','nombre' => 'Falla en los equipos de climatización [3]','descripcion' => 'Dejando en condiciones inadecuadas a los servidores y otros equipos de telecomunicaciones',],
                 ['tipo' => '2','codigo' => 'OI4','nombre' => 'Fallo en los servicios de comunicaciones [I4]','descripcion' => 'Daño o destrucción de los medios físicos, y caída del enlace de las redes y telecomunicaciones',],
                 ['tipo' => '2','codigo' => 'OI5','nombre' => 'Perdida o fallo de servicios terceros [I5]','descripcion' => 'Servicios o recursos de los que depende la operación de los equipos y de las redes (Movistar, Claro)',],
                 ['tipo' => '2','codigo' => 'OI6','nombre' => 'Degradación de los soportes de almacenamiento de la información [I6]','descripcion' => 'Avería o falla de los mismos como consecuencia del paso del tiempo o uso inadecuado',], 
                 ['tipo' => '3','codigo' => 'EF1','nombre' => 'Errores de los usuarios [F1]','descripcion' => 'Error de uso de los servicios o datos',],
                 ['tipo' => '3','codigo' => 'EF2','nombre' => 'Errores del administrador [F2]','descripcion' => 'Error de configuración y  uso de los responsables de instalación y operación',],
                 ['tipo' => '3','codigo' => 'EF3','nombre' => 'Errores de monitorización (log) [F3]','descripcion' => 'Registros de actividades fallidos, incompletos, faltantes',],
                 ['tipo' => '3','codigo' => 'EF4','nombre' => 'Deficiencias en el área [F4]','descripcion' => 'Acciones del personal descoordinadas, errores por omisión',],
                 ['tipo' => '3','codigo' => 'EF5','nombre' => 'Difusión de software  dañino [F5]','descripcion' => 'Visita frecuente de paginas con alto contenido de virus, spyware, gusanos, troyanos, etc',],
                 ['tipo' => '3','codigo' => 'EF6','nombre' => 'Errores de re - encaminamiento [F6]','descripcion' => 'Envío de información a través de una ruta, sistema o red incorrecta',],
                 ['tipo' => '3','codigo' => 'EF7','nombre' => 'Fugas de información [F7]','descripcion' => 'Transferencia o revelación accidental de información almacenada en algún soporte informático',],
                 ['tipo' => '3','codigo' => 'EF8','nombre' => 'Destrucción de información [F8]','descripcion' => 'Eliminación accidental de información almacenada en algún soporte informático o medio físico',],
                 ['tipo' => '3','codigo' => 'EF9','nombre' => 'Error en el uso de programas de uso gratuito o libre (software) [F9]','descripcion' => 'Defectos en el código o funcionalidad de los programas',],
                 ['tipo' => '3','codigo' => 'EF10','nombre' => 'Errores de actualización de software [F10]','descripcion' => 'Defectos en los procedimientos o controles de actualización',],
                 ['tipo' => '3','codigo' => 'EF11','nombre' => 'Errores en el mantenimiento preventivo o correctivo [F11]','descripcion' => 'Errores u omisiones en los procedimientos preventivos del software y hardware,  perjuicio a la mantenibilidad del sistema de información',],
                 ['tipo' => '3','codigo' => 'EF12','nombre' => 'Pérdida de equipos [F12]','descripcion' => 'Pérdida de equipos (hardware) y soportes de información',],
                 ['tipo' => '4','codigo' => 'AI1','nombre' => 'Indisponibilidad del personal [A1]','descripcion' => 'Ausencia del puesto de trabajo',],
                 ['tipo' => '4','codigo' => 'AI2','nombre' => 'Manipulación de la configuración [A2]','descripcion' => 'Configuración del software o hardware por personal no responsable del mismo',],
                 ['tipo' => '4','codigo' => 'AI3','nombre' => 'Suplantación de la identidad del usuario [A3]','descripcion' => 'Intención de actuar con impunidad, usurpación de derechos y privilegios de acceso',],
                 ['tipo' => '4','codigo' => 'AI4','nombre' => 'Abuso de privilegios de acceso [A4]','descripcion' => 'Abuso de derecho y nivel de privilegios ajenos a su competencia',],
                 ['tipo' => '4','codigo' => 'AI5','nombre' => 'Uso no previsto [A5]','descripcion' => 'Utilización de los recursos del sistema para fines no previstos',],
                 ['tipo' => '4','codigo' => 'AI6','nombre' => 'Difusión de software dañino [A6]','descripcion' => 'Propagación intencionada de virus, spyware, gusanos, troyanos, etc.',],
                 ['tipo' => '4','codigo' => 'AI7','nombre' => 'Acceso no permitido a la información [A7]','descripcion' => 'Intención de acceder a los datos.',],
                 ['tipo' => '4','codigo' => 'AI8','nombre' => 'Monitorización de tráfico de red [A8]','descripcion' => 'Extrae contenido de las comunicaciones: destino, volumen, frecuencia de los intercambios',],
                 ['tipo' => '4','codigo' => 'AI9','nombre' => 'Repudio [A9]','descripcion' => 'Negación de acciones: de origen, de recepción o de entrega',],
                 ['tipo' => '4','codigo' => 'AI10','nombre' => 'Interceptación de información [A10]','descripcion' => 'Extracción o escucha pasiva de información que no le corresponde',],
                 ['tipo' => '4','codigo' => 'AI11','nombre' => 'Modificación malintencionada de la información [A11]','descripcion'=> 'Dañar la información de la empresa, alteración intencional de la información',],
                 ['tipo' => '4','codigo' => 'AI12','nombre' => 'Destrucción de información [A12]','descripcion' => 'Eliminación intencional de información',],
                 ['tipo' => '4','codigo' => 'AI13','nombre' => 'Divulgación de información [A13]','descripcion' => 'Divulgación, geolocalización y copia ilegal de software',],
                 ['tipo' => '4','codigo' => 'AI14','nombre' => 'Manipulación de programas [A14]','descripcion' => 'Alteración intencionada del funcionamiento de los programas',],
                 ['tipo' => '4','codigo' => 'AI15','nombre' => 'Manipulación de los equipos [A15]','descripcion' => 'Sabotaje del hardware',],
                 ['tipo' => '4','codigo' => 'AI16','nombre' => 'Robo [A16]','descripcion' => 'Sustracción de hardware',],
                 ['tipo' => '4','codigo' => 'AI17','nombre' => 'Ataque destructivo [A17]','descripcion' => 'Destrucción de hardware o de soportes',],
                 ['tipo' => '4','codigo' => 'AI18','nombre' => 'Ingeniería social [A18]','descripcion' => 'Abuso de la buena fe de las personas para que realicen actividades que interesan a terceros',]
 
      
       ]);
    }
}
