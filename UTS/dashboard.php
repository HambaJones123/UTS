<canvas id="myChart1" style="width:100%;max-width:100%"></canvas>
<canvas id="myChart2" style="width:100%;max-width:100%"></canvas>
<script>
    {
    const xValues = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun"];
    const yValues = [55, 49, 44, 24, 15, 56];
    const barColors = ["red", "red","red","red","red"];

    const xValues2 = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun"];
    const yValues2 = [55, 49, 44, 24, 15, 56];
    const barColors2 = ["green", "green","green","green","green"];

    const ctx = document.getElementById("myChart1");
    const ctx2 = document.getElementById("myChart2");


new Chart(ctx, {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    plugins: {
        legend: {display: false},
        title: {
            display: true,
            text: "Grafik Penjualan",
            font: {size: 16}
        }
    }
  }
});

new Chart(ctx2, {
  type: "bar",
  data: {
    labels: xValues2,
    datasets: [{
      backgroundColor: barColors2,
      data: yValues2
    }]
  },
  options: {
    plugins: {
        legend: {display: false},
        title: {
            display: true,
            text: "Grafik Pembelian",
            font: {size: 16}
        }
    }
  }
});


    }





</script>