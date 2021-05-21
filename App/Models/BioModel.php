<?php 

namespace App\Models;

class BioModel extends Model
{
    public function getBio()
    {
        return [
            'ivar' => [
                [
                    'value' => 'Ivar Polman',
                    'label' => 'Name'
                ],
                [
                    'value' => '17/03/1992',
                    'label' => 'Date of birth'
                ],
                [
                    'value' => '<img src=public/img/netherlands.png />',
                    'label' => 'Nationality'
                ],
                [
                    'value' => 'Apeldoorn',
                    'label' => 'Place of birth'
                ],
                [
                    'value' => 'Tweede Willemstraat 16, Groningen',
                    'label' => 'Address'
                ],    
            ]
        ];
    }
}