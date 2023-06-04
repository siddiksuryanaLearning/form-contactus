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
        if (!Schema::hasTable('form')) {
            Schema::create('form', function (Blueprint $table) {
                $table->id('id');
                $table->timestamps();
                $table->string('fullname');
                $table->string('email');
                $table->string('company_name');
                $table->string('company_type');
                $table->text('problems');
                $table->text('expectation');
                $table->unique(array('id'));
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
