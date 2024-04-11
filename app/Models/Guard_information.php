<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Guard_information extends Model {
        protected $fillable = ['name', 'phone_number', 'address', 'user'];
        use HasFactory;
    }

