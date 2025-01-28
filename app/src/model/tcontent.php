<?php
require_once(__DIR__ . '/../helper/dbconn.php');


function getAllContent() {
    global $conn;

    $sql = "SELECT * FROM contents WHERE slug = 'about-me'";
    $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //     }
    // } else {
    //     echo "0 results";
    // }

    $conn->close(); 
    return $result;
}
function getContentBySlug($slug) {
    global $conn;

    $sql = "SELECT * FROM contents WHERE slug = '$slug'";
    $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //     }
    // } else {
    //     echo "0 results";
    // }

    $conn->close(); 
    return $result;
}
?>