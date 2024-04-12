<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Medical_information extends Model {
        protected $fillable = [
            'is_disabled', 'user'
        ];
        use HasFactory;
    }
