<?php
class RestApi
{
    private static $base_url = "http://examapprest.herokuapp.com/api";

    public static function sendGetRequest($url){
        $response = file_get_contents($url);
        return json_decode($response, true);
    }


    public static function getFromYousMain(){

        $ids = [
                "L9hyI-UYZ2E",
                "yq-48XFGuso",
                "xklD_AZqXJA",
                "u1-2OjkpR8Y"
        ];

        $response = RestApi::getYoutubeVideoList($ids);
        return $response;
    }

    public static function getFromYous(){

        $ids = [
                "L9hyI-UYZ2E",
                "P6xFPPBCYYE",
                "xklD_AZqXJA",
                "u1-2OjkpR8Y",
                "yq-48XFGuso",
                "WigdL7IFlbE",
                "aa7KDTkNT54",
                "v7vIXGdnZdU",
                "9jauzNItZg4",
                "rzVM99jOAr4"
        ];

        $response = RestApi::getYoutubeVideoList($ids);
        return $response;
    }

    public static function getYoutubeVideoList($ids){
        $idsStr = "";
        $idsSize = sizeof($ids);
        for($i=0;$i<$idsSize;$i++){
            $idsStr.=$ids[$i];
            if($i<$idsSize-1){
                $idsStr.=",";
            }
        }

        $url = "https://www.googleapis.com/youtube/v3/videos?key=AIzaSyBtTOG57nn_5uLg9odfByQXl5O3xjiQ8xg&part=snippet&id=".$idsStr;
        $response = RestApi::sendGetRequest($url);

        return $response['items'];
    }

}