<section class="hero features">
    <div class="hero-body">
        <div class="columns">
            <div class="column has-text-centered">
                <div>
                    <i class="fa fa-2x fa-film"></i>
                    <p class="is-size-6">UNLIMITED ACCESS</p>
                    <p class="is-size-7">Unlimited access to over 20 million titles.</p>
                </div>
            </div>
            <div class="column has-text-centered">
                <div>
                    <i class="fa fa-2x fa-search"></i>
                    <p class="is-size-6">SEARCH FOR ANYTHING</p>
                    <p class="is-size-7">Whether it's a new release or a golden oldie, we've got you covered.</p>
                </div>
            </div>
            <div class="column has-text-centered">
                <div>
                    <i class="fa fa-2x fa-ban"></i>
                    <p class="is-size-6">NO ADS</p>
                    <p class="is-size-7">Enjoy your films the way they were meant to be experienced: ad-free.</p>
                </div>
            </div>
            <div class="column has-text-centered">
                <div>
                    <i class="fa fa-2x fa-desktop"></i>
                    <p class="is-size-6">ALL PLATFORMS</p>
                    <p class="is-size-7">Optimized for PC, Mac, mobile, PS4, Xbox One, and Smart TVs.</p>
                </div>
            </div>
        </div>
    </div>

</section>
<footer class="navbar is-dark has-shadow">
    <div class="container">
        <button id="navbarBurger" class="button navbar-burger is-dark" data-target="navFoot">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-menu " id="navFoot">
            <div class="navbar-start">
                <p class="navbar-item">Copyright &copy; <?php echo date('Y') ?> <a
                            href="<?php echo site_url() ?>">&nbsp; <?php echo config('sitename') ?></a>. All Rights Reserved.
                </p>
            </div>

            <div class="navbar-end">
                <a class="navbar-item" href="<?php echo view_page('privacy-policy'); ?>">
                    Privacy Policy
                </a>
                <a class="navbar-item" href="<?php echo view_page('dmca-notice'); ?>">
                    DMCA
                </a>
                <a class="navbar-item" href="<?php echo view_page('contact-us'); ?>">
                    Contact
                </a>
                <a class="navbar-item" href="<?php echo view_page('disclaimer'); ?>">
                    Disclaimer
                </a>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="<?php style_theme(); ?>/js/main.js"></script>
<script type="text/javascript" defer>
    /* First CSS File */
    var GodOfSpeed = document.createElement('link');
    GodOfSpeed.rel = 'stylesheet';
    GodOfSpeed.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css';
    GodOfSpeed.type = 'text/css';
    var godefer = document.getElementsByTagName('link')[0];
    godefer.parentNode.insertBefore(GodOfSpeed, godefer);

</script>


<script type="text/javascript">
    var fired = false;
    window.addEventListener("scroll", function () {
        if ((document.documentElement.scrollTop != 0 && fired === false) || (document.body.scrollTop != 0 && fired === false)) {

            var imgDefer = document.getElementsByTagName('img');
            for (var i = 0; i < imgDefer.length; i++) {
                if (imgDefer[i].getAttribute('data-src')) {
                    imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
                }
            }
            fired = true;
        }
    }, true)
</script>
<?php echo histats_write() ?>

<?php if (is_europe() == 'true'): ?>
    <!-- Begin Cookie Consent plugin by Silktide - https://silktide.com/cookieconsent -->
    <script type="text/javascript">
        window.cookieconsent_options = {
            "message": "This website uses cookies to ensure you get the best experience on our website",
            "dismiss": "Got it!",
            "learnMore": "More success",
            "link": null,
            "theme": "dark-floating"
        };
    </script>
    <script type="text/javascript"
            src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
    <!-- End Cookie Consent plugin -->
<?php endif ?>
<?php if (config('protect_content') == 'true'): ?>
    <Script Language='Javascript'>
        document.write(unescape('%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%0A%66%75%6E%63%74%69%6F%6E%20%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%65%29%7B%69%66%28%74%79%70%65%6F%66%20%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%6C%73%65%20%69%66%28%74%79%70%65%6F%66%20%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%3D%22%6E%6F%6E%65%22%3B%65%6C%73%65%20%65%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%2E%73%74%79%6C%65%2E%63%75%72%73%6F%72%3D%22%64%65%66%61%75%6C%74%22%7D%77%69%6E%64%6F%77%2E%6F%6E%6C%6F%61%64%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%29%7D%0A%0A%66%75%6E%63%74%69%6F%6E%20%6D%6F%75%73%65%64%77%6E%28%65%29%7B%74%72%79%7B%69%66%28%65%76%65%6E%74%2E%62%75%74%74%6F%6E%3D%3D%32%7C%7C%65%76%65%6E%74%2E%62%75%74%74%6F%6E%3D%3D%33%29%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%63%61%74%63%68%28%65%29%7B%69%66%28%65%2E%77%68%69%63%68%3D%3D%33%29%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%7D%64%6F%63%75%6D%65%6E%74%2E%6F%6E%63%6F%6E%74%65%78%74%6D%65%6E%75%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%64%6F%63%75%6D%65%6E%74%2E%6F%6E%64%72%61%67%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%6D%6F%75%73%65%64%77%6E%0A%0A%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%22%6B%65%79%64%6F%77%6E%22%2C%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%65%2E%70%72%65%76%65%6E%74%44%65%66%61%75%6C%74%28%29%7D%7D%29%3B%64%6F%63%75%6D%65%6E%74%2E%6B%65%79%70%72%65%73%73%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%7D%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%0A%0A%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6B%65%79%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%65%3D%65%7C%7C%77%69%6E%64%6F%77%2E%65%76%65%6E%74%3B%69%66%28%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%32%33%7C%7C%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%38%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%7D%0A%3C%2F%73%63%72%69%70%74%3E%0A'));
    </Script>
<?php endif ?>
</body>
</html>