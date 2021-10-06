<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id');
            $table->string('name');
            $table->string('client')->nullable();
            $table->text('file')->nullable();
            $table->enum('file_type', ['image', 'video'])->nullable();
            $table->text('description')->nullable();
            $table->enum('type', [
                'Vídeo Clipe',
                'Video Lyric',
                'Spot Publicitário',
                'Vídeo Comercial',
                'Vídeo de Casamento'
            ])->nullable();
            $table->date('begins_at')->nullable();
            $table->date('ends_at')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('portfolios');
    }
}
