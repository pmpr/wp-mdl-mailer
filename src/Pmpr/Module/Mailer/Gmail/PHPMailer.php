<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb5f112f4dd             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\Exception; use PHPMailer\PHPMailer\PHPMailer as BaseClass; class PHPMailer extends BaseClass { public function smtpConnect($qiouiwasaauyaaue = null) { if (!empty($this->oauth)) { goto mqccmesakuemceqi; } $eeaukqkuswaqwayu = Setting::symcgieuakksimmu()->eiwcuqigayigimak()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee, []); $this->oauth = OAuth::symcgieuakksimmu($eeaukqkuswaqwayu[Setting::siumwmyaoyeyggeo] ?? ''); $this->oauth->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\141\x69\154\145\x72\x3a\40\x4f\x41\165\164\150\40\x49\156\x69\x74\x69\x61\154\x69\172\x65\144", $eeaukqkuswaqwayu); mqccmesakuemceqi: return parent::smtpConnect($qiouiwasaauyaaue); } }
