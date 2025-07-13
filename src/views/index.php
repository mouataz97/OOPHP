<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home Page</h1>
    <hr />
    <?php if (!empty($invoice)): ?>
        <p>Invoice ID: <?php echo htmlspecialchars($invoice['id'] ?? ''); ?></p>
        <p>Invoice Amount: <?php echo htmlspecialchars($invoice['amount'] ?? ''); ?></p>
        <p>Invoice User: <?php echo htmlspecialchars($invoice['full_name'] ?? ''); ?></p>
    <?php else: ?>
        <p>No invoice found.</p>
    <?php endif; ?>
</body>
</html>
