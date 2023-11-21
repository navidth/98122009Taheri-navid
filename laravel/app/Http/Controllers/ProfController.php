<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prof;

class ProfController extends Controller
{
    public function save_prof(Request $request){
        // Prof::create(['name' => $request->name]);
        $prof = new Prof();
        $prof->name = $request->name;
        $prof->save();
    }
    
}
