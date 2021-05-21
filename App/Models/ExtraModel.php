<?php

namespace App\Models;

Class ExtraModel extends Model

{
    public function getExtra()
    {
        return [
            'extracurricular' => [
                [
                    'startDate' => '09/2019',
                    'endDate' => '09/2020',
                    'organization' => 'Studievereniging Commotie',
                    'location' => 'Groningen',
                    'functionTitle' => 'Studiecommissie',
                    'functionDescription' => 'Ik organiseerde lezingen gerelateerd aan communicatie. Ook was ik de penningmeester
                     van de studiecommissie.',
                ],
                [
                    'startDate' => '03/2016',
                    'endDate' => ' 09/2017',
                    'organization' => 'Humanitas',
                    'location' => 'Groningen',
                    'functionTitle' => 'Vrijwilliger Voorleesproject',
                    'functionDescription' => 'Een keer per week las ik samen met een jongen van 7. Ik las voor en ondersteunde hem in het ontwikkelen van zijn leesvaardigheid. 
                    Later hielp ik twee kinderen uit groep 7 en 8 met begrijpend lezen.',
                ],
                [
                    'startDate' => '11/2009',
                    'endDate' => '03/2010',
                    'organization' => 'Basisschool de Mheen',
                    'location' => 'Apeldoorn',
                    'functionTitle' => 'Vrijwilliger Engels',
                    'functionDescription' => 'Ik gaf extra Engelse les aan een kleine groep kinderen die meer uitdaging nodig hadden.',
                ],
                [
                    'startDate' => '10/2008',
                    'endDate' => '',
                    'organization' => 'Oxfam',
                    'location' => 'Londen',
                    'functionTitle' => 'Vrijwilliger in Oxfam winkel',
                    'functionDescription' => 'In deze functie selecteerde ik gedoneerde producten die geschikt waren voor verkoop in een tweedehandswinkel.
                    De opbrengsten gingen naar Oxfam.',
                ],

            ]
        ];
    }

}