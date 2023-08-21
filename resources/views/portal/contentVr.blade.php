<html>
    <head>
        <meta charset="utf-8">
        <title>Let's go places</title>
        	<script src="{{url('assets/js/aframe.min.js')}}"></script>
          <script src="https://unpkg.com/aframe-layout-component@4.3.1/dist/aframe-layout-component.min.js"></script>


    </head>
    <body>
      <a-scene>
        <a-sky id="skyimg" color="white" src="{{ url($wisata->image_wisata) }}" radius="100"
          animation__fade="property: components.material.material.color; type: color; from: #FFF; to: #000; dur: 300; startEvents: fade"
              animation__fadeback="property: components.material.material.color; type: color; from: #000; to: #FFF; dur: 300; startEvents: animationcomplete__fade"></a-sky>
      <a-text id="text_info" position="-7.578 5.357 -2.100" align="center"  color="white" scale="1.5 1.5 1.5" value="{{$wisata->informasi_wisata}}"></a-text>

      <a-entity position="0 1.8 4">
    <a-camera id="camera" look-controls="" wasd-controls-enabled="trues" camera="active:true" rotation="-1.3750987083139854 -3.0939720937064483 0" position="0 0 0">
    <a-ring radius-outer="0.20" radius-inner="0.10" position="0 0 -3" material="color: black; shader: flat" cursor="maxDistance: 30; fuse: true" geometry="primitive:ring;radiusOuter:0.20;radiusInner:0.10" raycaster="far: 200; objects: .photos" scale="0.4628376812078244 0.4628376812078244 0.4628376812078244">
        <a-animation begin="click" easing="ease-in" attribute="scale" fill="backwards" from="0.1 0.1 0.1" to="1 1 1" dur="150"></a-animation>
        <a-animation begin="fusing" easing="ease-in" attribute="scale" fill="forwards" from="1 1 1" to="0.1 0.1 0.1" dur="1500"></a-animation>
      </a-ring>
      <a-text value="{{$wisata->nama_wisata}} VR Experience" position="0 -2.2 -3" align="center"  color="white" scale="0.8 0.8 0.8"></a-text>
    </a-camera>
  </a-entity>

      <a-entity id="allspheres" layout="type: line; margin:1.5;plane:xz" position="-3.3 0 0">
        @foreach ($data['contentvr'] as $image)
        <a-sphere class="photos" geometry="segmentsHeight: 100; segmentsWidth: 55" opacity=".7" radius=".5" src="{{ asset('/file/contentvr/'.$image->filename) }}" onclick="hideAll;setSky(this);">
            <a-animation attribute="rotation"
                   dur="12000"
                   easing="linear"
                   begin="mouseenter"
                   end="mouseleave"
                   fill="both"
                   to="0 360 0"
                   repeat="indefinite"></a-animation>
          </a-sphere>
          @endforeach
</a-entity>

  </a-scene>
  <script>
    function setSky(e){
      e.setAttribute('opacity', 1);
      var sky = e.getAttribute('src');
      document.getElementById('skyimg').setAttribute('src', sky)
    };
    function hideAll(){
      var x=document.querySelector('.photos');
      x.setAttribute('opacity',0.7);
    };
    </script>
    </body>
</html>
