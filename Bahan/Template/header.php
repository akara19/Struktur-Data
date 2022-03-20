<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;700&display=swap" rel="stylesheet"> 

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Zen Kaku Gothic New', sans-serif;
      font-size: 16px;
    }

    nav {
      background-color: #FFFFFF;
      border-bottom: 1px solid #E7E6E1;
      display: flex;
    }

    .nav-item {
      position: relative;
    }
    .nav-link {
      display: block;
      padding: 20px 15px;
      margin: 0;
      color: #314E52;
      text-decoration: none;
    }

    .nav-link:after {
      content: "";
      display: none;
      height: 2px;
      width: 100%;
      position: absolute;
      bottom: -1px;
      left: 0;
      background-color: #11698E;
    }
    .nav-link.active, .nav-link:hover {
      color: #11698E;
    }
    .nav-link.active:after, .nav-link:hover:after {
      display: block;
    }

    .nav-item:hover .nav-dropdown {
      display: block;
    }
    .nav-dropdown {
      position: absolute;
      display: none;
      z-index: 999;
      top: 58px;
      left: 0px;
      width: 200px;
      padding-bottom: 10px;
      border-radius: 3px;
      background-color: #fff;
      border: 1px solid #E8E8E8;
    }
    .nav-dropdown a {
      display: block;
      padding: 10px;
      color: #314E52;
      text-decoration: none;
    }
    .nav-dropdown a:hover {
      background-color: #F6F6F6;
    }

    nav.biru {
      background-color: #325288; /* warna bg navbar */
      border-color: #325288; /* warna bg navbar */
    }
    nav.biru .nav-link:after {
      background-color: #F2A154; /* warna border bawah navbar */
    }
    nav.biru .nav-link {
      color: #F4EEE8; /* warna teks navbar */
    }
  </style>
</head>
<body>