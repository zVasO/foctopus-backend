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
            $table->text('icon_svg')->nullable();
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
        Schema::dropIfExists('sound_categories');
    }
};
