
<!-- Koneksi -->
<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
?>
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Gunung Prau​">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Booking</title>
  <link rel="stylesheet" href="assets/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="assets/css/Prau.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.29.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Prau">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-overlap u-overlap-transparent">
  

  <!-- Header Dipanggil dari folder app/includes/header.php ( agar header sama dengan page yg lain) -->
  <?php include(ROOT_PATH . "/includes/header.php"); ?>

  <section class="u-align-center u-clearfix u-image u-shading u-section-1" src="" data-image-width="1600"
    data-image-height="900" id="sec-5a1e">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-text u-text-default u-title u-text-1">Booking Pendakian<span style="font-weight: 700;"></span>
      </h1>
      <p class="u-large-text u-text u-text-variant u-text-2"> Booking pendakian lebih mudah pada website Mountainesia
        .</p>
      <a href="Prau.php#sec-1996" data-page-id="301163607"
        class="u-border-1 u-border-white u-btn u-btn-round u-button-style u-custom-font u-heading-font u-hover-palette-4-light-2 u-none u-radius-50 u-btn-1">Booking</a>
    </div>
  </section>

  <section class="u-align-center u-clearfix u-image u-shading u-section-5" src="" data-image-width="1280"
    data-image-height="800" id="sec-1996">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-text u-text-default u-title u-text-1" data-animation-name="fadeIn" data-animation-duration="1000"
        data-animation-delay="0" data-animation-direction="Down">Booking Pendakian</h1>
      <div class="u-expanded-width-sm u-expanded-width-xs u-shape u-shape-rectangle u-white u-shape-1"
        data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0"
        data-animation-direction=""></div>
      <h5 class="u-align-left u-text u-text-body-color u-text-2" data-animation-name="fadeIn"
        data-animation-duration="1000" data-animation-delay="0">Isi Format Booking</h5>
      <div class="u-form u-form-1">
        <form action="simpan_booking.php" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom"
          name="form" style="padding: 10px;">
          <div class="u-form-group u-form-name">
            <label for="name-8729" class="u-form-control-hidden u-label u-text-body-color"></label>
            <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" id=""
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
          </div>
          <div class="u-form-group u-form-name">
            <label for="name-8729" class="u-form-control-hidden u-label u-text-body-color"></label>
            <input type="text" placeholder="Nama Ketua kelompok" id="nama_ketua" name="nama_ketua"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
          </div>
          <div class="u-form-group u-form-phone u-form-group-2">
            <label for="phone-aa2a" class="u-form-control-hidden u-label u-text-body-color"></label>
            <input type="tel"
              pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})"
              placeholder="Nomer telphone" id="phone-aa2a" name="no_telp"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
          </div>


          <div class="u-form-group u-form-select u-form-group-3">
            <label for="select-1c4e" class="u-label u-text-body-color">Pilih Gunung</label>
            <div class="u-form-select-wrapper">
              <select id="select-1c4e" name="pilih_gunung" 
                class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" onchange="populate(this.id,'pilih')">
                <option value=""></option>
                <option value="prau">Prau</option>
                <option value="sumbing">Sumbing</option>
                <option value="merbabu">Merbabu</option>
                <option value="lawu">Lawu</option>
                <option value="sindoro">Sindoro</option>
                 <option value="slamet">Slamet</option>
              </select>
              </svg>
            </div>
          </div>

        <div class="u-form-group u-form-select u-form-group-3">
                    <label for="select-1c4e" class="u-label u-text-body-color">Pilih Jalur Pendakian</label>
                    <div class="u-form-select-wrapper">
        <select id="pilih" name="milih" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"></select>
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                        <path fill="currentColor" d="M4 8L0 4h8z"></path>
                      </svg>
                    </div>
                  </div>

          
          <div class="u-form-date u-form-group u-form-group-4">
            <label for="date-e801" class="u-label u-text-body-color">Pilih tanggal pendakian</label>
            <input type="date" placeholder="MM/DD/YYYY" id="date-e801" name="tgl_pendakian"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
          </div>
          <div class="u-form-group u-form-select u-form-group-5">
            <label for="select-7b8b" class="u-label u-text-body-color">Kelompok pendaki</label>
            <div class="u-form-select-wrapper">
              <select id="select-7b8b" name="kelompok_pendakian"
                class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                <option value="Kecil (1-3 orang)">Kecil (1-3 orang)</option>
                <option value="Sedang (4-9 orang)">Sedang (4-9 orang)</option>
                <option value="Besar (10 orang lebih)">Besar (10 orang lebih)</option>
              </select>
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                <path fill="currentColor" d="M4 8L0 4h8z"></path>
              </svg>
            </div>
          </div>
          <div class="u-align-center u-form-group u-form-submit">
            <a href="Cetak-kode-Booking.php"
              class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-palette-4-light-2 u-radius-20 u-btn-1">cetak
              form pendakian<br>
            </a>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
        </form>
      </div>
    </div>
  </section>

  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3048">
    <div class="u-align-left u-clearfix u-sheet u-sheet-1">
      <h6 class="u-text u-text-default u-text-1">FIND US!</h6><span
        class="u-icon u-icon-circle u-text-palette-4-dark-1 u-icon-1"><svg class="u-svg-link"
          preserveAspectRatio="xMidYMin slice" viewBox="0 0 24 24" style="">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-dd62"></use>
        </svg><svg class="u-svg-content" viewBox="0 0 24 24" id="svg-dd62">
          <path
            d="M 12 2 C 6.4889971 2 2 6.4889971 2 12 C 2 17.511003 6.4889971 22 12 22 C 17.511003 22 22 17.511003 22 12 C 22 6.4889971 17.511003 2 12 2 z M 12 4 C 16.430123 4 20 7.5698774 20 12 C 20 16.014467 17.065322 19.313017 13.21875 19.898438 L 13.21875 14.384766 L 15.546875 14.384766 L 15.912109 12.019531 L 13.21875 12.019531 L 13.21875 10.726562 C 13.21875 9.7435625 13.538984 8.8710938 14.458984 8.8710938 L 15.935547 8.8710938 L 15.935547 6.8066406 C 15.675547 6.7716406 15.126844 6.6953125 14.089844 6.6953125 C 11.923844 6.6953125 10.654297 7.8393125 10.654297 10.445312 L 10.654297 12.019531 L 8.4277344 12.019531 L 8.4277344 14.384766 L 10.654297 14.384766 L 10.654297 19.878906 C 6.8702905 19.240845 4 15.970237 4 12 C 4 7.5698774 7.5698774 4 12 4 z">
          </path>
        </svg></span><span class="u-icon u-icon-circle u-text-palette-4-dark-1 u-icon-2"><svg class="u-svg-link"
          preserveAspectRatio="xMidYMin slice" viewBox="0 0 24 24" style="">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e731"></use>
        </svg><svg class="u-svg-content" viewBox="0 0 24 24" id="svg-e731">
          <path
            d="M 8 3 C 5.243 3 3 5.243 3 8 L 3 16 C 3 18.757 5.243 21 8 21 L 16 21 C 18.757 21 21 18.757 21 16 L 21 8 C 21 5.243 18.757 3 16 3 L 8 3 z M 8 5 L 16 5 C 17.654 5 19 6.346 19 8 L 19 16 C 19 17.654 17.654 19 16 19 L 8 19 C 6.346 19 5 17.654 5 16 L 5 8 C 5 6.346 6.346 5 8 5 z M 17 6 A 1 1 0 0 0 16 7 A 1 1 0 0 0 17 8 A 1 1 0 0 0 18 7 A 1 1 0 0 0 17 6 z M 12 7 C 9.243 7 7 9.243 7 12 C 7 14.757 9.243 17 12 17 C 14.757 17 17 14.757 17 12 C 17 9.243 14.757 7 12 7 z M 12 9 C 13.654 9 15 10.346 15 12 C 15 13.654 13.654 15 12 15 C 10.346 15 9 13.654 9 12 C 9 10.346 10.346 9 12 9 z">
          </path>
        </svg></span><span class="u-icon u-icon-circle u-text-palette-4-dark-1 u-icon-3"><svg class="u-svg-link"
          preserveAspectRatio="xMidYMin slice" viewBox="0 0 24 24" style="">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9d2e"></use>
        </svg><svg class="u-svg-content" viewBox="0 0 24 24" id="svg-9d2e">
          <path
            d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z">
          </path>
        </svg></span>
    </div>
  </footer>
