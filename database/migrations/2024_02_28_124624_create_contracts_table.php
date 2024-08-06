<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);                                  
            $table->string('email', 255);                     
            $table->string('phone', 20);                               
            $table->string('service');                               
            $table->text('contract',1000); 
            // for site details 
            $table->string('siteName', 255);                                  
            $table->string('siteLocation', 255);                                  
            $table->text('matrialDetails', 1000)->nullable();                  
            $table->string('dataEntryUser')->nullable();                   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
