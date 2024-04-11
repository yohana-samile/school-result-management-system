<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Student extends Model {
        use HasFactory;
        protected $fillable = ['enrolment_number', 'gender', 'dob', 'address', 'guard_information', 'medical_information'];
        // BELOW FACTOR IS OUT OF OUR SCOPE NOT WORRY MABELEEE

        // Academic Record: Previous schools attended, grades, and academic achievements. This factor is out of scope not worry mabele
        // Attendance Record: Records of the student's attendance and punctuality. This factor is out of scope not worry mabele
        // Special Needs or Accommodations: Any accommodations or support the student may require due to learning disabilities, physical disabilities, or other special needs.
        // Language Proficiency: Information about the languages the student speaks and their proficiency level.
        // Extracurricular Activities: Clubs, sports teams, or other activities the student participates in outside of regular classes.
        // Behavioral Information: Any relevant behavioral observations or disciplinary actions.
        public function user(){
            return $this->belongsTo(User::class);
        }
        public function guard_information(){
            return $this->hasOne(Guard_information::class);
        }
    }

