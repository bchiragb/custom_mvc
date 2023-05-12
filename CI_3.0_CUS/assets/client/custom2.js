 "use strict"; 
$(document).ready(function(){
	
    $(".select2").select2();

    //count 30 minutes from time difference jquery
    $("#workbtnfrm").on('submit',(function(e) {

        var timex = 45;
        var valuestart = $("#intime").val();
        var valuestop = $("#outtime").val();
        //console.log(valuestart);  console.log(valuestop); 
        //create date format          
        var st_hr = new Date("07/12/2007 " + valuestart).getHours();
        var st_mi = new Date("07/12/2007 " + valuestart).getMinutes();
        var en_hr = new Date("07/12/2007 " + valuestop).getHours();
        var en_mi = new Date("07/12/2007 " + valuestop).getMinutes();
        timeStart = '2021/12/07 ' + st_hr + ':' + st_mi + ':00';
        timeEnd = '2021/12/07 ' + en_hr + ':' + en_mi + ':00';
        var diffMs = timeEnd - timeStart; 
        //console.log(timeStart); console.log(timeEnd); console.log(diffMs);

        var startTime = new Date(timeStart); 
        var endTime = new Date(timeEnd);
        var difference = endTime.getTime() - startTime.getTime();
        var resultInMinutes = Math.round(difference / 60000);
        var wok = Math.floor(resultInMinutes / timex);
        $("#inputName").val(wok);

        //console.log(resultInMinutes); console.log(wok);
        //var diffDays = Math.floor(difference / 86400000); // days
        //var diffHrs = Math.floor((difference % 86400000) / 3600000); // hours
        //var diffMins = Math.round(((difference % 86400000) % 3600000) / 60000); // minutes
        //console.log(diffDays + " days, " + diffHrs + " hours, " + diffMins + " minutes until Christmas 2009 =)");
        return false;
    }));


    $('#datetimepicker2').on('dp.change', function(e){ 
        var timex = 45;
        var valuestart = $("#intime").val();
        var valuestop = $("#outtime").val();
        //console.log(valuestart);  console.log(valuestop); 
        //console.log("====");

        if(valuestart != "" && valuestop != "") {
            var st_hr = new Date("07/12/2007 " + valuestart).getHours();
            var st_mi = new Date("07/12/2007 " + valuestart).getMinutes();
            var en_hr = new Date("07/12/2007 " + valuestop).getHours();
            var en_mi = new Date("07/12/2007 " + valuestop).getMinutes();
            var timeStart = '2021/12/07 ' + st_hr + ':' + st_mi + ':00';
            var timeEnd = '2021/12/07 ' + en_hr + ':' + en_mi + ':00';
            //console.log(timeStart); console.log(timeEnd); 
            
            var va101 = st_hr + '.' + st_mi;
            var va102 = en_hr + '.' + en_mi;
            //if(st_mi == '0') { st_mi = '00' } if(en_mi == '0') { en_mi = '00' }    
            //parseFloat(va101);    parseFloat(va102);  
            //console.log(va101);  console.log(va102);  
            if(va101 < va102) {
                //console.log("xxxxxxxxxx");
                var startTime = new Date(timeStart); 
                var endTime = new Date(timeEnd);
                var difference = endTime.getTime() - startTime.getTime();
                var resultInMinutes = Math.round(difference / 60000);
                var wok = Math.floor(resultInMinutes / timex);
                var diffHrs = Math.floor((difference % 86400000) / 3600000); // hours
                var diffMins = Math.round(((difference % 86400000) % 3600000) / 60000); // minutes
                //console.log(diffHrs + " hours, " + diffMins + " minute ::" + resultInMinutes);
                
                var calhrs = 0; var myhrs = 0;
                calhrs = diffHrs + '.' + diffMins;
                parseFloat(calhrs);        
                if(calhrs >= 0.45){ myhrs = 1; }  
                if(calhrs >= 1.45){ myhrs = 2; }  
                if(calhrs >= 2.45){ myhrs = 3; } 
                if(calhrs >= 3.45){ myhrs = 4; } 
                if(calhrs >= 4.45){ myhrs = 5; } 
                if(calhrs >= 5.45){ myhrs = 6; } 
                if(calhrs >= 6.45){ myhrs = 7; }
                if(calhrs >= 7.45){ myhrs = 8; }
                if(calhrs >= 8.45){ myhrs = 9; }
                if(calhrs >= 9.45){ myhrs = 10; }
                if(calhrs >= 10.45){ myhrs = 11; }
                if(calhrs >= 11.45){ myhrs = 12; }
                if(calhrs >= 12.45){ myhrs = 13; }
                if(calhrs >= 13.45){ myhrs = 14; }
                if(calhrs >= 14.45){ myhrs = 15; }
                if(calhrs >= 15.45){ myhrs = 16; }
                if(calhrs >= 16.45){ myhrs = 17; }
                if(calhrs >= 17.45){ myhrs = 18; }
                if(calhrs >= 18.45){ myhrs = 19; }
                if(calhrs >= 19.45){ myhrs = 20; }
                if(calhrs >= 20.45){ myhrs = 21; }
                if(calhrs >= 21.45){ myhrs = 22; }
                if(calhrs >= 22.45){ myhrs = 23; }
                if(calhrs >= 23.45){ myhrs = 24; }
                
                console.log("cb11 =" + calhrs + "====" + diffHrs+ '.' + diffMins + "::" + diffMins+ "::::::::::" + myhrs);

                $("#inputName").val(myhrs);
            } else { //alert("Add proper time. Start time is small."); 
                $("#inputName").val(0);   
            }
        } else { //alert("Add time. Start or end time is missing");
            $("#inputName").val(0);
        }
    });


    $('#datetimepicker3').on('dp.change', function(e){ 
        var timex = 45;
        var valuestart = $("#intime").val();
        var valuestop = $("#outtime").val();
        //console.log(valuestart);  console.log(valuestop); 
        //console.log("-----");

        if(valuestart != "" && valuestop != "") {
            var st_hr = new Date("07/12/2007 " + valuestart).getHours();
            var st_mi = new Date("07/12/2007 " + valuestart).getMinutes();
            var en_hr = new Date("07/12/2007 " + valuestop).getHours();
            var en_mi = new Date("07/12/2007 " + valuestop).getMinutes();
            var timeStart = '2021/12/07 ' + st_hr + ':' + st_mi + ':00';
            var timeEnd = '2021/12/07 ' + en_hr + ':' + en_mi + ':00';
            //console.log(timeStart); console.log(timeEnd); 

            var va101 = st_hr + '.' + st_mi;
            var va102 = en_hr + '.' + en_mi;
            //if(st_mi == '0') { st_mi = '00' } if(en_mi == '0') { en_mi = '00' }    
            //parseFloat(va101);    parseFloat(va102);  
            //console.log(va101);  console.log(va102);  
            if(va101 < va102) {
                console.log("yyyyyyyy");
                var startTime = new Date(timeStart); 
                var endTime = new Date(timeEnd);
                var difference = endTime.getTime() - startTime.getTime();
                var resultInMinutes = Math.round(difference / 60000);
                var wok = Math.floor(resultInMinutes / timex);
                var diffHrs = Math.floor((difference % 86400000) / 3600000); // hours
                var diffMins = Math.round(((difference % 86400000) % 3600000) / 60000); // minutes
                //console.log(diffHrs + " hours, " + diffMins + " minute ::" + resultInMinutes);
                
                var calhrs = 0; var myhrs = 0;
                calhrs = diffHrs + '.' + diffMins;
                parseFloat(calhrs);        
                if(calhrs >= 0.45){ myhrs = 1; }  
                if(calhrs >= 1.45){ myhrs = 2; }  
                if(calhrs >= 2.45){ myhrs = 3; } 
                if(calhrs >= 3.45){ myhrs = 4; } 
                if(calhrs >= 4.45){ myhrs = 5; } 
                if(calhrs >= 5.45){ myhrs = 6; } 
                if(calhrs >= 6.45){ myhrs = 7; }
                if(calhrs >= 7.45){ myhrs = 8; }
                if(calhrs >= 8.45){ myhrs = 9; }
                if(calhrs >= 9.45){ myhrs = 10; }
                if(calhrs >= 10.45){ myhrs = 11; }
                if(calhrs >= 11.45){ myhrs = 12; }
                if(calhrs >= 12.45){ myhrs = 13; }
                if(calhrs >= 13.45){ myhrs = 14; }
                if(calhrs >= 14.45){ myhrs = 15; }
                if(calhrs >= 15.45){ myhrs = 16; }
                if(calhrs >= 16.45){ myhrs = 17; }
                if(calhrs >= 17.45){ myhrs = 18; }
                if(calhrs >= 18.45){ myhrs = 19; }
                if(calhrs >= 19.45){ myhrs = 20; }
                if(calhrs >= 20.45){ myhrs = 21; }
                if(calhrs >= 21.45){ myhrs = 22; }
                if(calhrs >= 22.45){ myhrs = 23; }
                if(calhrs >= 23.45){ myhrs = 24; }
                
                console.log("cb11 =" + calhrs + "====" + diffHrs+ '.' + diffMins + "::" + diffMins+ "::::::::::" + myhrs);

                $("#inputName").val(myhrs);
            } else { //alert("Add proper time. Start time is small."); 
                $("#inputName").val(0);   
            }
        } else { //alert("Add time. Start or end time is missing");
            $("#inputName").val(0);
        }
    });


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


    //add
    /*$('#datetimepicker1').datetimepicker({
        format: 'DD-MM-YYYY',
        inline:false,
        sideBySide: true,
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        },
    }).data("DateTimePicker").date(moment()); */

    $('#datetimepicker1').datetimepicker({
        format: 'DD-MM-YYYY',
        maxDate: new Date(),
        defaultDate: new Date(),
    });

    $('#datetimepicker2').datetimepicker({
        format: 'hh:mm A',
        useCurrent: false,
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        },
    }).data("DateTimePicker").date(moment());
    
    $('#datetimepicker3').datetimepicker({
        format: 'hh:mm A',
        useCurrent: false,
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        },
    }).data("DateTimePicker").date(moment());


});


