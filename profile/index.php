<?php include "./include/profile_header.php"; ?>
<!--navigation-->
<?php include "./include/profile_navigation.php"; ?>
<section id="about-us" class="py-5">
    <div class="container">
        <div class="row">
             <!--left sidebar-->
            
<?php include "./include/profile_sidebar.php"; ?>
            
            <!--Content-->
            <div class="col-md-9">
                <div class="dashboard-area">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3 bg-dark">
                                <div class="row">
                                    <div class="col-12">
                                        <a class="position-absolute ml-3 mt-3 text-white" href="setting.html" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit cover images"><i class="fas fa-cog"></i></a>
                                        <div class="row">
                                            <div class="col-md-6 ml-auto mr-auto">
                                               <div class="profiles p-3 my-4 rounded text-center shadow-sm">
                                                    <div class="avatars">
                                                        <a href="setting.html">
                                                            <img src="https://demo.bootstrap.news/bootnews/assets/img/avatar/avatar1.png" alt="Circle Image" class="avatar-lg rounded-circle img-fluid" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit avatar images">
                                                        </a>
                                                    </div>
                                                    <div class="names">
                                                        <h3 class="title text-light">
                                                        <?php 

                                               if(isset($_SESSION['username'])) {

                                                 echo $_SESSION['username'];




                                                   }

                                           ?>
                                                        </h3>
                                                        <a href="#" class="btn btn-link btn-facebook"><i class="fab fa-facebook"></i></a>
                                                        <a href="#" class="btn btn-link btn-twitter"><i class="fab fa-twitter"></i></a>
                                                        <a href="#" class="btn btn-link btn-gplus"><i class="fab fa-google-plus"></i></a>
                                                        <a href="#" class="btn btn-link btn-instagram"><i class="fab fa-instagram"></i></a>
                                                        <a href="#" class="btn btn-link btn-youtube"><i class="fab fa-youtube"></i></a>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                 </div>
                            </div>
                        </div>
                    </div>
         <!-- article cut start -->
                </div>
            </div>
        </div>
    </div>
</section>