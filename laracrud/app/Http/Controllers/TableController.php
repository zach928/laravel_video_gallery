<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Table;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Table = Table::all();
        return view('Table.video', compact('Table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        dd(json_encode(request('url')));
        $Table = new Table;
        $Table->url = json_encode(request('url'));
        $Table->save();
        return redirect('/Table')->with('success', 'Url saved!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Table = Table::all();
        $Table->url = json_decode('url');
        return view('Table.table', compact('Table'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Table = Contact::find($id);
        return view('Table.edit', compact('Table'));
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
        $Table = Table::find($id);
        $Table->url = json_encode(request('url'));
        $Table->save();
        return redirect('/edit')->with('success', 'Url saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Table = Table::find($id);
        $Table->delete();
        return redirect('/Table/table')->with('success', 'Contact deleted!');
    }
}
