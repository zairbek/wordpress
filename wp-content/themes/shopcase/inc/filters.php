<?php

function filter_deals_example( $data ){

    $args = array(
        'posts_per_page' => '5',
        'tax_query' => array(
            'relation' => 'AND',
        ),
    );

    if( isset( $data['location'] ) && !empty($data['location']) ){
        array_push( $args['tax_query'], array(
            'taxonomy' => 'location',
            'field' => 'slug',
            'terms' => $data['location']
        ) );
    }
    if( isset( $data['type'] ) && !empty($data['type']) ){
        array_push( $args['tax_query'], array(
            'taxonomy' => 'type',
            'field' => 'slug',
            'terms' => $data['type']
        ) );
    }
    if( isset( $data['price'] ) && !empty($data['price']) ){
        array_push( $args['tax_query'], array(
            'taxonomy' => 'price',
            'field' => 'slug',
            'terms' => $data['price']
        ) );
    }



    if( !empty( $_POST ) ) {
        $custom_filter = new WP_Query( $args );

        if ($custom_filter->have_posts()) :


            /* Start the Loop */
            while ($custom_filter->have_posts()) :
                $custom_filter->the_post();

                the_title();

            endwhile;


        else :

            echo 'posts no find';

        endif;

    }else{
        $args = array(
            'post_type' => 'deals',
            'posts_per_page' => '5',
        );
        $default_filters = new WP_Query( $args );


        if ($default_filters->have_posts()) :


            /* Start the Loop */
            while ($default_filters->have_posts()) :
                $default_filters->the_post();

                the_title();

            endwhile;


        else :

            echo 'posts no find';

        endif;

    }

}