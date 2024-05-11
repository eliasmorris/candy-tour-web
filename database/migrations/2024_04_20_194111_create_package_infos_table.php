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
        Schema::create('package_infos', function (Blueprint $table) {
            $table->id();
            $table->string('packagename');
            $table->string('packagetrip');
            $table->double('packagecost');
            $table->string('description');
            $table->string('packageimage');
            $table->string('status');
            $table->timestamps();
            // $table->foreign('destination_id')->references('id')->on('destination_infos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_infos');
    }
};
