<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Semester extends Model {
        protected $fillable = [
            'name', 'from', 'to'
        ];
        use HasFactory;
        public function result(){
            return $this->hasMany(Result::class);
        }
    }
