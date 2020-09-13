<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->boolean('is_vip')->nullable();
            $table->unsignedBigInteger('owner')->nullable();
            $table->string('assistant_name')->nullable();
            $table->string('clean_status')->nullable();
            $table->string('jigsaw')->nullable();
            $table->string('department')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('do_not_call')->nullable();
            $table->boolean('has_opted_out_of_email')->nullable();
            $table->boolean('has_opted_out_of_fax')->nullable();
            $table->string('fax')->nullable();
            $table->unsignedBigInteger('individual')->nullable();
            $table->dateTime('last_cu_request_date')->nullable();
            $table->dateTime('last_cu_update_date')->nullable();
            $table->string('lead_source')->nullable();
            $table->string('mailing_address')->nullable();
            $table->string('other_address')->nullable();
            $table->unsignedBigInteger('reports_to')->nullable();
            $table->string('title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('is_vip');
            $table->dropColumn('owner');
            $table->dropColumn('assistant_name');
            $table->dropColumn('clean_status');
            $table->dropColumn('jigsaw');
            $table->dropColumn('department');
            $table->dropColumn('description');
            $table->dropColumn('do_not_call');
            $table->dropColumn('has_opted_out_of_email');
            $table->dropColumn('has_opted_out_of_fax');
            $table->dropColumn('fax');
            $table->dropColumn('individual');
            $table->dropColumn('last_cu_request_date');
            $table->dropColumn('last_cu_update_date');
            $table->dropColumn('lead_source');
            $table->dropColumn('mailing_address');
            $table->dropColumn('other_address');
            $table->dropColumn('reports_to');
            $table->dropColumn('title');
        });
    }
}
