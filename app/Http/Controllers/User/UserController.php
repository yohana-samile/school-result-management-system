<?php
    namespace App\Http\Controllers\User;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use DB;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Http\JSonHttpResponse;
    use App\Models\Teacher;
    use App\Models\User;
    use App\Models\Subject;
    use App\Models\Role;
    use App\Models\Education_qualification;
    use App\Models\Student;
    use Illuminate\Support\Facades\Hash;


    class UserController extends Controller {
        public function staff(){
            $teachers = DB::select("SELECT * FROM users, teachers WHERE teachers.user_id = users.id");
            $subjects = DB::select("SELECT * FROM subjects ORDER BY created_at desc");
            $education_qualifications = DB::select("SELECT * FROM education_qualifications ORDER BY created_at desc");
            return view("user/staff", [
                'teachers' => $teachers,
                'subjects' => $subjects,
                'education_qualifications' => $education_qualifications
            ]);
        }

        public function registerTeacher(Request $request){
            $validate = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'phone_number' => 'required',
                'gender' => 'required',
                'dob' => 'required',
                'address' => 'required',
                'subject' => 'required|array',
                'education_qualification' => 'required|array',
            ]);

            $user = User::create([
                'name' => $validate['name'],
                'email' => $validate['email'],
                'password' => Hash::make($validate['password']),
            ]);

            $reg_number = random_int(1000, 20000);
            $teacher_registered = new Teacher();
            $teacher_registered->regstration_number = 'srms-'.$reg_number;
            $teacher_registered->phone_number = $validate['phone_number'];
            $teacher_registered->gender = $validate['gender'];
            $teacher_registered->dob = $validate['dob'];
            $teacher_registered->address = $validate['address'];

            $user->Teacher()->save($teacher_registered);
            $user->roles()->attach(Role::where('name', 'is_staff')->first());
            $user->subjects()->attach($validate['subject']);
            $user->education_qualifications()->attach($validate['education_qualification']);

            return response()->json(['success' => '/staff/']);
        }

        // student
        public function student(){
            $students = DB::select("SELECT * FROM users, students WHERE students.user_id = users.id");
            return view("user/student", compact('students'));
        }
        public function registerStudent(Request $request){
            $validate = $request->validate([
                'name' => 'required',
                'password' => 'required',
                'gender' => 'required',
                'dob' => 'required',
                'address' => 'required',
            ]);
            $nameParts = explode(' ', $validate['name']);
            $username = strtolower($nameParts[0]);
            if (count($nameParts) > 1) {
                $domain = strtolower(implode('', array_slice($nameParts, 1)));
            }
            $email = $username . '@' . $domain . '.com';
            $user = User::create([
                'name' => $validate['name'],
                'email' => $email,
                'password' => Hash::make($validate['password']),
            ]);

            $enrolment_number = random_int(3000, 30000);
            $student_registered = new Student();
            $student_registered->enrolment_number = 'srms-'.$enrolment_number;
            $student_registered->gender = $validate['gender'];
            $student_registered->dob = $validate['dob'];
            $student_registered->address = $validate['address'];

            $user->Student()->save($student_registered);
            $user->roles()->attach(Role::where('name', 'is_student')->first());
            return response()->json(['success' => '/student/']);
        }
    }
