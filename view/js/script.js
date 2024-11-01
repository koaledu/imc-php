// @ts-check

const hamBurger = document.querySelector(".toggle-btn");

hamBurger?.addEventListener("click", function () {
  document.querySelector("#sidebar")?.classList.toggle("expand");
});

// Chart

const ctx = document.getElementById("myChart1");
const cty = document.getElementById("myChart2");

new Chart(ctx, {
  type: "pie",
  data: {
    datasets: [
      {
        data: [60, 40],
        borderWidth: 1,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

new Chart(cty, {
  type: "pie",
  data: {
    datasets: [
      {
        data: [60, 40],
        borderWidth: 1,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});
