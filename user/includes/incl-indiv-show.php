<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 stretch-card grid-margin">
            <div class="card text-black">
                <div class="card-body">
                    <h4 class="mb-1 mx-3 mt-3 l-text1">Game of Thrones</h4>
                    <hr class="mx-3"> 
                    <div class="row mx-2">
                        <div class="col-md-3">
                            <img src="http://static.tvmaze.com/uploads/images/original_untouched/143/359013.jpg" alt="show-image" class="img-fluid bo-rad-10">
                        </div>
                        <div class="col-md-9">
                            <p class="l-text1">The Plot</p>
                            <p class="para">
                                Based on the bestselling book series <i>A Song of Ice and Fire</i> by George R.R. Martin, this sprawling new HBO drama is set in a world where summers span decades and winters can last a lifetime. From the scheming south and the savage eastern lands, to the frozen north and ancient Wall that protects the realm from the mysterious darkness beyond, the powerful families of the Seven Kingdoms are locked in a battle for the Iron Throne. This is a story of duplicity and treachery, nobility and honor, conquest and triumph. In the <b>Game of Thrones</b>, you either win or you die.
                            </p>
                            <hr>
                            <p class="l-text1">Show Informtion</p>
                            <table class="s-text9 table table-borderless">
                              <tr>
                                <td>Airs On</td>
                                <td>US - HBO</td>
                              </tr>
                              <tr>
                                <td class="pr-3">Released On </td>
                                <td>Premiere Date</td>
                              </tr>
                              <tr>
                                <td>Schedule</td>
                                <td>Sundays at 21:00</td>
                              </tr>
                              <tr>
                                <td>Runtime</td>
                                <td>60 min</td>
                              </tr>
                               <tr>
                                <td>Status</td>
                                <td>Running</td>
                              </tr>
                               <tr>
                                <td>Show type</td>
                                <td>Scripted</td>
                              </tr>
                               <tr>
                                <td>Genres</td>
                                <td>Drama | Action | ETC</td>
                              </tr>
                               <tr>
                                <td>Rating</td>
                                <td>
                                    <span class="fa fa-star checked pr-1"></span>
                                    <span class="fa fa-star checked pr-1"></span>
                                    <span class="fa fa-star checked pr-1"></span>
                                    <span class="fa fa-star unchecked pr-1"></span>
                                    <span class="fa fa-star unchecked pr-1"></span>
                                    4.65(Half of average)
                                </td>
                              </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row mx-2">                      
                       <div class="col-md-12">
                          <p class="l-text1 pl-3">Cast</p>
                          <hr class="mx-3">
                          <div class="row">
                              <div class="row">
                                <?php
                                  for($i=0; $i<7; $i++){
                                ?>
                                 <div class="col-md-2 grid-margin mb-1">
                                  <div class="card text-white">
                                   <div class="card-img-top t-center">
                                       <img src="http://static.tvmaze.com/uploads/images/medium_portrait/142/356748.jpg" alt="show-image" class="cast-img-fluid bo-rad-10">
                                   </div>
                                    <div class="card-body t-center">
                                        <p class="card-text text-black s-text1 mb-1">Collin Ford <br/><small class="xs-text1">As<br/> Ranger Grover</small></p>
                                    </div>
                                  </div>
                                </div>
                                <?php
                                  }
                                ?>  
                               </div>
                            <a href="#" class="ml-2 btn btn-info s-text-1 ab-c-b">View More<i class="pl-1 fa fa-eye"></i></a>
                           </div>      
                       </div>
                    </div>   
                    <hr class="mt-5 mx-3 mb-3">                 
                    <div class="row mx-3">
                       <p class="l-text1 pl-3">Seasons and Episodes</p>
                       <div class="col-md-12">
                            <div class="ui fluid styled accordion">
                               <?php
                                for($i=1; $i<5; $i++){
                                ?>
                                <div class="title l-text2">
                                    <i class="dropdown icon"></i> Season <?php echo $i; ?>
                                </div>
                                <div class="content">
                                    <p class="para">Lord Eddard Stark is asked by his old friend, King Robert Baratheon, to serve as the King's Hand following the death of the previous incumbent, Eddard's mentor Jon Arryn. Eddard is reluctant, but receives intelligence suggesting that Jon was murdered. Eddard accepts Robert's offer, planning to use his position and authority to investigate the alleged murder.</p>
                                    <div class="form-check form-check-flat ml-4 dis-inline-block mt-0">
                                        <label class="form-check-label pl-2 s-text7">
                                          <input type="checkbox" class="form-check-input" id="<?php echo 'selectAllBoxes'.$i; ?>" onclick="checkAll(<?php echo $i; ?>)"> Watched Season
                                          <i class="input-helper"></i>
                                        </label>
                                    </div>                                    
                                    <div class="form-group">
                                    <?php
                                        for($j=1; $j<5; $j++){
                                    ?>
                                    <p class="m-text18">Episode <?php echo $j; ?> : Winter is coming</p>   
                                        <div class="form-check form-check-flat ml-4 dis-inline-block mt-0">
                                            <label class="form-check-label pl-2 s-text7">
                                              <input type="checkbox" class="form-check-input <?php echo 'checkBoxes'.$i; ?>">Watched
                                              <i class="input-helper"></i>
                                            </label>
                                        </div>
                                    <a href="#" class="text-info text-bold pl-3 m-text18">View More</a>
                                    <!-- If the user unchecks the box it means user has not watched the episode-->
                                    <?php } ?>
                                    </div>
                                </div>  
                              <?php } ?>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
