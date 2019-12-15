

{{-- //under d head tag --}}
<script type="text/javascript">
    $(document).ready(function () {
        
        //DatePicker Example
        $('#datetimepicker').datetimepicker({
            //format: 'd/m/Y g:i A',
            format: 'M d, Y',
            //format: 'Y-m-d H:i:s',
            minDate:'-1970/01/02', //yesterday is minimum date
             //maxDate:'+1970/01/02' //tomorrow is maximum date
        });

        //start_timepicker
        $('#start_timepicker').datetimepicker({
            datepicker:false,
            format:'g:i:A',
        });


         //DatePicker Example
         $('#addCourseStartDateTime').datetimepicker({
            format: 'M d, Y g:i A',
            //format: 'Y-m-d H:i:s',
            minDate:'-1970/01/02', //yesterday is minimum date
             //maxDate:'+1970/01/02' //tomorrow is maximum date
        });

        //DatePicker Example
        $('#addCourseEndDateTime').datetimepicker({
            format: 'M d, Y g:i A',
            //format: 'Y-m-d H:i:s',
            minDate:'-1970/01/02', //yesterday is minimum date
             //maxDate:'+1970/01/02' //tomorrow is maximum date
        });

        //DatePicker Example
        $('#addCourseDurationDateTime').datetimepicker({
            datepicker:false,
            format:'H:i:s',
            step:15
        });

        $('#addCourseDurationPerPeriod').datetimepicker({
            datepicker:false,
            format:'H:i:s',
            step:15
        });
       
       

        

    
        //TimePicker Example
        $('#timepicker').datetimepicker({
            datepicker:false,
            format:'H:i:s',
            step:15
        });
        














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