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

    public static function image($filename, $category){
        if($request->hasFile($filename)){
            $file = $request->file($filename); 
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extension; 
            $file->move('image/categories/', $filename); 
            $category->image = $filename; 
        }
    }
}
