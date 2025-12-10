<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'pet_id',
    ];


    // RelationShips
    // Adoption belongTo  User
    public function user() {
        return $this->belongsTo(User::class);
    }
    // Adoption belongTo Pet
    public function pet() {
        return $this->belongsTo(Pet::class);
    }
    

     public function scopenames($adopts, $q)
    {
        // if(trim($q)){
        //     $adopts->where('user_id','LIKE',"%$q%")
        //     ->orWhere('pet_id','LIKE',"%$q%");
        // }
        if (trim($q)) {
            $adopts->whereHas('user', function ($query) use ($q) {
                $query->where('fullname', 'LIKE', "%$q%")->orWhere('email', 'LIKE', "%$q%");
            })->orWhereHas('pet', function ($query) use ($q) {
                $query->where('name', 'LIKE', "%$q%")->orWhere('kind', 'LIKE', "%$q%");
            });
        }
        return $adopts;
    }
}
