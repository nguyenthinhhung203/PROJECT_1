<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specificaltion extends Model
{
    use HasFactory;
    protected $table = 'specificaltions';
    protected $fillable = ['name', 'value', 'configuration_id'];


}
