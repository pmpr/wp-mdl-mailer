<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66302bd6945eb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Exception; use PHPMailer\PHPMailer\PHPMailer; use Pmpr\Module\Mailer\Setting\Setting; use WP_Error; abstract class Engine extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\x68\160\x6d\141\151\x6c\x65\x72\x5f\151\156\151\164", [$this, "\x65\165\147\167\163\x6b\167\143\x71\x75\x75\x79\171\x61\171\x69"])->qcsmikeggeemccuu("\x77\160\137\x6d\x61\151\154\137\x66\x61\x69\154\145\144", [$this, "\x6b\x71\x73\157\147\x71\141\141\141\151\161\x67\x69\143\165\155"]); } public function eugwskwcquuyyayi(&$ockoeumsksqeoiyo) { if (!$ockoeumsksqeoiyo instanceof PHPMailer) { goto qmeoaqmsuseueqiy; } try { $ockoeumsksqeoiyo->isSMTP(); $ockoeumsksqeoiyo = $this->ossgymsyuaouywqg($ockoeumsksqeoiyo); $ockoeumsksqeoiyo->Port = $this->weysguygiseoukqw(Setting::emawkokeeikckeym, Setting::quwmeqcomsmuymgs); $eckgoogkykaiwqyi = $this->weysguygiseoukqw(Setting::ycwieuigecimyggq, Setting::cacqqcaqygqyouay); if (!(self::NONE !== $eckgoogkykaiwqyi)) { goto eiawsoasmscmqswa; } $ockoeumsksqeoiyo->SMTPSecure = $eckgoogkykaiwqyi; eiawsoasmscmqswa: $ockoeumsksqeoiyo->From = $this->weysguygiseoukqw(Setting::acwacoiwicmigmom, $ockoeumsksqeoiyo->From); $ockoeumsksqeoiyo->FromName = $this->weysguygiseoukqw(Setting::aoaqugseeqkemumi, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->addReplyTo($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->setFrom($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->Timeout = 10; $ockoeumsksqeoiyo->SMTPAutoTLS = false; $ockoeumsksqeoiyo->Debugoutput = self::gsqoooskigukokks; if (!($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && Ajax::ykiigwasoeagkiuq === $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(self::uqgcmmosieyimiku))) { goto ickcmqoiosquugwe; } $ockoeumsksqeoiyo->SMTPDebug = 4; ickcmqoiosquugwe: } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } qmeoaqmsuseueqiy: return $ockoeumsksqeoiyo; } public function ossgymsyuaouywqg(PHPMailer $ockoeumsksqeoiyo) : PHPMailer { return $ockoeumsksqeoiyo; } public function kqsogqaaaiqgicum($iswcokucwmiosiaq) { if (!($iswcokucwmiosiaq instanceof WP_Error && $iswcokucwmiosiaq->errors && isset($iswcokucwmiosiaq->errors["\167\x70\x5f\155\141\x69\154\137\146\x61\151\x6c\145\x64"]) && is_array($iswcokucwmiosiaq->errors["\167\160\137\x6d\141\151\154\137\x66\141\151\x6c\x65\x64"]))) { goto ygkcacsyyckescqs; } $this->ciyuwccsawgygkie(implode("\40\x7c\40", $this->wsmkmgikcacikiwe($iswcokucwmiosiaq))); ygkcacsyyckescqs: } }
