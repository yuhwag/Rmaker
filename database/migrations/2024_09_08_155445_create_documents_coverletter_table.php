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
        Schema::create('documents_coverletter', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('id_user');
            $table->integer('id_template');
            $table->text('image_template');
            $table->text('doc_name')->nullable();
            $table->text('contact_firstname')->nullable();
            $table->text('contact_lastname')->nullable();
            $table->text('job_title')->nullable();
            $table->text('contact_email')->nullable();
            $table->text('contact_phone')->nullable();
            $table->text('contact_address')->nullable();
            $table->text('greeting')->nullable();
            $table->text('recipient_title')->nullable();
            $table->text('recipient_firstname')->nullable();
            $table->text('recipient_lastname')->nullable();
            $table->text('company_name')->nullable();
            $table->text('doc_body')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents_coverletter');
    }
};
