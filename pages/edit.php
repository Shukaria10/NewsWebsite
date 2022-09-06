<?php include 'header.php' ; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body border-rounded">
                        <h4 class="text-center text-dark my-3"><?php echo isset($message)? $message: '';?></h4>
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="" class="col-md-3"> News Headline</label>
                                <div class="col-md-9">
                                    <input type="text" name="title" value="<?php echo $singleProduct['title']; ?>" class="form-control"/>
                                    <input type="hidden" name="id" value="<?php echo $singleProduct['id']; ?>" >
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="" class="col-md-3">News Content</label>
                                <div class="col-md-9">
                                    <textarea name="content"    required class="form-control"><?php echo $singleProduct['content']; ?></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3">News Image</label>
                                <div class="col-md-9">
                                    <input type="file" accept="image/*" name="image" class="form-control"/>
                                    <img src="<?php echo $singleProduct['image']; ?>" alt=""  height="100" width="130" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="update_btn" class="btn btn-success px-3" value="Update News"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>



<?php include 'footer.php' ; ?>