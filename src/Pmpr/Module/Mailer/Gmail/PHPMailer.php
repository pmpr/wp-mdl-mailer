<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc54cdd6e1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\Exception; use PHPMailer\PHPMailer\PHPMailer as BaseClass; class PHPMailer extends BaseClass { public function smtpConnect($qiouiwasaauyaaue = null) { if (empty($this->oauth)) { $eeaukqkuswaqwayu = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee, []); $this->oauth = OAuth::symcgieuakksimmu($eeaukqkuswaqwayu[Setting::siumwmyaoyeyggeo] ?? ''); $this->oauth->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\141\x69\x6c\x65\162\72\40\117\x41\x75\164\150\40\x49\x6e\151\164\151\141\154\x69\x7a\145\x64", $eeaukqkuswaqwayu); } return parent::smtpConnect($qiouiwasaauyaaue); } }
