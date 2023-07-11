<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name', 
        'description', 
        'is_active', 
        'image'
    ]; 

    public static function image($fileName, $category){
        if(request()->hasfile($fileName)){
            $file = request()->file($fileName); 
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extension; 
            $file->move('image/categories/', $filename); 
            $category->image = $filename; 
        }
    }
}
