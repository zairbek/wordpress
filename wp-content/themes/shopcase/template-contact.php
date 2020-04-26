<?php
/**
 * Template name: Contact Template
 */

get_header();
?>


    <section class="content">


    <?php
    while ( have_posts() ) :
        the_post();
        ?>

        <div class="container">
            <div class="tcw-wrap">
                <div class="content-title"><?php the_title()?></div>
                <?php echo get_breadcrumbs();?>
            </div>
            <div class="c-wrap">
                <div class="c-content">
                    <?php the_content();?>
                    <div class="c-contact">
                        <span class="c-icon"><i class="fa fa-phone"></i></span>
                        <p>Phone:
                            <span><strong>8 800 346 10 79</strong></span>
                        </p>
                    </div>
                    <div class="c-contact">
                        <span class="c-icon"><i class="fa fa-globe"></i></span>
                        <p>Address:
                            <span><strong>France,</strong> Nancy, Rue de Serre 15</span>
                        </p>
                    </div>
                    <div class="c-contact">
                        <span class="c-icon"><i class="fa fa-envelope-o"></i></span>
                        <p>E-mail:
                            <span>mail@website.com</span>
                        </p>
                    </div>
                </div>
                <div class="c-form-w">
                    <h3>Contact form</h3>
                    <form>
                        <input type="text" id="name" placeholder="Name" />
                        <input type="text" id="email" placeholder="E-mail" />
                        <textarea rows="5" placeholder="Message"></textarea>
                        <div class="c-button"><button class="btn btn-book">send</button></div>
                    </form>
                </div>
            </div>
            <script src="https://maps.googleapis.com/maps/api/js"></script>
            <script>
                function initialize() {
                    var map_canvas = document.getElementById('map_canvas');
                    var map_options = {
                        center: new google.maps.LatLng(44.5403, -78.5463),
                        zoom: 8,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    }
                    var map = new google.maps.Map(map_canvas, map_options)
                }
                google.maps.event.addDomListener(window, 'load', initialize);
            </script>
            <div class="c-map">
                <div id="map_canvas"></div>
            </div>
        </div>
    <?php endwhile; ?>
    </section>


    <section class="bottom">
        <div class="container">
            <div class="bottom-nav">
                <ul>
                    <li><a href="#">Homepage</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Booking</a></li>
                    <li><a href="tour.html">Tour</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Hot deals</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="social">
                <a href="#" class="gp"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="tw"><i class="fa fa-twitter"></i></a>
                <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                <a href="#" class="ps"><i class="fa fa-pinterest"></i></a>
            </div>
        </div>
    </section>

<?php get_footer();?>