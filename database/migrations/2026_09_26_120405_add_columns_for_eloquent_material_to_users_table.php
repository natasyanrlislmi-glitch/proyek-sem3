<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('status')->nullable();
        $table->string('role')->nullable();
        $table->integer('age')->nullable();
        $table->boolean('active')->default(1);
        $table->string('first_name')->nullable();
        $table->string('last_name')->nullable();
        $table->softDeletes(); // otomatis nambah kolom deleted_at
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['status', 'role', 'age', 'active', 'first_name', 'last_name']);
        $table->dropSoftDeletes();
    });
}
};
