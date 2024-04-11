<?php
    namespace App\Http\Controllers\Subject;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Subject;
    use DB;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Http\JSonHttpResponse;

    class SubjectController extends Controller {
        public function index(){
            $subjects = DB::select("SELECT * FROM subjects ORDER BY created_at desc");
            return view("subject/index", compact('subjects'));
        }
        public function registerSubject(Request $request){
            $validate = $request->validate([
                'name' => 'required',
            ]);

            $insert = Subject::create($validate);
            if ($insert) {
                return response()->json(['success' => '/subject/index']);
            }
        }
    }
