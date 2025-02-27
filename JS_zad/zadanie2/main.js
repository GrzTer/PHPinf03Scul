function PokazBlok(blok) {
    const blok1 = document.getElementById('blok1')
    const blok2 = document.getElementById('blok2')
    const blok3 = document.getElementById('blok3')
    blok1.style.display = "none"
    blok2.style.display = "none"
    blok3.style.display = "none"
    const wybranyBlok = document.getElementById(blok)
    wybranyBlok.style.display = "block"
}

let szerokosc = 4
function ZmienPasek() {
    const pasek = document.getElementById("pasek")
    szerokosc += 12
    if (szerokosc > 100) {
        szerokosc = 100
    }
    pasek.style.width = szerokosc + "%"
}

function Zatwierdz() {
    const imie = document.getElementById("imie").value
    const rodo = document.getElementById("rodo").checked
    console.log(imie+' '+rodo)
}