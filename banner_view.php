<?php
include_once './backend_inc/header.php';
include './../env.php';
$banner_id = ($_REQUEST['id']);
$query ="SELECT * FROM banners WHERE id = '$banner_id'";
$result = mysqli_query($conn,$query);
$view = mysqli_fetch_assoc($result);

?>


        <section class="mt-5">
            <div class="container">
                <div class="row ">
                    <div class="card-header col-lg-3 mx-auto">
                        <h1 class="text-warning text-center my-4"><b><i><?= $view['title'] ?></i></b> </h1>
                        <p class="bg-dark text-center text-light"> Status - <i class="<?= $view['status'] ? 'fas':'far' ?> fa-star"></i></p>
                    </div>
                    <div class="card-header col-lg-3 mr-auto ">
                        <p class=""><img src="./../uploads/<?= $view['image']?>" width="200px" ></p>
                    </div>
                            
                    <div class="col-lg-9 mx-auto">
                        <div class="card">
                   
                            <div class="card-header">
                                <p>
                                <i class="fas fa-info">      =  </i> <?= $view['description'] ?>
                                </p>
                            </div>
                            <div class="card-body">
                                <p class="">CTA test =   
                                <?= $view['cta_text'] ?></p>
                                <p class="">CTA test = <?= $view['cta_link'] ?></p>
                                
                            </div>
                            <div class="card-footer">
                                <p> <i class="fas fa-video">  =  </i> <?= $view['video_link'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>

<?php
include_once './backend_inc/footer.php';

?>