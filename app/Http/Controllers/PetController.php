<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PetsExport;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$users = User::all();
        $pets = Pet::orderBy('id','desc')->paginate(20);
        //dd($users->toArray());
        return view('pets.index')->with('pets', $pets);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validation = $request->validate([
            'name'  => ['required', 'string'],
            'image'     => ['required','image'],
            'kind'  => ['required', 'string'],
            'weight'    => ['required', 'numeric'],
            'age' => ['required', 'numeric'],
            'breed'     => ['required', 'string'],
            'location'     => ['required', 'string'],
            'description'  => ['required', 'string'],
        ]);
        if($validation){
            //dd($request->all());
            if($request->hasFile('image')){
                $image = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $image);
            }
        }

        $pet = new Pet;
        $pet->name  = $request->name;
        $pet->image  = $image;
        $pet->kind  = $request->kind;
        $pet->weight  = $request->weight;
        $pet->age  = $request->age;
        $pet->breed  = $request->breed;
        $pet->location  = $request->location;
        $pet->description  = $request->description;


        if($pet->save()){
            return redirect('pets')->with('message', 'The pet: '.$pet->name.' was successfully added!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        return view('pets.show')->with('pet', $pet);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        return view('pets.edit')->with('pet', $pet);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        $validation = $request->validate([
            'name'  => ['required', 'string'],
            'kind'  => ['required', 'string'],
            'weight'    => ['required', 'numeric'],
            'age' => ['required', 'numeric'],
            'breed'     => ['required', 'string'],
            'location'     => ['required', 'string'],
            'description'  => ['required', 'string'],
        ]);
        if($validation){
            //dd($request->all());
            if($request->hasFile('image')){
                $image = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $image);
                if($request->originphoto != 'no-image.png' && file_exists(public_path('images/'.$request->originphoto))){

                    unlink(public_path('images/'.$request->originphoto));
                }
            }else{
                $image = $request->originphoto;
            }
        }

        $pet->name  = $request->name;
        $pet->image  = $image;
        $pet->kind  = $request->kind;
        $pet->weight  = $request->weight;
        $pet->age  = $request->age;
        $pet->breed  = $request->breed;
        $pet->location  = $request->location;
        $pet->description  = $request->description;

        if($pet->save()){
            return redirect('pets')->with('message', 'The Pet: '.$pet->name.' was successfully edited!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        if($pet->image != 'no-image.png' && file_exists(public_path('images/'.$pet->image))){
            unlink(public_path('images/'.$pet->image));
        }
        if($pet->delete()){
            return redirect('pets')->with('message', 'The pet: '.$pet->name.' was successfully deleted!');
        }
    }
    public function search(Request $request){
        $pets = Pet::names($request->q)->orderBy('id','desc')->paginate(20);
        return view('pets.search')->with('pets', $pets);
    }

     //Export Pdf
    public function pdf(){
        $pets = Pet::all();
        $pdf = PDF::loadView('pets.pdf', compact('pets'));
        return $pdf->download('allpets.pdf');
    }

    //Export Excel
    public function excel(){
        return Excel::download(new PetsExport, 'allpets.xlsx');
    }
}
