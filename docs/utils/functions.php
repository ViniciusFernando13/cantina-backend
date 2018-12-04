<?php

/**
 * Imprime o cabecalho HTML
 *
 * @return void
 */
function get_header() {
    echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Documentação API -  Yogaflix</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            </head>
            <body>';
}

/**
 * Imprime o footer HTML
 *
 * @return void
 */
function get_footer() {
    echo '  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
        </html>';
}

function print_post() {
    return '<div class="row">
                <div class="col">
                    <div class="alert alert-primary">';
}

function print_get() {
    return '<div class="row">
                <div class="col">
                    <div class="alert alert-success">';
}

function post_url( $url ) {
    return '<div class="page-header">
                <h4>[POST] '.$url.'</h4>
            </div>';
}

function get_url( $url ) {
    return '<div class="page-header">
                <h4>[GET] '.$url.'</h4>
            </div>';
}

function description( $p ) {
    return '<p>'.$p.'</p>';
}

function groups( $arr ) {
    $str = implode( ', ', $arr );
    return '<p> GRUPOS '.$str.'</p>';
}

function headers( $hr ) {
    $inner = '<b>Headers</b> <p>';
    foreach( $hr as $k => $v ) {
        $inner .= '<i>'.$k.': '.$v.'</i><br>';
    }
    $inner .= '</p>';
    return $inner;
}

function request( $arr ) {
    return '<div class="col-sm-6">
                <div class="alert alert-secondary" role="alert">
                    <b>REQUEST</b>
                    <br>
                    <br>
                    <b>
                        <pre>'.json_encode( $arr, JSON_PRETTY_PRINT ).'</pre>
                    </b>
                </div>
            </div>';
}

function response( $arr ) {
    return '<div class="col-sm-6">
                <div class="alert alert-secondary" role="alert">
                    <b>RESPONSE</b>
                    <br>
                    <br>
                    <b>
                        <pre>'.json_encode( $arr, JSON_PRETTY_PRINT ).'</pre>
                    </b>
                </div>
            </div>';
}

function end_section() {
    return '        </div>
                </div>
            </div>';
}

function section() {
    return isset( $_GET['section'] ) ? $_GET['section'] : null;
}

function section_link( $title, $link ) {
    $active = '';
    if ( section() == $link ) $active = 'active';
    return '<a href="index.php?section='.$link.'" class="'.$active.' list-group-item">'.$title.'</a>';
}

function get_section() {
    $g = section();
    if ( $g ) {
        include_once( 'sections/'.$g.'.php' );
    } else include_once( 'sections/home.php' );
}

// End of file