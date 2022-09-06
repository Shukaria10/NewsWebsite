<?php include  'header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">All News Information</div>
                    <div class="card-body">
                        <h4 class="text-center text-success "><?php echo isset($message) ? $message : ''; ?></h4>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>News Title</th>
                                <th>News Content</th>
                                <th>News Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($products as $product) { ?>
                            <tr>
                                <td><?php echo $product['title'] ?> </td>
                                <td><?php echo $product['content'] ?></td>
                                <td><img src="<?php echo $product['image'] ?>" alt="" height="40" width="60"></td>
                                <td>
                                    <a href="action.php?page=edit&&id=<?php echo $product['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                    <a href="action.php?page=delete&&id=<?php echo $product['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>

                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








<?php include 'footer.php'?>
