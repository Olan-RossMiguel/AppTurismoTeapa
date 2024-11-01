<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotels extends Model
{
    use HasFactory;
    protected $table = 'hotels';
    protected $fillable = ['name','address','number_rooms','phone_number','qualification'];

    public $timestamp = false;
}
