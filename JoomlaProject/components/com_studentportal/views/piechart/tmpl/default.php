<?
defined('_JEXEC') or die('Restricted access'); ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@highcharts/grid-lite/grid-lite.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/themes/adaptive.js"></script>
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.23.11/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.11/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.11/dist/js/uikit-icons.min.js"></script>

<div class="heading">
    <h3>DashBoard</h3>
</div><br>
<div class="uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <img src="components/com_studentportal/assets/img/active-user_9572776.png" alt="user" class="img-class"/>
            <div class="head-class"><h4>Registered Users </h4><p>100+</p></div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <img src="components/com_studentportal/assets/img/database.png" alt="user" class="img-class"/>
            <div class="head-class"><h4>Total Space</h4><p>50/64GB</p></div></div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body"> 
            <img src="components/com_studentportal/assets/img/project-management.png" alt="user" class="img-class"/>
            <div class="head-class"><h4>Issues Solved</h4><p>10+</p></div></div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body"> 
            <img src="components/com_studentportal/assets/img/download.png" alt="user" class="img-class"/>
            <div class="head-class"><h4> Total Downloads</h4><p>1K+</p></div></div>
    </div>
</div><br><br><br>

<!-- <p class="highcharts-description">
    <strong>The Admin Portal</strong> serves as a centralized dashboard for managing all student-related activities within the system. 
    It allows administrators to register new students, view and update existing records, and oversee overall student data efficiently. 
    With intuitive navigation and secure access, the portal simplifies complex tasks like data management and performance tracking. 
    It ensures smooth administrative operations by providing real-time insights and control over the entire student database.
</p><br><br><br><br> -->

<div id="container" style="height: 400px;"></div>
<div class="charts-container" style="margin-top:40px">
    <div id="chart1" class="chart-box"></div>
    <div id="chart2" class="chart-box"></div>
</div>
<div id="number3" style="height: 400px; margin-top: 40px;"></div><br>
<div class="table"><h1 style="text-align: center;">Some data of Students</h1></div>
<div id="table"></div><br><br>
<figure class="highcharts-figure">
    <div id="container-speed" class="chart-container"></div>
    <div id="container-rpm" class="chart-container"></div>
</figure><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        const gaugeOptions = {
    chart: {
        type: 'solidgauge'
    },

    title: null,

    pane: {
        center: ['50%', '85%'],
        size: '140%',
        startAngle: -90,
        endAngle: 90,
        background: {
            backgroundColor: 'var(--highcharts-neutral-color-3, #fafafa)',
            borderColor: 'var(--highcharts-neutral-color-20, #ccc)',
            borderRadius: 5,
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
        }
    },

    exporting: {
        enabled: false
    },

    tooltip: {
        enabled: false
    },

    // the value axis
    yAxis: {
        stops: [
            [0.1, '#55BF3B'], // green
            [0.5, '#DDDF0D'], // yellow
            [0.9, '#DF5353'] // red
        ],
        lineWidth: 0,
        tickWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: -70
        },
        labels: {
            y: 16
        }
    },

    plotOptions: {
        solidgauge: {
            borderRadius: 3,
            dataLabels: {
                y: 5,
                borderWidth: 0
            }
        }
    }
};

// The speed gauge
const chartSpeed = Highcharts.chart(
    'container-speed', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 200,
            title: {
                text: 'Speed'
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'Speed',
            data: [80],
            dataLabels: {
                format:
                '<div style="text-align:center">' +
                '<span style="font-size:25px">{y}</span><br/>' +
                '<span style="font-size:12px;opacity:0.4">km/h</span>' +
                '</div>'
            },
            tooltip: {
                valueSuffix: ' km/h'
            }
        }]

    }));

// The RPM gauge
const chartRpm = Highcharts.chart(
    'container-rpm', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 5,
            title: {
                text: 'RPM'
            }
        },

        series: [{
            name: 'RPM',
            data: [1],
            dataLabels: {
                format:
                '<div style="text-align:center">' +
                '<span style="font-size:25px">{y:.1f}</span><br/>' +
                '<span style="font-size:12px;opacity:0.4">' +
                '* 1000 / min' +
                '</span>' +
                '</div>'
            },
            tooltip: {
                valueSuffix: ' revolutions/min'
            }
        }]

    }));

