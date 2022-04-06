<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authority extends Model
{
    use HasFactory;
    protected $fillable = ['auth_code', 'auth_name', 'usrn_start', 'usrn_end', 'lad_code', 'lad_name'];
}
