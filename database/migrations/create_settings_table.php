<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            $table->text("key")->unique();
            $table->text("value")->nullable();

            $table->unsignedBigInteger("user_id")->nullable();

            $table->timestamps();
        });

        Schema::create('metas', function (Blueprint $table) {
            $table->id();

            $table->text("key")->unique();
            $table->text("value")->nullable();

            $table->foreignId("setting_id");

            $table->timestamps();
        });
    }
};
