<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Gonerby Tuff Off Road Duathlon</title>
        <?php include '../../common/css.php'; ?>

    </head>
    <body>
        <!-- Wrapper Start -->
        <div id="wrapper" class="container-fluid">
            <!-- Header -->
            <div class="ie-dropdown-fix" >
                <!-- Header -->
                <?php include '../../common/header.php'; ?>
                <!-- Navigation -->
                <?php include '../../common/navbar.php'; ?>
                <div class="nav-shadow"></div>
                <div class="clear"></div>
            </div>
            <!-- Navigation / End -->
            <!-- Content -->

            <div class="row-fluid " >
                <div class="span10">

                    <h3>CANCELLED</h3>
                    <p>Apologies to all that entered, the Gonerby Tuff has been cancelled due to 
                    unforseen circumstances. </p>
                    
                    <!--<div class="headline"><a id="gt"><h4>Gonerby Tuff - Off Road Duathlon</h4></a></div>

                    <div class="margintop">
                        <ul id="btc-tabs" class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                            <li class=""><a href="#course" data-toggle="tab">Course</a></li>
                            <li class=""><a href="#entry" data-toggle="tab">Entry</a></li>
                            <li class=""><a href="#info" data-toggle="tab">Information</a></li>
                            <li class=""><a href="#results" data-toggle="tab">Results</a></li>
                        </ul>

                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <div class="well">
                                    <p><button id="enter-tuff1" class="btn btn-sm btn-success enter-tuff">Enter online now</button></p>
                                    
                                    <h4>Race HQ</h4>
                                    Belton Lane, <br/>
                                    Great Gonerby, <br/>
                                    Grantham, <br/>
                                    Lincs, <br/>
                                    NG31 8PP<br/>
                                    (Opposite Playing Field)<br/>
                                </div>
                                <div class="span6 portfolio-item">
                                    <div class="hero-unit margintop">
                                        <div>
                                            <h4>Race starts on 5pm on Saturday July 8th 2017</h4>
                                        </div>
                                        <div>
                                            <p>A challenging off road duathlon featuring some 
                                                tough hills and spectacular views. </p>

                                            <p>All abilities are very welcome.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active in" id="course">
                                <div class="well">
                                    <div class="hero-unit margintop">
                                        <h4>THE COURSE</h4>
                                        Run 1  -   2 mile trail run<br/>
                                        Bike   -   6 miles (3 laps) of a very challenging 2 mile MTB course  <br/>
                                        Run 2  -   Repeat of 2 mile trail run<br/>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade active in" id="entry">
                                <div class="well">
                                    <div class="hero-unit margintop">
                                        <p>ENTRANCE FEE £10 in advance, £12 on the day including FREE beer or soft 
                                            drink and burger or hot dog.
                                        </p>
                                        <p><button id="enter-tuff2" class="btn btn-sm btn-success enter-tuff">Enter</button></p>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade active in" id="info">    
                                <div class="well">
                                    <div class="hero-unit margintop">
                                        <ul>
                                            <li>BBQ and Bonfire afterwards</li>
                                            <li>Ample free parking</li>
                                            <li>Dogs welcome but must remain 
                                                on a lead at all times</li>
                                        </ul>                               
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active in" id="results">

                                <div class="well">
                                    <a href="../../docs/club/gonerbytuff/Results 2016.pdf">Results 2016</a>
                                </div>
                            </div>
                        </div>
                    </div>-->

                </div>
            </div>

            <!-- Footer   -->
            <?php include '../../common/footer.php'; ?>
            <!-- Footer / End --> 
        </div>
        <!-- Wrapper / End -->
        <!-- Javascript -->
        <?php include '../../common/js.php'; ?>
        <script type="text/javascript">
            $(document).ready(function () {
                var str = location.href.toLowerCase();
                $('#nav li a').each(function () {
                    if (str.indexOf(this.href.toLowerCase()) > -1) {
                        $(this).addClass("active");
                    }
                });
                $("#events").addClass("active");
                
                $('.enter-tuff').click(function () {
                    window.location = 'https://www.entrycentral.com/Gonerby-Tuff-Off-Road-Duathlon';
                });
            });
        </script>
    </body>
</html>