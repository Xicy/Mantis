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
        // General settings
        runtimes : 'html5,flash,silverlight,html4',
        url : "/examples/upload",

        chunk_size : '1mb',
        rename : true,
        dragdrop: true,

        filters : {
            // Maximum file size
            max_file_size : '10mb',
            // Specify what files to browse for
            mime_types: [
                {title : "Image files", extensions : "jpg,gif,png"},
                {title : "Zip files", extensions : "zip"}
            ]
        },

        // Resize images on clientside if we can
        resize: {
            width : 200,
            height : 200,
            quality : 90,
            crop: true // crop to exact dimensions
        },


        // Flash settings
        flash_swf_url : '/admin1/assets/plugins/plupload/js/Moxie.swf',

        // Silverlight settings
        silverlight_xap_url : '/admin1/assets/plugins/plupload/js/Moxie.xap'
    });

});
