<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $data = [
    '1' => ['id'=>'1', 'first'=>'toni', 'last'=>'he'],
    '2' => ['id'=>'2', 'first'=>'carlo', 'last'=>'mendoza'],
    '3' => ['id'=>'3', 'first'=>'remy', 'last'=>'truong'],
    '4' => ['id'=>'4', 'first'=>'aaron', 'last'=>'vong']
    ];

    public function find($id)
    {
        return $this->data[$id];
    }

    public function findAll()
    {
        return $this->data;
    }
}