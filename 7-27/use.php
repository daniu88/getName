<?php 

$('.collect').click(function(){
     that=$(this);
     //alert(that.children('i').children('.zan').val());
     //return false;
     $.ajax({
       url: '{:U("home/discuss/collect")}',
       type: 'POST',
       dataType: 'json',
       data: {qid:that.children('.qid').val()}
     })
     .done(function(respones) {
       if(respones.error==0){
          that.hide();
          that.siblings('.collect').show();
       }else{
          that.hide();
          that.siblings('.collect').show();
       }
     })
     .fail(function() {
       console.log("error");
     })
  })























 ?>