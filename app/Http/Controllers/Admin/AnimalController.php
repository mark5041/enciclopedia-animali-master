<?php

namespace App\Http\Controllers\Admin;

use App\Model\Specie;
use App\Model\Animal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();
        return view('admin.animals.index', ['animals' => $animals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $species = Specie::all();
        return view('admin.animals.create', ['species' => $species]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $animalValidate = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'specie_id' => 'exists:App\Model\Specie,id',
                'photo' => 'nullable|image',
            ]
        );
        if(!empty($data["photo"])){
            $photo = Storage::put("uploads", $data["photo"]);
            $data["photo"] = $photo;
        }

        $animal = new Animal();
        $animal->fill($data);
        $animal->save();

        return redirect()->route('admin.animals.show', $animal->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        return view('admin.animals.show', ['animal' => $animal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        $species = Specie::all();
        return view('admin.animals.edit', ['animal' => $animal, 'species' => $species]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        $data = $request->all();

        $animalValidate = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'specie_id' => 'exists:App\Model\Specie,id',
                'photo' => 'nullable|image'
            ]
        );

        if (!empty($data["photo"])) {
            Storage::delete($animal->photo);
            $photo = Storage::put("uploads", $data["photo"]);
            $animal->photo = $photo;
        }
        //check if data changed
        if ($data['name'] != $animal->name) {
            $animal->name = $animal['name'];
        }
        if ($data['description'] != $animal->description) {
            $animal->description = $data['description'];
        }
        if ($data['specie_id'] != $animal->specie_id) {
            $animal->specie_id = $data['specie_id'];
        }

        //update save on DB
        $animal->update();

        return redirect()->route('admin.animals.show', $animal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
