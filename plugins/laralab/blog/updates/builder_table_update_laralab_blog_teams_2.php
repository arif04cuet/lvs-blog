<?php namespace Laralab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLaralabBlogTeams2 extends Migration
{
    public function up()
    {
        Schema::table('laralab_blog_teams', function($table)
        {
            $table->dropColumn('photo');
        });
    }
    
    public function down()
    {
        Schema::table('laralab_blog_teams', function($table)
        {
            $table->string('photo', 255);
        });
    }
}
