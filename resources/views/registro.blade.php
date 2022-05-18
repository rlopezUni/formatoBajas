<x-guest-layout>
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
                                <h3>UNIVER: Formato de baja</h3>
                            </center>
                        </div>

                        <form method="POST" action="{{ route('usuarioProceso') }}" aria-label="{{ __('usuario') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="correo">Correo electronico:</label>
                                        <input type="correo" type="email" class="form-control" name="correo" autofocus required maxlength="100">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nombre">Nombre:</label>
                                        <input id="nombre" type="text" class="form-control" name="nombre" autofocus required maxlength="50">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="contra">Contraseña:</label>
                                        <input id="contra" type="password" class="form-control" name="contra" autofocus required maxlength="50">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="plantel">Plantel:</label>
                                        <select required autofocus id="plantel" name="plantel" class="form-control"data-live-search="true">
                                            <option value=""><--Escoge plantel--></option>
                                            @foreach($planteles as $plantel)
                                                <option value="{{$plantel->id}}">{{$plantel->nombre_plantel}}</option>
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
                                        <a href="{{route('alumnos.index')}}">
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

</x-guest-layout>