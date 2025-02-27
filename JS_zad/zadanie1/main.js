let num = 1
function NastepnyCytat(){
    num += 1
    if (num > 3) num = 1
    const cytat1 = document.getElementById("cytat1")
    const cytat2 = document.getElementById("cytat2")
    const cytat3 = document.getElementById("cytat3")
    switch (num) {
        case 1:
            cytat3.style.display = "none"
            cytat1.style.display = "block"
            break
        case 2:
            cytat1.style.display = "none"
            cytat2.style.display = "block"
            break
        case 3:
            cytat2.style.display = "none"
            cytat3.style.display = "block"
            break
    }

}