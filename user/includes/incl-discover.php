<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 stretch-card grid-margin">
            <div class="card text-black">
                <div class="card-body">
                   <div class="m-t-50 px-2">
                        <div class="row">
                            <div class="input-group m-b-40 col-md-8">
                                <input type="text" class="form-control bo1 s-text7" placeholder="Search for shows">
                                <span class="input-group-btn">
                                    <button class="btn btn-default bo1" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <select id="num-rows-choice" class="custom-select" onchange="loadData()">
                                        <option value="6" selected>Rows Per Page</option>
                                        <option value="12" > 12</option>
                                        <option value="21" > 21 </option>
                                        <option value="30" > 30</option>
                                    </select>
                                </div>
                            </div>
                       </div>                      
                    </div>
                </div>    
            </div>
        </div>
        <div class="col-md-12 stretch-card grid-margin">
            <div class="card text-black">
                <div class="card-body">
                    <h4 class="font-weight-normal mb-1 mx-3 mt-3 text-up text-success fs-22">New Shows</h4>
                     <hr class="mx-3"> 
                    <div class="row mx-2 clearfix" id="indi-discovery">
                        
                    </div>                                  
                </div>
            </div>
        </div>
    </div>
</div>