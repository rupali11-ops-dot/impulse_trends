<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/projects.css">
<style type="text/css">
	.carousel-inner img {
    width: 100%;
    height: 100%;
  }
</style>
</head>
<body>
<div>


 <div class="nk-main">

<!-- <img class="nk-img-fit" src="images/project/portfolio-4-video-thumb.jpg"> -->

   
        <div class="container">
            <div class="nk-portfolio-single">

                <div class="row portfolio-single-h1">
                    <div class="col-11 col-sm-12 col-md-12 col-lg-8">
                        <div class="nk-gap-4 mb-14"></div>
                        <h1 class="nk-portfolio-title  display-4">Video Project</h1>
                    </div>
                </div>  
                
                <div class="row vertical-gap justify-content-center">
                    <div class="col-11 col-sm-12  col-md-12 col-lg-8">
                        <div class="nk-portfolio-info">
                            <div class="nk-portfolio-text">
                                <p>Nullam lobortis neque turpis, nec tempus sem pharetra at. Donec et quam, ullamcorper velit. Aliquam maximus ullamcorper ligula, at placerat dui hendrerit sed. Sed metus urna, bibendum id tortor, feugiat ipsum. Aliquam vehicula neque sit amet dolor malesuada pretium.</p>
                                <p>Curabitur tristique, felis ut mattis auctor, elit ante laoreet libero, ac lorem quam vitae libero. Suspen disse aliquet eget risus quis vehicula.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-sm-12  col-md-12 col-lg-4">
                        <table class="nk-portfolio-details">
                            <tr>
                                <td>
                                    <strong>Client:</strong>
                                </td>
                                <td>Anna Doe</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Date:</strong>
                                </td>
                                <td>06.20.2016</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Category:</strong>
                                </td>
                                <td>
                                    <!-- <?php echo $_GET['id']; ?> -->
                                   <!--  <a href="#" title="Share page on Facebook" data-share="facebook">Facebook</a>,
                                    <a href="#" title="Share page on Twitter" data-share="twitter">Twitter</a>,
                                    <a href="#" title="Share page on Pinterest" data-share="pinterest">Pinterest</a> -->
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="nk-gap-4 mt-14"></div>

            </div>
        </div>

		<div id="demo" class="carousel slide" data-ride="carousel">

			 

			  <!-- The slideshow -->
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="nk-img-fit" src="images/img/bathroom-5.jpg" alt="Los Angeles">
			    </div>
			    <div class="carousel-item">
			      <img class="nk-img-fit" src="images/img/bathroom-6.jpg" alt="Chicago">
			    </div>
			    <div class="carousel-item">
			      <img class="nk-img-fit" src="images/img/bathroom-7.jpg" alt="New York">
			    </div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>

		</div>

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center">
            <div class="container">
                <a class="nk-pagination-prev" href="portfolio-single2.php">
                    <span class="pe-7s-angle-left"></span> Previous Work</a>
              
                <a class="nk-pagination-next" href="portfolio-single4.php">Next Work <span class="pe-7s-angle-right"></span></a>
            </div>
        </div>
   </div>



</div>
</body>

 <script src="js/combined.js"></script>
<script type="text/javascript">
	var a=$(".nk-pagination .nk-pagination-prev").attr('href');
	var b=$(".nk-pagination .nk-pagination-next").attr('href');
	if(a=='#')
	{
      $(".nk-pagination-prev").css("display","none");
	}
	else
	{
		$(".nk-pagination-prev").css("display","table-cell");
	}


	if(b=='#')
	{
      $(".nk-pagination-next").css("display","none");
	}
	else
	{
		$(".nk-pagination-next").css("display","table-cell");
	}

</script>

</html>