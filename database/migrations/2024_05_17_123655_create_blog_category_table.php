<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('blog_category', function (Blueprint $table) {
            $table->id();
            $table->string('category_name',255);
            $table->timestamps();
        });
    }
   
    public function down(): void
    {
        Schema::dropIfExists('blog_category');
    }
};
