<?php

use App\Models\MediaCenter;
use App\Models\problems;
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
        Schema::create('problem_chats', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class,"sender");
            $table->foreignIdFor(problems::class);
            $table->foreignIdFor(MediaCenter::class);
            $table->text("message")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('problem_chats');
    }
};
