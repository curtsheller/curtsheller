<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// https://dev.mysql.com/doc/refman/8.0/en/integer-types.html

return new class extends Migration
{
    /**
     * Run the migrations for the `listings` table.
     *
     *      Database: Migrations
     *          https://laravel.com/docs/9.x/migrations
     *
     *      id` int(11) unsigned NOT NULL AUTO_INCREMENT,
     *      title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
     *      code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
     *      category` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
     *      instrument` varchar(128) COLLATE utf8_unicode_ci DEFAULT '',
     *      available` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
     *      private` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
     *      premium` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
     *      stars` varchar(5) COLLATE utf8_unicode_ci DEFAULT '',
     *      url` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
     *      address` text COLLATE utf8_unicode_ci,
     *      city` varchar(128) COLLATE utf8_unicode_ci DEFAULT '',
     *      region` varchar(128) COLLATE utf8_unicode_ci DEFAULT '',
     *      country` varchar(128) COLLATE utf8_unicode_ci DEFAULT '',
     *      longitude` float(10,6) DEFAULT NULL,
     *      latitude` float(10,6) DEFAULT NULL,
     *      description_mini` text COLLATE utf8_unicode_ci,
     *      description` text COLLATE utf8_unicode_ci,
     *      published` date DEFAULT NULL,
     *      updated_date` date DEFAULT NULL,
     *      visits` int(11) unsigned NOT NULL DEFAULT '0',
     *      created_at` datetime NOT NULL,
     *      updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {


            $table->id();

            $table->string('title', 255);
            $table->char('code', 255)->unique();

            $table->string('category', 128)->nullable();;
            $table->char('instrument', 128)->default('Ukulele');
            $table->char('url', 255)->default('')->nullable();

            // Currently in LearningUkulele.com's db these are a char(1)
            $table->boolean('available')->default(1);
            $table->boolean('private')->default(0);
            $table->boolean('premium')->default(0);

            $table->char('stars', 5)->default('');

            $table->text('address')->default('');

            $table->char('city', 255)->default('');
            $table->char('region', 255)->default('');
            $table->char('country', 255)->default('');

            $table->float('longitude', 10, 6);
            $table->float('latitude', 10, 6);

            $table->text('description_mini');
            $table->text('description');

            $table->date('published');
            $table->date('updated_date');

            $table->integer('visits')->default('1');

            // laravel record timestamps
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
        Schema::dropIfExists('listings');
    }
};
