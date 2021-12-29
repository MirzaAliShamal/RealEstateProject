<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('record_id')->constrained();
            $table->enum('update_status',['pending','approved','rejected'])->default('pending');
            $table->integer('r_no');
            $table->string('balance')->nullable();
            $table->string('option')->nullable();
            $table->string('status')->nullable();
            $table->string('number')->nullable();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('bps')->nullable();
            $table->string('birth')->nullable();
            $table->string('retirement')->nullable();
            $table->string('death')->nullable();
            $table->string('new_nic')->nullable();
            $table->string('documents')->nullable();
            $table->string('demand')->nullable();
            $table->string('pifra')->nullable();
            $table->string('designation')->nullable();
            $table->string('h_no')->nullable();
            $table->string('street')->nullable();
            $table->string('colony')->nullable();
            $table->string('city')->nullable();
            $table->string('posting')->nullable();
            $table->string('final')->nullable();
            $table->string('phone_home')->nullable();
            $table->string('mobile')->nullable();
            $table->string('old_nic')->nullable();
            $table->string('balating')->nullable();
            $table->string('new_no')->nullable();
            $table->string('comment')->nullable();
            $table->string('d_call')->nullable();
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
        Schema::dropIfExists('record_histories');
    }
}
