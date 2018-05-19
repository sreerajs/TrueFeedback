<?php

/**
* Survey/SurveyDeploy
* TrueFeedback - Handle Deploying Survey
* PHP Laravel Version 5.5
*
* @author Stanly Johnson (stanly.johnson@servntire.com)
*
* (c) Servntire Global (servntire.com)
*/

namespace App\Http\Controllers\Survey;

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Business_Surveys as Business_Surveys;
use Illuminate\Notifications\Notifiable;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PragmaRX\Countries\Package\Countries;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * Description of Deploy
 *
 * @author Stanly Johnson
 */
class SurveyDeploy extends BaseController {


    /**
    * Function to Deploy survey to Ethereum Network
    * @author Stanly Johnson (stanly.johnson@servntire.com)
    *
    * @param  Request | $request
    * @return array | $dataArray
    * @return view | deployed_contracts
    */

    public function completeDeploySurvey(Request $request){

              $user = Auth::user();
              $survey['user_id'] = $user->user_id;
              $survey['id'] = $request->get('contract_id');
              $survey['is_deployed'] = 1;

              /*
                Deployment Code goes here
              */

              //if deployment is successful -> mark as deployed in DB
              //set deployed field to true in table
              //$is_deployed = 1;

              $businessSurveyModel = new Business_Surveys();
              $businessSurveyModel->updateContractDetail($survey);


              $returnData['user'] = $user;
              $returnData['uri'] = 'Deployed Surveys';

              //find deployed surveys from the DB
              $returnData['contractList'] = DB::table('business_surveys')
              ->where('user_id', $user->user_id)
              ->where('is_deleted', 0)
              ->where('is_deployed', 1)
              ->orderBy('updated_at', 'DESC')
              ->paginate(10);

              $returnData['created_at'] = date("Y-m-d H:i:s");
              $returnData['updated_at'] = date("Y-m-d H:i:s");
              return view('deployed_contracts', ['dataArray' => $returnData]);
    }


}
