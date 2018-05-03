<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Business_Surveys as Business_Surveys;

class myContractController extends BaseController {

    public function contract() {
        $user = Auth::user();

        $returnData['user'] = $user;
        $returnData['uri'] = 'My Contract';
        $returnData['contractList'] = self::getMyContractList($user->user_id); 
        $returnData['created_at'] = date("Y-m-d H:i:s");
        $returnData['updated_at'] = date("Y-m-d H:i:s");
        return view('mycontract', ['dataArray' => $returnData]);
    }

    public static function getMyContractList($userId) {
        $businessSurveyModel = new Business_Surveys();
        return $businessSurveyModel->getSurvey($userId);
    }

}
