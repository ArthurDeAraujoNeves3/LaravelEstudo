<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class LoginController extends Controller {

    private array $data = array();
    
    public function index() {

        return view("login", $this->data);

    }

    public function verifyLogin() {

        session_start();

        $email = $_REQUEST["email"] ?? "";
        $password = $_REQUEST["password"] ?? "";

        // dd([$email, $password]);

        $users = Users::all()->toArray();

        // dd($users);

        foreach ($users as $user) {

            // dd(trim($user["password"]), trim($email), trim($password));
            if ( trim($user["email"]) == trim($email) && trim($user["password"]) == trim($password) ) {

                $_SESSION["userId"] = $user["id"];
                $_SESSION["name"] = $user["name"];
                return redirect("/");
                break;

            } else {

                return redirect("/login");
                break;

            };

        };

    }

};
