<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function canAccess($request) {
        if  ($request->is('backend')) {
            return true;
        }
        //https://www.earthchie.com/blog/using-binary-in-user-access-control/
        $access = $this->uac & 1 << $this->getPageNo($request)-1;
        return $access != 0;
    }

    private function getPageNo($request) {
        switch ($request->path()) {
            case 'backend/register':
                return 1;
            case 'backend/check/esport':
                return 2;
            default:
                return -1;
        }
    }
}
