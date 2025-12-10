<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'document',
        'fullname',
        'gender',
        'birthdate',
        'photo',
        'phone',
        'email',
        'password',
        'active',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Corregir y usar $casts en lugar de method
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Normalizar el género antes de guardarlo
    public function setGenderAttribute($value): void
    {
        if (is_null($value)) {
            $this->attributes['gender'] = null;
            return;
        }

        $v = strtolower(trim($value));

        $mapMale = ['male', 'm', 'masculino', 'hombre'];
        $mapFemale = ['female', 'f', 'femenino', 'mujer', 'female'];

        if (in_array($v, $mapMale, true)) {
            $this->attributes['gender'] = 'male';
            return;
        }

        if (in_array($v, $mapFemale, true)) {
            $this->attributes['gender'] = 'female';
            return;
        }

        // Por defecto, almacenar en minúsculas tal cual venga
        $this->attributes['gender'] = $v;
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function adoptions(){
        return $this->hasMany(Adoption::class);
    }

    public function scopenames($users, $q){
        if(trim($q)) {
            $users->where('fullname', 'LIKE', "%$q%")->orWhere('email', 'LIKE', "%$q%");
        }
    }
}
