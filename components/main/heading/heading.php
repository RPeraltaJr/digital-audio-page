<section class="heading" <?php if($heading->id): echo "id='{$heading->id}'"; endif; ?>>
    <div class="wrapper">
        <div class="item">
            <div class="box">
                <h3 class="title"><?php echo $heading->title; ?></h3>
            </div>
        </div>
    </div>
</section>