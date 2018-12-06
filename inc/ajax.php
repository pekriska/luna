<?php
/**
 * AJAX Functions
 *
 * 
 *
 * @package drossel-luna
 * 
 * odosielanie emailu z kontaktneho formularu
 */

add_action( 'wp_ajax_nopriv_drossel_save_user_contact_form', 'drossel_save_contact' );
add_action( 'wp_ajax_drossel_save_user_contact_form', 'drossel_save_contact' );

function drossel_save_contact(){
	$title   =  wp_strip_all_tags($_POST["name"]);
	$email   =  wp_strip_all_tags($_POST["email"]);
    $message =  wp_strip_all_tags($_POST["message"]);
    $phone   =  wp_strip_all_tags($_POST["phoneNumber"]);
    
    // echo $title . ',' . $email . ',' .$message;
    //wp_insert_post();

    //email settings
    $to = get_bloginfo('admin_email');
    $subject = 'Drossel Contact Form - '.$title;
    
    $headers[] = 'From: '.get_bloginfo('name').' <'.$to.'>'; 
    $headers[] = 'Reply-To: '.$title.' <'.$email.'>';
    $headers[] = 'Phone: '.$phone;
    $headers[] = 'Content-Type: text/html: charset=UTF-8';
   
    echo wp_mail($to, $subject, $message, $headers);
    

	die();
}
