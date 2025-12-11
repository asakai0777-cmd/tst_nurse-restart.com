<?php
// 文字コードの設定
mb_language("Japanese");
mb_internal_encoding("UTF-8");

// フォームから送信されたデータを取得
$name    = isset($_POST["name"]) ? htmlspecialchars($_POST["name"], ENT_QUOTES, "UTF-8") : '';
$email   = isset($_POST["email"]) ? htmlspecialchars($_POST["email"], ENT_QUOTES, "UTF-8") : '';
$message = isset($_POST["message"]) ? htmlspecialchars($_POST["message"], ENT_QUOTES, "UTF-8") : '';

// --- セキュリティ対策 ---
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("無効なメールアドレスです。");
}

// --- 自動返信メール（ユーザー宛） ---
$subject_user = "お問い合わせありがとうございます【株式会社ポエンテ】";

$body_user = <<<EOM
{$name} 様

このたびは、株式会社ポエンテへお問い合わせいただき誠にありがとうございます。
下記の内容でお問い合わせを承りました。

---------------------------------------
【お名前】{$name}
【メールアドレス】{$email}
【お問い合わせ内容】
{$message}
---------------------------------------

内容を確認のうえ、担当者より折り返しご連絡させていただきます。
なお、ご返信までにお時間をいただく場合がございますので、予めご了承ください。

※本メールは自動送信されています。
万が一、2営業日を過ぎても返信がない場合は、お手数ですが再度ご連絡ください。

━━━━━━━━━━━━━━━━━━━━━━━
看護師専門！「無料」退職代行＆転職サポート
株式会社ポエンテ リスタート事業部
〒195-0063 東京都町田市野津田町1399番地2
平日 10:00～17:00
電話 080-4805-0500
Email：toiawase@nurse-restart.com  
Web：http://www.nurse-restart.com
━━━━━━━━━━━━━━━━━━━━━━━
EOM;

// 差出人名をMIMEエンコード（文字化け防止）
$from_name_user = mb_encode_mimeheader("株式会社ポエンテ", "UTF-8");
$header_user = "From: {$from_name_user} <toiawase@nurse-restart.com>";

// ユーザー宛メール送信
mb_send_mail($email, $subject_user, $body_user, $header_user);


// --- 管理者通知メール（社内宛） ---
$admin_email = "toiawase@nurse-restart.com";
$subject_admin = "【お問い合わせフォーム】新規のお問い合わせがあります";

// 受付日時を作成
$datetime = date("Y年m月d日 H:i");

$body_admin = <<<EOM
以下の内容でお問い合わせを受け付けました。

【お名前】{$name}
【メールアドレス】{$email}
【お問い合わせ内容】
{$message}

受付日時：{$datetime}
EOM;

// 管理者宛の差出人もエンコードして安全に
$from_name_admin = mb_encode_mimeheader($name, "UTF-8");
$header_admin = "From: {$from_name_admin} <{$email}>";

// 管理者宛メール送信
mb_send_mail($admin_email, $subject_admin, $body_admin, $header_admin);

// --- サンクスページへリダイレクト ---
header("Location: thanks.html");
exit;
?>
