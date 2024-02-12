<?php

use App\Models\setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=> '_site_name',
            'label'=> 'Judul Situs',
            'value'=> 'AL ISTIQOMAH',
            'type'=> 'Text',
        ]);

        setting::create([
            'key'=> '_location',
            'label'=> 'Alamat Kantor',
            'value'=> 'Bogor, Griya Alam Sentosa Blok F',
            'type'=> 'Text',
        ]);


        setting::create([
            'key'=> '_youtube',
            'label'=> 'Youtube',
            'value'=> 'Bogor, Griya Alam Sentosa Blok F',
            'type'=> 'Text',
        ]);

        setting::create([
            'key'=> '_Desainby',
            'label'=> 'Desain By',
            'value'=> 'HazelKmailSS',
            'type'=> 'Text',
        ]);

        setting::create([
            'key'=> '_site_description',
            'label'=> 'Site Description',
            'value'=> 'Web Al-Istiqomah',
            'type'=> 'Text',
        ]);

        setting::create([
            'key'=> '_Telepon',
            'label'=> 'Telepon',
            'value'=> '0813-8299-7128',
            'type'=> 'Text',
        ]);

        setting::create([
            'key'=> '_Email',
            'label'=> 'Email',
            'value'=> 'alistiqomaho12@gmail.com',
            'type'=> 'Text',
        ]);
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
