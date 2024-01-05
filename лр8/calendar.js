function generateCalendar(month, year) {
    var currentDate = new Date();

    if (!month) {
        month = currentDate.getMonth() + 1;
    }
    if (!year) {
        year = currentDate.getFullYear();
    }

    var firstDay = new Date(year, month - 1, 1);
    var lastDay = new Date(year, month, 0);
    var numDays = lastDay.getDate();

    var calendarHTML = '<table>';
    calendarHTML += '<tr><th>ПН</th><th>ВТ</th><th>СР</th><th>ЧТ</th><th>ПТ</th><th class="weekend">СБ</th><th class="weekend">ВС</th></tr>';

    var row = '<tr>';
    var dayOfWeek = firstDay.getDay();
    var day = 1;

    // Добавление пустых ячеек для первого дня недели
    for (var i = 0; i < dayOfWeek; i++) {
        row += '<td></td>';
    }

    // Генерация дней календаря
    for (var j = 0; j < 7 - dayOfWeek; j++) {
        row += '<td>' + day + '</td>';
        day++;
    }

    row += '</tr>';
    calendarHTML += row;

    // Генерация остальных строк календаря
    while (day <= numDays) {
        row = '<tr>';

        for (var k = 0; k < 7; k++) {
            if (day <= numDays) {
                var dateObj = new Date(year, month - 1, day);
                var className = '';

                // Проверка, является ли день выходным или праздничным
                if (dateObj.getDay() === 0 || dateObj.getDay() === 6) {
                    className += 'weekend ';
                }
                if (checkHoliday(dateObj.getMonth() + 1, dateObj.getDate())) {
                    className += 'holiday ';
                }

                row += '<td class="' + className.trim() + '">' + day + '</td>';
                day++;
            } else {
                row += '<td></td>';
            }
        }

        row += '</tr>';
        calendarHTML += row;
    }

    calendarHTML += '</table>';

    // Вывод календаря в div с id "calendar"
    document.getElementById("calendar").innerHTML = calendarHTML;
}

// Проверка на праздничные дни
function checkHoliday(month, day) {
    // Возвращает true, если день является праздником, и false в противном случае
}
