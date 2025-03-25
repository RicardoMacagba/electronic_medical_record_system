<canvas id="vitalChart" data-readings="{{ json_encode($readings) }}"></canvas>

<script>
new Chart(document.getElementById('vitalChart'), {
    type: 'line',
    data: {
        datasets: [{
            label: 'Blood Pressure Trend',
            data: JSON.parse(chart.dataset.readings)
        }]
    }
});
</script>