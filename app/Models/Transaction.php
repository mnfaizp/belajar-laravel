<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $primaryKey = ['user_id', 'product_id'];

    public $increment = false;

    public function product() {
        $this->belongsTo(Product::class);
    }

    public function user() {
        $this->belongsTo(User::class);
    }
}
