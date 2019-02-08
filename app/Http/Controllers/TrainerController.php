<?php

namespace LaraDex\Http\Controllers;

use LaraDex\Trainer; 
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use LaraDex\Http\Requests\StoreTrainerRequest;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();

        return view('trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainerRequest $request)
    {          

        $trainer = new Trainer();

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $trainer->avatar = $name;
            $file->move(public_path().'/images/', $name);        
        }        
        $trainer->name = $request->input('name');
        $trainer->description = $request->input('description');
        $trainer->slug = $request->input('slug');
        //$trainer->slug = str_slug($request->input('name'));
        $trainer->save();

        return redirect()->route('trainers.index' , [$trainer])->with('status','Entrenador creado correctamente');
        //return 'Saved';    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
       return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *)
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $trainer->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $trainer->avatar = $name; 
            $file->move(public_path().'/images/', $name);        
        }
        $trainer->save();

        return redirect()->route('trainers.show', [$trainer])->with('status','Entrenador actualizado correctamente');
        //return 'updated';
        //return $request;
        //return $trainer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        $file_path = public_path().'/images/'.$trainer->avatar;
        \File::delete($file_path);
        
        $trainer->delete();
        return redirect()->route('trainers.index' , [$trainer])->with('status','Entrenador eliminado correctamente');
        //return 'deleted';
        //return $trainer;
    }
}
