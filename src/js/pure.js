documentReactState = {
    menuIsOpen: false,
    aboutMeIsOpen: false
}

function btnMenu() {
    if (documentReactState.menuIsOpen === false) {
        document.getElementsByClassName('menu-items')[0].style.display = 'block'
        document.getElementById('btn-menu').classList.remove('hamburger')
        document.getElementById('btn-menu').classList.add('close')
        documentReactState.menuIsOpen = true
    } else {
        document.getElementsByClassName('menu-items')[0].style.display = 'none'
        document.getElementById('btn-menu').classList.remove('close')
        document.getElementById('btn-menu').classList.add('hamburger')
        documentReactState.menuIsOpen = false
    }
}

function btnToggle() {
    if (documentReactState.aboutMeIsOpen === false) {
        document.getElementById('show').style.display = 'none'
        document.getElementById('close').style.display = 'inline-block'
        changeStyle('inline-block', document.getElementsByClassName('about-me-text'))
        documentReactState.aboutMeIsOpen = true
    } else {
        document.getElementById('show').style.display = 'inline-block'
        document.getElementById('close').style.display = 'none'
        changeStyle('none', document.getElementsByClassName('about-me-text'))
        documentReactState.aboutMeIsOpen = false
    }
}

function sendMail() {
    let mailObject = {
        name: document.getElementsByName('name')[0].value,
        phone: document.getElementsByName('phone')[0].value
    }
    if (mailObject.name && mailObject.phone) {
        if (mailObject.name.length > 2 && mailObject.phone.length > 10) {
            fetch('/routes/mail.php',{
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(mailObject),
            })
            .then(response => {
                alert('Ваша заявка успешно отправлена.')
                document.getElementsByName('name')[0].value = ''
                document.getElementsByName('phone')[0].value = ''
            })
        } else {
            alert('Введите корректные данные')
        }
    } else {
        alert('Введите все данные')
    }
}

function changeStyle(property, object) {
    for (let i = 0; i < object.length; i++)
    {
        object[i].style.display = property
    }
}
