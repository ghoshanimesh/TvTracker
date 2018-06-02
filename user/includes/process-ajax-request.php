<?php
    $manage = $_POST['manage'];
    if($manage == "indi-discovery"){
        require_once ("../classes/IndiDiscovery.php");
        $indidiscovery = new IndiDiscovery();
        if(isset($_POST['rows'])){
            $numRow = $_POST['rows'];
            if($numRow == 0){
                $numRow = $indidiscovery->recordsPerPage;
            }
            $indidiscovery->displayRecordWithPagination($numRow);
        }
    }else if($manage == "follow"){
        require_once("../classes/UserFollow.php");
        $userfollow = new UserFollow();
        if(isset($_POST['show_id']) && isset($_POST['user_id'])){
            $show_id = $_POST['show_id'];
            $user_id = $_POST['user_id'];
            $userfollow->follow($show_id, $user_id);
            //echo "Succccess pra";
        }
    }else if($manage == "unfollow"){
        require_once("../classes/UserFollow.php");
        $userfollow = new UserFollow();
        if(isset($_POST['show_id']) && isset($_POST['user_id'])){
            $show_id = $_POST['show_id'];
            $user_id = $_POST['user_id'];
            $userfollow->unfollow($show_id, $user_id);
        }
    }
?>