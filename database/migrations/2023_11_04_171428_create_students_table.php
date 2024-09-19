<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->required();
            $table->string('nis',10)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * add column
     * php artisan make:migration add_gender_column_to_student_table
     *
     * rollback berdasarkan batch
     * php artisan make:rollback --step=2
     *
     * change
     * php artisan make:migration change_gender_attribute_in_students_table
     * composer require doctrine/dbal
     *
     * foreign key
     * php artisan make:migaration add_class_id_column_to_students_table
     *
     * agar data tidak sama
     * php artisan make:migration add_unique_rule_in_class_table
     *
     * Seeder
     * php artisan make:seeder ClassSeeder
     *
     * jalanin seeder untuk masing" class
     * php artisan db:seed --class=ClassSeeder
     *
     * jalanin semua class
     * php artisan db:seed
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
