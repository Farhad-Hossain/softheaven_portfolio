<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\GeneralSetting;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public $tableName;

    public function __construct(){
        $this->tableName = (new GeneralSetting)->getTable();
    }
    public function up(): void
    {

        Schema::table('general_settings', function (Blueprint $table) {
            if ( !Schema::hasColumn( $this->tableName, 'year_of_experience') ){
                $table->smallInteger('year_of_experience');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('general_settings', function (Blueprint $table) {
            if ( Schema::hasColumn( $this->tableName, 'year_of_experience') ){
                $table->dropColumn('year_of_experience');
            }
        });
    }
};
