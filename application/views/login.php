<!DOCTYPE html>
<html lang="en">

<head>
  <title>CampuSpace - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

          
  <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
    body {
      background: url('./images/background.jpg') no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      font-family: 'Orbitron', sans-serif;
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-white {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }

    .bg-glass {
      background: rgba( 68, 63, 63, 0.3 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
    }

    .form-label {
      font-weight: bolder;
    }


           

            .card {
              width: 500px;
              height: 540px;
              border: none;

            }

            .btr {
              border-top-right-radius: 5px !important;
            }

            .btl {
              border-top-left-radius: 5px !important;
            }

            .btn-dark {
              color: #fff;
              background-color: #0d6efd;
              border-color: #0d6efd;
            }

            .btn-dark:hover {
              color: #fff;
              background-color: #0d6efd;
              border-color: #0d6efd;
            }

            .nav-pills {
              display: table !important;
              width: 100%;
            }

            .nav-pills .nav-link {
              border-radius: 0px;
              border-bottom: 0px solid #0d6efd40;
            }

            .nav-item {
              display: table-cell;
              background: #0d6efd2e;
            }

            .form {
              padding: 10px;
              height: 300px;
            }

            .form input {
              margin-bottom: 12px;
              border-radius: 3px;
            }

            .form input:focus {
              box-shadow: none;
            }

            .form button {
              margin-top: 20px;
            }
            .loader {
              display: none;
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 999;
    background: rgba(0, 0, 0, 0.38) url("./images/loader.gif") center no-repeat;;
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(5.3px);
-webkit-backdrop-filter: blur(5.3px);
border: 1px solid rgba(0, 0, 0, 0.68);



    /* background: rgba(255,255,255,0.8)  */
}

body.loading{
    overflow: hidden;   
}
/* Make spinner image visible when body element has the loading class */
body.loading .loader{
    display: block;
}
  </style>



  
</head>

<body >
  <nav class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="login.html">
        <!-- <img src="logo.png"  class="d-inline-block align-text-top"> -->
        <svg width="320" height="106.55940946977786" viewBox="0 0 320 106.55940946977786" class="css-1j8o68f">
          <defs id="SvgjsDefs1011"></defs>
          <g id="SvgjsG1012" featurekey="4K7G0D-0"
            transform="matrix(1.237623715632081,0,0,1.237623715632081,-11.75742529850477,-10.148515412415026)"
            fill="#ff325d">
            <path xmlns="http://www.w3.org/2000/svg"
              d="M79.3,30.2c6.1,0,11-4.9,11-11c0-6.1-4.9-11-11-11c-6.1,0-11,4.9-11,11c0,2.9,1.2,5.6,3,7.6L57.9,41c-2-1.9-4.7-3.1-7.6-3.1  c-2.9,0-5.6,1.1-7.5,3L29.4,28.6c0.9-1.2,1.4-2.7,1.4-4.3c0-4-3.3-7.3-7.3-7.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3  c1.9,0,3.6-0.7,4.9-1.9L41.8,42c-1.5,1.9-2.4,4.3-2.4,6.9c0,2.9,1.1,5.5,2.9,7.4L27.5,71.9c-1.9-1.6-4.3-2.5-7-2.5  c-6.1,0-11,4.9-11,11c0,6.1,4.9,11,11,11c6.1,0,11-4.9,11-11c0-2.9-1.1-5.5-2.9-7.4l14.7-15.6c1.9,1.6,4.3,2.5,7,2.5  c0.2,0,0.3,0,0.5,0l1.9,17c-4,0.8-7.1,4.3-7.1,8.6c0,4.9,3.9,8.8,8.8,8.8s8.8-3.9,8.8-8.8c0-4.9-3.9-8.8-8.8-8.8c-0.1,0-0.2,0-0.3,0  l-1.9-17c2.6-0.5,4.9-1.8,6.5-3.8l13.6,9.8c-0.6,1.1-1,2.3-1,3.7c0,4,3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3c0-4-3.3-7.3-7.3-7.3  c-2.2,0-4.1,1-5.4,2.5l-13.6-9.8c1.1-1.7,1.7-3.7,1.7-5.8c0-2.6-0.9-4.9-2.4-6.8l13.5-14.3C74.3,29.3,76.7,30.2,79.3,30.2z">
            </path>
          </g>
          <g id="SvgjsG1013" featurekey="wPuqcM-0"
            transform="matrix(1.703956311159229,0,0,1.703956311159229,118.63666318652518,28.77570556391032)"
            fill="#ff325d">
            <path
              d="M8.0338 16.9396 c0.42878 -0.42878 1.1241 -0.42886 1.5529 0.000058594 c0.42892 0.42878 0.42892 1.124 0 1.5528 c-0.97216 0.97216 -2.2646 1.5075 -3.6396 1.5075 c-2.8382 0 -5.147 -2.3088 -5.147 -5.147 s2.3088 -5.147 5.147 -5.147 c1.3749 0 2.6674 0.5353 3.6394 1.5076 c0.42892 0.42878 0.42892 1.124 0 1.5528 c-0.42878 0.42878 -1.124 0.42878 -1.5528 0 c-0.55724 -0.55738 -1.2984 -0.86428 -2.0866 -0.86428 c-1.6271 0 -2.951 1.3238 -2.951 2.951 s1.3238 2.951 2.951 2.951 c0.78826 0 1.5293 -0.3069 2.0866 -0.86428 z M20.116 9.706 c0.60638 0 1.098 0.49164 1.098 1.098 l0 8.098 c0 0.60638 -0.49164 1.098 -1.098 1.098 c-0.55356 0 -1.0101 -0.40984 -1.0858 -0.94252 c-0.8385 0.5928 -1.8605 0.94252 -2.9632 0.94252 c-2.8382 0 -5.147 -2.3088 -5.147 -5.147 s2.3088 -5.147 5.147 -5.147 c1.1027 0 2.1246 0.34972 2.9632 0.94252 c0.075762 -0.53268 0.53226 -0.94252 1.0858 -0.94252 z M16.067 17.804 c1.6271 0 2.951 -1.3238 2.951 -2.951 s-1.3238 -2.951 -2.951 -2.951 s-2.951 1.3238 -2.951 2.951 s1.3238 2.951 2.951 2.951 z M32.594 9.706 c2.2004 0 3.9902 1.7901 3.9902 3.9902 l0 5.2059 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 l0 -5.2059 c0 -0.9892 -0.80486 -1.7941 -1.7942 -1.7941 c-0.9892 0 -1.7941 0.80472 -1.7941 1.7941 l0 5.2059 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 l0 -5.2059 c0 -0.9892 -0.80472 -1.7941 -1.7941 -1.7941 s-1.7942 0.80472 -1.7942 1.7941 l0 5.2059 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 l0 -8.098 c0 -0.60638 0.49164 -1.098 1.098 -1.098 c0.39296 0 0.7368 0.2071 0.93074 0.51744 c0.57976 -0.32872 1.2489 -0.51746 1.9615 -0.51746 c1.1374 0 2.1644 0.4793 2.892 1.2456 c0.72744 -0.7663 1.7545 -1.2456 2.892 -1.2456 z M43.3134 9.706 c2.8306 0 5.1332 2.3028 5.1332 5.1334 s-2.3028 5.1334 -5.1334 5.1334 c-1.0919 0 -2.1044 -0.34382 -2.9372 -0.92716 l0 3.5624 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 l0 -11.804 c0 -0.60638 0.49164 -1.098 1.098 -1.098 c0.55134 0 1.0065 0.40682 1.0849 0.93648 c0.83546 -0.5891 1.8529 -0.93648 2.9506 -0.93648 z M43.3134 17.7764 c1.6196 0 2.9372 -1.3176 2.9372 -2.9372 s-1.3176 -2.9372 -2.9372 -2.9372 s-2.9372 1.3176 -2.9372 2.9372 s1.3176 2.9372 2.9372 2.9372 z M59.236000000000004 9.706 c0.60638 0 1.098 0.49164 1.098 1.098 l0 4.049 c0 2.8382 -2.3088 5.147 -5.147 5.147 s-5.147 -2.3088 -5.147 -5.147 l0 -4.049 c0 -0.60638 0.49164 -1.098 1.098 -1.098 s1.098 0.49164 1.098 1.098 l0 4.049 c0 1.6271 1.3238 2.951 2.951 2.951 s2.951 -1.3238 2.951 -2.951 l0 -4.049 c0 -0.60638 0.49164 -1.098 1.098 -1.098 z M72.388 15.0378 c0.00041016 0.019629 -0.0003125 0.03916 -0.0011328 0.058242 c-0.00054688 0.01166 0.00013672 0.023184 -0.0006836 0.03498 c-0.00054688 0.0075586 -0.0015039 0.014961 -0.0020508 0.02252 l-0.0012305 0.013594 c-0.20616 2.7126 -2.4888 4.8324 -5.2136 4.8324 c-2.8834 0 -5.2294 -2.346 -5.2294 -5.2294 c0 -0.60638 0.49164 -1.098 1.098 -1.098 s1.098 0.49164 1.098 1.098 c0 1.6726 1.3607 3.0334 3.0334 3.0334 c1.4292 0 2.6458 -1.0063 2.9546 -2.362 l-3.7312 -3.7312 c-0.42878 -0.42878 -0.42878 -1.124 0 -1.5528 c0.42892 -0.42878 1.124 -0.42878 1.5529 0 l4.1214 4.1214 c0.008379 0.008379 0.015371 0.017305 0.02334 0.02582 c0.013457 0.014414 0.026914 0.028692 0.03955 0.043788 c0.011797 0.014004 0.022636 0.028282 0.033614 0.042558 c0.010566 0.013867 0.020996 0.027734 0.030878 0.042012 c0.010977 0.015918 0.02127 0.03211 0.031288 0.048438 c0.0085156 0.013867 0.016895 0.027872 0.024864 0.042148 c0.009336 0.017012 0.018125 0.034024 0.026504 0.051308 c0.0074024 0.014961 0.014531 0.030058 0.021114 0.04543 c0.0072656 0.016875 0.013984 0.03375 0.020294 0.050762 c0.0063086 0.016875 0.012207 0.033614 0.017695 0.050762 c0.0050782 0.016328 0.009746 0.03252 0.014141 0.048984 c0.0049414 0.018262 0.0094726 0.03666 0.013457 0.055332 c0.0034376 0.016191 0.0061914 0.032382 0.0089454 0.048574 c0.003164 0.018809 0.0060546 0.037754 0.0082422 0.056836 c0.0019141 0.017285 0.0031446 0.03457 0.0042382 0.051856 c0.0012305 0.017988 0.0023242 0.035976 0.0025976 0.054102 z M61.95066 10.9622 c-0.00041016 -0.019492 0.00042968 -0.03916 0.00125 -0.05838 c0.00054688 -0.01166 -0.00013672 -0.023184 0.0006836 -0.03498 c0.00054688 -0.0075586 0.0015039 -0.014961 0.0020508 -0.02252 l0.0012305 -0.013594 c0.20616 -2.7126 2.4888 -4.8324 5.2136 -4.8324 c2.8834 0 5.2294 2.346 5.2294 5.2294 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 c0 -1.6726 -1.3607 -3.0334 -3.0334 -3.0334 c-1.4292 0 -2.6458 1.0063 -2.9546 2.362 l3.7312 3.7312 c0.42878 0.42878 0.42878 1.124 0 1.5528 c-0.2144 0.2144 -0.49536 0.32158 -0.77644 0.32158 s-0.56204 -0.10719 -0.77644 -0.32158 l-4.1214 -4.1214 c-0.008379 -0.008379 -0.015371 -0.017305 -0.02334 -0.02582 c-0.013457 -0.014414 -0.026914 -0.028692 -0.03955 -0.043788 c-0.011797 -0.014004 -0.022636 -0.028282 -0.033614 -0.042558 c-0.010566 -0.013867 -0.020996 -0.027734 -0.030878 -0.042012 c-0.010977 -0.015918 -0.02127 -0.03211 -0.031288 -0.048438 c-0.0085156 -0.013867 -0.016895 -0.027872 -0.024864 -0.042148 c-0.009336 -0.017012 -0.018125 -0.034024 -0.026504 -0.051308 c-0.0074024 -0.015098 -0.014395 -0.030058 -0.021114 -0.04543 c-0.0072656 -0.016738 -0.013984 -0.03375 -0.020294 -0.050762 c-0.0063086 -0.016738 -0.012207 -0.033476 -0.017695 -0.050626 c-0.0052148 -0.016191 -0.0098828 -0.03252 -0.014277 -0.048984 c-0.0049414 -0.018398 -0.0094726 -0.03666 -0.013457 -0.055332 c-0.0034376 -0.016191 -0.0061914 -0.032382 -0.0089454 -0.048574 c-0.003164 -0.018809 -0.0060546 -0.037754 -0.0082422 -0.056836 c-0.0019141 -0.017285 -0.0031446 -0.03457 -0.0042382 -0.051856 c-0.0012305 -0.017988 -0.0023242 -0.035976 -0.0025976 -0.054102 z M79.13340000000001 9.706 c2.8306 0 5.1332 2.3028 5.1332 5.1334 s-2.3028 5.1334 -5.1334 5.1334 c-1.0919 0 -2.1044 -0.34382 -2.9372 -0.92716 l0 3.5624 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 l0 -11.804 c0 -0.60638 0.49164 -1.098 1.098 -1.098 c0.55134 0 1.0065 0.40682 1.0849 0.93648 c0.83546 -0.5891 1.8529 -0.93648 2.9506 -0.93648 z M79.13340000000001 17.7764 c1.6196 0 2.9372 -1.3176 2.9372 -2.9372 s-1.3176 -2.9372 -2.9372 -2.9372 s-2.9372 1.3176 -2.9372 2.9372 s1.3176 2.9372 2.9372 2.9372 z M95.056 9.706 c0.60638 0 1.098 0.49164 1.098 1.098 l0 8.098 c0 0.60638 -0.49164 1.098 -1.098 1.098 c-0.55356 0 -1.0101 -0.40984 -1.0858 -0.94252 c-0.8385 0.5928 -1.8605 0.94252 -2.9632 0.94252 c-2.8382 0 -5.147 -2.3088 -5.147 -5.147 s2.3088 -5.147 5.147 -5.147 c1.1027 0 2.1246 0.34972 2.9632 0.94252 c0.075762 -0.53268 0.53226 -0.94252 1.0858 -0.94252 z M91.007 17.804 c1.6271 0 2.951 -1.3238 2.951 -2.951 s-1.3238 -2.951 -2.951 -2.951 s-2.951 1.3238 -2.951 2.951 s1.3238 2.951 2.951 2.951 z M104.99380000000001 16.9396 c0.42878 -0.42878 1.1241 -0.42886 1.5529 0.000058594 c0.42892 0.42878 0.42892 1.124 0 1.5528 c-0.97216 0.97216 -2.2646 1.5075 -3.6396 1.5075 c-2.8382 0 -5.147 -2.3088 -5.147 -5.147 s2.3088 -5.147 5.147 -5.147 c1.3749 0 2.6674 0.5353 3.6394 1.5076 c0.42892 0.42878 0.42892 1.124 0 1.5528 c-0.42878 0.42878 -1.124 0.42878 -1.5528 0 c-0.55724 -0.55738 -1.2984 -0.86428 -2.0866 -0.86428 c-1.6271 0 -2.951 1.3238 -2.951 2.951 s1.3238 2.951 2.951 2.951 c0.78826 0 1.5293 -0.3069 2.0866 -0.86428 z M113.02700000000002 9.706 c2.8382 0 5.147 2.3088 5.147 5.147 c0 0.60638 -0.49164 1.098 -1.098 1.098 l-6.7882 0 c0.43646 1.085 1.4998 1.8529 2.7392 1.8529 c0.78824 0 1.5293 -0.3069 2.0866 -0.86428 c0.42892 -0.42878 1.124 -0.42866 1.5529 0 c0.42892 0.42892 0.42878 1.1241 0 1.5529 c-0.9723 0.97216 -2.2648 1.5075 -3.6396 1.5075 c-2.8382 0 -5.147 -2.3088 -5.147 -5.147 s2.3088 -5.147 5.147 -5.147 z M110.28780000000002 13.754999999999999 l5.4784 0 c-0.43646 -1.085 -1.4998 -1.8529 -2.7392 -1.8529 s-2.3028 0.76794 -2.7392 1.8529 z">
            </path>
          </g>
        </svg>

      </a>
    </div>
  </nav>
  <section>
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5 justify-content-between">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h2 class="my-4 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
              <p id="typing" class="mb-4" >
              
            </p>
          
            
          </h2>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">
              </script>
</script>
        <script>
         
           var typing = new Typed('#typing', {
    strings: ["Be 'BEFIKRE'","campuSpace for people who loves privacy","Be hidden and express your thoughts","Express yourself without worrying about what others may think of you."],
    typeSpeed: 50,
    backSpeed: 0,
    fadeOut: true,
    loop: true
  });
        </script>

        <div
          class="col-lg-6 mb-5 mb-lg-0 position-relative align-self-end d-flex justify-content-center align-items-center mt-5">
          <!-- bg-white for white background and bg-glass for the blurry glass texure -->
          <div class="card bg-glass">

            <form class="needs-validation" novalidate action="">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
                  <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Existing User</a>
                </li>
                <li class="nav-item text-center">
                  <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">New Here? Join Us</a>
                </li>

              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                  <div class="form px-4 py-5">
                    <div class="input-group has-validation  mb-3">
                      <input type="email" name="" id="lemail" class="form-control" placeholder="E-mail address" required>
                      <div class="invalid-feedback">
                        Please enter your E-mail address.
                      </div>
                    </div>
                    <div class="input-group has-validation">
                      <input type="password" id="lpass" name="" class="form-control" placeholder="Password" required>
                      <div class="invalid-feedback">
                        Please enter a password.
                      </div>
                    </div>
                    <button class="btn btn-dark btn-block col-12" id="login">Log In</button>

                  </div>

                </div>
                
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                  <div class="form px-4 py-5">
                    <div class="input-group has-validation mb-3">
                      <input type="email" name="" id="semail" class="form-control" placeholder="E-mail address" required>
                      <div class="invalid-feedback">
                        Please enter your E-mail address.
                      </div>
                    </div>
                    <div class="input-group has-validation mb-3">
                      <input type="password" name="" id="spass" autocomplete="off" class="form-control" placeholder="Password"
                        for="newPassword" required>
                      <div class="invalid-feedback">
                        Please enter a password.
                      </div>
                    </div>
                    <div class="input-group has-validation mb-3">
                      <input type="password" id="srpass" autocomplete="off" name="" class="form-control"
                        placeholder="Confirm Password" for="confirmPassword" required>
                      <div class="invalid-feedback">
                        Please enter the same password again.
                      </div>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck">
                        Agree to
                      </label>
                      <label class="form-check-label" for="invalidCheck">
                        <a href="#">terms and conidtions</a>
                      </label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                    <button class="btn btn-dark btn-block col-12" id="signup">Sign Up</button>
                  </div>
                </div>
              </div>
            </form>

          </div>
          <script type='text/javascript'
            src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'>
            </script>
          
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

        </div>
      </div>
    </div>
  </section>
  <span class="loader"></span>
  <script type="text/javascript">
 
    
  
  $(document).ready(function(){

    
    $("#login").click(function () {
    
   
    var username = $('#lemail').val();
        var password = $('#lpass').val();
        var datas = {
          UserName: username,
          Password :password
                           
                     };
    $.ajax({
      type: 'POST',
     url:'<?php echo base_url("index.php/Logincontroller/login") ?>',
      data:"UserName=" + username + "&Password=" + password,
     cache: false,
      success: function(result){
        //alert(result);
                  
                    if (result == 1) {
                        /*if response result is 1, it means it is successful.*/
                        Swal.fire({
  title: 'Login success',
  width: 600,
  padding: '3em',
  color: '#716add',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.isConfirmed) {
    window.location.href = '<?php echo base_url("index.php/LoginController/logins") ?>';
  }
})
                     
                       
                    } else if (result == 2) {
                        
                      Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Invalid email',
  showConfirmButton: false,
  timer: 1500
})
                    } else if (result == 3) {
                        
                      Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Invalid password',
  showConfirmButton: false,
  timer: 1500
})
                    } else if (result == 4 || result == 5) {
                      Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Invalid email & Passowrd',
  showConfirmButton: false,
  timer: 1500
})
                        
                       
                    } else {
                        alert(result);//'Something went wrong'
                    }
                },
                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error );
                                }
           
 
     
   });
   event.preventDefault();
  
});
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
$("#signup").click(function () {
    
   
    var username = $('#semail').val();
        var password = $('#spass').val();
        var rpassword = $('#srpass').val();//$('input.form-check-input').is(':checked')
        if (validateEmail(username))
        {
        if(password==rpassword)
        {
          if($('input.form-check-input').is(':checked'))
        {
        var datas = {
          UserName: username,
          Password :password
                           
                     };
    $.ajax({
      type: 'POST',
     url:'<?php echo base_url("index.php/logincontroller/sign") ?>',
      data:"UserName=" + username + "&Password=" + password,
     cache: false,
      success: function(result){
        //alert(result);
                  
                    if (result == 1) {
                        /*if response result is 1, it means it is successful.*/
                        Swal.fire({
  title: 'Email sent pls verify to login',
  width: 600,
  padding: '3em',
  color: '#716add',
  background: '#fff url(./images/trees.jpg)',
  backdrop: `
    rgba(0,0,123,0.4)
    url("./images/m.gif")
    left top
    no-repeat
  `,
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.isConfirmed) {
    window.location.href = '<?php echo base_url("index.php/LoginController/logins") ?>';
  }
})
                     
                       
                    } else if (result == 2 || result==5) {
                        
                      Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Invalid email',
  showConfirmButton: false,
  timer: 1500
})
                    } else if (result == 3) {
                        
                      Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Invalid password',
  showConfirmButton: false,
  timer: 1500
})
                    } else if (result == 4) {
                        
                      Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Invalid email & Passowrd',
  showConfirmButton: false,
  timer: 1500
})
                    } 
                    
                    else {
                        alert(result);//'Something went wrong'
                    }
                },
                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error );
                                 //   event.preventDefault()
                                }
                               
 
     
   }); event.preventDefault();
  }
  else{
    Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Agree to term and condition',
  showConfirmButton: false,
  timer: 1500
})
event.preventDefault()
                   event.stopPropagation()
  }
}
  else{
    Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Invalid-password',
  showConfirmButton: false,
  timer: 1500
})
event.preventDefault()
                   event.stopPropagation()
  }
}
 else
{
  Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Invalid email',
  showConfirmButton: false,
  timer: 1500
})
event.preventDefault()
                   event.stopPropagation()
}
});
 });
 $(document).on({
    ajaxStart: function(){
        $("body").addClass("loading"); 
    },
    ajaxStop: function(){ 
        $("body").removeClass("loading"); 
    }    
});
  </script>
</body>

</html>
