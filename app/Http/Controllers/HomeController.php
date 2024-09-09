<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class HomeController extends Controller {

    private array $data = array();

    public function index() {

        session_start();

        if ( isset($_SESSION["userId"]) ) {

            $this->data["name"] = $_SESSION["name"];

            // $products = Projects::select()->where();

            $this->data["projects"] = array();
            
            return view("home", $this->data);

        } else {

            return redirect("/login");

        };

    }

};
