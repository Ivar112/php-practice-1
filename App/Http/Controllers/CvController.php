<?php 

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Models\BioModel;
use App\Models\EduModel;
use App\Models\ExtraModel;
use App\Models\Jobmodel;
use App\Models\SkillsModel;

class CvController {


    public function index()
    {
        $bio = new BioModel();
        $edu = new EduModel();
        $job = new Jobmodel();
        $extra = new ExtraModel();
        $skills = new SkillsModel();

    
        return View::render('cv.view', [
            'bio'   => $bio->getBio(),
            'edu'   => $edu->getEdu(),
            'job'   => $job->getJob(),
            'extra' => $extra->getExtra(),
            'skills' => $skills->getSkills()
        ]);
    }


};

