<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    const ADD_COLUMNS = ['gender_id', 'birthday'];

    public function up()
    {
        if (!Schema::hasColumns('users', self::ADD_COLUMNS)) {
            Schema::table('users', function (Blueprint $table) {
                $table->tinyInteger('gender_id')->nullable();
                $table->date('birthday')->nullable();
                $table->softDeletes();
        });
        }
    }

    public function down()
    {
        if (Schema::hasColumns('users', self::ADD_COLUMNS)) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumns('users', self::ADD_COLUMNS);
            });
        }
    }
};
