<?php

// Загрузка конфиг-файла
$config = require("config/config.php");
?><html>
<head>
    <title>Мастер установки</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-size: 1em;
        }
        body {
            background: #f5f5f5;
        }
        .header {
            display: block;
            width: 100%;
            padding: 1em;
            background: #fdc899;
        }
        .status {
            padding: 1em;
            margin: 1em;
            border: 1px dotted gray;
            border-radius: 10px;
            background: #fff;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
        pre {
            background: gray;
            padding: 1em;
        }
        .spoiler {
            margin: .5em;
            padding: .5em;
            background: #f7f4f4;
        }
    </style>
</head>
<body>
<div class="header">
    <h1>Вас приветствует мастер установки <span>Digital-Solution.CMS</span></h1>
</div>
<div class="body">
