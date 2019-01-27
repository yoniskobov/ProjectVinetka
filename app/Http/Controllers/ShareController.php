<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Share;

class ShareController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shares = Share::all();

        return view('shares.index', compact('shares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('shares.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mps_type'=>'required',
            'licence_plate'=> 'required|string',
            'validity' => 'required|string',
            'mps_nationality' => 'required|string',
          ]);
          $share = new Share([
            'mps_type' => $request->get('mps_type'),
            'licence_plate'=> $request->get('licence_plate'),
            'validity'=> $request->get('validity'),
            'mps_nationality' => $request->get('mps_nationality')
          ]);
          $share->save();
          return redirect('/shares')->with('success', 'Вашата електронна винетка е поръчана успешно!');
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
      $share = Share::find($id);

      return view('shares.edit', compact('share'));
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
        $request->validate([
            'mps_type'=>'required',
            'licence_plate'=> 'required|string',
            'validity' => 'required|string',
            'mps_nationality' => 'required|string'
          ]);
    
          $share = Share::find($id);
          $share->mps_type = $request->get('mps_type');
          $share->licence_plate = $request->get('licence_plate');
          $share->validity = $request->get('validity');
          $share->mps_nacionality = $request->get('mps_nationality');
          $share->save();
    
          return redirect('/shares')->with('success', 'Винетната информация е ъпдейтната успешно!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $share = Share::find($id);
       $share->delete();
       return redirect('/shares')->with('success', 'Винетната информация беше изтрита успешно!');
    }
}
