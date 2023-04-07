<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create New Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="rotating-planet.png">

    <!-- CSS -->
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=VT323&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap'); */

        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


        body {
            background: linear-gradient(#8e2de2 0%, #4a00e0 100%) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden !important;
        }

        body::-webkit-scrollbar {
            /* background: transparent; */
            /* width: .25rem; */
            display: none;
        }

        body::-webkit-scrollbar-thumb {
            background: linear-gradient(transparent, #4a00e0, transparent);
        }

        .type-area {
            height: 300px !important;
            font-family: 'Poppins', sans-serif;
            letter-spacing: -1px;
            z-index: 10;
        }

        /* .bg-white {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        } */

        .bg-glass {
            background: linear-gradient(#391e728c, transparent 80%);
            /* box-shadow: 0 0 50px rgba(0, 0, 0, 0.5); */
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0, 0.18);
        }

        .otpboxlf {
            border-top-left-radius: 50px !important;
            border-bottom-left-radius: 50px !important;

            border-top-right-radius: 17px !important;
            border-bottom-right-radius: 17px !important;
        }

        .otpboxrt {
            border-top-left-radius: 17px !important;
            border-bottom-left-radius: 17px !important;

            border-top-right-radius: 50px !important;
            border-bottom-right-radius: 50px !important;
        }

        .form-label {
            font-weight: bolder;
        }

        .card {
            width: 500px;
            height: 600px;
            border: none;
            border-radius: 25px;
            z-index: 10;
        }

        .nav-pills {
            display: table !important;
            width: 100%;
        }

        .nav-pills .nav-link {
            border-radius: 50px;
            margin: 10px;
            /* background-color: rgba(131, 102, 71, 0.75); */
            color: #fff;

        }

        .nav-item {
            display: table-cell;
            /* background: #0d6efd2e; */
        }

        .form {
            padding: 10px;
            height: 300px;
        }

        .form input {
            margin-bottom: 12px;
            border-radius: 50px;
        }

        .form input:focus {
            box-shadow: none;
        }

        .form button {
            margin-top: 20px;
            background-color: rgba(255, 0, 0, 0.5);
        }

        .form button:hover {
            background-color: rgba(255, 0, 0, 0.7);
        }

        .animate1 {
            border-radius: 50px;
            width: 95%;
            transition: 0.2s;
        }

        .animate1:hover {
            width: 100%;
        }

        .planet {
            animation: spin 70s linear infinite;
            height: 130%;
            opacity: 80%;
        }

        .corner {
            position: absolute;
            top: -50%;
            right: -20%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .stars {
            width: 100%;
            mix-blend-mode: screen;
            position: absolute;
            z-index: 0;
            opacity: 50%;
        }

        .stars-cont {
            position: relative;
            background-image: linear-gradient(to bottom, transparent, white);
            background-repeat: no repeat;
        }

        /* svg {
      filter: drop-shadow(0px 2px 6px #00000074);
    } */

        g {
            fill: #dfd7f8;
        }

        /* .navbar {
      background: linear-gradient(170deg, rgba(2, 0, 36, 0.463) 10%, transparent 40%);
      z-index: 1;
    } */

        section {
            margin-top: -30px;
            z-index: 10;
        }

        .navbar {
            z-index: 11;
        }
    </style>

</head>

<body onload="typeWriter()">
    <div class="planet-cont">
        <img src="rotating-planet.png" alt="" class="planet corner">
    </div>
    <!-- <div class="stars-cont">
        <img src="stars.png" alt="" class="stars">
      </div> -->
    <nav class="navbar">
        <div class="container-fluid">
            <a class="ms-3 mt-3 navbar-brand" href="#">
                <!-- <img src="logo.png"  class="d-inline-block align-text-top"> -->
                <svg width="100%" height="150" viewBox="0 0 320 106.55940946977786" class="css-1j8o68f">
                    <defs id="SvgjsDefs1011"></defs>
                    <g id="SvgjsG1012" featurekey="4K7G0D-0"
                        transform="matrix(1.237623715632081,0,0,1.237623715632081,-11.75742529850477,-10.148515412415026)"
                        fill="#95b5a9">
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M79.3,30.2c6.1,0,11-4.9,11-11c0-6.1-4.9-11-11-11c-6.1,0-11,4.9-11,11c0,2.9,1.2,5.6,3,7.6L57.9,41c-2-1.9-4.7-3.1-7.6-3.1  c-2.9,0-5.6,1.1-7.5,3L29.4,28.6c0.9-1.2,1.4-2.7,1.4-4.3c0-4-3.3-7.3-7.3-7.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3  c1.9,0,3.6-0.7,4.9-1.9L41.8,42c-1.5,1.9-2.4,4.3-2.4,6.9c0,2.9,1.1,5.5,2.9,7.4L27.5,71.9c-1.9-1.6-4.3-2.5-7-2.5  c-6.1,0-11,4.9-11,11c0,6.1,4.9,11,11,11c6.1,0,11-4.9,11-11c0-2.9-1.1-5.5-2.9-7.4l14.7-15.6c1.9,1.6,4.3,2.5,7,2.5  c0.2,0,0.3,0,0.5,0l1.9,17c-4,0.8-7.1,4.3-7.1,8.6c0,4.9,3.9,8.8,8.8,8.8s8.8-3.9,8.8-8.8c0-4.9-3.9-8.8-8.8-8.8c-0.1,0-0.2,0-0.3,0  l-1.9-17c2.6-0.5,4.9-1.8,6.5-3.8l13.6,9.8c-0.6,1.1-1,2.3-1,3.7c0,4,3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3c0-4-3.3-7.3-7.3-7.3  c-2.2,0-4.1,1-5.4,2.5l-13.6-9.8c1.1-1.7,1.7-3.7,1.7-5.8c0-2.6-0.9-4.9-2.4-6.8l13.5-14.3C74.3,29.3,76.7,30.2,79.3,30.2z">
                        </path>
                    </g>
                    <g id="SvgjsG1013" featurekey="wPuqcM-0"
                        transform="matrix(1.703956311159229,0,0,1.703956311159229,118.63666318652518,28.77570556391032)"
                        fill="#95b5a9">
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
            <div class="row gx-lg-5 mb-5 justify-content-between">
                <div class="col-lg-6 mb-5 mb-lg-0 mt-5 type-area">
                    <h2 class="my-4 display-5 fw-bold ls-tight" style="color: hsl(0, 0%, 100%)">
                        <p id="typing" class="mb-4">

                        </p>
                    </h2>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>

                    var typing = new Typed('#typing', {
                        strings: ["So you want to change your password ?", "Follow the given instructions.", "And dont forget to choose a strong password."],
                        typeSpeed: 50,
                        backSpeed: 0,
                        fadeOut: true,
                        loop: true
                    });

                </script>

                <div
                    class="col-lg-6 mb-5 mb-lg-0 position-relative align-self-end d-flex justify-content-center align-items-center mt-5">
                    <!-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item text-center">
                                <h4>
                                    <div class="bg-glass nav-link btrl" id="pills-home-tab">
                                        Create a New Password
                                    </div>
                                </h4>
                            </li>
                        </ul> -->
                    <!-- bg-white for white background and bg-glass for the blurry glass texure -->
                    <div class="card bg-glass">

                        <form class="needs-validation" novalidate>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                    <div class="form px-4 py-4">
                                        <div style="color: #fff;" class="mb-5 px-1">
                                            <h2>Create a New Password</h2>
                                        </div>

                                        <div style="color: #fff;" class="mb-4">
                                            Verify the one-time-password sent to your email.
                                        </div>
                                        <span class="input-group has-validation px-3">

                                            <input class="otpboxlf bg-white me-1 px-0 text-center form-control rounded"
                                                type="text" id="first" maxlength="1" placeholder="#" required />
                                            <input class="bg-white mx-1 px-0 text-center form-control rounded"
                                                type="text" id="second" maxlength="1" placeholder="#" required />
                                            <input class="bg-white mx-1 px-0 text-center form-control rounded"
                                                type="text" id="third" maxlength="1" placeholder="#" required />
                                            <input class="bg-white mx-1 px-0 text-center form-control rounded"
                                                type="text" id="fourth" maxlength="1" placeholder="#" required />
                                            <input class="bg-white mx-1 px-0 text-center form-control rounded"
                                                type="text" id="fifth" maxlength="1" placeholder="#" required />
                                            <input class="otpboxrt bg-white ms-1 px-0 text-center form-control rounded"
                                                type="text" id="sixth" maxlength="1" placeholder="#" required />

                                            <div class="invalid-feedback">
                                                Please enter your OTP.
                                            </div>

                                        </span>

                                        <div style="color: #fff;" class="my-3">
                                            Enter your new password.
                                        </div>

                                        <div class="input-group has-validation">
                                            <input type="password" name="" class="form-control bg-white"
                                                placeholder="New Password" required>
                                            <div class="invalid-feedback mb-3">
                                                Please enter a new password.
                                            </div>
                                        </div>

                                        <div class="input-group has-validation">
                                            <input type="password" name="" class="form-control bg-white"
                                                placeholder="Confirm New Password" required>
                                            <div class="invalid-feedback">
                                                Passwords do not match.
                                            </div>
                                        </div>

                                        <button class="animate1 btn text-light btn-block col-12 mt-2" href="#">Reset
                                            Password</button>

                                        <div class="mt-3" style="color: #fff;">Don't have an account?
                                            <a href="login-page.html" style="color: #fff;">Sign up</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <script type='text/javascript'
                    src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'>
                    </script>

            </div>
        </div>
        </div>
    </section>

    <script type="text/javascript">
        $("#pwdId, #confirmPassword").on("keyup", function () {
            if (
                $("#newPassword").val() != "" &&
                $("#confirmPassword").val() != "" &&
                $("#confirmPassword").val() == $("#newPassword").val()
            ) {
            }
        });
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'
            window.addEventListener(
                "load", function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.querySelectorAll('.needs-validation')

                    // Loop over them and prevent submission
                    Array.prototype.slice.call(forms)
                        .forEach(function (form) {
                            form.addEventListener('submit', function (event) {
                                if (!form.checkValidity()) {
                                    event.preventDefault()
                                    event.stopPropagation()
                                }

                                form.classList.add('was-validated')
                            }, false)
                        })
                })
        })()
    </script>
</body>

</html>