$(document).ready(function(){
	var star;
	var question;
	var comment;
	var status;
   var data_id;
   var course;
 //  var batch;
$('.submit_click').attr('disabled','disabled');

question=$('.question').val();
course=$('.course').val();

$(document).on('click','.star_click',function(){
star=$(this).val();
$('.star_val').val(star);
data_id=$(this).attr('data-id');

$('.faChkRnd').removeClass('check_status');


      $('.submit_click').attr('disabled','disabled');
      $.ajax({  
                url:"option_block_fac.php",  
                method:"POST",  
                data:{question:question,data_id:data_id,star:star,course:course},  
                success:function(response){  
                      // $('.optionBlock').html(''); 
                      $('#'+data_id+'_block').html(response);  
                      $('.submit_click').removeAttr('disabled');
                      //var click_id =$()
                    
            }  
      });


});

$(document).on('click','.action_click',function(){
var action_val=$(this).attr('data-attr');
var action;
var data_id;
var batch=$('.batch').val();
var question=$('.question').val();
var star=$('.star_val').val();
var comments=$('.comment').val();
var cand_id=$('.cand_id').val();
var city_id=$('.city').val();
var cat_val=$('.cat_val').val();
//alert(action_val);
if(action_val=='next')
{
action=0;
var options="null";
star=0;
data_id=0;
comments=0;

}
else{
  data_id=$(this).attr('data-id');
  //alert(data_id);
  action=1;
  //alert('proceed');
                        checked = $(".check_status"+data_id+":checked").length;
                        if(!checked) {

                          alert("You must check at least one checkbox.");
                          return false;
                        }
                        else{
                        // else{
                          var options=[];
                          $('.check_status'+data_id).each(function(){  
                            if($(this).is(":checked"))  
                            {  
                              options.push($(this).val());  
                            } 

                          });
                          options = options.toString(); 
                          window.location.replace('sample.php?id='+new_val);
                         }
}
//alert(options);
   $.ajax({  
              //   url:"action_pages/ajax/feedNextAjax.php",  
              //   method:"POST",  
              //   data:{question:question,
              //             cand_id:cand_id,
              //             city_id:city_id,
              //             cat_val:cat_val,
              //             star:star,
              //             options:options,
              //             comments:comments,
              //             action:action,
              //             data_id:data_id,
              //             course:course,
              //             batch:batch
              //           },  
              //   success:function(response){
               
              //  //alert(response);
              //   var status_1=response.split('_');
              //   var status1=status_1[0];
              //   var new_val=status_1[1];
              //  //console.log(new_val);  
              //   if(status_1[0].includes("faculty")){
              //     $('.star'+data_id).attr('disabled','disabled');
              //     $('#'+data_id+'_block').hide();
              //   }
              //  else if(status_1[0].includes("next")){
              //     window.location.replace('http://52.66.108.174/MilesFeedback/sample.php?id='+new_val);
              //   }
              //   else{
              //         window.location.replace('http://52.66.108.174/MilesFeedback/thankyou.php');
              //   }
              // }
               });


});
  
})