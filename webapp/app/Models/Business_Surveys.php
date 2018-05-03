<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Description of Bussiness_Surveys
 *
 * @author ajith
 */
class Business_Surveys extends Eloquent {

    public $timestamps = false;
    protected $table = 'business_surveys';
    protected $fillable = [
        'name',
        'user_id',
        'survey_form'
    ];

    public function __construct() {
        $this->tableObject = $this->getConnectionResolver()->connection()->table($this->table);
    }

    /**
     * @author     Ajith E R
     * @date       May 03, 2018
     * @brief      Add New Survey Form.
     * @param      $data  Data array.
     * @return     Insert operation output
     */
    public function addSurvey($data) {
        return $this->tableObject->insertGetId($data);
    }

    /**
     * @author     Ajith E R
     * @date       May 03, 2018
     * @brief      Add New Survey Form.
     * @param      $data  Data array.
     * @return     Insert operation output
     */
    public function getSurvey($userId) {
        return $this->tableObject->
                where('user_id',$userId)->
                where('is_deleted', 0)->
                paginate(10);
    }

}
