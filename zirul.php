
<?php

include('counter.php');

<!DOCTYPE html>
<html>
    <head>
        <title>Happy Independence Day</title>
        

 <meta name=viewport content="width=dev ise-width, initial-scale=1 user-scalable=no"></meta>
        <link rel="stylesheet" href="independenceday box.css">
    </head>
    <style>
  .bfly{  

      margin-right:90px ;

      

      

    }
* {
    margin:0;
    padding:0;
    box-sizing:border-box;
}
:root{
   --kesariya: #ff5500;
   --chakra :#000080;
   --hara : #1c9911;
    --bg: #ffe;
}
body,html{
    height:93%;
}
        
        
        .dp{

    height:90px;

    width:90px;

    border:2.5px solid #fff;

    border-radius:50px;

}
main{
    display:flex;
    height:inherit;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}

.container{
    position:relative;
    width:calc(100% - 20px);
    max-width: 300px;
    height:500px;
    border:20px solid var(--kesariya);
    perspective: 1000px;
    backface-visibility:hidden;
    transform-style:preserve-3d;
}
.outer-cover{
    background-color:white;    
    display:flex;
    flex-direction:column;
    position:absolute;
    width:100%;
    height:100%;
    top:0;
    left:0;
    z-index:200;
    transform-origin:0% 100%;
    transform-style:preserve-3d;
    transition: all 0.8s ease;
    box-shadow:0px 0 20px 0px #000;  
}
.container:hover {
    animation:shift 2s ease forwards;
}
.container:hover .outer-cover{
    transition:.5s;
    animation:open 2s ease forwards;
    
}
.container:hover .outer-cover *{
    animation:hide 2s .7s ease forwards;
}
.outer-cover div{
    flex:1;    
    text-align:center;
}
.middle svg#chakra{
    width:100px;
    height:100px;
    fill:var(--chakra);    
}
.bottom{
    display:flex;
    flex-direction:column;
    justify-content:flex-end;
}
.bottom #hara {
    transform:rotate(180deg);
}
.bottom #hara path{
    fill:var(--hara);
}
.inner-cover{
    position:absolute;
    top:0;
    width:100%;
    height:100%;
    display:flex;
    justify-content:space-around;
    align-items:center;
    flex-direction:column;    background:url("https://png2.cleanpng.com/sh/619941d027e090cb8bad6a3bfdf58bac/L0KzQYi4UsExN5ZoSJGAYULmdre6hvMzOGZrUJCEMUO6Q4OCVcE2OWM9Uao8Nke6SYWATwBvbz==/5a2cff3fc205f8.9137329515128983677947.png") 10% no-repeat;
    background-size:cover;
}
@keyframes shift{
    0%{
        transform:translateX(0px) skewY(0deg) scale(1);
    }
    100%{
        transform:translateX(20px) skewY(-5deg) scale(0.8); 
        box-shadow:0px 0 20px 0px #000;       
    }
}
@keyframes open{
    0%{
        transform:rotateY(0) skewY(0deg) scale(1);
    }
    50%{
        transform:rotateY(-95deg) translateY(23px) scale(1.1); 
    }
    
    100%{
        transform:rotateY(-95deg) translateY(23px) scale(1.1); 
       border:20px solid var(--kesariya);     
    }
}
@keyframes hide{
    0%{
        opacity:1;
    }
    100%{
        opacity:0;
        
    }
}

#content {
    width:260px;
    height:455px;
    background:white;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    perspective:900px;
    border-radius:2px 5px 5px 2px;
    box-shadow:-5px 0px 40px #555;
    box-sizing:border-box;
    display:inline-block;
    }

    #quotation {
        color:red;
        position:absolute;
        margin:10px 20%;
        text-align:center;
        font-size:20px;
        text-shadow:9px 5px 4px #fff;
        animation:anim4 7.5s linear 9.5s alternate 8 backwards;
        line-height:30px;
        }
/*.main{
    width:70%;
    height:440px;
    background-color:#231e39;
    position:relative ;
    margin:auto ;
    border-radius:10px;
    top:120px;
    border:0px solid white;
    box-shadow:0 0 6px  grey;
    overflow:scroll ;
}*/

