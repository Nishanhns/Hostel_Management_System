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
        Schema::create('booking', function (Blueprint $table) {
        $table->id();
        $table->string('hostel_id', 20);
        $table->string('user_id', 20);
        $table->string('checkin', 20);
        $table->string('checkout', 20);
        $table->string('single_room', 10);
        $table->string('double_room', 10);
        $table->string('flag', 1);
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
        Schema::dropIfExists('booking');
    }
};
