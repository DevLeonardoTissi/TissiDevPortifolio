<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('technologies')->nullable();
            $table->string('url');
            $table->string('img')->nullable();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
