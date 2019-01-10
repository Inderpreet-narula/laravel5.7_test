<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;

class VisitsController extends Controller
{
    public function saveVisitCount()
    {
    	$visit_details = Visit::first();
    	$visit = (!empty($visit_details)) ? $visit_details : new Visit();
   		$previous_visits_count = ($visit->visits)??0;
   		$current_visits_count = $previous_visits_count+1;
   		$visit->visits = $current_visits_count;
   		$visit->save();
   		return view('welcome', compact('current_visits_count'));
    }
}
