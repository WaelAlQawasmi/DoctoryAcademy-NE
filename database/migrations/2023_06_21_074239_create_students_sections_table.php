<?php

use App\Models\sections;
use App\Models\User;
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
        Schema::create('students_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class,"student_id");
            $table->foreignIdFor(sections::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_sections');
    }
};
