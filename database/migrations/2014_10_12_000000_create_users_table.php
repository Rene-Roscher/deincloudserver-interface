<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            /**/
            $table->string('email')->unique();
            $table->decimal('money', 10, 2)->default(0.00);
            $table->string('password');
            /**/
            $table->longText('roles')->default('["CUSTOMER"]')->nullable();
            $table->enum('registered_with', ['EMAIL', 'GOOGLE', 'TWITTER', 'GITHUB', 'GITLAB', 'FACEBOOK'])->default('EMAIL');
            $table->enum('state', ['PENDING', 'ACTIVATED', 'DEACTIVATED'])->default('PENDING');
            /**/
            $table->enum('salutation', ['MALE', 'FEMALE'])->default('MALE');
            $table->string('first_name');
            $table->string('last_name');
            $table->timestamp('birthday');
            $table->longText('street');
            $table->longText('house_number');
            $table->string('postcode');
            $table->longText('city');
            $table->longText('region');
            $table->longText('country');
            $table->string('phone_number')->nullable()->unique();
            /**/
            $table->enum('account_type', ['PRIVATE', 'COMPANY'])->default('PRIVATE');
            $table->longText('company_name')->nullable();
            $table->longText('company_contact')->nullable();
            $table->longText('company_ustid')->nullable();
            /**/
            $table->longText('notes')->nullable();
            /**/
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
