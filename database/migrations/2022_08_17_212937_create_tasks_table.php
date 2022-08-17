<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->foreignId('id_priority')->constrained('task_priority', 'id')->onDelete('CASCADE');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->foreignId('id_executor')->constrained('users', 'id')->onDelete('CASCADE');
            $table->foreignId('id_status')->constrained('task_status', 'id')->onDelete('CASCADE');
            $table->foreignId('id_creator')->constrained('users', 'id')->onDelete('CASCADE');
            $table->foreignId('id_project')->constrained('projects', 'id')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
