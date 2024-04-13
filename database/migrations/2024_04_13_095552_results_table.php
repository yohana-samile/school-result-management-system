<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('results', function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(\App\Models\User::class);
                $table->foreignIdFor(\App\Models\Semester::class);
                $table->foreignIdFor(\App\Models\Subject::class);
                $table->integer('marks');
                $table->integer('total')->nullable();
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('results');
        }
    };

