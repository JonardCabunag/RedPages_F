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
        Schema::create('donor_dets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userid');
            $table->String('address');
            $table->integer('age');
            $table->string('gender');
            $table->string('civilstatus');
            $table->string('bloodtype');
            $table->integer('legibility');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
