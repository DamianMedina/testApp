<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Site Title-->
    <title>SomosGalt</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="plugins/css/fullcalendar.css">
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arimo:400,700%7CRoboto:400,300,500,700">
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body class="dashboard-page">
    <!--
    -----------------------------------------------------------+
    <body> Helper Classes:
    ---------------------------------------------------------------+
    '.sb-l-o' - Sets Left Sidebar to "open"
    '.sb-l-m' - Sets Left Sidebar to "minified"
    '.sb-l-c' - Sets Left Sidebar to "closed"
    '.sb-r-o' - Sets Right Sidebar to "open"
    '.sb-r-c' - Sets Right Sidebar to "closed"
    ---------------------------------------------------------------+
    Example: <body class="example-page sb-l-o sb-r-c">
    Results: Sidebar left Open, Sidebar right Closed
    -------------------------------------------------------------
    -->
    <!-- Start: Theme Preview Pane-->
    @include('partials.rightsidebar')   
    <!-- Start: Main-->
    @include('partials.main')
    <!-- core scripts-->
    <script src="plugins/core.min.js"></script>
    <!-- Theme Javascript-->
    <script src="assets/js/utility/utility.js"></script>
    <script src="assets/js/demo/demo.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- Widget Javascript-->
    <script src="assets/js/demo/widgets.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function () {
        "use strict";
        // Init Demo JS
        Demo.init();
        // Init Theme Core
        Core.init();
        $(document).ready(function () {
          demoHighCharts.init();
          runVectorMaps();
          $(window).trigger('resize');
        });
        // Init plugins for ".calendar-widget"
        // plugins: FullCalendar
        //
        $('#calendar-widget').fullCalendar({
          contentHeight: 460
        });
        // Init plugins for ".task-widget"
        // plugins: Custom Functions + jQuery Sortable
        //
        var taskWidget = $('div.task-widget');
        var taskItems = taskWidget.find('li.task-item');
        var currentItems = taskWidget.find('ul.task-current');
        var completedItems = taskWidget.find('ul.task-completed');
        // Init jQuery Sortable on Task Widget
        taskWidget.sortable({
          items: taskItems, // only init sortable on list items (not labels)
          handle: '.task-menu',
          axis: 'y',
          connectWith: ".task-list",
          update: function (event, ui) {
            var Item = ui.item;
            var ParentList = Item.parent();
            // If item is already checked move it to "current items list"
            if (ParentList.hasClass('task-current')) {
              Item.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
            }
            if (ParentList.hasClass('task-completed')) {
              Item.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
            }
          }
        });
        // Custom Functions to handle/assign list filter behavior
        taskItems.on('click', function (e) {
          e.preventDefault();
          var This = $(this);
          var Target = $(e.target);
          if (Target.is('.task-menu') && Target.parents('.task-completed').length) {
            This.remove();
            return;
          }
          if (Target.parents('.task-handle').length) {
            // If item is already checked move it to "current items list"
            if (This.hasClass('item-checked')) {
              This.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
            }
            // Otherwise move it to the "completed items list"
            else {
              This.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
            }
          }
        });
        var highColors = [bgWhite, bgWhite, bgWarningL, bgWhite];
        // Chart data
        var seriesData = [{
          name: 'Phones',
          data: [5.0, 9, 17, 22, 19, 11.5, 5.2, 9.5, 11.3, 15.3, 19.9, 24.6],
          marker: {
            fillColor: '#ffc841'
          }
        }, {
          name: 'Notebooks',
          data: [2.9, 3.2, 4.7, 5.5, 8.9, 12.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8],
          marker: {
            fillColor: '#e27d7f'
          }
        }];
        var ecomChart = $('#ecommerce_chart1');
        if (ecomChart.length) {
          ecomChart.highcharts({
            credits: false,
            colors: highColors,
            chart: {
              backgroundColor: 'transparent',
              className: '',
              type: 'line',
              zoomType: 'x',
              panning: true,
              panKey: 'shift',
              marginTop: 45,
              marginRight: 0,
              spacingRight: 0,
            },
            title: {
              text: null
            },
            xAxis: {
              gridLineColor: "rgba(255, 255, 255, 0)",
              lineColor: "rgba(255, 255, 255, 0)",
              tickColor: "rgba(255, 255, 255, 0)",
              categories: ['JAN', 'FEB', 'MAR', 'APR',
                'MAY', 'JUN', 'JUL', 'AUG',
                'SEP', 'OCT', 'NOV', 'DEC'
              ],
              labels: {
                style: {
                  color: 'rgba(255, 255, 255,0.4)',
                  fontWeight: 'normal',
                  fontSize: '12px'
                }
              }
            },
            yAxis: {
              gridLineColor: "rgba(255, 255, 255, 0)",
              lineColor: "rgba(255, 255, 255, 0)",
              tickColor: "rgba(255, 255, 255, 0)",
              title: {
                text: null
              },
              min: 0,
              tickInterval: 5,
              labels: {
                style: {
                  color: 'rgba(255, 255, 255,0.4)',
                  fontWeight: 'normal',
                  fontSize: '12px'
                }
              }
            },
            legend: {
              enabled: true,
              floating: true,
              symbol: 'circle',
              align: 'left',
              verticalAlign: 'top',
              padding: 10,
              x: 25,
              y: 10,
              itemStyle: {
                color: '#fff',
                fontWeight: 'normal',
                fontFamily: 'Arimo',
                fontSize: '14px',
                hover: {
                  enabled: false,
                  fill: '#a288d5'
                }
              }
            },
            plotOptions: {
              spline: {
                lineWidth: 2
              },
              series: {
                marker: {
                  enabled: true,
                  symbol: 'circle',
                  radius: 5,
                  lineColor: "#fff",
                  fillColor: '#ffc841',
                  lineWidth: 2
                }
              },
              line: {
                lineWidth: 2,
                marker: {
                  enabled: true,
                  symbol: 'circle',
                  radius: 5,
                  states: {
                    hover: {
                      enabled: true
                    }
                  }
                },
                states: {
                  hover: {
                    lineWidth: 2
                  }
                },
                threshold: null
              }
            },
            series: seriesData
          });
      
        }
        // Widget VectorMap
        function runVectorMaps() {
          // Jvector Map Plugin
          var runJvectorMap = function () {
            // Data set
            var mapData = [900, 700, 350, 500];
            // Init Jvector Map
            $('#WidgetMap').vectorMap({
              map: 'us_lcc_en',
              backgroundColor: 'transparent',
              series: {
                markers: [{
                  attribute: 'r',
                  scale: [3, 7],
                  values: mapData
                }]
              },
              regionStyle: {
                initial: {
                  fill: '#E8E8E8'
                },
                hover: {
                  "fill-opacity": 0.3
                }
              },
              markerStyle: {
                initial: {
                  fill: '#a288d5',
                  stroke: '#b49ae0',
                  "fill-opacity": 1,
                  "stroke-width": 10,
                  "stroke-opacity": 0.3,
                  r: 3
                },
                hover: {
                  stroke: 'black',
                  "stroke-width": 2
                },
                selected: {
                  fill: 'blue'
                },
                selectedHover: {}
              },
            });
            // Manual code to alter the Vector map plugin to
            // allow for individual coloring of countries
            var states = ['US-CA', 'US-TX', 'US-MO',
              'US-NY'
            ];
            var colors = [bgSmalt, bgPrimary, bgInfo, bgTwilight];
            $.each(states, function (i, e) {
              $("#WidgetMap path[data-code=" + e + "]").css({
                fill: colors[i]
              });
            });
          }
          if ($('#WidgetMap').length) {
            runJvectorMap();
          }
        }
        var dbSelect = $(".rd-mailform-select"), i = 0;
        if (dbSelect.length) {
          for (i = 0; i < dbSelect.length; i++) {
            var dropdownSelectItem = dbSelect[i];
            $(dropdownSelectItem).RDSelectMenu();
          }
        }
      });
    </script>
  </body>
</html>