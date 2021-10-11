<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    private static $projects = [
        [
            'title' => 'Calculator',
            'code' => 'cal',
            'course' => 'Algorithm Programming'
        ],
        [
            'title' => 'Accounting',
            'code' => 'acc',
            'course' => 'Web Programming'
        ],
        [
            'title' => 'Student Report',
            'code' => 'stu',
            'course' => 'Web Programming'
        ],
        [
            'title' => 'POS Resto',
            'code' => 'pos',
            'course' => 'Web Development'
        ],
        [
            'title' => 'Online Store',
            'code' => 'onl',
            'course' => 'Web Development Adv'
        ],
        [
            'title' => 'Pet Shop',
            'code' => 'pet',
            'course' => 'Mobile App'
        ]
    ];

    public static function getAllProjectData()
    {
        // return self::$projects;
        return collect(self::$projects);
    }

    public static function getDataByCode($code)
    {
        // $allProjects = self::$projects;
        // foreach($allProjects as $pro){
        //     if ($pro['code']===$code){
        //         return $pro;
        //     }
        // }
        $allProjects = static::getAllProjectData();
        return $allProjects->firstWhere('code', $code);
    }
}
