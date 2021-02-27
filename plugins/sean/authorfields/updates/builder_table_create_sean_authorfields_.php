<?php namespace Sean\AuthorFields\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSeanAuthorfields extends Migration
{
    public function up()
    {
        Schema::create('sean_authorfields_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sean_authorfields_');
    }
}
