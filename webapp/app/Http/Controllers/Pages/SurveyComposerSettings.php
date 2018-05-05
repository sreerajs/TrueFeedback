<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Pages;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;
use App\Models\Business_Surveys as Business_Surveys;

/**
 * Description of SurveyComposerSettings
 *
 * @author Ajith E R
 */
class SurveyComposerSettings extends BaseController {

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

    /**
     * Survey Composer Edit View for Business user.
     * @author Ajith E R (ajith@servntire.com)
     *
     * @param  none
     * @return array | $dataArray
     * @return view | survey_composer
     */
    public function showEditComposer() {
        $user = Auth::user();
        $uri = "Edit Survey";
        $returnData['contract_id'] = $this->request->input('edit_contract');
        $businessSurveyModel = new Business_Surveys();
        $returnData['contract_details'] = $businessSurveyModel->getContractDetail($returnData['contract_id']);
        $returnData['user'] = $user;
        $returnData['uri'] = $uri;        
        return view('composer/composer', ['dataArray' => $returnData]);
    }

}
