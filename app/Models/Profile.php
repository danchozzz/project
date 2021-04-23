<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Advertisements;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';

    protected $fillable = ['имя', 'фамилия','номер телефона'];

    public function advertisements()
    {
        return $this->hasMany(Advertisements::class);
    }
}
