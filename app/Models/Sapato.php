<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sapato extends Model
{
    use HasFactory;
    protected $fillable =[
        'marca',
        'modelo',
        'tamanho',
        'cor',
        'user_id'
    ];
    public function donoDoSapato() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
