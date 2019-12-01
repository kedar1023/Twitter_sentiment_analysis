
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TweetsAnalyzer</title>
    <link rel="shortcut icon" href="image/l.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

</head>



<style>
    body{
        margin: 0;
        padding: 0;
    
    }
    a{
        color: black;
        text-decoration: none;
    }
    ul li a{
        font-size: 20px;
    }
    ul li a:hover{
        text-decoration: none;
        color: white;
    }
    header{
        background: #94bbe9;
        height: 300px;
    }
    .grid{
    display:grid;
    grid-template-columns:auto auto;
    margin-left:100px;
    margin-top:0px;
}
.grid1{
    display:grid;
    grid-template-columns:auto auto auto;
    grid-gap: 30px;
    margin-top:0px;
    margin-left: 80px;
    width: 1200px;
}
.senti{
    display:grid;
    grid-template-columns:auto auto auto;
    grid-gap: 30px;
    margin-top:0px;
    margin-left: 30px;
}
.name{
    margin-top: 50px;
    width: 500px;
}
.image{
    margin-left: 200px;
}
.hash{
    border-bottom: 2px solid #94bbe9;
    width: 70px;
}
/* .middle{
  position: absolute;
  top: 50%;
  width: 100%;
  transform: translateY(-50%);
} */
.counting-sec{
  padding: 40px 0;
  width: 100%;
  /* background: linear-gradient(90deg,#3c6382,#82ccdd);
  border-bottom-right-radius: 400px; */
}
.inner-width{
  max-width: 1200px;
  margin: auto;
  display: flex;
}
.col{
  flex: 1;
  text-align: center;
  padding: 20px;
  color: #fff;
  text-transform: uppercase;
}
.col i{
  font-size: 40px;
  color: #333;
}
.num{
  font-size: 70px;
  margin: 20px 0;
  color: black;
}
footer{
    background: #94bbe9;
    height: 150px;
    border-top-right-radius: 80%;
}
.lasr{
    display:grid;
    grid-template-columns:auto auto;
    grid-gap: 30px;
    margin-top:0px; 
    margin-left: 30px;
}
.name a{
    text-decoration:none;
    color:white;
}
</style>    
<body>
<header>
    <nav class="nav-wrapper transparent" id="mainNav">
            <div class="container">
                <a href="#" class="brand-logo">TweetsAnalyzer</a>
                <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                    <i class="material-icons" style="color: black;">menu</i>
                </a>
              <ul class="right hide-on-med-and-down">
                  <li><a href="index2.php">Home</a></li>
                  <li><a href="process.php">Analyze Tweets</a></li>
                  <li><a href="twitter/index.php">Analyze Hashtags</a></li>
                  <li><a href="logout.php">Logout</a></li>
                 
                  
          
              </ul>
          
              <ul class="sidenav gray lighten-2" id="mobile-menu">
                    <li><a href="index2.php">Home</a></li>
                    <li><a href="process.php">Analyze Tweets</a></li>
                    <li><a href="login.html">Analyze Hashtags</a></li>
                    <li><a href="login.html">Analyze Hashtags</a></li>
                    <li><a href="login.php">Logout</a></li>
  
            
                 
              </ul>
            
              </div>
          </nav>

          <div class="grid">
              <div class="name">
                  <h3>Get's Analyze how are you Positive?.</h3><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button class="btn btn-primary"><a href="process.php ">Check</a></button>
              </div>
              <div class="image">
                  <img src="image/d.svg" alt=""  height="400px">
              </div>
          </div>
        </header>
