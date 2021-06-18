<!DOCTYPE html>


<html>
<head>
  <meta charset="utf-8">
  <title>portfolio</title>
  
  <link rel="stylesheet" href="stylesheet.css">
  <link rel='stylesheet' href='https://eejanaica.com/style.css?v=2' type='text/css' />
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="responsive.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        
</head>
<body>

<header>
        <ul>
        <li><a href="index.html#profile">PROFILE</a></li>
            <li><a href="index.html#skill">SKILL</a></li>
            <li><a href="index.html#work">WORK</a></li>
            <li><a href="index.html#contact">CONTACT</a></li>
        </ul>
    </header>


  <?php
try{

    $dsn ='mysql:dbname=otoiawase;host=localhost;charset=utf8';
    $user ='root';
    $password ='root';
    $dbh = new PDO($dsn,$user,$password);

$company= $_POST["company"];
$name=$_POST['name'];
$tel=$_POST['tel'];
$mail=$_POST['mail'];
$body=$_POST['body'];
?>

<div class="thanks-wrap">
    <div class="thanks">
        <h4><?php echo $name; ?>様</h4>
        <h3>お問い合わせありがとうございました。</h3>
        <h3><?php echo $mail;?>にメールを送らせていただきましたので、ご確認お願い致します。</h3>
    </div>
</div>

<?php

$mail_sub="お問い合わせありがとうございました。";
$mail_body=$name."様へ¥nお問い合わせありがとうございました。¥n改めて、折り返しの連絡を致しますので、宜しくお願い致します。";
$mail_body="¥n¥n¥n田畑　菜夏¥nTEL:080-6815-6753¥nemail:nnugym@icloud.com";
$mail_body=html_entity_decode($mail_body,ENT_QUOTES,"UTF-8");
$mail_head="From:nnugym@icloud.com";
mb_language('Japanese');
mb_internal_encoding("UTF-8");
mb_send_mail($mail,$mail_sub,$mail_body,$mail_head);

$sql='INSERT INTO toiawase (company,name,tel,mail,body) VALUES ("'.$company.'","'.$name.'","'.$tel.'","'.$mail.'","'.$body.'")';
    $stmt=$dbh->prepare($sql);
    $stmt->execute();
    
    $dbh=null;
}
catch(Exception $e)
    { 
       echo '<div class="error-wrap">';
      echo '<div class="error">';
       echo '<h3>'; echo '<i class="fas fa-exclamation-triangle"></i>ただいま障害により大変ご迷惑をおかけしております。<i class="fas fa-exclamation-triangle"></i>';echo '</h3>';
       echo '<h3>';echo '回復までしばらくお待ちください。';echo '</h3>';
        echo '</div>';
        echo '</div>';
    }



?>
</body>
</html>
