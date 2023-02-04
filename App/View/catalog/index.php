
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
<?php $this->view('catalog/header',$data);  if(!$_SESSION['username']){ header('location:'.ROOT.'login');}?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="<?=ASSET?>img/hero.jpg">
        <form class="d-flex tm-search-form" method="get">
            <input name="find"class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Latest Photos
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    <!-- Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 200 -->
                </form>
            </div>
        </div>

        <div class="row tm-mb-90 tm-gallery">

        <?php  if(is_array($data ['images'])){
            foreach($data ['images'] as $row){
            $this->view('catalog/single_image',$row);
        }
    }
         ?>

            
        </div> <!-- row -->
        <div class="row tm-mb-90 ">
            <div class="col-12 d-flex justify-content-center align-items-center tm-paging-col">


            <?php $pagination = new Pagination();
                if($data['previous_page']){
                    echo "<a href='index.php?page={$data['previous_page']}' class='btn btn-primary tm-btn-prev mb-2 '>Previous</a>";
                }
                for($i=1; $i <= $data ['total_page']; $i++){
                    if($data['current_page'] ==$i){
                   echo "<a href='index.php?page={$i}' class='tm-paging-link' style='background:#009999; color:white'>{$i}</a>";
                    }else{
                     echo "<a href='index.php?page={$i}' class='tm-paging-link'>{$i}</a>";

                    }
                  }

            if($data['next_page'] <= $data['total_page']){

                echo "<a href='index.php?page={$data['next_page']}' class='btn btn-primary tm-btn-next'>Next Page</a>";

            }
            ?>
                <div class="tm-paging d-flex">
                    <?php 

                    ?></a>
                    
                </div>
            </div>            
        </div>
    </div> <!-- container-fluid, tm-container-content -->
    <?php $this->view('catalog/footer');?>

  