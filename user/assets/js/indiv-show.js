$('.ui.accordion').accordion({ exclusive: false });

function checkAll(id){
    if($("#selectAllBoxes"+id).is(':checked')){
        $('.checkBoxes'+id).each(function(){
            this.checked = true;                  
        });
    }else{
        $('.checkBoxes'+id).each(function(){
            this.checked = false;                  
        });                     
    } 
}