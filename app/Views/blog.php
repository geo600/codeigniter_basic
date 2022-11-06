<?= $this->extend('/layouts/main') ?>

<?= $this->section('content'); ?>

<h1><?= $title ?></h1>

<div class="row">
    <?= $this->include('/partials/sidebar'); ?>
    <div class="col-12 col-sm-9">
        <div class="row">
            <?php foreach ($posts as $post) :  ?>

                <div class="card" style="width: 18rem;">
                    <img src="../../codeigniter_basic/public/assets/images/codeigniter.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?= $post ?></h5>
                        <p class="card-text">Test random in blog.php</p>
                        <a href="/blog/post" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>