</body>

</html>

<script type="text/javascript">
    function populate(plh,mlh){
      var plh = document.getElementById(plh);
      var mlh = document.getElementById(mlh);
      mlh.innerHTML = "";
      if(plh.value == "prau"){
        var optionArray = ["|","Garung|Garung","Cepit Parakan|Cepit Parakan","Mangli Kaliangkrik|Mangli Kaliangkrik","Bowongso|Bowongso","Sipetung|Sipetung"];
      }else if(plh.value == "sumbing"){
        var optionArray = ["|","Garung|Garung","Cepit Parakan|Cepit Parakan","Mangli Kaliangkrik|Mangli Kaliangkrik","Bowongso|Bowongso","Sipetung|Sipetung"];
      }else if(plh.value == "merbabu"){
        var optionArray = ["|","Selo|Selo","Suwanting|Suwanting","Wekas|Wekas","Kopen Thekelan|Kopen Thekelan","Kopeng Cunthel|Kopeng Cunthel"];
      }else if(plh.value == "lawu"){
        var optionArray = ["|","Cemoro Sewu|Cemoro Sewu","Cemoro Kandang|Cemoro Kandang","Candi Ceto|Candi Ceto","Singolangu|Singolangu"];
      }else if(plh.value == "sindoro"){
        var optionArray = ["|","Kledung|Kledung","Sikatok|Sikatok","Alang-alang sewu|Alang-alang sewu","Bansari|Bansari","Sigedang|Sigedang"];
      }else if(plh.value == "slamet"){
        var optionArray = ["|","Bambangan|Bambangan","Gunung Malang|Gunung Malang","Dipajaya|Dipajaya","Guci|Guci"];
      }
      for (var option in optionArray) {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        mlh.options.add(newOption);
      }
    }
  </script>