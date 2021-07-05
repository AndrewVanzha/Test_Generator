<?/*?>
<script type="text/javascript" id="amo_pixel_identifier_js" async="async"
    src="https://piper.amocrm.ru/pixel/js/identifier/pixel_identifier.js">

} ;
</script>
<?*/?>

<script>
window.addEventListener('DOMContentLoaded', function () {
    document.querySelector('.main-block__button').addEventListener('click', (event) => {
        document.querySelector('.popup-form').classList.add('popup-form--show');
    });
    document.querySelector('.popup__block_close').addEventListener('click', (event) => {
        document.querySelector('.popup-form').classList.remove('popup-form--show');
    });

    let fform = document.querySelector('.popup__block_form form');
	fform.onsubmit = async (event) => {
        event.preventDefault();
        let readData = new FormData(fform);

        let response = await fetch('/make_messages.php', {
            method: 'POST',
            body: readData
            //body: JSON.stringify(readData)
        });

        let result = await response.json();
        //console.log('result');
        console.log(result);
		fform.reset();
	};

});// 
</script>

		</main>
		<footer class="footer-container">
		</footer>
	</body>
</html>