<?php
    namespace App\Http\Controllers\Result;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Result;
    use App\Models\Semester;
    use App\Models\User;
    use DB;
    use Auth;

    class ResultController extends Controller {
        public function index($id){
            $id = Auth::user()->id;
            $subjects = DB::select("SELECT subjects.id, subjects.name
                        FROM users
                        JOIN teachers ON teachers.user_id = users.id
                        JOIN subject_user ON subject_user.user_id = users.id
                        JOIN subjects ON subject_user.subject_id = subjects.id
                        WHERE users.id = '$id'");
            $students = DB::select("SELECT users.id, users.name FROM users, students WHERE students.user_id = users.id");
            $results = Result::select(
                'users.name as user_name',
                'users.id as user_id',
                'students.enrolment_number',
                'subjects.name as subject_name',
                'results.marks',
                'semesters.id as semester_id',
                'semesters.name as semester_name'
            )
            ->join('users', 'results.user_id', '=', 'users.id')
            ->join('students', 'students.user_id', '=', 'users.id')
            ->join('subjects', 'results.subject_id', '=', 'subjects.id')
            ->join('semesters', 'results.semester_id', '=', 'semesters.id')
            ->where('semesters.id', '=', $id)
            ->get();
            $semester = Semester::findOrFail($id);
            return view('result/index', [
                'subjects' => $subjects,
                'students' => $students,
                'results' => $results,
                'semester' => $semester,
            ]);
        }

        public function submitStudentResult(Request $request, $id){
            $validate = $request->validate([
                'user_id' => 'required',
                'semester_id' => 'required',
                'subject_id' => 'required',
                'marks' => 'required',
            ]);

            $insert = Result::create($validate);
            if ($insert) {
                return response()->json(['success' => $id]);
            }
        }

        public function result_preview($id){
            $result_preview = Result::select(
                'users.name as user_name',
                'users.email',
                'users.id as user_id',
                'students.enrolment_number',
                'subjects.name as subject_name',
                'results.marks',
                'semesters.id as semester_id',
                'semesters.name as semester_name'
            )
            ->join('users', 'results.user_id', '=', 'users.id')
            ->join('students', 'students.user_id', '=', 'users.id')
            ->join('subjects', 'results.subject_id', '=', 'subjects.id')
            ->join('semesters', 'results.semester_id', '=', 'semesters.id')
            ->where('users.id', '=', $id)
            ->first();
            $total_marks = DB::select("SELECT SUM(marks) AS total_marks FROM results WHERE user_id = $id")[0]->total_marks;

            return view('result/result_preview', [
                'result_preview' => $result_preview,
                'total_marks' => $total_marks
            ]);
        }

        public function my_result(){
            $user_who_login = Auth::user()->id;
            $my_result = Result::select(
                'users.name as user_name',
                'users.email',
                'users.id as user_id',
                'students.enrolment_number',
                'subjects.name as subject_name',
                'results.marks',
                'semesters.id as semester_id',
                'semesters.name as semester_name'
            )
            ->join('users', 'results.user_id', '=', 'users.id')
            ->join('students', 'students.user_id', '=', 'users.id')
            ->join('subjects', 'results.subject_id', '=', 'subjects.id')
            ->join('semesters', 'results.semester_id', '=', 'semesters.id')
            ->where('users.id', '=', $user_who_login)
            ->first();
            $total_marks = DB::select("SELECT SUM(marks) AS total_marks FROM results WHERE user_id = $user_who_login")[0]->total_marks;

            return view('result/my_result', [
                'my_result' => $my_result,
                'total_marks' => $total_marks
            ]);
        }
    }
