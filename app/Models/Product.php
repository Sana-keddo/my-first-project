<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Order;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','quantity','description','expdate','category_id','image'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function order(){
        return $this->belongsToMany(Order::class);
    }
}
