var siteurl = jQuery("#siteurl").val();
var userurl = jQuery("#siteurl").val()+'client/ajax/';
var pageURL = jQuery(location).attr("href");
$(document).ready(function(){

    //menu selection
    var pare = $(".parentx").html();
    var chil = $(".childx").html();
    $(".side-nav li a").removeClass('active');
    $(".side-nav li ul a").removeClass('active-page');
    $("."+pare+" a").addClass('active');
    $("."+pare+" ul li."+chil+" a").addClass('active-page');
    //$("."+chil+" a").addClass('active-page');

    //login
    $("#loginbtn1").on('click',(function(e) {
        var dset = $("#login_fo1").serializeArray(); 
        var databox = {data: dset, type:"login"};
        $.ajax({
            type: "post",
            url: userurl + "uslogin",
            cache: false, 
            data: databox,
            beforeSend: function() { $('.errormsg').html('Checking...'); },
            success: function(result){      
                if(result!=1){
                    $('.errormsg').html(result);
                } else if(result == 1) {
                    window.location.replace(siteurl + "dashboard/");
                }
            },
            complete: function() { },
            error: function(){ console.log('Error while request..user'); }
        });
        return false;
    }));

    //delete record admin
    $(".sa_warning").on('click', function(e){
        var ids = $(this).attr('data-val');
        var tbl = $(this).attr('data-tbl');
        var urlx = $(this).attr('data-url');
        var databox = { ids: ids, tbl: tbl };
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this record!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function (isConfirm) {
            if (!isConfirm) return;
            $.ajax({
                url: userurl + "detrecod",
                type: "POST",
                data: databox,
                success: function (result) {
                    if(result != 1){
                        swal("Error deleting!", "Please try again", "error");
                    } else if(result == 1) {
                        swal("Done!", "It was succesfully deleted!", "success");
                        /*swal({title: "Are you sure?",
                        text: "You will not be able to recover this record!",
                        type: "warning"}, function(){ window.location = siteurl + urlx; });*/
                    }
                    setTimeout(function() {
                        window.location = siteurl + urlx;
                    }, 2000);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log('Error while request..'); 
                },
                complete: function() {
                    //window.location = siteurl + urlx;
                },
            });
        });
        e.preventDefault();
    });








    //lock record
    $(".sa_lock").on('click', function(e){
        var ids = $(this).attr('data-val');
        var tbl = $(this).attr('data-tbl');
        var urlx = $(this).attr('data-url');
        var databox = { ids: ids, tbl: tbl };
        swal({
            title: "Are you sure?",
            text: "You have to lock this record!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, lock it!",
            closeOnConfirm: false
        }, function (isConfirm) {
            if (!isConfirm) return;
            $.ajax({
                url: userurl + "lockon",
                type: "POST",
                data: databox,
                success: function (result) {
                    if(result != 1){
                        swal("Error deleting!", "Please try again", "error");
                    } else if(result == 1) {
                        swal("Done!", "It was succesfully deleted!", "success");
                    }
                    setTimeout(function() { window.location = siteurl + urlx; }, 2000);
                },
                error: function (xhr, ajaxOptions, thrownError) { console.log('Error while request..');  },
                complete: function() { },
            });
        });
        e.preventDefault();
    });


    //
    $(".lockx2").on('click',(function(e) {
        var databox = {type: "locknow"};
        $.ajax({
            type: "post",
            url: userurl + "lockall",
            cache: false, 
            data: databox,
            success: function(result){ window.location.replace(siteurl + "dashboard/"); },
            complete: function() { },
            error: function(){ console.log('Error while request..user'); }
        });
        return false;
    }));

});