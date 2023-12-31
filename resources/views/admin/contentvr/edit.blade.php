<html>
    <head>
        <meta charset="utf-8">
        <title>Let's go places</title>
        <script src="js/aframe.min.js"></script>
    </head>
    <body>
        <a-scene auto-enter-vr>
            <a-assets>
                <img id="vr" src="asset('/file/contentvr/'$cat->filename)">
            </a-assets>

            <a-entity>
                <a-entity camera look-controls wasd-controls>
                    <a-entity position="0 0 -3" scale="0.2 0.2 0.2" geometry="primitive: ring; radiusOuter: 0.20; radiusInner: 0.13;" material="color: #ADD8E6; shader: flat" cursor="maxDistance: 30; fuse: true">
                        <a-animation begin="click" easing="ease-in" attribute="scale" fill="backwards" from="0.1 0.1 0.1" to="1 1 1" dur="150"></a-animation>
                        <a-animation begin="fusing" easing="ease-in" attribute="scale" fill="forwards" from="1 1 1" to="0.2 0.2 0.2" dur="1500"></a-animation>
                    </a-entity>
                </a-entity>
            </a-entity>

            <a-curvedimage id="swit" src="#switzerland" transparent="true"
              height="2" radius="3" theta-length="40" rotation="0 240 0" position="0 0 -2">
            </a-curvedimage>


          <a-sky id="sky" src="asset('/file/contentvr/'$cat->filename)" color="rgb(200,200,200)" ></a-sky>
        </a-scene>



        <script>
            document.querySelector("#curhorseshoe").addEventListener('click', function() {
                document.getElementById("sky").
                    setAttribute("src","img/PANO_20220608_133219.jpg");
            });
        </script>
    </body>
</html>
