<?php namespace AlbrightLabs\ShortenLinks\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateLinksTable extends Migration
{
    public function up()
    {
        Schema::create('albrightlabs_shortenlinks_links', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->text('url')->nullable();
            $table->string('code')->nullable();
            $table->integer('opened')->nullable();
            $table->integer('created')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('albrightlabs_shortenlinks_links');
    }
}
