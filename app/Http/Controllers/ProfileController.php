<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donal Trump";

        $age = "75";

        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age,
        ];

        //  Cookie

        $name = "access_token";

        $value = "123-XYZ";

        $expTime = 60;

        $path = "/";

        $domain = $_SERVER["SERVER_NAME"];

        $secure = false;

        $httpOnly = true;

        $response = response()->json(["status:" => "Success", "data" => $data], 200);

        // Setting up Cookie
        $response->cookie($name, $value, $expTime, $path, $domain, $secure, $httpOnly);

        return $response;

    }

}
