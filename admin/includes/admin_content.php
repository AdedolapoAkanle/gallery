<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blank Page
                <small>Subheading</small>
            </h1>

            <?php


    // $result_set = User::find_all_users();

    // while($row = mysqli_fetch_array($result_set)) {

    //     echo $row['username'] . "<br>";
    // }

    // $found_user  = User::find_user_by_id(2);

    // $user =  User::instantiation($found_user);
    // echo $user -> id;
    // echo "<br>";

    
    // $users = User::find_all();
    
    // foreach($users as $user) {
    //     echo $user->username . "<br>";
    // }

    // $found_user = User::find_user_by_id(2);
    // echo $found_user->username;

    // $user = new User();

    // $user->username = "Suave The Second";
    // $user->password = "Rico Last Name";
    // $user->first_name = "Rico";
    // $user->last_name = "Suave";

    // $user->create();


    // $user = User::find_user_by_id(12);
    // $user->username = "Bran";

    // $user->update();    

    // $user = User::find_user_by_id(11);
    // $user->delete();

    // $user = User::find_user_by_id(2);
    // $user->username = "Ryan";
    // $user->save();

    // $user = new User();
    // $user->username = "NEW USER";
    
    // $user->save();


    // $photos = Photo::find_all();
    
    // foreach($photos as $photo) {
    //     echo $photo->title . "<br>";
    // }

    $photo = new Photo();

    $photo->title = "Summer Vacation";
    $photo->size = 20;

    $photo->create();

    ?>


            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->