<x-guest-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl max-l-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  shadow-xl sm:rounded-lg">
                
                @if(Auth::user()->id_rol == 1)
                <div class="col-md-12">
                    <div class="card" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);">
                        <div class="card-header">
                            <br>
                            <a href="{{route('volver')}}">
                                <button type="button" class="btn btn-dark">Volver</button>
                            </a>
                            <center>
                                <h3>UNIVER: Usuarios</h3>
                                <br>
                            </center>
                        </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Plantel</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($usuarios as $usuario)
                                    <tr>
                                        <td>{{$usuario->name}}</td>
                                        <td>{{$usuario->email}}</td>
                                        @if($usuario->id_rol == 1)
                                            <td>Admin</td>
                                        @elseif($usuario->id_rol == 2)
                                            <td>Mentor</td>
                                        @endif
                                        @if($usuario->id_plantel == 1)
                                            <td>TLAQUEPAQUE</td>
                                        @elseif($usuario->id_plantel == 2)
                                            <td>AVILA CAMACHO</td>
                                        @elseif($usuario->id_plantel == 3)
                                            <td>CENTRO HISTORICO</td>
                                        @elseif($usuario->id_plantel == 4)
                                            <td>JARDINES DEL BOSQUE</td>
                                        @elseif($usuario->id_plantel == 5)
                                            <td>LOMA BONITA</td>
                                        @elseif($usuario->id_plantel == 6)
                                            <td>TONALA</td>
                                        @elseif($usuario->id_plantel == 7)
                                            <td>ONLINE</td>
                                        @endif
                                        <td>
                                            <a href="{{route('editarUsuarios',$usuario->id)}}">
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @elseif(Auth::user()->id_rol >= 2)
                <div>
                    <center>
                        <h1>Invalido</h1>
                        <a href="{{route('volver')}}">
                            <button type="button" class="btn btn-dark">Volver</button>
                        </a>
                    </center>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-guest-layout>