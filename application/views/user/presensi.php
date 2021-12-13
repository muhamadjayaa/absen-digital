<!DOCTYPE html>
<html>
<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #preview { padding:30px; border:1px solid; background:#3d3d3d; }
    </style>
</head>
<body>
  
<div class="container">
    <form method="POST" action="">
        <div class="row pakainfo">
            <div class="btn col-md-6 pakainfo">
                <div id="live_camera"></div>
               <br>  
                <input style="background-color: #007bff; color: white; border: #007bff 3px solid; border-radius: 5px;  padding: 12px 20px; margin-right:10px; " type=button value="Ambil Foto" onClick="capture_web_snapshot()">
                <input type="hidden" name="image" class="image-tag">
                <button style="background-color: #007bff; color: white; border-radius: 5px; border: #007bff 3px solid; padding: 12px 20px; margin-right:10px; ">Presensi</button>
              </br>
            </div>
            </div>
            <div class="col-md-8">
            <br/>
                <div id="preview" ><a style="color:white">Hasil foto akan muncul disini...</a></div>
            </div>
            <div class="col-md-12 pakainfo">
        </div>
    </form>
</div>
  
<!-- Settings a few settings and (php capture image from camera) web attach camera -->
<script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#live_camera' );
  
    function capture_web_snapshot() {
        Webcam.snap( function(site_url) {
            $(".image-tag").val(site_url);
            document.getElementById('preview').innerHTML = '<img src="'+site_url+'"/>';
        } );
    }
</script>
 
</body>
</html>