<?php
// kostra kontaktneho formularu.
?>
<form id="drosselContactForm"  action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

	<div class="site-contact-left">
        <div class="form-group">
                    <input type="text" class="form-control" placeholder="Vaše meno*" id="name" name="name">
                    <small class="text-danger form-control-msg">Zadajte meno</small>
        </div>

        <div class="form-group">
                    <input type="text" class="form-control" placeholder="Váš email*" id="email" name="email" >
                    <small class="text-danger form-control-msg">Zadajte správny e-mail</small>
        </div>
        <div class="form-group">
                    <input type="text" class="form-control" placeholder="Telefónny kontakt" id="phone" name="phone" >
        </div>
    </div>
    <div class="site-contact-left">
        <div class="form-group">
                    <textarea name="message" id="message" class="form-control" placeholder="Vaša správa*"></textarea>
                    <small class="text-danger form-control-msg">Zadajte správu</small>
        </div>
    </div>
    <div class="site-contact-right">
        <p>* Povinné položky</p>
        <p>
            <input type="checkbox" name="personal-data-checkbox" id="personal-data-checkbox"> Súhlasím so spracovaním osobných údajov v zmysle GDPR. *</br>

        </p>
    </div>
        <button type="submit" id="contact-form-submit-btn" title="Pre odoslanie vyplň povinné položky" class="btn form-btn btn-default">odoslať správu</button>
    
    
    <small class="text-info form-control-msg js-form-submission">Prebieha odosielanie, prosím čakajte..</small>
	<small class="text-success form-control-msg js-form-success">Správa odoslaná, ďakujeme!</small>
	<small class="text-danger form-control-msg js-form-error">Odosielanie zlyhalo, skúste to prosím znovu!</small>

</form>