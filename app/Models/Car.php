<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table      = "cars";
    protected $primaryKey = "id";
    protected $fillable = [
        'merk',
        'seri',
        'silinder',
        'tipe',
        'sub_tipe',
        'transmisi',
        'tahun',
        'bahan_bakar',
        'penggerak',
    ];
}
