<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php
    // $photos = Photo::find_all();
    $photos = User::find_by_id($_SESSION['user_id'])->photos();
?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

<?php include("includes/top_nav.php"); ?>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            
<?php include("includes/side_nav.php"); ?>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Photos
                            <small>Subheading</small>
                        </h1>
                        <p class="bg-success"><?php echo $message; ?></p>
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Id</th>
                                        <th>File Name</th>
                                        <th>Title</th>
                                        <th>Size</th>
                                        <th>Comments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($photos as $photo) : ?>
                                    <tr>
                                        <td><img class="admin-photo-thumbnail" src="<?php echo $photo->picture_path(); ?>" alt="<?php echo $photo->title; ?>">
                                            <div class="action_links">
                                                <a class="btn btn-danger delete_link" href="delete_photo.php?id=<?php echo $photo->id; ?>">Delete</a>
                                                <a class="btn btn-success" href="edit_photo.php?id=<?php echo $photo->id; ?>">Edit</a>
                                                <a class="btn btn-primary" href="../photo.php?id=<?php echo $photo->id; ?>">View</a>
                                            </div>
                                        </td>
                                        <td><?php echo $photo->id; ?></td>
                                        <td><?php echo $photo->filename; ?></td>
                                        <td><?php echo $photo->title; ?></td>
                                        <td><?php echo $photo->size; ?></td>
                                        <td>
                                            <a href="comment_photo.php?id=<?php echo $photo->id; ?>">
                                                <?php
                                                    $comments = Comment::find_the_comments($photo->id);
                                                    echo count($comments);
                                                ?>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table><!-- End of Table -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>