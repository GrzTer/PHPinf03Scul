
function licz() {
    let pow = parseFloat(document.getElementById('pow').value);
    let wp = 3.5; 
    let lp = Math.ceil(pow / wp);
    document.getElementById('w').textContent = "Liczba puszek: " + lp;
}

