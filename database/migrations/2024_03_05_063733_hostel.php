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
        Schema::create('hostel', function (Blueprint $table) {
        $table->id();
        $table->string('name', 100)->unique();
        $table->string('location', 100);
        $table->string('single_room', 10);
        $table->string('double_room', 10);
		$table->timestamp('created_at')->useCurrent();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hostel');
    }
};
