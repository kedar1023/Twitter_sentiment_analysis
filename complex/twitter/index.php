<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tweets Analyzer</title>
    <link rel="icon" href="logo.PNG">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

</head>
<style>
    .nav {
        display: inline-flex;
        margin-left:20px;
    }
    
    .nav .logo {
        background: white;
    }
    
    ul {
        list-style: none;
    }
    li{
        float:left;
    }
    
    .logo {
        font-size: 32px;
        font-family: 'Courier New', Courier, monospace;
        cursor:pointer;
        
    }
    
    p {
        font-size: 20px;
        font-family: 'Courier New', Courier, monospace;
    }
    
    .search {
        color: white;
        width: 600px;
        margin-left: 370px;
        margin-top:140px;
        border-radius: 10px;
        border-radius:100px;
    }
    
    span {
        font-size: 30px;
        /* font-family: 'Courier New', Courier, monospace; */
    }
    
    * {
        box-sizing: border-box;
    }
    

    form.example button:hover {
        background: #0b7dda;
    }
    
    form.example::after {
        content: "";
        clear: both;
        display: table;
    }

    
.right{
    float: right;
    margin-left: 400px;
    font-size:  17px;
}
.right button{
    background:white;
    outline:none;
    color:#777;
    border-radius:10px;
    width:130px;
    height:30px;
    border:1px solid #777; 
    cursor:pointer;
}
.right button:hover{
    color:blue;
    border:1px solid blue;
    cursor:pointer;
}
.ana:hover{
     color:blue;
     cursor:pointer;
}


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #555;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
.pra{
    display: grid;
    grid-template-columns: auto auto auto;
}
.item1{
    margin-left:100px;
}
header{
        background: #94bbe9;
        height: 300px;
    }
 @media screen and (max-width:670px){
    .search {
        margin-left:50px;
        width:430px;
     }
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
                  <li><a href="../index2.php">Home</a></li>
                  <li><a href="../process.php">Analyze Tweets</a></li>
                  <li><a href="index.php">Analyze Hashtags</a></li>
                  
          
              </ul>
          
              <ul class="sidenav gray lighten-2" id="mobile-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="process.php">Analyze Tweets</a></li>
                    <li><a href="login.html">Analyze Hashtags</a></li>
                    <li><a href="login.html">Analyze Hashtags</a></li>
  
            
                 
              </ul>
            
              </div>
          </nav>
          

          
            <div class="search">
          
            <div class="card">
        <center><br>
            <span class="m" style="color:black">How positive are your tweets?<br>
        </span><br>
        <form class="example" id="form"  method="GET" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="q"><br><br>
        <button class="btn">Submit</button>
            <br>
            </form>
            <br><br>
                
          
        </center>
        
    </div>
    </div>
</header>
    <br><br><br><br>
  <br><br><br><br>
    <?php

if(isset($_GET['q']) && $_GET['q']!='') {
    include_once(dirname(__FILE__).'/config.php');
    include_once(dirname(__FILE__).'/lib/TwitterSentimentAnalysis.php');

    $TwitterSentimentAnalysis = new TwitterSentimentAnalysis(DATUMBOX_API_KEY,TWITTER_CONSUMER_KEY,TWITTER_CONSUMER_SECRET,TWITTER_ACCESS_KEY,TWITTER_ACCESS_SECRET);

    //Search Tweets parameters as described at https://dev.twitter.com/docs/api/1.1/get/search/tweets
    $twitterSearchParams=array(
        'q'=>$_GET['q'],
        'lang'=>'en',
        'count'=>20,
    );
    $results=$TwitterSentimentAnalysis->sentimentAnalysis($twitterSearchParams);


    ?>
  <h5 style=" font-family: 'Courier New', Courier, monospace;">Results for "<?php echo $_GET['q']; ?>"</h5>
    <table class="striped">
        <thead class="head">
            <tr>
                <td>Id</td>
                <td>User</td>
                <td>Text</td>
                <td>Twitter Link</td>
                <td>Sentiment</td>
            </tr>
        </thead>
        <tbody class="body">
            <?php
             $count = 0;
             $negcount = 0;
             $neucount = 0;
                foreach($results as $tweet) {

                    $color=NULL;
                    if($tweet['sentiment']=='positive') {
                        $color='#FFFFFF';
                        $count +=1;
                    }
                    else if($tweet['sentiment']=='negative') {
                        $color='#FF0000';
                        $negcount+=1;
                    }
                    else if($tweet['sentiment']=='neutral') {
                        $color='#FFFFFF';
                        $neucount+=1;
                    }
                    ?>
                <tr style="background:<?php echo $color; ?>;">
                    <td>
                        <?php echo $tweet['id']; ?>
                    </td>
                    <td>
                        <?php echo $tweet['user']; ?>
                    </td>   
                    <td>
                        <?php echo $tweet['text']; ?>
                    </td>
                    <td><a href="<?php echo $tweet['url']; ?>" target="_blank">View</a></td>
                    <td>
                        <?php echo $tweet['sentiment']; ?>
                    </td>
                </tr>
                <?php
                }
                echo "<div class='pra'>";
                echo "<div class='item1'>";
                echo "<h5 style='color:hsl(100, 100%, 20%)'>+".$count."<br>Positivity Score </h5>";
                echo "</div>";       
                echo "<div class='item2'>";
                echo "<h5 style='color:#666'>".$negcount."%<br>Negative Tweets</h5>";
                echo "</div>";            
                echo "<div class='item3'>";
                echo "<h5 style='color:#799bba'>".$neucount."%<br>Neutral Tweets </h5>";
                echo "</div>";                
                echo "</div>";
                ?>
        </tbody>
    </table>
    
    <?php
}

?>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
<script>
var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

    <br><br><br>
    <br><br><br>
    <hr>
    <div class="footer">
        <footer>
            <center>
                <p>&copy; TweetsAnalyzer &nbsp;<a href="#">about us</a></p>
            </center>
        </footer>
    </div>
</body>

</html>