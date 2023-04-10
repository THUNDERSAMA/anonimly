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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- <script src="<?php echo base_url("js/sr/script.js");?>" ></script> -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url("images/rotating-planet.png")?>">

    <title>Search on Campuspace</title>
</head>

<body>
<nav class="preview-container">
<div class="preview-child" >
            <button class="close close-prev" id="close-prev">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFFaa"
                    class="fa-secondary">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
                </svg>
            </button>
        <div id="pcmt">
            <div class="mod-parent">
                <div class="mod-pfp">
                    <img src="https://source.unsplash.com/random" alt="imgg" />
                </div>
                <ul class="mod-details">
                    <li>Name</li>
                    <li>Expertise</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ratione non laborum.</li>
                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                    <li>Sama</li>
                    <li>Anurag</li>
                    <li>Parth</li>
                </ul>
            </div>
            <div class="mod-apply">
                <button class="easyapp">Easy Apply</button>
                <span>or</span>
                <textarea placeholder="Write your application..."></textarea>
                <button class="nowapp">Apply Now</button>
            </div>
       </div>
        </div>

    </nav>
    <div class="search-container">
        <div class="large">
            Search on CampuSpace
        </div>
        <div class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae rerum animi a
            voluptatibus beatae magnam sunt optio in quidem sequi ratione deserunt, maiores ducimus culpa laboriosam
            minima consectetur nostrum esse?</div>
        <div class="search-bar">
            <input type="text" placeholder="search..." class="search-input" id="search-box" />
            <button class="search-btn">Go</button>
        </div>
        <ul id="results"></ul>

        <?php $datas_size = count($datas);
echo "<h3>Your ideal Mentors found : " . $datas_size."</h3>";?>
    </div>
    
    <div class="img-gallery-container">
        <div class="img-gallery">
            <div class="image" id="imc">
           
<!-- <?php print_r($datas);?> -->
<?php 
$datas = json_decode(json_encode($datas), true); foreach ($datas as $choice) { ?>
    <div class="image-child" onclick="apload(<?php echo $choice['ID']; ?>)">
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
            
            </div>
        </div>
    </div>
    <script>
        var cadid=""
        $( "#close-prev" ).click(function() {
            const prevcont = document.querySelector(".preview-container");
            prevcont.style.display = "none";
});
        function apload(i)
        {
           //alert(i);
           var imgsrc = event.target.closest('.image-child').querySelector('img').getAttribute('src');
           const prevcont = document.querySelector(".preview-container");
//const closeimg = document.querySelector("#close-prev");

var cdata={
    pid:i
};
$.ajax({
  url: '<?php echo base_url("index.php/ProfileController/modalload") ?>',
  method: 'POST',
  data: cdata,
  dataType: "json",
  cache:false,
  success: function(response) {
    //var posts = JSON.parse(response);
    //console.log(posts);
   // response[0].MASKER_IMAGE
   cadid=response[0].MID;
    $('#pcmt').html('<div class="mod-parent"> <div class="mod-pfp"> <img src="'+imgsrc+'" alt="imgg" /> </div> <ul class="mod-details"> <li>Name : '+response[0].NAME+'</li> <li>Expertise :'+response[0].EXPERTISE+'</li> <li> EXPRIENCE :'+response[0].EXPRIENCE+'</li> <li> COMPANY :'+response[0].COMPANY+'</li> <li> AVAILABILITY : '+response[0].AVAIL+'</li> <li>FUTURE_AVAILABILITY : '+response[0].FAVAIL+'</li> <li>LINKED_IN ID: '+response[0].URL+'</li> <li>INTEREST: '+response[0].INTEREST+'</li></ul> </div> <div class="mod-apply"> <button class="easyapp" onclick="eapp()">Easy Apply</button> <span>or</span> <textarea placeholder="Write your application..." id="tapp"></textarea> <button class="nowapp" onclick="apply('+response[0].ID+')">Apply Now</button>');
prevcont.style.display = "flex";
},
  error: function(errorThrown) {
    console.log(errorThrown);
  }
});
        }
        function eapp()
        {
            var cdata={
    pid:"<?php echo ($this->session->userdata('auth')['CID']); ?>"
};
            $.ajax({
  url: '<?php echo base_url("index.php/ProfileController/prevappl") ?>',
  method: 'POST',
  data: cdata,
  cache:false,
  success: function(response) {
    //var posts = JSON.parse(response);
    //console.log(posts);

//     response[0].MASKER_IMAGE
    
// prevcont.style.display = "flex";
if (response!="notx") {
    
    $("#tapp").val(response);
}
else
{
    alert("Sorry no application found");
}
},
  error: function(errorThrown) {
    console.log(errorThrown);
  }
});
        }
        function apply(k)
        {
            console.log($("#tapp").val().trim());
            if ($("#tapp").val().trim().length>100)
            {
            var cdata={
                pid:cadid,
    appl:$("#tapp").val().trim()
};
            $.ajax({
  url: '<?php echo base_url("index.php/ProfileController/applins") ?>',
  method: 'POST',
  data: cdata,
  cache:false,
  success: function(response) {
    //var posts = JSON.parse(response);
    //console.log(posts);

//     response[0].MASKER_IMAGE
    
// prevcont.style.display = "flex";
alert("application successfully submitted");
const prevcont = document.querySelector(".preview-container");
prevcont.style.display = "none";

},
  error: function(errorThrown) {
    console.log(errorThrown);
  }
});
             }else
             {
                alert("Application Length must be greater than 100");
             }
            
            }
        $(document).ready(function() {
    $('#search-box').on('input', function() {
        var query = $(this).val();

        $.ajax({
            url: '<?php echo base_url("index.php/Maincontroller/search") ?>',
            type: 'GET',
            data: {q: query},
            success: function(response) {
                var html = '';

                $.each(response, function(i, result) {
                    html += '<li class="search-result" data-id="' + result.ID + '">' + result.NAME + '</li>';
                });

                $('#results').html(html);
            }
        });
    });

    $('#results').on('click', '.search-result', function() {
        var id = $(this).data('id');

        $.ajax({
            url: '<?php echo base_url("index.php/Maincontroller/detail") ?>',
            type: 'GET',
            data: {id: id},
            success: function(response) {
                console.log(response);
                $('#imc').html('');
               $('#imc').prepend('<div class="image-child" onclick="apload('+response[0].ID+')"> <img src="'+response[0].IMAGES+'" alt=""> <div class="image-text"><h2>'+response[0].NAME+'</h2>Experience:'+response[0].EXPRIENCE+' <br>Expertise: '+response[0].EXPERTISE+'')
            }
        });
    });
});

    </script>
</body>

</html>
<?php
}
else {
    echo ("error occured");
}
?>