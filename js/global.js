$(document).ready(function () {

    $('#nutrition_btn').click(function(){
        $.ajax({
            url: "../guide_query.php",
            type: 'POST',
            data: {
                guide_type: "nutrition"
            },
            success: function (res) {
                $('.guide-content').html("Nutrition: " + res);
            }
        });
    });

    $('#tip_btn').click(function(){
        $.ajax({
            url: "../guide_query.php",
            type: 'POST',
            data: {
                guide_type: 'tip'
            },
            success: function (res) {
                $('.guide-content').html("Tip: " + res);
            }
        });
    });

    // $('#save').click(function(){

    //     $mealtime = $('#mealtime').val();
    //     $playtime = $('#playtime').val();

    //     $.ajax({
    //         url: "../schedule_query.php",
    //         type: 'POST',
    //         data: {
    //             mealtime: $mealtime,
    //             playtime: $playtime
    //         },
    //         success: function (res) {
    //             $('.guide-content').html("Tip: " + res);
    //         }
    //     });
    // });
});