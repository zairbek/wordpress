<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shopcase
 */

global $shopcase_redux;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!--    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <?php
    if( is_front_page() ):
    ?>
        <section class="top">
            <div class="slider">
                <ul id="cbp-bislideshow" class="cbp-bislideshow">
                    <li>
                        <img src="<?php echo get_template_directory_uri();?>/images/slider-1.jpg" alt="image01" />
                        <div class="caption">
                            <p class="cap-title">Contrary to popular belief
                                <span>LIpsum is not simply text</span>
                            </p>
                            <div class="slider-ship">
                                <img src="<?php echo get_template_directory_uri();?>/images/slider-ship.png" alt="" />
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri();?>/images/slider-2.jpg" alt="image02"/>
                        <div class="caption">
                            <p class="cap-title">Contrary to popular belief
                                <span>LIpsum is not simply text</span>
                            </p>
                            <div class="slider-ship">
                                <img src="<?php echo get_template_directory_uri();?>/images/slider-ship.png" alt="" />
                            </div>
                        </div>
                    </li>
                </ul>
                <div id="cbp-bicontrols" class="cbp-bicontrols">
                    <span class="cbp-biprev"></span>
                    <span class="cbp-bipause"></span>
                    <span class="cbp-binext"></span>
                </div>

            </div>
            <header class="home">
                <div class="container">
                    <div class="line-top">
                        <div class="wither-w">
                            <span class="cloud"><img src="<?php echo get_template_directory_uri();?>/images/cloud.png" alt="" /></span>
                            <span>18°c</span>
                            <div class="city-wrap"><a href="javascript:void(0)" class="w-select">London <i class="fa fa-angle-down"></i></a>
                                <div class="city-drop">
                                    <a href="#">Paris</a>
                                    <a href="#">Kopengagen</a>
                                    <a href="#">Berlin</a>
                                </div>
                            </div>
                        </div>
                        <div class="logo">
                            <a href="<?php echo home_url('/')?>">
                                <?php if( !empty( $shopcase_redux['shopcase-logo']['url'] ) ):?>
                                    <img src="<?php echo esc_url( $shopcase_redux['shopcase-logo']['url'] ) ?>" alt="" />
                                <?php endif;?>
                            </a>
                        </div>
                        <div class="contacts">
                            <?php if( !empty( $shopcase_redux['header-phone'] ) ):?><span><i class="fa fa-mobile"></i><?php echo esc_attr( $shopcase_redux['header-phone']) ?></span><?php endif;?>
                            <?php if( !empty( $shopcase_redux['header-email'] ) ):?><span><i class="fa fa-envelope"></i><?php echo esc_attr( $shopcase_redux['header-email']) ?></span><?php endif;?>
                        </div>
                    </div>
                    <nav class="main-nav in">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'main_menu',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'nav-menu',
                                'container'      => 'ul',
                                'container_id'      => ''
                            )
                        );?>
                        <div class="search">
                            <form action="<?php echo home_url('/');?>" class="search-form">
                                <input type="text" name="s" id="search-input" placeholder="Keywords"/>
                                <button class="btn-search"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </nav>
                </div>
                <div class="q-search">
                    <div class="container">
                        <div class="q-search-wrap">
                            <form method="post" action="<?php echo home_url('/deals')?>">
                                <select id="location" name="location">
                                    <option value="">Choose</option>
                                    <?php
                                    $filter_location = get_terms('location');
                                    foreach(  $filter_location as $location ):
                                    ?>
                                        <option value="<?php echo $location->slug;?>"><?php echo $location->name;?></option>
                                    <?php endforeach; ?>
                                </select>
                                <select id="type" name="type">
                                    <option value="">Choose</option>
                                    <?php
                                    $filter_type = get_terms('type');
                                    foreach(  $filter_type as $type ):
                                        ?>
                                        <option value="<?php echo $type->slug;?>"><?php echo $type->name;?></option>
                                    <?php endforeach; ?>
                                </select>
                                <select id="coast" name="price">
                                    <option value="">Choose</option>
                                    <?php
                                    $filter_price = get_terms('price');
                                    foreach(  $filter_price as $price ):
                                        ?>
                                        <option value="<?php echo $price->slug;?>"><?php echo $price->name;?></option>
                                    <?php endforeach; ?>
                                </select>
                                <button class="btn btn-yellow">quick Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
        </section>


    <?php
    else:
    ?>
        <section>

            <?php
            if( is_front_page() ):
            ?>


                <div class="slider">
                    <!--<div class="flexslider">
                        <ul class="slides">
                            <li>
                            <img src="images/slider-1.jpg" />
                            </li>
                            <li>
                            <img src="images/slider-2.jpg" />
                            </li>

                        </ul>
                    </div>-->
                    <ul id="cbp-bislideshow" class="cbp-bislideshow">
                        <li>
                            <img src="<?php echo get_template_directory_uri();?>/images/slider-1.jpg" alt="image01" />
                            <div class="caption">
                                <p class="cap-title">Contrary to popular belief
                                    <span>LIpsum is not simply text</span>
                                </p>
                                <div class="slider-ship">
                                    <img src="<?php echo get_template_directory_uri();?>/images/slider-ship.png" alt="" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri();?>/images/slider-2.jpg" alt="image02"/>
                            <div class="caption">
                                <p class="cap-title">Contrary to popular belief
                                    <span>LIpsum is not simply text</span>
                                </p>
                                <div class="slider-ship">
                                    <img src="<?php echo get_template_directory_uri();?>/images/slider-ship.png" alt="" />
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div id="cbp-bicontrols" class="cbp-bicontrols">
                        <span class="cbp-biprev"></span>
                        <span class="cbp-bipause"></span>
                        <span class="cbp-binext"></span>
                    </div>

                </div>

            <?php
            endif;
            ?>

            <header class="inner">
                <div class="container">
                    <div class="line-top">
                        <div class="wither-w">
                            <span class="cloud">
                                <img src="<?php echo get_template_directory_uri();?>/images/cloud.png" alt="" />
                            </span>
                            <span>18°c</span>
                            <div class="city-wrap"><a href="javascript:void(0)" class="w-select">London <i class="fa fa-angle-down"></i></a>
                                <div class="city-drop">
                                    <a href="#">Paris</a>
                                    <a href="#">Kopengagen</a>
                                    <a href="#">Berlin</a>
                                </div>
                            </div>
                        </div>
                        <div class="logo">
                            <a href="<?php echo home_url('/')?>">
                                <?php if( !empty( $shopcase_redux['shopcase-logo']['url'] ) ):?>
                                    <img src="<?php echo esc_url( $shopcase_redux['shopcase-logo']['url'] ) ?>" alt="" />
                                <?php endif;?>
                            </a>
                        </div>
                        <div class="contacts">
                            <?php if( !empty( $shopcase_redux['header-phone'] ) ):?><span><i class="fa fa-mobile"></i><?php echo esc_attr( $shopcase_redux['header-phone']) ?></span><?php endif;?>
                            <?php if( !empty( $shopcase_redux['header-email'] ) ):?><span><i class="fa fa-envelope"></i><?php echo esc_attr( $shopcase_redux['header-email']) ?></span><?php endif;?>
                        </div>
                    </div>
                    <nav class="main-nav in">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'main_menu',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'nav-menu',
                                'container'      => 'ul',
                                'container_id'      => ''
                            )
                        );?>
                        <div class="search">
                            <form action="<?php echo home_url('/');?>" class="search-form">
                                <input type="text" name="s" id="search-input" placeholder="Keywords"/>
                                <button class="btn-search"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </nav>
                </div>

            </header>

        </section>

    <?php
    endif;
    ?>