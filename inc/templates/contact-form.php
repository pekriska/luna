<?php
// kostra kontaktneho formularu.
?>
<form id="drosselContactForm" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

	<div class="form-group">
        <input type="text" class="form-control" placeholder="Your Name" id="name" name="name">
        <small class="text-danger form-control-msg">Zadajte meno</small>
	</div>

	<div class="form-group">
        <input type="text" class="form-control" placeholder="Your Email" id="email" name="email" >
        <small class="text-danger form-control-msg">Zadajte správny e-mail</small>
	</div>

	<div class="form-group">
        <textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
        <small class="text-danger form-control-msg">Zadajte správu</small>
	</div>

    <button type="stubmit" class="btn btn-default">Submit</button>
    
    <small class="text-info form-control-msg js-form-submission">Prebieha odosielanie, prosím čakajte..</small>
	<small class="text-success form-control-msg js-form-success">Správa odoslaná, ďakujeme!</small>
	<small class="text-danger form-control-msg js-form-error">Odosielanie zlyhalo, skúste to prosím znovu!</small>

</form>