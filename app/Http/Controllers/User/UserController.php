<?php

    namespace App\Http\Controllers\User;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class UserController extends Controller {
        public function staff(){
            return view("user/staff");
        }

        // student
        public function student(){
            return view("user/student");
        }
    }
