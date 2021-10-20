<x-guest-layout>
<h1>Solicitud de baja</h1>
<p>Por este medio se le informa que el
    alumno {{$registro->nombre}} {{$registro->apellido_paterno}} {{$registro->apellido_materno}} Solicita su baja
 
  </p>
  <a class="btn" href="{{route('alumnos.show',$registro->id)}}" target="_blank">Click para descargar pdf</a>
</x-guest-layout>