document.addEventListener("DOMContentLoaded", function() {
const starvationData = [230000, 220000, 210000, 200000, 195000]; 

const wastageData = [67.5, 69.2, 70.8, 72.3, 74]; 

const hungerIndexData = [103, 102, 101, 99, 98]; 

    const ctxStarvation = document.getElementById('starvationChart').getContext('2d');
    new Chart(ctxStarvation, {
        type: 'line',
        data: {
            labels: ['2018', '2019', '2020', '2021', '2022'],
            datasets: [{
                label: 'Deaths Due to Starvation',
                data: starvationData,
                borderColor: '#4CAF50',
                backgroundColor: 'rgba(76, 175, 80, 0.2)',
                fill: true,
                tension: 0.1
            }]
        },
        options: {
            responsive: true,
            interaction: {
                mode: 'index',
                intersect: false,
            },
            plugins: {
                tooltip: {
                    mode: 'index',
                    intersect: false,
                },
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const ctxWastage = document.getElementById('wastageChart').getContext('2d');
    new Chart(ctxWastage, {
        type: 'bar',
        data: {
            labels: ['2018', '2019', '2020', '2021', '2022'],
            datasets: [{
                label: 'Food Wastage (in million tons)',
                data: wastageData,
                backgroundColor: '#8BC34A',
                borderColor: '#8BC34A',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const ctxHungerIndex = document.getElementById('hungerIndexChart').getContext('2d');
    new Chart(ctxHungerIndex, {
        type: 'radar',
        data: {
            labels: ['2018', '2019', '2020', '2021', '2022'],
            datasets: [{
                label: 'Global Hunger Index Ranking',
                data: hungerIndexData,
                backgroundColor: 'rgba(139, 195, 74, 0.2)',
                borderColor: '#8BC34A',
                pointBackgroundColor: '#8BC34A',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: '#8BC34A'
            }]
        },
        options: {
            responsive: true,
            scales: {
                r: {
                    angleLines: {
                        display: false
                    },
                    suggestedMin: 90,
                    suggestedMax: 110
                }
            }
        }
    });
});
