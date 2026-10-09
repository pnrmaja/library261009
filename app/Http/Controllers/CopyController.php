<?php

namespace App\Http\Controllers;

use App\Models\Copy;
use Illuminate\Http\Request;

class CopyController extends Controller
{
    public function index()
    {
        return Copy::all();
    }

    public function store(Request $request)
    {
        $record = Copy::create($request->all());

        return $record;
    }

    public function show($copy)
    {
        return Copy::where('copy_id', $copy)->firstOrFail();
    }

    public function update(Request $request, $copy)
    {
        $record = Copy::where('copy_id', $copy)->firstOrFail();
        $record->update($request->all());

        return $record;
    }

    public function destroy($copy)
    {
        $record = Copy::where('copy_id', $copy)->firstOrFail();
        $record->delete();

        return response()->json([
            'message' => 'A könyvpéldány törölve.'
        ]);
    }
}
