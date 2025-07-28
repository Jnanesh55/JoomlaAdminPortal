(function () {
  const style = document.createElement('style');
  style.innerHTML = `
    /* Body default */
    body {
      background-color: white;
      color: black;
      transition: background-color 0.3s, color 0.3s;
    }

    body.dark-mode {
      background-color: #121212 !important;
      color: #e0e0e0 !important;
    }

    /* Headings */
    body.dark-mode h1, body.dark-mode h2, body.dark-mode h3, 
    body.dark-mode h4, body.dark-mode h5 {
      color: #060404ff !important;
    }

    /* DataTables search box and inputs */
    body.dark-mode input,
    body.dark-mode textarea,
    body.dark-mode select {
      background-color: #555353ff !important;
      color: #fff !important;
      border: 1px solid #555 !important;
    }

    /* Table styling */
    body.dark-mode table,
    body.dark-mode .dataTables_wrapper {
      background-color: #575555ff !important;
      color: #eee !important;
    }

    body.dark-mode table td,
    body.dark-mode table th {
      background-color: #646161ff !important;
      color: #fff !important;
    }

    // /* Buttons */
    // body.dark-mode .btn,
    // body.dark-mode button,
    // body.dark-mode input[type="button"],
    // body.dark-mode input[type="submit"] {
    //   background-color: #333 !important;
    //   color: #fff !important;
    //   border: 1px solid #888;
    // }


  body.dark-mode .sidebar,
body.dark-mode #profile-container,
body.dark-mode .custom-sidebar {
  background-color: #5f5c5cff !important;
  color: #2196f3 !important; /* Blue text color */
}


    /* Profile dropdown */
    body.dark-mode .profile-dropdown {
      background-color: #1e1e1e !important;
      color: #fff;
    }

    /* Links */
    body.dark-mode a {
      color: #90caf9;
    }

    body.dark-mode a:hover {
      text-decoration: underline;
    }
  `;
  document.head.appendChild(style);
})();

// Toggle function
function toggleDarkMode() {
  document.body.classList.toggle('dark-mode');
  const isDark = document.body.classList.contains('dark-mode');
  localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');
}

// Apply saved mode
(function () {
  const savedMode = localStorage.getItem('darkMode');
  if (savedMode === 'enabled') {
    document.body.classList.add('dark-mode');
  }
})();
