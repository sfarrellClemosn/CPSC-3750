// navbar.js
document.addEventListener('DOMContentLoaded', () => {
        fetch('navbar.html')
          .then(response => response.text())
          .then(data => {
            document.getElementById('navbar').innerHTML = data;
          })
          fetch('./navbar.html')
          .then(response => response.text())
          .then(data => {
            document.getElementById('navbar').innerHTML = data;
          })
          .catch(error => console.error('Error loading navigation bar:', error));
      });