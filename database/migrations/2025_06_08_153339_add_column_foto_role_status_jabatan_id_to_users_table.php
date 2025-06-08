<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("role")->default("admin")->after("password");
            $table->string("status")->default("non active")->after("role");
            $table->foreignId("jabatan_id")->nullable()->after("status")->constrained("jabatans",indexName:"user_jabatan_id")->cascadeOnDelete();
            $table->string("foto")->after("jabatan_id")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('foto');
            $table->dropColumn('role');
            $table->dropColumn('status');
            $table->dropColumn('jabatan_id');
        });
    }
};
