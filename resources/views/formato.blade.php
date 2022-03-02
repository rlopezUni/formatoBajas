
<x-guest-layout>
    <style>
    /* table, th , td{
        border: 1px solid black;
    } */
    th, td{
        padding: 4px;
        text-align: left;
    }
    body{
        -webkit-print-color-adjust: exact;
        font-size: 10px;
            }
</style>
<link href="{{ env('APP_URL') }}/css/pdf/memorias.css" rel="stylesheet">
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl max-l-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  shadow-xl sm:rounded-lg">

                <!--aqui empieza el desmais -->
                    <table id="datos-personales" style="width:100%;">
        <tr>
            <td style="height: 40px;">
                <img src="" alt="">
            </td>
            <td colspan="2" style="text-align: center; background-color: blue; color: white; font-weight: bold;">UNIVER</td>
        </tr>
        <tr>
            <td colspan="2" style="width: 70%; height: 40px;"></td>
            <td style="width: 30%;">Fecha: {{date("d/m/Y", strtotime($registro->fecha))}}</td>
        </tr>
        <tr>
            <td style="width: 40%;">Nombre: {{$registro->nombre}} {{$registro->apellido_paterno}}  {{$registro->apellido_materno}}</td>
            <td colspan="2" style="width: 60%;">Correo electronico: {{$registro->correo}}</td>
        </tr>
        <tr>
            <td style="width: 20%;">No. De ID: {{$registro->id_pwc}}</td>
            <td style="width: 40%;">Teléfono Celular: {{$registro->telefono_celular}}</td>
            <td style="width: 40%;">Periodo Actual: {{$registro->periodo_actual}}</td>
        </tr>
        <tr>
            <td style="width: 20%;">Curriculum:  {{$registro->curriculum}}</td>
            <td style="width: 40%;">Teléfono particular: {{$registro->telefono_particular}}</td>
            <td style="width: 40%;">Último grado cursado: {{$registro->ultimo_grado}}</td>
        </tr>
        <tr>
            <td style="width: 40%;">Programa y grado actual: {{$registro->programa_grado_actual}}</td>
            <td colspan="2" style="width: 60%;">Teléfono alternativo (padre,conyuje,etc): {{$registro->telefono_alternativo}}</td>
        </tr>
    </table>
    <table id="ratificacion-baja" style="width: 100%; width: 100%; border: 1px solid black;">
        <tr style="border: 1px solid black;">
            <th colspan="2" style="border: 1px solid black;">Por este medio ratifico mi decisión de baja</th>
        </tr>
        <tr style="border: 1px solid black;">
            <td style="width: 50%; background-color: grey; text-align: center; border: 1px solid black; color: white;">Estudiante</td>
            <td style="width: 50%; background-color: grey; text-align: center; border: 1px solid black; color: white;">Padre o tutor económico (sólo en caso de menores de edad)</td>
        </tr>
        <tr style="border: 1px solid black;">
            <td style="width: 50%; height: 100px; border: 1px solid black;"></td>
            <td colspan="2" style="width: 50%; height: 100px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td style="width: 50%; text-align: center; border: 1px solid black;">Nombre y Firma</td>
            <td colspan="2" style="width: 50%; text-align: center; border: 1px solid black;">Nombre y Firma</td>
        </tr>
    </table>
    <table id="datos-alumno" style="width: 100%;">
        <tr>
            <th colspan="6">Datos llenados por el alumno:</th>
        </tr>
        <tr>
            <td colspan="4" style="background-color: grey; text-align: center; width: 68%; color: white;">Tipo de baja:</td>
            <td colspan="2" style="background-color: grey; text-align: center; width: 32%; color: white;">Momento en que ocurre la baja</td>
        </tr>
        <tr>
            <td style="width: 17%;">
                <input type="radio" id="definitiva" name="tipo-baja" value="Definitiva" @if($formato->tipo_baja == 'Definitiva') checked @endif> 
                <label for="definitiva">Definitiva</label>
            </td>
            <td style="width: 17%;">
                <input type="radio" id="temporal" name="tipo-baja" value="Temporal" @if($formato->tipo_baja == 'Temporal') checked @endif> 
                <label for="temporal">Temporal</label>
            </td>
            <td style="width: 17%;">
                <input type="radio" id="admin" name="tipo-baja" value="Administrativa" @if($formato->tipo_baja == 'Administrativa') checked @endif> 
                <label for="admin">Administrativa</label>
            </td>
            <td style="width: 17%;">
                <input type="radio" id="academica" name="tipo-baja" value="Academica" @if($formato->tipo_baja == 'Academica') checked @endif> 
                <label for="academica">Academica</label>
            </td>
            <td>
                <input type="radio" id="intra-ciclo" name="momento-baja" value="Intraciclo" @if($formato->momento_baja == 'Intraciclo') checked @endif> 
                <label for="intra-ciclo">Intraciclo</label>
            </td>
            <td>
                <input type="radio" id="inter-ciclo" name="momento-baja" value="Interciclo" @if($formato->momento_baja == 'Interciclo') checked @endif> 
                <label for="inter-ciclo">Interciclo</label>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="background-color: grey; text-align: center; color: white;">Modelo</td>
            <td colspan="2" style="background-color: grey; text-align: center; color: white;">Estatus histórico</td>
        </tr>
        <tr>
            <td>
               <input type="radio" id="bachi-dgb" name="modalidad-baja" value="Bachillerato DGB" @if($formato->modalidad == 'Bachillerato DGB') checked @endif> 
               <label for="bachi-dgb">Bachillerato DGB</label>
            </td>
            <td>
                <input type="radio" id="lic-esc" name="modalidad-baja" value="Licenciatura Esc." @if($formato->modalidad == 'Licenciatura Esc') checked @endif> 
                <label for="lic-esc">Licenciatura Esc.</label>
             </td>
             <td>
                <input type="radio" id="lic-online" name="modalidad-baja" value="Lic. Online" @if($formato->modalidad == 'Lic.Online') checked @endif> 
                <label for="lic-online">Lic. Online</label>
             </td>
             <td>
                <input type="radio" id="especialidad" name="modalidad-baja" value="Especialidad" @if($formato->modalidad == 'Especialidad') checked @endif> 
                <label for="especialidad">Especialidad</label>
             </td>
             <td>
                <input type="radio" id="nuevo-ingreso" name="historico-baja" value="Nuevo Ingreso" @if($formato->status_academico == 'Nuevo Ingreso') checked @endif> 
                <label for="nuevo-ingreso">Nuevo Ingreso</label>
             </td>
             <td>
                <input type="radio" id="especialidad" name="historico-baja" value="Regreso" @if($formato->status_academico == 'Regreso') checked @endif> 
                <label for="especialidad">Regreso</label>
             </td>
        </tr>
        <tr>
            <td>
                <input type="radio" id="bachi-udg" name="modalidad-baja" value="Bachillerato UDG" @if($formato->modalidad == 'Bachillerato DGB') checked @endif> 
                <label for="bachi-udg">Bachillerato UDG</label>
             </td>
             <td>
                 <input type="radio" id="lic-mix" name="modalidad-baja" value="Licenciatura Mixta" @if($formato->modalidad == 'Bachillerato UDG') checked @endif> 
                 <label for="lic-mix">Licenciatura Mixta</label>
              </td>
              <td>
                 <input type="radio" id="mtria-online" name="modalidad-baja" value="Mtria. Online" @if($formato->modalidad == 'Mtria On-Line') checked @endif> 
                 <label for="mtria-online">Mtria. Online</label>
              </td>
              <td>
                 <input type="radio" id="mtria-mix" name="modalidad-baja" value="Mtria Mixta" @if($formato->modalidad == 'Mtria Mixta') checked @endif> 
                 <label for="mtria-mix">Mtria Mixta</label>
              </td>
              <td>
                 <input type="radio" id="reingreso" name="historico-baja" value="Reingreso" @if($formato->status_academico == 'Reingreso') checked @endif> 
                 <label for="reingreso">Reingreso</label>
              </td>
        </tr>
        <tr>
            <td colspan="3">Ultima beca / descuento: {{$formato->ultima_beca}}</td>
            <td colspan="3">% de avance académico: {{$formato->avance_academico}}</td>
        </tr>
    </table>
    <table id="motivo-solicitud" style="width: 100%;">
        <tr>
            <th colspan="5" style="background-color: grey; color: white;">Estudiante</th>
        </tr>
        <tr>
            <td colspan="2" style="background-color: grey; text-align: center; color: white;">Académica</td>
            <td style="background-color: grey; text-align: center; color: white;">Indecision</td>
            <td style="background-color: grey; text-align: center; color: white;">Financiera</td>
            <td style="background-color: grey; text-align: center; color: white;">Seguridad</td>
        </tr>
        <tr>
            <td>
                <input type="radio" id="insat-nivel-academico" name="especificacion-baja" value="Insatisfacción con el nivel academico" @if($formato->motivo_baja == 'Insatisfacción con el modelo Académico') checked @endif> 
                <label for="insat-nivel-academico">Insatisfacción con el nivel academico</label>
            </td>
            <td>
                <input type="radio" id="incompativilidad" name="especificacion-baja" value="Incompatibilidad de horarios" @if($formato->motivo_baja == 'Incompatibilidad de horarios') checked @endif> 
                <label for="incompativilidad">Incompatibilidad de horarios</label>
            </td> 
            <td>
                <input type="radio" id="duda-vocacional" name="especificacion-baja" value="Duda Vocacional" @if($formato->motivo_baja == 'Duda Vocacional') checked @endif> 
                <label for="duda-vocacional">Duda Vocacional</label>
            </td> 
            <td>
                <input type="radio" id="adeudo" name="especificacion-baja" value="Adeudo" @if($formato->motivo_baja == 'Adeudo') checked @endif> 
                <label for="adeudo">Adeudo</label>
            </td> 
            <td>
                <input type="radio" id="inseguridad-campus" name="especificacion-baja" value="Inseguridad del campus" @if($formato->motivo_baja == 'Inseguridad del campus') checked @endif> 
                <label for="inseguridad-campus">Inseguridad del campus</label>
            </td> 
        </tr>
        <tr>
            <td>
                <input type="radio" id="insat-modulo-academico" name="especificacion-baja" value="Insatisfacción con el modelo académico " @if($formato->motivo_baja == 'Insatisfacción con el modelo académico') checked @endif> 
                <label for="insat-modulo-academico">Insatisfacción con el modelo académico </label>
            </td>
            <td>
                <input type="radio" id="experiencia-estudiantil" name="especificacion-baja" value="Experiencia y Vida Estudiantil" @if($formato->motivo_baja == 'Experiencia y Vida Estudiantil') checked @endif> 
                <label for="experiencia-estudiantil">Experiencia y Vida Estudiantil</label>
            </td> 
            <td>
                <input type="radio" id="cambio-institucion" name="especificacion-baja" value="Cambio de Institución" @if($formato->motivo_baja == 'Cambio de Institución') checked @endif> 
                <label for="cambio-institucion">Cambio de Institución</label>
            </td> 
            <td>
                <input type="radio" id="sin-empleo" name="especificacion-baja" value="Sin Empleo" @if($formato->motivo_baja == 'Sin Empleo') checked @endif> 
                <label for="sin-empleo">Sin Empleo</label>
            </td> 
            <td>
                <input type="radio" id="inseguridad-cd" name="especificacion-baja" value="Inseguridad de la ciudad" @if($formato->motivo_baja == 'Inseguridad de la ciudad') checked @endif> 
                <label for="inseguridad-cd">Inseguridad de la ciudad</label>
            </td> 
        </tr>
        <tr>
            <td>
                <input type="radio" id="insat-docente" name="especificacion-baja" value="Instatisfacción con Docentes" @if($formato->motivo_baja == 'Instatisfacción con Docentes') checked @endif> 
                <label for="insat-docente">Instatisfacción con Docentes</label>
            </td>
            <td>
                <input type="radio" id="mala-info" name="especificacion-baja" value="Mala información de sus trámites" @if($formato->motivo_baja == 'Mala información de sus trámites') checked @endif> 
                <label for="mala-info">Mala información de sus trámites</label>
            </td> 
            <td>
                <input type="radio" id="no-continua-estudiando" name="especificacion-baja" value="No continuará estudiando" @if($formato->motivo_baja == 'No continuará estudiando') checked @endif> 
                <label for="no-continua-estudiando">No continuará estudiando</label>
            </td> 
            <td>
                <input type="radio" id="liquidez" name="especificacion-baja" value="Falta de Liquidez" @if($formato->motivo_baja == 'Falta de Liquidez') checked @endif> 
                <label for="liquidez">Falta de Liquidez</label>
            </td> 
            <td></td> 
        </tr>
        <tr>
            <td>
                <input type="radio" id="insat-serv-academico" name="especificacion-baja" value="Insatisfacción de Servs. Académicos" @if($formato->motivo_baja == 'Insatisfacción de Servs. Académicos') checked @endif> 
                <label for="insat-serv-academico">Insatisfacción de Servs. Académicos</label>
            </td>
            <td>
                <input type="radio" id="falta-documentos" name="especificacion-baja" value="Falta de documentos" @if($formato->motivo_baja == 'Falta de documentos') checked @endif>  
                <label for="falta-documentos">Falta de documentos</label>
            </td> 
            <td ></td> 
            <td>
                <input type="radio" id="perdida-beca" name="especificacion-baja" value="Pérdida de Beca" @if($formato->motivo_baja == 'Pérdida de Beca') checked @endif> 
                <label for="perdida-beca">Pérdida de Beca</label>
            </td> 
            <td style="background-color: grey; text-align: center; color: white;">Administrativas</td> 
        </tr>
        <tr>
            <td>
                <input type="radio" id="prestigio-universidad" name="especificacion-baja" value="Prestigio de la Universidad" @if($formato->motivo_baja == 'Prestigio de la Universidad') checked @endif> 
                <label for="prestigio-universidad">Prestigio de la Universidad</label>
            </td>
            <td>
                <input type="radio" id="bullying" name="especificacion-baja" value="Bullying" @if($formato->motivo_baja == 'Bullying') checked @endif> 
                <label for="bullying">Bullying</label>
            </td> 
            <td style="background-color: grey; text-align: center; color: white;">Otros</td>
            <td ></td>
            <td>
                <input type="radio" id="por-aduedo" name="especificacion-baja" value="Baja por aduedo" @if($formato->motivo_baja == 'Baja por aduedo') checked @endif> 
                <label for="por-aduedo">Baja por aduedo</label>
            </td>  
        </tr>
        <tr>
            <td>
                <input type="radio" id="bajo-promedio" name="especificacion-baja" value="Reprobacion bajo promedio" @if($formato->motivo_baja == 'Reprobacion bajo promedio') checked @endif> 
                <label for="bajo-promedio">Reprobacion bajo promedio</label>
            </td>
            <td>
                <input type="radio" id="insatisfaccion-serv-admin" name="especificacion-baja" value="Instatisfaccion del servicio Admvo." @if($formato->motivo_baja == 'Instatisfaccion del servicio Admvo.') checked @endif> 
                <label for="insatisfaccion-serv-admin">Instatisfaccion del servicio Admvo.</label>
            </td> 
            <td>
                <input type="radio" id="no-apertura-grupo" name="especificacion-baja" value="No se aperturó el grupo" @if($formato->motivo_baja == 'No se aperturó el grupo') checked @endif> 
                <label for="no-apertura-grupo">No se aperturó el grupo</label>
            </td> 
            <td style="background-color: grey; text-align: center; color: white;">Sistemas</td>
            <td>
                <input type="radio" id="por-inasistencias" name="especificacion-baja" value="Baja por inasistencias" @if($formato->motivo_baja == 'Baja por inasistencia') checked @endif> 
                <label for="por-inasistencias">Baja por inasistencias</label>
            </td>  
        </tr>
        <tr>
            <td>
                <input type="radio" id="faltas" name="especificacion-baja" value="Faltas Insasistencias" @if($formato->motivo_baja == 'Faltas Insasistencias') checked @endif> 
                <label for="faltas">Faltas Insasistencias</label>
            </td>
            <td>
                <input type="radio" id="mala-comunicación" name="especificacion-baja" value="Mala Comunicación" @if($formato->motivo_baja == 'Mala Comunicación') checked @endif> 
                <label for="mala-comunicación">Mala Comunicación</label>
            </td> 
            <td>
                <input type="radio" id="cambio-ciclo" name="especificacion-baja" value="Cambio de ciclo futuro" @if($formato->motivo_baja == 'Cambio de ciclo futuro') checked @endif> 
                <label for="cambio-ciclo">Cambio de ciclo futuro</label>
            </td> 
            <td>
                <input type="radio" id="problemas-moodle" name="especificacion-baja" value="Problema de plataforma moodle" @if($formato->motivo_baja == 'Problema de plataforma moodle') checked @endif> 
                <label for="problemas-moodle">Problema de plataforma moodle</label>
            </td>  
            <td></td>  
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="radio" id="cambio-nivel" name="especificacion-baja" value="Cambio de nivel" @if($formato->motivo_baja == 'Cambio de nivel') checked @endif> 
                <label for="cambio-nivel">Cambio de nivel</label>
            </td> 
            <td>
                <input type="radio" id="problemas-moodle" name="especificacion-baja" value="Problemas  de pagos en línea" @if($formato->motivo_baja == 'Problemas  de pagos en línea') checked @endif>  
                <label for="problemas-moodle">Problemas  de pagos en línea</label>
            </td>  
            <td></td>  
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <input type="radio" id="pago-no-reconocido" name="especificacion-baja" value="pago realizado y no reconocido" @if($formato->motivo_baja == 'pago realizado y no reconocido') checked @endif> 
                <label for="pago-no-reconocido">pago realizado y no reconocido</label>
            </td>  
            <td></td>  
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <input type="radio" id="medios-pago" name="especificacion-baja" value="Problemas con medios de pagos" @if($formato->motivo_baja == 'Problemas con medios de pagos') checked @endif> 
                <label for="medios-pago">Problemas con medios de pagos</label>
            </td>  
            <td></td>  
        </tr>
        <tr>
            <td colspan="5" style="background-color: grey; text-align: center; color: white;">Personales</td>
        </tr>
        <tr>
            <td>
                <input type="radio" id="defunción-tutor" name="especificacion-baja" value="Defunción del Tutor" @if($formato->motivo_baja == 'Defunción del Tutor') checked @endif> 
                <label for="defunción-tutor">Defunción del Tutor</label>
            </td>
            <td>
                <input type="radio" id="defunción-alumno" name="especificacion-baja" value="Defunción Alumno" @if($formato->motivo_baja == 'Defunción Alumno') checked @endif> 
                <label for="defunción-alumno">Defunción Alumno</label>
            </td> 
            <td>
                <input type="radio" id="cambio-residencia" name="especificacion-baja" value="Cambio de Residencia" @if($formato->motivo_baja == 'Cambio de Residencia') checked @endif> 
                <label for="cambio-residencia">Cambio de Residencia</label>
            </td> 
            <td>
                <input type="radio" id="problemas-familiares" name="especificacion-baja" value="Problemas Familiares" @if($formato->motivo_baja == 'Problemas Familiares') checked @endif> 
                <label for="problemas-familiares">Problemas Familiares</label>
            </td> 
            <td>
                <input type="radio" id="enfermedad-accidente" name="especificacion-baja" value="Enfermedad/Accidente" @if($formato->motivo_baja == 'Enfermedad/Accidente') checked @endif> 
                <label for="enfermedad-accidente">Enfermedad/Accidente</label>
            </td>  
        </tr>
        <tr>
            <td>
                <input type="radio" id="defunción-tutor" name="especificacion-baja" value="Se reinscribirá a Ciclo Futuro" @if($formato->motivo_baja == 'Se reinscribirá a Ciclo Futuro') checked @endif> 
                <label for="defunción-tutor">Se reinscribirá a Ciclo Futuro</label>
            </td>
            <td>
                <input type="radio" id="defunción-alumno" name="especificacion-baja" value="Ubicación de la Sede" @if($formato->motivo_baja == 'Ubicación de la Sede') checked @endif> 
                <label for="defunción-alumno">Ubicación de la Sede</label>
            </td> 
            <td>
                <input type="radio" id="cambio-residencia" name="especificacion-baja" value="Matrimonio" @if($formato->motivo_baja == 'Matrimonio') checked @endif> 
                <label for="cambio-residencia">Matrimonio</label>
            </td> 
            <td>
                <input type="radio" id="problemas-familiares" name="especificacion-baja" value="Maternidad/Paternidad" @if($formato->motivo_baja == 'Maternidad/Paternidad') checked @endif> 
                <label for="problemas-familiares">Maternidad/Paternidad</label>
            </td> 
            <td></td>
        </tr>
    </table><br><br><br><br>
    <table id="firma-autoridades"style="width: 100%; border: 1px solid black;">
        <tr>
           <td colspan="2" style="background-color: grey; text-align: center; border: 1px solid black; color: white;">Firma de Autoridades</td> 
        </tr>
        <tr>
            <td style="text-align: center; width: 50%; border: 1px solid black;">Director de Plantel</td>
            <td style="text-align: center; width: 50%; border: 1px solid black;">Responsable de Control Escolar</td>
        </tr>
        <tr>
            <td style="height: 100px; border: 1px solid black;"></td>
            <td style="height: 100px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td style="text-align: center; border: 1px solid black;">Nombre, firma y fecha del Director del plantel</td>
            <td style="text-align: center; border: 1px solid black;">Nombre, firma y fecha del responsable de Control Escolar</td>
        </tr>
    </table><br>
    <table id="Autorizaciones"style="width: 100%; border: 1px solid black;">
        <tr>
           <td colspan="2" style="background-color: grey; text-align: center; border: 1px solid black; color: white;">Autorizaciones</td> 
        </tr>
        <tr>
            <td style="text-align: center; width: 50%; border: 1px solid black;">Caja</td>
            <td style="text-align: center; width: 50%; border: 1px solid black;">Rector</td>
        </tr>
        <tr>
            <td style="height: 100px; border: 1px solid black;"></td>
            <td style="height: 100px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td style="text-align: center; border: 1px solid black;">Nombre, firma y fecha y sello</td>
            <td style="text-align: center; border: 1px solid black;">Nombre, firma y fecha</td>
        </tr>
    </table>
    <br>
    <table id="Autorizaciones2"style="width: 100%; border: 1px solid black;">
        <tr>
            <td style="text-align: center; width: 50%; border: 1px solid black;">Dirección Academica</td>
            <td style="text-align: center; width: 50%; border: 1px solid black;">Éxito Estudiantil</td>
        </tr>
        <tr>
            <td style="height: 100px; border: 1px solid black;"></td>
            <td style="height: 100px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td style="text-align: center; border: 1px solid black;">Nombre, firma y fecha y sello</td>
            <td style="text-align: center; border: 1px solid black;">Nombre, firma y fecha y sello</td>
        </tr>
    </table>
    <br>
    <table id="Comentarios"style="width: 100%; border: 1px solid black;">
        <tr>
           <td style="background-color: grey; border: 1px solid black; color: white;">Motivos de la baja</td> 
        </tr>
        <tr>
            <td style="height: 100px; border: 1px solid black;">{{$formato->especifica_baja}}</td>
        </tr>
        <tr>
            <td style="background-color: grey; border: 1px solid black; color: white;">Cometarios Plantel</td> 
         </tr>
         <tr>
             <td style="height: 100px; border: 1px solid black;"></td>
         </tr>
    </table><br>
    <p>
        <h2>Nota: Para efecto de la entrega de la documentación es importante que se consideren los siguientes puntos:</h2>
        <ul>
            <li>Pago de la baja</li>
            <li>Tener cubierto todos los pagos hasta el día que curso clases</li>
            <li>La baja es valida con la firma de todos los involucrados</li>
            <li>Si el alumno no concluye con el trámite, pierde su efecto a los 3 días hábiles, después de estos días pierde su vigencia y debe comenzar su trámite</li>
        </ul>
    </p>

                <!--aqui termina -->


            </div>
        </div>
    </div>
</x-guest-layout>
