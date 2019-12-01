<?php
        session_start();
//session_destroy();
include_once("include/config.php");
include_once("include/OAuth.php");
include_once("include/twitteroauth.php");
include_once("include/TwitterAPIExchange.php");

?>  

<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Twitter Analysis</title>
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
    <style type="text/css">
    </style>     
</head>
<style>
.grid{
    display:grid;
    grid-template-columns:auto auto auto;
    margin-left:250px;
    margin-top:0px;

}
header{
    background:#94bbe9;
    height:300px;
}
.cont{
    box-shadow:0px 10px 10px 0px gray;
}
img{
    border-radius:400px;
}
.grid1{
    display:grid;
    grid-template-columns:auto auto;
    margin-left:100px;
    margin-top:0px;
}
.name{
    margin-top: 70px;
    width: 500px;
}
.image{
    margin-left: 160px;
}

.img{
    /* Position:absolute; */
}
.nam{
    Position:absolute;
    margin-top:4px;
    margin-left:200px;
}
.follower{
    margin-top:0px;
}

.follower span{
    font-size:23px;
}
</style>
<body>

<div id="content">
<?php


if(isset($_SESSION['status']) && $_SESSION['status']=='verified') 
{


    
	$screenname = $_SESSION['request_vars']['screen_name'];
	$twitterid = $_SESSION['request_vars']['user_id'];
	$oauth_token = $_SESSION['request_vars']['oauth_token'];
	$oauth_token_secret = $_SESSION['request_vars']['oauth_token_secret'];
    $settings = array(
        'oauth_access_token' => "985843484379627521-ejtlBuIgSAMtIee6mDJwRQSlmzyOms3",
        'oauth_access_token_secret' => "6Sn3tScVe9sXD3vDBLn0PmoK84RV8vvKB6zlXC3QxAutF",
        'consumer_key' => "4hWspuooqkdYC6j9QpQVGulzz",
        'consumer_secret' => "ptUK4M0rxigSwJ7OrzazZV6PM5jvsraMITH5VDgzkqCPTUl6Sg"
    );
    $usershow = "https://api.twitter.com/1.1/users/show.json";
    $profilebanner= "https://api.twitter.com/1.1/users/profile_banner.json";
    $followerslist= "https://api.twitter.com/1.1/followers/list.json";
    $tweets="https://api.twitter.com/1.1/statuses/user_timeline.json";
    $posttweet="https://api.twitter.com/1.1/statuses/update.json";

    $requestMethod = "GET";
	$postMethod="POST";
    $getfield = '?screen_name='.$screenname.'&count=20';
    $twitter= new TwitterAPIExchange($settings);
    $twitter -> setGetfield($getfield )
                        -> buildOauth($usershow,$requestMethod)
                        -> performRequest();

    $usershowresponse= json_decode($twitter -> setGetfield($getfield )
                        -> buildOauth($usershow,$requestMethod)
                        -> performRequest(),$assoc="TRUE");
    $twitter= new TwitterAPIExchange($settings);
    $twitter -> setGetfield($getfield )
                        -> buildOauth($tweets,$requestMethod)
                        -> performRequest();

    $tweetsresponse= json_decode($twitter -> setGetfield($getfield )
                        -> buildOauth($tweets,$requestMethod)
                        -> performRequest(),$assoc="TRUE");

    //Followers list
    $getfollowers= '?screen_name='.$screenname.'&count=20';
    $twitter= new TwitterAPIExchange($settings);
    $twitter -> setGetfield($getfollowers )
                        -> buildOauth($followerslist,$requestMethod)
                        -> performRequest();

    $followerslistresponse= json_decode($twitter -> setGetfield($getfollowers)
                        -> buildOauth($followerslist,$requestMethod)
                        -> performRequest(),$assoc="TRUE");


            



    

 $profilepic=$usershowresponse['profile_image_url'];   
   function detect_sentiment($string){
   
        $string = urlencode($string);
        $api_key ="f3ca769c5c79916d788db28d76844d";
        $url = 'https://api.paysify.com/sentiment?api_key='.$api_key.'&string='.$string.'';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $response = json_decode($result,true);
        curl_close($ch);
     
        return $response;
        }


        echo '<header>
        <nav class="nav-wrapper transparent" id="mainNav">
                <div class="container">
                    <a href="#" class="brand-logo">TweetsAnalyzer</a>
                    <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                        <i class="material-icons" style="color: black;">menu</i>
                    </a>
                  <ul class="right hide-on-med-and-down">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="logout.php">Logout</a></li>
                  </ul>
              
                  <ul class="sidenav gray lighten-2" id="mobile-menu">
                  <li><a href="index.html">Home</a></li>
                      <li><a href="logout.php">Logout</a></li>
      
                
                     
                  </ul>
                
                  </div>
    </nav>
    
    <div class="grid1">
                  <div class="name">
                      <h3>Here your Analyzed Tweets..</h3>
                  </div>
                  <div class="image">
                      <img src="image/e.svg" alt=""  height="400px">
                  </div>
              </div>
            </header>
    ';
        echo "<hr>";

    //POST TWEET

    $statusval='';
    if(isset($_POST['updateme'] ))
    {
        $statusval=$_POST['updateme'];
        header('Location:./index.php');

    }

    $setPostfields=array('status' => $statusval);

    $getfollowers= '?screen_name='.$screenname.'&count=20';
    $twitter= new TwitterAPIExchange($settings);
    $twitter -> setPostfields($setPostfields)
                        -> buildOauth($posttweet,$postMethod)
                        -> performRequest();

    $posttweetresponse= json_decode($twitter -> setPostfields($setPostfields)
                        -> buildOauth($posttweet,$postMethod)
                        -> performRequest(),$assoc="TRUE");




    

    $count=0;
    for ($i=0;$i<23;$i++)
    {   
        // $name=$followerslistresponse['users'][$i]['name'];
        // $profile_img=$followerslistresponse['users'][$i]['profile_image_url_https'];
        // echo '<img src='.$profile_img.'></img>';
        // echo "$name"."<br>";
        $count=$count+1;

    }

    foreach( $tweetsresponse as $items)
    {
        
        $profilepic=$items['user']['profile_image_url'];
        $username=$items['user']['name'];
        $screenname=$items['user']['screen_name'];
        $count1=$items['user']['followers_count'];
        $friends_count=$items['user']['friends_count'];
        $location=$items['user']['location'];
        $desc=$items['user']['description'];
   

        
    }
   

    
    
    echo '<div class="card"  style="width:800px; height:450px;"> ';
        echo "<div class='img'>";
        echo'<img src='.$profilepic.' style="width:100px; border-radius:300px;height:100px;"></img>';
        echo "</div>";
        echo '
        <div class="nam"> <h1>'.$username.'</h1></div>
    
        <div class="nam1"> <h2> @'.$screenname.'</h2></div>
        <span> <h4>'.$desc.'</h4></span>
        <div class="folllowers"> <br>
        <h4>Followers Count<h4> 
        <span> <h4> <a href="followers.php">'.$count1.'</a></h4> </span>
        <h4>Following Count<h4> 
        <span style="color:blue"> <h4>'.$friends_count.'</h4></span>
        <span style=color:orange><h4> User Location<h4></span> 
        <span> <h4>'.$location.'</h4></span>
        
        
        
        ';



echo '<br> </div>
<br>    
</div>
';

    echo '<br>';

    echo '<center><div class="text_tweet_box" style="width:800px;height:200px;">';
        echo '<form id="tweerform" method="post" action="index.php">';
        echo '<textArea name="updateme" style="color:black" id="textupdate" cols="60" rows="4"></textArea>';
        echo '<br><br>';
        echo '<input type="submit" value="Tweet" style="" name="submit" onclick="clearform();"/>';

        echo '</form>';
        echo"</div></center>";
        echo '<br>';
        echo '<hr>';





    $ptweet = 0;
    $ntweet = 0;
    $neutewwt = 0;
    $flag=0;

    echo '<section style="margin-top: 50px;" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
               
                    ';
    foreach( $tweetsresponse as $items)
    {
       echo "<div class='card'>";
       echo "<div class='card-body'>";
    	$profilepic=$items['user']['profile_image_url'];
    	echo '<img src='.$profilepic.'></img>';
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time and Date of Tweet: ".$items['created_at']."<br />";
        $sentitweets=$items['text'];
        echo "<br>";
        echo "Tweet: ". $items['text']."<br />";
        $data = detect_sentiment($sentitweets);
        
      foreach( $data as $items)
        {           error_reporting(0);
                //    echo $items["state"] ;
                    if($items["state"] == 'Positive'){
                        echo "<br>";
                        echo "<h6>Positive</h6>";
                         $ptweet++;
                    }
                     if($items["state"] == 'Negative'){
                        echo "<br>";
                        echo "<h6 style='color:red;'>Negative</h6>";
                        $ntweet++;
                    }
                     if($items["state"] == 'Neutral'){
                        echo "<br>";
                        echo "<h6 style='color:#799bba'>Neutral</h6>";
                         $neutewwt++;
                    }
                    $flag=1;
                 
         }



     
        //    echo $ptweet;
        
        echo "<hr> </div></div><br><br>";
        }
        echo  ' </div>
        
        

    </div>

    </div>
    </div>
    </section> <br>';
    
   
    
    echo "<div class='grid'>";
    echo "<div class='item1'>";
    echo "<h1>&nbsp;&nbsp;&nbsp;".$ptweet."</h1>";
    echo "<span>Positive Tweets</span>";
    echo "</div>";
    echo "<div class='item2'>";
    echo "<h1>&nbsp;&nbsp;&nbsp;".$ntweet."</h1>";
    echo "<span>Negative Tweets</span>";
    echo "</div>";
    echo "<div class='item3'>";
    echo "<h1>&nbsp;&nbsp;&nbsp;".$neutewwt."</h1>";
    echo "<span>Neutral Tweets</span>";
    echo "</div>";

    echo "</div>";
         
         
    
    

}else{

    echo '<a href="process.php"><img src="sign.png" width="151" height="24" border="0" /></a>';
}

    
    ?>
</div>
<script>
    function clearform()
    {
        document.getElementById("tweet_box").reset();
    }

</script>

</body>
</html>
