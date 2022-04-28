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
        'firstName',
        'lastName',
        'mi',
        'course',
        'section',
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }
<<<<<<< HEAD

    public function user()
    {
        return $this->belongsTo(User::class);
    }
=======
>>>>>>> 63304b5c6e05264d7865d3e76492fdf239b3767f
}
