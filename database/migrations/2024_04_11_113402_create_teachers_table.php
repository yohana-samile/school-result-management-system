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
            Schema::create('teachers', function (Blueprint $table) {
                $table->id();
                $table->string('regstration_number');
                $table->integer('phone_number');
                $table->string('gender');
                $table->string('dob');
                $table->string('address');
                $table->string('education_qualification');
                // $table->unsignedBigInteger('subject_id');
                $table->timestamps();
                // $table->foreign('subject_id')->references('id')->on('subjects');
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('teachers');
        }
    };
