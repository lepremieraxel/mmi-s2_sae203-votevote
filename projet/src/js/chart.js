const myCanvas = document.querySelector('.chart');
const data = {
  labels: [
    'Réponse1',
    'Réponse2',
    'Réponse3',
    'Réponse4',
    'Réponse5',
    'Réponse6'
 ],
  datasets: [{
    label: 'Total',
    data: [9, 7, 41, 8, 22, 13],
    fill: true,
    backgroundColor: 'rgba(223, 57, 129, 0.7)',
    borderColor: '#df3981',
    pointBackgroundColor: '#df3981',
    pointBorderColor: '#f0f4ef',
    pointHoverBackgroundColor: '#f0f4ef',
    pointHoverBorderColor: '#df3981'
  }]
};
const myChart = new Chart(myCanvas, {
  type: 'radar',
  data: data,
  options: {
    plugins: {
      legend: {
        display: false
      }
    },
    aspectRatio: 1,
    elements: {
      line: {
        borderWidth: 3
      },
      point: {
        radius: 5
      }
    },
    scales: {
      r: {
        ticks: {
          backdropColor: "rgba(0, 0, 0, 0)",
        },
        suggestedMax: 100,
        suggestedMin: 0
      }
    }
  },
}); 