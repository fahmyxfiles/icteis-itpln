<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Publication;
use App\Models\PublicationTag;

class CreatePublicationPublicationTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publication_publication_tag', function (Blueprint $table) {
            $table->foreignIdFor(Publication::class);
            $table->foreignIdFor(PublicationTag::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publication_publication_tag');
    }
}
