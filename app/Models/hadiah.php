<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hadiah extends Model
{
    use HasFactory;
    protected $table = "hadiahs";
    protected $primaryKey = "id_hadiahs";
    protected $guarded = [];
}
