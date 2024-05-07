<?php

namespace App\Http\Controllers;

use App\Models\AnnualLeave;
use Illuminate\Http\Request;

class AnnualLeaveController extends Controller
{
    public function index()
    {
        $annualLeaves = AnnualLeave::all();

        return response()->json($annualLeaves);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        $annualLeave = AnnualLeave::create($validatedData);

        return response()->json($annualLeave, 201);
    }

    public function show($id)
    {
        $annualLeave = AnnualLeave::findOrFail($id);

        return response()->json($annualLeave);
    }
}
