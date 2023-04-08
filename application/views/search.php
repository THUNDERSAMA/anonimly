<?php
if (isset($this->session->userdata('auth')['SIID'])) {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="rotating-planet.png" />
    <link rel="stylesheet" href="<?php echo base_url("css/sr/style.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("css/sr/script.js");?>" />
    <title>Search on Campuspace</title>
</head>

<body>
    <div class="search-container">
        <div class="large">
            Search on CampuSpace
        </div>
        <div class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae rerum animi a
            voluptatibus beatae magnam sunt optio in quidem sequi ratione deserunt, maiores ducimus culpa laboriosam
            minima consectetur nostrum esse?</div>
        <div class="search-bar">
            <input type="text" placeholder="search..." class="search-input" />
            <button class="search-btn">Go</button>
        </div>
        <?php $datas_size = count($datas);
echo "<h3>Your ideal Mentors found : " . $datas_size."</h3>";?>
    </div>
    
    <div class="img-gallery-container">
        <div class="img-gallery">
            <div class="image">
           
<!-- <?php print_r($datas);?> -->
<?php 
$datas = json_decode(json_encode($datas), true); foreach ($datas as $choice) { ?>
    <div class="image-child">
        <img src="<?php echo $choice['IMAGES']; ?>" alt="">
        <div class="image-text">
            <h2><?php echo $choice['NAME']; ?></h2>
            Experience: <?php echo $choice['EXPRIENCE']; ?>
            <br>
            Expertise: <?php echo $choice['EXPERTISE']; ?>
        </div>
    </div>
<?php } ?>
                <div class="image-child">
                    <img src="srcc/1.jpg" alt="">
                    <div class="image-text">
                        <h2>Lorem ipsum</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, tempora.
                    </div>
                </div>
                <div class="image-child">
                    <img src="/srcc/2.jpg" alt="">
                    
                    <div class="image-text">
                        <h2>Lorem ipsum</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, tempora.
                    </div>
                </div>
                <div class="image-child">
                    <img src="/srcc/3.jpg" alt="">
                    
                    <div class="image-text">
                        <h2>Lorem ipsum</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, tempora.
                    </div>
                </div>
                <div class="image-child">
                    <img src="/srcc/4.jpg" alt="">
                    
                    <div class="image-text">
                        <h2>Lorem ipsum</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, tempora.
                    </div>
                </div>
            </div>
            <div class="image">
                <div class="image-child">
                    <img src="/srcc/5.jpg" alt="">
                    
                    <div class="image-text">
                        <h2>Lorem ipsum</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, tempora.
                    </div>
                </div>
                <div class="image-child">
                    <img src="/srcc/6.jpg" alt="">
                    
                    <div class="image-text">
                        <h2>Lorem ipsum</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, tempora.
                    </div>
                </div>
                <div class="image-child">
                    <img src="/srcc/7.jpg" alt="">
                    
                    <div class="image-text">
                        <h2>Lorem ipsum</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, tempora.
                    </div>
                </div>
                <div class="image-child">
                    <img src="/srcc/8.jpg" alt="">
                    
                    <div class="image-text">
                        <h2>Lorem ipsum</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, tempora.
                    </div>
                </div>
            </div>
            <div class="image">
                <div class="image-child">
                    <img src="/srcc/9.jpg" alt="">
                    
                    <div class="image-text">
                        <h2>Lorem ipsum</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, tempora.
                    </div>
                </div>
                <div class="image-child">
                    <img src="/srcc/10.jpg" alt="">
                    
                    <div class="image-text">
                        <h2>Lorem ipsum</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, tempora.
                    </div>
                </div>
                <div class="image-child">
                    <img src="/srcc/11.jpg" alt="">
                    
                    <div class="image-text">
                        <h2>Lorem ipsum</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit,
                        tempora.</div>
                </div>
                <div class="image-child">
                    <img src="/srcc/12.jpg" alt="">
                    
                    <div class="image-text">
                        <h2>Lorem ipsum</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit,
                        tempora.</div>
                </div>
            </div>
            <div class="image">
                <div class="image-child">
                    <img src="/srcc/13.jpg" alt="">
                    
                    <div class="image-text">
                        <h2>Lorem ipsum</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit,
                        tempora.</div>
                </div>
                <div class="image-child">
                    <img src="/srcc/14.jpg" alt="">
                    
                    <div class="image-text">
                        <h2>Lorem ipsum</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Velit, tempora.</div>
                </div>
                <div class="image-child">
                    <img src="/srcc/15.jpg" alt="">
                    
                    <div class="image-text">
                        <h2>Lorem ipsum</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Velit, tempora.</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
}
else {
    echo ("error occured");
}
?>