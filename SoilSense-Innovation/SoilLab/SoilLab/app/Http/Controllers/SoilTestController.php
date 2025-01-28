<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoilTest;
use App\Models\Crop;

class SoilTestController extends Controller
{
    public function index()
    {
        return view('soil-test');
    }

    public function analyze(Request $request)
    {
        // Validate input
        $request->validate([
            'soil_type' => 'required|string',
            'pH' => 'required|numeric',
            'nitrogen' => 'required|numeric',
            'phosphorus' => 'required|numeric',
            'potassium' => 'required|numeric',
        ]);

        // Save soil test data
        $soilTest = SoilTest::create($request->all());

        // Find suitable crops
        $crops = Crop::where('min_pH', '<=', $soilTest->pH)
            ->where('max_pH', '>=', $soilTest->pH)
            ->where('min_nitrogen', '<=', $soilTest->nitrogen)
            ->where('max_nitrogen', '>=', $soilTest->nitrogen)
            ->get();

        return view('results', compact('crops'));
    }
}
