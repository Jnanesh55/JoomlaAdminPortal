<?php defined('_JEXEC') or die('Restricted access'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ZingSoft Demo</title>
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script src="https://cdn.zingchart.com/zingchart-core.min.js"></script>
<script>zingchart.MODULESDIR="https://cdn.zingchart.com/modules/";</script>
</head>

<body>
    <div id="myChart" class="chart--container"> <a class="zc-ref" href="https://www.zingchart.com/">Powered by
            ZingChart</a> </div>
</body>

</html>
<?php
// Convert object list to array of state names
$stateNames = array();
foreach ($this->statedata as $obj) {
    if (isset($obj->state)) {
        $stateNames[] = $obj->state;
    }
}

// Now count occurrences
$stateCount = array_count_values($stateNames);
$karnatakaCount = isset($stateCount['Karnataka']) ? $stateCount['Karnataka'] : 0;
$MaharastraCount = isset($stateCount['Maharastra']) ? $stateCount['Maharastra'] :0;
$KeralaCount = isset($stateCount['kerala']) ? $stateCount['kerala'] :0;
$TamilCount = isset($stateCount['Tamilnadu']) ? $stateCount['Tamilnadu'] :0;
$TelanganaCount = isset($stateCount['Telangana']) ? $stateCount['Telangana'] :0;
?>
<script>
    document.addEventListener('DOMContentLoaded', function () {

        let chartConfig = {
  shapes: [
    {
      type: 'zingchart.maps',
      options: {
        bbox: [67.177, 36.494, 98.403, 6.965], // get bbox from zingchart.maps.getItemInfo('world-countries','ind');
        ignore: ['IND'], // ignore India because we are rendering a more specific India map below
        name: 'world.countries',
        panning: false, // turn of zooming. Doesn't work with bounding box
        style: {
          tooltip: {
            borderColor: '#000',
            borderWidth: '2px',
            fontSize: '18px'
          },
          controls: {
            visible: false // turn of zooming. Doesn't work with bounding box
          },
          hoverState: {
            alpha: .28
          }
        },
        zooming: false // turn of zooming. Doesn't work with bounding box
      }
    },
    {
      type: 'zingchart.maps',
      options: {
        name: 'ind',
        panning: false, // turn of zooming. Doesn't work with bounding box
        zooming: false,
        scrolling: false,
        style: {
          tooltip: {
            borderColor: '#000',
            borderWidth: '2px',
            fontSize: '18px'
          },
          borderColor: '#000',
          borderWidth: '2px',
          controls: {
            visible: false, // turn of zooming. Doesn't work with bounding box

          },
          hoverState: {
            alpha: .28
          },
          items: {
            KA: {
              tooltip: {
                text: "Karnataka: <?php echo $karnatakaCount; ?> students",
                backgroundColor: '#ff5722'
              },
              backgroundColor: '#ff5722',
              label: {
                visible: true
              }
            },
            MH: {
              tooltip: {
                text: "Maharastra: <?php echo $MaharastraCount; ?> students",
                backgroundColor: '#ff9800'
              },
              backgroundColor: '#ff9800',
              label: {
                visible: true
              }
            },
            TL: {
              tooltip: {
                text: "Telangana: <?php echo $TelanganaCount; ?> students",
                backgroundColor: '#00AE4D'
              },
              backgroundColor: '#00AE4D',
              label: {
                visible: true
              }
            },
            KL: {
              tooltip: {
                text: "Kerala: <?php echo $KeralaCount; ?> students",
                backgroundColor: '#ff9800'
              },
              backgroundColor: '#ff9800',
              label: {
                visible: true
              }
            },
            TN: {
              tooltip: {
                text: "Tamilnadu: <?php echo $TamilCount; ?> students",
                backgroundColor: '#00bcd4'
              },
              backgroundColor: '#00bcd4',
              label: {
                visible: true
              }
            }
          },
          label: { // text displaying. Like valueBox
            fontSize: '15px',
            visible: false
          }
        }
      }
    }
  ]
};

zingchart.loadModules('maps,maps-ind,maps-world-countries');
zingchart.render({
  id: 'myChart',
  data: chartConfig,
  height: '100%',
  width: '100%',
});
    });
</script>