import $ from 'jquery';
window.$ = window.jQuery = $;
import 'jquery-ui/ui/widgets/datepicker.js';

$(function(){
        $( "#datepicker" ).datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            dateFormat: 'yy mm ',
            minDate: '+1m'
        });
})
$(function(){
    $( "#datepicker2" ).datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        dateFormat: 'yy-mm-dd',
       // minDate: '+1m'
    });
})
