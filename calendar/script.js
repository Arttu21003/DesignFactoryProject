var calendar;
var Calendar = FullCalendar.Calendar;
var events = [];


$(function() {

    if (!!scheds) {
        Object.keys(scheds).map(k => {
            var row = scheds[k]
            events.push({ id: row.id, title: row.type + " " + row.amount, start: row.reservation_date });
        });
    }
    
    var date = new Date()
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear(),

    calendar = new Calendar(document.getElementById('calendar'), {
        headerToolbar: {
            left: 'prev,next today',
            right: 'dayGridMonth,dayGridWeek,list',
            center: 'title',
        },
        selectable: true,
        themeSystem: 'bootstrap',
        events: events,
    
        eventClick: function(info) {
            var details = $('#event-details-modal');
            var id = info.event.id;

            if (!!scheds[id]) {
                details.find('#title').text(scheds[id].title);
                details.find('#type').text(scheds[id].type);
                details.find('#start').text(scheds[id].sdate);
                details.find('#amount').text(scheds[id].amount);
                details.find('#edit,#delete').attr('data-id', id);
                details.modal('show');
            } else {
                alert("Event is undefined");
            }
        },
        eventDidMount: function(info) {
            // Do Something after events mounted
        },
        editable: true
    });

    calendar.render();

    // Form reset listener
    $('#schedule-form').on('reset', function() {
        $(this).find('input:hidden').val('');
        $(this).find('input:visible').first().focus();
    });

    // Edit Button
    $('#edit').click(function() {
        var id = $(this).attr('data-id');

        if (!!scheds[id]) {
            var form = $('#schedule-form');

            console.log(String(scheds[id].start_date), String(scheds[id].start_date).replace(" ", "\\t"));
            form.find('[name="id"]').val(id);
            form.find('[name="fname"]').val(scheds[id].fname);
            form.find('[name="lname"]').val(scheds[id].lname);
            form.find('[name="phone_number"]').val(scheds[id].phone_number);
            form.find('[name="start_date"]').val(String(scheds[id].start_date).replace(" ", "T"));
            form.find('[name="type"]').val(scheds[id].type);
            form.find('[name="amount"]').val(scheds[id].amount);
            form.find('[name="company_name"]').val(scheds[id].company_name);
            form.find('[name="email_id"]').val(scheds[id].email_id);
            form.find('[name="additional"]').val(scheds[id].additional);
            $('#event-details-modal').modal('hide');
            form.find('[name="title"]').focus();
        } else {
            alert("Event is undefined");
        }
    });

    // Delete Button / Deleting an Event
    $('#delete').click(function() {
        var id = $(this).attr('data-id');

        if (!!scheds[id]) {
            var _conf = confirm("Are you sure to delete this scheduled event?");
            if (_conf === true) {
                location.href = "./delete_schedule.php?id=" + id;
            }
        } else {
            alert("Event is undefined");
        }
    });

    //Dont Allow Weekends to be reserved
    const picker = document.getElementById('reservation_date');
    picker.addEventListener('input', function(e){
      var day = new Date(this.value).getUTCDay();
      if([6,0].includes(day)){
        e.preventDefault();
        this.value = '';
        alert('Weekends not allowed');
      }
    });
    $(function(){
        var dtToday = new Date();
        
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate() + 3;
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        
        var maxDate = year + '-' + month + '-' + day;
        $('#reservation_date').attr('min', maxDate);
    });
});