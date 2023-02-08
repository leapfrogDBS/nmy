<section id="contact-section" class="bg-copper pt-10">
    <div class="container">
        <div class="row">
            <div class="col lg:col-span-4">
                <h2 class="headingTwo text-3xl">Interested?</h2>
                <h2 class="headingTwo font-happy italic text-3xl">Get in touch</h2>
            </div>
            <div class="col lg:col-span-8 mt-6 lg:mt-0">
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