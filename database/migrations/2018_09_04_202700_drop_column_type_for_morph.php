<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnTypeForMorph extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users') && Schema::hasColumn('users', 'companies_type')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('companies_type');
            });
        }

        if (Schema::hasTable('keywords') && Schema::hasColumn('keywords', 'companies_type') && Schema::hasColumn('keywords', 'pages_type')) {
            Schema::table('keywords', function (Blueprint $table) {
                $table->dropColumn(['companies_type','pages_type']);
            });
        }

        if (Schema::hasTable('descriptions') && Schema::hasColumn('descriptions', 'companies_type') && Schema::hasColumn('descriptions', 'pages_type')) {
            Schema::table('descriptions', function (Blueprint $table) {
                $table->dropColumn(['companies_type','pages_type']);
            });
        }

        if (Schema::hasTable('pages') && Schema::hasColumn('pages', 'companies_type')) {
            Schema::table('pages', function (Blueprint $table) {
                $table->dropColumn('companies_type');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('users') && !Schema::hasColumn('users', 'companies_type')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('companies_type');
            });
        }

        if (Schema::hasTable('pages') && !Schema::hasColumn('pages', 'companies_type')) {
            Schema::table('pages', function (Blueprint $table) {
                $table->string('companies_type');
            });
        }

        if (Schema::hasTable('keywords') && !Schema::hasColumn('keywords', 'companies_type') && !Schema::hasColumn('keywords', 'pages_type')) {
            Schema::table('keywords', function (Blueprint $table) {
                $table->string('companies_type');
                $table->string('pages_type');
            });
        }

        if (Schema::hasTable('descriptions') && !Schema::hasColumn('descriptions', 'companies_type') && !Schema::hasColumn('descriptions', 'pages_type')) {
            Schema::table('descriptions', function (Blueprint $table) {
                $table->string('companies_type');
                $table->string('pages_type');
            });
        }
    }
}
