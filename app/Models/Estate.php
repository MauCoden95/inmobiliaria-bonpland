<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;
    protected $table = 'estates';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['address','type','country','city','ambients','square-meters','price','operation','image'];
}
