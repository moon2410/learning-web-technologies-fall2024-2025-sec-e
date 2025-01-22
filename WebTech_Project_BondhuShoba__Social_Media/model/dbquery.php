<?php
require_once 'dbcon.php';
function signup($name,$email,$password, $gender, $dob)
{
    $conn = dbcon();
    $sql = "INSERT INTO user_info (name, email, password, gender, dob) VALUES ('$name','$email', '$password', '$gender', '$dob')";
   $result= $conn->query($sql);
   return $result;
}

function login($email,$password)
{
    $conn = dbcon();
    $sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
    $result= $conn->query($sql);
    if($result->num_rows > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function get_user_info()
{
    $conn = dbcon();
    $sql = "SELECT * FROM user_info";
    $result= $conn->query($sql);
    return $result;
}

function get_user_info_by_id($id)
{
    $conn = dbcon();
    $sql = "SELECT * FROM user_info WHERE id = $id";
    $result= $conn->query($sql);
    return $result;
}

function search_user($src)
{
    $conn = dbcon();
    $sql = "SELECT * FROM user_info WHERE name LIKE '$src'";
    $result= $conn->query($sql);
    return $result;
}
function add_friend($userId,$friendId)
{
    $conn = dbcon();
    $sql1="SELECT * FROM req_list WHERE u_id = '$userId' AND r_id = '$friendId'";
    $result1= $conn->query($sql1);
    if($result1->num_rows > 0)
    {
        $sql="Delete from req_list WHERE u_id = '$userId' AND r_id = '$friendId'";
        $result= $conn->query($sql);
        $_SESSION['req_status'] = "Req deleted";
        return $result;
    }
    else
    {
        $sql = "INSERT INTO req_list (u_id, r_id) VALUES ('$userId','$friendId')";
        $result= $conn->query($sql);
        $_SESSION['req_status'] = "Req sent";
        return $result;
    }
    // $sql = "INSERT INTO req_list (u_id, r_id) VALUES ('$userId','$friendId')";
    // $result= $conn->query($sql);
    // return $result;
}
function getUserid($email)
{
    $conn = dbcon();
    $sql = "SELECT id FROM user_info WHERE email = '$email'";
    $result= $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['id'];
}
function getUserName($userId)
{
    $conn = dbcon();
    $sql = "SELECT name FROM user_info WHERE id = '$userId'";
    $result= $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['name'];
}
function checkFriend($userId,$friendId)
{
    $conn = dbcon();
    $sql = "SELECT * FROM req_list WHERE u_id = '$userId' AND r_id = '$friendId'";
    $result= $conn->query($sql);
    if($result->num_rows > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function getAllReqUser()
{
    $conn = dbcon();
    $sql = "SELECT * FROM req_list";
    $result= $conn->query($sql);
    return $result;
}
function acceptFriend($userId,$friendId)
{
    $conn = dbcon();
    $sql = "INSERT INTO friend_list (u_id, f_id) VALUES ('$userId','$friendId')";
    $result= $conn->query($sql);
    $sql = "INSERT INTO friend_list (u_id, f_id) VALUES ('$friendId','$userId')";
    $result= $conn->query($sql);
    $sql = "Delete from req_list WHERE u_id = '$friendId' AND r_id = '$userId'";
    $result= $conn->query($sql);
    return $result;
}

function check_friendList($userId,$friendId)
{
    $conn = dbcon();
    $sql = "SELECT * FROM friend_list WHERE u_id = '$userId' AND f_id = '$friendId'";
    $result= $conn->query($sql);
    if($result->num_rows > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function get_FriendList($userId)
{
    $conn = dbcon();
    $sql = "SELECT * FROM friend_list WHERE u_id = '$userId'";
    $result= $conn->query($sql);
    return $result;
}
function unfriend($userId,$friendId)
{
    $conn = dbcon();
    $sql = "Delete from friend_list WHERE u_id = '$userId' AND f_id = '$friendId'";
    $result= $conn->query($sql);
    $sql = "Delete from friend_list WHERE u_id = '$friendId' AND f_id = '$userId'";
    $result= $conn->query($sql);
    return $result;
}
function reject_friend($userId,$friendId)
{
    $conn = dbcon();
    $sql = "Delete from req_list WHERE u_id = '$userId' AND r_id = '$friendId' OR u_id = '$friendId' AND r_id = '$userId'";
    $result= $conn->query($sql);
    return $result;
}

function block_friend($userId,$friendId)
{
    $conn = dbcon();
    $sql = "Delete from friend_list WHERE u_id = '$userId' AND f_id = '$friendId'";
    $result= $conn->query($sql);
    $sql = "Delete from friend_list WHERE u_id = '$friendId' AND f_id = '$userId'";
    $result= $conn->query($sql);
    $sql = "Delete from req_list WHERE u_id = '$userId' AND r_id = '$friendId' OR u_id = '$friendId' AND r_id = '$userId'";
    $result= $conn->query($sql);
    $sql = "INSERT INTO block_list (u_id, f_id) VALUES ('$userId','$friendId')";
    $result= $conn->query($sql);
    return $result;
}
function get_blockList($userId)
{
    $conn = dbcon();
    $sql = "SELECT * FROM block_list WHERE u_id = '$userId'";
    $result= $conn->query($sql);
    return $result;
}
function unblock_friend($userId,$friendId)
{
    $conn = dbcon();
    $sql = "Delete from block_list WHERE u_id = '$userId' AND f_id = '$friendId'";
    $result= $conn->query($sql);
    return $result;
}
function check_blockList($userId,$friendId)
{
    $conn = dbcon();
    $sql = "SELECT * FROM block_list WHERE u_id = '$userId' AND f_id = '$friendId' OR u_id = '$friendId' AND f_id = '$userId'";
    $result= $conn->query($sql);
    if($result->num_rows > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

?>