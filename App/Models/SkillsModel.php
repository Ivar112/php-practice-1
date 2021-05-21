<?php 

namespace App\Models;

class SkillsModel extends Model
{
    public function getSkills()
    {
        return [
            'skills' => [
                'languages' =>[
                                [
                                    'value' => '<img src=public/img/netherlands.png /> <img src=public/img/england.png />', 
                                    'label' => 'Fluent'
                                ],
                                [
                                    'value' => '<img src=public/img/germany.png />',
                                    'label' => 'Very good'
                                ],
                                [
                                    'value' => '<img src=public/img/spain.png />',
                                    'label' => 'Basic'
                                ],
                ]
            ]
        ];
    }
}