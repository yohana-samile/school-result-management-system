<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Staff extends Model {
        protected $fillable = ['regstration_number', 'phone_number', 'gender', 'dob', 'address', 'education_qualification', 'subject'];
        use HasFactory;

        // other foctor like personal skills is constant never worry mabele
    }
