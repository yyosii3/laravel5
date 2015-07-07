<?php

namespace App\Models; // การกำหนดที่อยู่ของ Model

use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel

class Profile extends Model {

    protected $table = 'profile'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้

}
