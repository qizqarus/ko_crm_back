<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePecRequest;
use App\Http\Requests\UpdatePecRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Http\Request;
use App\Models\Pec;

class PecController extends Controller
{
    public function index()
    {
        $pecs = PEC::all();
        return response()->json($pecs);
    }

    public function store(StorePecRequest $request)
    {
        $pec = PEC::create($request->all());
        return response()->json($pec, 201);
    }

    public function show($id)
    {
        $pec = Pec::findOrFail($id);
        return response()->json($pec);
    }

    public function update(UpdatePecRequest $request, PEC $pec)
    {
        $pec->update($request->all());
        return response()->json($pec);
    }

    public function destroy(PEC $pec)
    {
        $pec->delete();
        return response()->json(null, 204);
    }
}
