<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670ef040a885c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\PHPMailer; use Pmpr\Module\Mailer\Engine; use Pmpr\Module\Mailer\Gmail\PHPMailer as CustomPHPMailer; class Gmail extends Engine { public function yaosckuqsmaeqgka() { $immqesyuiaiyauio = $GLOBALS["\160\150\x70\x6d\x61\151\154\x65\162"] ?? null; if (!$immqesyuiaiyauio instanceof PHPMailer) { require_once ABSPATH . WPINC . "\57\120\x48\120\x4d\141\x69\154\x65\x72\57\120\110\120\x4d\141\x69\x6c\x65\162\x2e\160\150\160"; require_once ABSPATH . WPINC . "\x2f\120\x48\120\x4d\141\151\x6c\x65\162\57\123\115\x54\x50\x2e\x70\150\160"; require_once ABSPATH . WPINC . "\57\x50\x48\120\115\141\151\154\145\x72\57\x45\x78\x63\145\x70\164\x69\157\x6e\x2e\x70\x68\160"; $immqesyuiaiyauio = new CustomPHPMailer(true); $immqesyuiaiyauio::$validator = function ($owaiikyuwwwmswgc) { return (bool) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc); }; $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\141\151\x6c\x65\162\72\x20\103\165\163\164\x6f\155\40\120\110\x50\115\141\151\x6c\145\162\x20\111\156\x69\164\x69\141\x6c\x69\172\145\144\56"); $GLOBALS["\160\150\160\x6d\x61\151\154\x65\162"] = $immqesyuiaiyauio; } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\x61\151\x6c\x65\x72\72\x20\x50\x48\x50\115\141\151\154\145\162\x20\101\154\162\145\141\x64\171\40\x49\156\x69\x74\151\141\154\x69\x7a\x65\144\x2e", ["\x63\x6f\x72\x72\145\x63\164" => $immqesyuiaiyauio instanceof CustomPHPMailer ? "\171\x65\x73" : "\156\x6f"]); } } public function ossgymsyuaouywqg(PHPMailer $ockoeumsksqeoiyo) : PHPMailer { $ockoeumsksqeoiyo->Host = "\163\x6d\164\160\x2e\x67\155\141\x69\x6c\x2e\x63\x6f\155"; $ockoeumsksqeoiyo->SMTPAuth = true; $ockoeumsksqeoiyo->AuthType = "\x58\117\101\125\124\110\62"; return parent::ossgymsyuaouywqg($ockoeumsksqeoiyo); } }
