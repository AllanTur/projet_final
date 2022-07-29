<?php

use App\Models\Bungalow;
use App\Models\User;
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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('bungalow_id');
            $table->date('debut');
            $table->date('fin');
            $table->timestamps();

            // $table->dropForeign('reservations_user_id_foreign');
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('bungalow_id')->references('id')->on('bungalows')->cascadeOnDelete();

            // $table->dropForeign('reservations_bungalow_id_foreign');
            // $table->foreign('bungalow_id')->references('id')->on('bungalows')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
