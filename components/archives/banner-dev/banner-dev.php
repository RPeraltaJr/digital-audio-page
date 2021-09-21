<section class="banner-dev">
    <div class="wrapper">
        <div class="item item--main">
            <div class="box">
                <h3 class="main--title">
                    Here’s a thought: Banners don’t have to be an afterthought. We develop and design banners that fit perfectly with our audio and the streaming devices where they run. Just pick a device below and click away.
                </h3>
            </div>
        </div>
        <div class="item item--carousel">
            <div class="box">
                <div class="banner-dev__carousel" id="banner-dev-carousel">
                    <?php 
                        $items = (object) array(
                            "Oink-WOF-Spotify-iPhone"           => "332072725",
                            "Oink-Ikea-iPad-Spotify"            => "332072708",
                            "Oink-Accountemps-Pandora-Macbook"  => "332075106",
                            "Oink-JeopardyTT-Macbook-Pandora"   => "332072655",
                            "Oink-Ford-Pandora-iPhone"          => "332074634",
                            "Oink-CQ-Pandora-iPad"              => "332074612",
                        );
                        foreach($items as $item => $id): 
                    ?>
                        <a href="//vimeo.com/<?php echo $id; ?>" data-lity>
                            <div class="image" style="background-image: url('assets/build/img/business-dev/<?php echo $item; ?>.png')"></div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="banner-dev__carousel__control">
                <ul>
                    <li><img src="assets/build/img/icons/carousel-arrow-prev.png" alt="Prev" title="Previous" data-carousel-prev="bannerdev"></li>
                    <li><img src="assets/build/img/icons/carousel-arrow-next.png" alt="Next" title="Next" data-carousel-next="bannerdev"></li>
                </ul>
            </div>
        </div>
    </div>
</section>