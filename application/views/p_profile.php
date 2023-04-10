<?php
if (isset($this->session->userdata('auth')['SIID'])) {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title><?php echo $like_result[0]['SIID']; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url("images/rotating-planet.png")?>">

    <!-- <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url("css/public_profiles/style-cards.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("css/public_profiles/style-comments.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("css/public_profiles/style-modals.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("css/public_profiles/style-private.css")?>">

    <script defer src="<?php echo base_url("js/public_profiles/script.js")?>"></script>
</head>

<body>

    <!-- COMMENTS -->

    <nav class="comment-container">
        <div class="comment">
            <div class="comment-post-title">
                <a href="#">Comments</a>
                <div class="close comment-close">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                        fill="#FFFFFFaa" class="fa-secondary">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
                    </svg>
                </div>
            </div>

            <div class="posted-comment" id="pscmts">

                <div class="dark-container">

                    <a class="dark-pfp" href="#">
                        <img src="https://media.licdn.com/dms/image/D4D03AQH527wsfrdxUA/profile-displayphoto-shrink_200_200/0/1677842168072?e=1684972800&v=beta&t=AxrRYLvpR5qhXCoFaJrU4c6DqhFfk5LSp4AFuBG0D0o"
                            alt="">
                    </a>
                    <span>Lorem ipsum dol</span>
                    <ul class="comment-react">
                        <li class="react-like">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>

                        <li class="react-dislike">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="dark-container">

                    <a class="dark-pfp" href="#">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80"
                            alt="">
                    </a>
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et inventore Atque rerum
                        iusto laborum earum! Iure eveniet est corporis?</span>
                    <ul class="comment-react">
                        <li class="react-like">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>

                        <li class="react-dislike">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="dark-container">

                    <a class="dark-pfp" href="#">
                        <img src="https://images.unsplash.com/photo-1574100004472-e536d3b6bacc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            alt="">
                    </a>
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et inventstrum dolorum.
                        Obcaecati?Lorem ipsum
                        dolor
                        sit amet
                        consectetur adipisicing elit. Earrporis?</span>
                    <ul class="comment-react">
                        <li class="react-like">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>

                        <li class="react-dislike">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>
                    </ul>
                </div>
                

                
                <div class="dark-container">

                    <a class="dark-pfp" href="#">
                        <img src="https://images.unsplash.com/photo-1543269664-56d93c1b41a6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="">
                    </a>
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et inventore
                        odit quo repudiandae omnis, laudantium laborum placeat. Atque rerum
                        iusto laborum earum! Iure eveniet est corporis?</span>
                    <ul class="comment-react">
                        <li class="react-like">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>

                        <li class="react-dislike">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="comment-input">
        <textarea placeholder="Type a comment..." id="cmtarea"></textarea>
        <div id="cmtbt">
        <button ><img src="<?php echo base_url("svg-sources/send_white_24dp.svg")?>" alt=""></button>
        <div>
      </div>
        </div>
    </nav>

    <div class="planet-cont">
        <img src="rotating-planet.png" alt="" class="planet corner">
    </div>

    <nav class="navbar">
        <div class="container-fluid">
            <a class="mx-auto my-3 navbar-brand" href="#">
                <!-- <img src="logo.png"  class="d-inline-block align-text-top"> -->
                <svg width="100%" height="100%" viewBox="0 0 320 106.55940946977786" class="css-1j8o68f">
                    <defs id="SvgjsDefs1011"></defs>
                    <g id="SvgjsG1012" featurekey="4K7G0D-0"
                        transform="matrix(1.237623715632081,0,0,1.237623715632081,-11.75742529850477,-10.148515412415026)"
                        fill="#D0BCFF">
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M79.3,30.2c6.1,0,11-4.9,11-11c0-6.1-4.9-11-11-11c-6.1,0-11,4.9-11,11c0,2.9,1.2,5.6,3,7.6L57.9,41c-2-1.9-4.7-3.1-7.6-3.1  c-2.9,0-5.6,1.1-7.5,3L29.4,28.6c0.9-1.2,1.4-2.7,1.4-4.3c0-4-3.3-7.3-7.3-7.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3  c1.9,0,3.6-0.7,4.9-1.9L41.8,42c-1.5,1.9-2.4,4.3-2.4,6.9c0,2.9,1.1,5.5,2.9,7.4L27.5,71.9c-1.9-1.6-4.3-2.5-7-2.5  c-6.1,0-11,4.9-11,11c0,6.1,4.9,11,11,11c6.1,0,11-4.9,11-11c0-2.9-1.1-5.5-2.9-7.4l14.7-15.6c1.9,1.6,4.3,2.5,7,2.5  c0.2,0,0.3,0,0.5,0l1.9,17c-4,0.8-7.1,4.3-7.1,8.6c0,4.9,3.9,8.8,8.8,8.8s8.8-3.9,8.8-8.8c0-4.9-3.9-8.8-8.8-8.8c-0.1,0-0.2,0-0.3,0  l-1.9-17c2.6-0.5,4.9-1.8,6.5-3.8l13.6,9.8c-0.6,1.1-1,2.3-1,3.7c0,4,3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3c0-4-3.3-7.3-7.3-7.3  c-2.2,0-4.1,1-5.4,2.5l-13.6-9.8c1.1-1.7,1.7-3.7,1.7-5.8c0-2.6-0.9-4.9-2.4-6.8l13.5-14.3C74.3,29.3,76.7,30.2,79.3,30.2z">
                        </path>
                    </g>
                    <g id="SvgjsG1013" featurekey="wPuqcM-0"
                        transform="matrix(1.703956311159229,0,0,1.703956311159229,118.63666318652518,28.77570556391032)"
                        fill="#D0BCFF">
                        <path
                            d="M8.0338 16.9396 c0.42878 -0.42878 1.1241 -0.42886 1.5529 0.000058594 c0.42892 0.42878 0.42892 1.124 0 1.5528 c-0.97216 0.97216 -2.2646 1.5075 -3.6396 1.5075 c-2.8382 0 -5.147 -2.3088 -5.147 -5.147 s2.3088 -5.147 5.147 -5.147 c1.3749 0 2.6674 0.5353 3.6394 1.5076 c0.42892 0.42878 0.42892 1.124 0 1.5528 c-0.42878 0.42878 -1.124 0.42878 -1.5528 0 c-0.55724 -0.55738 -1.2984 -0.86428 -2.0866 -0.86428 c-1.6271 0 -2.951 1.3238 -2.951 2.951 s1.3238 2.951 2.951 2.951 c0.78826 0 1.5293 -0.3069 2.0866 -0.86428 z M20.116 9.706 c0.60638 0 1.098 0.49164 1.098 1.098 l0 8.098 c0 0.60638 -0.49164 1.098 -1.098 1.098 c-0.55356 0 -1.0101 -0.40984 -1.0858 -0.94252 c-0.8385 0.5928 -1.8605 0.94252 -2.9632 0.94252 c-2.8382 0 -5.147 -2.3088 -5.147 -5.147 s2.3088 -5.147 5.147 -5.147 c1.1027 0 2.1246 0.34972 2.9632 0.94252 c0.075762 -0.53268 0.53226 -0.94252 1.0858 -0.94252 z M16.067 17.804 c1.6271 0 2.951 -1.3238 2.951 -2.951 s-1.3238 -2.951 -2.951 -2.951 s-2.951 1.3238 -2.951 2.951 s1.3238 2.951 2.951 2.951 z M32.594 9.706 c2.2004 0 3.9902 1.7901 3.9902 3.9902 l0 5.2059 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 l0 -5.2059 c0 -0.9892 -0.80486 -1.7941 -1.7942 -1.7941 c-0.9892 0 -1.7941 0.80472 -1.7941 1.7941 l0 5.2059 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 l0 -5.2059 c0 -0.9892 -0.80472 -1.7941 -1.7941 -1.7941 s-1.7942 0.80472 -1.7942 1.7941 l0 5.2059 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 l0 -8.098 c0 -0.60638 0.49164 -1.098 1.098 -1.098 c0.39296 0 0.7368 0.2071 0.93074 0.51744 c0.57976 -0.32872 1.2489 -0.51746 1.9615 -0.51746 c1.1374 0 2.1644 0.4793 2.892 1.2456 c0.72744 -0.7663 1.7545 -1.2456 2.892 -1.2456 z M43.3134 9.706 c2.8306 0 5.1332 2.3028 5.1332 5.1334 s-2.3028 5.1334 -5.1334 5.1334 c-1.0919 0 -2.1044 -0.34382 -2.9372 -0.92716 l0 3.5624 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 l0 -11.804 c0 -0.60638 0.49164 -1.098 1.098 -1.098 c0.55134 0 1.0065 0.40682 1.0849 0.93648 c0.83546 -0.5891 1.8529 -0.93648 2.9506 -0.93648 z M43.3134 17.7764 c1.6196 0 2.9372 -1.3176 2.9372 -2.9372 s-1.3176 -2.9372 -2.9372 -2.9372 s-2.9372 1.3176 -2.9372 2.9372 s1.3176 2.9372 2.9372 2.9372 z M59.236000000000004 9.706 c0.60638 0 1.098 0.49164 1.098 1.098 l0 4.049 c0 2.8382 -2.3088 5.147 -5.147 5.147 s-5.147 -2.3088 -5.147 -5.147 l0 -4.049 c0 -0.60638 0.49164 -1.098 1.098 -1.098 s1.098 0.49164 1.098 1.098 l0 4.049 c0 1.6271 1.3238 2.951 2.951 2.951 s2.951 -1.3238 2.951 -2.951 l0 -4.049 c0 -0.60638 0.49164 -1.098 1.098 -1.098 z M72.388 15.0378 c0.00041016 0.019629 -0.0003125 0.03916 -0.0011328 0.058242 c-0.00054688 0.01166 0.00013672 0.023184 -0.0006836 0.03498 c-0.00054688 0.0075586 -0.0015039 0.014961 -0.0020508 0.02252 l-0.0012305 0.013594 c-0.20616 2.7126 -2.4888 4.8324 -5.2136 4.8324 c-2.8834 0 -5.2294 -2.346 -5.2294 -5.2294 c0 -0.60638 0.49164 -1.098 1.098 -1.098 s1.098 0.49164 1.098 1.098 c0 1.6726 1.3607 3.0334 3.0334 3.0334 c1.4292 0 2.6458 -1.0063 2.9546 -2.362 l-3.7312 -3.7312 c-0.42878 -0.42878 -0.42878 -1.124 0 -1.5528 c0.42892 -0.42878 1.124 -0.42878 1.5529 0 l4.1214 4.1214 c0.008379 0.008379 0.015371 0.017305 0.02334 0.02582 c0.013457 0.014414 0.026914 0.028692 0.03955 0.043788 c0.011797 0.014004 0.022636 0.028282 0.033614 0.042558 c0.010566 0.013867 0.020996 0.027734 0.030878 0.042012 c0.010977 0.015918 0.02127 0.03211 0.031288 0.048438 c0.0085156 0.013867 0.016895 0.027872 0.024864 0.042148 c0.009336 0.017012 0.018125 0.034024 0.026504 0.051308 c0.0074024 0.014961 0.014531 0.030058 0.021114 0.04543 c0.0072656 0.016875 0.013984 0.03375 0.020294 0.050762 c0.0063086 0.016875 0.012207 0.033614 0.017695 0.050762 c0.0050782 0.016328 0.009746 0.03252 0.014141 0.048984 c0.0049414 0.018262 0.0094726 0.03666 0.013457 0.055332 c0.0034376 0.016191 0.0061914 0.032382 0.0089454 0.048574 c0.003164 0.018809 0.0060546 0.037754 0.0082422 0.056836 c0.0019141 0.017285 0.0031446 0.03457 0.0042382 0.051856 c0.0012305 0.017988 0.0023242 0.035976 0.0025976 0.054102 z M61.95066 10.9622 c-0.00041016 -0.019492 0.00042968 -0.03916 0.00125 -0.05838 c0.00054688 -0.01166 -0.00013672 -0.023184 0.0006836 -0.03498 c0.00054688 -0.0075586 0.0015039 -0.014961 0.0020508 -0.02252 l0.0012305 -0.013594 c0.20616 -2.7126 2.4888 -4.8324 5.2136 -4.8324 c2.8834 0 5.2294 2.346 5.2294 5.2294 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 c0 -1.6726 -1.3607 -3.0334 -3.0334 -3.0334 c-1.4292 0 -2.6458 1.0063 -2.9546 2.362 l3.7312 3.7312 c0.42878 0.42878 0.42878 1.124 0 1.5528 c-0.2144 0.2144 -0.49536 0.32158 -0.77644 0.32158 s-0.56204 -0.10719 -0.77644 -0.32158 l-4.1214 -4.1214 c-0.008379 -0.008379 -0.015371 -0.017305 -0.02334 -0.02582 c-0.013457 -0.014414 -0.026914 -0.028692 -0.03955 -0.043788 c-0.011797 -0.014004 -0.022636 -0.028282 -0.033614 -0.042558 c-0.010566 -0.013867 -0.020996 -0.027734 -0.030878 -0.042012 c-0.010977 -0.015918 -0.02127 -0.03211 -0.031288 -0.048438 c-0.0085156 -0.013867 -0.016895 -0.027872 -0.024864 -0.042148 c-0.009336 -0.017012 -0.018125 -0.034024 -0.026504 -0.051308 c-0.0074024 -0.015098 -0.014395 -0.030058 -0.021114 -0.04543 c-0.0072656 -0.016738 -0.013984 -0.03375 -0.020294 -0.050762 c-0.0063086 -0.016738 -0.012207 -0.033476 -0.017695 -0.050626 c-0.0052148 -0.016191 -0.0098828 -0.03252 -0.014277 -0.048984 c-0.0049414 -0.018398 -0.0094726 -0.03666 -0.013457 -0.055332 c-0.0034376 -0.016191 -0.0061914 -0.032382 -0.0089454 -0.048574 c-0.003164 -0.018809 -0.0060546 -0.037754 -0.0082422 -0.056836 c-0.0019141 -0.017285 -0.0031446 -0.03457 -0.0042382 -0.051856 c-0.0012305 -0.017988 -0.0023242 -0.035976 -0.0025976 -0.054102 z M79.13340000000001 9.706 c2.8306 0 5.1332 2.3028 5.1332 5.1334 s-2.3028 5.1334 -5.1334 5.1334 c-1.0919 0 -2.1044 -0.34382 -2.9372 -0.92716 l0 3.5624 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 l0 -11.804 c0 -0.60638 0.49164 -1.098 1.098 -1.098 c0.55134 0 1.0065 0.40682 1.0849 0.93648 c0.83546 -0.5891 1.8529 -0.93648 2.9506 -0.93648 z M79.13340000000001 17.7764 c1.6196 0 2.9372 -1.3176 2.9372 -2.9372 s-1.3176 -2.9372 -2.9372 -2.9372 s-2.9372 1.3176 -2.9372 2.9372 s1.3176 2.9372 2.9372 2.9372 z M95.056 9.706 c0.60638 0 1.098 0.49164 1.098 1.098 l0 8.098 c0 0.60638 -0.49164 1.098 -1.098 1.098 c-0.55356 0 -1.0101 -0.40984 -1.0858 -0.94252 c-0.8385 0.5928 -1.8605 0.94252 -2.9632 0.94252 c-2.8382 0 -5.147 -2.3088 -5.147 -5.147 s2.3088 -5.147 5.147 -5.147 c1.1027 0 2.1246 0.34972 2.9632 0.94252 c0.075762 -0.53268 0.53226 -0.94252 1.0858 -0.94252 z M91.007 17.804 c1.6271 0 2.951 -1.3238 2.951 -2.951 s-1.3238 -2.951 -2.951 -2.951 s-2.951 1.3238 -2.951 2.951 s1.3238 2.951 2.951 2.951 z M104.99380000000001 16.9396 c0.42878 -0.42878 1.1241 -0.42886 1.5529 0.000058594 c0.42892 0.42878 0.42892 1.124 0 1.5528 c-0.97216 0.97216 -2.2646 1.5075 -3.6396 1.5075 c-2.8382 0 -5.147 -2.3088 -5.147 -5.147 s2.3088 -5.147 5.147 -5.147 c1.3749 0 2.6674 0.5353 3.6394 1.5076 c0.42892 0.42878 0.42892 1.124 0 1.5528 c-0.42878 0.42878 -1.124 0.42878 -1.5528 0 c-0.55724 -0.55738 -1.2984 -0.86428 -2.0866 -0.86428 c-1.6271 0 -2.951 1.3238 -2.951 2.951 s1.3238 2.951 2.951 2.951 c0.78826 0 1.5293 -0.3069 2.0866 -0.86428 z M113.02700000000002 9.706 c2.8382 0 5.147 2.3088 5.147 5.147 c0 0.60638 -0.49164 1.098 -1.098 1.098 l-6.7882 0 c0.43646 1.085 1.4998 1.8529 2.7392 1.8529 c0.78824 0 1.5293 -0.3069 2.0866 -0.86428 c0.42892 -0.42878 1.124 -0.42866 1.5529 0 c0.42892 0.42892 0.42878 1.1241 0 1.5529 c-0.9723 0.97216 -2.2648 1.5075 -3.6396 1.5075 c-2.8382 0 -5.147 -2.3088 -5.147 -5.147 s2.3088 -5.147 5.147 -5.147 z M110.28780000000002 13.754999999999999 l5.4784 0 c-0.43646 -1.085 -1.4998 -1.8529 -2.7392 -1.8529 s-2.3028 0.76794 -2.7392 1.8529 z">
                        </path>
                    </g>
                </svg>

            </a>
        </div>
    </nav>

    

    <div class="bg-glass container-lg">
        <img class="card-img-top" src="<?php echo $like_result[0]['IMAGES']; ?>" alt="Card image cap">
        <div class="card-body little-profile text-center">
            <div class="pro-img">
                <img src="<?php echo $like_result[0]['IMAGES']; ?>" alt="user">
            </div>
            <!-- <h3 class="mb-3">John Doe</h3>

            <p>Space for writing user bio/description</p> -->

            <div class="pfp-name">
                <h2><?php echo $like_result[0]['SIID']; ?></h2>
            </div>
            <div class="pfp-bio">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>

            <button href="#" id="follow" class="follow-btn">
                Follow
            </button>

            <div class="profile-info">
                <div class="inf">
                    <h3><?php echo $like_result[0]['POPULARITY']; ?></h3>
                    <small>followers</small>
                </div>
                <div class="inf">
                    <h3><?php echo $like_result[0]['LIKES']; ?></h3>
                    <small>following</small>
                </div>
            </div>
        </div>

        <div class="allposts">
            <h1>All Posts</h1>
        </div>

        
        <main>
            <section class="dark">
                <div class="container py-4" id="postslist">
                    <!-- <h1 class="h1 text-center" id="pageHeaderTitle">My Cards Dark</h1> -->

                    <!-- <article class="postcard dark blue">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                        </a>
                        <div class="postcard__text">
                            <h1 class="postcard__title blue"><a href="#">Topic Title</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                                fugiat asperiores inventore beatae accusamus odit minima enim,
                                commodi quia, doloribus eius! Ducimus nemo accusantium maiores
                                velit corrupti tempora reiciendis molestiae repellat vero. Eveniet
                                ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                                dolores nobis enim quidem excepturi, illum quos!
                            </div>
                            <div class="postcard-profile">
                                <a href="#">
                                    <img src="https://images.unsplash.com/photo-1679412330254-90cb240038c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                                        alt="pfp" />
                                    <div>Noobmaster69</div>
                                </a>
                            </div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item comment-button play blue">
                                    <a href="#">
                                        <img src="svg-sources/forum_white_24dp.svg" alt="ico" />

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="postcard dark red">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />
                        </a>
                        <div class="postcard__text">
                            <h1 class="postcard__title red"><a href="#">Topic Title</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                                fugiat asperiores inventore beatae accusamus odit minima enim,
                                commodi quia, doloribus eius! Ducimus nemo accusantium maiores
                                velit corrupti tempora reiciendis molestiae repellat vero. Eveniet
                                ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                                dolores nobis enim quidem excepturi, illum quos!
                            </div>
                            <div class="postcard-profile">
                                <a href="#">
                                    <img src="https://images.unsplash.com/photo-1679412330254-90cb240038c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                                        alt="pfp" />
                                    <div>Noobmaster69</div>
                                </a>
                            </div>

                            <ul class="postcard__tagbox">
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item comment-button play red">
                                    <a href="#">
                                        <img src="svg-sources/forum_white_24dp.svg" alt="ico" />

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="postcard dark green">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                        </a>
                        <div class="postcard__text">
                            <h1 class="postcard__title green"><a href="#">Topic Title</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                                fugiat asperiores inventore beatae accusamus odit minima enim,
                                commodi quia, doloribus eius! Ducimus nemo accusantium maiores
                                velit corrupti tempora reiciendis molestiae repellat vero. Eveniet
                                ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                                dolores nobis enim quidem excepturi, illum quos!
                            </div>
                            <div class="postcard-profile">
                                <a href="#">
                                    <img src="https://images.unsplash.com/photo-1679412330254-90cb240038c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                                        alt="pfp" />
                                    <div>Noobmaster69</div>
                                </a>
                            </div>

                            <ul class="postcard__tagbox">
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item comment-button play green">
                                    <a href="#">
                                        <img src="svg-sources/forum_white_24dp.svg" alt="ico" />

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="postcard dark yellow">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                        </a>
                        <div class="postcard__text">
                            <h1 class="postcard__title yellow"><a href="#">Topic Title</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                                fugiat asperiores inventore beatae accusamus odit minima enim,
                                commodi quia, doloribus eius! Ducimus nemo accusantium maiores
                                velit corrupti tempora reiciendis molestiae repellat vero. Eveniet
                                ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                                dolores nobis enim quidem excepturi, illum quos!
                            </div>
                            <div class="postcard-profile">
                                <a href="#">
                                    <img src="https://images.unsplash.com/photo-1679412330254-90cb240038c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                                        alt="pfp" />
                                    <div>Noobmaster69</div>
                                </a>
                            </div>

                            <ul class="postcard__tagbox">
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item comment-button play yellow">
                                    <a href="#">
                                        <img src="svg-sources/forum_white_24dp.svg" alt="ico" />

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article> -->
                </div>
            </section>
        </main>
        <!-- <form class="needs-validation" novalidate> -->
        <!-- <ul class="nav nav-pills mt-4 mb-2" id="pills-tab" role="tablist">
            <li class="nav-item text-center col-6" role="presentation">
                <a class="nav-link btna active col-12" id="all-post-tab" data-bs-toggle="pill"
                    data-bs-target="#all-post-cards" type="button" role="tab" " href=" #all-post-cards"
                    aria-selected="true" aria-controls="all-post-cards">
                    <h4>All Posts</h4>
                </a>
            </li>
            <li class="nav-item text-center col-6" role="presentation">
                <a class="nav-link btna col-12" id="saved-post-tab" data-bs-toggle="pill"
                    data-bs-target="#saved-post-cards" type="button" role="tab" href="#saved-post-cards"
                    aria-selected="false" aria-controls="saved-post-cards">
                    <h4>Saved Posts</h4>
                </a>
            </li>

        </ul>

        <div class="tab-content mt-5" id="pills-tabContent">
            <div id="all-post-cards" class="tab-pane fade show active content-cards text-center" role="tabpanel"
                aria-labelledby="all-post-tab" tabindex="0">
                <h2>Insert all post cards here</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga doloribus cupiditate dicta
                    corrupti,
                    unde
                    ratione maiores recusandae quas ab eius molestiae doloremque expedita nulla dolorum, eveniet
                    assumenda
                    perspiciatis laudantium consequatur!.</p>






            </div>

            <div id="saved-post-cards" class="tab-pane fade content-cards text-center" role="tabpanel"
                aria-labelledby="saved-post-tab" tabindex="0">
                <h2>Saved posts cards go here</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium amet ducimus possimus aperiam
                    neque
                    magni fuga impedit, tempore voluptates. Tempora culpa et excepturi repellat nemo. Ullam hic
                    suscipit
                    aspernatur eveniet.</p>








            </div> 
        </div> -->

        <!-- <script>
            function following()
            {
                var elem = document.getElementById("follow");
                elem.value = "Following";
                
            }
        </script> -->


        <!-- </form> -->

        <!-- <script>
            function openContent(cardName, tabName) {
                // document.getElementsById(tabName).style.color="#fff";
                var i;
                var x = document.getElementsByClassName("content-cards");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                document.getElementById(cardName).style.display = "block";
            }
        </script> -->
        <!-- </div> -->
        <!-- </div> -->

    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <script>
 var loaded_posts = [];
    const primg="<?php echo ($this->session->userdata('auth')['IMAGES']); ?>";
    const pris="<?php echo ($this->session->userdata('auth')['SIID']); ?>";
    const prism="<?php echo $like_result[0]['MASKING_ID']; ?>";
    var toastMixin = Swal.mixin({
    toast: true,
    icon: 'success',
    title: 'General Title',
    animation: false,
    position: 'top-right',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  });
$(document).ready(function () {
    load_more_posts('load');
  $(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
     // alert("bottom!");
      load_more_posts('scroll');
    }
  });
});
var flag=0;
function load_more_posts(source) {
  var last_ranking = 90; 
  if (loaded_posts.length > 0) {
    var last_post_id = loaded_posts[loaded_posts.length - 1].ID;
    last_ranking = loaded_posts[loaded_posts.length - 1].RATINGS;
    console.log(last_ranking);
    console.log(loaded_posts.length);
  }
  $.ajax({
    url: '<?php echo base_url("index.php/ProfileController/feedload") ?>',
    method: 'POST',
    data: {fr:prism,last_ranking: last_ranking ,loaded_posts: loaded_posts.join(',')},
    success: function(response) {
      var posts = JSON.parse(response);
      console.log(source);
      if (source === 'load') {
        $('#blog-posts').html('');
      }
      for (var i = 0; i < posts.length; i++) {
        if (!post_exists(posts[i].ID)) { 
          // if(flag%2==0)
          // {//'<div class="post">' + posts[i].TITLE + '</div>'
            if (posts[i].IMAGE==null) {
              $('#postslist').append('<article class="postcard dark blue"> <div class="postcard__text"> <h1 class="postcard__title blue"><a href="#">'+posts[i].TITLE+'</a></h1> <div class="postcard__subtitle small"> <time datetime="2020-05-25 12:00:00"> <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020 </time> </div> <div class="postcard__bar"></div> <div class="postcard__preview-txt">'+atob(posts[i].POST)+' </div> <div class="postcard-profile"> <a href="http://localhost/anonimly/index.php/ProfileController/profile?id='+posts[i].MASKIND_ID+'"> <img src="'+posts[i].IMAGES+'" alt="pfp" /> <div>'+posts[i].SIID+'</div> </a> </div> <ul class="postcard__tagbox"> <li class="tag__item" id="pl'+posts[i].ID+'"> <a href="javascript:plike('+posts[i].ID+');" ><img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /></a> <!-- <i class="fas fa-tag mr-2"></i>Upvote --> </li> <li class="tag__item" id="pd'+posts[i].ID+'"> <a href="javascript:pdlike('+posts[i].ID+');" ><img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /></a> <!-- <i class="fas fa-clock mr-2"></i>Downvote --> </li> <li class="tag__item comment-button play blue"> <a href="javascript:cmtload('+posts[i].ID+');" id="cmtt"> <img src="<?php echo base_url("svg-sources/forum_white_24dp.svg")?>" alt="ico" /> <!-- <i class="fas fa-play mr-2"></i>Comment --> </a> </li> </ul> </div> </article>');

            }
            else{
            var imx="http://localhost/anonimly/uploads/";
          $('#postslist').append('<article class="postcard dark blue"> <a class="postcard__img_link" href="#"> <img class="postcard__img" src="'+imx+posts[i].IMAGE+'" alt="Image Title" /> </a> <div class="postcard__text"> <h1 class="postcard__title blue"><a href="#">'+posts[i].TITLE+'</a></h1> <div class="postcard__subtitle small"> <time datetime="2020-05-25 12:00:00"> <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020 </time> </div> <div class="postcard__bar"></div> <div class="postcard__preview-txt">'+atob(posts[i].POST)+' </div> <div class="postcard-profile"> <a href="http://localhost/anonimly/index.php/ProfileController/profile?id='+posts[i].MASKIND_ID+'"> <img src="'+posts[i].IMAGES+'" alt="pfp" /> <div>'+posts[i].SIID+'</div> </a> </div> <ul class="postcard__tagbox"> <li class="tag__item" id="pl'+posts[i].ID+'"> <a href="javascript:plike('+posts[i].ID+');" ><img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /></a> <!-- <i class="fas fa-tag mr-2"></i>Upvote --> </li> <li class="tag__item" id="pd'+posts[i].ID+'"> <a href="javascript:pdlike('+posts[i].ID+');" ><img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /></a> <!-- <i class="fas fa-clock mr-2"></i>Downvote --> </li> <li class="tag__item comment-button play blue"> <a href="javascript:cmtload('+posts[i].ID+');" id="cmtt"> <img src="<?php echo base_url("svg-sources/forum_white_24dp.svg")?>" alt="ico" /> <!-- <i class="fas fa-play mr-2"></i>Comment --> </a> </li> </ul> </div> </article>');
         // }
        }
         // flag++;
          loaded_posts.push(posts[i]);
        }
      }
    }
  });
  
}
function post_exists(post_id) {
  for (var i = 0; i < loaded_posts.length; i++) {
    if (loaded_posts[i].ID == post_id) {
      return true;
    }
  }
  return false;
}
$( ".close" ).click(function() {
    const commentContainer = document.querySelector('.comment-container');
    commentContainer.style.display = "none";
});
function cmtload(i) {
       // console.log("test");
  const commentContainer = document.querySelector('.comment-container');
  
 $('#cmtbt').html(' <button onclick="sendcmt('+i+')"><img src="<?php echo base_url("svg-sources/send_white_24dp.svg")?>" alt=""></button>');
 $('#pscmts').html(' ');
 //console.log(cdata);
 var cdata={
                           
                           pid:i,
                           
                    };
        $.ajax({
  url: '<?php echo base_url("index.php/MainController/cmtload") ?>',
  method: 'POST',
  data: cdata,
  dataType: "json",
  cache:false,
  success: function(response) {
    //var posts = JSON.parse(response);
    //console.log(posts);
   
    var lenx=response.length;
    console.log(lenx);
    if (lenx>0) {
      
    
      for (var lc = 0; lc< lenx; lc++) {
    $('#pscmts').append('<div class="dark-container"> <a class="dark-pfp" href="#"> <img src="'+response[lc].MASKER_IMAGE+'" alt=""> </a> <span>'+response[lc].COMMENT+'</span><ul class="comment-react"> <li class="react-like" id="cl'+response[lc].ID+'"> <a href="javascript:cl('+response[lc].ID+');"> <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /> </a> </li> <li class="react-dislike" id="cdl'+response[lc].ID+'" > <a href="javascript:cdis('+response[lc].ID+');"> <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /> </a> </li> </ul> </div>')

    }
  }
//$('#cmtarea').val('');
//$('#pscmts').append('<div class="dark-container first"> <a class="dark-pfp" href="#"> <img src="'+primg+'" alt=""> </a> '+comment+'<ul class="comment-react"> <li class="react-like"> <a href="javscript:sicmtlik('+response+');"> <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /> </a> </li> <li class="react-dislike"> <a href="javscript:sicmtdis('+response+');"> <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /> </a> </li> </ul> </div>')
commentContainer.style.display = "flex";
},
  error: function(errorThrown) {
    console.log(errorThrown);
  }
});

}
function sendcmt(i)
{
  var comment = $('#cmtarea').val();
  if(comment.length===0)
      {
        toastMixin.fire({
          title: "&#128552; Comment can't be empty",
    icon: 'error',
  });
  }
      else{
        var cdata={
                           
                            pid:i,
                            mimg:primg,
                            cmt:comment,
                            
                     };
                     console.log(cdata);
        $.ajax({
  url: '<?php echo base_url("index.php/MainController/comtupl") ?>',
  method: 'POST',
  data: cdata,
  success: function(response) {
    console.log(response);
   
      Swal.fire(
  '&#128526; You have done it!',
  'Keep Commenting  &#128077;',
  'success'
);
$('#cmtarea').val('');
$('#pscmts').prepend('<div class="dark-container"> <a class="dark-pfp" href="#"> <img src="'+primg+'" alt=""> </a> <span>'+comment+'</span><ul class="comment-react"> <li class="react-like"> <a href="javascript:cl('+response+');"> <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /> </a> </li> <li class="react-dislike"> <a href="javascript:cdis('+response+');"> <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /> </a> </li> </ul> </div>')
},
  error: function(errorThrown) {
    console.log(errorThrown);
  }
});
            }
}
function plike(i)
{

 
  var cdata={
                           
                           pid:i,
                          
                           
                    };
                    console.log(cdata);
       $.ajax({
 url: '<?php echo base_url("index.php/MainController/postlike") ?>',
 method: 'POST',
 data: cdata,
 success: function(response) {
   console.log(response);
  
   $("#pd"+i).css("background-color", "rgba(83, 83, 83, 0.4)");
   $("#pl"+i).css("background-color", "green");
 },
 error: function(errorThrown) {
   console.log(errorThrown);
 }
});
}
function pdlike(i)
{
  
  var cdata={
                           
                           pid:i,
                        
                           
                    };
                  //  console.log(cdata);
       $.ajax({
 url: '<?php echo base_url("index.php/MainController/postdislike") ?>',
 method: 'POST',
 data: cdata,
 success: function(response) {
   console.log(response);
   $("#pd"+i).css("background-color", "red");
   $("#pl"+i).css("background-color", "rgba(83, 83, 83, 0.4)");
 },
 error: function(errorThrown) {
   console.log(errorThrown);
 }
});
}
function cl(i)
{
  
  var cdata={
                           
                           pid:i,
                          
                           
                    };
                    console.log(cdata);
       $.ajax({
 url: '<?php echo base_url("index.php/MainController/commlike") ?>',
 method: 'POST',
 data: cdata,
 success: function(response) {
   console.log(response);
  
   $("#cdl"+i).css("background-color", "rgba(83, 83, 83, 0.4)");
   $("#cl"+i).css("background-color", "green");
 },
 error: function(errorThrown) {
   console.log(errorThrown);
 }
});
}
function cdis(i)
{
 
  var cdata={
                           
                           pid:i,
                        
                           
                    };
                  //  console.log(cdata);
       $.ajax({
 url: '<?php echo base_url("index.php/MainController/commdislike") ?>',
 method: 'POST',
 data: cdata,
 success: function(response) {
   console.log(response);
   $("#cdl"+i).css("background-color", "red");
   $("#cl"+i).css("background-color", "rgba(83, 83, 83, 0.4)");
 },
 error: function(errorThrown) {
   console.log(errorThrown);
 }
});
}
    </script>
</body>

</html>
<?php
}
else {
    ?>
    <!DOCTYPE html>
<html lang="en">

<head>
    
    <title><?php echo $like_result[0]['SIID']; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="rotating-planet.png">
    <!-- <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url("css/public_profiles/style-cards.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("css/public_profiles/style-comments.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("css/public_profiles/style-modals.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("css/public_profiles/style-private.css")?>">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url("images/rotating-planet.png")?>">

    <script defer src="<?php echo base_url("js/public_profiles/script.js")?>"></script>
</head>

<body>

    <!-- COMMENTS -->

    <nav class="comment-container">
        <div class="comment">
            <div class="comment-post-title">
                <a href="#">Comments</a>
                <div class="close comment-close">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                        fill="#FFFFFFaa" class="fa-secondary">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
                    </svg>
                </div>
            </div>

            <div class="posted-comment" id="pscmts">

                <div class="dark-container">

                    <a class="dark-pfp" href="#">
                        <img src="https://media.licdn.com/dms/image/D4D03AQH527wsfrdxUA/profile-displayphoto-shrink_200_200/0/1677842168072?e=1684972800&v=beta&t=AxrRYLvpR5qhXCoFaJrU4c6DqhFfk5LSp4AFuBG0D0o"
                            alt="">
                    </a>
                    <span>Lorem ipsum dol</span>
                    <ul class="comment-react">
                        <li class="react-like">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>

                        <li class="react-dislike">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="dark-container">

                    <a class="dark-pfp" href="#">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80"
                            alt="">
                    </a>
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et inventore Atque rerum
                        iusto laborum earum! Iure eveniet est corporis?</span>
                    <ul class="comment-react">
                        <li class="react-like">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>

                        <li class="react-dislike">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="dark-container">

                    <a class="dark-pfp" href="#">
                        <img src="https://images.unsplash.com/photo-1574100004472-e536d3b6bacc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            alt="">
                    </a>
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et inventstrum dolorum.
                        Obcaecati?Lorem ipsum
                        dolor
                        sit amet
                        consectetur adipisicing elit. Earrporis?</span>
                    <ul class="comment-react">
                        <li class="react-like">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>

                        <li class="react-dislike">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>
                    </ul>
                </div>
                

                
                <div class="dark-container">

                    <a class="dark-pfp" href="#">
                        <img src="https://images.unsplash.com/photo-1543269664-56d93c1b41a6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="">
                    </a>
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et inventore
                        odit quo repudiandae omnis, laudantium laborum placeat. Atque rerum
                        iusto laborum earum! Iure eveniet est corporis?</span>
                    <ul class="comment-react">
                        <li class="react-like">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>

                        <li class="react-dislike">
                            <a href="#">
                                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="comment-input">
                <textarea placeholder="Type a comment..."></textarea>
                <button><img src="svg-sources/send_white_24dp.svg" alt=""></button>
            </div>
        </div>
    </nav>

    <div class="planet-cont">
        <img src="rotating-planet.png" alt="" class="planet corner">
    </div>

    <nav class="navbar">
        <div class="container-fluid">
            <a class="mx-auto my-3 navbar-brand" href="#">
                <!-- <img src="logo.png"  class="d-inline-block align-text-top"> -->
                <svg width="100%" height="100%" viewBox="0 0 320 106.55940946977786" class="css-1j8o68f">
                    <defs id="SvgjsDefs1011"></defs>
                    <g id="SvgjsG1012" featurekey="4K7G0D-0"
                        transform="matrix(1.237623715632081,0,0,1.237623715632081,-11.75742529850477,-10.148515412415026)"
                        fill="#D0BCFF">
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M79.3,30.2c6.1,0,11-4.9,11-11c0-6.1-4.9-11-11-11c-6.1,0-11,4.9-11,11c0,2.9,1.2,5.6,3,7.6L57.9,41c-2-1.9-4.7-3.1-7.6-3.1  c-2.9,0-5.6,1.1-7.5,3L29.4,28.6c0.9-1.2,1.4-2.7,1.4-4.3c0-4-3.3-7.3-7.3-7.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3  c1.9,0,3.6-0.7,4.9-1.9L41.8,42c-1.5,1.9-2.4,4.3-2.4,6.9c0,2.9,1.1,5.5,2.9,7.4L27.5,71.9c-1.9-1.6-4.3-2.5-7-2.5  c-6.1,0-11,4.9-11,11c0,6.1,4.9,11,11,11c6.1,0,11-4.9,11-11c0-2.9-1.1-5.5-2.9-7.4l14.7-15.6c1.9,1.6,4.3,2.5,7,2.5  c0.2,0,0.3,0,0.5,0l1.9,17c-4,0.8-7.1,4.3-7.1,8.6c0,4.9,3.9,8.8,8.8,8.8s8.8-3.9,8.8-8.8c0-4.9-3.9-8.8-8.8-8.8c-0.1,0-0.2,0-0.3,0  l-1.9-17c2.6-0.5,4.9-1.8,6.5-3.8l13.6,9.8c-0.6,1.1-1,2.3-1,3.7c0,4,3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3c0-4-3.3-7.3-7.3-7.3  c-2.2,0-4.1,1-5.4,2.5l-13.6-9.8c1.1-1.7,1.7-3.7,1.7-5.8c0-2.6-0.9-4.9-2.4-6.8l13.5-14.3C74.3,29.3,76.7,30.2,79.3,30.2z">
                        </path>
                    </g>
                    <g id="SvgjsG1013" featurekey="wPuqcM-0"
                        transform="matrix(1.703956311159229,0,0,1.703956311159229,118.63666318652518,28.77570556391032)"
                        fill="#D0BCFF">
                        <path
                            d="M8.0338 16.9396 c0.42878 -0.42878 1.1241 -0.42886 1.5529 0.000058594 c0.42892 0.42878 0.42892 1.124 0 1.5528 c-0.97216 0.97216 -2.2646 1.5075 -3.6396 1.5075 c-2.8382 0 -5.147 -2.3088 -5.147 -5.147 s2.3088 -5.147 5.147 -5.147 c1.3749 0 2.6674 0.5353 3.6394 1.5076 c0.42892 0.42878 0.42892 1.124 0 1.5528 c-0.42878 0.42878 -1.124 0.42878 -1.5528 0 c-0.55724 -0.55738 -1.2984 -0.86428 -2.0866 -0.86428 c-1.6271 0 -2.951 1.3238 -2.951 2.951 s1.3238 2.951 2.951 2.951 c0.78826 0 1.5293 -0.3069 2.0866 -0.86428 z M20.116 9.706 c0.60638 0 1.098 0.49164 1.098 1.098 l0 8.098 c0 0.60638 -0.49164 1.098 -1.098 1.098 c-0.55356 0 -1.0101 -0.40984 -1.0858 -0.94252 c-0.8385 0.5928 -1.8605 0.94252 -2.9632 0.94252 c-2.8382 0 -5.147 -2.3088 -5.147 -5.147 s2.3088 -5.147 5.147 -5.147 c1.1027 0 2.1246 0.34972 2.9632 0.94252 c0.075762 -0.53268 0.53226 -0.94252 1.0858 -0.94252 z M16.067 17.804 c1.6271 0 2.951 -1.3238 2.951 -2.951 s-1.3238 -2.951 -2.951 -2.951 s-2.951 1.3238 -2.951 2.951 s1.3238 2.951 2.951 2.951 z M32.594 9.706 c2.2004 0 3.9902 1.7901 3.9902 3.9902 l0 5.2059 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 l0 -5.2059 c0 -0.9892 -0.80486 -1.7941 -1.7942 -1.7941 c-0.9892 0 -1.7941 0.80472 -1.7941 1.7941 l0 5.2059 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 l0 -5.2059 c0 -0.9892 -0.80472 -1.7941 -1.7941 -1.7941 s-1.7942 0.80472 -1.7942 1.7941 l0 5.2059 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 l0 -8.098 c0 -0.60638 0.49164 -1.098 1.098 -1.098 c0.39296 0 0.7368 0.2071 0.93074 0.51744 c0.57976 -0.32872 1.2489 -0.51746 1.9615 -0.51746 c1.1374 0 2.1644 0.4793 2.892 1.2456 c0.72744 -0.7663 1.7545 -1.2456 2.892 -1.2456 z M43.3134 9.706 c2.8306 0 5.1332 2.3028 5.1332 5.1334 s-2.3028 5.1334 -5.1334 5.1334 c-1.0919 0 -2.1044 -0.34382 -2.9372 -0.92716 l0 3.5624 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 l0 -11.804 c0 -0.60638 0.49164 -1.098 1.098 -1.098 c0.55134 0 1.0065 0.40682 1.0849 0.93648 c0.83546 -0.5891 1.8529 -0.93648 2.9506 -0.93648 z M43.3134 17.7764 c1.6196 0 2.9372 -1.3176 2.9372 -2.9372 s-1.3176 -2.9372 -2.9372 -2.9372 s-2.9372 1.3176 -2.9372 2.9372 s1.3176 2.9372 2.9372 2.9372 z M59.236000000000004 9.706 c0.60638 0 1.098 0.49164 1.098 1.098 l0 4.049 c0 2.8382 -2.3088 5.147 -5.147 5.147 s-5.147 -2.3088 -5.147 -5.147 l0 -4.049 c0 -0.60638 0.49164 -1.098 1.098 -1.098 s1.098 0.49164 1.098 1.098 l0 4.049 c0 1.6271 1.3238 2.951 2.951 2.951 s2.951 -1.3238 2.951 -2.951 l0 -4.049 c0 -0.60638 0.49164 -1.098 1.098 -1.098 z M72.388 15.0378 c0.00041016 0.019629 -0.0003125 0.03916 -0.0011328 0.058242 c-0.00054688 0.01166 0.00013672 0.023184 -0.0006836 0.03498 c-0.00054688 0.0075586 -0.0015039 0.014961 -0.0020508 0.02252 l-0.0012305 0.013594 c-0.20616 2.7126 -2.4888 4.8324 -5.2136 4.8324 c-2.8834 0 -5.2294 -2.346 -5.2294 -5.2294 c0 -0.60638 0.49164 -1.098 1.098 -1.098 s1.098 0.49164 1.098 1.098 c0 1.6726 1.3607 3.0334 3.0334 3.0334 c1.4292 0 2.6458 -1.0063 2.9546 -2.362 l-3.7312 -3.7312 c-0.42878 -0.42878 -0.42878 -1.124 0 -1.5528 c0.42892 -0.42878 1.124 -0.42878 1.5529 0 l4.1214 4.1214 c0.008379 0.008379 0.015371 0.017305 0.02334 0.02582 c0.013457 0.014414 0.026914 0.028692 0.03955 0.043788 c0.011797 0.014004 0.022636 0.028282 0.033614 0.042558 c0.010566 0.013867 0.020996 0.027734 0.030878 0.042012 c0.010977 0.015918 0.02127 0.03211 0.031288 0.048438 c0.0085156 0.013867 0.016895 0.027872 0.024864 0.042148 c0.009336 0.017012 0.018125 0.034024 0.026504 0.051308 c0.0074024 0.014961 0.014531 0.030058 0.021114 0.04543 c0.0072656 0.016875 0.013984 0.03375 0.020294 0.050762 c0.0063086 0.016875 0.012207 0.033614 0.017695 0.050762 c0.0050782 0.016328 0.009746 0.03252 0.014141 0.048984 c0.0049414 0.018262 0.0094726 0.03666 0.013457 0.055332 c0.0034376 0.016191 0.0061914 0.032382 0.0089454 0.048574 c0.003164 0.018809 0.0060546 0.037754 0.0082422 0.056836 c0.0019141 0.017285 0.0031446 0.03457 0.0042382 0.051856 c0.0012305 0.017988 0.0023242 0.035976 0.0025976 0.054102 z M61.95066 10.9622 c-0.00041016 -0.019492 0.00042968 -0.03916 0.00125 -0.05838 c0.00054688 -0.01166 -0.00013672 -0.023184 0.0006836 -0.03498 c0.00054688 -0.0075586 0.0015039 -0.014961 0.0020508 -0.02252 l0.0012305 -0.013594 c0.20616 -2.7126 2.4888 -4.8324 5.2136 -4.8324 c2.8834 0 5.2294 2.346 5.2294 5.2294 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 c0 -1.6726 -1.3607 -3.0334 -3.0334 -3.0334 c-1.4292 0 -2.6458 1.0063 -2.9546 2.362 l3.7312 3.7312 c0.42878 0.42878 0.42878 1.124 0 1.5528 c-0.2144 0.2144 -0.49536 0.32158 -0.77644 0.32158 s-0.56204 -0.10719 -0.77644 -0.32158 l-4.1214 -4.1214 c-0.008379 -0.008379 -0.015371 -0.017305 -0.02334 -0.02582 c-0.013457 -0.014414 -0.026914 -0.028692 -0.03955 -0.043788 c-0.011797 -0.014004 -0.022636 -0.028282 -0.033614 -0.042558 c-0.010566 -0.013867 -0.020996 -0.027734 -0.030878 -0.042012 c-0.010977 -0.015918 -0.02127 -0.03211 -0.031288 -0.048438 c-0.0085156 -0.013867 -0.016895 -0.027872 -0.024864 -0.042148 c-0.009336 -0.017012 -0.018125 -0.034024 -0.026504 -0.051308 c-0.0074024 -0.015098 -0.014395 -0.030058 -0.021114 -0.04543 c-0.0072656 -0.016738 -0.013984 -0.03375 -0.020294 -0.050762 c-0.0063086 -0.016738 -0.012207 -0.033476 -0.017695 -0.050626 c-0.0052148 -0.016191 -0.0098828 -0.03252 -0.014277 -0.048984 c-0.0049414 -0.018398 -0.0094726 -0.03666 -0.013457 -0.055332 c-0.0034376 -0.016191 -0.0061914 -0.032382 -0.0089454 -0.048574 c-0.003164 -0.018809 -0.0060546 -0.037754 -0.0082422 -0.056836 c-0.0019141 -0.017285 -0.0031446 -0.03457 -0.0042382 -0.051856 c-0.0012305 -0.017988 -0.0023242 -0.035976 -0.0025976 -0.054102 z M79.13340000000001 9.706 c2.8306 0 5.1332 2.3028 5.1332 5.1334 s-2.3028 5.1334 -5.1334 5.1334 c-1.0919 0 -2.1044 -0.34382 -2.9372 -0.92716 l0 3.5624 c0 0.60638 -0.49164 1.098 -1.098 1.098 s-1.098 -0.49164 -1.098 -1.098 l0 -11.804 c0 -0.60638 0.49164 -1.098 1.098 -1.098 c0.55134 0 1.0065 0.40682 1.0849 0.93648 c0.83546 -0.5891 1.8529 -0.93648 2.9506 -0.93648 z M79.13340000000001 17.7764 c1.6196 0 2.9372 -1.3176 2.9372 -2.9372 s-1.3176 -2.9372 -2.9372 -2.9372 s-2.9372 1.3176 -2.9372 2.9372 s1.3176 2.9372 2.9372 2.9372 z M95.056 9.706 c0.60638 0 1.098 0.49164 1.098 1.098 l0 8.098 c0 0.60638 -0.49164 1.098 -1.098 1.098 c-0.55356 0 -1.0101 -0.40984 -1.0858 -0.94252 c-0.8385 0.5928 -1.8605 0.94252 -2.9632 0.94252 c-2.8382 0 -5.147 -2.3088 -5.147 -5.147 s2.3088 -5.147 5.147 -5.147 c1.1027 0 2.1246 0.34972 2.9632 0.94252 c0.075762 -0.53268 0.53226 -0.94252 1.0858 -0.94252 z M91.007 17.804 c1.6271 0 2.951 -1.3238 2.951 -2.951 s-1.3238 -2.951 -2.951 -2.951 s-2.951 1.3238 -2.951 2.951 s1.3238 2.951 2.951 2.951 z M104.99380000000001 16.9396 c0.42878 -0.42878 1.1241 -0.42886 1.5529 0.000058594 c0.42892 0.42878 0.42892 1.124 0 1.5528 c-0.97216 0.97216 -2.2646 1.5075 -3.6396 1.5075 c-2.8382 0 -5.147 -2.3088 -5.147 -5.147 s2.3088 -5.147 5.147 -5.147 c1.3749 0 2.6674 0.5353 3.6394 1.5076 c0.42892 0.42878 0.42892 1.124 0 1.5528 c-0.42878 0.42878 -1.124 0.42878 -1.5528 0 c-0.55724 -0.55738 -1.2984 -0.86428 -2.0866 -0.86428 c-1.6271 0 -2.951 1.3238 -2.951 2.951 s1.3238 2.951 2.951 2.951 c0.78826 0 1.5293 -0.3069 2.0866 -0.86428 z M113.02700000000002 9.706 c2.8382 0 5.147 2.3088 5.147 5.147 c0 0.60638 -0.49164 1.098 -1.098 1.098 l-6.7882 0 c0.43646 1.085 1.4998 1.8529 2.7392 1.8529 c0.78824 0 1.5293 -0.3069 2.0866 -0.86428 c0.42892 -0.42878 1.124 -0.42866 1.5529 0 c0.42892 0.42892 0.42878 1.1241 0 1.5529 c-0.9723 0.97216 -2.2648 1.5075 -3.6396 1.5075 c-2.8382 0 -5.147 -2.3088 -5.147 -5.147 s2.3088 -5.147 5.147 -5.147 z M110.28780000000002 13.754999999999999 l5.4784 0 c-0.43646 -1.085 -1.4998 -1.8529 -2.7392 -1.8529 s-2.3028 0.76794 -2.7392 1.8529 z">
                        </path>
                    </g>
                </svg>

            </a>
        </div>
    </nav>

    

    <div class="bg-glass container-lg">
        <img class="card-img-top" src="<?php echo $like_result[0]['IMAGES']; ?>" alt="Card image cap">
        <div class="card-body little-profile text-center">
            <div class="pro-img">
                <img src="<?php echo $like_result[0]['IMAGES']; ?>" alt="user">
            </div>
            <!-- <h3 class="mb-3">John Doe</h3>

            <p>Space for writing user bio/description</p> -->

            <div class="pfp-name">
                <h2><?php echo $like_result[0]['SIID']; ?></h2>
            </div>
            <div class="pfp-bio">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>

            <button href="#" id="follow" class="follow-btn">
                Follow
            </button>

            <div class="profile-info">
                <div class="inf">
                    <h3><?php echo $like_result[0]['POPULARITY']; ?></h3>
                    <small>followers</small>
                </div>
                <div class="inf">
                    <h3><?php echo $like_result[0]['LIKES']; ?></h3>
                    <small>following</small>
                </div>
            </div>
        </div>

        <div class="allposts">
            <h1>All Posts</h1>
        </div>

        
        <main>
            <section class="dark">
                <div class="container py-4" id="postslist">
                    <!-- <h1 class="h1 text-center" id="pageHeaderTitle">My Cards Dark</h1> -->

                    <!-- <article class="postcard dark blue">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                        </a>
                        <div class="postcard__text">
                            <h1 class="postcard__title blue"><a href="#">Topic Title</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                                fugiat asperiores inventore beatae accusamus odit minima enim,
                                commodi quia, doloribus eius! Ducimus nemo accusantium maiores
                                velit corrupti tempora reiciendis molestiae repellat vero. Eveniet
                                ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                                dolores nobis enim quidem excepturi, illum quos!
                            </div>
                            <div class="postcard-profile">
                                <a href="#">
                                    <img src="https://images.unsplash.com/photo-1679412330254-90cb240038c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                                        alt="pfp" />
                                    <div>Noobmaster69</div>
                                </a>
                            </div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item comment-button play blue">
                                    <a href="#">
                                        <img src="svg-sources/forum_white_24dp.svg" alt="ico" />

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="postcard dark red">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />
                        </a>
                        <div class="postcard__text">
                            <h1 class="postcard__title red"><a href="#">Topic Title</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                                fugiat asperiores inventore beatae accusamus odit minima enim,
                                commodi quia, doloribus eius! Ducimus nemo accusantium maiores
                                velit corrupti tempora reiciendis molestiae repellat vero. Eveniet
                                ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                                dolores nobis enim quidem excepturi, illum quos!
                            </div>
                            <div class="postcard-profile">
                                <a href="#">
                                    <img src="https://images.unsplash.com/photo-1679412330254-90cb240038c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                                        alt="pfp" />
                                    <div>Noobmaster69</div>
                                </a>
                            </div>

                            <ul class="postcard__tagbox">
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item comment-button play red">
                                    <a href="#">
                                        <img src="svg-sources/forum_white_24dp.svg" alt="ico" />

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="postcard dark green">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                        </a>
                        <div class="postcard__text">
                            <h1 class="postcard__title green"><a href="#">Topic Title</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                                fugiat asperiores inventore beatae accusamus odit minima enim,
                                commodi quia, doloribus eius! Ducimus nemo accusantium maiores
                                velit corrupti tempora reiciendis molestiae repellat vero. Eveniet
                                ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                                dolores nobis enim quidem excepturi, illum quos!
                            </div>
                            <div class="postcard-profile">
                                <a href="#">
                                    <img src="https://images.unsplash.com/photo-1679412330254-90cb240038c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                                        alt="pfp" />
                                    <div>Noobmaster69</div>
                                </a>
                            </div>

                            <ul class="postcard__tagbox">
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item comment-button play green">
                                    <a href="#">
                                        <img src="svg-sources/forum_white_24dp.svg" alt="ico" />

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="postcard dark yellow">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                        </a>
                        <div class="postcard__text">
                            <h1 class="postcard__title yellow"><a href="#">Topic Title</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                                fugiat asperiores inventore beatae accusamus odit minima enim,
                                commodi quia, doloribus eius! Ducimus nemo accusantium maiores
                                velit corrupti tempora reiciendis molestiae repellat vero. Eveniet
                                ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                                dolores nobis enim quidem excepturi, illum quos!
                            </div>
                            <div class="postcard-profile">
                                <a href="#">
                                    <img src="https://images.unsplash.com/photo-1679412330254-90cb240038c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                                        alt="pfp" />
                                    <div>Noobmaster69</div>
                                </a>
                            </div>

                            <ul class="postcard__tagbox">
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item">
                                    <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />

                                </li>
                                <li class="tag__item comment-button play yellow">
                                    <a href="#">
                                        <img src="svg-sources/forum_white_24dp.svg" alt="ico" />

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article> -->
                </div>
            </section>
        </main>
        <!-- <form class="needs-validation" novalidate> -->
        <!-- <ul class="nav nav-pills mt-4 mb-2" id="pills-tab" role="tablist">
            <li class="nav-item text-center col-6" role="presentation">
                <a class="nav-link btna active col-12" id="all-post-tab" data-bs-toggle="pill"
                    data-bs-target="#all-post-cards" type="button" role="tab" " href=" #all-post-cards"
                    aria-selected="true" aria-controls="all-post-cards">
                    <h4>All Posts</h4>
                </a>
            </li>
            <li class="nav-item text-center col-6" role="presentation">
                <a class="nav-link btna col-12" id="saved-post-tab" data-bs-toggle="pill"
                    data-bs-target="#saved-post-cards" type="button" role="tab" href="#saved-post-cards"
                    aria-selected="false" aria-controls="saved-post-cards">
                    <h4>Saved Posts</h4>
                </a>
            </li>

        </ul>

        <div class="tab-content mt-5" id="pills-tabContent">
            <div id="all-post-cards" class="tab-pane fade show active content-cards text-center" role="tabpanel"
                aria-labelledby="all-post-tab" tabindex="0">
                <h2>Insert all post cards here</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga doloribus cupiditate dicta
                    corrupti,
                    unde
                    ratione maiores recusandae quas ab eius molestiae doloremque expedita nulla dolorum, eveniet
                    assumenda
                    perspiciatis laudantium consequatur!.</p>






            </div>

            <div id="saved-post-cards" class="tab-pane fade content-cards text-center" role="tabpanel"
                aria-labelledby="saved-post-tab" tabindex="0">
                <h2>Saved posts cards go here</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium amet ducimus possimus aperiam
                    neque
                    magni fuga impedit, tempore voluptates. Tempora culpa et excepturi repellat nemo. Ullam hic
                    suscipit
                    aspernatur eveniet.</p>








            </div> 
        </div> -->

        <!-- <script>
            function following()
            {
                var elem = document.getElementById("follow");
                elem.value = "Following";
                
            }
        </script> -->


        <!-- </form> -->

        <!-- <script>
            function openContent(cardName, tabName) {
                // document.getElementsById(tabName).style.color="#fff";
                var i;
                var x = document.getElementsByClassName("content-cards");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                document.getElementById(cardName).style.display = "block";
            }
        </script> -->
        <!-- </div> -->
        <!-- </div> -->

    </div>
   
    <script>
 var loaded_posts = [];
   
 const prism="<?php echo $like_result[0]['MASKING_ID']; ?>";
 
$(document).ready(function () {
    load_more_posts('load');
  $(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
     // alert("bottom!");
      load_more_posts('scroll');
    }
  });
});
var flag=0;
function load_more_posts(source) {
  var last_ranking = 90; 
  if (loaded_posts.length > 0) {
    var last_post_id = loaded_posts[loaded_posts.length - 1].ID;
    last_ranking = loaded_posts[loaded_posts.length - 1].RATINGS;
    console.log(last_ranking);
    console.log(loaded_posts.length);
  }
  $.ajax({
    url: '<?php echo base_url("index.php/ProfileController/feedload") ?>',
    method: 'POST',
    data: {fr:prism,last_ranking: last_ranking ,loaded_posts: loaded_posts.join(',')},
    success: function(response) {
      var posts = JSON.parse(response);
      console.log(source);
      if (source === 'load') {
        $('#blog-posts').html('');
      }
      for (var i = 0; i < posts.length; i++) {
        if (!post_exists(posts[i].ID)) { 
          // if(flag%2==0)
          // {//'<div class="post">' + posts[i].TITLE + '</div>'
            if (posts[i].IMAGE==null) {
              $('#postslist').append('<article class="postcard dark blue"> <div class="postcard__text"> <h1 class="postcard__title blue"><a href="#">'+posts[i].TITLE+'</a></h1> <div class="postcard__subtitle small"> <time datetime="2020-05-25 12:00:00"> <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020 </time> </div> <div class="postcard__bar"></div> <div class="postcard__preview-txt">'+atob(posts[i].POST)+' </div> <div class="postcard-profile"> <a href="http://localhost/anonimly/index.php/ProfileController/profile?id='+posts[i].MASKIND_ID+'"> <img src="'+posts[i].IMAGES+'" alt="pfp" /> <div>'+posts[i].SIID+'</div> </a> </div> <ul class="postcard__tagbox"> <li class="tag__item" id="pl'+posts[i].ID+'"> <a href="javascript:plike('+posts[i].ID+');" ><img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /></a> <!-- <i class="fas fa-tag mr-2"></i>Upvote --> </li> <li class="tag__item" id="pd'+posts[i].ID+'"> <a href="javascript:pdlike('+posts[i].ID+');" ><img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /></a> <!-- <i class="fas fa-clock mr-2"></i>Downvote --> </li> <li class="tag__item comment-button play blue"> <a href="javascript:cmtload('+posts[i].ID+');" id="cmtt"> <img src="<?php echo base_url("svg-sources/forum_white_24dp.svg")?>" alt="ico" /> <!-- <i class="fas fa-play mr-2"></i>Comment --> </a> </li> </ul> </div> </article>');

            }
            else{
            var imx="http://localhost/anonimly/uploads/";
          $('#postslist').append('<article class="postcard dark blue"> <a class="postcard__img_link" href="#"> <img class="postcard__img" src="'+imx+posts[i].IMAGE+'" alt="Image Title" /> </a> <div class="postcard__text"> <h1 class="postcard__title blue"><a href="#">'+posts[i].TITLE+'</a></h1> <div class="postcard__subtitle small"> <time datetime="2020-05-25 12:00:00"> <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020 </time> </div> <div class="postcard__bar"></div> <div class="postcard__preview-txt">'+atob(posts[i].POST)+' </div> <div class="postcard-profile"> <a href="http://localhost/anonimly/index.php/ProfileController/profile?id='+posts[i].MASKIND_ID+'"> <img src="'+posts[i].IMAGES+'" alt="pfp" /> <div>'+posts[i].SIID+'</div> </a> </div> <ul class="postcard__tagbox"> <li class="tag__item" id="pl'+posts[i].ID+'"> <a href="javascript:plike('+posts[i].ID+');" ><img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /></a> <!-- <i class="fas fa-tag mr-2"></i>Upvote --> </li> <li class="tag__item" id="pd'+posts[i].ID+'"> <a href="javascript:pdlike('+posts[i].ID+');" ><img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /></a> <!-- <i class="fas fa-clock mr-2"></i>Downvote --> </li> <li class="tag__item comment-button play blue"> <a href="javascript:cmtload('+posts[i].ID+');" id="cmtt"> <img src="<?php echo base_url("svg-sources/forum_white_24dp.svg")?>" alt="ico" /> <!-- <i class="fas fa-play mr-2"></i>Comment --> </a> </li> </ul> </div> </article>');
         // }
        }
         // flag++;
          loaded_posts.push(posts[i]);
        }
      }
    }
  });
  
}
function post_exists(post_id) {
  for (var i = 0; i < loaded_posts.length; i++) {
    if (loaded_posts[i].ID == post_id) {
      return true;
    }
  }
  return false;
}
$( ".close" ).click(function() {
    const commentContainer = document.querySelector('.comment-container');
    commentContainer.style.display = "none";
});
function cmtload(i) {
       // console.log("test");
  const commentContainer = document.querySelector('.comment-container');
  
 $('#cmtbt').html(' <button onclick="sendcmt('+i+')"><img src="<?php echo base_url("svg-sources/send_white_24dp.svg")?>" alt=""></button>');
 $('#pscmts').html(' ');
 //console.log(cdata);
 var cdata={
                           
                           pid:i,
                           
                    };
        $.ajax({
  url: '<?php echo base_url("index.php/MainController/cmtload") ?>',
  method: 'POST',
  data: cdata,
  dataType: "json",
  cache:false,
  success: function(response) {
    //var posts = JSON.parse(response);
    //console.log(posts);
   
    var lenx=response.length;
    console.log(lenx);
    if (lenx>0) {
      
    
      for (var lc = 0; lc< lenx; lc++) {
    $('#pscmts').append('<div class="dark-container"> <a class="dark-pfp" href="#"> <img src="'+response[lc].MASKER_IMAGE+'" alt=""> </a> <span>'+response[lc].COMMENT+'</span><ul class="comment-react"> <li class="react-like" id="cl'+response[lc].ID+'"> <a href="javascript:cl('+response[lc].ID+');"> <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /> </a> </li> <li class="react-dislike" id="cdl'+response[lc].ID+'" > <a href="javascript:cdis('+response[lc].ID+');"> <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /> </a> </li> </ul> </div>')

    }
  }
//$('#cmtarea').val('');
//$('#pscmts').append('<div class="dark-container first"> <a class="dark-pfp" href="#"> <img src="'+primg+'" alt=""> </a> '+comment+'<ul class="comment-react"> <li class="react-like"> <a href="javscript:sicmtlik('+response+');"> <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /> </a> </li> <li class="react-dislike"> <a href="javscript:sicmtdis('+response+');"> <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /> </a> </li> </ul> </div>')
commentContainer.style.display = "flex";
},
  error: function(errorThrown) {
    console.log(errorThrown);
  }
});

}

    </script>
</body>

</html>
    <?php
}
?>