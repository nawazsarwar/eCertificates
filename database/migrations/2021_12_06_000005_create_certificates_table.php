<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('token')->unique();
            $table->string('path')->nullable();
            $table->string('status')->nullable();
            $table->datetime('published_at')->nullable();
            $table->datetime('available_till')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
