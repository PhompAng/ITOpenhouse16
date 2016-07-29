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
        $path = $request->path();
        switch (true) {
            case stripos($path, 'backend/register') !== false:
                return 1;
            case stripos($path, 'backend/competition/esport') !== false:
                return 2;
            case stripos($path, 'backend/competition/pitching') !== false:
                return 3;
            case stripos($path, 'backend/competition/quiz') !== false:
                return 4;
            case stripos($path, 'backend/competition/network') !== false:
                return 5;
            case stripos($path, 'backend/competition/php') !== false:
                return 6;
            case stripos($path, 'backend/user') !== false:
                return 7;
            default:
                return -1;
        }
    }
}
