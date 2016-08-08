$(function() {
    $.ajax({

        url: '../dataMF.json',
        type: 'GET',
        success: function(data) {
            chartData = data;
            var chartProperties = {
                "caption": "Atendimento por Gênero",
                "subCaption": "Macaxeira Beer",
                "paletteColors": "#0075c2,#1aaf5d,#f2c500,#f45b00,#8e0000",
                "bgColor": "#ffffff",
                "showBorder": "0",
                "use3DLighting": "0",
                "showShadow": "0",
                "enableSmartLabels": "0",
                "startingAngle": "310",
                "showLabels": "0",
                "showPercentValues": "1",
                "showLegend": "1",
                "legendShadow": "0",
                "legendBorderAlpha": "0",
                "centerLabel": "Tota de $label: $value",
                "centerLabelBold": "1",
                "showTooltip": "0",
                "decimals": "0",
                "captionFontSize": "14",
                "subcaptionFontSize": "14",
                "subcaptionFontBold": "0"
            };

            apiChart = new FusionCharts({
                type: 'doughnut2d',
                renderAt: 'chart-container',
                width: '100%',
                height: '70%',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            apiChart.render();
        }
    });
});