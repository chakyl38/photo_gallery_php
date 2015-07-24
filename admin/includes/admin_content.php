<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Admin
            <small>...</small>
        </h1>
        <?php
            // $user = new User();
            // $user->username = "sexy";
            // $user->password = "123";
            // $user->first_name = "Amanda";
            // $user->last_name = "Chapman";

            // $user->create();

            // $user = User::find_user_by_id(4);
            // $user->first_name = "Sarah";
            // $user->last_name = "Morehead";
            // $user->update();
            $user = User::find_user_by_id(5);
            $user->delete();
         ?>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
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
