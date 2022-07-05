<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','slug','type','description','price','qty'];
    
    protected $hidden = [

    ];

    public function galleries()
    {
        return $this->hasMoney(ProductGallery::class, 'products_id');
    }
}
