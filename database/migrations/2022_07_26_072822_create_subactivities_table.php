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
        Schema::create('subactivities', function (Blueprint $table) {
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
            $table->text('subactivity')
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
            $table->foreignId('prexc_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete(); // I
            $table->string('unit_of_measure')
                ->nullable();
            $table->decimal('unit_cost', 20, 4, true)
                ->default(0);
            $table->foreignId('location_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete(); // G
            $table->decimal('physical_target_2023', 20, 4, true)->default(0);
            $table->decimal('physical_target_2024', 20, 4, true)->default(0);
            $table->decimal('physical_target_2025', 20, 4, true)->default(0);
            $table->decimal('physical_target_2026', 20, 4, true)->default(0);
            $table->decimal('physical_target_2027', 20, 4, true)->default(0);
            $table->decimal('physical_target_2028', 20, 4, true)->default(0);

            // the following can be auto-computed
            $table->decimal('budgetary_requirement_2023', 20, 4, true)->default(0);
            $table->decimal('budgetary_requirement_2024', 20, 4, true)->default(0);
            $table->decimal('budgetary_requirement_2025', 20, 4, true)->default(0);
            $table->decimal('budgetary_requirement_2026', 20, 4, true)->default(0);
            $table->decimal('budgetary_requirement_2027', 20, 4, true)->default(0);
            $table->decimal('budgetary_requirement_2028', 20, 4, true)->default(0);
            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
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
        Schema::dropIfExists('subactivities');
    }
};
