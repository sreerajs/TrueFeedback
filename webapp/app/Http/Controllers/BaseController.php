<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Description of BaseController
 *
 * @author Ajith E R
 */
class BaseController extends Controller {

    public $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

}
