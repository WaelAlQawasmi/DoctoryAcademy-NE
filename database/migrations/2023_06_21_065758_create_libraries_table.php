<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\MediaCenter;
use App\Models\bookCategory;
use App\Models\sections;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->string("bookName");
            $table->enum('type', ['public', 'private-free', 'private-paid']);
            $table->boolean("is_show");
            $table->foreignIdFor(MediaCenter::class);
            $table->foreignIdFor(bookCategory::class);
            $table->foreignIdFor(sections::class);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
