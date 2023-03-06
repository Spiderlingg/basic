$(function() {
    // Disable the last Sunday of each month
    function disableLastSunday(date) {
        var year = date.getFullYear();
        var month = date.getMonth() + 1;
        var lastDayOfMonth = new Date(year, month, 0).getDate();
        var lastSunday = new Date(year, month - 1, lastDayOfMonth - 6);
        return [lastSunday, ''];
    }

    // Set up the datepicker
    $('#datepicker').datepicker({
        dateFormat: 'yy-mm-dd',
        minDate: new Date(),
        beforeShowDay: disableLastSunday,
        onSelect: function(date) {
            // Set the min and max times based on the selected date
            var selectedDate = new Date(date);
            var minTime = selectedDate.setHours(8, 0, 0);
            var maxTime = selectedDate.setHours(20, 0, 0);
            $('#start-time').timepicker('option', 'minTime', minTime);
            $('#end-time').timepicker('option', 'maxTime', maxTime);
        }
    });

    // Set up the timepicker for start time
    $('#start-time').timepicker({
        timeFormat: 'HH:mm',
        interval: 15,
        minTime: new Date().setHours(8, 0, 0),
        maxTime: new Date().setHours(20, 0, 0),
        defaultTime: new Date().setHours(8, 0, 0),
        dynamic: false,
        dropdown: true,
        scrollbar: true,
        change: function(time) {
            // Set the min time for end time based on the selected start time
            var selectedTime = new Date(time);
            var minEndTime = selectedTime.setMinutes(selectedTime.getMinutes() + 30);
            $('#end-time').timepicker('option', 'minTime', minEndTime);
        }
    });

    // Set up the timepicker for end time
    $('#end-time').timepicker({
        timeFormat: 'HH:mm',
        interval: 15,
        minTime: new Date().setHours(8, 30, 0),
        maxTime: new Date().setHours(20, 0, 0),
        defaultTime: new Date().setHours(8, 30, 0),
        dynamic: false,
        dropdown: true,
        scrollbar: true
    });
});
