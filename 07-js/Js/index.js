const mycheckbox = document.querySelector('.mycheckbox')
const main = document.querySelector('main')
const oper = document.querySelector('.operation')
const equal = document.querySelector('.equal')
const result = document.querySelector('.result')
const back = document.querySelector('.back')

// Numbers & Operations

const nums = document.querySelectorAll('button[data-num]')
const oprs = document.querySelectorAll('button[data-opr]')
const clearInterval = document.querySelector('.clear')
var light= true

//click Buttons
nums.forEach(element => {
    element.addEventListener('click', () => {
        if (oper.textContent.length < 18) {
            oper.textContent += element.getAttribute('data-num')
            operStatus = true
        }
    })
})

oprs.forEach(element => {
    element.addEventListener('click', () => {
        if (oper.textContent.length < 18) {
            if (operStatus) {
                oper.textContent += element.getAttribute('data-opr')
                operStatus = false
            }
        }

    })
})

clearInterval.addEventListener('click', () => {
    oper.textContent = ''
})

mycheckbox.onclick = function (event) {
    console.log(light)
    if(light){
        main.className = 'light';
        light=false;
    }else{
        main.className = 'dark';
        light=true;
    }
}

mycheckbox.addEventListener('change', (event) => {
    console.log("ssssss")
    if (event.currentTarget.checked) {
        main.classList.toggle('light')
    } else {
        main.classList.toggle('dark')
    }
  })

document.addEventListener('keyup', (evt) => {
    console.log(evt.keyCode)
    switch (evt.keyCode) {

        case 48:

            oper.textContent += 0
            break;

        case 49:

            oper.textContent += 1
            break;

        case 50:

            oper.textContent += 2
            break;

        case 51:
            oper.textContent += 3
            break;

        case 52:
            oper.textContent += 4
            break;
        case 53:
            oper.textContent += 5
            break;
        case 54:
            oper.textContent += 6
            break;
        case 55:
            oper.textContent += 7
            break;
        case 56:
            oper.textContent += 8
            break;
        case 57:
            oper.textContent += 9
            break;
        case 187:
            oper.textContent += "+"
            break;
    }
})

equal.onclick = function () {
    result.textContent = eval(oper.textContent)
}

back.onclick = function () {
    if (oper.textContent.length > 0) {
        oper.textContent = oper.textContent.substring(0,oper.textContent.length-1)
    }
}