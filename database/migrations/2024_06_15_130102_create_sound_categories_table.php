<?php

use App\Models\SoundCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sound_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon_svg_file_path')->nullable();
            $table->timestamps();
        });

        Schema::table('sounds', function (Blueprint $table) {
            $table->foreignIdFor(SoundCategory::class)->nullable()->after('id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sounds', static function (Blueprint $table) {
            $table->dropForeign(['sound_category_id']);
            $table->dropColumn('sound_category_id');
        });

        Schema::dropIfExists('sound_categories');
    }
};
