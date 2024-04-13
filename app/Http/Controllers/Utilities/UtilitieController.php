<?php
    namespace App\Http\Controllers\Utilities;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Http\JSonHttpResponse;
    use DB;
    use App\Models\Grade;

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

        public function registerGrade(Request $request){
            $validate = $request->validate([
                'name' => 'required',
                'from' => 'required',
                'to' => 'required'
            ]);

            $insert = Grade::create($validate);
            if ($insert) {
                return response()->json(['success'=> '/utilities/grade']);
            }
        }
    }

