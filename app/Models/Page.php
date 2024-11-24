<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Page extends Model
{
   use HasFactory;


protected $primaryKey = 'id';

    public $incrementing = false;
    protected $keyType= 'string';
    
    protected $fillable = ['id','content','title'];
}
