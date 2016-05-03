<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Usercontent extends Model
{
    protected $table = 'user_content';
    protected $fillable = [
        'user_id',
        'imgPath',
        'desciption' //タイポしてるけど。。。
    ];

    public static function postImage($params)
    {
        \DB::transaction(function () use ($params) {
            \DB::table('user_content')
                ->insert([
                    'user_id' => $params['userId'],
                    'imgPath' => $params['imgPath'],
                    'created_at' => date('Y-m-d H:i:s')
                ]);
        });
    }
}