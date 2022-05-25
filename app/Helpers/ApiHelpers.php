<?php


//start method handle error and success message and data in controllers api

use Illuminate\Support\Facades\Config;

if(!function_exists('returnMessageError')){


    function returnMessageError($message,$code){


        return response()->json([

            "status" => false,
            "message" => $message,
            "code" => $code

        ]);
    }
}


if(!function_exists('returnMessageSuccess')){


    function returnMessageSuccess($message,$code){


        return response()->json([

            "status" => true,
            "message" => $message,
            "code" => $code

        ]);
    }

}


if(!function_exists('returnDataSuccess')){


    function returnDataSuccess($message,$code,$key,$value){


        return response()->json([

            "status" => true,
            "message" => $message,
            "code" => $code,
            $key => $value

        ]);
    }


}




