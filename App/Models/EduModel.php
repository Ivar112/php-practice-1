<?php

namespace App\Models;

class EduModel extends Model 
{
    public function getEdu()
    {
        return [
            'education' => [
                [
                    'startDate' => '2017',
                    'endDate' => '2021',
                    'name' => 'Communicatie- en Informatiewetenschappen',
                    'diploma' => 'Bachelordiploma',
                    'time' => 'voltijd',
                    'institution' => 'Rijksuniversiteit Groningen',
                    'subjects' => ''
                ],
                [
                    'startDate' => '2014',
                    'endDate' => '2016',
                    'name' => 'International Communication',
                    'diploma' => '',
                    'time' => 'voltijd',
                    'institution' => 'Hanze Hogeschool Groningen',
                    'subjects' => ''
                ],
                [
                    'startDate' => '2011',
                    'endDate' => '2014',
                    'name' => 'Europese Talen & Culturen Duits',
                    'diploma' => 'propeduese',
                    'time' => 'voltijd',
                    'institution' => 'Rijksuniversiteit Groningen',
                    'subjects' => ''
                ],
                [
                    'startDate' => '2008',
                    'endDate' => '2010',
                    'name' => 'International Baccalaureate Engels',
                    'diploma' => 'diploma',
                    'time' => '',
                    'institution' => 'Koninklijke Scholengemeenschap Apeldoorn',
                    'subjects' => ''
                ],
                [
                    'startDate' => '2004',
                    'endDate' => '2010',
                    'name' => 'Engelstalig vwo',
                    'diploma' => 'diploma',
                    'time' => '',
                    'institution' => 'Koninklijke Scholengemeenschap Apeldoorn',
                    'subjects' => 'vakkenpakket: Aardrijkskunde, Duits, Economie, Engels, Geschiedenis, Nederlands, Spaans, Wiskunde A',
                ],

            ]
        ];
    }
}