<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;

class Advertisements extends Model
{
    use HasFactory;
    protected $table = 'advertisements';

    protected $fillable = ['Марка', 'Модель','год выпуска', 'Описание', 'хозяин'];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
