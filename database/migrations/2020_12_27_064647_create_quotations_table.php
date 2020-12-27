<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('PlanId');
            $table->string('PlanName');
            $table->string('ContTerm');
            $table->string('PlanNo');
            $table->string('BenefitDeath');
            $table->string('CriticalIllness');
            $table->string('AccidentialDeath');
            $table->string('HospitalBenefit');
            $table->string('TotalMonthlyContribution');
            $table->string('TotalAnuallyRegularContribution');
            $table->foreignId('user_id');	


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotations');
    }
}
