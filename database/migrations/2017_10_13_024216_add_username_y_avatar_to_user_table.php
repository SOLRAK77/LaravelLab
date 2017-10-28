<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsernameYAvatarToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //Se adicionan 2 campos mas a la tabla user
            $table->string('username')->unique();
            $table->string('avatar')->nullable();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //Recuerda escribir el deshacer del metodo up siempre
            $table->dropColumn('username');
            $table->dropColumn('avatar');

        });
    }
}
