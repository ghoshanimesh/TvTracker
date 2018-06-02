var pageNumber = 1;

function PaginationLinkClicked(page){
    window.alert(page);
    pageNumber = page;
    loadData();
}
function loadData() {

    var choice = document.getElementById("num-rows-choice");
    var numRows = choice.options[choice.selectedIndex].value;
    $.ajax({
        type: 'POST',
        url: 'includes/process-ajax-request.php',
        data: 'rows=' + numRows + "&page=" + pageNumber + "&manage=indi-discovery"
    }).done(function (response) {
        document.getElementById("indi-discovery").innerHTML = response;
        changeSidebarHeight();    
        followAjax();
        unfollowAjax();
    })
}
loadData();

function followAjax(){
    $(document).on("click","button",function(){
        var id = this.id+"";
        if(id.startsWith("follow")){
            var show_id = $(this).attr('data-show-id');
            var user_id = $(this).attr('data-user-id');
            $.ajax({
                type: 'POST',
                url: 'includes/process-ajax-request.php',
                data: 'show_id=' + show_id + "&user_id=" + user_id + "&manage=follow"
            }).done(function (response) {
                $('#'+id).removeClass("btn-info");
                $('#'+id).addClass("btn-success");
                $('#'+id).text("Following");           
                $('#'+id).append("<i class='fa fa-check'></i>"); 
                $('#'+id).attr('id', 'unfollow'+id.substring(6));
            })                
        }
    });
}

function unfollowAjax(){
    $(document).on("click","button",function(){
        var id = this.id+"";
        if(id.startsWith("unfollow")){
            var show_id = $(this).attr('data-show-id');
            var user_id = $(this).attr('data-user-id');
            $.ajax({
                type: 'POST',
                url: 'includes/process-ajax-request.php',
                data: 'show_id=' + show_id + "&user_id=" + user_id + "&manage=unfollow"
            }).done(function (response) {
                $('#'+id).removeClass("btn-success");
                $('#'+id).addClass("btn-info");
                $('#'+id).text("Follow");           
                $('#'+id).append("<i class='fa fa-plus'></i>");
                $('#'+id).attr('id', 'follow'+id.substring(8));
            })                
        }
    });
}

