<section class="short-form">
    <div class="wrapper">

        <div class="item item--main">
            <div class="box">
                <h3 class="main--title">
                    Got a second? Varying ad lengths can increase effectiveness. Short form ads play a crucial role in piquing interest, especially when paired with 30-second ads to drive conversions.
                </h3>
            </div>
        </div>

        <?php 
            $x = 1;
            include '_data.php';
            foreach($forms as $form):
        ?>
        <div class="item item--<?php echo $x; ?>">
            <div class="box">
                <div class="audio-player">
                    <div class="logo">
                        <img class="<?php echo $form->class; ?>" src="assets/build/img/logos/<?php echo $form->logo; ?>" alt="<?php if($form->title): echo $form->title; endif; ?>">
                    </div>
                    <div class="player">
                        <div class="box" v-show="showResult">
                        
                            <audio id="shortForm<?php echo $x; ?>" controls>
                                <source src="assets/build/audio/short-form/<?php echo $form->audio; ?>" type="audio/mpeg" v-if="track">
                                Your browser does not support the audio element.
                            </audio>

                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <?php $x++; endforeach; ?>

    </div>
</section>