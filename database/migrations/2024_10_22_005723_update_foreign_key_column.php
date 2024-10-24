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
        // Rename column in projects table
        Schema::table('projects', function (Blueprint $table) {
            $table->renameColumn('categoryId', 'category_id');
        });

        // Rename columns in project_crew pivot table
        Schema::table('project_crew', function (Blueprint $table) {
            $table->renameColumn('crewId', 'crew_id');
            $table->renameColumn('projectId', 'project_id');
        });
    }
};

