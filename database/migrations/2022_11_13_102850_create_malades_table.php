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
        Schema::create('malades', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("lname");
            $table->string("pat_id")->nullable();
            $table->string("phone")->nullable();
            $table->string("address")->nullable();
            $table->string("gender")->nullable();
            $table->string("age")->nullable();
            $table->string('bloodgroup')->nullable();
            $table->string('chambre')->nullable()->default('text');
            $table->string('maladie')->nullable()->default('text');
            $table->string("id_medecin");
            $table->float("facture")->nullable();
            $table->string('payed')->nullable()->default("Non");
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
        Schema::dropIfExists('malades');
    }
};
