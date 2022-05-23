<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl max-l-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  shadow-xl sm:rounded-lg">

                <!--aqui empieza el desmais -->

                @if(Auth::user()->id_rol == 1)
                <div class="col-md-12">
                    <div class="card" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);">
                        <div class="card-header">
                            <center>
                                <h3>UNIVER: Edición de usuarios</h3>
                            </center>
                        </div>

                        <form method="POST" action="{{ route('usuarioEdicion', $usuarios->id) }}" aria-label="{{ __('usuario') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="correo">Correo electronico:</label>
                                        <input type="correo" type="email" class="form-control" value="{{$usuarios->email}}" name="correo" autofocus required maxlength="100">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nombre">Nombre:</label>
                                        <input id="nombre" type="text" class="form-control" value="{{$usuarios->name}}" name="nombre" autofocus required maxlength="50">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="contra">Contraseña:</label>
                                        <input id="contra" type="password" placeholder="Si no va a cambiar la contraseña, dejar en blanco" class="form-control" name="contra" autofocus maxlength="50">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="plantel">Plantel:</label>
                                        <select autofocus id="plantel" name="plantel" class="form-control selectpicker "data-live-search="true">
                                            @foreach($planteles as $plantel)
                                                @if($usuarios->id_plantel == $plantel->id)
                                                    <option selected value="{{$plantel->id}}">{{$plantel->nombre_plantel}}</option>
                                                 @else
                                                    <option value="{{$plantel->id}}">{{$plantel->nombre_plantel}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div> 
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="col-md-12">
                                    <center>
                                        <button type="submit" id="guardar" class="btn btn-success">
                                            <i class="fas fa-save"></i>&nbsp;&nbsp;{{ __('Guardar') }}
                                        </button>
                                        <a href="{{route('volver')}}">
                                            <button type="button" class="btn btn-default" >
                                                <i class="fas fa-undo-alt"></i>&nbsp;&nbsp;{{ __('Regresar') }}
                                            </button>
                                        </a>
                                    </center>
                                </div>
                            </div>

                        </form>

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

</x-app-layout>