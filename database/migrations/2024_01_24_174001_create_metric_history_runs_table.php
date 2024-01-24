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
        Schema::create('metric_history_runs', function (Blueprint $table) {
            //id, url, accesibility_metric, pwa_metric, performance_metric, seo_metric, best_practices_metric (con sus respectivos created and updated dates)
            $table->id();
            $table->string('url');
            $table->float('accesibility_metric');
            $table->float('pwa_metric');
            $table->float('performance_metric');
            $table->float('seo_metric');
            $table->float('best_practices_metric');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metric_history_runs');
    }
};
