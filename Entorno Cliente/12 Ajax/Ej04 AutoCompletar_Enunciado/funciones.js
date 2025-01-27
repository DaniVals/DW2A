document.addEventListener('readystatechange', function() {
if (document.readyState === 'complete') {
		document.getElementById('palabra').addEventListener('keyup', function() {
			const palabra = document.getElementById('palabra').value;
			
			let xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState === 4 && this.status === 200) {
					const palabras = JSON.parse(this.responseText);

					let div = document.getElementById('sugerencias');

					if (!div) {
						div = document.createElement('div');
						div.id = 'sugerencias';
						document.body.appendChild(div);
					}

					div.innerHTML = '';
					palabras.forEach(palabra => {
						div.innerText += palabra + "\n";
					});
					
				}
			};
			xhttp.open('GET', 'pagina.php?palabra=' + palabra, true);
			xhttp.send();
		});
	}
});