<br>
<br>
<div class="main">
    <div class="hashtitle">
        <center><h1>Popular Hashtags on Twitter</h1></center>
                <hr class="hash">
    </div><br><br><br>
    <div class="grid1">
        <div class="item1">
                <div class="card">
                        <div class="card-body">
                            <div class="htitle">
                                <center><h4>#Chandryan2</h4></center>
                            </div><br>
                            <div class="senti">
                                <div class="pos">
                                    <h3 style="color:hsl(100, 100%, 24%)">21+</h3>
                                    <span>Positivity Score</span>
                                </div>
                                <div class="neg">
                                        <h3 style="color:#799bba">2%</h3>
                                        <span>Neutral Tweets</span>
                                        
                                </div>
                                <div class="neu">
                                    <h3 style="color:gray">35%</h3>
                                    <span>Negative Tweets</span>
                                    
                                </div>
                            </div>
                        </div>  
                      </div>
        </div>
        <div class="item2">
                <div class="card">
                        <div class="card-body">
                            <center><h4>#DevFest2k19</h4></center><br>
                            <div class="senti">
                                    <div class="pos">
                                        <h3 style="color:hsl(100, 100%, 24%)">16+</h3>
                                        <span>Positivity Score</span>
                                    </div>
                                    <div class="neg">
                                            <h3 style="color:#799bba">0%</h3>
                                            <span>Neutral Tweets</span>
                                            
                                    </div>
                                    <div class="neu">
                                        <h3 style="color:gray">25%</h3>
                                        <span>Negative Tweets</span>
                                        
                                    </div>
                                </div>
                        </div>
                      </div>
        </div>
        <div class="item3">
                <div class="card">
                        <div class="card-body">
                                <center><h4>#HacktoberFest</h4></center><br>
                                <div class="senti">
                                        <div class="pos">
                                            <h3 style="color:hsl(100, 100%, 24%)">40+</h3>
                                            <span>Positivity Score</span>
                                        </div>
                                        <div class="neg">
                                                <h3 style="color:#799bba">5%</h3>
                                                <span>Neutral Tweets</span>
                                                
                                        </div>
                                        <div class="neu">
                                            <h3 style="color:gray">30%</h3>
                                            <span>Negative Tweets</span>
                                            
                                        </div>
                                    </div>
                        </div>
                      </div>
        </div>
    </div>
</div>

<br><br>


<div class="count">
    <div class="countitle">
            <center><h1>Survey on Twitter</h1></center>
            <hr class="hash">
    </div>
        <div class="middle">
                <div class="counting-sec">
                  <div class="inner-width">
                    <div class="col">
                    
                      <div class="num"><h1>321</h1></div>
                      <h5 style="color:black">Million Users</h5>
                    </div>
            
                    <div class="col">
                      
                      <div class="num">34</div>
                    <h5 style="color:black"> Percent Female Users</h5>
                    </div>
            
                    <div class="col">
                      
                      <div class="num">66</div>
                     <h5 style="color:black">Percent Male Users </h5>                     
                    </div>
            
                    <div class="col">
                     
                      <div class="num">79</div>
                     <h5 style="color:black"> Outside the US Users</h5>
                    </div>
                  </div>
                </div>
              </div>
            
            
              <script type="text/javascript">
                $(".num").counterUp({delay:10,time:1000});
              </script>
            
</div>
<br>
<div class="countitle">
        <center><h1>What is TweetsAnalyzer?..</h1></center>
        <hr class="hash">
        <br><br>
<div class="lasr">
    
    <div class="img">
        <img src="image/a.svg" width="500px;" alt="">
    </div>
    <div class="wrote">
        <h6>TweetsAnalyzer Will help you to Find the Sentiments of your Tweets and Get the Sentiments by the popular #HashTags. TweetsAnalyzer Will help you to Find the <br>Sentiments of your Tweets and Get the Sentiments.. <p>TweetsAnalyzer Will help you to Find the Sentiments of your Tweets and Get the Sentiments.. </p></h6>
    </div>
</div>

<br>
<br>
<footer>
<br><br><br>
            <center><h3>2019 &copy; <a href="#">TweetsAnalyzer</a></h3></center>
  
</footer>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  


<script>
$(document).ready(function(){
$('.sidenav').sidenav();
$('.materialboxed').materialbox();
$('.parallax').parallax();
$('.tabs').tabs();
$('.datepicker').datepicker();
$('.timepicker').timepicker();
$('select').formSelect();

});
</script>
    </body>
</html>