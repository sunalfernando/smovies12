<?php namespace Sunal\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalMoviesMoviesGenres2 extends Migration
{
    public function up()
    {
        Schema::table('sunal_movies_movies_genres', function($table)
        {
            $table->dropPrimary(['movie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::table('sunal_movies_movies_genres', function($table)
        {
            $table->primary(['movie_id','genre_id']);
        });
    }
}
