$(document).ready(function () {

    loadEvents();

    $('#select2').select2();

    $("#select").change(function () {
        $("#cena").html($(this).find("option:selected").data("des"));
         $("#description").html($(this).find("option:selected").data("dest"));
    });
    
   


    $('#kalendar').fullCalendar({
        header: {
            left: 'prev,next today  btn_pridat',
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
        
        eventResize: function (event, delta, revertFunc) {
            saveEvent(event);
        },
        eventDrop: function (event, delta, revertFunc) {
            saveEvent(event);
        },

        eventRender: function (event, element, view) {
            element.find('.fc-title');
            element.bind('click', function () {
                $("#delete").show();
                $("#pridat").modal("show");
                $("#startDate").val(event.start.format("D. M. YYYY"));
                $("#startDateH").val(event.start.format("YYYY-MM-DD"));
                $("#startTime option[value='" + event.start.format('H:mm') + "']").prop("selected", true);
                $("#select option[value='" + event.typ_prace_id + "']").prop("selected", true);
                $("#selectSt option[value='" + event.stredisko_id + "']").prop("selected", true);
                $("#select2").val(event.zakaznici_id).trigger('change');
               
                $("#id_event").val(event.id);
               
                $("#popis_servis").val(event.popis_servis);
                $("#dokonceno").val(event.dokonceno);
                $("#doklad").val(event.doklad);
                $("#reseni").val(event.reseni);
              
                
                $("#stav").val(event.stav);
                
                $("#zjmeno").val(event.zjmeno);
                $("#zprijmeni").val(event.zprijmeni);
                $("#ztelefon").val(event.ztelefon);
                $("#zemail").val(event.zemail);
            });
        }

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