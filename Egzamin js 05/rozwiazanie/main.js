function braki() {
    let komory = document.getElementsByClassName("ilosc");
    
    for (let i = 0; i < komory.length; i++) {
      let komora = komory[i];
      let wartosc = parseFloat(komora.innerText);
      
      if (wartosc === 0) {
        komora.style.backgroundColor = "red";
      } else if (wartosc >= 1 && wartosc <= 5) {
        komora.style.backgroundColor = "yellow";
      } else {
        komora.style.backgroundColor = "honeydew";
      }
    }
  }


  function aktualizacja(event){
    let buttom1 = document.getElementsByClassName("aktualizuj")
    let komory = document.getElementsByClassName("ilosc");
    let nowaIlosc = prompt("Podaj nową ilość:", komora.innerText);

    
}

function zamawiaj(){
    let buttom1 = document.getElementsByClassName("zamow")
}

braki()