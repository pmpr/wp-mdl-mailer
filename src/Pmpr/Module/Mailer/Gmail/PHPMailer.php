<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4b0c82b32             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\Exception; use PHPMailer\PHPMailer\PHPMailer as BaseClass; class PHPMailer extends BaseClass { public function smtpConnect($qiouiwasaauyaaue = null) { if (empty($this->oauth)) { $eeaukqkuswaqwayu = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee, []); $this->oauth = OAuth::symcgieuakksimmu($eeaukqkuswaqwayu[Setting::siumwmyaoyeyggeo] ?? ''); $this->oauth->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\x61\x69\154\145\x72\x3a\40\117\x41\x75\x74\150\x20\111\x6e\151\x74\x69\x61\154\151\x7a\x65\x64", $eeaukqkuswaqwayu); } return parent::smtpConnect($qiouiwasaauyaaue); } }
