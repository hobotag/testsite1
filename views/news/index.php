<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>The Web News</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="\testsite1\template\css\style.css" />
        <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="ie.css" /><![endif]-->
    </head>
    <body>
        <!-- BEGIN wrapper -->
        <div id="wrapper">
            <!-- BEGIN header -->
            <div id="header">
                <ul>
                    <li class="f"><a href="#">Home</a></li>
                    <li><a href="\testsite1\template\about.html">About Us</a></li>
                    <li><a href="\testsite1\template\page.html">Demo Page</a></li>
                    <li><a href="\testsite1\template\contact.html">Contact Page</a></li>
                </ul>
                <p class="links">Subscribe: <a href="#">Posts</a> | <a href="#">Comments</a> | <a href="#">Email</a> </p>
                <div class="break"></div>
                <div class="logo">
                    <h1><a href="#">The Web News</a></h1>
                    <p>Free CSS Template</p>
                </div>
                <div class="ad468x60"> <a href="#"><img src="\testsite1\template\images/ad468x60.gif" alt="" /></a> </div>
                <div class="break"></div>
                <ol>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Entertainment</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Pictures</a></li>
                    <li><a href="#">Videos</a></li>
                </ol>
                <div class="break"></div>
            </div>
            <!-- END header -->
            <!-- BEGIN content -->
            <div id="content">
                <!-- begin post -->
                
                
                <?php foreach ($newsList as $newsItem): ?>
                    <div class="post">
                        <div class="thumb"><a href="#"><img src="<?php echo $newsItem['preview'];?>" alt="" /></a></div>
                        <h2><a href="#"><?php echo $newsItem['title'];?></a></h2>
                        <p class="date">Posted on <?php echo $newsItem['date'];?> by <?php echo $newsItem['author_name'];?></p>
                        <p><?php echo $newsItem['short_content'];?></p>
                        <a class="continue" href="http://localhost/testsite1/index.php/news/<?php echo $newsItem['id'];?>">Continue Reading</a> </div>
                <?php endforeach; ?>
                <!-- end post -->


                <!-- begin post navigation -->
                <div class="postnav">
                    <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                    <div class="break"></div>
                </div>
                <!-- end post navigation -->
            </div>
            <!-- END content -->
            <!-- BEGIN sidebar -->
            <div id="sidebar">
                <!-- begin ads -->
                <div class="ads"> <a href="#"><img src="\testsite1\template\images/ad125x125.jpg" alt="" /></a> <a href="#"><img src="\testsite1\template\images/ad125x125.jpg" alt="" /></a> <a href="#"><img src="\testsite1\template\images/ad125x125.jpg" alt="" /></a> <a href="#"><img src="\testsite1\template\images/ad125x125.jpg" alt="" /></a> </div>
                <!-- end ads -->
                <!-- begin search -->
                <form class="search" action="#">
                    <input type="text" name="s" id="s" />
                    <button type="submit">Search</button>
                </form>
                <!-- end search -->
                <div class="wrapper">
                    <!-- begin popular posts -->
                    <h2>Popular Posts</h2>
                    <ul>
                        <li><a href="#">Make Money Online Creating Websites</a></li>
                        <li><a href="#">Top 100 Internet Marketing Tips</a></li>
                        <li><a href="#">Tutorial: How to add Videos in your Post</a></li>
                        <li><a href="#">Sample Post Unordered List</a></li>
                        <li><a href="#">Sample Post Blockquote</a></li>
                    </ul>
                    <!-- end popular posts -->
                    <!-- begin flickr photos -->
                    <h2>Flickr Photos</h2>
                    <div class="flickr"> <a href="#"><img src="\testsite1\template\images/_thumb3.jpg" alt="" /></a> <a href="#"><img src="\testsite1\template\images/_thumb4.jpg" alt="" /></a> <a href="#"><img src="\testsite1\template\images/_thumb5.jpg" alt="" /></a> <a href="#"><img src="\testsite1\template\images/_thumb6.jpg" alt="" /></a> <a href="#"><img src="\testsite1\template\images/_thumb7.jpg" alt="" /></a> <a href="#"><img src="\testsite1\template\images/_thumb8.jpg" alt="" /></a> </div>
                    <!-- end flickr photos -->
                    <!-- begin featured video -->
                    <h2>Featured Video</h2>
                    <div class="video"> <img src="\testsite1\template\images/_video.jpg" alt="" /> </div>
                    <!-- end featured video -->
                    <!-- begin tags -->
                    <h2>Tags</h2>
                    <div class="tags"> </div>
                    <!-- end tags -->
                    <!-- BEGIN left -->
                    <div class="l sbar">
                        <!-- begin categories -->
                        <h2>Categories</h2>
                        <ul>
                            <li><a href="#">Entertainment</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Internet</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Make Money</a></li>
                            <li><a href="#">Online</a></li>
                            <li><a href="#">Parenting</a></li>
                        </ul>
                        <!-- end categories -->
                        <!-- begin pages -->
                        <h2>Pages</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Archives</a></li>
                            <li><a href="#">Links</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                        <!-- end pages -->
                    </div>
                    <!-- END left -->
                    <!-- BEGIN right -->
                    <div class="r sbar">
                        <!-- begin archives -->
                        <h2>Archives</h2>
                        <ul>
                            <li><a href="#">August 2008</a></li>
                            <li><a href="#">July 2008</a></li>
                            <li><a href="#">June 2008</a></li>
                            <li><a href="#">May 2008</a></li>
                            <li><a href="#">April 2008</a></li>
                            <li><a href="#">March 2008</a></li>
                        </ul>
                        <!-- end archives -->
                        <!-- begin blogroll -->
                        <h2>Blogroll</h2>
                        <ul>
                            <li><a href="#">Carlos</a></li>
                            <li><a href="#">Digital Point Forum</a></li>
                            <li><a href="#">Eric's Photo Gallery</a></li>
                            <li><a href="#">Fashion Trends</a></li>
                            <li><a href="#">Google Scoreboard</a></li>
                            <li><a href="#">Marketing Forum</a></li>
                        </ul>
                        <!-- end blogroll -->
                        <!-- begin meta -->
                        <h2>Meta</h2>
                        <ul>
                            <li><a href="#">Login</a></li>
                        </ul>
                        <!-- end meta -->
                    </div>
                    <!-- END right -->
                </div>
            </div>
            <!-- END sidebar -->
            <!-- BEGIN footer -->
            <div id="footer">
                <p>Copyright &copy; 2009 - <a href="#">Website Name</a> &middot; All Rights Reserved</p>
                <p>Template by: <a href="http://www.wpthemedesigner.com/">WordPress Designer</a> | Get More <a href="#">Free CSS Templates</a></p>
            </div>
            <!-- END footer -->
        </div>
        <!-- END wrapper -->
    </body>
</html>