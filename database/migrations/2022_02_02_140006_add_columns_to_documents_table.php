<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documents', function (Blueprint $table) {
           $table->foreignId('document_type_id')->constrained('document_types')->cascadeOnDelete();
           $table->foreignId('document_module_id')->constrained('document_modules')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documents', function (Blueprint $table) {
           $table->dropColumn('document_type_id');
           $table->dropColumn('document_module_id');
        });
    }
}
