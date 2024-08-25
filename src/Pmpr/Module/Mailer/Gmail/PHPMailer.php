<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb56da8616d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\Exception; use PHPMailer\PHPMailer\PHPMailer as BaseClass; class PHPMailer extends BaseClass { public function smtpConnect($qiouiwasaauyaaue = null) { if (!empty($this->oauth)) { goto mqccmesakuemceqi; } $eeaukqkuswaqwayu = Setting::symcgieuakksimmu()->eiwcuqigayigimak()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee, []); $this->oauth = OAuth::symcgieuakksimmu($eeaukqkuswaqwayu[Setting::siumwmyaoyeyggeo] ?? ''); $this->oauth->oaumimwssciwumys("\115\x61\151\154\x65\x72\x3a\x20\117\x41\165\164\x68\x20\111\156\x69\x74\x69\x61\x6c\151\172\x65\144", $eeaukqkuswaqwayu); mqccmesakuemceqi: return parent::smtpConnect($qiouiwasaauyaaue); } }
