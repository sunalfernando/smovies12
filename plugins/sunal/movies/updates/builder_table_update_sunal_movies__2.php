<?php namespace Sunal\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalMovies2 extends Migration
{
    public function up()
    {
        Schema::table('sunal_movies_', function($table)
        {
            $table->string('trailer')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sunal_movies_', function($table)
        {
            $table->dropColumn('trailer');
        });
    }
}
