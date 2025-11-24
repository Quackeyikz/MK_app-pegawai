<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeProject;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with(['employees' => function($query){
            $query->select('nama_lengkap');
        }])->get();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::select('id', 'nama_lengkap')->get();
        return view('projects.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_name'      => 'required|string|max:255',
            'description'       => 'string',
            'start_date'        => 'required|date',
            'finish_date'       => 'date',
            'status'            => 'required|string|max:50',
            'employee_id'       => 'integer',
            'role'              => 'string|max:255'
        ]);

        $postProject = Project::create($request->only([
            'project_name',
            'description',
            'start_date',
            'finish_date',
            'status'
        ]));

        $requestEmployeeProject = $request->only([
            'employee_id',
            'role'
        ]);

        $requestEmployeeProject['project_id'] = $postProject->id;

        EmployeeProject::create($requestEmployeeProject);

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::with('employees')->find($id);
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employees = Employee::get();
        $project = Project::with('employees')->find($id);
        return view('projects.edit', compact(['project', 'employees']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'project_name'      => 'required|string|max:255',
            'description'       => 'string',
            'start_date'        => 'required|date',
            'finish_date'       => 'date',
            'status'            => 'required|string|max:50',
            'employee_id'       => 'integer',
            'role'              => 'string|max:255'
        ]);

        $project = Project::findOrFail($id);

        $project->update($request->only([
            'project_name',
            'description',
            'start_date',
            'finish_date',
            'status'
        ]));

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $emProject = EmployeeProject::findOrFail($id);
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('projects.index');
    }
}
