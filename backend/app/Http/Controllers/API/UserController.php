<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends ResponseController
{
    public function index(){

        $user=User::paginate(10);

        return $this->sendResponse($user,'User Successfully Register',200);


    }
}
