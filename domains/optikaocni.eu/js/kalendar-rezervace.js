$(document).ready(function () {

    loadEvents();

    $('#select2').select2();

    $("#select").change(function () {
        $("#cena").html($(this).find("option:selected").data("des"));
         $("#description").html($(this).find("option:selected").data("dest"));
    });
    
   


    $('#kalendar').fullCalendar({
        header: {
            left: 'prev,next today  btn_pridat btn_info',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        lang: 'cs',
        defaultView: 'agendaWeek',
        aspectRatio: 2,
        weekends: false,
        height: 600,
        contentHeight: 600,
        snapDuration: '00:10:00',
        minTime: "08:30:00",
        maxTime: "17:00:00",
        editable: false,
        eventOverlap: false,
        dayClick: function (date, allDay, jsEvent, view) {
            $('#kalendar').fullCalendar('changeView', 'agendaDay');
            $('#kalendar').fullCalendar('gotoDate', date);
        },
        customButtons: {
            btn_pridat: {
                text: 'OBJEDNAT SE',
                click: function () {
                    $("#form")[0].reset();
                    $("#select2").val("").trigger('change');
                    var moment = $('#kalendar').fullCalendar('getDate');
                    $("#startDate").val(moment.format("D. M. YYYY"));
                    $("#startDateH").val(moment.format("YYYY-MM-DD"));
                    $("#id_event").val("0");
                    $("#delete").hide();
                    $("#pridat").modal("show");
                }
            },
            btn_info: {
                text: 'JAK SE OBJEDNAT ??',
                click: function () {
                    $("#info").modal("show");
                }
            }
        },
        eventResize: function (event, delta, revertFunc) {
            saveEvent(event);
        },
        eventDrop: function (event, delta, revertFunc) {
            saveEvent(event);
        },

      

    });


    $("#form").submit(function () {
        $.ajax({
            type: "POST",
            url: "ajax/novaEvent.php",
            data: $("#form").serialize(),
            success: function (msg){
            console.log(msg);
                if (msg == "error") {
                    alert("Nová událost zasahuje do jiné události! Změňte datum nebo čas");
                } else {
                    loadEvents();
                    $("#pridat").modal("hide");
                }
            }
        });
        return false;
    });

    $("#technik_select").change(function () {
        $("#kalendar").show().fullCalendar('render');
        $("#technik_id").val($(this).val());
        loadEvents();
    });

    $("#delete").click(function () {
        if (window.confirm("ODSTRANIT TUTO POLOŽKU?")) {
            $.ajax({
                type: "POST",
                url: "ajax/smazatEvent.php",
                data: {id: $("#id_event").val()},
                success: function (msg) {
                    loadEvents();
                    $("#pridat").modal("hide");
                }
            });
        }
    });
    


    function loadEvents() {
        $.ajax({
            type: "POST",
            url: "ajax/nactikalendar.php",
            success: function (msg)
            {
                events = JSON.parse(msg)
                $('#kalendar').fullCalendar('removeEvents');
                $('#kalendar').fullCalendar('addEventSource', events);
                $('#kalendar').fullCalendar('rerenderEvents');
            }
        });
    }

    function saveEvent(event) {
        $.ajax({
            type: "POST",
            url: "ajax/ulozEvent.php",
            data: {id: event.id, start: event.start.format("YYYY-MM-DD HH:mm:ss"), end: event.end.format("YYYY-MM-DD HH:mm:ss")},
            success: function (msg) {
                console.log(msg);
            }
        });
    }

});