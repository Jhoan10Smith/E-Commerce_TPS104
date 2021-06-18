<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\barrio;

class barrioController extends Controller
{
    public function index()
    {
    	$barrio = barrio::all();
    	return view('barrio.barrioListado', compact('barrio'));
    }

    public function delete(barrio $barrio)
    {
    	$barrio->delete();
    	$barrio=barrio::all();

    	return redirect()->route('barrio.index',compact('barrio'));
    }

    public function edit(barrio $barrio)
    {
    	return view('barrio.barrioEdit', compact('barrio'));
    }

    public function update(request $editInfo, barrio $barrio)
    {	
    	$barrio->idBarrio =$editInfo->idBarrio;
    	$barrio->nombre =$editInfo->nombre;
    	$barrio->comuna =$editInfo->comuna;

    	

		$barrio->save();
		$barrio=barrio::all();

		return redirect()->route('barrio.index',compact('barrio'));
    }

    public function new()
    {
    	return view('barrio.barrioNew');
    }

    public function create(request $create)
    {
    	$barrio=new barrio();

        $barrio->idBarrio =$create->idBarrio;
        $barrio->nombre =$create->nombre;
        $barrio->comuna =$create->comuna;

    	$barrio->save();
        $barrio=barrio::all();

		return redirect()->route('barrio.index',compact('barrio'));
    }

}
