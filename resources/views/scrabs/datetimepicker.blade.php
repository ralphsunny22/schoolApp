////////////////////////////////////////////////////////////////////////////////////////////////////////////
{{-- //inside d head tag --}}
{{-- <script src="{{asset('assets/admin/js/datetimepicker/jquery.min.js')}}"></script> --}}


{{-- //under d head tag --}}
<script type="text/javascript">
    $(document).ready(function () {
        
        //DatePicker Example
        // $('#datetimepicker').datetimepicker({
        //     format: 'd/m/Y g:i A',
        //     minDate:'-1970/01/02', //yesterday is minimum date
        //      //maxDate:'+1970/01/02' //tomorrow is maximum date
        // });

        $('#datetimepicker').datetimepicker({
            format: 'Y-m-d H:i:s',
        });

        //$('#datetimepicker').datetimepicker({
            //format: 'd/m/Y',
            //format: '{{ config('app.date_format_js') }}',
            //minDate:'-1970/01/02', //yesterday is minimum date
             //maxDate:'+1970/01/02' //tomorrow is maximum date
       // });
        
        //TimePicke Example
        // $('#timepicker').datetimepicker({
        //     datepicker:false,
        //     format:'i:s',
        //     step:15
        // });
        
        //Inline DateTimePicker Example
        $('#datetimepicker2').datetimepicker({
            format:'Y-m-d H:i',
            inline:true
        });
        
        //minDate and maxDate Example
        $('#datetimepicker3').datetimepicker({
             format:'Y-m-d',
             timepicker:false,
             minDate:'-1970/01/02', //yesterday is minimum date
             maxDate:'+1970/01/02' //tomorrow is maximum date
        });
        
        //allowTimes options TimePicker Example
        $('#datetimepicker4').datetimepicker({
            datepicker:false,
            allowTimes:[
              '11:00', '13:00', '15:00', 
              '16:00', '18:00', '19:00', '20:00'
            ]
        });
        
    });
</script>


{{-- //tis goes under d body tag --}}
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/datetimepicker/jquery.datetimepicker.min.css')}}"/>
<script src="{{asset('assets/admin/js/datetimepicker/jquery.datetimepicker.js')}}"></script>

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



{{-- Only datePicker, must be the last thing before the closing body tag --}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $( function() {
        $('#mydatepicker').datepicker({
            format: 'mm/dd/yy'
        });        
    });
</script>