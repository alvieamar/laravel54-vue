<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div id="app">
        <h1>Chat Room</h1>
        <chat-log :messages="messages"></chat-log>
        <chat-composer v-on:messagesent="addMessage"></chat-composer>
    </div>
<script>
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>
<script src="/js/app.js" charset="utf-8"></script>
</body>
</html>
