<?php
// kostra kontaktneho formularu.
?>
<form id="drosselContactForm" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

	<div class="form-group">
                <h4>Meno a priezvisko*</h4>
                <input type="text" class="form-control" placeholder="Vaše meno*" id="name" name="name">
                <small class="text-danger form-control-msg">Zadajte meno</small>
	</div>

	<div class="form-group">
                <h4>E mail*</h4>
                <input type="text" class="form-control" placeholder="Váš email*" id="email" name="email" >
                <small class="text-danger form-control-msg">Zadajte správny e-mail</small>
	</div>

	<div class="form-group">
                <h4>Vaša správa*</h4>
                <textarea name="message" id="message" class="form-control" placeholder="Vaša správa"></textarea>
                <small class="text-danger form-control-msg">Zadajte správu</small>
	</div>
        <p>* Povinné položky</p>
        <input type="checkbox" name="personal-data-checkbox" id="personal-data-checkbox">Súhlasím so spracovaním osobných údajov</br>
        <button type="stubmit" id="contact-form-submit-btn" class="btn form-btn btn-default">Submit</button>
    
    
    <small class="text-info form-control-msg js-form-submission">Prebieha odosielanie, prosím čakajte..</small>
	<small class="text-success form-control-msg js-form-success">Správa odoslaná, ďakujeme!</small>
	<small class="text-danger form-control-msg js-form-error">Odosielanie zlyhalo, skúste to prosím znovu!</small>

</form>