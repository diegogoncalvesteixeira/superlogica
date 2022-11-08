<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  use HasFactory;

  protected $fillable = [
  'name',
  'username',
  'zipCode',
  'email',
  'password',
  ];

  protected $hidden = [
  'password',
  ];


  public function setPasswordAttribute($password)
  {
    $this->attributes['password'] = bcrypt($password);
  }
}