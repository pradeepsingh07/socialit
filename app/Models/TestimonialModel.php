<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialModel extends Model
{
    use HasFactory;
    protected $table = "testimonial";
    protected $fillable = ['name','image','rating','review'];
}
