<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('menu_name',100)->comment('菜单名');
            $table->smallInteger('crux_sort')->nullable()->default(0)->comment('排序');
            $table->string('url')->nullable()->comment('链接地址')->default('');
            $table->string('icon')->nullable()->comment('图标类名')->default('');
            $table->string('remark')->nullable()->comment('说明')->default('');
            $table->unsignedSmallInteger('pid')->nullable()->default(0)->comment('上级菜单');
            $table->unsignedTinyInteger('is_show')->nullable()->default(1)->comment('是否渲染链接，1渲染0不渲染');
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
        Schema::dropIfExists('menus');
    }
}
