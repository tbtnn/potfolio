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

$company= $_POST["company"];
$name=$_POST['name'];
$tel=$_POST['tel'];
$mail=$_POST['mail'];
$body=$_POST['body'];

$company=htmlspecialchars($company);
$name=htmlspecialchars($name);
$tel=htmlspecialchars($tel);
$mail=htmlspecialchars($mail);
$body=htmlspecialchars($body);


?>


    <div class="fromcheck-wrap">
        <div class="formcheck">
            <h1>お問い合わせ内容のご確認をお願い致します。</h1>
            <br/>
            <br/>
        <h3>会社名 </h3> 
        <?php if($company==''){
            echo "<FONT COLOR=\"RED\">入力されていません。</FONT>";
            }?>
        <p><?php echo $company; ?><p>
       
        <h3>氏名</h3>
        <?php if($name==''){
            echo "<FONT COLOR=\"RED\">入力されていません。</FONT>";
            }?>
        <p><?php echo $name;?></p>

        <h3>電話番号</h3>
        <?php if($tel==''){
            echo "<FONT COLOR=\"RED\">入力されていません。</FONT>";
            }?>
        <p><?php echo $tel;?></p>

        <h3>メールアドレス</h3>
        <?php if($mail==''){
            echo "<FONT COLOR=\"RED\">入力されていません。</FONT>";
            }?>
        <p><?php echo $mail;?></p>

        <h3>お問い合わせ内容</h3>
        <?php if($body==''){
            echo "<FONT COLOR=\"RED\">入力されていません。</FONT>";
            }?>
        <p><?php echo $body;?></p>

        
        
        
    <?php

    if($company=='' || $name=='' || $tel=='' || $mail=='' || $body=='')
    {

echo '<div class="checkbtn">';
echo '<form>';
echo '<input type="button" onclick="history.back()" value="戻る">';
echo '</form>';
echo '</div>';
    }
else{
    echo '<div class="checkbtn">';
    echo '<form method="post" action="thanks.php">';
    echo '<input name="company" type="hidden" value="'.$company.'">';
    echo '<input name="tel" type="hidden" value="'.$tel.'">';
    echo '<input name="mail" type="hidden" value="'.$mail.'">';
    echo '<input name="name" type="hidden" value="'.$name.'">';
    echo '<input name="body" type="hidden" value="'.$body.'">';
echo '<input type="button" onclick="history.back()" value="戻る">';
  echo '<input type="submit" value="送信">';
echo '</form>';
echo '</div>';


}   
 ?>   

</div>
    </div>
</body>
</html>
