<?php

namespace DBF\Http\Controllers;

use DBF\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DBFController extends Controller {

    /**
    * Responds to requests to GET /books
    */
    public function getIndex() {
          //return view("DBF.index");
          echo ("hi!");
    }

    public function getLorem() {

      return view("DBF.lorem");

    }

    public function getParagraphs(Request $request) {

        $this->validate($request, [
          'numPars' => 'required|numeric|min:1|max:10',
        ]);

        $numOfPars = $request->input('numPars');
        $paragraphArray = \Faker\Lorem::paragraphs($numOfPars);
        $paragraphString = implode('<br><br>', $paragraphArray);
        //echo $paragraphString;

        return view("DBF.lorem")->with('paragraphs', $paragraphString);

    }

    public function getUserGen() {
        //return view("DBF.usergen");
    }

    //public function getUsers($numUsers = 3) {

    //}
}
