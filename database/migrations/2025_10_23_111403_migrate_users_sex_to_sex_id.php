<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'sex_id')) {
                $table->unsignedTinyInteger('sex_id')->nullable()->after('sex');
            }
        });

        DB::table('users')
            ->where('sex', 'male')
            ->update(['sex_id' => 0]);

        DB::table('users')
            ->where('sex', 'female')
            ->update(['sex_id' => 1]);
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'sex_id')) {
                $table->dropColumn('sex_id');
            }
        });
    }
};
