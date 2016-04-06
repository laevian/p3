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

    public function getUsers($numUsers = 3) {

    }

    /**
     * Responds to requests to GET /books/show/{id}
     */
    public function getShow($title = null) {
        return view("books.show")->with('title', $title);
        #return 'Show book: '.$title;
    }

    /**
     * Responds to requests to GET /books/create
     */
    public function getCreate() {
      $view = '<form method="POST" action="/book/create">';
      $view .= csrf_field();
      $view .= 'Book title: <input type="text" name="title">';
      $view .= '<input type="submit">';
      $view .= '</form>';

      return $view;
    }
}
