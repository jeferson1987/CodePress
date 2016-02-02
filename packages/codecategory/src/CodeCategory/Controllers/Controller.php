<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 30/01/2016
 * Time: 19:48
 */

namespace CodePress\CodeCategory\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


}