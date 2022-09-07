const btn = document.querySelectorAll(".add")
// console.log(btn)

btn.forEach(function(button, index){
    // console.log(button, index)

    button.addEventListener("click", function(event){{
        var btnItem = event.target
        var product = btnItem.parentElement
        // console.log(product)

        var productImg = product.querySelector("img").src
        // console.log(productImg)

        var productName = product.querySelector(".product-name").innerText
        // console.log(productName)

        var productPrice = product.querySelector(".price").innerText
        // console.log(productPrice, productImg, productName) 

        addcart(productImg, productName, productPrice)

    }})
})

function addcart(productImg, productName, productPrice) {
    var addtr = document.createElement("tr")

    var cartItem = document.querySelectorAll("tbody tr")  //Các sp trong giỏ hàng
    for(var i = 0; i < cartItem.length; i++){
        var productT = document.querySelectorAll(".title")

        // Nếu như sp đã có trong giỏ hàng thì sẽ hiện alert và chỉ đc thay đổi SL sp thôi
        if(productT[i].innerHTML == productName) {
            alert("Sản phẩm của bạn đã có trong giỏ hàng")
            return

            //Or có cách khác làm cho nó hiện elert bằng pop up giữa màn hình chứ k phải là alert trên xuống như bth (đơn điệu)
        }
    }




    var trcontent = '<tr><td style="display: flex; align-items: center;"><img src="'+productImg+'" alt="" style="width: 70px"><span class="title">'+productName+'</span></td><td><p><span class="prices">'+productPrice+'</span><sup>đ</sup></p></td><td><input style="width: 30px; outline: none;" type="number" value="1" min="1"></td><td style="cursor: pointer;"><span class="cart-delete">Xóa</span></td></tr>'
    
    addtr.innerHTML = trcontent
    var cartTable = document.querySelector("tbody")
    // console.log(cartTable)

    cartTable.append(addtr) //Thêm 1 thẻ tr vào ngay dưới thẻ tr trc đó trong tbody (giỏ hàng)

    carttotal() //Gọi hàm này lên đây để chạy (còn phần định nghĩa của hàm thì ở dưới)

    deleteCart()
}







// ------------------------------- Total price --------------------------

function carttotal (){

    var cartItem = document.querySelectorAll("tbody tr")
    // console.log(cartItem.length)

    var totalB = 0

    for(var i = 0; i < cartItem.length; i++){
        // console.log(i)

        var inputValue = cartItem[i].querySelector("input").value        //inputValue: biến này để lấy giá trị trong thẻ input (SL sp)
        // console.log(inputValue)

        var productPrice = cartItem[i].querySelector(".prices").innerText  //productPrice: biến này để lấy giá trị price (giá tiền)
        // console.log(productPrice)

        totalA = (inputValue * productPrice * 1000)                     //totalA: biến này là biến tổng tiền khi (SL * số sp)
        // console.log(totalA)

        totalB = totalB + totalA                                        //totalB: biến này là biến tổng tiền của all các sp
        // console.log(totalB)

        // totalD = totalB.toLocaleString('de-DE') //Gọi lên đây use after đã định nghĩa bên dưới    
                                                //Xử lý chuỗi, phân cách tiền bằng dấu chấm
    }



    // ----------- Hiển thị tổng tiền ở dưới giỏ hàng -------------------

    var cartotalA = document.querySelector(".price-total span")
    // console.log(cartotalA)

    // ---- Cho icon cart ------
    cartPrice = document.querySelector(".cart-icon span")

    cartotalA.innerHTML = totalB.toLocaleString('de-DE')            //cartotalA.innerHTML: lấy giá tiền trong thẻ span
    // console.log(cartotalA)


    /*********************  COI KỸ LẠI CHỖ NÀY: TẠI SAO BỎ HÀNG NÀY THÌ LẠI CHẠY ĐC BTH? *****************************/
    cartPrice.innerHTML = totalB .toLocaleString('de-DE')

    inputchange()
}








// ---------------------------- Product button remove -----------------------------
function deleteCart() {
    var cartItem = document.querySelectorAll("tbody tr")
    
    for(var i = 0; i < cartItem.length; i++){
        var productT = document.querySelectorAll(".cart-delete")
       console.log(productT)

        productT[i].addEventListener("click", function(event){
            var cartDelete = event.target
            var cartitemR = cartDelete.parentElement.parentElement    //Biến này gọi đến tr để từ đó xóa cả cái tr lun (1sp = 1 tr)
            // console.log(cartitemR)

            cartitemR.remove()   //Lệnh xóa ngay
            carttotal ()
        })
        
}}








//--------------------------- Change SL --> change total price --------------------------
function inputchange (){
    var cartItem = document.querySelectorAll("tbody tr")
    
    for(var i = 0; i < cartItem.length; i++){
        var inputValue = cartItem[i].querySelector("input")
    //    console.log(productT)

       inputValue.addEventListener("change", function(){
           carttotal ()
       })
        
}}





// -------------------- Close - Open cart -------------------------
const cartbtn = document.querySelector(".fa-times")
const cartshow = document.querySelector(".fa-shopping-cart")

cartshow.addEventListener("click", function(){
    document.querySelector(".cart").style.right = "0"
})

cartbtn.addEventListener("click", function(){
    document.querySelector(".cart").style.right = "-100%"
})





// // -------------------- Close - Open menu (coffee - milk) -------------------------
// const milkbtn = document.querySelector(".fa-times")
// const milkshow = document.querySelector(".v")

// milkshow.addEventListener("click", function(){
//     document.querySelector(".cart").style.right = "0"
// })

// milkbtn.addEventListener("click", function(){
//     document.querySelector(".cart").style.right = "-100%"
// })












// ----------------------- Respontive ----------------------------
$(document).ready(function(){
    $('#toggle').click(function(){
        // alert('ok')

        $('.nav1, .nav2').slideToggle();
    });
})
