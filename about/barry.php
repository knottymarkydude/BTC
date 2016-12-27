<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Barry the Beaver - Belvoir Tri Club</title>
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
                <h1>The Story of Barry The Beaver</h1>
                <div class="entry-content">
                    <img class="img-thumbnail" src="../images/members/Barry.jpg" align="right" alt="Barry">
                    
                    <p>Once upon a time, in North America, there lived a beaver. He lived in a beautiful wooded area, alongside a riverbank with 
                        his parents. The beaver had an enriched childhood, surrounded by his beaver siblings and loving parents. His days were 
                        filled with playful games in the water, rivers dashes with his younger siblings and scrambling races through the forest 
                        with the elder siblings.
                    </p><p>
                        His lodge was beautiful and ludicrous and the larder was always plentifully stocked with delicious pondweed, water lilies 
                        and the woods of maple, cherry, birch and his favourite cottonwood.
                    </p><p>
                        One day, he was lazily chewing on the bark of a quaking aspen to keep his fine incisors in gleaming condition while keeping 
                        a watchful eye on the construction of the latest dam, the silence was suddenly shattered by the deafening rumbles of something 
                        fearfully large and menacing.
                    </p><p>
                        Darting to the safety of the lodge the beaver quakes in fear. Waiting anxiously for his family, who had been working at the 
                        other side of the river and so much further from safety, the beaver heard the voices of humans. He had heard of humans from his beaver parents – how they clear forests of trees with their machines and ruin the homes of beaver families. Crouching low into the shadows he listened.
                    </p><p>
                        The humans were chuckling and laughing. They didn’t sound fierce and unkind.
                    </p><p>
                        Uncertainty filled the beaver.
                    </p><p>
                        Days passed and his family did not reappear. The beaver grew lonely and desperate to play. Upon hearing the laughter of the 
                        humans again, he ventured outside. The humans were playfully skimming stones across the river and splashing merrily in their 
                        games. The beaver, being a playful, social chap, could not resist the urge to play. Dashing with the speed of athletes he 
                        chased out across to the river, diving in and swimming masterfully across to retrieve the stone. Returning to the humans, 
                        his big brown eyes were windows to his soul. The humans recognised a soulmate in the creature and they all began to play.
                    </p><p>
                        The humans showed the beaver, whom they named Barry because humans like alliteration, their mountain bikes. Barry was impressed. 
                        Barry showed the humans how to swim strong. The humans were impressed.
                        And so the days ambled along most satisfactorily with swims, runs and bike rides.
                        But alas, the humans holiday swiftly passed and their departure date arrived. Hire bikes were returned sorrowfully as both the 
                        humans and Barry contemplated life without each other. Barry had had his eyes opened. He needed to swim bike and run with his 
                        friends. He wanted to live in a colony of like-minded friends. And the humans, they too had experienced a new way of living 
                        that they could not ignore. A life of swimming, cycling and running.
                    </p><p>
                        And so Barry became the first beaver to travel to England. To reside in a colony of friends in a town called Grantham, 
                        closely nestled to a place called Belvoir.
                        Word spread about this colony. These amazing friends who swim, bike and run together. This, they discovered, is called ‘Triathlon’ 
                        which is, so I’m told, is Latin for ‘When one sport is not enough’. The friends called each ‘Beavers’ with great affection for Barry, 
                        who brought them and the sport of triathlon together.
                    </p><p>
                        And their colony is named the Belvoir Tri Club. The Mighty Belvoir Tri Club.
                    </p>
                </div>
            </div>
            <!-- Wrapper / End -->

            <!-- Footer   -->
            <?php include '../common/footer.php'; ?>
            <!-- Footer / End -->


        </div> <!-- /container -->



        <!-- Javascript -->
        <?php include '../common/js.php'; ?>
        <script type="text/javascript">
            $(document).ready(function () {
                var str = location.href.toLowerCase();
                console.log(str);
                $('#nav li a').each(function () {
                    if (str.indexOf(this.href.toLowerCase()) > -1) {
                        $(this).addClass("active");
                    }
                });
                $("#about").addClass("active");
            });
        </script>
    </body>
</html>