<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['schedule', 'payment'];

    public function gor()
    {
        return $this->BelongsTo(Gor::class);
    }

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
    public function payment()
    {
        return $this->hasOne(Schedule::class);
    }
}
