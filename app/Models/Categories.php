<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'title' , ' slug' ,' summary' ,'photo' ,'is_parent' ,'parent_id' , 'status'
    ];
    public function products()
    {
        return $this->hasMany(Product::class,'cat_id','id');
    }
}
