

<footer class="site-footer site-footer-pb">
   <div class="container-fluid">
      <div class="row">
         <div class="col-1"></div>
         <div class="col-10">
            <div class="row pb-3">
               <div class="col-12  col-md-5 footer-image">
                  <div class="mob_view_image">
                     <img src="<?= $dir; ?>images/img/impulse_logo.png" class="img-fluid">
                  </div>
               </div>
               <div class="col-12  col-md-7 col-lg-7">
                  <div class="row">
                     <div class="col-12 col-md-5 col-lg-6">
                        <div  class="mob_view_footer">
                           <h5 class="font-size-16">Corporate Office:</h5>
                           <div class="row address_row">
                              <div class="col-3">
                              </div>
                              <div class="col-6 col-sm-4 col-md-12">
                                 <p class="font-size-13  text-black">CTS NO 799-A ,Bhandarkar Road Near VLCC Deccan Gymkahana Pune Maharashtra :411004</p>
                              </div>
                              <div class="col-3">
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- <div class="col-lg-1"></div> -->
                     <div class="col-12 col-md-3 col-lg-3 ">
                        <div class="mob_view_footer">
                           <h5 class="font-size-16">Phone:</h5>
                           <ul class="list-unstyled">
                              <li class="font-size-13 text-black"><span>(91) 8888888990</span></li>
                              <li class="font-size-13 text-black"><span>(91) 8888888990</span></li>
                           </ul>
                        </div>
                     </div>
                     <!-- <div class="col-lg-1"></div> -->
                     <div class="col-12 col-md-4 col-lg-3  ">
                        <div class="mob_view_footer">
                           <h5 class="font-size-16">Email ID:</h5>
                           <ul class="list-unstyled">
                              <li class="font-size-13 text-black">
                                 <a  class="" href="mailto:Info@impulsetrend.com" target="_blank"><span>Info@impulsetrend.com</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="border-top pr-0 pl-0 pt-3">
                  </div>
               </div>
            </div>
            <div class="row bottom-section">
               <div class="col-4 col-md-4">
                  <div class="float-left mob_view_footer1">
                     <span class="font-size-12 d-inline-block">&copy;Impulse Trends Pvt.Ltd</span>
                  </div>
               </div>
               <div class="col-4 col-md-4">
                  <div class="middle_image text-center">
                     <a href="http://www.facebook.com" class="" target="_blank"><img class="mr-2  img-fluid" src="<?= $dir; ?>images/img/facebook1.png"> <span class="d-none d-md-inline-block"></span></a>
                     <a href="http://www.instagram.com" class="" target="_blank"><img class="mr-2   img-fluid" src="<?= $dir; ?>images/img/insta1.png"> <span class="d-none d-md-inline-block"></span></a>
                     <a href="http://www.linkedin.com" class="" target="_blank"><img class="mr-2  img-fluid" src="<?= $dir; ?>images/img/linkdin1.png"> <span class="d-none d-md-inline-block"></span></a>
                  </div>
               </div>
               <div class="col-4 col-md-4">
                  <div class="float-right" >
                     <a href="#" class="font-size-12" onclick="modal_open()">
                     <span class=" material-icons" style="vertical-align: middle;">get_app</span> 
                     <span class="d-none d-md-inline-block">Download Brochure</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row empre_footer">
               <div class="col-md-12">
                  <div class="text-center mt-3">
                     <span class="font-size-12">Designed and Developed by  <a href="https://empre.in/" target="_blank">Empre</a></span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-1"></div>
      </div>
   </div>
   <!-- basic modal -->
   <div class="modal fade download_modal" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title" id="myModalLabel"></h6>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body pb-0">
               <div class="row">
                  <div class="col-md-12">
                     <h5 class="text-center font-weight-bold font-size-30">Download Brochure</h5>
                  </div>
               </div>
               <div class="row justify-content-center mt-2">
                  <div class="col-10 col-md-9">
                     <div class="border-top">
                     </div>
                  </div>
               </div>
               <div class="row mt-4 pd-4">
                  <div class="col-md-12">
                     <p class="text-center font-size-15">We need few details before you can download the brochure.</p>
                  </div>
               </div>
               <div class="row justify-content-center pt-3 pb-5">
                  <div class="col-10">
                     <form action="" method="" id="download_form">
                        <div class="row">
                           <div class="col-6">
                              <div class="form-group download_name_group">
                                 <!-- <label for="firstname">Name</label> -->
                                 <input type="text" class="form-control download_name" name="" placeholder="Name">
                                 <span class="temp-error display_none">Enter Your Name</span>
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="form-group download_mob_group">
                                 <!-- <label>Phone No</label> -->
                                 <input type="text" class="form-control download_no" name="" minlength="10" maxlength="10" placeholder="Mobile No." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                 <span class="temp-error display_none">Enter Your Mobile No</span>
                                 <span class="temp-error_10 display_none">No Should Be In 10 Digit</span>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <div class="form-group download_email_group">
                                 <!-- <label for="email">Email</label> -->
                                 <input type="text" class="form-control download_email" name="" placeholder="Email">
                                 <span class="temp-error display_none">Enter Your Email</span>
                                 <span class='temp-error_invalid display_none'>Invalid Email Id</span>
                              </div>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-12 text-center">
                              <button type="button" class="btn modal-btn font-size-21 text-uppercase" id="dwn-btn" name="" value="submit" ><img src="<?= $dir; ?>images/img/loader.gif" class="display_none download_loader img-fluid">
                              submit</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>

