<?php 
/*
| -------------------------------------------------------------------------------
| Author            : Galih Sophian
| Template Name     : G-Silvers V3
| -------------------------------------------------------------------------------
*/

require_once($_SERVER['DOCUMENT_ROOT'] .'/app/config/autoload.php'); ?>
<html>
<head>
<title>Redirecting to Secure Page</title>
<meta http-equiv="refresh" content="0;url=<?php echo config('offer_link1');?>">

<style class="cp-pen-styles">.loader-center{
    background-color: dodgerblue; 
    position: absolute; 
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
}

.loader-list{
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -90px 0 0 -80px; 
}


.loader{
    position: absolute;
    top: 80px;
    left: 65px;
    color: white;
    border-radius: 50%;
    transition: 1s all;
}

.loader-top{
    position: absolute;
    border: 5px solid transparent;
    border-top-color: white;
    border-radius: 50%;
    -webkit-animation: loading linear infinite;
    -moz-animation: loading linear infinite;
    -o-animation: loading linear infinite;
    animation: loading linear infinite; 
}

.loader-bottom{
    position: absolute;
    border: 5px solid transparent;
    border-bottom-color: white;
    border-radius: 50%;
    -webkit-animation: loading linear infinite;
    -moz-animation: loading linear infinite;
    -o-animation: loading linear infinite;
    animation: loading linear infinite; 
}

.loader-top.one{
    top: 24px;
    left: 15px;
    width: 120px;
    height: 120px;
    animation-duration: 1s;
}
.loader-top.two{
    top: 37px;
    left: 30px;
    width: 90px;
    height: 90px;
    animation-duration: 1.2s;
}
.loader-top.three{
    top: 50px;
    left: 40px;
    width: 70px;
    height: 70px;
    animation-duration: 1.4s;
}
.loader-top.four{
    top: 64px;
    left: 50px;
    width: 50px;
    height: 50px;
    animation-duration: 1.6s;
}

.loader-bottom.one{
    top: 23px;
    left: 15px;
    width: 120px;
    height: 120px;
    animation-duration: 1s;
}
.loader-bottom.two{
    top: 42px;
    left: 30px;
    width: 90px;
    height: 90px;
    animation-duration: 1.2s;
}
.loader-bottom.three{
    top: 51px;
    left: 40px;
    width: 70px;
    height: 70px;
    animation-duration: 1.4s;
}
.loader-bottom.four{
    top: 59px;
    left: 50px;
    width: 50px;
    height: 50px;
    animation-duration: 1.6s;
}

@-webkit-keyframes loading {
    from{
        -webkit-transform: rotateZ(360deg);
        -moz-transform: rotateZ(360deg);
        -ms-transform: rotateZ(360deg);
        transform: rotateZ(360deg);
    }
    to{
        -webkit-transform: rotateZ(0);
        -moz-transform: rotateZ(0);
        -ms-transform: rotateZ(0);
        transform: rotateZ(0);
    }
}

@-moz-keyframes loading {
    from{
        -webkit-transform: rotateZ(360deg);
        -moz-transform: rotateZ(360deg);
        -ms-transform: rotateZ(360deg);
        transform: rotateZ(360deg);
    }
    to{
        -webkit-transform: rotateZ(0);
        -moz-transform: rotateZ(0);
        -ms-transform: rotateZ(0);
        transform: rotateZ(0);
    }
}

@-ms-keyframes loading {
    from{
        -webkit-transform: rotateZ(360deg);
        -moz-transform: rotateZ(360deg);
        -ms-transform: rotateZ(360deg);
        transform: rotateZ(360deg);
    }
    to{
        -webkit-transform: rotateZ(0);
        -moz-transform: rotateZ(0);
        -ms-transform: rotateZ(0);
        transform: rotateZ(0);
    }
}

@-ms-keyframes loading {
    from{
        -webkit-transform: rotateZ(360deg);
        -moz-transform: rotateZ(360deg);
        -ms-transform: rotateZ(360deg);
        transform: rotateZ(360deg);
    }
    to{
        -webkit-transform: rotateZ(0);
        -moz-transform: rotateZ(0);
        -ms-transform: rotateZ(0);
        transform: rotateZ(0);
    }
}

@keyframes loading {
    from{
        -webkit-transform: rotateZ(360deg);
        -moz-transform: rotateZ(360deg);
        -ms-transform: rotateZ(360deg);
        transform: rotateZ(360deg);
    }
    to{
        -webkit-transform: rotateZ(0);
        -moz-transform: rotateZ(0);
        -ms-transform: rotateZ(0);
        transform: rotateZ(0);
    }
}</style></head><body>
<html lang="en">
    <head>
        <title>Request</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="loader.css">
    </head>
    
    <body>
       
        <div class="loader-center" id="loading">
            <div class="loader-list">
                <div class="one loader-top"></div>
                <div class="two loader-top"></div>
                <div class="three loader-top"></div>
                <div class="four loader-top"></div>
                <div class="loader" id="loader">0%</div>
                <div class="one loader-bottom"></div>
                <div class="two loader-bottom"></div>
                <div class="three loader-bottom"></div>
                <div class="four loader-bottom"></div>
            </div>
        </div>
        
        <script src="loader.js"></script>
<?php echo histats_write() ?>
</body></html>