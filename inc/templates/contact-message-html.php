<!DOCTYPE html>
    <html>
        <head>
            <!-- General styles, not used by all email clients -->
            <style type="text/css" media="all">
                a {
                    text-decoration: none;
                    color: #0088cc;
                }
                hr {
                    border-top: 1px solid #999;
                }
            </style>
        </head>
    
        <!-- KEEP THE LAYOUT SIMPLE: THOSE ARE SERVICE MESSAGES. -->
        <body style="margin: 0; padding: 0;">
    
            <!-- Top title with dark background -->
            <table style="background-color: #444; width: 100%;" cellspacing="0" cellpadding="0">
                <tr>
                    <td style="padding: 20px; text-align: center; font-family: sans-serif; color: #fff; font-size: 28px">
                        <?php echo get_bloginfo('name'); ?>
                    </td>
                </tr>
            </table>
    
            <!-- Main table 100% wide with background color #eee -->    
            <table style="background-color: #eee; width: 100%;">
                <tr>
                    <td align="center" style="padding: 15px;">
    
                        <!-- Content table with backgdound color #fff, width 500px -->
                        <table style="background-color: #fff; max-width: 600px; width: 100%; border: 1px solid #ddd;">
                            <tr>
                                <td style="padding: 15px; color: #333; font-size: 16px; font-family: sans-serif">
                                    <!-- The <p>This message confirms your subscription to our newsletter. Thank you!</p><hr><p><a href="http://localhost/wordpress/?na=profile&nk=2-ef505df59e">Change your profile</p> tag is replaced with one of confirmation, welcome or goodbye messages -->
                                    <!-- Messages content can be configured on Newsletter List Building panels --> 
                                    <p><?php 
                                            echo $title;
                                            if($phone != ''){
                                                echo ' ,'.$phone;
                                            }
                                        ?>
                                    </p>
                                    <p><?php echo $message; ?></p>
                                    <hr>
                                    <!-- Signature if not already added to single messages (surround with <p>) -->
                                    <p>
                                        <small>
                                            <a href="<?php echo home_url(); ?>"><?php echo home_url(); ?></a><br>
                                            <br>
                                            
                                        </small>
                                    </p>
                                
                                </td>
                            </tr>
                        </table>
    
                    </td>
                </tr>
            </table>
    
        </body>
    </html>