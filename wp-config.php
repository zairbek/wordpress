<?php

if ( file_exists(__DIR__ . '/wp-configs/wp-config-local.php') ){
    include __DIR__ . '/wp-config-local.php';
} else {
    include __DIR__ . '/wp-config-prod.php';
}