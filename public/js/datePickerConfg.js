function datePickerConfg(date, today){
    new Datepicker(date, {
        todayHighlight: true,
        minDate: today,
        beforeShowDay: date => {
            const currentDate = date.setHours(0, 0, 0, 0);
            return {
                classes: currentDate < today ? 'grayed-out' : ''
            };
        }
    });
}