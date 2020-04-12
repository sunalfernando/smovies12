<?php namespace Sunal\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalMovies extends Migration
{
    public function up()
    {
        Schema::table('sunal_movies_', function($table)
        {
            $table->string('quality')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sunal_movies_', function($table)
        {
            $table->dropColumn('quality');
        });
    }
}
