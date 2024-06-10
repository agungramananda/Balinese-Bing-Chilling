<?php

namespace App\Http\Controllers;

use App\Models\eskrims;
use App\Models\flavors;
use App\Models\types;
use App\Models\eskrims_flavors;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class EskrimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
       return view('home');
    }

    public function about()
    {
       return view('about');
    }
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $query = eskrims::query();

        if ($request->has('type') && $request->type != '') {
            $query->where('type_id', $request->type);
        }

        if ($request->has('flavor') && $request->flavor != '') {
            $es_id = eskrims_flavors::where('flavors_id', $request->flavor)->pluck('eskrims_id');
            $query->whereIn('id', $es_id);
        }

        $es = $query->orderBy('type_id')->get();
        $es->load('flavors');
        $kosong = $es->isEmpty();
        $tipe = types::all();
        $rasa = flavors::all();
      return view('catalog',['eskrim'=>$es,'tipe'=>$tipe,'rasa'=>$rasa,'kosong'=>$kosong]); 
    }
}
