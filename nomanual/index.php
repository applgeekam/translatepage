<!doctype html>
<html>
	<head>
		<title>Translator</title>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>	
		<style type="text/css">
		.goog-te-banner-frame.skiptranslate{display:none!important;}
		body{top:0px!important;}
		</style>
	</head>
	<body>

		<script type="text/javascript">
			let lang = localStorage.getItem('lang');
			if(lang == null){
				$.cookie('googtrans', '/en/fr');
			}
			else{
				$.cookie('googtrans', lang);
			}
		</script>
		<div id="google_translate_element" style="display: none;"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

Even though using "lorem ipsum" often arouses curiosity due to its resemblance to classical Latin, it is not intended to have meaning. Where text is visible in a document, people tend to focus on the textual content rather than upon overall presentation, so publishers use lorem ipsum when displaying a typeface or design in order to direct the focus to presentation. "Lorem ipsum" also approximates a typical distribution of spaces in English.

The most common lorem ipsum text reads as follows: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

	<form>
	<select name="lang" id='lg'>
		<option selected value="none">Choisissez une langue</option>
		<option value="fr">Francais</option>
		<option value="en">Anglais</option>
		<option value="it">Italien</option>
		<option value="es">Spanish</option>
		<option value="ja">Japonais</option>
		<option value="ar">Arabe</option>
		<option value="la">Latin</option>
		<option value="yo">Yoruba</option>
	</select>
</form>
	<script type="text/javascript">
	            let lg = document.querySelector('#lg')
            	lg.addEventListener('change', () => {
                let val  = lg.value
                if(val !== "none")
                {
                	let goto = '/en/' + val
	                localStorage.setItem('lang', goto);
	                location.reload()
                }
            })     
</script>

	</body>
</html>