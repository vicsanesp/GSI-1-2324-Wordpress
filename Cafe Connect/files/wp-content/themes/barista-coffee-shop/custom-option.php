<?php

    $barista_coffee_shop_theme_css= "";

    $barista_coffee_shop_scroll_position = get_theme_mod( 'barista_coffee_shop_scroll_top_position','Right');
    if($barista_coffee_shop_scroll_position == 'Right'){
        $barista_coffee_shop_theme_css .='#button{';
            $barista_coffee_shop_theme_css .='right: 20px;';
        $barista_coffee_shop_theme_css .='}';
    }else if($barista_coffee_shop_scroll_position == 'Left'){
        $barista_coffee_shop_theme_css .='#button{';
            $barista_coffee_shop_theme_css .='left: 20px;';
        $barista_coffee_shop_theme_css .='}';
    }else if($barista_coffee_shop_scroll_position == 'Center'){
        $barista_coffee_shop_theme_css .='#button{';
            $barista_coffee_shop_theme_css .='right: 50%;left: 50%;';
        $barista_coffee_shop_theme_css .='}';
    }