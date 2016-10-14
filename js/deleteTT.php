<? php

function deleteJson() {
    //log the call
    $class = $_POST['clas'];
    $str = file_get_contents('../js/timeTables.json');
    $json = json_decode($str); // decode the JSON into an associative array

    unset($json[$class]);


    //save the file
    file_put_contents('../js/timeTables.json', json_encode($json));

}
deleteJson(); ?>