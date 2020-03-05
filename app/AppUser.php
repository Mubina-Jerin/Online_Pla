<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    protected $table='user';
    protected $primary_key='id';
    
    private $userName='userName';
    private $userType='userType';
    private $role_id='role_id';



}
