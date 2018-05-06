<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Survey;

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Business_Surveys as Business_Surveys;

/**
 * Description of SurveyController
 *
 * @author Ajith E R
 */
class SurveyController extends BaseController {

    /**
     * @author     Ajith E R
     * @date       May 03, 2018
     * @brief      Add New Survey Form.
     * @param      $data  Data array.
     * @return     response
     */
    public function saveSurvey() {
        $user = Auth::user();
        $survey['user_id'] = $user->user_id;
        $survey['name'] = $this->request->input('survey_name');
        $survey['survey_form'] = $this->request->input('survey_form');
        $survey['created_at'] = date("Y-m-d");
        $survey['updated_at'] = date("Y-m-d");
        $businessSurveyModel = new Business_Surveys();
        $surveyId = $businessSurveyModel->addSurvey($survey);
        if ($surveyId) {
            $response['success'] = true;
            $response['survey_id'] = $surveyId;
            $response['message'] = 'Success Message Here';
            return $response;
        }
        $response['success'] = true;
        $response['message'] = 'Something Went Wrong';
        return $response;
    }

    /**
     * @author     Ajith E R
     * @date       May 04, 2018
     * @brief      Delete Survey Form.
     * @param      $data  Data array.
     * @return     response
     */
    public function deleteSurvey() {
        $id = $this->request->input('contract_id');
        $businessSurveyModel = new Business_Surveys();
        $businessSurveyModel->deleteSurvey($id);

        $response['success'] = true;
        $response['message'] = 'Deleted';
        return $response;
    }

    /**
     * @author     Ajith E R
     * @date       May 04, 2018
     * @brief      Get Survey Form.
     * @param      $data  Data array.
     * @return     response
     */
    public function getContractDetails() {
        $id = $this->request->input('contract_id');

        $businessSurveyModel = new Business_Surveys();
        $contract = $businessSurveyModel->getContractDetail($id);

        $response['success'] = true;
        $response['message'] = 'Contract Details';
        $response['contract_details'] = $contract;
        return $response;
    }

    public function editSurvey() {
        $user = Auth::user();
        $survey['user_id'] = $user->user_id;
        $survey['id'] = $this->request->input('contract_id');
        $survey['name'] = $this->request->input('survey_name');
        $survey['survey_form'] = $this->request->input('survey_form');
        $survey['updated_at'] = date("Y-m-d");

        $businessSurveyModel = new Business_Surveys();
        $businessSurveyModel->updateContractDetail($survey);

        $response['success'] = true;
        $response['message'] = '';
        return $response;
    }

}