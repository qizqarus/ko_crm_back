<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pecs', function (Blueprint $table) {
            $table->id();
            $table->string('pec_name');
            $table->string('pec_address');
            $table->enum('pec_location', ['Бохтар', 'Вахдат', 'Гиссар', 'Гулистон', 'Истаравшан', 'Истиклол', 'Исфара', 'Канибадам', 'Куляб', 'Левакант', 'Нурек', 'Пенджикент', 'Рогун', 'Турсунзаде', 'Худжанд', 'Хорог', 'Душанбе']);
            $table->enum('pec_status', ['active', 'inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rec');
    }
};
