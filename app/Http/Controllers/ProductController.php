<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*
    *********************
        Primeira View
    *********************
    public function index()
    {
        $teste = 123;
        $script = '<script> alert("ola"); </script>';
        return view('teste', compact(['teste','script']));
    }
    */
    public function index()
    {   
        $teste2 = ['leite','pão','mesa','cadeira'];
        return view('Admin.Pages.Products.index', compact(['teste2']));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Pages.Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\storeUpdateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeUpdateProductRequest $request)
    {   
        dd('OK!!');
        // dd($request->all());
        // dd($request->only(["name","description"]));
        // dd($request->name);
        // dd($request->except(["_token","_method"]));
        // if($request->file('algo')->isValid()) {
        //    dd($request->file('algo')->store('products'));
        // }
        /*$request->validate([  VALIDAÇÕES NÃO DEVEM FICAR NESTE ARQUIVO
            'name' => 'required|min:2|max:244',
            'description' => 'nullable|min:3|max:2333'
        ]); */ 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