// Bring life to the dials
setInterval(function () {
    // Speed
    let point,
        newVal,
        inc;

    if (chartSpeed) {
        point = chartSpeed.series[0].points[0];
        inc = Math.round((Math.random() - 0.5) * 100);
        newVal = point.y + inc;

        if (newVal < 0 || newVal > 200) {
            newVal = point.y - inc;
        }

        point.update(newVal);
    }

    // RPM
    if (chartRpm) {
        point = chartRpm.series[0].points[0];
        inc = Math.random() - 0.5;
        newVal = point.y + inc;

        if (newVal < 0 || newVal > 5) {
            newVal = point.y - inc;
        }

        point.update(newVal);
    }
}, 2000);


   Grid.grid('table', {
    dataTable: {
        columns: {
            name: [<?php foreach ($this->tables as $row) {
                    echo "'" . $row->name . "',";
                } ?>
            ],
            email: [<?php foreach ($this->tables as $row) {
                    echo "'" . $row->email . "',";
                } ?>],
          mobile : [<?php foreach ($this->tables as $row) {
                    echo "'" . $row->mobile . "',";
                } ?>],
             gender: [<?php foreach ($this->tables as $row) {
                    echo "'" . $row->gender . "',";
                } ?>],
           state: [<?php foreach ($this->tables as $row) {
                    echo "'" . $row->state . "',";
                } ?>],
            tenthh: [<?php foreach ($this->tables as $row) {
                    echo "'" . $row->tenthh . "',";
                } ?>],
            twelveth: [<?php foreach ($this->tables as $row) {
                    echo "'" . $row->twelveth . "',";
                } ?>]
        }
    },
    rendering: {
        theme: 'my-theme'
    },
    columns: [
        { id: 'name', header: { format: 'NAME' } },
        { id: 'email', header: { format: 'EMAIL' } },
        { id: 'gender', header: { format: 'MOBILE' } },
        { id: 'mobile', header: { format: 'GENDER' } },
        { id: 'state', header: { format: 'STATE' } },
        { id: 'tenthh', header: { format: 'TENTH %' } },
        { id: 'twelveth', header: { format: 'TWELVETH %' } },
    ]
});



        Highcharts.chart('chart1', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Student Year'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Year',
                colorByPoint: true,
                data: [<?php
                $yearCount = array();
                foreach ($this->year as $row) {
                    $yr = $row->year;
                    if (!isset($yearCount[$yr])) {
                        $yearCount[$yr] = 1;
                    } else {
                        $yearCount[$yr]++;
                    }
                }

                $total = array_sum($yearCount);

                $dataArr = array();
                foreach ($yearCount as $year => $count) {
                    $percentage = ($count / $total) * 100;
                    $dataArr[] = "{ name: '$year', y: " . round($percentage, 2) . " }";
                }

                echo implode(",", $dataArr);
                ?>]
            }]
        });

        Highcharts.chart('chart2', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Student Branch'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Branch',
                colorByPoint: true,
                data: [<?php
                $branchCount = array();
                foreach ($this->branch as $row) {
                    $br = $row->branch;
                    if (!isset($branchCount[$br])) {
                        $branchCount[$br] = 1;
                    } else {
                        $branchCount[$br]++;
                    }
                }

                $total = array_sum($branchCount);

                $dataArr = array();
                foreach ($branchCount as $branch => $count) {
                    $percentage = ($count / $total) * 100;
                    $dataArr[] = "{ name: '$branch', y: " . round($percentage, 2) . " }";
                }

                echo implode(",", $dataArr);
                ?>]
            }]
        });


        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: '10th/12th Marks of Students'
            },
            xAxis: {
                categories: [
                    <?php
                    $names = array();
                    foreach ($this->marksdata as $student) {
                        $names[] = "'" . addslashes($student->name) . "'";
                    }
                    echo implode(',', $names);
                    ?>
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Marks in Percentage'
                }
            },
            tooltip: {
                valueSuffix: ' %'
            },
            series: [{
                name: '10th Marks',
                data: [
                    <?php
                    $marks = array();
                    foreach ($this->marksdata as $student) {
                        $marks[] = (float) $student->tenthh;
                    }
                    echo implode(',', $marks);
                    ?>
                ]
            },
            {
                name: '12th Marks',
                data: [
                    <?php
                    $marks = array();
                    foreach ($this->marksdata as $student) {
                        $marks[] = (float) $student->twelveth;
                    }
                    echo implode(',', $marks);
                    ?>
                ]
            }]
        });

        Highcharts.chart('number3', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Skills and Interests'
            },
            xAxis: {
                // categories: ['Skills & Interests'],
                title: {
                    text: null
                },
                gridLineWidth: 1,
                lineWidth: 0
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'numbers',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                },
                gridLineWidth: 0
            },
            tooltip: {
                valueSuffix: ''
            },
            plotOptions: {
                bar: {
                    borderRadius: '50%',
                    dataLabels: {
                        enabled: true
                    },
                    groupPadding: 0.1
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 80,
                floating: true,
                borderWidth: 1,
                backgroundColor: 'var(--highcharts-background-color, #ffffff)',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [ <?php
        $skCount = array();
        foreach ($this->sandk as $row) {
            // Combine both skills and interests into one array
            $allSkills = array_merge(
                explode(',', $row->skills),
                explode(',', $row->interests)
            );

            foreach ($allSkills as $skill) {
                $skill = trim($skill);
                if (!empty($skill)) {
                    if (!isset($skCount[$skill])) {
                        $skCount[$skill] = 1;
                    } else {
                        $skCount[$skill]++;
                    }
                }
            }
        }

        $dataArr = array();
        foreach ($skCount as $skill => $count) {
            $dataArr[] = "{ name: '$skill', data: [$count] }";
        }

        echo implode(",", $dataArr);
        ?>]
        });

    })
</script>