<?php  require_once("includes/header.php")?>

<div class="site-wrap projects_page" id=""> 
        
  <div class="gallery_part">
            <div class="nk-main">
                <div class="container">
                    <!-- START: Filter -->
                    <div class="nk-pagination nk-pagination-nobg nk-pagination-center">
                        <!-- <a href="#nk-toggle-filter">
                        <span class="nk-icon-squares"></span>
                    </a> -->
                        <h1 class="project_gallery_heading">Projects</h1>
                    </div>
                    <ul class="nk-isotope-filter">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter="Branding">KITCHEN</li>
                        <li data-filter="Print">BATHROOM</li>
                        <li data-filter="Photography">Photography</li>
                        <li data-filter="Design">AUTOMATION</li>
                        <li data-filter="Mockup">POOLS</li>
                    </ul>
                    <!-- END: Filter -->
                    <div class="nk-portfolio-list nk-isotope nk-isotope-3-cols">
                        <div class="nk-isotope-item" data-filter="Mockup">
                            <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1" id="1" onclick="geturl(this.id)">
                                <!-- <a href='/portfolio-single1.html/?id="+$(".nk-isotope-filter .active").val()+"' class="nk-portfolio-item-link"></a> -->
                                <!-- <a href="portfolio-single1.php" class="nk-portfolio-item-link"></a> -->
                                <!-- <a href="portfolio-single1.html" class="nk-portfolio-item-link"></a> -->
                                <div class="nk-portfolio-item-image">
                                    <div style="background-image: url('images/project/portfolio-7-sm.jpg');"></div>
                                </div>
                                <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-center">
                                    <div>
                                        <h2 class="portfolio-item-title h3">Vinyl Record</h2>
                                        <div class="portfolio-item-category">Mockup</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-isotope-item" data-filter="Print">
                            <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1" id="2" onclick="geturl(this.id)">
                                <!-- <a href="portfolio-single2.php" class="nk-portfolio-item-link"></a> -->
                                <div class="nk-portfolio-item-image">
                                    <div style="background-image: url('images/project/portfolio-4-sm.jpg');"></div>
                                </div>
                                <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-center">
                                    <div>
                                        <h2 class="portfolio-item-title h3">Modern T-Shirt</h2>
                                        <div class="portfolio-item-category">Print</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-isotope-item" data-filter="Branding">
                            <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1" id="3" onclick="geturl(this.id)">
                                <!-- <a href="portfolio-single3.php" class="nk-portfolio-item-link"></a> -->
                                <div class="nk-portfolio-item-image">
                                    <div style="background-image: url('images/project/portfolio-5-sm.jpg');"></div>
                                </div>
                                <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-center">
                                    <div>
                                        <h2 class="portfolio-item-title h3">Minimal Bag</h2>
                                        <div class="portfolio-item-category">Branding</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-isotope-item" data-filter="Design">
                            <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1" id="4" onclick="geturl(this.id)">
                                <!-- <a href="portfolio-single4.php" class="nk-portfolio-item-link"></a> -->
                                <div class="nk-portfolio-item-image">
                                    <div style="background-image: url('images/project/portfolio-9-sm.jpg');"></div>
                                </div>
                                <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-center">
                                    <div>
                                        <h2 class="portfolio-item-title h3">Clean &amp; Groovy</h2>
                                        <div class="portfolio-item-category">Design</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-isotope-item" data-filter="Design">
                            <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1" id="5" onclick="geturl(this.id)">
                                <!-- <a href="portfolio-single5.php" class="nk-portfolio-item-link"></a> -->
                                <div class="nk-portfolio-item-image">
                                    <div style="background-image: url('images/project/portfolio-3-sm.jpg');"></div>
                                </div>
                                <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-center">
                                    <div>
                                        <h2 class="portfolio-item-title h3">Minimal Mobile App</h2>
                                        <div class="portfolio-item-category">Design</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-isotope-item" data-filter="Print">
                            <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1" id="6" onclick="geturl(this.id)">
                                <!-- <a href="portfolio-single6.php" class="nk-portfolio-item-link"></a> -->
                                <div class="nk-portfolio-item-image">
                                    <div style="background-image: url('images/project/portfolio-8-sm.jpg');"></div>
                                </div>
                                <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-center">
                                    <div>
                                        <h2 class="portfolio-item-title h3">White T-Shirt</h2>
                                        <div class="portfolio-item-category">Print</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-isotope-item" data-filter="Branding">
                            <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1" id="7" onclick="geturl(this.id)">
                                <!-- <a href="portfolio-single.php" class="nk-portfolio-item-link"></a> -->
                                <div class="nk-portfolio-item-image">
                                    <div style="background-image: url('images/project/portfolio-2-sm.jpg');"></div>
                                </div>
                                <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-center">
                                    <div>
                                        <h2 class="portfolio-item-title h3">Business Card</h2>
                                        <div class="portfolio-item-category">Branding</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-isotope-item" data-filter="Photography">
                            <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1" id="8" onclick="geturl(this.id)">
                                <!-- <a href="portfolio-single.php" class="nk-portfolio-item-link"></a> -->
                                <div class="nk-portfolio-item-image">
                                    <div style="background-image: url('images/project/portfolio-6-sm.jpg');"></div>
                                </div>
                                <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-center">
                                    <div>
                                        <h2 class="portfolio-item-title h3">Heja Stockholm</h2>
                                        <div class="portfolio-item-category">Photography</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-isotope-item" data-filter="Photography">
                            <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1" id="9" onclick="geturl(this.id)">
                                <!-- <a href="portfolio-single.php" class="nk-portfolio-item-link"></a> -->
                                <div class="nk-portfolio-item-image">
                                    <div style="background-image: url('images/project/portfolio-12-sm.jpg');"></div>
                                </div>
                                <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-center">
                                    <div>
                                        <h2 class="portfolio-item-title h3">Paper Bag</h2>
                                        <div class="portfolio-item-category">Photography</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="nk-gap-4"></div> -->
                </div>
            </div>
  </div>

<?php  require_once("includes/footer.php")?>
</div>

<script src="<?= $dir; ?>js/combined.js"></script>
<script type="text/javascript">
function geturl(file_name) {
    // alert(file_name);
    var cat_name = $(".nk-isotope-filter .active").text();
    // alert("Value in geturl fun = "+cat_name);
    window.location.href = "portfolio-single" + file_name + ".php?id=" + cat_name;
}
</script>

