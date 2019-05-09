<?php

class RestResponse {
    public $status = false;
    public $data;
    public $error;
    
    public static function createSuccessResponse($data) {
        $restResponse = New RestResponse();
        $restResponse->status = true;
        $restResponse->data = $data;
        return json_encode($restResponse);
    }

    public static function createErrorResponse($error) {
        $restResponse = New RestResponse();
        $restResponse->status = false;
        $restResponse->error = $error;
        return json_encode($restResponse);
    }
}

?>