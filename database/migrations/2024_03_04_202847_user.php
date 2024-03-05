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
        Schema::create('user', function (Blueprint $table) {
        $table->id();
        $table->string('username', 100)->unique();
        $table->string('password', 40);
        $table->string('email', 100)->unique();
        $table->string('role', 10);
		$table->timestamp('created_at')->useCurrent();
		});
		
		
		 // Insert initial data
        DB::table('user')->insert([
            'username' => 'Admin',
            'password' => 'e3afed0047b08059d0fada10f400c1e5',
            'email' => 'nishan5505@gmail.com',
            'role' => 'Admin',
        ]);
    }
	

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
