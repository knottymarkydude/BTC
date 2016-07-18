<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gallery</title>
        <?php include '../common/css.php'; ?>
    </head>
    <body>
        <!-- Wrapper Start -->
        <div id="wrapper" class="container-fluid">
            <!-- Header -->
            <div class="ie-dropdown-fix" >
                <!-- Header -->
                <?php include '../common/header.php'; ?>
                <!-- Navigation -->
                <?php include '../common/navbar.php'; ?>
                <div class="nav-shadow"></div>
                <div class="clear"></div>

            </div>
            <!-- Navigation / End -->
            <!-- Content -->
            <div class="panel panel-body">
               
                <div class="col-md-3">
                    <div class="picture">
                    <a data-flickr-embed="true"  href="https://www.flickr.com/photos/markymarkdude/albums/72157667897069752" title="Grantham Sprint Tri 2016">
                        <img src="https://farm8.staticflickr.com/7534/26291138563_8b9eb07b1b.jpg" width="500" height="332" alt="Grantham Sprint Tri 2016"></a>
                        <script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
                    </div>
                    <div class="item-description">
                        <h5><a href="#">Grantham Tri 2016</a></h5>
                        <p>Club Sprint Tri.</p>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="picture">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/gallery-09.jpg"  title="Belvoir Tri Club">
                            <img src="../images/gallery/small/gallery-09.jpg" alt=""/>
                            <div class="image-overlay-zoom">
                            </div>
                        </a>            
                    </div>
                    <div class="item-description">
                        <h5><a href="#">Tri Club Photo shoot</a></h5>
                        <p>Photo shoot 2015, for the GB qualifiers.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="picture">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/gallery-10.jpg" title="Cambridge Half Marathon">
                            <img src="../images/gallery/small/gallery-10.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Cambridge Half Marathon</a></h5>
                        <p>Participants in 2016</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="picture">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/gallery-11.jpg" title="Tim">
                            <img src="../images/gallery/small/gallery-11.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Tim Dancing</a></h5>
                        <p>Warm up for track session.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="picture">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/gallery-12.jpg" title="Mountain Bikes">
                            <img src="../images/gallery/small/gallery-12.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Mountain Bikes</a></h5>
                        <p>An outing on bikes with wide tyres.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="picture">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/gallery-01.jpg" title="Open Water Masterclass">
                            <img src="../images/gallery/small/gallery-01.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Open Water</a></h5>
                        <p>Masterclass at Activities Away</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="picture">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/gallery-02.jpg" title="Squidge and Blake">
                            <img src="../images/gallery/small/gallery-02.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Squidge and Blake</a></h5>
                        <p>After the Stathern Duathlon 2016</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="picture">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/gallery-04.jpg" title="Neil Baldwin">
                            <img src="../images/gallery/small/gallery-04.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Neil Baldwin</a></h5>
                        <p>Stathern Duathlon 2016</p>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="picture">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/gallery-05.jpg" title="parkrun ">
                            <img src="../images/gallery/small/gallery-05.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Christmas Parkrun</a></h5>
                        <p>Boxing day parkrun 2015</p>
                    </div>
                </div>
                
            </div>
            <!-- End Content -->
            <!-- Footer   -->
            <?php include '../common/footer.php'; ?>
            <!-- Footer / End -->
        </div>
        <!-- Wrapper / End -->

        <!-- Javascript -->
        <?php include '../common/js.php'; ?>
        <script type="text/javascript">
            $(document).ready(function () {
                var str = location.href.toLowerCase();
                $('#nav li a').each(function () {
                    if (str.indexOf(this.href.toLowerCase()) > -1) {
                        $(this).addClass("active");
                    }
                });
                $(".fancybox").fancybox();
            });
            
            
	
		
        </script>
    </body>
</html>