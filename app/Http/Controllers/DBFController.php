<?php

namespace DBF\Http\Controllers;

use DBF\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DBFController extends Controller {

    /**
    * Responds to requests to GET /books
    */
    public function getIndex() {
          return view("DBF.index");
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
        return view("DBF.usergen");
    }

    public function getUsers(Request $request) {

      $this->validate($request, [
        'numUsers' => 'required|numeric|min:1|max:10',
      ]);

      $userString = '';

      $numOfPars = $request->input('numUsers');
      for($i = 0; $i < $numOfPars; $i++)
      {
        $userString .= '<span class="label">Name</span> ';
        $userString .= \Faker\Name::firstName();
        $userString .= ' ';
        $userString .= \Faker\Name::lastName();
        $userString .= '<br> <span class="label">Phone Number</span> ';
        $userString .= \Faker\PhoneNumber::phoneNumber();
        $userString .= '<br> <span class="label">Company Name</span> ';
        $userString .= \Faker\Company::name();
        $userString .= '<br><br>';
      }

      return view("DBF.usergen")->with('users', $userString);


    }
}
