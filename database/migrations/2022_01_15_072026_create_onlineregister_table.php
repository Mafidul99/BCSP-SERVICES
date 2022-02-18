<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineregisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlineregister', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fname');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('address');
            $table->string('city');
            $table->enum('State',['select','andhra','arunachal','assam','bihar','goa','gujarat','haryana','himachal','jharkhand','karnataka','kerala','madhya','maharashtra','manipur',
                'meghalaya','mizoram','nagaland','odisha','punjab','rajasthan','sikkim','tamil','telangana','tripura','uttar','uttarakhand','west'])->default('select');
            $table->string('zip');
            $table->string('bname');
            $table->string('gname');
            $table->enum('radio',['maile','femail']);
            $table->string('filemanager');
            $table->string('gridCheck');
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
        Schema::dropIfExists('onlineregister');
    }
}
