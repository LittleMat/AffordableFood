<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'first_name', 'last_name', 'adress', 'language', 'currency', 'photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function getId()
    {
      return $this->id;
    }

    public function isAnAdmin(){
        $res=false;

        $id = $this->getId();

        $status=DB::table('users')
            ->join('member_statuses', 'member_statuses.id', '=', 'users.member_status_id')
            ->where('users.id', $id)
            ->select('member_statuses.name')
            ->first();

        if($status->name=='admin')
            $res=true;

        return $res;
    }

    public function getRole(){
        $status=DB::table('users')
            ->join('member_statuses', 'member_statuses.id', '=', 'users.member_status_id')
            ->where('users.id', $this->getId())
            ->select('member_statuses.name')
            ->first();
        return $status->name;
    }
}
