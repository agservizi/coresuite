<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('caf_patronato', function (Blueprint $table) {
            $table->foreignId('caricato_da_user_id')->after('agente_id')->nullable()->constrained('users');
        });

        Schema::table('attivazioni_sim', function (Blueprint $table) {
            $table->foreignId('caricato_da_user_id')->after('agente_id')->nullable()->constrained('users');
        });

        Schema::table('segnalazioni', function (Blueprint $table) {
            $table->foreignId('caricato_da_user_id')->after('agente_id')->nullable()->constrained('users');
        });

        Schema::table('visure', function (Blueprint $table) {
            $table->foreignId('caricato_da_user_id')->after('agente_id')->nullable()->constrained('users');
        });
        Schema::table('brt_spedizioni', function (Blueprint $table) {
            $table->foreignId('caricato_da_user_id')->after('agente_id')->nullable()->constrained('users');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('altri_servizi', function (Blueprint $table) {
            //
        });
    }
};