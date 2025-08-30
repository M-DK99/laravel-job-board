<?php

namespace App\Models;
class Job 
{
    public static function all() {
        return [
            ['title' => 'Job 1', 'salary' => '10000'],
            ['title' => 'Job 2', 'salary' => '20000'],
            ['title' => 'Job 3', 'salary' => '3000'],
        ];
    }
}
