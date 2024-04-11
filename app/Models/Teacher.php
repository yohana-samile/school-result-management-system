<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Teacher extends Model {
        protected $fillable = ['regstration_number', 'phone_number', 'gender', 'dob', 'address', 'education_qualification', 'subject'];
        use HasFactory;
        // other foctor like personal skills is constant never worry mabele

        public function User(){
            return $this->belongs(User::class);
        }
        public function Education_qualification(){
            return $this->belongsToMany(Education_qualification::class);
        }
        public function subject(){
            return $this->belongsToMany(Subject::class);
        }
    }

