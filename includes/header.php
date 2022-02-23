<header class="u-black u-clearfix u-header u-header" id="sec-d459"> 
<div class="u-clearfix u-sheet u-sheet-1">
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        

        <div class="u-custom-menu u-nav-container">
          <ul class="u-custom-font u-heading-font u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a
                class="u-button-style u-hover-palette-4-dark-1 u-nav-link u-text-active-white u-text-hover-palette-4-light-1"
                href="index.php" style="padding: 10px 15px;">Home</a>
            </li>
            <li class="u-nav-item"><?php if (isset($_SESSION['id'])): ?>
              <a class="u-button-style u-hover-palette-4-dark-1 u-nav-link u-text-active-white u-text-hover-custom-color-1"
                href="booking.php" style="padding: 10px 15px;">Booking Pendakian</a>
            </li>
             <?php endif; ?>
            <li class="u-nav-item"><?php if (isset($_SESSION['id'])): ?>
            <a class="u-button-style u-hover-palette-4-dark-1 u-nav-link u-text-active-white u-text-hover-palette-4-light-1"
                href="cetak-kode-booking.php" style="padding: 10px 15px;">Cetak Booking</a>
            </li>
               <?php endif; ?> 
            <li class="u-nav-item"><a
                class="u-button-style u-hover-palette-4-dark-1 u-nav-link u-text-active-white u-text-hover-palette-4-light-1"
                style="padding: 10px 15px;">Visit</a>
              <div class="u-nav-popup" >
                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2">
                  <li class="u-nav-item"><a class="u-black u-button-style u-hover-palette-4-dark-1 u-nav-link"
                      href="Prau.php">Prau</a>
                  </li>
                  <li class="u-nav-item"><a class="u-black u-button-style u-hover-palette-4-dark-1 u-nav-link"
                      href="sumbing.php">sumbing</a>
                  </li>
                  <li class="u-nav-item"><a class="u-black u-button-style u-hover-palette-4-dark-1 u-nav-link"
                      href="Merbabu.php">Merbabu</a>
                  </li>
                  <li class="u-nav-item"><a class="u-black u-button-style u-hover-palette-4-dark-1 u-nav-link"
                      href="lawu.php">Lawu</a>
                  </li>
                  <li class="u-nav-item"><a class="u-black u-button-style u-hover-palette-4-dark-1 u-nav-link"
                      href="sindoro.php">Sindoro</a>
                  </li>
                  <li class="u-nav-item"><a class="u-black u-button-style u-hover-palette-4-dark-1 u-nav-link"
                      href="slamet.php">Slamet</a>
                  </li> 
                  <li><a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a></li>
                </ul>
              </div>
            </li>

                  <li class="u-nav-item">
                  <?php if (isset($_SESSION['id'])): ?>
                              <?php if($_SESSION['admin']): ?>
                  <a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>" class="u-black u-button-style u-hover-palette-4-dark-1 u-nav-link"><?php echo $_SESSION['username']; ?></a>
                </li>

                  <li class="u-nav-item">

                  <?php endif; ?>
                  <a href="<?php echo BASE_URL . '/logout.php' ?>"  class="u-button-style u-hover-palette-4-dark-1 u-nav-link u-text-active-white u-text-hover-custom-color-1">Logout</a>
                </li>


                  <li class="u-nav-item">
                  <?php else: ?>
                    <a href="<?php echo BASE_URL . '/login.php' ?>" class="u-black u-button-style u-hover-palette-4-dark-1 u-nav-link">Sign In</a>
                  <?php endif; ?>
                        </li>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-75 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php"
                    style="padding: 10px 15px;">Home</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Cetak-kode-Booking.html"
                    style="padding: 10px 15px;">Cetak kode Booking</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 15px;">Visit</a>
                  <div class="u-nav-popup">
                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Prau.html">Prau</a>
                      </li>
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="sumbing.html">sumbing</a>
                      </li>
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Merbabu.html">Merbabu</a>
                      </li>
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="lawu.html">Lawu</a>
                      </li>
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="sindoro.html">Sindoro</a>
                      </li>
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="slamet.html">Slamet</a>
                      </li>
                    </ul>
                  </div>
                <li class="u-nav-item"><a
                    class="u-button-style u-hover-palette-4-dark-1 u-nav-link u-text-active-white u-text-hover-custom-color-1"
                    href="login.html" style="padding: 10px 15px;">Login</a>
                </li>
            </div>
      </nav>
      <h5 class="u-align-center u-text u-text-1">
        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1"
          href="index.php" data-page-id="226488378">MOUNTAINESIA</a>
      </h5>
    </div>
  </header>