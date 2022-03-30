<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';
    protected $fillable = [
        'teamName',
        'teamLeader',
        'course',
        'section',
        'lastName1',
        'firstName1',
        'mI1',
        'lastName2',
        'firstName2',
        'mI2',
        'lastName3',
        'firstName3',
        'mI3',
    ];
}
