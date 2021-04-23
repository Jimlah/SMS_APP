<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureAuthorizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_authorizes', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('feature');
            $table->boolean('viewAny')->default(false);
            $table->boolean('view')->default(false);
            $table->boolean('create')->default(false);
            $table->boolean('update')->default(false);
            $table->boolean('delete')->default(false);
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
        Schema::dropIfExists('feature_authorizes');
    }
}
