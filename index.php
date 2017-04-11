<?php 
session_start();
error_reporting(0);
$act = $_GET['act'];

?>
<title>Muhammad Umair
</title> 
<link <link href="css/style.css" rel="stylesheet" type="text/css">
<<link <href="css/style_2.css" rel="stylesheet" type="text/css" media="all">

<script src="fallingsnow_v6.js"></script>

<?php error_reporting(0);
$bot=new bot();
class bot{ 




public function getGr($as,$bs){
$ar=array(                                                         
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);




return $im.$as.$bs;
}




public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $honey[]=$b.'='.$c;
}
$true='?'.implode('&',$honey);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}




private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by CHEEZY',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}




public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('honey')){
        mkdir('honey');
}
if($bb){
$blue=fopen('honey/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);




echo'<script type="text/javascript">alert("INFO : Your Bot Has Been Saved !! Good Luck !! Dear")</script>';
}else{
        if($z){
if(file_exists('honey/'.$id)){
$file=file_get_contents('honey/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('honey/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('honey/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('honey/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('honey/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('honey/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !! Good Luck !! Buddy")</script>';}}
}




public function lOgbot($d){
        unlink('honey/'.$d);
        unset($_SESSION[key]);




echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';




        $this->atas();
        $this->home();
        $this->bwh();
}




public function cek($tok,$id,$nm){
$if=file_get_contents('honey/'.$id);
$if=explode('*',$if);
echo'
<center>
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link"><font color="green">Setting BOt by '.$nm.'</a></h3>
<ul>
<li>
Welcome  : <font color="White">'.$nm.'</font></li>
<li>
<center><a href="http://www.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:200px; height:200px;" alt="'.$nm.'"/></a></li><center/>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<button id="submit"  class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">LOgout BOT</button> </a><br>
<li>
<form action="index.php" method="post">
<font color="red">Bot Active Check YOur Activity LOg Now Thanks To Umair™</li>
<li>

<div id="top-content">
<div id="search-form">
</div></div></div>';




$this->membEr();
}




public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);




$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);




$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);




echo'
<div id="header">
<h1 class="heading">




</h1>
<h2 class="description">
</h2></div>';
} 




public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
<center>
  <span class="mfss fcg">
<font size="30" color="red"><center>⚔</font><font face="Orbitron" size="50" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.2em red, 0pt 2pt 0.2em red;"><b> 🎭 REACTION BOT AUTO COMMENT  👍 ❤️ 😂 😯 😢 😡  </b></font><font size="30" color="Red">⚔</center></font></h3> 
</span>
</center>

</div>
<div class="post-content">
<center><a target="_blank"  href="https://www.facebook.com/100008160223926"><img src="https://graph.facebook.com/100008160223926/picture?width=6
440" alt="" style="border-radius: 20em; border: 1px; box-shadow: 0px 0px 7px 5px 	#B22222; padding: 0px;" width="150" height="230" title=""/>`        `       `<a target="_blank"  href="https://www.facebook.com/100008160223926"><img src="https://graph.facebook.com/100008160223926/picture?width=6
440" alt="" style="border-radius: 20em; border: 1px; box-shadow: 0px 0px 7px 5px 	#B22222; padding: 0px;" width="240" height="310" title=""/></a> `        `       ` <a target="_blank"  href="https://www.facebook.com/100008160223926"><img src="https://graph.facebook.com/100008160223926/picture?width=6
440" alt="" style="border-radius: 20em; border: 1px; box-shadow: 0px 0px 7px 5px 	#B22222; padding: 0px;" width="150" height="230" title=""/> </div>
</span>
</div>
<span>
<br>
</div>
<div class="post-meta2">
<center><iframe src="//www.facebook.com/plugins/follow?href=https://www.facebook.com/umaircheezy.offical&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe><center/>
</div>
</div>
</div>';
}








public function showlogin(){
                 echo '<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">Login to Bot Site</a></h3>
<ul id="search-form">
  
  <form action="index.php" method="post">
  <li><div class="login-error">'.$GLOBALS["loginerror"].'</div></li>
   <li><label class="label-password">Password&nbsp;
  <br>
  </center>
   </label><input class="inp-text" type="password" style="height:35px;width:60%;border-radius:15px;border:1px solid white;background: none;color:white;" name="password"></li>
   <center>
    <button id="submit"  class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">LOgin  ♥</button> </a><br>
  </form>
</ul></div></div>';
        }




















public function bwh() {
    
 if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
          $this->showlogin();
          $this->membEr();
          return;
 }
         echo '<div id="bottom-content">
<div id="navigation-menu">
<marquee behavior="scroll" direction="right" scrollamount="5" scrolldelay="3" width="100%">
<b>
<a class="sec" href="http://fb.com/100008160223926"><font color="White" size="20"></font></a></b><font size="20"</font></marquee><br />
<font size="16" color="purple"> </font>
</span>
</div></center><br>
<center>
<ul>
<a
<a href="http://semal-tokenx.tk/" target="_blank">
<button id="submit" class="btn btn-sm btn-primary"style="border: 4px solid white;color: #fff;border-radius: 55px;padding: 20px;font-size: 18px;font-weight: bold;margin-left: -5px;margin-top: 8px; margin-bottom: 15px;background-color: white;color:white;background: none;">Get Access Iphone Token </button> </a><br>
<div style="border-top: 1px #ccc solid; margin-top: 10px;"></div></br>
<font color="red" size="5">☣ 
 Get Token From semal-tokenx.tk & Submit Your Access Token Here  ☣ 
</font>
<br>
<div id="top-content">
<div id="search-form">
<center>
<form action="index.php" method="post">
<br>
<input class="inp-text" type="text" style="height:35px;width:60%;border-radius:15px;border:1px solid white;background: none;color:white;" name="token">
<center>
<button id="submit"  class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">Save</button> </a><br></form></div></div></div>';



$this->membEr();
}




