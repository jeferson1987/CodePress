<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 30/01/2016
 * Time: 19:47
 */

namespace CodePress\CodeCategory\Controllers;


class AdminCategoriesController extends Controller
{
    public function index()
    {
        return view('codecategory::index');
    }

}