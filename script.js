let header = document.querySelector('header');
let count = 0;
let txtIndex = 0;
let currentTxt = '';
let words = '';

// Efek mengetik
const txtElement = ['Ni Made Shavitri Mustikayani'];
(function ngetik() {
  if (count == txtElement.length) {
    count = 0;
  }

  currentTxt = txtElement[count];

  words = currentTxt.slice(0, ++txtIndex);
  document.querySelector('.efek-ngetik').textContent = words;

  if (words.length == currentTxt.length) {
    count++;
    txtIndex = 0;
  }

  setTimeout(ngetik, 200);
})();

// Mode Red
document.addEventListener('DOMContentLoaded', function () {
  const redmode = document.getElementById('redmode');

  redmode.addEventListener('click', function () {
    if (redmode.textContent === '🌙') {
      redmode.textContent = '☀️';
      document.body.classList.add('active');
    } else {
      redmode.textContent = '🌙';
      document.body.classList.remove('active');
    }
  });
});