</body>

   <script src="<?= $dir; ?>js/jquery-3.3.1.min.js"></script>
   <script src="<?= $dir; ?>js/popper.min.js"></script>
   <script src="<?= $dir; ?>js/bootstrap.min.js"></script>
   <script src="<?= $dir; ?>js/owl.carousel.min.js"></script>
   <script src="<?= $dir; ?>js/jquery.sticky.js"></script>
   <script src="<?= $dir; ?>js/jquery.waypoints.min.js"></script>
   <script src="<?= $dir; ?>js/jquery.animateNumber.min.js"></script>
   <script src="<?= $dir; ?>js/jquery.fancybox.min.js"></script>
   <script src="<?= $dir; ?>js/jquery.easing.1.3.js"></script>
   <script src="<?= $dir; ?>js/aos.js"></script>
   <script src="<?= $dir; ?>js/main.js"></script>
   <!-- slick slider js -->
   <script type="text/javascript" src="<?= $dir; ?>js/slick11.min.js"></script> 
   <script type="text/javascript" src="<?= $dir; ?>js/bootstrap-datepicker.min.js"></script>
   <!-- Moment js -->
   <script type="text/javascript" src="<?= $dir; ?>js/moment.min.js"></script>
   <!-- datetimepicker js -->
   <script type="text/javascript" src="<?= $dir; ?>js/bootstrap-datetimepicker.min.js"></script>
   <!-- <script src="<?= $dir; ?>js/combined.js"></script> -->
</html>


<!-- modal open -->
<script type="text/javascript">

  function modal_open()
  {

     document.getElementById("download_form").reset();
     $(".temp-error,.temp-error_10,.temp-error_invalid,.temp-error_num").addClass('display_none');
     $(".download_modal").addClass('show');
     $("#basicModal").modal('show');
     $(".modal-backdrop").addClass("show");

  }
</script>

<!-- download form validations -->

<script type="text/javascript">

var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

$(".download_name").keyup(function(){
  $(this).closest(".form-group").find(".temp-error").addClass("display_none");
});

$(".download_no").keyup(function(){
  $(this).closest(".form-group").find(".temp-error").addClass("display_none");
  
  if(($(this).val()).length!=10)
  {
    $(".download_mob_group .temp-error").addClass("display_none");
   $(".download_mob_group  .temp-error_10").removeClass("display_none");
  }
  
  if(($(this).val()).length==10)
  {
    $(this).closest(".form-group").find(".temp-error_10").addClass("display_none"); 
  }

});

$(".download_email").keyup(function(){
  $(this).closest(".form-group").find(".temp-error").addClass("display_none");
  if (reg.test($(".download_email").val()) == false) 
    {
        $(".download_email_group .temp-error_invalid").removeClass("display_none");
       ;
        return false;
    }
     $(".download_email_group .temp-error_invalid").addClass("display_none");
     return true;

});



  $("#dwn-btn").click(function(){


    var d_name=$(".download_name").val();
    var d_email=$(".download_email").val();
    var d_mob=$(".download_no").val();


    if(d_name!="" && d_email!="" && d_mob!="" && d_mob.length==10 && reg.test($(".download_email").val()) == true)
    {

      // alert("mob+++ "+d_mob.length);

    $(".download_loader").removeClass("display_none");
    $("#dwn-btn").attr( "disabled", true);

          $.ajax({
                    type    : "POST",
                    url     : "<?= $dir; ?>sendDownloadDetails.php",
                    data    : { d_name:d_name,d_email:d_email,d_mob:d_mob},
                    success: function(data)
                    {
                      // download file
                       $.ajax({
                            url: '<?= $dir; ?>IMPULSE_WORLD_TRENDS.pdf',
                            method: 'GET',
                            xhrFields: {
                                responseType: 'blob'
                            },
                            success: function (data) {

                               $(".download_loader").addClass("display_none");
                               $("#dwn-btn").removeAttr("disabled");
                               $('#basicModal').modal('hide');

                                var a = document.createElement('a');
                                var url = window.URL.createObjectURL(data);
                                a.href = url;
                                a.download = 'IMPULSE_WORLD_TRENDS.pdf';
                                document.body.append(a);
                                a.click();
                                a.remove();
                                window.URL.revokeObjectURL(url);
                            }
                        });

                    }
            });

        
    }
    else{

       if(d_name=="")
         {
          $(".download_name_group").find(".temp-error").removeClass("display_none");
         }
         if(d_email=="")
         {
          $(".download_email_group").find(".temp-error").removeClass("display_none");
         }
         if(d_mob=="")
         {
          $(".download_mob_group").find(".temp-error").removeClass("display_none");
         }

    }



  });

$('#basicModal .close').on('click', function (e) {
   $(".temp-error,.temp-error_10,.temp-error_invalid,.temp-error_num").addClass('display_none');
  document.getElementById("download_form").reset();
});


</script>
</html>

