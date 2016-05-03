<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Usercontent;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function __construct()
    {
        $this->userId = \Auth::user()->id;
//        $this->user = User::find($this->userId);
        $this->middleware('auth');
    }

    public function home($id)
    {
//        return User::getSnippetActivity($id);
    }

    public function upload(Request $request)
    {
        $input = $request->all();
        $input['userId'] = $this->userId;
        var_dump($input);

        try {

            Usercontent::postImage($input);

            return 'ok';
        } catch (\Exception $e) {
            return 'ng';
        }
    }
}