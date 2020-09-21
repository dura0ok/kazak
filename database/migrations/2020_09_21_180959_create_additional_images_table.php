<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additional_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->bigInteger("article_id")->unsigned();
            $table->foreign("article_id")->references('id')->on("news")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('additional_images', function (Blueprint $table) {
            $table->dropForeign('additional_images_article_id_foreign');
        });
        Schema::dropIfExists('additional_images');
    }
}
