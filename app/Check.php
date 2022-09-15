<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Template;
use Auth;
class Check extends Model
{

    public static function CheckAuth($guards)
    {
        $check = false;
        foreach($guards as $guard){
            $check = $check || Auth::guard($guard)->check();
        }   

        return $check;
    }


}
