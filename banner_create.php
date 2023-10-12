<?php
include_once './backend_inc/header.php';


?>

<div class="container-fluid">
    <form class="row my-5" action="./../controlers/bannercreate.php" method="POST" enctype="multipart/form-data">
        <h3 class="text-primary mb-4">Add New Banner</h3>
        <div class="col-lg-12 ">
            <?php 
                if(isset($_SESSION['success'])){
                    echo '<div class="alert alert-success">'.$_SESSION['success']."</div>";
                }
            ?>
              <?php 
                if(isset($_SESSION['failed'])){
                    echo '<div class="alert alert-worning">'.$_SESSION['failed']."</div>";
                }
            ?>
            <label for="">Enter your title</label>
            <input name="title" class="form-control mb-4" type="text">
            <p class="text-danger">
                 <?= isset($_SESSION['errors']['title_error'])? $_SESSION['errors']['title_error']:"";?>
            </p>
        </div>
        <div class="col-lg-12">
            <label for="">Enter your Description</label>
            <textarea name="description" class="form-control mb-4" name=""></textarea>
            <p class="text-danger">
                 <?= isset($_SESSION['errors']['description_error'])? $_SESSION['errors']['description_error']:"";?>
            </p>
        </div>
        <div class="col-lg-4">
            <label for="">Enter your cta text</label>
            <input name="cta_text" class="form-control mb-4" type="text">
            <p class="text-danger">
                 <?= isset($_SESSION['errors']['cta_text_error'])? $_SESSION['errors']['cta_text_error']:"";?>
            </p>
        </div>
        <div class="col-lg-4">
            <label for="">Enter your cta link</label>
            <input name="cta_link" class="form-control mb-4" type="url">
            <p class="text-danger">
                 <?= isset($_SESSION['errors']['cta_link_error'])? $_SESSION['errors']['cta_link_error']:"";?>
            </p>
        </div>
        <div class="col-lg-4">
            <label for="">Enter your video link</label>
            <input name="video_link" class="form-control mb-4" type="url">
            <p class="text-danger">
                 <?= isset($_SESSION['errors']['video_link_error'])? $_SESSION['errors']['video_link_error']:"";?>
            </p>
        </div>
        <div class="col-lg-12">
            <label for="">Enter your image</label>
            <input name="image" class="form-control mb-4" type="file">
            <p class="text-danger">
                 <?= isset($_SESSION['errors']['image_error'])? $_SESSION['errors']['image_error']:"";?>
            </p>
        </div>
        <div class="col-lg-12 text-center">
            <button type="submit" class="btn btn-primary w-25"> Uplode your Banner</button>
        </div>
        
    </form>
</div>

<?php
include_once './backend_inc/footer.php';
unset($_SESSION['errors'],$_SESSION['success'],$_SESSION['failed'])
?>