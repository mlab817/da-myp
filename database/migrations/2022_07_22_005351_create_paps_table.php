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
        Schema::create('paps', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('operating_unit_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete(); // none
            $table->foreignId('strategy_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete(); // A
            $table->text('pap')
                ->nullable(); // E
            $table->foreignId('commodity_system_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete(); //D
            $table->foreignId('commodity_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete(); // C
            $table->foreignId('value_chain_segment_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete(); // H
            $table->foreignId('program_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete(); // B
            $table->text('brief_description')
                ->nullable(); // F
            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paps');
    }
};
