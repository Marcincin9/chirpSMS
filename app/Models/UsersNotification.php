<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersNotification extends Model
{
    protected $table= "users_notification";
    protected $fillable = [
         'phone_number',
         'body'
     ];
}
