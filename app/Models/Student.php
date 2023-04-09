<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ipk()
    {
        return $this -> HasOne(Ipk::class);
    }

    public function mataKuliah()
    {
        return $this -> HasMany(MataKuliah::class);
    }
}
