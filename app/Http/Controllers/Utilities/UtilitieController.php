<?php
    namespace App\Http\Controllers\Utilities;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use DB;

    class UtilitieController extends Controller {
        public function grade(){
            $grades = DB::select('select * from grades ');
            return view('utilities/grade', compact('grades'));
        }

        public function semester(){
            $semesters = DB::select('select * from semesters ');
            return view('utilities/semester', compact('semesters'));
        }

        public function form(){
            $forms = DB::select('select * from forms ');
            return view('utilities/form', compact('forms'));
        }
    }

