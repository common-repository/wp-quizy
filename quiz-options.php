<?php
// create custom plugin settings menu
add_action('admin_menu', 'quizy_create_menu');

function quizy_create_menu() {

	//create new top-level menu
	add_menu_page('WP-Quizy', 'Quizy', 'administrator', __FILE__, 'quizy_settings_page',plugins_url('/images/icon.png', __FILE__));

}

function quizy_settings_page() {
?>

<div style='float: left;'>
<a href='http://quizz.pl' target='_blank'><img src='<? echo plugins_url('quizz.jpg', __FILE__) ?>' style='padding: 10px;' ></a>
</div>

<div class="wrap" style='float: left;'>
<h2>WP-Quizy</h2>

1. Stwórz quiz za pomocą kreatora dostępnego tutaj:<br>
<a href='http://quizz.pl/addQuizForm2.php' target='_blank'>http://quizz.pl/addQuizForm2.php</a><br>
<br>
2. Gdy stworzysz quiz skopiuj kod znajdujący się punkcie zatytułowanym "WP-Quiz": <br>

<img src='<? echo plugins_url('wpq1.jpg', __FILE__) ?>' style='padding: 40px;'>

<br>I umieść go w dowolnym miejscu w treści wpisu blogowego:<br>

<img src='<? echo plugins_url('wpq2.jpg', __FILE__) ?>' style='padding: 40px;'>

<br>
Kod zostanie zamieniony po publikacji w quiz.<br>
Jeżeli chcesz zobaczyć quiz przed publikacją użyj funkcji podglądu wpisu<br>
<h2>Dłuższe pobyty na blogu czyli Dlaczego warto dodawać quizy?</h2>
1. To nowa forma rozrywki dla Twoich czytelników<br>
2. Możesz tworzyć quizy z zakresu wiedzy o Twoim blogu<br>
3. Możesz podpowiadać produkty, które mogą zainteresować Twoich czytelników<br>
4. Możesz dawać rozrywkę bez zbędnego nakładu pracy<br>
<h2>Najlepsze rozwiązanie czyli Dlaczego WP-Quizy?</h2>
1. Bo są po polsku<br>
2. Dobrze integrują się z Wordpressem<br>
3. Użytkownicy mogą drukować quiz<br>
4. Mogą zapisywać go do PDF<br>
5. Mogą wysyłać na komórkę do znajomych<br>
<h2>Więcej czytelników czyli Viral Marketing</h2>
Użytkownik wraz z wynikiem opublikuje na serwisie społecznościowym link do Twojego bloga.<br>
W ten sposób quizy nie tylko będą dostarczać rozrywki Twoim czytelnikom, ale pomogą Ci zdobyć nowych fanów przez społecznościowy marketing wirusowy<br>
<h2>Wsparcie</h2>
W razie pytań, dodatkowych potrzeb pisz na adres contact (at) polishwords.com.pl

</div>
<div style='clear: both;'></div>

<?php } ?>
