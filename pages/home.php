<?php include 'header.php'; ?>


<section class="py-5">
    <div class="container">
        <div class="row ">
            <?php foreach ($newses as $news) { ?>
                <div class="col-md-10 mx-auto mb-4">
                    <div class="card">
                        <div class="card-header"><?php echo $news['title']?></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo $news['image']?>" alt="" height="180" width="220">
                                </div>
                                <div class="col-md-8 text-justify">
                                    <?php echo $news['content']?>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-primary px-4">Read more..</a>
                        </div>
                    </div>
                </div>

            <?php }?>
        </div>
    </div>
</section>




<?php include 'footer.php'; ?>
