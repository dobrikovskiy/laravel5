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
    Schema::create('employees', function (Blueprint $table) {
        $table->id(); // id bigint(20) UN AI PK
        $table->string('name'); // name varchar(255)
        $table->string('position'); // position varchar(255)
        $table->timestamp('created_at')->nullable(); // created_at timestamp
        $table->timestamp('updated_at')->nullable(); // updated_at timestamp
        $table->string('workData')->nullable(); // workData varchar(255)
        $table->string('email')->nullable(); // email varchar(255)
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
