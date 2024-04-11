<?php

    namespace App\Http\Controllers\Subject;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class SubjectController extends Controller {
        public function index(){
            return view("subject/index");
        }
    }
