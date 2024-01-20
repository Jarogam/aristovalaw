<footer class="test-footer">

<section class="medium-footer">
    <div class="container">
        <div class="medium-footer__wrapper">
            <a href="<?php echo get_img_url('im-lp'); ?>">Immigration law practice </a>
            <a href="<?php echo get_img_url('lo') ?>">Our locations</a>
            <a href="<?php echo get_img_url('/') ?>">
                <img src="<?php echo get_img_url('logo_tsa.png'); ?>" alt="logo">
            </a>
            <a href="<?php echo get_img_url('/en') ?>">Extraordinary ability cases</a>
            <a href="<?php echo get_img_url('/im-l') ?>">National interest waiver cases</a>
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