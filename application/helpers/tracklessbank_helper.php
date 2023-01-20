<?php
function apitrackless($url, $postData = NULL)
{
    $token = "MgX7HTkke3KK70uVEwEc304ijKVcyoaaA4mjoFMT6Au3zXgoQM";

    $ch     = curl_init($url);
    $headers    = array(
        'Authorization: Bearer ' . $token,
        'Content-Type: application/json'
    );

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    $result = json_decode(curl_exec($ch));
    curl_close($ch);
    return $result;
}

function balance($userid, $currency)
{
    $balance = apitrackless(
        URLAPI . "/v1/member/wallet/getBalance?currency=" . $currency . "&userid=" . $userid
    )->message->balance;
    return $balance;
}

function balanceadmin($currency)
{
    $balance = apitrackless(
        URLAPI . "/v1/admin/wallet/balance_ByCurrency?currency=" . $currency
    )->message->balance;
    return $balance;
}

function rounddown($balance){
    return floor($balance*100)/100;
}

function max_sendtowallet($balance,$currency){
    $mfee = apitrackless(URLAPI . "/v1/admin/fee/getFee?currency=" . $currency);
    $mcost = apitrackless(URLAPI . "/v1/admin/cost/getCost?currency=" . $currency);
    
    $feefxd = $mfee->message->wallet_sender_fxd;
    $feepct = $mfee->message->wallet_sender_pct;
    $refpct = $mfee->message->referral_send_pct;
    $reffxd = $mfee->message->referral_send_fxd;
    $costfxd = $mcost->message->wallet_sender_fxd;
    $costpct = $mcost->message->wallet_sender_pct;

    $fee  = ($balance*$feepct)+$feefxd;
    $ref  = ($balance*$refpct)+$reffxd;
    $cost = ($balance*$costpct)+$costfxd;
    $return = $balance - $fee-$ref-$cost;

    if ($return <= 0) {
        $return = 0;
    }

    return substr(number_format($return,4),0,-2);
    // return $return;
}

function send_email($email, $message, $phpmailer)
{
    // $mail = $this->phpmailer_lib->load();
    $mail = $phpmailer;

    $mail->isSMTP();
    $mail->Host         = 'mail.tracklessbank.com';
    $mail->SMTPAuth     = true;
    $mail->Username     = 'no-reply@freedybank.com';
    $mail->Password     = '_v2!~h;x4o$G';
    $mail->SMTPAutoTLS  = false;
    $mail->SMTPSecure   = false;
    $mail->Port         = 587;

    $mail->setFrom('no-reply@freedybank.com', 'Freedy Bank Notification');
    $mail->addReplyTo($email);
    $mail->isHTML(true);

    $mail->ClearAllRecipients();

    $mail->Subject = 'Ask about Freedy';
    $mail->AddAddress('eeinformationservice@gmail.com');

    $mail->msgHTML($message);
    $mail->send();
}


function sendmail($email, $subject, $message, $phpmailer)
{
    $mail = $phpmailer;

    $mail->isSMTP();
    $mail->Host         = 'mail.freedybank.com';
    $mail->SMTPAuth     = true;
    $mail->Username     = 'no-reply@freedybank.com';
    $mail->Password     = 'GIvn[f58&YMb';
    $mail->SMTPAutoTLS	= false;
    $mail->SMTPSecure	= false;
    $mail->Port			= 587;

    $mail->setFrom('no-reply@freedybank.com', 'FreedyBank');
    $mail->isHTML(true);

    $mail->ClearAllRecipients();

    $mail->Subject = $subject;
    $mail->AddAddress($email);

    $mail->msgHTML($message);
    $mail->send();
}

function send_email_admin($email, $subject, $message, $phpmailer)
{
    $mail = $phpmailer;

    $mail->isSMTP();
    $mail->Host         = 'mail.tracklessbank.com';
    $mail->SMTPAuth     = true;
    $mail->Username     = 'eeinformationservice@gmail.com';
    $mail->Password     = 'NaBbrvu[*Tn^';
    $mail->SMTPAutoTLS    = false;
    $mail->SMTPSecure    = false;
    $mail->Port            = 587;

    $mail->setFrom('eeinformationservice@gmail.com', 'FreedyBank');
    $mail->isHTML(true);

    $mail->ClearAllRecipients();

    $mail->Subject = $subject;
    foreach ($email as $dt) {
        $mail->AddAddress($dt);
    }

    $mail->msgHTML($message);
    $mail->send();
}