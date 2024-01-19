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
        Schema::create('surgeries', function (Blueprint $table) {
            $table->id();
            $table->string('surgeon_name');
            $table->string('procedure_name');
            $table->string('outcome');
            $table->longText('notes');
            $table->longText('procedure_details');
            $table->longText('pre_op_instructions');
            $table->longText('post_op_instructions');
            $table->string('pre_op_image_url');
            $table->string('post_op_image_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surgeries');
    }
};
