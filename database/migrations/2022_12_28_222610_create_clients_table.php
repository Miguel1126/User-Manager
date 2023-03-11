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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->Date('birth');
            $table->string('ssn');
            $table->string('payor');
            $table->string('country');
            $table->string('address');
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->string('race');
            $table->string('ethnicity');
            $table->string('genderAtBirth');
            $table->string('maritalStatus');
            $table->string('household');
            $table->string('language');
            $table->string('employmentStatus');
            $table->string('names')->nullable();
            $table->string('phone')->nullable();
            $table->string('email2')->nullable();
            $table->string('relationship')->nullable();
            $table->string('address2')->nullable();
            $table->string('primaryCareProvider')->nullable();
            $table->string('clientPIN')->nullable();
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
        Schema::dropIfExists('clients');
    }
};
