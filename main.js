let searchBar = document.getElementById('searchbar');
let searchOutput = document.getElementById('searchOutput');

searchBar.addEventListener('input', function (evt) {
	searchOutput.textContent = searchBar.value;
});