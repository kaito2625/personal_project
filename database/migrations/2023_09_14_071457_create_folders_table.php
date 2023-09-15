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
        Schema::create('folders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('title');
            $table->softDeletes();
            $table->timestamps();
            
            $table->index('id');
            $table->index('user_id');
            $table->index('title');
            
            $table->foreign('user_id')
                 ->references('id')
                 ->on('users')
                 ->onDelete('cascade')
                 ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('folders');
    }
};
