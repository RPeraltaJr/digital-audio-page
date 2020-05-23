<section id="navbar" class="navbar">
    <div class="wrapper">
        <div class="item item--1">
            <div class="box">
                <a href="https://www.oinkcreative.com/" class="page-scroll">
                    <img class="logo" src="assets/build/img/logos/OinkInk.svg" alt="OinkInk">
                </a>
            </div>
        </div>
        <div class="item item--2">
            <div class="box">
                <ul class="nav-links list-inline">
                    <li><a href="#dynamic" class="page-scroll">Dynamic</a></li>
                    <li><a href="#interactive" class="page-scroll">Interactive</a></li>
                    <li><a href="#short-form" class="page-scroll">Short Form</a></li>
                    <li><a href="#sequential" class="page-scroll">Sequential</a></li>
                    <?php if( stripos($_SERVER['REQUEST_URI'], "?dev") !== false ): ?>
                    <li><a href="#banner-dev" class="page-scroll">Banner Development</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>