public function membEr(){
        if(!is_dir('honey')){
        mkdir('honey');
}
$up=opendir('honey');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }




echo'
<center>
            <h4> <font color="red";>--- Powered By :- Muhammad Umair  ---</h4></font></h5></p>
            </ol>
            <div class="messages-push"></div>
        </div>
    <div class="footer">
<p><h4> <font color="gray";>-+- Copyright (c) 2017 -+-</h4></font></h5></p>
       
    </div>
<p><h4> <font color="blue";>--- Follow Me on Facebook ---</h4></font></h5></p>
</div>
</div>
</div>
</div>
<a href="https://facebook.com/umaircheezy.offical" target="_blank">
<button id="submit" class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: blue;color:blue;background: none;">Follow Me </button>
</div>
</div>
</div>
</div>
<center>
<div id="footer">
<font color="gray">
Fanx Of My BOT : <font color="green">'.count($user).'</font>
<br>
<font color="red">
Script bot &copy; 2017<br>
Powered By :  <a href="https://fb.com/XHackerxTeam"><font color="green">X-Hackerx Team</font></a><br>
</div>';
}











public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions,user_photos,user_friends,friends_photos,user_activities,user_likes,user_status,user_groups,friends_status,publish_stream,read_stream,read_requests,status_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}








}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('honey/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Buddy Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('honey/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Buddy Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
</div>
</div>
</div>
</script>
<p><h4> <font color="yellow";>--- Click Here To Add Another Token !  ---</h4></font></h5></p>
<center><audio controls autoplay>
  <source src="http://2016a.downloadming1.com/punjabi mp3/Havana - Kamal Raja (2016)/01 - Havana (320 Kbps) - DownloadMing.SE.mp3 " type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
</body>
<SCRIPT LANGUAGE="JavaScript">
var message="View Source Dkha ga 3:) heheehehhe chal nikal 😂  ";
///////////////////////////////////
function clickIE() {if (document.all) {alert(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {alert(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// --> 
</script>
<!--Start of Tawk.to Script--><script type="text/javascript">var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();(function(){var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];s1.async=true;s1.src='https://embed.tawk.to/57a9cb7ec061b61520205282/default';s1.charset='UTF-8';s1.setAttribute('crossorigin','*');s0.parentNode.insertBefore(s1,s0);})();</script><!--End of Tawk.to Script-->
