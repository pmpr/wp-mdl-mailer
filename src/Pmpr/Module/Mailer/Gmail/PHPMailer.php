<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6687081132000             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\Exception; use PHPMailer\PHPMailer\PHPMailer as BaseClass; class PHPMailer extends BaseClass { public function smtpConnect($qiouiwasaauyaaue = null) { if (!empty($this->oauth)) { goto usqgaogkqgemuima; } $eeaukqkuswaqwayu = Setting::symcgieuakksimmu()->eiwcuqigayigimak()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee, []); $this->oauth = OAuth::symcgieuakksimmu($eeaukqkuswaqwayu[Setting::siumwmyaoyeyggeo] ?? ''); $this->oauth->oaumimwssciwumys("\x4d\x61\x69\x6c\x65\162\72\40\x4f\101\x75\x74\150\40\111\156\151\164\x69\141\x6c\x69\x7a\x65\x64", $eeaukqkuswaqwayu); usqgaogkqgemuima: return parent::smtpConnect($qiouiwasaauyaaue); } }
