$(document).ready(function() {
    
    "use strict";

    
    
     var chart2 = function () {
        if($("#chart1").length < 1)
            return;
        var data = [];
        
        var plot2 = $.plot("#chart1", [data], {
            series: {
                shadowSize: 0 
            },
            yaxis: {
                min: 0,
                max: 100
            },
            xaxis: {
                show:false,
                min: 0,
                max: 600
            },
            colors: ["#9f7ce1"],
            legend: {
                show: false
            },
            grid: {
                color: "#455d86",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: 'transparent'
            },
            tooltip: true,
            tooltipOpts: {
                content: "CPU: %y",
                defaultTheme: false
            }
        });
        var time=0;
        function update() {
            $.ajax({
                method:'GET',
                url:'/stats',
                success(d){
                    $('#space').text(d.space);
                    $('#usage').text(d.usage);
                    $('#cpu').text(d.cpu + ' %');
                    if(time>600)
                        time = 0;
                    data.push([time++,d.cpu]);
                    plot2.setData([data]);
                    plot2.draw();
                    setTimeout(update, 1000);
                }
            })
        }

        update();
    };

    chart2();

    $("#uploader").pluploadQueue({
        runtimes : 'html5,html4',
        url : "/upload",
        chunk_size : '200kb',
        rename : true,
        dragdrop: true,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'X-Requested-With': 'XMLHttpRequest'
        },
        init : {
            Error: function(uploader,{response}) {
                alert(response)
            }
        }
    });
});
