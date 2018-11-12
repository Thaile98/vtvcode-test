<?php
namespace Modules\Admin\Entities;

use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use EntrustUserTrait; // add this trait to your user model

}