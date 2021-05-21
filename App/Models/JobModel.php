<?php

namespace App\Models;

Class Jobmodel extends Model
{
    public function getJob()
        {
            return [
                'jobs' => [
                    [
                        'startDate' => '06/2018',
                        'endDate' => 'Present',
                        'startDate2' => '',
                        'endDate2' => '',
                        'employer' => 'Webhelp',
                        'location' => 'Groningen',
                        'jobTitle' => 'Customer Contact Specialist',
                        'jobDescription' => 'Beantwoorden van klantvragen op 
                        het project NS via de telefoon, chat en sociale media.'
                    ],
                    [
                        'startDate' => '05/2016',
                        'endDate' => '04/2018',
                        'startDate2' => '',
                        'endDate2' => '',
                        'employer' => 'PostNL',
                        'location' => 'Hoogkerk',
                        'jobTitle' => 'Postbezorger',
                        'jobDescription' => 'Ik haalde de post op bij een depot in Hoogkerk 
                        n bezorgde deze in meerdere wijken in Hoogkerk. Tevens droeg ik zorg voor het correct afhandelen van retourpost.'
                    ],
                    [
                        'startDate' => '01/2011',
                        'endDate' => '07/2011',
                        'startDate2' => '',
                        'endDate2' => '',
                        'employer' => 'Futurumshop.nl',
                        'location' => 'Apeldoorn',
                        'jobTitle' => 'Medewerker klantenservice',
                        'jobDescription' => 'In deze functie beantwoordde ik klantvragen per e-mail en aan de telefoon. 
                        Vragen varieerden van eenvoudige leverings- tot complexe productvragen.'
                    ],
                    [
                        'startDate' => '07/2010',
                        'endDate' => '',
                        'startDate2' => '',
                        'endDate2' => '',
                        'employer' => 'Apenheul',
                        'location' => 'Apeldoorn',
                        'jobTitle' => 'Acteur in ‘Jungleshow’',
                        'jobDescription' => 'Tweemaal daags voerde ik een theatervoorstelling op in het park en tussentijds 
                        vermaakte ik de gasten in het park in mijn rol.'
                    ],
                    [
                        // 'period' => '2007 - 2010 &#x26</br> 04/2014 - 10/2014',
                        'startDate' => '2007',
                        'endDate' => '2010',
                        'startDate2' => '04/2014',
                        'endDate2' => '10/2014',
                        'employer' => 'Koningin Juliana Toren',
                        'location' => 'Apeldoorn',
                        'jobTitle' => 'Algemeen medewerker',
                        'jobDescription' => 'Ik bediende attracties in het park en droeg zorg voor de veiligheid van bezoekers. 
                        Na sluitingstijd hielp ik het park schoon te maken.'
                    ],
                ]
                    
                ];   
        }

}