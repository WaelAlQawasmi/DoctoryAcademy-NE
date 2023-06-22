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
        Schema::create('media_centers', function (Blueprint $table) {
            $table->id();
            $table->string('fileName',50);
            $table->string('category',5);
            $table->string('fileType',15);
            $table->string('fileExt',5);
            $table->text('fileHash');
            $table->string('fileStatus',5);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_centers');
    }
};
