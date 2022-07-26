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
            $table->foreignId('operating_unit_id')
                ->nullable()
                ->constrained('operating_units')
                ->nullOnDelete(); // level 0 only
            $table->boolean('national_only')
                ->default(0);
            $table->boolean('requires_regional_recommendation')
                ->default(0);
            $table->foreignId('approver_id')
                ->nullable()
                ->constrained('user_types')
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
