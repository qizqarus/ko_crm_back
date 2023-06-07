<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return response()->json(['projects' => $projects], 200);
    }

    public function store(StoreProjectRequest $request)
    {
        $project = Project::create($request->validated());

        if ($request->hasFile('team_photo')) {
            Storage::disk('public')->makeDirectory('team-photos');
            $teamPhotoPath = $request->file('team_photo')->store('team-photos', 'public');
            $project->team_photo = $teamPhotoPath;
        }

        $project->save();

        return response()->json(['project' => $project], 201);
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);

        return response()->json(['project' => $project], 200);
    }

    public function update(UpdateProjectRequest $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->validated());

        return response()->json(['project' => $project], 200);
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return response()->json(null, 204);
    }
}
