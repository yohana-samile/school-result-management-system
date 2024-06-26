<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Subject extends Model {
        protected $fillable = ['name'];
        use HasFactory;
        public function teacher(){
            return $this->belongsToMany(Teacher::class);
        }
        public function result(){
            return $this->hasMany(Result::class);
        }
    }

