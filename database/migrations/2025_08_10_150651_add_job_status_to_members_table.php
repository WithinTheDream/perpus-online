<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::table('members', function (Blueprint $table) {
        $table->enum('job_status', ['masyarakat', 'siswa', 'guru'])->default('masyarakat')->after('address'); 
        // 'address' diganti dengan kolom terakhir yang ada sebelum status
    });
}

public function down()
{
}
};
