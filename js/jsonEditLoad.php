<?php
//This file handles the saving of the json file
function getJson() {
        //log the call
        $class  = $_POST['clas'];
        //json_decode(stripslashes($_POST['data']));
        $timeTableData = json_decode(stripslashes($_POST['timeTableData']));
        $str = file_get_contents('../js/timeTables.json');
        $json = json_decode($str); // decode the JSON into an associative array
        unset($str);
       if($json == null)
       {
             $result = array($class => $timeTableData);
       }
       else{
        $data = array( $class => $timeTableData);
   
       $result = array($json ,$data);
       }
        

        //save the file
        file_put_contents('../js/timeTables.json', json_encode($result));
        unset($data);
}
getJson();
?>