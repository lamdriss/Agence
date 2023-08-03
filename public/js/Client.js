let  select = document.querySelectorAll('#selectClient')


let prixp =document.querySelector('#montantpayer')
let prixt =document.querySelector('#montanttotal')
let rest =document.querySelector('#rest')


let inputs =document.querySelectorAll('.ip')

let totalMontant = 0

 inputs.forEach(item=>item.onchange=function(e){
    let totalv = document.querySelector('[data-item="v"]');
    let totalb = document.querySelector('[data-item="b"]');
    let totalh = document.querySelector('[data-item="h"]');

    let v = totalv.querySelector('#prixvente').value*totalv.querySelector('#qte').value
    let b = totalb.querySelector('#prixvente').value*totalb.querySelector('#qte').value
    let h = totalh.querySelector('#prixvente').value*totalh.querySelector('#qte').value

    console.log(v,b,h)

    totalb.querySelector('#total').value=b
    totalh.querySelector('#total').value=h
    totalv.querySelector('#total').value=v

    totalMontant=v+b+h
    prixt.value=totalMontant
    rest.value=prixt.value-prixp.value
})





select.forEach(selectItem => selectItem.onchange=function(e){
   let id = e.target.value
   let client =listClient.find(e=>e.id==id)
   console.log(id,client)
   let cin = selectItem.parentElement.nextElementSibling
   let passwport = cin.nextElementSibling
   let dateExpiration = passwport.nextElementSibling
   cin.querySelector('input').value=client.cin
   passwport.querySelector('input').value=client.passport
   dateExpiration.querySelector('input').value=client.dateExpiration
})
//
