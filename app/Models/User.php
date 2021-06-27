<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public static function creationEmail($name, $last_name)
    {

        $name = strtolower($name);
        $last_name = strtolower($last_name);

        $email = $name . '.';

        for ($i = 0; $i = strlen($last_name); $i++) {
            $index = 0;
            $email = $email . $last_name[$index] . '@test.com';

            if (!User::where('email', $email)->first()) {
                break;
            }
            $index++;
        }

        return $email;
    }
}
