<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Formato;
use App\Models\Entrevista;
use PDF;
use Illuminate\Http\Request;
use App\Mail\MandarCorreo;
use Mail;
class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $registro = new Alumno();
        $registro->id_pwc = $request->id_pwc;
        $registro->nombre = $request->nombre;
        $registro->apellido_paterno = $request->apellido_paterno;
        $registro->apellido_materno = $request->apellido_materno;
        $registro->correo = $request->correo;
        $registro->fecha = $request->fecha_clase;
        $registro->telefono_celular = $request->telefono_celular;
        $registro->periodo_actual = $request->periodo_actual;
        $registro->curriculum = $request->curriculum;
        $registro->telefono_particular = $request->telefono_particular;
        $registro->ultimo_grado = $request->ultimo_grado;
        $registro->programa_grado_actual = $request->programa_grado_actual;
        $registro->telefono_alternativo = $request->telefono_alternativo;
        $registro->save();



        $formato = new Formato();
        $formato->alumno_id = $registro->id;
        $formato->tipo_baja = $request->tipo_baja;
        $formato->momento_baja = $request->momento_baja;
        $formato->modalidad = $request->modalidad;
        $formato->status_academico = $request->status_academico;
        $formato->ultima_beca = $request->ultima_beca;
        $formato->avance_academico = $request->avance_academico;
        $formato->motivo_baja = $request->motivo_baja;
        $formato->especifica_baja = $request->especifica_baja;
        $formato->save();


        //dd($request->all());

        $entrevista = new Entrevista();
        $entrevista->alumno_id = $registro->id;
        $entrevista->motivo_baja = $request->motivo_baja;
        $entrevista->familia = $request->descicion_familia;
        $entrevista->familia_opinion = $request->familia_opinion;
        $entrevista->que_puede_hacer = $request->evitar_baja;
        $entrevista->relacion = $request->relacion_administrativo;
        $entrevista->docentes = $request->docentes;
        $entrevista->puntuacion = $request->puntuacion;
        $entrevista->recomendarias = $request->recomendacion;
        $entrevista->porque_recomendarias = $request->recomendacion_porque;
        $entrevista->como_evitar = $request->mejorar_servicio;
        $entrevista->comentarios = $request->comentarios_2;
        $entrevista->save();

        //dd($request->all());





        $plantel = $request->plantel;


        if($plantel == "TLAQUEPAQUE")
        {
            $correos = ['gladys.morales@univer-gdl.edu.mx','bessie.sanchez@univer-gdl.edu.mx','guadalupe.martinez@univer-gdl.edu.mx'];
        }
        else if ($plantel == "AVILA CAMACHO")
        {
            $correos = ['israel.delvalle@univer-gdl.edu.mx','veronica.flores@univer-gdl.edu.mx'];
        }
        else if ($plantel == "CENTRO HISTORICO")
        {
            $correos = ['alejandra.velazquez@univer-gdl.edu.mx','maria.garcia@univer-gdl.edu.mx'];
        }
        else if ($plantel == "JARDINES DEL BOSQUE")
        {
            $correos = ['magaly.marquez@univer-gdl.edu.mx','cinthia.robles@univer-gdl.edu.mx'];
        }
        else if ($plantel == "LOMA BONITA")
        {
            $correos = ['martha.garcia@univer-gdl.edu.mx','margarita.abad@univer-gdl.edu.mx'];
        }
        else if ($plantel == "TONALA")
        {
            $correos = ['gladys.morales@univer-gdl.edu.mx','andrea.vazquez@univer-gdl.edu.mx'];
        }
        else if ($plantel == "ONLINE")
        {
            $correos = 'andrea.caballero@univer-gdl.edu.mx';
        }





   // $mailable = new MandarCorreo($registro);
    //Mail::to($correos)->send($mailable);



         return view('gracias');

       // return view ('formato',compact('registro','formato'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $registro = Alumno::find($id);
            $formato = Formato::find($id);

        $pdf = PDF::loadView('formato',compact('registro','formato'))->setOptions(['defaultFont' => 'sans-serif']);
         return $pdf->download('pruebapdf.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function audio(Request $request)
    {

        if (count($_FILES) <= 0 || empty($_FILES["audio"])) {
            exit("No hay archivos");
        }

# De dónde viene el audio y en dónde lo ponemos
        $rutaAudioSubido = $_FILES["audio"]["tmp_name"];
        $nuevoNombre = $request->idAlumno . ".webm";
        $rutaDeGuardado = __DIR__ . "/" . $nuevoNombre;
// Mover el archivo subido a la ruta de guardado
        move_uploaded_file($_FILES["audio"]["tmp_name"], $rutaDeGuardado);
// Imprimir el nombre para que la petición lo lea
        echo $nuevoNombre;
    }
}
