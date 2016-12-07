<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * php artisan make:migration create_tables_chuchai
 * php artisan migrate
 */
class CreateTablesChuChai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::hasTable('shop') || Schema::create('shop',function(Blueprint $table)
        {
            $table->increments('sid');
            $table->string('name')->default('');
            $table->integer('model_id')->default(0);
            $table->integer('admin_id')->default(0);
            $table->text('description')->nullable();
            $table->string('cover')->default('');
            $table->integer('create_time')->default(0);
            $table->integer('delete_time')->default(0);
        });

        Schema::hasTable('location') || Schema::create('location',function(Blueprint $table)
        {
            $table->increments('sid');
            $table->string('province')->default('')->comment('省');
            $table->string('city')->default('')->comment('市');
            $table->string('area')->default('')->comment('区县');
            $table->string('street')->default('')->comment('街道');
            $table->string('landmark')->default('')->comment('地标');
            $table->string('location')->default('')->comment('地标');
            $table->float('lat')->default(0)->comment('纬度');
            $table->float('lng')->default(0)->comment('经度');
        });

        Schema::hasTable('model') || Schema::create('model',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('remark',2047)->default('');
            $table->integer('create_time')->default(0);
            $table->integer('delete_time')->default(0);
        });

        Schema::hasTable('field') || Schema::create('field',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('sort')->default(0);
            $table->integer('type')->default(0);
            $table->string('key')->default('')->comment('字段标识');
            $table->string('name')->default('');
            $table->integer('model_id')->default(0);
            $table->string('model_ids',2047)->default('');
            $table->json('attrs')->nullable()->comment('附加属性');
            $table->string('remark',2047)->default('');
            $table->integer('create_time')->default(0);
            $table->integer('delete_time')->default(0);
        });

        Schema::hasTable('shop_field') || Schema::create('shop_field',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('sid')->default(0);
            $table->integer('field_id')->default(0);
            $table->string('value')->default('');
            $table->json('attrs')->nullable()->comment('附加属性');
        });

        Schema::hasTable('article') || Schema::create('article',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title')->default('');
            $table->string('desc')->default('');
            $table->text('content')->nullable()->comment('文章内容');
            $table->string('thumb')->default('');
            $table->string('link')->default('');
            $table->integer('read_num')->default(0);
            $table->integer('publish_time')->default(0)->comment('发布时间');
            $table->integer('create_time')->default(0);
            $table->integer('update_time')->default(0);
            $table->integer('delete_time')->default(0);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop');
        Schema::dropIfExists('location');
        Schema::dropIfExists('model');
        Schema::dropIfExists('field');
        Schema::dropIfExists('shop_field');
        Schema::dropIfExists('article');
    }
}
