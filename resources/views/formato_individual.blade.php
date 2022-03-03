<x-guest-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl max-l-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  shadow-xl sm:rounded-lg">

                <div class="col-md-12">
                    <div class="card" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);">
                        <div class="card-header">
                            <br>
                            <a href="{{route('alumnos.index')}}">
                                <button type="button" class="btn btn-dark">Volver a la lista</button>
                            </a>
                            <center>
                                <h3>UNIVER: Bajas confirmadas</h3>
                                <br>
                            </center>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="id">No. de Id</label>
                                    <input id="id" type="text" class="form-control" name="id" value="{{$alumnos->id}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="nombre">Nombres</label>
                                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{$alumnos->nombre}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="apellido_paterno">Apellido paterno</label>
                                    <input id="apellido_paterno" type="text" class="form-control" name="apellido_paterno" value="{{$alumnos->apellido_paterno}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="apellido_materno">Apellido materno</label>
                                    <input id="apellido_materno" type="text" class="form-control" name="apellido_materno" value="{{$alumnos->apellido_materno}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="fecha">Fecha</label>
                                    <input id="fecha" type="text" class="form-control" name="fecha" value="{{$alumnos->fecha}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="email">Correo</label>
                                    <input id="email" type="text" class="form-control" name="email" value="{{$alumnos->correo}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="cell">Celular</label>
                                    <input id="cell" type="text" class="form-control" name="cell" value="{{$alumnos->telefono_celular}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="periodo_actual">Periodo actual</label>
                                    <input id="periodo_actual" type="text" class="form-control" name="periodo_actual" value="{{$alumnos->periodo_actual}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="carrera">Carrera</label>
                                    <input id="carrera" type="text" class="form-control" name="carrera" value="{{$alumnos->curriculum}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="tel">Telefono</label>
                                    <input id="tel" type="text" class="form-control" name="tel" value="{{$alumnos->telefono_particular}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="ult_gra_cur">Último grado cursado</label>
                                    <input id="ult_gra_cur" type="text" class="form-control" name="ult_gra_cur" value="{{$alumnos->ultimo_grado}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="prom_actual">Programa y grado actual</label>
                                    <input id="prom_actual" type="text" class="form-control" name="prom_actual" value="{{$alumnos->programa_grado_actual}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="tel2">Telefono alternativo/secundario</label>
                                    <input id="tel2" type="text" class="form-control" name="tel2" value="{{$alumnos->telefono_alternativo}}" readonly>
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <center>
                                        <label for="tel2"></label>
                                    </center>
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    <label for="baja">Tipo de baja</label>
                                    <input id="baja" type="text" class="form-control" name="baja" value="{{$formatos->tipo_baja}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="moment_baja">Momento en el que ocurre la baja</label>
                                    <input id="moment_baja" type="text" class="form-control" name="moment_baja" value="{{$formatos->momento_baja}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="modalidad">Modalidad</label>
                                    <input id="modalidad" type="text" class="form-control" name="modalidad" value="{{$formatos->modalidad}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="estatus_academico">Estatus academico</label>
                                    <input id="estatus_academico" type="text" class="form-control" name="estatus_academico" value="{{$formatos->status_academico}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="beca">Ultima beca</label>
                                    <input id="beca" type="text" class="form-control" name="beca" value="{{$formatos->ultima_beca}}" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="porcentaje">Porcentaje academico</label>
                                    <input id="porcentaje" type="text" class="form-control" name="porcentaje" value="{{$formatos->avance_academico}}" readonly>
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <center>
                                        <label for="motivo">Motivo de baja</label>
                                    </center>
                                    <input id="motivo" type="text" class="form-control" name="motivo" value="{{$formatos->motivo_baja}}" readonly>
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <center>
                                        <label for="especificar">Motivo de baja (más especifico)</label>
                                    </center>
                                    <input id="especificar" type="text" class="form-control" name="especificar" value="{{$formatos->especifica_baja}}" readonly>
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <center>
                                        <label for="tel2"></label>
                                    </center>
                                    <br>
                                </div>
                                <div class="col-md-12">
                                    <label for="motivo_pregunta">¿Cual es el motivo?</label>
                                    <input id="motivo_pregunta" type="text" class="form-control" name="motivo_pregunta" value="{{$entrevista->motivo_baja}}" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="familia_saber">¿Tu familia esta al tanto de esta descición?</label>
                                    <input id="familia_saber" type="text" class="form-control" name="familia_saber" value="{{$entrevista->familia}}" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="familia_opinion">¿Que opinan ellos?</label>
                                    <input id="familia_opinion" type="text" class="form-control" name="familia_opinion" value="{{$entrevista->familia_opinion}}" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="no_dejar">¿Cómo puede hacer univer para que no dejes los estudios?</label>
                                    <input id="no_dejar" type="text" class="form-control" name="no_dejar" value="{{$entrevista->que_puede_hacer}}" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="relacion_administrativo">¿Cómo fue tu relación con el área administrativa?</label>
                                    <input id="relacion_administrativo" type="text" class="form-control" name="relacion_administrativo" value="{{$entrevista->relacion}}" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="docente_exp">¿Como fue tu experiencia con los docentes?</label>
                                    <input id="docente_exp" type="text" class="form-control" name="docente_exp" value="{{$entrevista->docentes}}" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="puntuacion">Califica la dinamica de tus clases del 1 al 10</label>
                                    <input id="puntuacion" type="text" class="form-control" name="puntuacion" value="{{$entrevista->puntuacion}}" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="recomendacion">¿Recomendarias a otros amigos a estudiar en la misma institución?</label>
                                    <input id="recomendacion" type="text" class="form-control" name="recomendacion" value="{{$entrevista->recomendarias}}" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="recomendacion_por">¿Por qué?</label>
                                    <input id="recomendacion_por" type="text" class="form-control" name="recomendacion_por" value="{{$entrevista->porque_recomendarias}}" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="servicio">¿Como consideras que la escuela podria mejorar el servicio para evitar bajas?</label>
                                    <input id="servicio" type="text" class="form-control" name="servicio" value="{{$entrevista->como_evitar}}" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="comentario">Comentarios</label>
                                    <input id="comentario" type="text" class="form-control" name="comentario" value="{{$entrevista->comentarios}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>