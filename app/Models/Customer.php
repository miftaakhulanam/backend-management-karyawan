<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function task()
    {
        return $this->hasMany(Task::class);
    }

    public function komplain()
    {
        return $this->hasMany(Komplain::class);
    }
}
