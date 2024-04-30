<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6630aefab3cca             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\Exception; use PHPMailer\PHPMailer\PHPMailer as BaseClass; class PHPMailer extends BaseClass { public function smtpConnect($qiouiwasaauyaaue = null) { if (!empty($this->oauth)) { goto goacqqsgaaigyuaw; } $eeaukqkuswaqwayu = Setting::symcgieuakksimmu()->eiwcuqigayigimak()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee, []); $this->oauth = OAuth::symcgieuakksimmu($eeaukqkuswaqwayu[Setting::siumwmyaoyeyggeo] ?? ''); $this->oauth->oaumimwssciwumys("\115\141\x69\154\145\x72\x3a\40\x4f\x41\165\x74\x68\x20\x49\x6e\x69\x74\151\x61\154\151\x7a\145\144", $eeaukqkuswaqwayu); goacqqsgaaigyuaw: return parent::smtpConnect($qiouiwasaauyaaue); } }
