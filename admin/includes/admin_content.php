<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Admin
            <small>Dashboard</small>
        </h1>

<?php

    // if($database->connection) {
    //   echo "true";
    // }

    // $sql = "SELECT * FROM users WHERE id = 1";
    // $result = $database->query($sql);
    // $user_found = mysqli_fetch_array($result);
    //   echo $user_found['username'];

    // $user = new User(); // To use the method here from user.php, we need to instantiate it first
     // $result_set = $user->find_all_users(); // Now, we can use the method
    //  while($row = mysqli_fetch_array($result_set)) {
        //     echo $row['username'] . "<br>";
        // }

    // $result_set = User::find_all_users(); // with static function in user.php
    // while($row = mysqli_fetch_array($result_set)) {
    //     echo $row['username'] . "<br>";
    // }

    // $found_user = User::find_user_by_id(2);
    // echo $user_found['username']; // With an array

    ///// Assigning Array Values to Object Properties /////
    // $found_user = User::find_user_by_id(2);
    // $user = new User(); // We have to instantiate the class
    // $user->id         = $user_found['id']; // $user is the object and id is the property (see user.php)
    // $user->username   = $user_found['username'];
    // $user->password   = $user_found['password'];
    // $user->first_name = $user_found['first_name'];
    // $user->last_name  = $user_found['last_name'];
    // echo $user->username;

// $user = User::instantiation($found_user);
// echo $user->username;
// echo "<br>";

    // $users = User::find_all_users();
    // foreach($users as $user) {
    //     echo $user->username . "<br>";
    // }

    // $found_user = User::find_user_by_id(1);
    // echo $found_user->username;

    // $user = new User();
    // $user->username   = "RiSu";
    // $user->password   = "123";
    // $user->first_name = "Rico";
    // $user->last_name  = "Suave";
    // $user->create();

    // $user = User::find_user_by_id(10);
    // $user->username   = "SoRa";
    // $user->password   = "456";
    // $user->first_name = "Soso";
    // $user->last_name = "RAOUL";
    // $user->update();

    // $user = User::find_user_by_id(7);
    // if (!empty($user)) {
    //     $user->delete();
    // } else {
    //     echo "You can't delete a record that doesn't exist";
    // }

    // $user = new User();
    // $user->username = "BOUBOU";
    // $user->password = "456";
    // $user->first_name = "Bilal";
    // $user->last_name = "Boulaghreb";
    // $user->save();

    // $user = User::find_user_by_id(10);
    // $user->username = "ABOU";
    // $user->password = "123";
    // $user->first_name = "Abderrahmane";
    // $user->last_name = "Abdelwaheb";
    // $user->save();

    // $users = User::find_all();
    // foreach($users as $user) {
    //     echo $user->username . "<br>";
    // }

    // $photos = Photo::find_all();
    // foreach($photos as $photo) {
    //     echo $photo->title . "<br>";
    // }

    // $photo = new Photo();
    // $photo->title       = "Photo from the sea";
    // $photo->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit error dolorum sunt consectetur repellendus facere consequatur quam voluptate praesentium aperiam.";
    // $photo->filename    = "image2.jpg";
    // $photo->type        = "image";
    // $photo->size        = 20;
    // $photo->create();

    // echo INCLUDES_PATH;

    // $user = User::find_by_id(2);
    // echo $user->username;

    // $photo = Photo::find_by_id(3);
    // echo $photo->filename;

?>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $session->count; ?></div>
                                        <div>New Views</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                  <span class="pull-left">View Details</span> 
                               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> 
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-photo fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo Photo::count_all(); ?></div>
                                        <div>Photos</div>
                                    </div>
                                </div>
                            </div>
                            <a href="photos.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Photos in Gallery</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo User::count_all(); ?>

                                        </div>

                                        <div>Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Users</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                      <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo Comment::count_all(); ?></div>
                                        <div>Comments</div>
                                    </div>
                                </div>
                            </div>
                            <a href="comments.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Comments</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                        </div> <!--First Row-->
                    
                    <div class="row">
                        <div id="piechart" style="width: 900px; height: 500px;"></div>
                    </div>

    </div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->