<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('org_name');
            $table->string('social_media');
            $table->string('reply_email');
            $table->string('reply_phone');
            $table->string('niche');
            $table->string('region');
            $table->string('avg_revenue');
            $table->string('referral_method');
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            // $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
