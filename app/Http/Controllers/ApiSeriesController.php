<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;

class ApiSeriesController extends Controller
{
    public function getAllSeries()
    {
        $series = Series::all();
        return response()->json($series);
    }
}
