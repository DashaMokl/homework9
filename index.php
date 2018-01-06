<?php
$data = require 'data.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cantus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="http://allfont.ru/allfont.css?fonts=droid-sans" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="flexslider/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header>
    <div class="container">
        <nav>
            <ul class="menu">
                <?php
                foreach ($data['mainMenu'] as $menuItem) {
                    ?>
                    <li>
                        <a href="<?php echo $menuItem['url']; ?>"><?php echo $menuItem['title']; ?></a>
                    </li>
                <?php } ?>
            </ul>
            <a href="index.php" class="logo"><img src="<?php echo $data['siteLogo']; ?>" alt="Cantus"></a>
            <ul class="links">
                <?php
                foreach ($data['socialLinks'] as $mainLinks) {
                    ?>
                    <li>
                        <a href="<?php echo $mainLinks['url']; ?>"><i class="<?php echo $mainLinks['class']; ?>"
                                                                      aria-hidden="true"></i><?php echo $mainLinks['count']; ?>
                        </a>
                    </li>
                <?php } ?>
                <li>
                    <a href="<?php echo $data['buttonBuy']['url']; ?>"
                       class="button"><?php echo $data['buttonBuy']['title']; ?></a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<section class="main">
    <div class="flexslider">
        <ul class="slides">
            <?php
            foreach ($data['mainImages'] as $background) {
                ?>
                <li>
                    <img src="<?php echo $background['src']; ?>" alt="<?php echo $background['title']; ?>">
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="container">
        <h1><?php echo $data['mainTitle']['title1']; ?>
            <pre><?php echo $data['mainTitle']['subTitle']; ?></pre>
        </h1>
        <a href="<?php echo $data['buttonDiscover']['url']; ?>"><?php echo $data['buttonDiscover']['title']; ?></a>
    </div>
</section>
<section class="introduction">
    <div class="container">
        <h3><?php echo $data['secondaryTitle1']['title1']; ?>
            <pre class="subhead"><?php echo $data['secondaryTitle1']['subTitle1']; ?></pre>
        </h3>
        <div class="the-arrows custom-navigation">
            <?php
            foreach ($data['theArrows1'] as $arrow1) {
                ?>
                <a href="<?php echo $arrow1['url']; ?>" class="<?php echo $arrow1['class']; ?>"><i
                            class="<?php echo $arrow1['class2']; ?>" aria-hidden="true"></i></a>
            <?php } ?>
        </div>
        <div class="flexslider2">
            <ul class="slides">
                <li>
                    <div class="singers">
                        <div class="three-singers">
                            <img src="images/jonesmith.png" alt="Jone Smith">
                            <div class="singers-contacts">
                                <h5><?php echo $data['theFirstSinger']['name']; ?></h5>
                                <p><?php echo $data['theFirstSinger']['participation']; ?></p>
                                <ul class="shares">
                                    <?php
                                    foreach ($data['socialLinks2'] as $socialLink2) {
                                        ?>
                                        <li class="shares-item">
                                            <a href="<?php echo $socialLink2['url']; ?>"><i
                                                        class="<?php echo $socialLink2['class']; ?>"></i><span><?php echo $socialLink2['count']; ?></span></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="three-singers">
                            <img src="images/rendiauthor.png" alt="Rendi Outhor">
                            <div class="singers-contacts">
                                <h5><?php echo $data['theSecondSinger']['name1']; ?></h5>
                                <p><?php echo $data['theSecondSinger']['participation1']; ?></p>
                                <ul class="shares">
                                    <?php
                                    foreach ($data['socialLinks2'] as $socialLink2) {
                                        ?>
                                        <li class="shares-item">
                                            <a href="<?php echo $socialLink2['url']; ?>"><i
                                                        class="<?php echo $socialLink2['class']; ?>"></i><span><?php echo $socialLink2['count']; ?></span></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="three-singers">
                            <img src="images/renesodim.png" alt="Renes Odim">
                            <div class="singers-contacts">
                                <h5><?php echo $data['theThirdSinger']['name2']; ?></h5>
                                <p><?php echo $data['theThirdSinger']['participation2']; ?></p>
                                <ul class="shares">
                                    <?php
                                    foreach ($data['socialLinks2'] as $socialLink2) {
                                        ?>
                                        <li class="shares-item">
                                            <a href="<?php echo $socialLink2['url']; ?>"><i
                                                        class="<?php echo $socialLink2['class']; ?>"></i><span><?php echo $socialLink2['count']; ?></span></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="singers">
                        <div class="three-singers">
                            <img src="images/jonesmith.png" alt="Jone Smith">
                            <div class="singers-contacts">
                                <h5><?php echo $data['theFirstSinger']['name']; ?></h5>
                                <p><?php echo $data['theFirstSinger']['participation']; ?></p>
                                <ul class="shares">
                                    <?php
                                    foreach ($data['socialLinks2'] as $socialLink2) {
                                        ?>
                                        <li class="shares-item">
                                            <a href="<?php echo $socialLink2['url']; ?>"><i
                                                        class="<?php echo $socialLink2['class']; ?>"></i><span><?php echo $socialLink2['count']; ?></span></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="three-singers">
                            <img src="images/rendiauthor.png" alt="Rendi Outhor">
                            <div class="singers-contacts">
                                <h5><?php echo $data['theSecondSinger']['name1']; ?></h5>
                                <p><?php echo $data['theSecondSinger']['participation1']; ?></p>
                                <ul class="shares">
                                    <?php
                                    foreach ($data['socialLinks2'] as $socialLink2) {
                                        ?>
                                        <li class="shares-item">
                                            <a href="<?php echo $socialLink2['url']; ?>"><i
                                                        class="<?php echo $socialLink2['class']; ?>"></i><span><?php echo $socialLink2['count']; ?></span></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="three-singers">
                            <img src="images/renesodim.png" alt="Renes Odim">
                            <div class="singers-contacts">
                                <h5><?php echo $data['theThirdSinger']['name2']; ?></h5>
                                <p><?php echo $data['theThirdSinger']['participation2']; ?></p>
                                <ul class="shares">
                                    <?php
                                    foreach ($data['socialLinks2'] as $socialLink2) {
                                        ?>
                                        <li class="shares-item">
                                            <a href="<?php echo $socialLink2['url']; ?>"><i
                                                        class="<?php echo $socialLink2['class']; ?>"></i><span><?php echo $socialLink2['count']; ?></span></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="singers">
                        <div class="three-singers">
                            <img src="images/jonesmith.png" alt="Jone Smith">
                            <div class="singers-contacts">
                                <h5><?php echo $data['theFirstSinger']['name']; ?></h5>
                                <p><?php echo $data['theFirstSinger']['participation']; ?></p>
                                <ul class="shares">
                                    <?php
                                    foreach ($data['socialLinks2'] as $socialLink2) {
                                        ?>
                                        <li class="shares-item">
                                            <a href="<?php echo $socialLink2['url']; ?>"><i
                                                        class="<?php echo $socialLink2['class']; ?>"></i><span><?php echo $socialLink2['count']; ?></span></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="three-singers">
                            <img src="images/rendiauthor.png" alt="Rendi Outhor">
                            <div class="singers-contacts">
                                <h5><?php echo $data['theSecondSinger']['name1']; ?></h5>
                                <p><?php echo $data['theSecondSinger']['participation1']; ?></p>
                                <ul class="shares">
                                    <?php
                                    foreach ($data['socialLinks2'] as $socialLink2) {
                                        ?>
                                        <li class="shares-item">
                                            <a href="<?php echo $socialLink2['url']; ?>"><i
                                                        class="<?php echo $socialLink2['class']; ?>"></i><span><?php echo $socialLink2['count']; ?></span></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="three-singers">
                            <img src="images/renesodim.png" alt="Renes Odim">
                            <div class="singers-contacts">
                                <h5><?php echo $data['theThirdSinger']['name2']; ?></h5>
                                <p><?php echo $data['theThirdSinger']['participation2']; ?></p>
                                <ul class="shares">
                                    <?php
                                    foreach ($data['socialLinks2'] as $socialLink2) {
                                        ?>
                                        <li class="shares-item">
                                            <a href="<?php echo $socialLink2['url']; ?>"><i
                                                        class="<?php echo $socialLink2['class']; ?>"></i><span><?php echo $socialLink2['count']; ?></span></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="concert">
    <div class="container">
        <aside class="video clearfix">
            <ul>
                <li>
                    <h3><?php echo $data['secondaryTitle2']['title2']; ?>
                        <pre class="subhead"><?php echo $data['secondaryTitle2']['subTitle2']; ?></pre>
                    </h3>
                </li>
                <div class="the-arrows custom-navigation2">
                    <?php
                    foreach ($data['theArrows1'] as $arrow1) {
                        ?>
                        <a href="<?php echo $arrow1['url']; ?>" class="<?php echo $arrow1['class']; ?>"><i
                                    class="<?php echo $arrow1['class2']; ?>" aria-hidden="true"></i></a>
                    <?php } ?>
                </div>
                <div class="flexslider3">
                    <ul class="slides">
                        <?php
                        foreach ($data['slidesVideo'] as $video) {
                            ?>
                            <li>
                                <iframe width="<?php echo $video['width']; ?>" height="<?php echo $video['height']; ?>"
                                        src="<?php echo $video['src']; ?>"
                                        frameborder="0" gesture="media" allow="encrypted-media"
                                        allowfullscreen></iframe>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </ul>
        </aside>
        <div>
            <ul>
                <li>
                    <h3><?php echo $data['secondaryTitle3']['title3']; ?>
                        <pre class="subhead"><?php echo $data['secondaryTitle3']['subTitle3']; ?></pre>
                    </h3>
                </li>
                <li><img src="<?php echo $data['imageConcert']; ?>" alt="Texas Rock Music"></li>
            </ul>
            <ul class="details">
                <li><h5><?php echo $data['titleOfDetails']; ?></h5></li>
                <?php
                foreach ($data['listOfDetails'] as $detail) {
                    ?>
                    <li class="<?php echo $detail['class']; ?>"><?php echo $detail['title']; ?></li>
                <?php } ?>
                <li class="<?php echo $data['buttonPurchase']['class']; ?>"><a
                            href="<?php echo $data['buttonPurchase']['url']; ?>"><?php echo $data['buttonPurchase']['title']; ?></a>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="founder">
    <div class="container">
        <h2><?php echo $data['founder']['title']; ?></h2>
        <p><?php echo $data['founder']['year']; ?>
            <span><?php echo $data['founder']['span']; ?></span> <?php echo $data['founder']['paragraph']; ?></p>
        <a href="<?php echo $data['buttonLearn']['url']; ?>"
           data-popup-open="<?php echo $data['buttonLearn']['class']; ?>"><?php echo $data['buttonLearn']['title']; ?></a>
    </div>
    <div class="popup" data-popup="popup-1">
        <div class="popup-inner">
            <h2><?php echo $data['popup']['title']; ?></h2>
            <p><?php echo $data['popup']['paragraph']; ?></p>
            <a data-popup-close="<?php echo $data['buttonClose']['class']; ?>"
               href="<?php echo $data['buttonClose']['url']; ?>"><?php echo $data['buttonClose']['title']; ?></a>
        </div>
    </div>
</section>
<section class="songs-and-inst">
    <div class="container">
        <aside class="instagram clearfix">
            <h3><?php echo $data['secondaryTitle4']['title4']; ?>
                <pre class="subhead"><?php echo $data['secondaryTitle4']['subTitle4']; ?></pre>
            </h3>
            <ul>
                <?php
                foreach ($data['photoAttribute'] as $photos) {
                    ?>
                    <li class="<?php echo $photos['class']; ?>"><a href="<?php echo $photos['url']; ?>"><img
                                    src="<?php echo $photos['src']; ?>" alt="<?php echo $photos['title']; ?>"></a></li>
                <?php } ?>
            </ul>
        </aside>
        <div class="popular-songs">
            <h3><?php echo $data['secondaryTitle5']['title5']; ?>
                <pre class="subhead"><?php echo $data['secondaryTitle5']['subTitle5']; ?></pre>
            </h3>
            <iframe width="100%" height="166" scrolling="no" frameborder="no"
                    src="<?php echo $data['soundCloud']; ?>"></iframe>
            <ul>
                <?php
                foreach ($data['listOfMusic'] as $item1) {
                    ?>
                    <li><?php echo $item1['title']; ?></li>
                <?php } ?>
            </ul>
            <ul>
                <?php
                foreach ($data['listOfMusic2'] as $item2) {
                    ?>
                    <li><?php echo $item2['title']; ?></li>
                <?php } ?>
            </ul>
            <ul>
                <?php
                foreach ($data['listOfMusic3'] as $item3) {
                    ?>
                    <li><?php echo $item3['title']; ?></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>
<section class="downloads">
    <div class="container">
        <h2><?php echo $data['downloading']['title']; ?></h2>
        <p><?php echo $data['downloading']['paragraph']; ?></p>
        <ul>
            <?php
            foreach ($data['buttons'] as $button) {
                ?>
                <li class="<?php echo $button['class']; ?>"><a href="<?php echo $button['url']; ?>"><img
                                src="<?php echo $button['src']; ?>" alt="<?php echo $button['title']; ?>"></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>
<div class="subscription">
    <div class="container">
        <form action="#" name="registration" method="post">
            <ul class="sign-up">
                <?php
                foreach ($data['signUp'] as $signUp1) {
                    ?>
                    <input type="<?php echo $signUp1['type']; ?>" name="<?php echo $signUp1['name']; ?>"
                           id="<?php echo $signUp1['id']; ?>" value="<?php echo $signUp1['title']; ?>">
                <?php } ?>
            </ul>
        </form>
    </div>
</div>
<footer>
    <div class="container">
        <ul class="second_menu">
            <?php
            foreach ($data['mainMenu'] as $menuItem) {
                ?>
                <li>
                    <a href="<?php echo $menuItem['url']; ?>"><?php echo $menuItem['title']; ?></a>
                </li>
            <?php } ?>
        </ul>
        <p><?php echo $data['copyright']; ?>
            <span><?php echo $data['span']; ?></span> <?php echo $data['copyright2']; ?>
        </p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="flexslider/jquery.flexslider.js"></script>
<script src="js/main.js"></script>
</body>
</html>