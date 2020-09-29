<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateChatRoomUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chat_room_users', function (Blueprint $table) {
            $table->integer('chat_room_id')->after('id');// この行を追加
            $table->integer('user_id'); // この行を追加
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chat_room_users', function (Blueprint $table) {
            //
        });
    }
}
