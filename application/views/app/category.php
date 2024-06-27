<?php $this->include("app.layouts.header", ['categories' => $categories]) ?>

<section class="container my-5">

    <section class="row">
        <section class="col-12">
            <h1><?php echo $category['name'] ?></h1>
            <hr>
        </section>
    </section>

    <section class="row">

        <?php foreach ($articles as $article) { ?>
            <section class="col-md-4">
                <h2><?php echo $article['title']; ?></h2>
                <p><?php echo $article['body']; ?></p>
                <p><a class="btn btn-primary" href="<?php $this->url('home/show/' . $article['id']); ?>" role="button">View details »</a></p>
            </section>

        <?php  } ?>


    </section>
</section>
<?php $this->include("app.layouts.footer") ?>