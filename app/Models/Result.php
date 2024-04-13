<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Result extends Model {
        use HasFactory;
        protected $fillable = [
            'semester_id', 'subject_id', 'user_id', 'marks'
        ];

        public function user(){
            return $this->belongsTo(User::class);
        }
        public function subject(){
            return $this->belongsTo(Subject::class);
        }
        public function semester(){
            return $this->belongsTo(Semester::class);
        }
    }
