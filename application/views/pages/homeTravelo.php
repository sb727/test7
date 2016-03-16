<body>
<header>
    <div class="container">
        <div class="row">
            
			<nav class="navbar navbar-inverse">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand " href="#"><img src="<?php echo $root_url;?>/assets/images/logo.png"></a>
					</div>
					<div class="collapse navbar-collapse top-menu" id="myNavbar">
						<ul>
							<li><a class="menu" href="#">HOME</a></li>
							<li><a class="menu" href="#">SLIDERS</a></li>
							<li><a class="menu" href="#">HOTELS</a></li>
							<li><a class="menu" href="#">CARS</a></li>
							<li><a class="menu" href="#">CRUISES</a></li>
							<li><a class="menu" href="#">PAGES</a></li>
							<li><a class="menu" href="#">SHORTCODERS</a></li>
						</ul>
					</div>
				</div>
			</nav>

        </div>
    </div>
</header>
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Let's <b><i>Dicover</i></b> the world together!</p>
            </div>
        </div>
    </div>
</div>

<div class="main-content">

    <section class="content-1">
        <?php echo form_open('Travelo/login');?>
            <div class="container">
                <div class="content-menu">
                    <span>Hotels</span>
                </div>
                <div class="row">
                    <div class="col-md-3" >
                        <h4>Where</h4>
                        <span >YOUR DESTINATION</span>
                        <input type="text" placeholder="enter a destination and hotel" class="full-width input-text" name="location" id="location">
                    </div>
                    <div class="col-md-4" >
                        <h4>When</h4>
                        <div class="row">
                            <div class="col-xs-6" >
                                <span >CHECK IN</span>
                                <input type="text" placeholder="mm/dd/yy" class="full-width input-text" id ="check-in">
                            </div>
                            <div class="col-xs-6" >
                                <span >CHECK OUT</span>
                                <input type="text" placeholder="mm/dd/yy" class="full-width input-text" id ="check-out">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3" >
                        <h4>Who</h4>
                        <div class="row">
                            <div class="col-xs-4" >
                                <span >ROOMS</span>
                                <select class="full-width">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="col-xs-4" >
                                <span >ADULTS</span>
                                <select class="full-width">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="col-xs-4" >
                                <span >KIDS</span>
                                <select class="full-width">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2" >
                        <span>&nbsp;</span>
                        <!--submit using php
                        <input type="submit" class="btn search-btn full-width" value="Search Now">-->
                        <button type="button" class="btn btn-success search-btn full-width active">Search Now</button>
                    </div>

                </div>
            </div>
        <?php echo form_close();?>
    </section>
    <section class="content-2">
        <div class="container">
            <h3>Popular Destinations</h3>
            <div class="row">
                
                <?php
				/*print_r($hotels);*/
				
                if (isset($hotels) ) {
                        foreach ($hotels as $hotel) {
                            echo '<div class="col-md-3" >
                                    <a href="detail/'.$hotel['idx'].'" target="_blank"><img src="'.$root_url.'assets/images/gallery' . $hotel['idx'] . '.png" class="gallery-thumb"></a>
                                    <div class="detail" >
                                        <h4>' . $hotel['title'] . '</h4>
                                        <span>' . $hotel['location'] . '</span>
                                    </div>
                                </div>';
                        }
                    }
                    else echo "&nbsp;&nbsp;&nbsp;&nbsp;<strong>sorry! There isn't search result</strong>";

                ?>
            </div>
        </div>
    </section>
    <section class="content-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3" >
                    <h3>Discover</h3>

                    <div class="row ">
                        <div class="col-xs-6 font" >
                            <ul>
                                <li>
                                    <a href="#">Safty</a>
                                </li>
                                <li>
                                    <a href="#">Travelo Picks</a>
                                </li>
                                <li>
                                    <a href="#">Mobile</a>
                                </li>
                                <li>
                                    <a href="#">Why Host</a>
                                </li>
                                <li>
                                    <a href="#">Social Connect</a>
                                </li>
                                <li>
                                    <a href="#">Site Map</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-6 font" >
                            <ul>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Latest Jobs</a>
                                </li>
                                <li>
                                    <a href="#">Press Releases</a>
                                </li>
                                <li>
                                    <a href="#">Blog Posts</a>
                                </li>
                                <li>
                                    <a href="#">Help Topics</a>
                                </li>
                                <li>
                                    <a href="#">Polices</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-3" >
                    <h3>Travel News</h3>
                    <div class="detail-news" >
                        <div class="news-icon" >
                            <img src="<?php echo $root_url;?>/assets/images/news1.png">
                        </div>
                        <div class="news-desc" >
                            <p class="news-desc-blu">Amazing Places</p>
                            <p>Purus ac congue arcu cursus ut
                                vitae pulvinar masship</p>
                            <p class="news-desc-date">24 Sep, 2013</p>
                        </div>
                    </div>
                    <div class="detail-news" >
                        <div class="news-icon" >
                            <img src="<?php echo $root_url;?>/assets/images/news2.png">
                        </div>
                        <div class="news-desc" >
                            <p class="news-desc-blu">Amazing Places</p>
                            <p>Purus ac congue arcu cursus ut
                                vitae pulvinar masship</p>
                            <p class="news-desc-date">25 Sep, 2013</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" >
                    <h3>Mailing List</h3>
                    <p>Sign up for our mailing list to get latest updates <br>
                        and offers.</p>
                </div>
                <div class="col-md-3" >
                    <h3>About Travel</h3>
                    <p>Nunccursus libero purus ac congue arcu cursus
                        ut set vitae pulvinar massaidp nequetiam lore
                        elerisque.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5" >
                <a href="#"><img src="<?php echo $root_url;?>/assets/images/logo.png"></a>
            </div>
            <div class="col-md-2 mark-right">
                <p class="mark-right">© 2014 Travelo&nbsp;&nbsp;&nbsp;<a class="glyphicon glyphicon-arrow-up"></a></p>
            </div>
        </div>
    </div>
</div>