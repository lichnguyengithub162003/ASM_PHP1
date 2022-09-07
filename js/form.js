
//Đối tượng Validator
function Validator(options) {

    var formElement = document.querySelector(options.form);

    // console.log(options.rules);
    
    if (formElement) {
        // console.log(formElement);

        options.rules.forEach(function (rule) {
            // console.log(rule.selector);

            var inputElement = formElement.querySelector(rule.selector);
            // console.log(inputElement);

            if (inputElement) {
                inputElement.onblur = function () {
                    // console.log('blur ' + rule.selector);
                    console.log(inputElement.value);
                }
            }
        });
    }
}





//Định nghĩa rules

// -----------------------------
Validator.isRequired = function(elememnt) {
    return {
        // selector: selector,
        test: function (){

        }
    }
}

// -----------------------------
Validator.isEmail = function(elememnt) {
    return {
        // selector: selector,
        test: function (){
            
        }
    }
}

