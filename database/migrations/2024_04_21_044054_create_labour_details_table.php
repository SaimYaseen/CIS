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
        Schema::create('labour_details', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);                                  
            $table->string('fName', 255);                                  
            $table->string('phone', 20);                    
            $table->string('address', 255);                     
            $table->string('experties', 255);                     
            $table->string('workingDays', 20);                               
            $table->string('labourPaid', 20);                               
            $table->string('remaingLabour', 20);
            $table->string('contract_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labour_details');
    }
};
