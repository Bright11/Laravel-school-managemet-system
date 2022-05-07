//copy url
//alert('hi')
//


function gettextcopied() {
    var txt = document.getElementById('inputcopy').value;
    navigator.clipboard.writeText(txt)
    document.getElementById('copybutton').innerHTML = "Copied";
}