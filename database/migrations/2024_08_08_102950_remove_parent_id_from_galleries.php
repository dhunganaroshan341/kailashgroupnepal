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
        Schema::table('galleries', function (Blueprint $table) {
            // Drop the foreign key constraint if it exists
            $table->dropForeign(['parent_id']);
            // Drop the parent_id column
            $table->dropColumn('parent_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('galleries', function (Blueprint $table) {
            // Add the parent_id column back with a foreign key constraint
            $table->foreignId('parent_id')
                ->nullable()
                ->constrained('galleries')
                ->onDelete('set null');
        });
    }
};
