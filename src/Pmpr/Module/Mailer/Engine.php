<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce118fcf0f0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Exception; use PHPMailer\PHPMailer\PHPMailer; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Mailer\Setting\Setting; use WP_Error; abstract class Engine extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x70\150\160\155\141\151\x6c\x65\x72\x5f\x69\156\151\164", [$this, "\145\x75\147\x77\163\x6b\x77\143\161\x75\165\171\x79\141\x79\x69"])->qcsmikeggeemccuu("\x77\x70\137\155\141\151\154\x5f\146\x61\x69\x6c\145\144", [$this, "\153\x71\163\157\x67\161\x61\141\x61\x69\x71\147\151\143\165\155"]); } public function eugwskwcquuyyayi(&$ockoeumsksqeoiyo) { if (!$ockoeumsksqeoiyo instanceof PHPMailer) { goto sciwggaeogcoesiu; } try { $ockoeumsksqeoiyo->isSMTP(); $ockoeumsksqeoiyo = $this->ossgymsyuaouywqg($ockoeumsksqeoiyo); $ockoeumsksqeoiyo->Port = $this->weysguygiseoukqw(Setting::emawkokeeikckeym, Setting::quwmeqcomsmuymgs); $eckgoogkykaiwqyi = $this->weysguygiseoukqw(Setting::ycwieuigecimyggq, Setting::cacqqcaqygqyouay); if (!(Constants::NONE !== $eckgoogkykaiwqyi)) { goto kuicqywysciceggs; } $ockoeumsksqeoiyo->SMTPSecure = $eckgoogkykaiwqyi; kuicqywysciceggs: $ockoeumsksqeoiyo->From = $this->weysguygiseoukqw(Setting::acwacoiwicmigmom, $ockoeumsksqeoiyo->From); $ockoeumsksqeoiyo->FromName = $this->weysguygiseoukqw(Setting::aoaqugseeqkemumi, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->addReplyTo($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->setFrom($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->Timeout = 10; $ockoeumsksqeoiyo->SMTPAutoTLS = false; $ockoeumsksqeoiyo->Debugoutput = Constants::gsqoooskigukokks; if (!($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && Ajax::ykiigwasoeagkiuq === $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku))) { goto mkwskuycuyguqqok; } $ockoeumsksqeoiyo->SMTPDebug = 4; mkwskuycuyguqqok: } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } sciwggaeogcoesiu: return $ockoeumsksqeoiyo; } public function ossgymsyuaouywqg(PHPMailer $ockoeumsksqeoiyo) : PHPMailer { return $ockoeumsksqeoiyo; } public function kqsogqaaaiqgicum($iswcokucwmiosiaq) { if (!($iswcokucwmiosiaq instanceof WP_Error && $iswcokucwmiosiaq->errors && isset($iswcokucwmiosiaq->errors["\167\x70\137\155\x61\x69\154\137\146\141\151\x6c\x65\144"]) && is_array($iswcokucwmiosiaq->errors["\x77\x70\x5f\x6d\x61\151\x6c\x5f\146\141\x69\x6c\145\x64"]))) { goto eqkauqciwewmgeoi; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->eumukgqciqgksuiq(implode("\40\174\x20", $this->caokeucsksukesyo()->euekiyuksecoccus()->ywgmqwueaugywcwi($iswcokucwmiosiaq)), $iswcokucwmiosiaq->get_all_error_data()); eqkauqciwewmgeoi: } }
