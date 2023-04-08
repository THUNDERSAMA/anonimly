<?php
if (isset($this->session->userdata('auth')['SIID'])) {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Entreprenuer</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url("images/rotating-planet.png")?>">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> -->

    <!-- <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
    <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo base_url("css/pr/style-profile.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("css/pr/style-form.css")?>">
</head>

<body>
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

    <div class="bg-glass container">
    <form method="post" action="<?php echo base_url("index.php/regcontroller/entreprenuer") ?> " onSubmit="return validateForm(event)">
        <div class="wrapper">
            <div class="header">
                <ul>
                    <li class="active form_1_progessbar">
                        <div>
                            <p>1</p>
                        </div>
                    </li>
                    <li class="form_2_progessbar">
                        <div>
                            <p>2</p>
                        </div>
                    </li>
                    <li class="form_3_progessbar">
                        <div>
                            <p>3</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="form_wrap">
                <div class="form_1 data_info">
                    <h2>Personal Info</h2>
                    
                        <div class="form_container">
                            <div class="input_wrap">
                                <!-- <label for="name">Name</label> -->
                                <input type="text" name="name" class="input" id="name" placeholder="Name" value="<?php echo isset($user_data['NAME']) ? $user_data['NAME'] : ''; ?>" required>
                            </div>
                            <div class="input_wrap">
                                <!-- <label for="age">Age (in Years)</label> -->
                                <input type="number" min="0" name="age" class="input" id="age"
                                value="<?php echo isset($user_data['AGE']) ? $user_data['AGE'] : ''; ?>" placeholder="Age in Years" required>
                            </div>
                            <div class="input_wrap">
                                <label for="Location">Where do you live ?</label>

                                <select placeholder="Choose location" name="location"  class="input"
                                    id="interest" required>
                                    <?php
                                    if(isset($user_data['LOCATION']))
                                    {
        $options = array("Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh"
        , "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand"
        , "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram"
        , "Nagaland", "Odisha", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura"
        , "Uttarakhand", "Uttar Pradesh", "West Bengal", "Andaman and Nicobar Islands", "Chandigarh"
        , "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Lakshadweep", "Puducherry");
        foreach($options as $option) {
            echo "<option value='$option'";
            if($option == $user_data['LOCATION']) {
                echo " selected";
            }
            echo ">$option</option>";
        }
    }
    else
    {
        echo('<option value="SelectState">Select State</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled="" style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>');
                    }
                    ?>
                                </select>


                            </div>
                        </div>
                    
                    <!-- <script
                        src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
                    <script>
                        new MultiSelectTag('interest', {
                            rounded: true,    // default true
                            shadow: false      // default false
                        })
                    </script> -->
                </div>
                <div class="form_2 data_info" style="display: none;">
                    <h2>Business Info</h2>
                   
                        <div class="form_container">
                            <div class="input_wrap">
                                <!-- <label for="area of expertise">Area of Expertise</label> -->
                                <input type="text" class="input" placeholder="Business or Startup name" name="startup" value="<?php echo isset($user_data['STARTUP']) ? $user_data['STARTUP'] : ''; ?>" required>
                            </div>
                            <div class="input_wrap">
                                <!-- <label for="years of experience">Years of Experience</label> -->
                                <select placeholder="Choose Idea stage" name="stage"  class="input"
                                    id="stage" required>
                                    <?php
                                    if(isset($user_data['STAGE']))
                                    {
        $options = array("Idea stage","Research and Development stage","Prototype stage","Testing and Validation stage","Pre-launch stage","Post-launch stage","Growth stage","Scaling stage","Established stage");
        foreach($options as $option) {
            echo "<option value='$option'";
            if($option == $user_data['STAGE']) {
                echo " selected";
            }
            echo ">$option</option>";
        }
    }
    else
    {
        echo('<option value="Idea stage">Idea stage</option>
<option value="Research and Development stage">Research and Development stage</option>
<option value="Prototype stage">Prototype stage</option>
<option value="Testing and Validation stage">Testing and Validation stage</option>
<option value="Pre-launch stage">Pre-launch stage</option>
<option value="Post-launch stage">Post-launch stage</option>
<option value="Growth stage">Growth stage</option>
<option value="Scaling stage">Scaling stage</option>
<option value="Established stage">Established stage</option>
    ');}?>
                                </select>
                            </div>
                            <div class="input_wrap">
                                <!-- <label for="current job title and company">Current Job Title and Company</label> -->
                                <select placeholder="Choose your area of need" name="need"  class="input"
                                    id="interest" required>
                                    
                                    <?php
                                    if(isset($user_data['NEED']))
                                    {
        $options = array("Product Development","Marketing and Branding","Sales and Business Development","Customer Acquisition","Market Research","Financial Planning and Budgeting","Fundraising and Investment","Team Building and Recruitment","Legal and Regulatory Compliance","Operations and Logistics","Technology and IT Support","Supply Chain Management","Manufacturing and Production","Inventory Management","Distribution and Fulfillment","Human Resources and Training","Quality Control and Assurance","Intellectual Property Protection","Crisis Management and Risk Assessment","International Expansion");
        foreach($options as $option) {
            echo "<option value='$option'";
            if($option == $user_data['NEED']) {
                echo " selected";
            }
            echo ">$option</option>";
        }
    }
    else
    {
        echo('<option value="Product Development">Product Development</option>
<option value="Marketing and Branding">Marketing and Branding</option>
<option value="Sales and Business Development">Sales and Business Development</option>
<option value="Customer Acquisition">Customer Acquisition</option>
<option value="Market Research">Market Research</option>
<option value="Financial Planning and Budgeting">Financial Planning and Budgeting</option>
<option value="Fundraising and Investment">Fundraising and Investment</option>
<option value="Team Building and Recruitment">Team Building and Recruitment</option>
<option value="Legal and Regulatory Compliance">Legal and Regulatory Compliance</option>
<option value="Operations and Logistics">Operations and Logistics</option>
<option value="Technology and IT Support">Technology and IT Support</option>
<option value="Supply Chain Management">Supply Chain Management</option>
<option value="Manufacturing and Production">Manufacturing and Production</option>
<option value="Inventory Management">Inventory Management</option>
<option value="Distribution and Fulfillment">Distribution and Fulfillment</option>
<option value="Human Resources and Training">Human Resources and Training</option>
<option value="Quality Control and Assurance">Quality Control and Assurance</option>
<option value="Intellectual Property Protection">Intellectual Property Protection</option>
<option value="Crisis Management and Risk Assessment">Crisis Management and Risk Assessment</option>
<option value="International Expansion">International Expansion</option>');}
?>
</select>
                            </div>
                        </div>
                    
                </div>
                <div class="form_3 data_info" style="display: none;">
                    <h2>Business Info</h2>
                    
                        <div class="form_container">

                            <div class="input_wrap">
                                <!-- <label for="availability">Availability (e.g: hours/week,preferred times of day)</label> -->
                                <input type="text" class="input" name="desc" value="<?php echo isset($user_data['DESCRIBES']) ? $user_data['DESCRIBES'] : ''; ?>"placeholder="Business description" required>
                            </div>
                            <div class="input_wrap">
                                <!-- <label for="LinkedIn">LinkedIn Profile URL or Website</label> -->
                                <input type="url" name="url" id="url" class="input" placeholder="LinkedIn Profile / Website URL" value="<?php echo isset($user_data['URL']) ? $user_data['URL'] : ''; ?>" required>
                            </div>
                            <div class="input_wrap">
                                <label for="formFile" class="form-label" style="text-align: center;">Industry or Niche Market
</label>
                               <select placeholder="Industry" name="industry[]"  class="input"
                                    id="interest" required>
                                    <?php
                                    if(isset($user_data['INDUSTRY']))
                                    {
        $options = array("Technology", "Health care", "Education", "Finance", "E-commerce", "Marketing", "Hospitality", "Entertainment", "Non-profit", "Social media", "Retail", "Manufacturing", "Agriculture", "Transportation", "Construction", "Real estate", "Energy", "Fashion", "Design", "Consulting");
        foreach($options as $option) {
            echo "<option value='$option'";
            if($option == $user_data['INDUSTRY']) {
                echo " selected";
            }
            echo ">$option</option>";
        }
    }
    else
    {
        echo('<option value="" selected="true" disabled="true" hidden="true">Choose here</option>
        <option value="Technology">Technology</option>
        <option value="Health care">Health care</option>
        <option value="Education">Education</option>
        <option value="Finance">Finance</option>
        <option value="E-commerce">E-commerce</option>
        <option value="Marketing">Marketing</option>
        <option value="Hospitality">Hospitality</option>
        <option value="Entertainment">Entertainment</option>
        <option value="Non-profit">Non-profit
        </option>
        <option value="Social media">Social media</option>
        <option value="Retail">Retail</option>
        <option value="Manufacturing">Manufacturing</option>
        <option value="Agriculture">Agriculture</option>
        <option value="Transportation">Transportation</option>
        <option value="Construction">Construction</option>
        <option value="Real estate">Real estate</option>
        <option value="Energy">Energy</option>
        <option value="Fashion">Fashion</option>
        <option value="Design">Design</option>
        <option value="Consulting">Consulting</option>');
    }
    ?>
                                </select>
                            </div>
                        </div>
                   
                </div>
            </div>
            <div class="btns_wrap">
                <div class="common_btns form_1_btns">
                    <button type="button" class="btn_next">Next
                        <!-- <span class="icon">
                        <ion-icon
                                name="arrow-forward-sharp">
                            </ion-icon>
                        </span> -->
                    </button>
                </div>
                <div class="common_btns form_2_btns" style="display: none;">
                    <button type="button" class="btn_back">Back
                        <!-- <span class="icon">
                            <ion-icon
                                name="arrow-back-sharp">
                            </ion-icon>
                        </span> -->
                    </button>
                    <button type="button" class="btn_next">Next
                        <!-- <span class="icon">
                            <ion-icon
                                name="arrow-forward-sharp">
                            </ion-icon>
                        </span> -->
                    </button>
                </div>
                <div class="common_btns form_3_btns" style="display: none;">
                    <button type="button" class="btn_back">Back
                        <!-- <span class="icon">
                            <ion-icon
                                name="arrow-back-sharp">
                            </ion-icon>
                        </span> -->
                    </button>
                    <button type="submit" class="btn_done">Done</button>
                </div>
            </div>
        </div>
</form>
        <!-- <div class="modal_wrapper">
            <div class="shadow"></div>
            <div class="success_wrap">
                <span class="modal_icon">
                    <ion-icon name="checkmark-sharp">

                    </ion-icon>
                </span>
                <p>You have successfully completed the process.</p>
            </div>
        </div> -->

        <script type="text/javascript" src="<?php echo base_url("js/pr/script.js")?>"></script>

        <!-- <img class="card-img-top" src="https://source.unsplash.com/collection/happy-people"
            alt="Card image cap">
        <div class="card-body little-profile text-center">
            <div class="pro-img">
                <img src="https://source.unsplash.com/collection/happy-people" alt="user">
            </div>
            <h3 class="mb-3">John Doe</h3>

            <p>Space for writing user bio/description</p>

            <button href="#" id="follow" class="animate1 follow-btn btn mt-2">
                Follow
            </button>



            <div class="row mt-4">
                <div class="text-end pe-4 col-6 col-md-6">
                    <h3 class="font-light">434K</h3>
                    <small>followers</small>
                </div>
                <div class="text-start ps-4 col-6 col-md-6">
                    <h3 class="font-light">545K</h3>
                    <small>following</small>
                </div>
            </div>
        </div>

        <ul class="nav nav-pills mt-4 mb-2" id="pills-tab" role="tablist">
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
    function validateForm(event) {
  
  const currenturl = document.getElementById("url").value;

  const linkedinUrlPattern = /^(https?:\/\/)?(www\.)?linkedin\.com\/(in|pub|company)\/[a-zA-Z0-9-]+(\/(.*))?$/i;

if (!linkedinUrlPattern.test(currenturl)) {
  alert('Please enter a valid LinkedIn URL.');
  linkedinUrlInput.focus();
  event.preventDefault();
  return false;
}
else{
  // Submit the form if all the inputs are valid
  return true;
}
    }

</script>
</html>
<?php
}
else {
    echo ("error occured");
}
?>