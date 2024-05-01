<div class="d-flex justify-content-between shadow-lg py-4 px-3">
    <div class="col d-none d-md-block s-3">
        <span class="icon">
            <i class="ri-menu-line toggle  "  style="font-size: 25px;"></i>
        </span>
    </div>

    <div class="col d-flex justify-content-center  pe-3 d-none d-md-flex">
        <form action="">
            <div class="d-flex">
                <input type="search" name="search" class="form-control placeholder-glow me-2" placeholder="Search"   id="" required>
                <input type="submit" name="search" class="btn btn-dark btn-sm" value="Search">
            </div>
        </form>
    </div>

    <div class="col pe-3 d-flex justify-content-end">
        
        <div class="col-2 d-md-none d-sm-block ">
            <img src="../assets/img/aopelogo.png" alt="" class="img-fluid ">
        </div>

        <div class="d-flex align-items-center">
            <div class="img img-fluid me-3">
                <img src="upload/<?php echo $_SESSION['Image'] ?>" alt="Admin Picture" height="40px" style="border-radius: 50%;">
            </div>
            <p class="py-1 m-0"><?php echo $_SESSION['fullname'] ?></p>
            
        </div>

        <div class="col-1 d-md-none d-sm-block">
            <span class="icon">
                <i class="ri-menu-line toggler  "  style="font-size: 25px;"></i>
            </span>
        </div>
    </div>

                

            </div>