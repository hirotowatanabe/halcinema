<?php

$LoginFlag = "";

    if(isset($_POST["ShowId"])){
        $ShowId = $_POST["ShowId"];
    }
/*
    if(isset($_POST["selected"])){
        $seats = $_POST["selected"];
    }
*/
/*
    foreach($seats as $value){
        print $value;
    }
*/
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>お支払い情報の入力 | HALシネマ</title>
        <link rel="stylesheet" href="../css/reset.css" type="text/css" />
        <link rel="stylesheet" href="../css/common.css" type="text/css" />
        <link rel="stylesheet" href="css/pan.css" type="text/css" />
        <link rel="stylesheet" href="css/pay_info.css" type="text/css" />
</head>

<body>
    <div id="wrapper">
      <div id="contents">
            <p id="pan"><span class="pan_padding">座席・チケット選択</span><span>&gt;</span><span class="pan_padding">ご購入者情報の入力</span><span>&gt;</span><span id="now" class="pan_padding">お支払情報の入力</span><span>&gt;</span><span class="pan_padding">購入内容の確認</span><span>&gt;</span><span class="pan_padding">購入完了</span></p>
            <div id="left">
                <?php if($LoginFlag == "Success"){ ?>
                <p id="LoginMessage"><?php print $Row["mem_fk"]; print $Row["mem_gk"]; ?>さんでログインしました。</p>
                <?php } ?>
                <h1>お支払いに必要な情報を入力してください。</h1>
                <div>
                    <h3>クレジットカード払い</h3>
                    <p><label for="credit1"><input id="credit1" type="radio" name="pay">VISA:1234（下四桁）</label></p>
                    <h3>コンビニ払い</h3>
                    <p><label for="credit2"><input id="credit2" type="radio" name="pay">コンビニ払いを使用</label></p>
                </div>
                <div id="credit">
                    <h2>クレジットカード（※必須項目）</h2>
                    <form method="post" action="chk.php">
                        <h3>カード会社</h3>
                        <select class="txt_box" name="Cbrand">
                            <option name="#">選択してください。</option>
                            <option name="1">JCB</option>
                            <option name="2">VISA</option>
                            <option name="3">Master Card</option>
                            <option name="4">American Express</option>
                        </select>
                        <h3>カード番号</h3>
                        <input class="txt_box" type="text" name="Cnum" value="">
                        <h3>有効期限</h3>
                        <input class="txt_box" type="date" name="Cdeadline" value="">
                        <h3>名義人</h3>
                        <input class="txt_box" type="text" name="Cname" value="">
                        <h3>お支払方法</h3>
                        <select class="txt_box" name="Chow">
                            <option name="#">選択してください。</option>
                            <option name="1">一括払い</option>
                            <option name="2">分割払い</option>
                            <option name="3">リボ払い</option>
                            <option name="4">ボーナス払い</option>
                        </select>
                </div>
                <div id="next_area">
                    <input type="hidden" name="ShowId" value="<?php print $ShowId; ?>">
                    <input type="hidden" name="seats" value="<?php print $seats; ?>">
                    <input id="next" type="submit" name="next" value="次へ">
                </form>
                </div>
                <div id="back_area">
                    <form action="user_info.php">
                        <input id="back" type="submit" name="back" value="戻る">
                    </form>
                </div>
                <div id="all_back_area">
                    <form action="sinema_schedule.php">
                        <input id="all_back" type="submit" name="all_back" value="購入を取り消して時間指定画面へ戻る">
                    </form>
                </div>
            </div>
            <div id="right">
                <div id="purchase_contents">
                    <h2>ご購入内容</h2>
                    <dl>
                        <dt>作品</dt>
                        <dd>〇〇〇〇</dd>
                        <dt>日時</dt>
                        <dd>XXXX年XX月XX日(X)<br>XX:XX~XX:XX</dd>
                        <dt>座席・券種</dt>
                        <dd>スクリーン名<br>XX 〇〇／XXXX円<br>XX 〇〇／XXXX円<br>XX 〇〇／XXXX円</dd>
                        <dt>劇場</dt>
                        <dd>〇〇〇〇</dd>
                        <dt>合計</dt>
                        <dd>XXXX円</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
