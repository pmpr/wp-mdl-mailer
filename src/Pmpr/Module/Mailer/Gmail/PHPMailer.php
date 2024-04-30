<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6630b75d6b5ce             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\Exception; use PHPMailer\PHPMailer\PHPMailer as BaseClass; class PHPMailer extends BaseClass { public function smtpConnect($qiouiwasaauyaaue = null) { if (!empty($this->oauth)) { goto wcesymwqykqoyuqk; } $eeaukqkuswaqwayu = Setting::symcgieuakksimmu()->eiwcuqigayigimak()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee, []); $this->oauth = OAuth::symcgieuakksimmu($eeaukqkuswaqwayu[Setting::siumwmyaoyeyggeo] ?? ''); $this->oauth->oaumimwssciwumys("\115\141\x69\154\x65\162\x3a\40\117\101\165\164\x68\x20\111\x6e\151\164\151\141\154\151\172\x65\144", $eeaukqkuswaqwayu); wcesymwqykqoyuqk: return parent::smtpConnect($qiouiwasaauyaaue); } }
