<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getStudentsData(Request $request)
    {
        // Obtener los estudiantes con su relación 'grade' cargada
        $students = Student::with('grade')
            ->select('id', 'first_name', 'last_name', 'grade_id', 'phone')
            ->get();

            //dd($students);

        // Verificar si la respuesta es correcta
        if ($request->ajax()) {
            //return "asdas";
            return response()->json([
                'draw' => $request->input('draw'), // Esto es necesario para DataTables
                'recordsTotal' => $students->count(),
                'recordsFiltered' => $students->count(),  // Filtrado de registros (si fuera necesario)
                'data' => $students->map(function ($student) {
                    return [
                        'DT_RowIndex' => $student->id,
                        'full_name' => $student->first_name . ' ' . $student->last_name,
                        'grade_name' => $student->grade ? $student->grade->name : 'No Asignado',
                        'phone' => $student->phone,
                        'actions' => '<button class="btn btn-primary">Editar</button> <button class="btn btn-danger">Eliminar</button>',
                    ];
                }),
            ]);
        }

        // Si no es una solicitud AJAX, redirigir a la página principal de estudiantes
        return redirect()->route('students.index');
    }
}
