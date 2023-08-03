let form = document.querySelectorAll('#formAdd')
let files=document.querySelectorAll('input[type="file"]')

console.log(form)

form.forEach(f=>f.onsubmit=(e)=>submitForm(e,f))
function submitForm(event,f){
    let inputs = Array.from(f.querySelectorAll('input'))
    let selects = Array.from(f.querySelectorAll('select'))
    inputs.forEach(e=>e.style.border='')
    if(inputs.some(e=>e.value=='')){
        event.preventDefault()
        let input = inputs.find(e=>e.value=="");
        return input.style.border='2px solid #d33'
    }
    if(selects.some(e=>e.value=='')){
        event.preventDefault()
        let input = selects.find(e=>e.value=="");
        return input.style.border='2px solid #d33'
    }
}


files.forEach(file=>{
    file.onchange=handelFile
})


function handelFile(e){
    let fileInput = e.target
    let url = URL.createObjectURL(fileInput.files[0])
    let img = fileInput.parentElement.previousElementSibling
    img.src=url

}



//
