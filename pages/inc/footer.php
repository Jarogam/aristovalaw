<footer id="footer-form">

<section class="top-footer" style="background: url(<?php echo get_img_url('Rectangle8.jpg'); ?>) no-repeat center/cover;">
    <div class="container">
        <h2>Get Immigration Assistance Today</h2>
        <div class="form-fields-required">Fields marked with an <span style="color: red;">*</span> are required</div>

        <form action="<?php echo SITE_URL . '/requests/send_email.php'; ?>" method="post">

            <div class="row-fl">
                <div class="col-full-1_3">
                    <div class="input-wrapper">
                        <label for="inp-1">Name</label>
                        <input id="inp-1" type="text">
                    </div>
                </div>
                <div class="col-full-1_3">
                    <div class="input-wrapper">
                        <label for="inp-1">Email<span style="color: red;">*</span></label>
                        <input id="inp-1" type="text">
                    </div>
                </div>
                <div class="col-full-1_3">
                    <div class="input-wrapper">
                        <label for="inp-1">Phone</label>
                        <input id="inp-1" type="text">
                    </div>
                </div>
            </div>

            <div class="row-fl">
                <div class="input-wrapper" style="width: 100%;">
                    <label for="textarea">Message</label>
                    <textarea name="" id="textarea" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row-fl">
                <div class="form-links">	
                    <a href="./disclaimer/" id="form-disclaimer-trigger" aria-expanded="false">Disclaimer</a> | 
                    <a href="./privacy/" target="_blank">Privacy Policy</a>
                </div>
            </div>

            <div class="nf-field-label">
                <input id="field-30" type="checkbox" value="1" aria-required="true" required="">
                <label for="field-30" class="disclaimer-check">
                    I have read the disclaimer. <span class="forms-req-symbol">*</span> 
                </label>
            </div>

            <input class="btn" type="submit" value="Send Consultation Request" aria-disabled="true">

            <!-- <div class="error-msg">Please correct errors before submitting this form.</div> -->
        </form>

    </div>
</section>
<section class="medium-footer">
    <div class="container">
        <div class="medium-footer__wrapper">
            <a href="<?php echo SITE_URL . '/im-lp/'; ?>">Immigration law practice </a>
            <a href="<?php echo SITE_URL . '/ol/'; ?>">Our locations</a>
            <a href="<?php echo SITE_URL ?>">
                <img src="<?php echo get_img_url('logo_tsa.png'); ?>" alt="logo">
            </a>
            <a href="<?php echo SITE_URL . '/en/'; ?>">Extraordinary ability cases</a>
            <a href="<?php echo SITE_URL . '/im-l/'; ?>">National interest waiver cases</a>
        </div>
    </div>
</section>
</footer>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script type="module">
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,


    // Navigation arrows
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },

});
</script>
</body>
</html>