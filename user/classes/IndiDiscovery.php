<?php
    include_once("Database.php");
    include_once("GeneralFunction.php");
	include_once("DiscoverShow.php");
    session_start();
    
class IndiDiscovery extends  GeneralFunction {
        private $connection;
        public $recordsPerPage;
        private $tableName;
        private $char;
        private $user_id;
        public function __construct(){
            parent::__construct();
            global $database;
            $this->connection = $database->getConnection();
            $this->recordsPerPage = 6;
            $this->user_id = $_SESSION['user_id'];
        }

        public function decodeJSONByID($id){
            $url = "http://api.tvmaze.com/shows/". $id ;
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            
            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_POSTFIELDS => "{}",
            ));         
            $data = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            $this->char = json_decode($data);
        }

        public function getInfoFromName($detail){
            if($detail == "rating"){
                return round(($this->char->rating->average)/2);
            }else if($detail == "image"){
                return $this->char->image->medium;
            }else if($detail == "genres"){
                $temp = "";
                for($i=0; $i<count($this->char->genres); $i++)
                     $temp = $temp . $this->char->genres[$i] . "&nbsp";
                return $temp;
            }else if($detail == "status"){
                return $this->char->status;
            }
            return strip_tags($this->char->$detail);
        }
    
        public function randomIDArray($record_per_page){
            $ar = array();
            $limit = $record_per_page-1;
            $sql = "SELECT table_id,api_id FROM poolid ORDER BY RAND() LIMIT $limit";
            $result_set = $this->connection->query($sql);
            while($row = mysqli_fetch_assoc($result_set))
                $ar[] = $row['api_id'];
            while(true)
            {
                $random_id = rand(1,35777);
                $this->decodeJSONByID($random_id);
                if($this->getInfoFromName("status") == 404)
                    continue;
                else if($this->getInfoFromName("rating") == null)
                    continue;
                else
                {
                    $sql = "INSERT INTO poolid(api_id) VALUES($random_id)";
                    $this->connection->query($sql);
                    $ar[] = $random_id;
                    break;
                }
            }            
            return $ar;
            //Arises 2 problems 
            //1) A id can be regenerated and can be inserted in db
            //2) Since db can have regenerated id then a it can happen array may contain double values which may lead to double post in same page.
        }    

        public function displayRecordWithPagination($record_per_page){
            $num_of_pages = 100;
            if(isset($_POST['page'])){
                $page = $_POST['page'];
            } else{
                $page=1;
            }
            $rand_arr = $this->randomIDArray($record_per_page);
            $z=0;            
            for($i=(($page * $record_per_page)-$record_per_page); $i<($page*$record_per_page); $i++){
                    $this->decodeJSONByID($rand_arr[$z]);
                ?>
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card text-white">                        
                        <div class="card-img-top">
                            <img src="<?php echo($this->getInfoFromName("image"));?>" alt="show-image" class="card-img-fluid">
                        </div>

                        <div class="card-body t-center">
                            <p class="card-text text-black m-text2 mb-1 "><?php echo($this->getInfoFromName("name"));?></p>
                            <?php
                                $fullStar = ceil($this->getInfoFromName("rating"));
                            ?>                            
                            <div class="row flex-c pt-1">
                               <span class="text-black s-text5 text-up">Rating: </span>
                               <?php
                                  for($j=0; $j<$fullStar; $j++){
                                ?>
                                 
                                  <span class="fa fa-star checked px-1"></span>
                                <?php } ?>
                                <?php
                                  for($j=0; $j<5-$fullStar; $j++){
                                ?> 
                                  <span class="fa fa-star unchecked px-1"></span>
                                <?php } ?>
                                </div>
                                <div class="flex-c">
                                    <button type="button" class="open-Modal btn btn-warning s-text-1 mt-3" data-toggle="modal" data-target="#myModal<?php echo $rand_arr[$z];?>">View Plot <i class="pl-1 fa fa-eye"></i></button>
										<!-- Modal -->
                                        <div class="modal fade" id="myModal<?php echo $rand_arr[$z];?>" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title" style="color:black">
                                                            <?php 
                                                                $discoverShow=new DiscoverShow();
                                                                $discoverShow->decodeJSONByID($rand_arr[$z]);
                                                            ?>
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h1 style="color:black">The Plot</h1>
                                                        <p style="color:black">
                                                            <?php echo($discoverShow->getInfoFromName("summary"));?>
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="indiv-discover-show.php?q=<?php echo $rand_arr[$z]; ?>" class="btn btn-warning s-text-1 mt-3">View More <i class="pl-1 fa fa-eye"></i></a>
                                                        <button type="button" class="ml-2 btn btn-danger s-text-1 mt-3" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>		
                                        <?php
                                            include_once("../classes/UserFollow.php");
                                            $userFollow = new UserFollow();
                                            if($userFollow->checkFollow($rand_arr[$z],$this->user_id)){
                                        ?>
                                        <button type="button" id="unfollow<?php echo $z; ?>" class="ml-2 btn btn-success s-text-1 mt-3" data-show-id="<?php echo $rand_arr[$z]; ?>" data-user-id="<?php echo $this->user_id; ?>">Following <i class="fa fa-check"></i></button>
                                        <?php 
                                            }else{
                                        ?>
                                        <button type="button" id="follow<?php echo $z; ?>" class="ml-2 btn btn-info s-text-1 mt-3" data-show-id="<?php echo $rand_arr[$z]; ?>" data-user-id="<?php echo $this->user_id; ?>">Follow <i class="fa fa-plus"></i></button>
                                        <?php
                                            }
                                        ?>
          						</div>
						</div>
					</div>
				</div>
           			
            <?php
                $z++;
            }?>
            <div class="row mx-2">
                <ul class="pagination justify-content-center pagination-split mt-0 m-l-65per">
                <?php
                    $li_class= "page-item";
                    $a_class = "page-link";
                    $li_active_class = $li_class." active";
                    $page_num = $page==1?1:$page-1;
                    echo "<li class='$li_class'><a onclick='PaginationLinkClicked($page_num)' class='$a_class'>&lt;&lt;</a></li>";
                    $page_num = $page==$num_of_pages?$num_of_pages:$page+1;
                    for($i=1; $i<=10; $i++) {
                        if($i==$page)
                            echo "<li class='$li_active_class'><a class='$a_class' onclick='PaginationLinkClicked($i)' >$i</a></li>";
                        else
                            echo "<li class='$li_class'><a class='$a_class' onclick='PaginationLinkClicked($i)'>$i</a></li>";
                    }            
                    echo "<li class='$li_class'><a onclick='PaginationLinkClicked($page_num)' class='$a_class'>&gt;&gt;</a></li>";
                ?>
                </ul>
            </div>
        <?php
        }
    }
?>