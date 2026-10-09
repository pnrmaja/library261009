<?php

namespace App\Http\Controllers;

use App\Models\Lending;
use Illuminate\Http\Request;

class LendingController extends Controller
{
    public function index()
    {
        return Lending::all();
    }

    public function store(Request $request)
    {
        $record = Lending::create($request->all());

        return $record;
    }

    public function show($user_id, $copy_id)
    {
        return Lending::where('user_id', $user_id)
            ->where('copy_id', $copy_id)
            ->firstOrFail();
    }

    public function update(Request $request, $user_id, $copy_id)
    {
        $record = Lending::where('user_id', $user_id)
            ->where('copy_id', $copy_id)
            ->firstOrFail();

        $record->update($request->all());

        return $record;
    }

    public function destroy($user_id, $copy_id)
    {
        $record = Lending::where('user_id', $user_id)
            ->where('copy_id', $copy_id)
            ->firstOrFail();

        $record->delete();

        return response()->json([
            'message' => 'A kölcsönzés törölve.'
        ]);
    }
}
