
 const form = document.getElementById('form')
 const errElement = document.getElementById('error')
 let pwd = document.getElementById('pwd')
 const name = document.getElementById('firstname')
 const secname = document.getElementById('secondname')
 const dob = document.getElementById('dateID')
 const email = document.getElementById('email')
 const color = document.getElementById('color')
 const dept = document.getElementById('dept')



 form.addEventListener('submit', (e) => {

     function validateEmail(email) {
         const re = /\S+@\S+\.\S+/
         return re.test(email)
     }

    let messages = []

    if (name.value.length == 0 || secname.value.length == 0 || dob.value.length == 0
        || email.value.length == 0 || dept.value.length == 0){
        messages.push('All fields are required')
     }
     if (validateEmail(email.value) === false) {
         messages.push('Invalid Email')
     }
     if (document.getElementById('male').checked == false && document.getElementById('female').checked == false){
         messages.push('Select a gender')
     }
     if (document.getElementById('male').checked == true && document.getElementById('female').checked == true){
         messages.push('Only one gender can be selected')
     }
     if (pwd.value.length <= 15){
         messages.push('Password must be more than 15 characters')
     }
     if (pwd.value.search(/[0-9]/) == -1) {
         messages.push('Password must contain at least one number')
     }
     if (pwd.value.search(/[A-Z]/) == -1) {
         messages.push('Password must contain at least one capital letter')
     }
     if (pwd.value.search(/[a-z]/) == -1) {
         messages.push('Password must contain at least one small letter')
     }
     if (pwd.value.search(/[!|@|#|%|^|&|*|(|)]/) == -1) {
         messages.push('Password must contain at least one of these characters : !@#$%^&*()')
     }
     if (messages.length > 0)
     {

         e.preventDefault()
         pwd.value = ''
         errElement.innerText = messages.join(', ')
     }


 })
