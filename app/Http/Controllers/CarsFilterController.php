<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;

class CarsFilterController extends Controller
{
    

    public function filterCarsToday(Request $request)
    {
        $date = $request->route('date');
        
        if(!$date){
            $date =  Carbon::now();
        }
        $users = User::whereHas('cars', function($q) {
            $q->where('date_to', '<', $date);
        })->get();

        return $users;
    }

}