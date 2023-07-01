<?php

use App\Models\MediaCenter;
use App\Models\sections;
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
        Schema::create('video_secureities', function (Blueprint $table) {
            $table->id();
            $table->string("titel");
            $table->foreignIdFor(MediaCenter::class);
            $table->foreignIdFor(sections::class);
            $table->boolean("is_free");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_secureities');
    }
};
