<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d82e6c7deb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Exception; use PHPMailer\PHPMailer\PHPMailer; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use WP_Error; class Mailer extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); if (!$this->gmiyqqaekqcsoime()) { goto cuykwgmswkskqkyi; } parent::__construct(); $this->iemaakgqgqosiecm(); cuykwgmswkskqkyi: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\151\156\137\x69\156\x69\x74", [$this, "\x79\x65\171\151\x67\x75\171\x65\x67\x6d\x6d\x79\165\x73\x65\x61"])->qcsmikeggeemccuu("\160\150\x70\155\x61\151\x6c\145\x72\x5f\x69\156\x69\164", [$this, "\x65\x75\147\167\163\153\167\x63\161\165\165\x79\x79\x61\171\151"])->qcsmikeggeemccuu("\167\x70\137\155\x61\151\154\137\146\x61\x69\154\x65\x64", [$this, "\153\x71\x73\x6f\x67\x71\x61\x61\141\151\161\x67\x69\143\x75\x6d"]); } public function iemaakgqgqosiecm() { if (!DecoratorQuery::goecwaaykqoaaagg()) { goto kuicqywysciceggs; } Ajax::symcgieuakksimmu(); Asset::symcgieuakksimmu(); kuicqywysciceggs: } public function yeyiguyegmmyusea() { if ($this->omimwscgequgiaue()) { goto mkwskuycuyguqqok; } $iwywmkygwewiamwm = ManipulateHTML::yuawgssgauywkiia(__("\123\x65\x74\x74\151\156\147", PR__MDL__MAILER), $this->kmuweyayaqoeqiyw()->oiucukewkckkwiqc()); $this->yiggueaiwiygoiyi(sprintf(__("\x53\x4d\x54\120\x20\x4d\x61\x69\154\x65\x72\x20\x63\x61\x6e\x6e\x6f\x74\x20\163\x65\x6e\144\40\x65\x6d\141\x69\154\40\x75\x6e\164\x69\x6c\x20\171\157\x75\40\x65\x6e\x74\x65\162\x20\171\157\x75\162\40\x63\162\145\x64\x65\x6e\x74\x69\141\x6c\x73\x20\x69\x6e\40\x74\x68\145\x20\45\x73\x2e", PR__MDL__MAILER), $iwywmkygwewiamwm), "\x66\x69\154\154\55\x63\x72\145\144\145\x6e\164\151\141\154\x73", self::imkacwmiuiykyuim); mkwskuycuyguqqok: } public function kqsogqaaaiqgicum($iswcokucwmiosiaq) { if (!$iswcokucwmiosiaq instanceof WP_Error) { goto eqkauqciwewmgeoi; } if (!($iswcokucwmiosiaq->errors && isset($iswcokucwmiosiaq->errors["\167\x70\x5f\155\141\151\154\x5f\x66\x61\x69\154\x65\x64"]) && is_array($iswcokucwmiosiaq->errors["\x77\160\137\x6d\141\151\x6c\137\x66\141\x69\154\145\144"]))) { goto sciwggaeogcoesiu; } $this->ciyuwccsawgygkie(implode("\x20\x7c\40", $this->wsmkmgikcacikiwe($iswcokucwmiosiaq))); sciwggaeogcoesiu: eqkauqciwewmgeoi: } public function eugwskwcquuyyayi(&$ockoeumsksqeoiyo) { if (!($ockoeumsksqeoiyo instanceof PHPMailer && $this->omimwscgequgiaue())) { goto sqiciiuwmykocycc; } try { $ockoeumsksqeoiyo->isSMTP(); $ockoeumsksqeoiyo->From = $this->weysguygiseoukqw(Setting::acwacoiwicmigmom, $ockoeumsksqeoiyo->From); $ockoeumsksqeoiyo->FromName = $this->weysguygiseoukqw(Setting::aoaqugseeqkemumi, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->addReplyTo($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->SetFrom($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->Host = $this->weysguygiseoukqw(Setting::gwiykwuygaugqcyu, Setting::qqkokmwimomggggu); $ockoeumsksqeoiyo->Port = $this->weysguygiseoukqw(Setting::emawkokeeikckeym, Setting::quwmeqcomsmuymgs); $eckgoogkykaiwqyi = $this->weysguygiseoukqw(Setting::ycwieuigecimyggq, Setting::cacqqcaqygqyouay); if (!("\x6e\157\x6e\145" !== $eckgoogkykaiwqyi)) { goto kwagwqyusyiyoaqs; } $ockoeumsksqeoiyo->SMTPSecure = $eckgoogkykaiwqyi; kwagwqyusyiyoaqs: $ockoeumsksqeoiyo->SMTPAuth = (bool) $this->weysguygiseoukqw(Setting::mwigcmkwgwygwssu); if (!$ockoeumsksqeoiyo->SMTPAuth) { goto kiqogmwcgcamwiig; } $yewiaiaauukwsgku = $this->amcquiasoqygoyuc(); $qqwegysogaocgeww = $this->iuqugigaawguosig(); if (!($yewiaiaauukwsgku && $qqwegysogaocgeww)) { goto yowsmsiyimmimemc; } $ockoeumsksqeoiyo->Username = $yewiaiaauukwsgku; $ockoeumsksqeoiyo->Password = $qqwegysogaocgeww; yowsmsiyimmimemc: kiqogmwcgcamwiig: $ockoeumsksqeoiyo->Timeout = 10; if (!ManipulateSetting::esoowymaimwcuecq()) { goto iomcaiwewsawiamu; } $ockoeumsksqeoiyo->SMTPDebug = 2; iomcaiwewsawiamu: $ockoeumsksqeoiyo->SMTPAutoTLS = false; } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } sqiciiuwmykocycc: } }