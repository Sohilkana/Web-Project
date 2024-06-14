<?php
include('ownerconn.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Veiled Page</title>
  <style>
    body {
      background-image: url('bg.jpg');
      /* Replace 'background.jpg' with your image URL */
      background-size: cover;
      backdrop-filter: blur(3px);
      background-position: center;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    #container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    #leftDiv,
    #rightDiv {
      width: 45%;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.7);
      /* Adjust opacity as needed */
      border-radius: 10px;
    }

    #leftDiv {
      margin-right: 20px;
    }

    #rightDiv {
      margin-left: 20px;
      background: transparent;
    }

    #buttonContainer {
      text-align: center;
    }

    button {
      padding: 10px 20px;
      margin: 0 5px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 20px;
    }

    button:hover {
      padding: 10px 20px;
      margin: 0 5px;
      background-color: #1066c2;
      color: #ececec;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 18px;
    }
  </style>
</head>

<body>
  <div id="container">
    <div id="leftDiv">
      <p id="randomParagraph"></p>
    </div>
    <div id="rightDiv">
      <div id="buttonContainer">
        <button id="button1">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="bi bi-clipboard-plus" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7" />
            <path
              d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z" />
            <path
              d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z" />
          </svg>
          Add Data</button>
        <button id="button2">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="bi bi-clipboard-data-fill" viewBox="0 0 16 16">
            <path
              d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
            <path
              d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5zM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1" />
          </svg>
          Order Details</button>
      </div>
    </div>
  </div>

  <script>
    // Random paragraph content
    const paragraphs = [
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
      "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
      "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
      "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.",
      "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    ];

    // Function to get a random paragraph
    function getRandomParagraph() {
      return paragraphs[Math.floor(Math.random() * paragraphs.length)];
    }

    // Function to update the paragraph content
    function updateParagraph() {
      document.getElementById('randomParagraph').textContent = getRandomParagraph();
    }

    // Event listener for button click
    document.getElementById('button1').addEventListener('click', updateParagraph);
    document.getElementById('button2').addEventListener('click', updateParagraph);

    // Initial paragraph update
    updateParagraph();
  </script>
</body>

</html>