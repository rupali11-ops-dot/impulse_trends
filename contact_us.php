

<?php  require_once("includes/header.php")?>

<div class="site-wrap contact-section-part">


<div class="owl-carousel slide-one-item contact-us-banner">
  <div class="site-section-cover overlay img-bg-section main-div" style=" "  >
    <div class="container">
      <div class="row banner-section">
        <div class="col-12 col-md-12">
          <h1 class="text-black">Contact Us</h1>  
          <p class="mb-0 text-black">Have any questions or suggestions?</p>
          <p class="text-black">Reach out to us!</p>
         </div>
      </div>
     </div>
    </div>
</div>


<div class=" contact-section" id="contact-section" style=" ">
   
      <div class="container">
     
      <div class="row contact_part justify-content-center">
         <!-- <div class="col-lg-1"></div> -->
        <div class="col-10 col-md-4 col-lg-3" >
          
         	<div class="center-location-div">
         		   <div class="row common_section_contact_address">
			          	<div class="col-7 col-md-12">
			          		<h6 class="font-weight-bold">ADDRESS:</h6>
			          		<p>C.T.S. No.799-A, Bhandarkar Road, Near VLCC, deccan Gymkhana, Pune, Maharashtra - 411004</p>
			          	</div>
			       </div>

		          <div class="row common_section_contact_address">
		          	<div class="col-7 col-md-12">
		          		<h6 class="font-weight-bold">OUR HOURS:</h6>
		          		
		          		<ul class="list-unstyled">
			                <li class="font-size-16 text-black"><span>10:00 AM – 6.00 PM</span></li>
			                <li class="font-size-16 text-black"><span>Monday – Saturday</span></li>
			                <li class="font-size-16 text-black"><span>Sunday: Closed</span></li>
			            </ul>
		          	</div>
		          </div>

		          <div class="row common_section_contact_address">
		          	<div class="col-7 col-md-12">
		          		<h6 class="font-weight-bold">PHONE NUMBER:</h6>
		          		<ul class="list-unstyled">
			                <li class="font-size-16 text-black"><span>(91) 8888807447</span></li>
			                <li class="font-size-16 text-black"><span>(91) 8888807424</span></li>
			            </ul>
		          	</div>
		          </div>

		           <div class="row common_section_contact_address">
		          	<div class="col-7 col-md-12">
		          		<h6 class="font-weight-bold">EMAIL: </h6>
		          		 <ul class="list-unstyled">
		                    <li class="font-size-16 ">
		                      <a href="mailto:inquiry@impulsetrend.com" target="_blank" class="text-black"><span>inquiry@impulsetrend.com</span></a>
		                    </li>
		                 </ul>
		          		
		          	</div>
		          </div>
         	</div>
        
        </div>

        <div class="col-10 col-md-1 col-lg-2"></div>
       
        <div class="col-10 col-md-7 col-lg-7">
           
              <div class="form_section mb-0 contact_us_form11">
                <form class="" method="post" id="contact_us_form">

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group name_group">
                       <label>Full Name</label>
                       <input type="text" class="form-control full_name" placeholder="" id="name" required>
                       <span class='temp-error display_none'>Enter Your Name</span>
                    </div>
                  </div>
                </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0">
                      <div class="form-group date_group">
                        <label>Preferred Time To Visit</label>
                      <input type="text" class="form-control date_time" placeholder="" name="time_to_visit" id='datetimepicker1'  onkeydown="return false" required>
                       <span class='temp-error display_none'>Enter Your Time To Visit</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group area_group">
                        <label>Area Of Interest</label>
                      <input type="text" id="area" class="form-control area" placeholder="" required>
                       <span class='temp-error display_none'>Enter Your Area Of Interest</span>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0">
                      <div class="form-group mob_group">
                        <label>Mobile No</label>
                      <input type="text" id="mob" class="form-control mob" placeholder="" minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                       <span class='temp-error display_none'>Enter Your Mobile No.</span>
                       <span class='temp-error_10 display_none'>No Should be 10 Digit.</span>

                      </div>
                    </div>
                    <div class="col-md-6">
                       <div class="form-group email_group">
                          <label>Email ID</label>
                      <input type="email" id="email" class="form-control email" placeholder=""  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="">
                       <span class='temp-error display_none'>Enter Your Email Id</span>
                       <span class='temp-error_invalid display_none'>Invalid Email Id</span>
                       </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group msg_group">
                         <label>Your Message</label>
                      <textarea name="" id="msg" class="form-control msg" placeholder="" rows="" required></textarea>
                       <span class='temp-error display_none'>Enter Your Message</span>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-md-6 ">
                       <div class="form-group mb-0">
                         <button type="button" class="btn contact_btn text-white text-uppercase "  onclick="submit_form()">
                         <img src="images/img/loader.gif" style="height: 20px;" class="display_none download_loader img-fluid"> submit </button>
                       </div>
                    </div>
                  </div>
                </form>
              </div>
          
        </div>
        
      </div>

     
    </div>
   
