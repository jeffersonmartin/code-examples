<?php

/*
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create-PACKAGE--TABLENAME-Table extends Migration
{

    public function up()
    {

        Schema::create('-package-_-tablename-', function (Blueprint $table) {
            // Table columns
            $table->uuid('id')->primary();
            $table->string('-singularobject-_name')->unique();
            // $table->uuid('created_by')->nullable()->index();
            // $table->uuid('updated_by')->nullable()->index();
            // $table->uuid('deleted_by')->nullable()->index();
            $table->timestamps();
            $table->softDeletes();
        });

    }

    public function down()
    {
        Schema::dropIfExists('-package-_-tablename-');
    }
}
*/