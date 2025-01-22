<?php
session_start();
require_once '../model/dbquery.php';
   require_once '../model/dbquery.php';
    if(isset($_POST['srcSubmit']))
    {
        $src = $_POST['search'];
       if($src == "")
       {
           header('location: ../view/userfeed.php');
       }
       else
       {
            $result = search_user($src);
            
            if($result->num_rows > 0)
            {
                header('Location: ../view/searchusers.php?search='.$src);
            }
            else
            {
                header('location: ../view/userfeed.php?msg=No user found');
            }
       }
    }
    if(isset($_POST['addFriend']))
    {
        $src = $_POST['src'];
        $userId=$_POST['user_id'];
        $friendId=$_POST['friend_id'];
        $result = add_friend($userId,$friendId);
        if($result)
        {
            header('location: ../view/searchusers.php?search='.$src);
        }
        else
        {
            $_SESSION['req_status'] = "Failed";
            header('location: ../view/searchusers.php?search='.$src);
        }
    }
    if(isset($_POST['accept']))
    {
        $userId=$_POST['userId'];
        $friendId=$_POST['friendId'];
        $action=$_POST['action'];
            $result = acceptFriend($userId,$friendId);
            if($result)
            {
                header('location: ../view/friendrequests.php');
            }
            else
            {
                $_SESSION['req_status'] = "Failed";
                header('location: ../view/friendrequests.php');
            }
      
     
    }

    if(isset($_POST['unfriend']))
    {
            
            $userId=$_SESSION['user_id'];
            $friendId=$_POST['friendId'];
            $result = unfriend($userId,$friendId);
            if($result)
            {
                header('location: ../view/friendlist.php');
            }
            else
            {
                $_SESSION['req_status'] = "Failed";
                header('location: ../view/friendlist.php');
            }
    }

    if(isset($_POST['SRCunfriend']))
    {
        $src = $_POST['src'];
        $userId=$_SESSION['user_id'];
        $friendId=$_POST['friendId'];
        $result = unfriend($userId,$friendId);
        if($result)
        {
            header('location: ../view/searchusers.php?search='.$src);
        }
        else
        {
            $_SESSION['req_status'] = "Failed";
            header('location: ../view/searchusers.php?search='.$src);
        }
    }

   
    if($_POST['action'] == "Reject")
    {
        $userId=$_POST['userId'];
        $friendId=$_POST['friendId'];
        $result = reject_friend($userId,$friendId);
        if($result)
        {
            header('location: ../view/friendrequests.php');
        }
        else
        {
           // $_SESSION['req_status'] = "Failed";
            header('location: ../view/friendrequests.php');
        }
    }
    if(isset($_POST['block']))
    {
        $userId=$_SESSION['user_id'];
        $friendId=$_POST['friendId'];
        $result = block_friend($userId,$friendId);
        if($result)
        {
            header('location: ../view/friendlist.php');
        }
        else
        {
            $_SESSION['req_status'] = "Failed";
            header('location: ../view/friendlist.php');
        }
    }
    
    if(isset($_POST['unblock']))
    {
        $userId=$_POST['user_id'];
        $friendId=$_POST['block_id'];
        $result = unblock_friend($userId,$friendId);
        if($result)
        {
            header('location: ../view/blocklist.php');
        }
        else
        {
            $_SESSION['req_status'] = "Failed";
            header('location: ../view/blocklist.php');
        }
    }
   