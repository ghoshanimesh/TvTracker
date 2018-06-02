//Dynamic Sidebar
$(document).ready(function(){
    changeSidebarHeight();          
});

//Ajax Call
function followAjax(){
    //console.log("Called followAjax");
    var show_id = $('#follow').attr('data-show-id');
    var user_id = $('#follow').attr('data-user-id');
    $.ajax({
        type: 'POST',
        url: 'includes/process-ajax-request.php',
        data: 'show_id=' + show_id + "&user_id=" + user_id + "&manage=follow"
    }).done(function (response) {
        //console.log("success " + response);
        $('#follow').removeClass("btn-info");
        $('#follow').addClass("btn-success");
        $('#follow').text("Following ");           
        $('#follow').append("<i class='fa fa-check'></i>"); 
        $('#follow').attr('onclick', 'unfollowAjax()');
        $('#follow').attr('id', 'unfollow');
    })                    
}

function unfollowAjax(){
    var show_id = $('#unfollow').attr('data-show-id');
    var user_id = $('#unfollow').attr('data-user-id');
    //console.log("Called unfollowAjax " + show_id + " " + user_id);
    $.ajax({
        type: 'POST',
        url: 'includes/process-ajax-request.php',
        data: 'show_id=' + show_id + "&user_id=" + user_id + "&manage=unfollow"
    }).done(function (response) {
        //console.log(response);
        $('#unfollow').removeClass("btn-success");
        $('#unfollow').addClass("btn-info");
        $('#unfollow').text("Follow");           
        $('#unfollow').append("<i class='fa fa-plus'></i>");
        $('#unfollow').attr('onclick', 'followAjax()');
        $('#unfollow').attr('id', 'follow');
    })                   
}
