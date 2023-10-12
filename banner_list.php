<?php
include_once './backend_inc/header.php';
include './../env.php';
$query ="SELECT * FROM banners";
$result = mysqli_query($conn,$query);
$add = mysqli_fetch_all($result, 1);
?>
 <div class="container mt-5">
 <h3 class="text-primary mb-4"> Banner List</h3>
 <h5 class="text-success">
     <?php
        echo isset($_SESSION['success'])? $_SESSION['success']:"";
    ?>
</h5>
    <hr class="w-80" />
    <section id="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <table id="dtable" class="table table-striped table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr class="bg-primary text-light text-center">
                                    <th>Sl. no</th>
                                    <th>image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($add as $key=> $adds){
                                     
                                ?>
                                 <tr>
                                    <td scope="row" class="text-center"><?= ++$key?></td>
                                    <td scope="row" class="text" class="text-center"><img src="./../uploads/<?= $adds['image']?>" width="100px" > </td>
                                    <td scope="row"class="text-center"><?= $adds['title']?></td>
                                    <td scope="row"><?= strlen($adds['description']) > 20 ?substr($adds['description'],0,20)."...":$adds['description']; ?></td>
                                    <td scope="row" class="text-center">
                                        <a href="./../controlers/bannerstatus.php?id=<?= $adds['id']?>" class="btn">
                                            <i class="<?= $adds['status'] ? 'fas':'far' ?> fa-star"></i>
                                        </a>
                                    </td>
                                    <td><div class="btn_group-sm">
                                        <a href="./banner_view.php?id=<?= $adds['id']?>" class="btn btn-info btn-sm "><i class="fas fa-eye"></i></a>
                                        <a href="./banner_edit.php?id=<?= $adds['id']?>" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i></a>
                                        <a href="./../controlers/bannerdelete.php?id=<?= $adds['id']?>" class="btn btn-danger btn-sm delete_btn"><i class="fas fa-trash"></i></a>
                                    </td>
                                    </div>
                                </tr>
                                <?php
                                }
                                ?>
                              
                            <tbody>
                          
                        </table>
                    </div>
                </div>
            </div>
        </section>
   </body>
   <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
    crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
    $('.delete_btn').on('click', function(event){
        event.preventDefault();
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                let url = $(this).attr('href');
                window.location.href = url;
            } Swal.fire(
                'sry! you have just 1 banner.'
            )
        })
           
            
    })
            
   </script>

<?php
include_once './backend_inc/footer.php';
unset($_SESSION['success']);
?>