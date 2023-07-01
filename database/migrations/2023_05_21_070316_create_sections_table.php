<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\MediaCenter;
use App\Models\departments;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->mediumText('description')->nullable($value = true);
            $table->foreignIdFor(MediaCenter::class);    
            $table->foreignIdFor(departments::class);    
            $table->foreignIdFor(User::class);    
                    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
