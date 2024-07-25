<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcBuildsTable extends Migration
{
    public function up()
    {
        Schema::create('pc_builds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cpu_id')->constrained('components');
            $table->foreignId('gpu_id')->constrained('components');
            $table->foreignId('motherboard_id')->constrained('components');
            $table->foreignId('ram_id')->constrained('components');
            $table->foreignId('storage_id')->constrained('components');
            $table->foreignId('power_supply_id')->constrained('components');
            $table->foreignId('cooling_system_id')->constrained('components');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pc_builds');
    }
}
