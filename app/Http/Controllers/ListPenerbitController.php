<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ListPenerbit;
use App\Http\Requests;

class ListPenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $listpenerbits = DB::table('listpenerbit')->paginate(2);
        return view('listpenerbit.index',compact('listpenerbits'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listpenerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',

        ]);

        $listpenerbit = new ListPenerbit;

        $listpenerbit ->nama =$request->nama;
        $listpenerbit ->alamat =$request->alamat;
        $listpenerbit ->kontak =$request->kontak;
        
        $listpenerbit ->save();

        return redirect('listpenerbit');
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
        $listpenerbit = ListPenerbit::find($id);

        return view('listpenerbit.edit')->with('listpenerbit',$listpenerbit);
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
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',

        ]);

        $listpenerbit = ListPenerbit::find($id);

        $listpenerbit ->id =$request->id;
        $listpenerbit ->nama =$request->nama;
        $listpenerbit ->alamat =$request->alamat;
        $listpenerbit ->kontak =$request->kontak;
        
        $listpenerbit ->save();

        return redirect('listpenerbit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $listpenerbit = ListPenerbit::find($id);
       $listpenerbit-> delete();
       return redirect('listpenerbit');  
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $hasil = ListPenerbit::where('nama', 'LIKE', '%' . $query . '%')->paginate(1);

        return view('listpenerbit.result', compact('hasil', 'query'));
    }
}
