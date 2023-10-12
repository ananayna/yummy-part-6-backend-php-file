<?php

include_once './backend_inc/header.php';
?>
 

<div class="container-fluid">
<form class="" action="./../controlers/usercontroler/userupdate.php" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-5 text-center">
            <div>
            <label for="PI"><img src="./../uploads/<?= isset ($_SESSION['auth']['avatar'])? $_SESSION['auth']['avatar']:"https://api.dicebear.com/7.x/initials/svg?seed=". $_SESSION['auth']['fname'] ?>" 
            alt="" class="w-50 rounded" id="profile_picture" ></label>
            <input name="avatar" type="file" id="PI" class="d-none">
            <p class="text-danger"><?= isset($_SESSION['errors']['avatar'])? $_SESSION['errors']['avatar']:"";?></p>
            </div>

        </div>
        <div class="col-7">
            
            <p class="text-primary"><?php
                echo isset($_SESSION['failed'])? $_SESSION['failed']:"";
                echo isset($_SESSION['success'])? $_SESSION['success']:"";
            ?></p>
                <label class="text-primary">First Name</label>
                <input name="fname" type="text" class="form-control mb-4" value="<?= $_SESSION['auth']['fname']?>">
                <p class="text-danger">
                 <?= isset($_SESSION['errors']['fnameError'])? $_SESSION['errors']['fnameError']:"";?>
                </p>
                <label class="text-primary">Last Name</label>
                <input name="lname" type="text" class="form-control mb-4" value="<?= $_SESSION['auth']['lname']?>">
                <p class="text-danger">
                <?=isset($_SESSION['errors']['lnameError'])? $_SESSION['errors']['lnameError']:"";?>
            </p>
                <label class="text-primary">Email</label>
                <input name="email" type="email" class="form-control mb-4" value="<?= $_SESSION['auth']['email']?>">
                <p class="text-danger">
                <?=  isset($_SESSION['errors']['emailError'])? $_SESSION['errors']['emailError']:"";?>
                </p>
                <button type="submit" class="btn btn-primary">Update data</button>
            
        </div>
    </div>
</form>
<div class="row">
        <div class="col-lg-6 mx-auto my-5">
            <h3 class="h3 text-center text-dark ">Change Password</h3>
            <p class="text-primary">
                <?=  isset($_SESSION['password_success'])? $_SESSION['password_success']:"";?>
                <?=  isset($_SESSION['password_error'])? $_SESSION['password_error']:"";?>
                </p>
            <form action="./../controlers/usercontroler/passwordUpdate.php" method="POST">
                <label for="">Current Password</label>
                <input name="old_password" type="password"class="form-control mb-3">
                <label for="">New Password</label>
                <input name="password" type="password"class="form-control mb-3">
                <p class="text-danger">
                <?=  isset($_SESSION['errors']['passwordError'])? $_SESSION['errors']['passwordError']:"";?>
                </p>
                <label for="">Confirm Password</label>
                <input name="confirm_password" type="password"class="form-control mb-3">
                <p class="text-danger">
                <?=  isset($_SESSION['errors']['confirmPasswordError'])? $_SESSION['errors']['confirmPasswordError']:"";?>
                </p>
                <button class="btn btn-primary" type="submit">Update Password</button>
            </form>
        </div>
    </div>
</div>

<script>
    let profileselector = document.querySelector('#PI')
    let profilepicture = document.querySelector('#profile_picture')
    function imageuplode(event){
        let image_url = URL.createObjectURL(event.target.files[0]);
        profilepicture.src = image_url;
    }
    profileselector.addEventListener('change', imageuplode)
</script>

<?php

include_once './backend_inc/footer.php';
unset($_SESSION['errors'],$_SESSION['success'],$_SESSION['failed'],$_SESSION['password_success'],$_SESSION['password_error']);
?>
