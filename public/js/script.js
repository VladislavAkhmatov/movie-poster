const calendar = document.getElementById('calendar');

// Массив с названиями дней недели
const daysOfWeek = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];

// Создаем календарь
for (let i = 0; i < daysOfWeek.length; i++) {
    const dayElement = document.createElement('div');
    dayElement.classList.add('day');
    dayElement.textContent = daysOfWeek[i];
    calendar.appendChild(dayElement);

}
