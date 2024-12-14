<h1>Sign Up</h1>

<?php if (!empty($errors)): ?>
    <div>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form method="POST" action="/Registration/sign_up">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" value="<?= htmlspecialchars($_POST['username'] ?? '') ?>">

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">

    <label for="password">Password:</label>
    <input type="password" name="password" id="password">

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" id="confirm_password">

    <button type="submit">Sign Up</button>
</form>
