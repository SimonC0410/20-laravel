<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\User;
use App\Models\Adoption;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //my profile
    public function myprofile()
    {
        $user = User::find(Auth::user()->id);
        //dd($user->toArray());
        return view('customer.myprofile')->with('user', $user);
    }

    public function updatemyprofile(Request $request)
    {
        //dd($request->all());
        // dd($request->all());
        $validation = $request->validate([
            'document'  => ['required', 'numeric', 'unique:' . User::class . ',document,' . $request->id],
            'fullname'  => ['required', 'string', 'max:255'],
            'gender'    => ['required'],
            'birthdate' => ['required', 'date'],
            'phone'     => ['required'],
            'email'     => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class . ',email,' . $request->id],
        ]);
        if ($validation) {
            //dd($request->all());
            if ($request->hasFile('photo')) {
                $photo = time() . '.' . $request->photo->extension();
                $request->photo->move(public_path('images'), $photo);
                if ($request->originPhoto != 'no-photo.png') {
                    unlink(public_path('images/') . $request->originPhoto);
                }
            } else {
                $photo = $request->originPhoto;
            }
        }
        $user = User::find($request->id);
        $user->document     = $request->document;
        $user->fullname     = $request->fullname;
        $user->gender       = $request->gender;
        $user->birthdate    = $request->birthdate;
        $user->photo        = $photo;
        $user->phone        = $request->phone;
        $user->email        = $request->email;
        if ($user->save()) {
            return redirect('dashboard')->with('success', value: 'My profile was seccessfully edited!');
        }
    }

    //My Adoptions
    public function myadoptions()
    {
        $adopts = Adoption::where('user_id', Auth::user()->id)->get();

        return view('customer.myadoptions')->with('adopts', $adopts);
    }

    public function showadoption(Request $request)
    {
        $adopt = Adoption::find($request->id);
        return view('customer.showadoption')->with('adopt', $adopt);
    }

    //Make Adoption
    public function listpets()
    {
        $pets = Pet::where('status', 0)->orderBy('id', 'desc')->paginate(20);
        return view('customer.makeadoption')->with('pets', $pets);
    }

    public function confirmadoption(Request $request)
    {
        $pet = Pet::find($request->id);
        return view('customer.confirmadoption')->with('pet', $pet);
    }

    public function makeadoption(Request $request)
    {
        // generar nueva adopcion
        $adopt = new Adoption();
        $adopt->user_id = Auth::user()->id;
        $adopt->pet_id = $request->id;
        $adopt->created_at = now();
        $adopt->updated_at = now();
        if ($adopt->save()) {
            // actualizar estado de la mascota
            $pet = Pet::find($request->id);
            $pet->status = 1; // adoptado
            if ($pet->save()) {
                return redirect('myadoptions')->with('success', value: Auth::user()->fullname . ' has adopted ' . $pet->name . '!');
            }
        }
    }

    public function search(Request $request)
    {
        $pets = Pet::kinds($request->q)->orderBy('id', 'desc')->paginate(20);
        return view('customer.search')->with('pets', $pets);
    }
}
