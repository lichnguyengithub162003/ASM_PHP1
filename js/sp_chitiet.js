// Hiệu ứng chuyển ảnh ----------------------------------------------------------------------------
const bigImg = document.querySelector(".product-content-left-big-img img")
const smallImg = document.querySelectorAll(".product-content-left-small-img img")

smallImg.forEach(function (imgItem, x) {
    imgItem.addEventListener("click", function () {
        bigImg.src = imgItem.src
    })
})


// Line Content -----------------------------------------------------------------------------------
// const baoquan = document.querySelector(".baoquan")
// const chitiet = document.querySelector(".chitiet")

// if (baoquan) {
//     baoquan.addEventListener("click", function(){
//         document.querySelector("product-content-right-bottom-content-chitiet").style.display = "none"
//         document.querySelector("product-content-right-bottom-content-baoquan").style.display = "block"
//     })
// }

// if (chitiet) {
//     chitiet.addEventListener("click", function(){
//         document.querySelector("product-content-right-bottom-content-chitiet").style.display = "block"
//         document.querySelector("product-content-right-bottom-content-baoquan").style.display = "none"
//     })
// }

const butTon = document.querySelector(".product-content-right-bottom-top")

if (butTon) {
    butTon.addEventListener("click", function () {
        document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
    })
}

const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const indents = $$('.indent')
const infos = $$('.product-content-right-bottom-content-chitiet');

indents.forEach((tab, index) => {
    const info = infos[index];
    tab.onclick = function () {
        $('.indent.active').classList.remove('active');
        $('.product-content-right-bottom-content-chitiet.active').classList.remove('active');
        this.classList.add('active')
        info.classList.add('active')
    }
})

const sizes = $$('.choose-size')

sizes.forEach((tab, index) => {
    tab.onclick = function () {
        $('.choose-size.activeS').classList.remove('activeS');
        this.classList.add('activeS')
    }
})





// ----------------------- Respontive ----------------------------
$(document).ready(function(){
    $('#toggle').click(function(){
        // alert('ok')

        $('.nav1, .nav2').slideToggle();
    });
})