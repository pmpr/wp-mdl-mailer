<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6392129b1d78b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Exception; use PHPMailer\PHPMailer\PHPMailer; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use WP_Error; class Mailer extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4d\141\151\x6c\x65\x72", PR__MDL__MAILER); }, self::wuowaiyouwecckaw => false]); if (!$this->gmiyqqaekqcsoime()) { goto cuykwgmswkskqkyi; } parent::__construct(); $this->iemaakgqgqosiecm(); cuykwgmswkskqkyi: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\151\x6e\x5f\x69\156\x69\x74", [$this, "\x79\x65\171\151\147\x75\171\x65\x67\x6d\155\x79\165\x73\145\141"])->qcsmikeggeemccuu("\x70\x68\x70\x6d\141\x69\x6c\145\x72\x5f\x69\156\151\x74", [$this, "\145\x75\147\x77\163\153\x77\x63\161\x75\x75\171\171\x61\x79\151"])->qcsmikeggeemccuu("\167\x70\x5f\x6d\x61\x69\x6c\x5f\146\x61\151\154\x65\144", [$this, "\153\161\x73\157\x67\x71\x61\x61\x61\x69\161\x67\151\x63\x75\x6d"]); } public function iemaakgqgqosiecm() { if (!DecoratorQuery::goecwaaykqoaaagg()) { goto kuicqywysciceggs; } Ajax::symcgieuakksimmu(); Asset::symcgieuakksimmu(); kuicqywysciceggs: } public function yeyiguyegmmyusea() { if ($this->omimwscgequgiaue()) { goto mkwskuycuyguqqok; } $iwywmkygwewiamwm = ManipulateHTML::yuawgssgauywkiia(__("\123\x65\x74\x74\151\156\147", PR__MDL__MAILER), $this->kmuweyayaqoeqiyw()->oiucukewkckkwiqc()); $this->yiggueaiwiygoiyi(sprintf(__("\123\x4d\124\120\x20\x4d\x61\x69\154\145\162\x20\143\141\156\x6e\x6f\x74\40\163\x65\156\x64\x20\145\x6d\141\151\x6c\x20\165\x6e\164\151\154\x20\171\157\165\40\x65\x6e\x74\x65\x72\40\x79\x6f\x75\x72\40\143\x72\145\x64\x65\156\164\151\141\x6c\x73\40\x69\156\x20\164\150\145\40\45\x73\56", PR__MDL__MAILER), $iwywmkygwewiamwm), "\x66\x69\x6c\x6c\x2d\x63\x72\145\x64\x65\156\x74\x69\x61\x6c\163", self::imkacwmiuiykyuim); mkwskuycuyguqqok: } public function kqsogqaaaiqgicum($iswcokucwmiosiaq) { if (!$iswcokucwmiosiaq instanceof WP_Error) { goto eqkauqciwewmgeoi; } if (!($iswcokucwmiosiaq->errors && isset($iswcokucwmiosiaq->errors["\167\160\x5f\x6d\141\x69\x6c\137\x66\x61\151\x6c\x65\144"]) && is_array($iswcokucwmiosiaq->errors["\x77\x70\137\x6d\141\151\154\x5f\146\141\x69\x6c\x65\144"]))) { goto sciwggaeogcoesiu; } $this->ciyuwccsawgygkie(implode("\40\x7c\40", $this->wsmkmgikcacikiwe($iswcokucwmiosiaq))); sciwggaeogcoesiu: eqkauqciwewmgeoi: } public function eugwskwcquuyyayi(&$ockoeumsksqeoiyo) { if (!($ockoeumsksqeoiyo instanceof PHPMailer && $this->omimwscgequgiaue())) { goto sqiciiuwmykocycc; } try { $ockoeumsksqeoiyo->isSMTP(); $ockoeumsksqeoiyo->From = $this->weysguygiseoukqw(Setting::acwacoiwicmigmom, $ockoeumsksqeoiyo->From); $ockoeumsksqeoiyo->FromName = $this->weysguygiseoukqw(Setting::aoaqugseeqkemumi, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->addReplyTo($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->SetFrom($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->Host = $this->weysguygiseoukqw(Setting::gwiykwuygaugqcyu, Setting::qqkokmwimomggggu); $ockoeumsksqeoiyo->Port = $this->weysguygiseoukqw(Setting::emawkokeeikckeym, Setting::quwmeqcomsmuymgs); $eckgoogkykaiwqyi = $this->weysguygiseoukqw(Setting::ycwieuigecimyggq, Setting::cacqqcaqygqyouay); if (!("\x6e\x6f\156\145" !== $eckgoogkykaiwqyi)) { goto kwagwqyusyiyoaqs; } $ockoeumsksqeoiyo->SMTPSecure = $eckgoogkykaiwqyi; kwagwqyusyiyoaqs: $ockoeumsksqeoiyo->SMTPAuth = (bool) $this->weysguygiseoukqw(Setting::mwigcmkwgwygwssu); if (!$ockoeumsksqeoiyo->SMTPAuth) { goto kiqogmwcgcamwiig; } $yewiaiaauukwsgku = $this->amcquiasoqygoyuc(); $qqwegysogaocgeww = $this->iuqugigaawguosig(); if (!($yewiaiaauukwsgku && $qqwegysogaocgeww)) { goto yowsmsiyimmimemc; } $ockoeumsksqeoiyo->Username = $yewiaiaauukwsgku; $ockoeumsksqeoiyo->Password = $qqwegysogaocgeww; yowsmsiyimmimemc: kiqogmwcgcamwiig: $ockoeumsksqeoiyo->Timeout = 10; if (!ManipulateSetting::esoowymaimwcuecq()) { goto iomcaiwewsawiamu; } $ockoeumsksqeoiyo->SMTPDebug = 2; iomcaiwewsawiamu: $ockoeumsksqeoiyo->SMTPAutoTLS = false; } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } sqiciiuwmykocycc: } }
