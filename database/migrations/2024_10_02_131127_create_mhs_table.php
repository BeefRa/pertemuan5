<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mhs', function (Blueprint $table) {
            //$table->increments('id');
            $table->string('nrp',15);
            $table->primary('nrp');
            $table->string('nama',100);
            $table->string('nipdosenwali',15)
            ->index();
            $table->timestamps();
        });
        
        Schema::table('mhs',function($table){
        $table->foreign('nipdosenwali')
         ->references('nip')
             ->on('dosens')
             ->onUpdate('cascade')
             ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mhs');
    }
};
