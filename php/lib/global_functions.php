<?php

function get_post_data(){
    $post_body = file_get_contents('php://input');
    $data = array();
    parse_str($post_body, $data);
    return $data;
}