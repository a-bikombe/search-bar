let searchBar = document.getElementById('searchbar');
let searchOutput = document.getElementById('searchOutput');

searchBar.addEventListener('input', function (evt) {
	searchOutput.textContent = searchBar.value;
});

// test for vscode.dev
// test for vscode.dev on iPhone
// test for VSCode Desktop using Remote Repositories