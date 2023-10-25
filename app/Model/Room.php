<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Room extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'room';
    protected $fillable = [
        'id',
        'name',
        'S',
        'slots',
        'slot_prepod',
        'type_room_id',
        'type_sub',
        'img'
    ];
    public function photo($img)
    {
        $photo = Room . phptime() . $img['name'];
        $this->photo = $photo;
        move_uploaded_file($img['tmp_name'], __DIR__ . '/../../public/assets/img/' . $photo);
    }

}