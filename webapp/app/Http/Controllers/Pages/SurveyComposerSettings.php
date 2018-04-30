<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Pages;

use Illuminate\Support\Facades\Auth;

/**
 * Description of SurveyComposerSettings
 *
 * @author Ajith E R
 */
class SurveyComposerSettings {

    /**
     * Survey Composer View for Business user view.
     * @author Ajith E R (ajith@servntire.com)
     *
     * @param  none
     * @return array | $dataArray
     * @return view | survey_composer
     */
    public static function showComposer() {
        $user = Auth::user();
        $uri = "Survey Composer";
        
        $returnData['user'] = $user;
        $returnData['uri'] = $uri;
        return view('composer/survey_composer', ['dataArray' => $returnData]);
    }

}
