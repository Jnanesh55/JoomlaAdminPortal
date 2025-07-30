document.addEventListener('DOMContentLoaded', function () {
    var dropArea = document.getElementById('drop-area');
    var fileInput = document.getElementById('fileElem');
    var fileNameDisplay = document.getElementById('file-name-display'); // New line

    if (!dropArea || !fileInput) return;

    dropArea.addEventListener('click', () => fileInput.click());

    ['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, function (e) {
            e.preventDefault();
            e.stopPropagation();
            dropArea.classList.add('highlight');
        }, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, function (e) {
            e.preventDefault();
            e.stopPropagation();
            dropArea.classList.remove('highlight');
        }, false);
    });

    dropArea.addEventListener('drop', function (e) {
        let dt = e.dataTransfer;
        let files = dt.files;
        if (files.length) {
            fileInput.files = files;
            fileNameDisplay.innerText = files[0].name; // Show file name
        }
    });

    fileInput.addEventListener('change', function () {
        if (fileInput.files.length > 0) {
            fileNameDisplay.innerText = fileInput.files[0].name; // Show file name
        }
    });
});
