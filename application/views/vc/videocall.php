<?php
if (isset($this->session->userdata('auth')['SIID'])) {
    ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url("images/rotating-planet.png")?>">
	<title>Campuspace </title>
</head>
<body>

<script>
  var script = document.createElement("script");
  script.type = "text/javascript";

  script.addEventListener("load", function (event) {
    const config = {
      name: "<?php echo ($this->session->userdata('auth')['SIID']);?>",
      meetingId: "<?php echo $user_data; ?>",
      apiKey: "67241310-b137-4a1c-8a51-7b4509bee3c7",

      containerId: null,

      micEnabled: true,
      webcamEnabled: true,
      participantCanToggleSelfWebcam: true,
      participantCanToggleSelfMic: true,

      chatEnabled: true,
      screenShareEnabled: true,

      /*

     Other Feature Properties
      
      */
    };

    const meeting = new VideoSDKMeeting();
    meeting.init(config);
  });

  script.src =
    "https://sdk.videosdk.live/rtc-js-prebuilt/0.3.29/rtc-js-prebuilt.js";
  document.getElementsByTagName("head")[0].appendChild(script);
</script>
</body>

</html>
<?php
}
else {
    //echo ("error occured");
    redirect('Logincontroller/logins');
}
?>