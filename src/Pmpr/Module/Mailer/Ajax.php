<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d82e6c7deb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; class Ajax extends Container { const ykiigwasoeagkiuq = "\x6d\141\x69\154\x65\162\x5f\163\145\x6e\x64\137\164\x65\x73\x74\137\x65\155\141\151\x6c\137\141\x63\x74\151\157\x6e"; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ykiigwasoeagkiuq, [$this, "\141\165\161\161\x77\153\171\x65\x79\x67\x65\x65\x73\x71\x6f\141"]); } public function auqqwkyeygeesqoa() { $kigowwqauiumummw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto csscmcacoikwsecs; } $acuayeeoiwokyomo = ManipulateServer::ayueggmoqeeukqmq(Setting::gqyoceciecuaiwqa, '', true); if (ManipulateValidation::qkgmsqgmwoamekyk($acuayeeoiwokyomo)) { goto myoicgcuugciueis; } $uamcoiueqaamsqma = sprintf(__("\x25\x73\40\151\163\40\x6e\157\164\40\141\x20\166\141\x6c\x69\144\40\145\155\141\151\x6c\x20\141\x64\144\x72\x65\163\x73", PR__MDL__MAILER), ManipulateHTML::ciuuiyckmsygceis($acuayeeoiwokyomo)); goto asmecuqiyyswueqe; myoicgcuugciueis: $kuukgsmqkagwaciu = ManipulateServer::ayueggmoqeeukqmq(Setting::simyeuciiqmwocuu, '', true); $iosuwkkwwioumeqg = ManipulateServer::ayueggmoqeeukqmq(Setting::wucqagwssusieeaa, '', true); if ($acuayeeoiwokyomo && $iosuwkkwwioumeqg && $kuukgsmqkagwaciu) { goto qgoiooayqmqqsiok; } $uamcoiueqaamsqma = __("\122\x65\x71\165\151\162\x65\x20\x70\141\x72\141\155\145\x74\145\x72\40\151\x73\40\155\x69\163\x73\151\x6e\147", PR__MDL__MAILER); goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: try { ob_start(); if (wp_mail($acuayeeoiwokyomo, $iosuwkkwwioumeqg, $kuukgsmqkagwaciu)) { goto cecuyayqoioasumi; } $uamcoiueqaamsqma = __("\x53\x6f\x6d\145\164\150\x69\156\x67\40\x77\162\x6f\x6e\x67\x20\x6f\x6e\40\x73\x65\x6e\144\151\156\147\x20\x6d\x61\151\154\54\x20\x63\x68\145\143\x6b\x20\x6c\x6f\x67\x20\146\x69\154\x65\x73\56", PR__MDL__MAILER); goto qiaqsassksqiuyae; cecuyayqoioasumi: $kigowwqauiumummw = true; $uamcoiueqaamsqma = sprintf(__("\x54\145\x73\164\40\x6d\145\x73\163\141\x67\145\40\163\145\156\164\x20\163\165\143\x63\x65\163\x73\146\165\154\x6c\171\x20\164\157\40\x25\x73", PR__MDL__MAILER), ManipulateHTML::ciuuiyckmsygceis($acuayeeoiwokyomo)); qiaqsassksqiuyae: $iswcokucwmiosiaq = ob_get_clean(); if (!(!$kigowwqauiumummw && $iswcokucwmiosiaq)) { goto qogqewiwmwiwskgm; } $uamcoiueqaamsqma = sprintf("\x25\163\74\x62\162\57\76\x25\163", $uamcoiueqaamsqma, $iswcokucwmiosiaq); qogqewiwmwiwskgm: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } qwigomakwmyiwkgo: asmecuqiyyswueqe: csscmcacoikwsecs: $this->uaggqsoeugksgooc($kigowwqauiumummw, $uamcoiueqaamsqma); } }