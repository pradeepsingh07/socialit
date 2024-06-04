<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkModel extends Model
{
    use HasFactory;
    protected $table = "work";
    protected $fillable = ['c_id','title','slug','thumbnail_image','content','work_images','sm_icons'];
    public $timestamps = false;
    protected $casts = [
        'work_images'=>'json',
        'sm_icons'=>'json'
   ];

   public function withdata(){
      return $this->hasMany(WorkcategoryModel::class,'id','c_id');
   }


}
