<?php
require_once(__DIR__ . '/../helper/dbconn.php');
require_once(__DIR__ . "/../helper/slug.php");



function getAllContent() {
    global $conn;

    $sql = "SELECT * FROM contents ORDER BY id DESC";
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
function getContentById($id) {
    global $conn;

    $sql = "SELECT * FROM contents WHERE id = $id";
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
function updateContent($id, $title, $body) {
    global $conn;

    $slug = createSlug($title);
    $sql = "UPDATE contents SET title = ?, body = ?, slug = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
     
    $stmt->bind_param("sssi", $title, $body, $slug, $id);
    $stmt->execute();
    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
        return false;
    }
    $stmt->close();
    $conn->close();
    return true;
}
function insertContent($title, $body) {
    global $conn;
    $slug = createSlug($title);
    $sql = "INSERT INTO contents (title, body, slug) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $title, $body, $slug);
    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
        return false;
    }
    $stmt->close();
    $conn->close();
    return true;
}
function deleteContent($id) {
    global $conn;

    $sql = "DELETE FROM contents WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
        return false;
    }
    $stmt->close();
    $conn->close();
    return true;
}

