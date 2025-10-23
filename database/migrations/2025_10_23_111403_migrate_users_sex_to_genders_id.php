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
            if (!Schema::hasColumn('users', 'gender_id')) {
                $table->unsignedTinyInteger('gender_id')->nullable()->after('sex');
            }
        });

        DB::table('users')
            ->where('sex', 'male')
            ->update(['gender_id' => 0]);

        DB::table('users')
            ->where('sex', 'female')
            ->update(['gender_id' => 1]);
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'gender_id')) {
                $table->dropColumn('gender_id');
            }
        });
    }
};
