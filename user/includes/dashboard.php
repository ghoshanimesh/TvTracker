<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 stretch-card grid-margin">
            <div class="card text-black">
                <div class="card-body">
                    <h4 class="font-weight-normal mb-1 mx-3 mt-3 text-up text-success fs-22">Watch History</h4>
                    <hr>
                    <?php
                    for($i=0; $i<6; $i++){
                        ?>
                    <div class="row py-2 ml-2">
                        <div class="col-md-2 pb-2">
                            <img src="http://static.tvmaze.com/uploads/images/medium_portrait/148/371513.jpg" alt="show-image" class="img-fluid rounded">
                        </div>
                        <div class="col-md-10 py-2 pl-4">
                           <div class="mb-1">
                                <span class="badge badge-success">Adventures</span>
                                <span class="badge badge-success">Horror</span>
                                <span class="badge badge-success">Thriller</span>
                            </div>    
                            <a href="#" class="m-text16 pt-2 pb-1 mb-0">Game of Thrones</a>
                            <p class="s-text6 pt-1 pb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad fugit modi maiores, sapiente totam quisquam vel, repellendus iure autem sit, neque, repudiandae eum voluptate ipsam sed corporis dolor tempora quia.</p>
                            <div class="rating pt-1">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star unchecked"></span>
                              <span class="fa fa-star unchecked"></span>
                            </div>
                            <a href="indiv-show.php" class="btn btn-info s-text-1 mt-3">View <i class="pl-1 fa fa-eye"></i></a>
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
