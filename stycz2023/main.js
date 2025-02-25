function licz() {
    const pow = parseFloat(document.getElementById('pow').value);
    var wp = 4; 
    let lp = Math.ceil(pow / wp);
    document.getElementById('w').textContent = "Liczba puszek: " + lp;
}

