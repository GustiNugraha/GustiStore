<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<!--  Chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

<!--Chartist Chart-->
<script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
<script src="{{ asset('assets/js/init/weather-init.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
<script src="{{ asset('assets/js/init/fullcalendar-init.js') }}"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector('.ckeditor') )
        .then( editor => {
            console.log( editor );
        })
        .catch( error => {
            console.error( error );
        });
</script>

<!--Local Stuff-->
<script>
    jQuery(document).ready(function($) {
        "use strict";

        // Pie chart flotPie1
        var piedata = [{
                label: "Pending",
                data: [
                    [1, 32]
                ],
                color: '#5c6bc0'
            },
            {
                label: "Failed",
                data: [
                    [1, 33]
                ],
                color: '#ef5350'
            },
            {
                label: "Success",
                data: [
                    [1, 35]
                ],
                color: '#66bb6a'
            }
        ];

        $.plot('#flotPie1', piedata, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0.65,
                    label: {
                        show: true,
                        radius: 2 / 3,
                        threshold: 1
                    },
                    stroke: {
                        width: 0
                    }
                }
            },
            grid: {
                hoverable: true,
                clickable: true
            }
        });
        // Pie chart flotPie1  End
        // cellPaiChart
        // var cellPaiChart = [{
        //         label: "Direct Sell",
        //         data: [
        //             [1, 65]
        //         ],
        //         color: '#5b83de'
        //     },
        //     {
        //             label: "Channel Sell",
        //         data: [
        //             [1, 35]
        //         ],
        //         color: '#00bfa5'
        //     }
        // ];
        // $.plot('#cellPaiChart', cellPaiChart, {
        //     series: {
        //         pie: {
        //             show: true,
        //             stroke: {
        //                 width: 0
        //             }
        //         }
        //     },
        //     legend: {
        //         show: false
        //     },
        //     grid: {
        //         hoverable: true,
        //         clickable: true
        //     }

        // });

</script>

<script>
    jQuery(document).ready(function($){
        $('#mymodal').on('show.bs.modal', function(e){
            var button = $(e.relatedTarget);
            var modal = $(this);
            modal.find('.modal-body').load(button.data("remote"))
            modal.find('.modal-title').html(button.data("title"))
        });
    });
</script>

<div class="modal" id="mymodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <i class="fa fa-spinner fa-spin"></i>
            </div>
        </div>
    </div>
</div>