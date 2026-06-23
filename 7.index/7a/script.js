let buttons = document.querySelectorAll("button");
let display = document.querySelector("input");

buttons.forEach(button => {

    button.addEventListener("click", (e) => {

        let value = e.target.innerHTML;

        if(value === "AC"){
            display.value = "";
        }

        else if(value === "CE"){
            display.value = display.value.slice(0, -1);
        }

        else if(value === "="){

            try{
                display.value = eval(display.value);
            }

            catch{
                display.value = "Error";
            }
        }

        else{
            display.value += value;
        }

    });

});