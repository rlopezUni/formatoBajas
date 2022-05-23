<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl max-l-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  shadow-xl sm:rounded-lg">
                
                <div class="col-md-12">
                    <div class="card" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);">
                        <div class="card-header">
                            <br>
                            <a href="{{route('volver')}}">
                                <button type="button" class="btn btn-dark">Volver</button>
                            </a>
                            <center>
                                <h3>UNIVER: Bajas confirmadas</h3>
                                <br>
                            </center>
                        </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido paterno</th>
                                    <th>Apellido materno</th>
                                    <th>Correo</th>
                                    <th>PDF</th>
                                    <th>Audio de la entrevista</th>
                                    <th>Información completa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(Auth::user()->id_rol == 1)
                                 @foreach($alumnos as $alumno)
                                    <tr>
                                        <td>{{$alumno->nombre}}</td>
                                        <td>{{$alumno->apellido_paterno}}</td>
                                        <td>{{$alumno->apellido_materno}}</td>
                                        <td>{{$alumno->correo}}</td>
                                        <td>
                                            <center>
                                                <a href="{{route('alumnos.show', $alumno->id)}}">
                                                    <button type="button" class="btn btn-outline-primary">PDF</button>
                                                </a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="{{route('alumno.audio', $alumno->id)}}">
                                                    <button type="button" class="btn btn-outline-secondary">Audio</button>
                                                </a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="{{route('alumnos.edit', $alumno->id)}}">
                                                    <button type="button" class="btn btn-outline-dark">Info completa</button>
                                                </a>
                                            </center>
                                        </td>
                                    </tr>
                                 @endforeach
                                @elseif(Auth::user()->id_rol >= 2)
                                 @foreach($alumnos as $alumno)
                                  @if($alumno->id_plantel == Auth::user()->id_plantel)
                                    <tr>
                                        <td>{{$alumno->nombre}}</td>
                                        <td>{{$alumno->apellido_paterno}}</td>
                                        <td>{{$alumno->apellido_materno}}</td>
                                        <td>{{$alumno->correo}}</td>
                                        <td>
                                            <center>
                                                <a href="{{route('alumnos.show', $alumno->id)}}">
                                                    <button type="button" class="btn btn-outline-primary">PDF</button>
                                                </a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="{{route('alumno.audio', $alumno->id)}}">
                                                    <button type="button" class="btn btn-outline-secondary">Audio</button>
                                                </a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="{{route('alumnos.edit', $alumno->id)}}">
                                                    <button type="button" class="btn btn-outline-dark">Info completa</button>
                                                </a>
                                            </center>
                                        </td>
                                    </tr>
                                 @endif
                                @endforeach
                                @endif
                            </tbody>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>