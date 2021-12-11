<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taller;
use App\Models\AreasTaller;

class AdminController extends Controller
{
    public function index()
    {
        $talleres= Taller::orderBy('id','asc')->get();
       // $areas= AreasTaller::orderBy('taller','asc')->get();
      //  return view('admin.index')->with('talleres'.$talleres);
      return view('admin.index')->with('talleres',$talleres);
    }
}
