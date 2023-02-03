<section class="bg-copper">
    <div class="container">
        <div class="row">
            <div class="col col-span-6">
                <h2 class="headingTwo">Interested?</h2>
                <h2 class="headingTwo font-happy italic">Get in touch</h2>
            </div>
            <div class="col col-span-6">
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="92" title="Contact form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener( 'wpcf7submit', function( event ) {
        var form = event.target;
        var checkbox = form.querySelector('input[type="checkbox"]');
        if (!checkbox.checked) {
            event.preventDefault();
            var validationTextContainer = form.querySelector('.wpcf7-response-output');
            validationTextContainer.innerHTML = 'Please check the required checkbox to continue.';
        }
        }, false );
   
</script>