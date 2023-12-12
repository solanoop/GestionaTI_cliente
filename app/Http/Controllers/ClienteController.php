<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Puesto;
use App\Models\Language;
use App\Models\Level;
use App\Models\C1LenguajesDeProgramacion;
use App\Models\C2Frameworks;
use App\Models\C4Librerias;
use App\Models\C5BasesDeDatos;
use App\Models\C6HerramientasDeDesarrollo;
use App\Models\C7SistemasDeControlDeVersiones;
use App\Models\C8GestionDeProyectosYColaboracion;
use App\Models\C9Otros;
use App\Models\Benefit;
use App\Models\JobVacancy;

class ClienteController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        //
    }

    public function showRegistrationForm()
    {
        return view('register'); // Asegúrate de que la vista exista en la ubicación adecuada
    }

    public function showLoginForm()
    {
        return view('login'); // Asegúrate de que la vista exista en la ubicación adecuada
    }


    public function login(Request $request)
    {
        // Validación de datos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Inicio de inicio de sesión
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // El usuario ha iniciado sesión correctamente
            return redirect()->intended('/publicavacante'); // Puedes redirigir a la página principal o a la URL deseada
        } else {
            // El inicio de sesión ha fallado
            return back()->withErrors(['email' => 'Las credenciales proporcionadas no son válidas.'])->withInput();
        }
        
    }



    public function showpublicavacanteForm()
    {
        return view('publicavacante');
    }

    public function publicavacante(Request $request)
    {
        // Lógica para manejar el primer paso del formulario
        $dataPaso1 = $request->validate([
            'tituloVacante' => 'required',
            'descripcionVacante' => 'required',
            // Agrega otras validaciones según tus campos
        ]);

        // Guarda temporalmente los datos en la sesión
        $request->session()->put('paso1', $dataPaso1);

        // Redirige al siguiente paso
        return redirect('/descripcionvacante');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'terms' => 'required',
        ]);        

        User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login');
    }

    public function showdescripcionvacanteForm(Request $request)
    {
        // Aquí puedes procesar los datos del formulario si es necesario

        // Redirige a la siguiente vista
        return view('descripcionvacante');
    }

    public function descripcionvacante(Request $request)
    {
        // Lógica para manejar el segundo paso del formulario
        $dataPaso2 = $request->validate([
            'responsabilidades' => 'required',
            'funciones' => 'required',
            // Agrega otras validaciones según tus campos del paso 2
        ]);

        // Recupera los datos del paso anterior si es necesario
        $dataPaso1 = $request->session()->get('paso1');

        // Combina los datos de ambos pasos
        $allData = array_merge($dataPaso1, $dataPaso2);

        // Guarda temporalmente los datos en la sesión o en una base de datos si prefieres
        $request->session()->put('allData', $allData);

        // Redirige a la siguiente vista
        return redirect('/puesto');
    }

    public function showpuestoForm(Request $request)
    {
        // Obtén los datos de la sesión si es necesario
        $allData = $request->session()->get('allData');

        // Obtén los datos de la tabla c3_puesto usando el modelo Puesto
        $puestos = Puesto::select('id', 'skill', 'descripcion')
            ->where('status', 1) // Filtra por 'status' igual a 1
            ->get();

        // Obtén los datos de la tabla languages usando el modelo Language
        $idiomas = Language::select('id', 'title')->where('status', 1)->get();

        return view('puesto', compact('puestos', 'idiomas', 'allData'));
    }

    public function puesto(Request $request)
    {
        // Lógica para manejar el tercer paso del formulario
        $dataPaso3 = $request->validate([
            'puesto' => 'required', // Asegúrate de validar correctamente según tu estructura de datos
            'idiomas' => 'required|array', // Asegúrate de validar correctamente según tu estructura de datos
            'experiencia' => 'required|numeric', // Asegúrate de validar correctamente según tu estructura de datos
        ]);

        // Recupera los datos de los pasos anteriores si son necesarios
        $dataPaso1 = $request->session()->get('paso1');
        $dataPaso2 = $request->session()->get('allData');

        // Combina los datos de los tres pasos
        $allData = array_merge($dataPaso1, $dataPaso2, $dataPaso3);

        // Guarda temporalmente los datos en la sesión o en una base de datos si prefieres
        $request->session()->put('allData', $allData);

        // Redirige a la siguiente vista
        return redirect('/experienciapuesto');
    }

    public function showexperienciapuestoForm(Request $request)
    {
        // Obtén los datos de la sesión si es necesario
        $allData = $request->session()->get('allData');

        // Obtén los datos de la tabla levels usando el modelo Level
        $nivelesExperiencia = Level::select('id', 'title')->where('status', 1)->get();

        return view('experienciapuesto', compact('nivelesExperiencia', 'allData'));
    }

    public function experienciapuesto(Request $request)
    {
        // Lógica para manejar el cuarto paso del formulario
        $dataPaso4 = $request->validate([
            'nivel_experiencia' => 'required', // Asegúrate de validar correctamente según tu estructura de datos
            'requisito_academico' => 'nullable|array', // Asegúrate de validar correctamente según tu estructura de datos
        ]);

        // Recupera los datos de los pasos anteriores si son necesarios
        $dataPaso1 = $request->session()->get('paso1');
        $dataPaso2 = $request->session()->get('allData');
        $dataPaso3 = $request->session()->get('paso3');

        // Combina los datos de los cuatro pasos
        $allData = array_merge($dataPaso1, $dataPaso2, $dataPaso3, $dataPaso4);

        // Guarda temporalmente los datos en la sesión o en una base de datos si prefieres
        $request->session()->put('allData', $allData);

        // Redirige a la siguiente vista
        return redirect('/perfil');
    }
    
    public function showperfilForm(Request $request)
    {
        // Obtén los datos de la sesión si es necesario
        $allData = $request->session()->get('allData');

        // Obtén los datos de las tablas mencionadas
        $perfiles = Puesto::select('id', 'skill', 'descripcion')->where('status', 1)->get();
        $lenguajes = C1LenguajesDeProgramacion::select('id', 'skill', 'descripcion')->where('status', 1)->get();
        $frameworks = C2Frameworks::select('id', 'skill', 'descripcion')->where('status', 1)->get();
        $librerias = C4Librerias::select('id', 'skill', 'descripcion')->where('status', 1)->get();
        $basesDeDatos = C5BasesDeDatos::select('id', 'skill', 'descripcion')->where('status', 1)->get();
        $herramientas = C6HerramientasDeDesarrollo::select('id', 'skill', 'descripcion')->where('status', 1)->get();
        $controlVersiones = C7SistemasDeControlDeVersiones::select('id', 'skill', 'descripcion')->where('status', 1)->get();
        $gestionProyectos = C8GestionDeProyectosYColaboracion::select('id', 'skill', 'descripcion')->where('status', 1)->get();
        $otros = C9Otros::select('id', 'skill', 'descripcion')->where('status', 1)->get();

        return view('perfil', compact('perfiles', 'lenguajes', 'frameworks', 'librerias', 'basesDeDatos', 'herramientas', 'controlVersiones', 'gestionProyectos', 'otros', 'allData'));
    }

    public function perfil(Request $request)
    {
        // Lógica para manejar el quinto paso del formulario
        $dataPaso5 = $request->validate([
            'perfiles' => 'required|array', // Asegúrate de validar correctamente según tu estructura de datos
            'competencias' => 'required|array', // Asegúrate de validar correctamente según tu estructura de datos
        ]);

        // Recupera los datos de los pasos anteriores si son necesarios
        $dataPaso1 = $request->session()->get('paso1');
        $dataPaso2 = $request->session()->get('allData');
        $dataPaso3 = $request->session()->get('paso3');
        $dataPaso4 = $request->session()->get('paso4');

        // Combina los datos de los cinco pasos
        $allData = array_merge($dataPaso1, $dataPaso2, $dataPaso3, $dataPaso4, $dataPaso5);

        // Guarda temporalmente los datos en la sesión o en una base de datos si prefieres
        $request->session()->put('allData', $allData);

        // Redirige a la siguiente vista
        return redirect('/modalidad');
    }

    public function showmodalidadForm(Request $request)
    {
        // Obtén los datos de la sesión si es necesario
        $allData = $request->session()->get('allData');

        return view('modalidad', compact('allData'));
    }

    public function modalidad(Request $request)
    {
        // Lógica para manejar el sexto paso del formulario
        $dataPaso6 = $request->validate([
            'modalidad_trabajo' => 'required',
            'ciudad' => 'required',
            'sueldo' => 'required',
            'meses_contratacion' => 'required',
            // Agrega otras validaciones según tus campos del paso 6
        ]);

        // Recupera los datos de los pasos anteriores si son necesarios
        $dataPaso1 = $request->session()->get('paso1');
        $dataPaso2 = $request->session()->get('allData');
        $dataPaso3 = $request->session()->get('paso3');
        $dataPaso4 = $request->session()->get('paso4');
        $dataPaso5 = $request->session()->get('paso5');

        // Combina los datos de los seis pasos
        $allData = array_merge($dataPaso1, $dataPaso2, $dataPaso3, $dataPaso4, $dataPaso5, $dataPaso6);

        // Guarda temporalmente los datos en la sesión o en una base de datos si prefieres
        $request->session()->put('allData', $allData);

        // Redirige a la siguiente vista
        return redirect('/prestaciones');
    }


    public function showprestacionesForm(Request $request)
    {
        $prestaciones = Benefit::select('id', 'title')->where('status', 1)->get();

    return view('prestaciones', compact('prestaciones'));
    }

    public function showvacanteterminadaForm(Request $request)
    {
        // Aquí puedes procesar los datos del formulario si es necesario

        // Redirige a la siguiente vista
        return view('vacanteterminada');
    }

    public function prestaciones(Request $request)
    {
        // Lógica para manejar el séptimo paso del formulario
        $dataPaso7 = $request->validate([
            'prestaciones' => 'required|array',
            // Agrega otras validaciones según tus campos del paso 7
        ]);

        // Recupera los datos de los pasos anteriores si son necesarios
        $dataPaso1 = $request->session()->get('paso1');
        $dataPaso2 = $request->session()->get('allData');
        $dataPaso3 = $request->session()->get('paso3');
        $dataPaso4 = $request->session()->get('paso4');
        $dataPaso5 = $request->session()->get('paso5');
        $dataPaso6 = $request->session()->get('paso6');

        // Combina los datos de los siete pasos
        $allData = array_merge(
            $dataPaso1,
            $dataPaso2,
            $dataPaso3,
            $dataPaso4,
            $dataPaso5,
            $dataPaso6,
            $dataPaso7
        );

        // Guarda los datos en la base de datos
        $jobVacancy = new JobVacancy();
        $jobVacancy->users_id = auth()->id(); // Cambia esto si el usuario está autenticado
        $jobVacancy->c1_lenguajes_de_programacion_id = $allData['c1_lenguajes_de_programacion_id'];
        $jobVacancy->c2_frameworks_id = $allData['c2_frameworks_id'];
        $jobVacancy->c3_puesto_id = $allData['c3_puesto_id'];
        $jobVacancy->c4_librerias_id = $allData['c4_librerias_id'];
        $jobVacancy->c5_bases_de_datos_id = $allData['c5_bases_de_datos_id'];
        $jobVacancy->c6_herramientas_de_desarrollo_id = $allData['c6_herramientas_de_desarrollo_id'];
        $jobVacancy->c7_sistemas_de_control_de_versiones_id = $allData['c7_sistemas_de_control_de_versiones_id'];
        $jobVacancy->c8_gestion_de_proyectos_y_colaboracion_id = $allData['c8_gestion_de_proyectos_y_colaboracion_id'];
        $jobVacancy->c9_otros_id = $allData['c9_otros_id'];
        $jobVacancy->benefits_id = $allData['benefits_id'];
        $jobVacancy->languages_id = $allData['languages_id'];
        $jobVacancy->level_id = $allData['level_id'];
        $jobVacancy->location_id = $allData['location_id'];
        $jobVacancy->working_modality_id = $allData['working_modality_id'];
        $jobVacancy->title = $allData['tituloVacante'];
        $jobVacancy->details = $allData['descripcionVacante'];
        $jobVacancy->responsibility = $allData['responsabilidades'];
        $jobVacancy->functions = $allData['funciones'];
        $jobVacancy->years_experience = $allData['experiencia'];
        $jobVacancy->perfil = $allData['perfil'];
        $jobVacancy->academic_requirements = $allData['requisito_academico'];
        $jobVacancy->salary_range = $allData['sueldo'];
        $jobVacancy->hiring_time = $allData['meses_contratacion'];
        $jobVacancy->status = 'pendiente'; // Puedes cambiar el estado según tus necesidades

        $jobVacancy->save();

        // Limpia la sesión después de guardar los datos
        $request->session()->forget([
            'paso1', 'allData', 'paso3', 'paso4', 'paso5', 'paso6', 'paso7'
        ]);

        // Redirige a donde desees después de guardar
        return redirect('/vacanteterminada');
    }

}

