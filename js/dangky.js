// var username = document.querySelector('#username')
// var email = document.querySelector('#email')
// var password = document.querySelector('#password')
// var tel = document.querySelector('#tel')
// var form = document.querySelector('form')

// Hiện chữ đỏ lỗi
function showError (input, message) {
    // console.log(input.parentElement);

    let parent = input.parentElement;
    let small = parent.querySelector('small')
    parent.classList.add('error')
    small.innerText = message

}

// function showSuccess (input) {
//     // console.log(input.parentElement);

//     let parent = input.parentElement;
//     let small = parent.querySelector('small')
//     parent.classList.remove('error')
//     small.innerText = ''

// }
// // showError(username, 'Lỗi')




// function checkEmptyError(listInput){   //forEach: kt each
//     let isEmptyError = false;
//     listInput.forEach(input => {
//         input.value = input.value.trim()

//         if (!input.value){
//             isEmptyError = true;
//             showError(input, 'Không được để trống !')
//         }else {
//             showSuccess(input)
//         }
//     });

//     return isEmptyError
// }



// function checkEmailError(input){
//     const regexEmail = 
//     /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

//     input.value = input.value.trim()
//     let isEmailError = !regexEmail.test(input.value)


//     if (regexEmail.test(input.value)){
//         showSuccess(input)
//     }else {
//         showError(input, 'Email Invalid')
//     }

//     return isEmailError
// }



// form.addEventListener('submit', function(e){    //Bắt event
//     e.preventDefault()   //Click vào thì k bị load lại trang

//     let isEmptyError = checkEmptyError(username, email, password, tel)
//     let isEmailError = checkEmailError(email)
// }) 





function kiemTra() {
    var arr = document.getElementByTagName("input");
    var hoten = arr[0].value;
    var email = arr[1].value;

    if (hoten == "") {
        showError(input, 'Không được để trống !')
         }else {
             showSuccess(input)

    }
}