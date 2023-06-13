<?php

namespace App\Models\registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    public $timestamptimestamp=false;
    protected $table = 't_user_master';
    protected $fillable = [
        'full_name',
        'email',
        'contact_no',
        'password',
        'role_id',
        'updated_by',
        'updated_at',
        'created_at',
        'created_by',
    ];
}
