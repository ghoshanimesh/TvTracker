<?php
    if(isset($_GET['q'])) {
        $id = $_GET['q'];
        echo $id;
        $user_id = $_SESSION['user_id'];
        include_once("classes/DiscoverShow.php");
            $discoverShow = new DiscoverShow();
            $discoverShow->decodeJSONByID($id);
            $discoverShow->decodeJSONForCast($id);
            ?>
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 stretch-card grid-margin">
                        <div class="card text-black">
                            <div class="card-body">
                                <div class="row mx-2">
                                    <div class="col-md-3 mt-5 t-center">
                                        <img src="<?php echo($discoverShow->getInfoFromName("original")); ?>" alt="show-image" class="img-fluid bo-rad-10">
                                        <?php
                                            include_once("classes/UserFollow.php");
                                            $userFollow = new UserFollow();
                                            if($userFollow->checkFollow($id,$user_id)){
                                        ?>                
                                        <button type="button" id="unfollow" class="btn btn-success mt-4 p-l-35 p-r-35 m-text20" data-show-id="<?php echo $id; ?>" data-user-id="<?php echo $user_id; ?>" onclick="unfollowAjax()">Following <i class="fa fa-check"></i></button>
                                        <?php 
                                            }else{
                                        ?>
                                        <button type="button" id="follow" class="btn btn-info mt-4 p-l-35 p-r-35 m-text20" data-show-id="<?php echo $id; ?>" data-user-id="<?php echo $user_id; ?>" onclick="followAjax()">Follow <i class="fa fa-plus"></i> </button>
                                        <?php
                                            }
                                        ?>                                        

                                    </div>
                                    <div class="col-md-9 mt-5">
                                        <h4 class="mb-1 mt-3 l-text1"><?php echo($discoverShow->getInfoFromName("name")); ?></h4>
                                        <p class="para">
                                            <?php echo($discoverShow->getInfoFromName("summary")); ?>
                                        </p>
                                        <hr>
                                        <p class="l-text1">Show Informtion</p>
                                        <table class="s-text9 table table-borderless">
                                            <tr>
                                                <td>Airs On</td>
                                                <td><?php echo($discoverShow->getInfoFromName("network"));?></td>
                                            </tr>
                                            <tr>
                                                <td class="pr-3">Released On</td>
                                                <td><?php echo($discoverShow->getInfoFromName("premiered"));?></td>
                                            </tr>
                                            <tr>
                                                <td>Schedule</td>
                                                <td><?php echo($discoverShow->getInfoFromName("schedule")); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Runtime</td>
                                                <td><?php echo($discoverShow->getInfoFromName("runtime")); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td><?php echo($discoverShow->getInfoFromName("status")); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Show type</td>
                                                <td><?php echo($discoverShow->getInfoFromName("type")); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Genres</td>
                                                <td><?php echo($discoverShow->getInfoFromName("genres")); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Rating</td>
                                                <td>
                                                    <?php
                                                    $rating=$discoverShow->getInfoFromName("rating");
                                                    for($i=1;$i<=$rating;$i++){
                                                    ?>
                                                    <span class="fa fa-star checked pr-1"></span>
                                                    <?php }
                                                    for($i=$rating;$i<5;$i++){?>
                                                    <span class="fa fa-star unchecked pr-1"></span>
                                                    <?php }
                                                    echo($discoverShow->getInfoFromName("rating"));?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row mx-2">
                                    <div class="col-md-12">
                                        <p class="l-text1 pl-3">Cast</p>
                                        <hr class="mx-3">
                                        <div class="row m-b-50">
                                            <div class="row">
                                                <?php
                                                $cast_mem=$discoverShow->getInfoCast("cast",0);
                                                for ($i = 0; $i < $cast_mem; $i++) {
                                                    ?>
                                                    <!--Dont add card, UI becomes ugly-->
                                                    <div class="col-md-2 grid-margin mb-1">
                                                        <div class="text-white">
                                                            <div class="t-center">
                                                                <img src="<?php echo ($discoverShow->getInfoCast("image",$i));?>"alt="show-image" class="cast-img-fluid bo-rad-10">
                                                            </div>
                                                            <div class="t-center mt-3">
                                                                <p class="text-black s-text1 mb-1"><?php echo($discoverShow->getInfoCast("name",$i));?>
                                                                    <br/>
                                                                    <small class="xs-text1">As<br/> <?php echo($discoverShow->getInfoCast("character",$i));?>
                                                                    </small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </div>
                        <?php } ?>
                    </div>
				</div>
			</div>
      
