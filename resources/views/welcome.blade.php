<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl max-l-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  shadow-xl sm:rounded-lg">

                <!--aqui empieza el desmais -->

                <div class="col-md-12">
                    <div class="card" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);">
                        <div class="card-header">
                            <center>
                                <h3>UNIVER: Formato de baja</h3>
                            </center>
                        </div>
                        <br>
                        <div class="col-md-8">
                            <a href="{{route('alumnos.index')}}">
                                <button type="button" class="btn btn-dark">Alumnos registrados</button>
                            </a>
                            @if(Auth::user()->id_rol == 1)
                            <a href="{{route('registrarUsuario')}}">
                                <button type="button" class="btn btn-outline-success">Agregar usuario</button>
                            </a>
                            @endif
                            @if(Auth::user()->id_rol == 1)
                            <a href="{{route('listaUsuarios')}}">
                                <button type="button" class="btn btn-outline-success">Lista de usuarios</button>
                            </a>
                            @endif
                        </div>
                        <br>
                        <form method="POST" action="{{ route('alumnos.store') }}" aria-label="{{ __('qr') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-4">
                                <select name="listaDeDispositivos" id="listaDeDispositivos"></select>
                                <br><br>
                                <p id="duracion"></p>
                                <br>
                                <button class="btn btn-outline-primary" id="btnComenzarGrabacion">Comenzar</button>
                                <button class="btn btn-outline-primary" id="btnDetenerGrabacion">Detener</button>
                            </div>


                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <br>
                                        <center>
                                            <h4 class="alert alert-secondary">Datos generales</h4>
                                        </center>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="id_pwc">No. De ID</label>
                                        <input id="id_pwc" type="text" placeholder="000008807" class="form-control" name="id_pwc"  autofocus required maxlength="30">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="nombre">Nombres</label>
                                        <input id="nombre" type="text" placeholder="nombre" class="form-control" name="nombre"   autofocus required maxlength="30">
                                    </div>
                                     <div class="col-md-4">
                                        <label for="apellido_paterno">Apellido paterno</label>
                                        <input id="apellido_paterno" type="text" placeholder="Apellido paterno" class="form-control" name="apellido_paterno"   autofocus required maxlength="30">
                                    </div>
                                        <div class="col-md-4">
                                        <label for="apellido_materno">Apellido materno</label>
                                        <input id="apellido_materno" type="text" placeholder="Apellido materno" class="form-control" name="apellido_materno"   autofocus required maxlength="30">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="plantel">Plantel</label>
                                        <select  required autofocus id="plantel" name="plantel" class="form-control"data-live-search="true">
                                            @foreach($planteles as $plantel)
                                            <option  value="{{$plantel->id}}">{{$plantel->nombre_plantel}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="fecha_clase">Fecha</label>
                                        <input id="fecha_clase" type="date" value="{{date('Y-m-d')}}"  class="form-control" name="fecha_clase"   autofocus required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="correo">Correo electr??nico</label>
                                        <input id="correo" type="email"  placeholder="Correo electr??nico" class="form-control" name="correo"   autofocus required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="telefono_celular">Tel??fono Celular</label>
                                        <input id="telefono_celular" type="text"  placeholder="Celular" class="form-control" name="telefono_celular"   autofocus required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="periodo_actual">Periodo Actual</label>
                                        <input id="periodo_actual" type="text"  placeholder="Periodo actual" class="form-control" name="periodo_actual"   autofocus required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="curriculum">Carrera</label>
                                        <input id="curriculum" type="text"  placeholder="Carrera" class="form-control" name="curriculum"   autofocus required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="telefono_particular">Tel??fono particular</label>
                                        <input id="telefono_particular" type="text"  placeholder="Tel??fono particular" class="form-control" name="telefono_particular"   autofocus required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="ultimo_grado">??ltimo grado cursado</label>
                                        <input id="ultimo_grado" type="text"  placeholder="??ltimo grado cursado" class="form-control" name="ultimo_grado"   autofocus required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="programa_grado_actual">Programa y grado actual</label>
                                        <input id="programa_grado_actual" type="text"  placeholder="Programa y grado actual" class="form-control" name="programa_grado_actual"   autofocus required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="telefono_alternativo">Tel??fono alternativo (padre,conyuje,etc)</label>
                                        <input id="telefono_alternativo" type="text"  placeholder="Tel??fono alternativo (padre,conyuje,etc)" class="form-control" name="telefono_alternativo"   autofocus required>
                                    </div>







                                </div>

                            </div>
                             <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <br>
                                        <center>
                                            <h4  class="alert alert-secondary">Datos llenados por el alumno:</h4>
                                        </center>
                                    </div>



                                        <div class="col-md-4">
                                        <label  class="d-inline p-2 bg-primary text-white" for="tipo_baja">Tipo de Baja</label><br> <br>
                                                              &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Definitiva" name="tipo_baja" id="tipo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                 Definitiva
                                            </label><br>
                                                              &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Temporal" name="tipo_baja" id="tipo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                               Temporal
                                            </label><br>
                                                              &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Administrativa" name="tipo_baja" id="tipo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                     Administrativa
                                            </label><br>
                                          &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Academica" name="tipo_baja" id="tipo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                              Academica
                                            </label>



                                    </div>



                                    <div class="col-md-4">
                                        <label  class="d-inline p-2 bg-primary text-white"  for="momento_baja">Momento en que ocurre la baja</label><br> <br>
                                                              &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Intraciclo" name="momento_baja" id="momento_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                 Intraciclo
                                            </label><br>
                                                              &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Interciclo" name="momento_baja" id="momento_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                               Interciclo
                                            </label>

                                    </div>


                                    <div class="col-md-4">
                                        <label  class="d-inline p-2 bg-primary text-white" for="modalidad">Modalidad</label><br> <br>
                                                              &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Bachillerato DGB" name="modalidad" id="modalidad">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Bachillerato DGB
                                            </label><br>
                                                              &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Bachillerato UDG" name="modalidad" id="modalidad">
                                            <label class="form-check-label" for="flexCheckDefault">
                                               Bachillerato UDG
                                            </label>   <br>
                                                              &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Licenciatura Esc" name="modalidad" id="modalidad">
                                            <label class="form-check-label" for="flexCheckDefault">
                                              Licenciatura Esc.
                                            </label>   <br>
                                                              &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Licenciatura Mixta" name="modalidad" id="modalidad">
                                            <label class="form-check-label" for="flexCheckDefault">
                                               Licenciatura Mixta
                                            </label>   <br>
                                                              &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Lic.Online" name="modalidad" id="modalidad">
                                            <label class="form-check-label" for="flexCheckDefault">
                                               Lic.Online
                                            </label>   <br>
                                                              &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Mtria On-Line" name="modalidad" id="modalidad">
                                            <label class="form-check-label" for="flexCheckDefault">
                                               Mtria On-Line
                                            </label><br>
                                                              &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Especialidad" name="modalidad" id="modalidad">
                                            <label class="form-check-label" for="flexCheckDefault">
                                               Especialidad
                                            </label><br>
                                                              &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Mtria Mixta" name="modalidad" id="modalidad">
                                            <label class="form-check-label" for="flexCheckDefault">
                                           Mtria Mixta
                                            </label>

                                    </div>




                                    <div class="col-md-4">
                                        <label  class="d-inline p-2 bg-primary text-white" for="status_academico">Estatus hist??rico</label><br> <br>
                                        &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Nuevo Ingreso" name="status_academico" id="status_academico">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Nuevo Ingreso
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Reingreso" name="status_academico" id="status_academico">
                                            <label class="form-check-label" for="flexCheckDefault">
                                               Reingreso
                                            </label>   <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Regreso" name="status_academico" id="status_academico">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Regreso
                                            </label>

                                    </div>
                                    <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            </div>
                                    <div class="col-md-4">
                                        <label for="ultima_beca">??ltima beca / descto:</label>
                                        <input id="ultima_beca" type="text" placeholder="??ltima beca / descto" class="form-control" name="ultima_beca"   autofocus required maxlength="30">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="avance_academico">% de avance acad??mico:</label>
                                        <input id="avance_academico" type="text" placeholder="%" class="form-control" name="avance_academico"   autofocus required maxlength="30">
                                    </div>



                                </div>

                            </div>

                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <br>
                                        <center>
                                            <h4  class="alert alert-secondary">Especificar motivo de la solicitud de baja:</h4>
                                        </center>
                                    </div>



                                        <div class="col-md-4">
                                        <label  class="d-inline p-2 bg-primary text-white" for="academica">Acad??micas</label><br> <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Insatisfaccion con el nivel acad??mico" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Insatisfaccion con el nivel acad??mico
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Incompatibilidad de horarios" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                              Incompatibilidad de horarios
                                            </label>   <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Insatisfacci??n con el modelo Acad??mico" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                              Insatisfacci??n con el modelo Acad??mico
                                            </label>   <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Experiencia y Vida Estudiantil" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                              Experiencia y Vida Estudiantil
                                            </label>   <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Instatisfacci??n con Docentes" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                               Instatisfacci??n con Docentes
                                            </label>   <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Mala informaci??n de sus tr??mites" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                           Mala informaci??n de sus tr??mites
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Insatisfacci??n de Servs. Acad??micos" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                               Insatisfacci??n de Servs. Acad??micos
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Falta de documentos" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                           Falta de documentos
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Prestigio de la Universidad" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                           Prestigio de la Universidad
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Bullying" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                           Bullying
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Reprobacion bajo promedio" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                           Reprobacion bajo promedio
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Instatisfaccion del servicio Admvo." name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                           Instatisfaccion del servicio Admvo.
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Faltas Insasistencias" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                           Faltas Insasistencias
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Mala Comunicaci??n" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                           Mala Comunicaci??n
                                            </label><br> <br>

                                    </div>
                                    <div class="col-md-4">
                                        <label  class="d-inline p-2 bg-primary text-white" for="sistema">Sistemas</label><br> <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Problema de plataforma moodle" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Problema de plataforma moodle
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Problemas  de pagos en l??nea" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Problemas  de pagos en l??nea
                                            </label>   <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="pago realizado y no reconocido" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Pago realizado y no reconocido
                                            </label>   <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Problemas con medios de pagos" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Problemas con medios de pagos
                                            </label>   <br> <br>
                                            <label  class="d-inline p-2 bg-primary text-white" for="indecision">Indecision</label><br> <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Duda Vocacional" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Duda Vocacional
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Cambio de Instituci??n" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Cambio de Instituci??n
                                            </label>   <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="No continuar?? estudiando" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            No continuar?? estudiando
                                            </label>

                                    </div>

                                    <div class="col-md-4">
                                        <label  class="d-inline p-2 bg-primary text-white" for="Seguridad">Seguridad</label><br> <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Inseguridad del campus" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Inseguridad del campus
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Inseguridad de la ciudad" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Inseguridad de la ciudad
                                            </label><br> <br>
                                            <label  class="d-inline p-2 bg-primary text-white" for="Financieras">Financieras</label><br> <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Adeudo" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                             Adeudo
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Sin Empleo" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Sin Empleo
                                            </label>   <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Falta de Liquidez" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Falta de Liquidez
                                            </label>    <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="P??rdida de Beca" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            P??rdida de Beca
                                            </label>

                                    </div>
                                    <div class="col-md-4">
                                        <label  class="d-inline p-2 bg-primary text-white" for="Personales">Personales</label><br> <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Defunci??n del Tutor" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Defunci??n del Tutor
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Defunci??n Alumno" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                              Defunci??n Alumno
                                            </label>   <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Cambio de Residencia" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                              Cambio de Residencia
                                            </label>   <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Problemas Familiares" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                              Problemas Familiares
                                            </label>   <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Enfermedad/Accidente" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                               Enfermedad/Accidente
                                            </label>   <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Se reinscribir?? a Ciclo Futuro" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                           Se reinscribir?? a Ciclo Futuro
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Ubicaci??n de la Sede" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                              Ubicaci??n de la Sede
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Matrimonio" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                             Matrimonio
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Maternidad/Paternidad" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                           Maternidad/Paternidad
                                            </label>

                                    </div>

                                    <div class="col-md-4">
                                        <label  class="d-inline p-2 bg-primary text-white" for="otro">Otros:</label><br> <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="No se apertur?? el grupo" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            No se apertur?? el grupo
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Cambio de ciclo futuro" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Cambio de ciclo futuro
                                            </label>   <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Cambio de nivel" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Cambio de nivel
                                            </label>

                                    </div>
                                    <div class="col-md-4">
                                        <label  class="d-inline p-2 bg-primary text-white" for="Administrativas">Administrativas</label><br> <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Baja por aduedo" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Baja por aduedo
                                            </label><br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Baja por inasistencia" name="motivo_baja" id="motivo_baja">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Baja por inasistencia
                                            </label>

                                    </div>


                                </div>

                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <br>
                                        <center>
                                            <h4 class="alert alert-secondary">Motivos de la baja</h4>
                                        </center>
                                    </div>

                                    <div class="col-md-12">

                                       <textarea class="form-control" name="especifica_baja" id="especifica_baja" rows="3"></textarea>
                                    </div>


                                </div>

                            </div>

                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <br>
                                        <center>
                                            <h4 class="alert alert-secondary">Entrevista</h4>
                                        </center>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="">??Cual es el motivo?</label>
                                        <textarea required autofocus class="form-control" name="motivo_baja_2" id="motivo_baja_2" rows="3"></textarea>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="">??Tu familia esta al tanto de esta descici??n?</label>
                                        <br> <br>
                                        &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Si" name="descicion_familia" id="descicion_familia">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Si
                                        </label><br>
                                        &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="No" checked name="descicion_familia" id="descicion_familia">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        No
                                        </label>
                                    </div>

                                    <div hidden id="div_familia_opinion" class="col-md-4">
                                        <label for="">??Que opinan ellos?</label>
                                        <textarea class="form-control" name="familia_opinion" id="familia_opinion" rows="3"></textarea>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="">??C??mo puede hacer univer para que no dejes los estudios?</label>
                                        <textarea required autofocus class="form-control" name="evitar_baja" id="evitar_baja" rows="3"></textarea>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="">??C??mo fue tu relaci??n con el ??rea administrativa?</label>
                                        <textarea required autofocus class="form-control" name="relacion_administrativo" id="relacion_administrativo" rows="3"></textarea>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="">??Como fue tu experiencia con los docentes?</label>
                                        <textarea required autofocus class="form-control" name="docentes" id="docentes" rows="3"></textarea>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="">Califica la dinamica de tus clases del 1 al 10</label>
  
                                            <select  required autofocus id="puntuacion" name="puntuacion" class="form-control"data-live-search="true">
                                                <option  value="">Escoge calificaci??n</option>
                                                <option  value="1">1</option>
                                                <option  value="2">2</option>
                                                <option  value="3">3</option>
                                                <option  value="4">4</option>
                                                <option  value="5">5</option>
                                                <option  value="6">6</option>
                                                <option  value="7">7</option>
                                                <option  value="8">8</option>
                                                <option  value="9">9</option>
                                                <option  value="10">10</option>
                                            </select>
                                        
                                    </div>

                                    <div class="col-md-4">
                                        <label for="">??Recomendarias a otros amigos a estudiar en la misma instituci??n?</label>
                                        <br> <br>
                                        &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="Si" checked name="recomendacion" id="recomendacion">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Si
                                        </label><br>
                                        &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" value="No" name="recomendacion" id="recomendacion">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        No
                                        </label>
                                    </div>

                                    <div  id="div_recomendacion_porque"class="col-md-4">
                                        <label for="">??Por qu???</label>
                                        <textarea class="form-control" name="recomendacion_porque" id="recomendacion_porque" rows="3"></textarea>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="">??Como consideras que la escuela podria mejorar el servicio para evitar bajas?</label>
                                        <textarea required autofocus class="form-control" name="mejorar_servicio" id="mejorar_servicio" rows="3"></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="">Comentarios</label>
                                        <textarea class="form-control" name="comentarios_2" id="comentarios_2" rows="3"></textarea>
                                    </div>

                                </div>

                            </div>

                            <div class="card-footer">
                                <div class="col-md-12">
                                    <center>
                                        <button type="submit" id="guardar" class="btn btn-success">
                                            <i class="fas fa-save"></i>&nbsp;&nbsp;{{ __('Guardar') }}
                                        </button>
                                        <a href="{{route('alumnos.index')}}">
                                            <button type="button" class="btn btn-default" >
                                                <i class="fas fa-undo-alt"></i>&nbsp;&nbsp;{{ __('Regresar') }}
                                            </button>
                                        </a>
                                    </center>
                                </div>
                            </div>
                        </form>
                        <!-- formulario -->
                    </div>
                </div>



                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

                <!-- Latest compiled and minified JavaScript -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

                <!-- (Optional) Latest compiled and minified JavaScript translation files -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
                <script defer src="{{asset('/js/cliente/cliente.js')}}"></script>

                <!--aqui termina -->


            </div>
        </div>
    </div>
</x-app-layout>
