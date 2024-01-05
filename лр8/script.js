// Проверка, что поле ФИО содержит только буквы и пробелы
function validateFullname() {
    var fullnameInput = document.getElementById("fullname");
    var fullname = fullnameInput.value;

    var regex = /^[A-Za-zА-Яа-я\s]+$/;

    if (!regex.test(fullname)) {
        alert("Поле ФИО может содержать только буквы и пробелы.");
        fullnameInput.value = "";
        fullnameInput.focus();
        return false;
    }

    return true;
}

// Проверка, что пароль содержит не менее 6 символов
function validatePassword() {
    var passwordInput = document.getElementById("password");
    var password = passwordInput.value;

    if (password.length < 6) {
        alert("Пароль должен содержать не менее 6 символов.");
        passwordInput.value = "";
        passwordInput.focus();
        return false;
    }

    return true;
}

// Проверка формы перед отправкой
function validateForm() {
    if (!validateFullname() || !validatePassword()) {
        return false;
    }

    return true;
}

// Обработка формы через PHP
document.getElementById("registrationForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Отмена действия по умолчанию (отправка формы)

    if (validateForm()) {
        var formData = new FormData(this);

        fetch(this.action, {
            method: this.method,
            body: formData
        })
        .then(function(response) {
            // Обработка ответа от сервера
            if (response.ok) {
                alert("Пользователь успешно зарегистрирован.");
            } else {
                alert("Ошибка при регистрации пользователя.");
            }
        })
        .catch(function(error) {
            alert("Произошла ошибка: " + error);
        });
    }
});