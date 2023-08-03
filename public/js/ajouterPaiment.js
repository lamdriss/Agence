let tbody = document.querySelector('tbody')
let filleds = document.querySelectorAll('#s')
let btnPaiment = document.querySelector('#AddItemPaiment')

let montantpayer = document.querySelector('#montantpayer')
let montanttotal = document.querySelector('#montanttotal')
let restOf = document.querySelector('#rest')

let piece = document.querySelector('.Piece')
let items={}

filleds.forEach(e=>e.onchange=setItem)

console.log(piece)
function setItem(e){
    items[e.target.name]=e.target.value
    console.log(items)
    let {modePaiment}=items
    if(modePaiment){
        if(modePaiment==1 || modePaiment==2){
            console.log('ee')
            piece.style.cssText='display: block ! important';
        }
    }
}
btnPaiment.onclick=()=>{
    tbody.innerHTML+=`
    
    <tr>
    
    <td>${'Genere Automatiquement'}</td>
    <td>${items.montantpaye}</td>
    <td>${items.datepaiment}</td>
    <td>${'Genere Automatiquement'}</td>
    <td>${items.modePaiment}</td>
    <td>${items.pieceN?? ''}</td>
    <td>${items.sitaution}</td>
    <td>${items.dateEchance}</td>

    <tr>
    `
    montantpayer.value=items.montantpaye
    restOf.value=montanttotal.value-montantpayer.value
}