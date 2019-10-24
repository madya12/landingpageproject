<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>G-Silvers Landing Page CPA</title>
  <style>
  html, body{
    background: #231A1B;
    color:#DD8F2B;
    display:block;
    height:100vh;
    width:100vw;
    padding:0;
    margin:0;
    font-family: Arial;
    text-shadow:0 0 10px;
    font-size:64px;
    filter: blur(1px);
    line-height:1rem;
    overflow:hidden;
}
#bg1, #bg2{
    display:block;
    content:'';
    width:50vw;
    height:100vh;
    position:absolute;
    z-index:-2;
    animation: blink 2s linear infinite;
}
#bg1{
    top:0;
    left:0;
    background: repeating-linear-gradient(
            -45deg,
            #231A1B,
            #231A1B 100px,
            #CE212B 101px,
            #DD8F2B 103px,
            #DD8F2B 200px,
            #CE212B 202px
    );
}
#bg2{
    top:0;
    right:0;
    background: repeating-linear-gradient(
            45deg,
            #231A1B,
            #231A1B 100px,
            #CE212B 101px,
            #DD8F2B 103px,
            #DD8F2B 200px,
            #CE212B 202px
    );
}
#container{
    height:100vh;
    display:flex;
    align-items: center;
    justify-content: center;
}
#content{
    width:100vw;
    display:inline-block;
    text-align:center;
    padding:10px 0;
}
h1{
    padding:0;
    margin:0;
    font-size:2rem;
    line-height:1.75rem;
}
.main{
    position:relative;
    padding:10px 0;
    margin:-5px;
    border-top: 15px solid #CE212B;
    border-bottom: 15px solid #CE212B;
    box-shadow: 0 0 10px #CE212B, 0 0 10px #CE212B inset;
}
.black-bg:after{
    position:absolute;
    display:block;
    content:'';
    width:100%;
    height:100%;
    top:0;
    left:0;
    z-index:-1;
    background: #231A1B;
    box-shadow: 0 0 2px 40px #231A1B;
}
.black-bg-small:after{
    position:absolute;
    display:block;
    content:'';
    width:100%;
    height:100%;
    top:0;
    left:0;
    z-index:-1;
    background: #231A1B;
    box-shadow: 0 0 2px 15px #231A1B;
    border-radius: 5px;
}
.bigtext{
    animation: scroll 5s linear infinite;
}
.secondary{
    opacity:0.75;
    animation: scroll 15s linear infinite;
}
.cartridge{
    position:relative;
    display:inline-block;
    border: 5px solid #DD8F2B;
    border-radius: 10px;
    padding:10px;
    font-size:2rem;
    font-weight:bold;
    line-height:2rem;
}
@keyframes scroll {
    from{ transform: translateX(80vw)}
    to{ transform: translateX(-80vw)}
}
@keyframes blink {
    0%{ opacity: 1}
    40%{ opacity: 0}
    60%{ opacity: 0}
    100%{ opacity: 1}
}

  </style>
</head>
<body>
  <div id="bg1"></div>
  <div id="bg2"></div>
  <div id="container">
    <div id="content">
	<a href="https://4watchmovie.com" style="color: #DD8F2B;">
      <div class="cartridge black-bg-small">
        CEK
      </div></a>
      <br/>
      <br/>
	  <a href="https://4watchmovie.com" style="color: #DD8F2B;">
      <div class="main black-bg">
        <span class="scrolling">
        <div class="secondary">G-Silvers</div>
        <h1 class="bigtext">LANDING PAGE CPA</h1>
        <div class="secondary">Movie,Series,Sports,Ebook,Concert Music</div>
        </span>
      </div>
	  </a>
      <br/>
	  <a href="https://4watchmovie.com" style="color: #DD8F2B;">
      <div class="cartridge black-bg-small">
        DEMO
      </div></a>
    </div>
  </div>
</body>
</html>