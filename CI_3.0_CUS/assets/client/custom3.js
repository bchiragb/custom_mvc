 "use strict"; 
$(document).ready(function(){
	
    $(".select2").select2();

   
    //edit
    /*$('#datetimepicker1').datetimepicker({
        format: 'DD-MM-YYYY',
        inline: false,
        sideBySide: false,
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        },
    }).data("DateTimePicker").date(moment()); */

    $('#datetimepicker11').datetimepicker({
        format: 'DD-MM-YYYY',
        maxDate: new Date(),
    });

    $('#datetimepicker22').datetimepicker({
        format: 'hh:mm A',
        useCurrent: false,
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        },
    }).data("DateTimePicker").date();
    
    $('#datetimepicker33').datetimepicker({
        format: 'hh:mm A',
        useCurrent: false,
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        },
    }).data("DateTimePicker").date();


    $('#datetimepicker33').on('dp.change', function(e){ 
        var timex = 45;
        var valuestart = $("#intime").val();
        var valuestop = $("#outtime").val();
        
        if(valuestart != "" && valuestop != "") {
            var st_hr = new Date("07/12/2007 " + valuestart).getHours();
            var st_mi = new Date("07/12/2007 " + valuestart).getMinutes();
            var en_hr = new Date("07/12/2007 " + valuestop).getHours();
            var en_mi = new Date("07/12/2007 " + valuestop).getMinutes();
            var timeStart = '2021/12/07 ' + st_hr + ':' + st_mi + ':00';
            var timeEnd = '2021/12/07 ' + en_hr + ':' + en_mi + ':00';
            
            if(en_hr > st_hr) {
                var diffMs = timeEnd - timeStart; 
                var startTime = new Date(timeStart); 
                var endTime = new Date(timeEnd);
                var difference = endTime.getTime() - startTime.getTime();
                var resultInMinutes = Math.round(difference / 60000);
                var wok = Math.floor(resultInMinutes / timex);
                $("#inputName").val(wok);
            } else { //alert("Add proper time. Start time is small."); 
                $("#inputName").val(0);   
            }
        } else { //alert("Add time. Start or end time is missing");
            $("#inputName").val(0);
        }
    });

});


