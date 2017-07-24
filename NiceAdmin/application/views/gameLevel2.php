<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | FishTank</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>TemplateData/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url(); ?>TemplateData/style.css">
    <script src="<?php echo base_url(); ?>TemplateData/UnityProgress.js"></script>  
    <script src="<?php echo base_url(); ?>Build2/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "<?php echo base_url()."Build2/fish2.json"; ?>", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
    <div class="webgl-content">
      <div id="gameContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">FishTank</div>
      </div>
    </div>
  </body>
</html>
<!-- http://project/Group-07/NiceAdmin/Build/build.json -->