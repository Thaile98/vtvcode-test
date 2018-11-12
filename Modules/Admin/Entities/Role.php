<?php 
namespace Modules\Admin\Entities;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
	/**
     * Many-to-Many relations with the user model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(Modules\Admin\Entities\Admin::class, Config::get('entrust.role_user_table'), Config::get('entrust.role_foreign_key'), Config::get('entrust.user_foreign_key'));
    }
}