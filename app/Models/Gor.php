<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['field'];

    public function field()
    {
        return $this->hasMany(Field::class);
    }
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
