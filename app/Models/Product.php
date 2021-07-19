<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'cate_id',
        'image',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id');
    }

    public function class()
    {
        return $this->belongsTo(ClassNso::class, 'class_id');
    }

    public function server()
    {
        return $this->belongsTo(Server::class, 'server_id');
    }
}
