<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->string('publication_status');

            $table->unsignedBigInteger('section_id');
            $table->index('section_id');
            $table->foreign('section_id')
                ->references('id')
                ->on('sections')
                ->onDelete('cascade');

            $table->unsignedBigInteger('blog_category_id');
            $table->index('blog_category_id');
            $table->foreign('blog_category_id')
                ->references('id')
                ->on('blog_category')
                ->onDelete('cascade');

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
        Schema::dropIfExists('blog');
    }
}
