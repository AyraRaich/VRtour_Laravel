<html>
    <head>
        <meta charset="utf-8">
        <title>Let's go places</title>
        <script src="js/aframe.min.js"></script>
    </head>
    <body>
        <a-scene auto-enter-vr>
            <a-assets>
                <img id="horseshoe" src="img/PANO_20220608_133219.jpg">
                <img id="switzerland" src="img/pano kanan.jpg">
                <img id="bc-place" src="img/pano kiri.jpg">
                <img id="atlanticocean" src="img/pano tengah.jpg">
            </a-assets>

            <a-entity>
                <a-entity camera look-controls wasd-controls>
                    <a-entity position="0 0 -3" scale="0.2 0.2 0.2" geometry="primitive: ring; radiusOuter: 0.20; radiusInner: 0.13;" material="color: #ADD8E6; shader: flat" cursor="maxDistance: 30; fuse: true">
                        <a-animation begin="click" easing="ease-in" attribute="scale" fill="backwards" from="0.1 0.1 0.1" to="1 1 1" dur="150"></a-animation>
                        <a-animation begin="fusing" easing="ease-in" attribute="scale" fill="forwards" from="1 1 1" to="0.2 0.2 0.2" dur="1500"></a-animation>
                    </a-entity>
                    <a-text value="Panorama Image ©2020 Google" position="0 -2.2 -3" align="center"  color="white" scale="0.8 0.8 0.8"></a-text>
                </a-entity>
            </a-entity>

            <a-curvedimage id="swit" src="#switzerland" transparent="true"
              height="2" radius="3" theta-length="40" rotation="0 240 0" position="0 0 -2">
            </a-curvedimage>

            <a-curvedimage id="curhorseshoe" src="#horseshoe" transparent="true"
              height="2" radius="3" theta-length="40" rotation="0 190 0" position="0 0 -2">
            </a-curvedimage>

            <a-curvedimage id="atlantic" src="#atlanticocean" transparent="true"
              height="2" radius="3" theta-length="40" rotation="0  130 0" position="0 0 -2">
            </a-curvedimage>

            <a-curvedimage id="bc" src="#bc-place" transparent="true"
              height="2" radius="3" theta-length="40" rotation="0  80 0" position="0 0 -2">
            </a-curvedimage>


          <a-sky id="sky" src="img/grid1.svg" color="rgb(200,200,200)" ></a-sky>
        </a-scene>



        <script>
            document.querySelector("#curhorseshoe").addEventListener('click', function() {
                document.getElementById("sky").
                    setAttribute("src","img/PANO_20220608_133219.jpg");
            });
            document.querySelector("#atlantic").addEventListener('click', function() {
                document.getElementById("sky").
                    setAttribute("src","img/pano kanan.jpg");
            });
            document.querySelector("#swit").addEventListener('click', function() {
                document.getElementById("sky").
                    setAttribute("src","img/pano kiri.jpg");
            });
            document.querySelector("#bc").addEventListener('click', function() {
                document.getElementById("sky").
                    setAttribute("src","img/pano tengah.jpg");
            });
        </script>
    </body>
</html>

<a-scene auto-enter-vr>
    <a-sky id="sky" src="{{url($wisata->image_wisata)}}" color="rgb(200,200,200)" ></a-sky>
@foreach($contentvr as $vr)
    <a-curvedimage id="curhorseshoe" src="{{url($vr->filename)}}" transparent="true"
      height="2" radius="3" theta-length="40" rotation="0 190 0" position="0 0 -2">
    </a-curvedimage>

    <script>
        document.querySelector("#curhorseshoe").addEventListener('click', function() {
            document.getElementById("sky").
                setAttribute("src","{{url($vr->filename)}}");
        });
    </script>

@endforeach
<a-text value="{{$wisata->informasi_wisata}}" position="0 -1.2 0" align="center" width="3" color="black" scale="2 2 2"></a-text>
  <a-entity>
      <a-entity camera look-controls wasd-controls>
          <a-entity position="0 0 -3" scale="0.2 0.2 0.2" geometry="primitive: ring; radiusOuter: 0.20; radiusInner: 0.13;" material="color: #ADD8E6; shader: flat" cursor="maxDistance: 30; fuse: true">
              <a-animation begin="click" easing="ease-in" attribute="scale" fill="backwards" from="0.1 0.1 0.1" to="1 1 1" dur="150"></a-animation>
              <a-animation begin="fusing" easing="ease-in" attribute="scale" fill="forwards" from="1 1 1" to="0.2 0.2 0.2" dur="1500"></a-animation>
          </a-entity>
      </a-entity>
  </a-entity>
</a-scene>

</body>
