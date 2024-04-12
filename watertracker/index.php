<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Intake Tracker</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Water Is Life</h1>
    </header>
    <main>
        <section class="tracker">
            <h2>Track Your Water Intake</h2>
            <p>Enter the amount of water you drink throughout the day to stay hydrated!</p>
            <form action="submit.php" method="POST">
                <label for="amount">Amount (ml):</label>
                <input type="number" id="amount" name="amount" required>
                <button type="submit">Submit</button>
            </form>
        </section>
        <section class="stats">
            <h2>Your Daily Water Intake</h2>
            <p>Here are your water intake statistics for today:</p>
        
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Water Intake Tracker</p>
    </footer>
</body>
</html>
