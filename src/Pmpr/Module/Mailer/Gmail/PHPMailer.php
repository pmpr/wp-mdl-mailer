<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663045694a993             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\Exception; use PHPMailer\PHPMailer\PHPMailer as BaseClass; class PHPMailer extends BaseClass { public function smtpConnect($qiouiwasaauyaaue = null) { if (!empty($this->oauth)) { goto goacqqsgaaigyuaw; } $eeaukqkuswaqwayu = Setting::symcgieuakksimmu()->eiwcuqigayigimak()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee); $this->oauth = OAuth::symcgieuakksimmu($eeaukqkuswaqwayu[Setting::siumwmyaoyeyggeo] ?? ''); goacqqsgaaigyuaw: return parent::smtpConnect($qiouiwasaauyaaue); } }
