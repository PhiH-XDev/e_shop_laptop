<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::table('san_pham', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });
    }
    public function down(): void {
        Schema::table('san_pham', function (Blueprint $table) {
           $table->dropColumn('deleted_at');
        });
    }

};
