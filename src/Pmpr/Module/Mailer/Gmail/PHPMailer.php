<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6630b546006c4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\Exception; use PHPMailer\PHPMailer\PHPMailer as BaseClass; class PHPMailer extends BaseClass { public function smtpConnect($qiouiwasaauyaaue = null) { if (!empty($this->oauth)) { goto wcesymwqykqoyuqk; } $eeaukqkuswaqwayu = Setting::symcgieuakksimmu()->eiwcuqigayigimak()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee, []); $this->oauth = OAuth::symcgieuakksimmu($eeaukqkuswaqwayu[Setting::siumwmyaoyeyggeo] ?? ''); $this->oauth->oaumimwssciwumys("\x4d\141\151\x6c\145\x72\72\x20\x4f\x41\165\164\150\x20\x49\x6e\x69\164\151\141\154\x69\x7a\145\x64", $eeaukqkuswaqwayu); wcesymwqykqoyuqk: return parent::smtpConnect($qiouiwasaauyaaue); } }
