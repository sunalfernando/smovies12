<?php namespace Sunal\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalMoviesMoviesGenres3 extends Migration
{
    public function up()
    {
        Schema::create('sunal_movies_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movies_id');
            $table->integer('genre_id');
            $table->primary(['movies_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_movies_movies_genres');
    }
}
