<?php
/**
 * User: igorrinkovec
 * Date: 15/02/16
 * Time: 14:29
 */

namespace App\Http\Controllers;


class PagesController extends Controller {

    /**
     * @return mixed
     */
    public function homepage()
    {
        return view('info.frontpage');
    }

}