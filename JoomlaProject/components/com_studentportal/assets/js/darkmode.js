(function () {
  const style = document.createElement('style');
  style.innerHTML = `
    body {
      background-color: white;
      color: black;
      transition: background-color 0.3s, color 0.3s;
    }

    body.dark-mode {
      background-color: #121212 !important;
      color: #e0e0e0 !important;
    }

    body.dark-mode h1, 
    body.dark-mode h2, 
    body.dark-mode h3, 
    body.dark-mode h4, 
    body.dark-mode h5 {
      color: #ffffff !important;
    }

    body.dark-mode input,
    body.dark-mode textarea,
    body.dark-mode select {
      background-color: #333 !important;
      color: #fff !important;
      border: 1px solid #666 !important;
    }

    body.dark-mode table,
    body.dark-mode .dataTables_wrapper {
      background-color: #333 !important;
      color: #eee !important;
    }

    body.dark-mode table td,
    body.dark-mode table th {
      background-color: #444 !important;
      color: #fff !important;
    }

    body.dark-mode .sidebar,
    body.dark-mode #profile-container,
    body.dark-mode .custom-sidebar {
      background-color: #2a2a2a !important;
      color: #e0e0e0 !important;
    }

    body.dark-mode .profile-dropdown {
      background-color: #1e1e1e !important;
      color: #fff !important;
    }

    body.dark-mode a {
      color: #90caf9 !important;
    }

    body.dark-mode a:hover {
      text-decoration: underline;
    }

    body.dark-mode .uk-button,
    body.dark-mode .uk-card,
    body.dark-mode .uk-modal-dialog {
      background-color: #2e2e2e !important;
      color: white !important;
    }

    body.dark-mode .uk-input,
    body.dark-mode .uk-select,
    body.dark-mode .uk-textarea {
      background-color: #2b2b2b !important;
      color: #fff !important;
      border-color: #666 !important;
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

// Apply saved mode on load
(function () {
  const savedMode = localStorage.getItem('darkMode');
  if (savedMode === 'enabled') {
    document.body.classList.add('dark-mode');
  }
})();
