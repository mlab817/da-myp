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
        Schema::create('prexcs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('label')
                ->nullable();
            $table->unsignedTinyInteger('level')
                ->nullable();
            $table->string('uacs_code')
                ->nullable();
            $table->foreignId('parent_id')
                ->nullable()
                ->constrained('prexcs')
                ->nullOnDelete();
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
        Schema::dropIfExists('prexcs');
    }
};