#pro{
    width:110px;
    height:110px;
    border-radius:120px;
    position:relative ;
    top:20px;
    border:5px solid lightseagreen;
    animation:4s k linear infinite;
}
@keyframes k{
    10%{
        border:5px solid #e54;
    }
    20%{
        border:5px solid #123456;
    }
    30%{
        border:5px solid #yellow;
    }
    
}</style>
<script>
  
  window.onclick=function(){
    music.play()
}
</script>
    <body>
    
        <main>
             <img src="https://2.bp.blogspot.com/-zzmT-WduZmY/V6l7QxxfUPI/AAAAAAAAAS0/55A2uacmgXAu-L009qbbCDQuJMHWT1ExgCLcB/s1600/butterfly-india.gif" 

        height="10%" width="20%" alt="" class="bfly"/>
           <div class="container">
            <div class="outer-cover">
            <div class="top">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" ><path fill="#ff5500" fill-opacity="1" d="M0,300L100,261.3C160,235,320,181,480,170.7C640,160,800,192,960,176C1120,160,1280,96,1360,64L1440,32L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg> 
        </div>
        <div class="middle">
 <svg version="1.1" id="chakra" xmlns="http://www.w3.org/2000/svg" 
     viewBox="0 0 447.982 447.982" >
<g>
    <path d="M382.398,65.632c-0.009-0.009-0.017-0.02-0.026-0.029c-0.01-0.01-0.021-0.018-0.031-0.029
        C340.061,23.313,283.864,0.03,224.086,0.005c-0.034,0-0.066-0.005-0.1-0.005c-0.035,0-0.069,0.005-0.104,0.005
        c-59.785,0.028-115.987,23.32-158.266,65.594c-0.002,0.002-0.003,0.003-0.005,0.005c-0.001,0.001-0.002,0.002-0.003,0.003
        c0,0-0.001,0.001-0.002,0.002C23.301,107.915,0.002,164.163,0.002,223.993s23.299,116.078,65.604,158.384
        c42.307,42.306,98.555,65.605,158.385,65.605c59.829,0,116.078-23.299,158.384-65.605c42.307-42.306,65.605-98.555,65.605-158.384
        C447.98,164.174,424.69,107.936,382.398,65.632z M429.393,272.298L282.926,233.05c0.13-0.847,0.233-1.702,0.326-2.56h151.618
        C434.435,244.828,432.565,258.81,429.393,272.298z M409.843,323.789l-131.291-75.796c0.348-0.788,0.677-1.586,0.992-2.391
        l146.476,39.251C421.913,298.458,416.474,311.489,409.843,323.789z M377.63,368.441L270.471,261.273
        c0.535-0.666,1.059-1.341,1.566-2.029l131.281,75.79C395.868,347.02,387.254,358.209,377.63,368.441z M335.033,403.319
        L259.24,272.04c0.692-0.509,1.371-1.036,2.04-1.574l107.157,107.167C358.207,387.257,347.019,395.87,335.033,403.319z
         M284.849,426.021L245.6,279.545c0.805-0.314,1.602-0.643,2.39-0.991l75.8,131.289
        C311.488,416.475,298.455,421.915,284.849,426.021z M124.193,409.844l75.8-131.289c0.785,0.346,1.579,0.674,2.38,0.987
        l-39.249,146.477C149.521,421.913,136.492,416.474,124.193,409.844z M79.545,377.634l107.157-107.167
        c0.669,0.538,1.348,1.065,2.04,1.574L112.95,403.319C100.964,395.87,89.776,387.257,79.545,377.634z M44.664,335.034l131.281-75.79
        c0.507,0.689,1.031,1.364,1.566,2.03L70.353,368.441C60.728,358.21,52.114,347.021,44.664,335.034z M21.963,284.853l146.476-39.251
        c0.314,0.806,0.644,1.603,0.992,2.391L38.14,323.789C31.508,311.489,26.069,298.458,21.963,284.853z M18.59,175.682l146.466,39.248
        c-0.13,0.847-0.233,1.702-0.326,2.56H13.111C13.548,203.152,15.418,189.17,18.59,175.682z M38.138,124.2l131.29,75.8
        c-0.346,0.784-0.673,1.577-0.986,2.378L21.965,163.127C26.07,149.525,31.508,136.497,38.138,124.2z M70.356,79.542l107.158,107.167
        c-0.538,0.669-1.064,1.347-1.573,2.04L44.662,112.955C52.113,100.966,60.729,89.775,70.356,79.542z M112.952,44.665l75.793,131.278
        c-0.692,0.509-1.37,1.035-2.039,1.573L79.549,70.349C89.779,60.726,100.967,52.114,112.952,44.665z M163.126,21.967l39.249,146.477
        c-0.801,0.313-1.595,0.64-2.379,0.987l-75.8-131.289C136.494,31.511,149.523,26.073,163.126,21.967z M323.787,38.141l-75.8,131.289
        c-0.787-0.348-1.584-0.676-2.389-0.99l39.249-146.476C298.453,26.07,311.486,31.509,323.787,38.141z M368.434,70.35
        L261.276,177.517c-0.669-0.538-1.347-1.064-2.039-1.573l75.793-131.278C347.016,52.114,358.204,60.727,368.434,70.35z
         M403.32,112.956l-131.278,75.793c-0.509-0.692-1.036-1.37-1.573-2.039L377.627,79.542
        C387.254,89.775,395.869,100.966,403.32,112.956z M426.017,163.127l-146.477,39.251c-0.313-0.801-0.64-1.594-0.986-2.378
        l131.29-75.8C416.474,136.498,421.912,149.526,426.017,163.127z M224.052,270.613c-0.022,0-0.044-0.003-0.066-0.003
        c-0.021,0-0.042,0.003-0.063,0.003c-25.676-0.037-46.554-20.935-46.554-46.62c0-25.708,20.915-46.622,46.622-46.622
        s46.622,20.915,46.622,46.622C270.613,249.68,249.731,270.58,224.052,270.613z M233.047,165.058
        c-0.847-0.13-1.702-0.233-2.561-0.326V13.113c14.337,0.436,28.319,2.306,41.807,5.477L233.047,165.058z M217.486,164.732
        c-0.858,0.094-1.713,0.197-2.56,0.326L175.68,18.592c13.487-3.172,27.469-5.042,41.806-5.479V164.732z M13.111,230.49h151.618
        c0.094,0.858,0.197,1.713,0.326,2.56L18.589,272.299C15.417,258.811,13.547,244.828,13.111,230.49z M214.924,282.927
        c0.847,0.13,1.703,0.233,2.562,0.326v151.619c-14.338-0.437-28.32-2.307-41.808-5.479L214.924,282.927z M230.486,283.255
        c0.859-0.094,1.715-0.197,2.562-0.327l39.246,146.467c-13.488,3.171-27.47,5.041-41.808,5.477V283.255z M283.252,217.49
        c-0.094-0.858-0.197-1.713-0.326-2.56l146.466-39.248c3.172,13.488,5.042,27.47,5.479,41.808H283.252z"/>
    <path d="M223.991,188.649c-19.488,0-35.344,15.855-35.344,35.344s15.855,35.344,35.344,35.344s35.344-15.855,35.344-35.344
        S243.479,188.649,223.991,188.649z M223.991,246.337c-12.32,0-22.344-10.023-22.344-22.344s10.023-22.344,22.344-22.344
        s22.344,10.023,22.344,22.344S236.311,246.337,223.991,246.337z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>
        
         <h3>Happy Independence Day </h3>  <div class="main">
        
            <center><img src="zirul.jpg"id="pro"></center>
            </div>
            <br />

   <h3>
    ZIARUL HOQUE Rx
</h3>
</div>
<div class="bottom">
<svg id="hara" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319" ><path fill-opacity="1" d="M0,300L100,261.3C160,235,320,181,480,170.7C640,160,800,192,960,176C1120,160,1280,96,1360,64L1440,32L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg> 
</div>    
            </div>
            <div class="inner-cover"> 
                <div id="content">
                    <h4 id="quotation"><br>
                        <img src="zirul.jpg"id="pro">
                         <br>
                         <br>
                    कुछ तो बात है मेरे देश की मिट्टी में साहेब,<br>
                    सरहदें कूद के आते हैं यहाँ दफ़न होने के लिए।
<br> 
                        ..<br>
                        
                        </br></h4>
                </div>               
            </div>
           </div>
        </main>

        <audio src="terimitti.mp3"id="music">
        </audio>
              <center>  <img src="zyarul.png" class="dp"><br/>

   <h6>

                <a href="https://rashidjio.github.io/Rashid-Ahmeed-Profile/" >&copy;Made By Ziarul® </a>

            </h6>

	 </a>

	 </center>
    </body>
</html>?>
			