</div>

<div class="site-section contact_location pt-0">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-10">
			<div class="">
			<div class="row mb-5">
				<div class="col-12">
					<h6 class="text-center">FIND US HERE</h6>
				</div>
			</div>

			<div class="row mb-5">
				<div class="col-12">
					<div class="iframe-container">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.225132499291!2d73.83023641489275!3d18.51872578741002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf850342e151%3A0x9b53009ae375dcaf!2sImpulse%20World%20Trends!5e0!3m2!1sen!2sin!4v1588836093189!5m2!1sen!2sin" frameborder="0"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>

		</div>
		</div>
		</div>
	</div>
</div>


<?php  require_once("includes/footer.php")?>



</div>




<!-- DateTimePicker JS Start -->
<script type="text/javascript">
   $(function () {
                $('#datetimepicker1').datetimepicker({
                 useCurrent: false,
               });
            });

$('#datetimepicker1').datetimepicker().on('dp.change', function(e){
  if( !e.oldDate || !e.date.isSame(e.oldDate, 'day')){
    $(this).data('DateTimePicker').hide();
  }
});
</script>
<!-- DateTimePicker JS End -->


<!-- Contact US form Validations Start -->

<script type="text/javascript">

   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

$(".contact_us_form11 .full_name").keyup(function(){
  $(this).closest(".form-group").find(".temp-error").addClass("display_none");
});

$(".contact_us_form11 .mob").keyup(function(){
  $(this).closest(".form-group").find(".temp-error").addClass("display_none");
  
  if(($(this).val()).length!=10)
  {
    $(".contact_us_form11 .mob_group .temp-error").addClass("display_none");
   $(".contact_us_form11 .mob_group .temp-error_10").removeClass("display_none");
  }
  
  if(($(this).val()).length==10)
  {
    $(this).closest(".form-group").find(".temp-error_10").addClass("display_none"); 
  }

});

$(".contact_us_form11 .email").keyup(function(){
  $(this).closest(".form-group").find(".temp-error").addClass("display_none");

  // var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

   if (reg.test($(".contact_us_form11 .email").val()) == false) 
    {
        $(".contact_us_form11 .email_group .temp-error_invalid").removeClass("display_none");
       ;
        return false;
    }
     $(".contact_us_form11 .email_group .temp-error_invalid").addClass("display_none");
     return true;

});

$(".contact_us_form11 .area").keyup(function(){
  $(this).closest(".form-group").find(".temp-error").addClass("display_none");
});

$(".contact_us_form11 .msg").keyup(function(){
  $(this).closest(".form-group").find(".temp-error").addClass("display_none");
});

$(document).on('click','.date_time',function(){
  $(this).closest(".contact_us_form11 .form-group").find(".temp-error").addClass("display_none");
});

function submit_form()
  {
    var name=$(".contact_us_form11 .full_name").val();   
    var area=$(".contact_us_form11 .area").val();   
    var mob=$(".contact_us_form11 .mob").val();   
    var msg=$(".contact_us_form11 .msg").val();   
    var email=$(".contact_us_form11 .email").val();
    var date_time=$(".contact_us_form11 .date_time").val();

    if(name!="" && area!="" && mob!="" && msg!="" && email!="" && date_time!="")
    {
      if(mob!="" && mob.length==10)
        {
         
          if(email!="" && reg.test($(".contact_us_form11 .email").val()) == true)
            {
               $(".contact_us_form11 .download_loader").removeClass("display_none");
                $(".contact_us_form11 .contact_btn").attr( "disabled", true);
                  $.ajax({
                        type    : "POST",
                        url     : "<?= $dir; ?>Contactus.php",
                        data    : {name:name,area:area,mob:mob,msg:msg,email:email,date_time:date_time},
                        success: function(data)
                        {
                           $(".contact_us_form11 .download_loader").addClass("display_none");
                            $(".contact_us_form11 .contact_btn").removeAttr("disabled");
                            $("#contact_us_form")[0].reset();
                        }
                      });
            }
        }
       
      }
    else
    {
         if(name=="")
         {
          $(".contact_us_form11 .name_group").find(".temp-error").removeClass("display_none");
         }
         if(email=="")
         {
          $(".contact_us_form11 .email_group").find(".temp-error").removeClass("display_none");
         }
         if(area=="")
         {
          $(".contact_us_form11 .area_group").find(".temp-error").removeClass("display_none");
         }
         if(msg=="")
         {
          $(".contact_us_form11 .msg_group").find(".temp-error").removeClass("display_none");
         }
         if(date_time=="")
         {
          $(".contact_us_form11 .date_group").find(".temp-error").removeClass("display_none");
         }
         if(mob=="")
         {
          $(".contact_us_form11 .mob_group").find(".temp-error").removeClass("display_none");
         }
     }
 }
</script>

