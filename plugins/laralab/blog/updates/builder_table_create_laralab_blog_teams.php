<?php namespace Laralab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLaralabBlogTeams extends Migration
{
    public function up()
    {
        Schema::create('laralab_blog_teams', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->string('designation', 255);
            $table->text('short_description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('laralab_blog_teams');
    }
}
