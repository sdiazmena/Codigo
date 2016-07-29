<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ebook;

class EbooksController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
    	
    }

    public function store(Request $request)
    {
    	$ebook = new Ebook($request->all());
    	$ebook->save();
    	return view('crear');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
