<div>
    <!-- Section: Chart -->
    <section>

        <!-- Grid row -->
        <div class="row pt-5">

            <!-- Grid column -->
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-xl-12 col-lg-12 mb-4 pb-2">

                <!-- Chart -->
                <div class="view view-cascade gradient-card-header blue-gradient">

                    <canvas id="lineChart" height="175"></canvas>

                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!-- Section: Chart -->
</div>
@push('scripts')
    <script>
        // Small chart
        $(function () {
            $('.min-chart#chart-sales').easyPieChart({
                barColor: "#FF5252",
                onStep: function (from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
        });

        // Main chart
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "ابان", "اذر","دی","بهمن","اسفند"],
                datasets: [{
                    label: "1400",
                    fillColor: "#fff",
                    backgroundColor: 'rgba(255, 255, 255, .3)',
                    borderColor: 'rgba(255, 255, 255)',
                    data: [0, 10, 5, 2, 20, 30, 45,45,15,45,84,45,],
                }]
            },
            options: {
                legend: {
                    labels: {
                        fontColor: "#fff",
                    }
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: true,
                            color: "rgba(255,255,255,.25)"
                        },
                        ticks: {
                            fontColor: "#fff",
                        },
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            display: true,
                            color: "rgba(255,255,255,.25)"
                        },
                        ticks: {
                            fontColor: "#fff",
                        },
                    }],
                }
            }
        });

    </script>
@endpush
