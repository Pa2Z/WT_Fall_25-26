<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>NeedSurveyResponses - Sign Up</title>

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f6fb;
      color: #222;
    }

    header {
      background: #ffffff;
      border-bottom: 1px solid #e6e6f0;
      padding: 16px 0;
    }

    .nav {
      width: 900px;
      max-width: 95%;
      margin: auto;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .logo {
      width: 42px;
      height: 42px;
      background: #6c5ce7;
      border-radius: 8px;
    }

    .site-name {
      font-size: 18px;
      font-weight: bold;
      color: #5b3dd3;
    }

    main {
      display: flex;
      justify-content: center;
      padding: 40px 15px;
    }

    .card {
      width: 100%;
      max-width: 520px;
      background: #ffffff;
      padding: 28px;
      border-radius: 8px;
      box-shadow: 0 8px 20px rgba(92, 61, 196, 0.08);
    }

    h1 {
      text-align: center;
      margin-bottom: 24px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-size: 14px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 16px;
      border-radius: 6px;
      border: 1px solid #e8e6ff;
      font-size: 14px;
    }

    .actions {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      margin-top: 10px;
    }

    button {
      padding: 10px 16px;
      border-radius: 6px;
      border: none;
      font-weight: bold;
      cursor: pointer;
      font-size: 14px;
    }

    .btn-secondary {
      background: transparent;
      border: 1px solid #ddd;
      color: #6c5ce7;
    }

    .btn-primary {
      background: #6c5ce7;
      color: white;
    }
  </style>
</head>

<body>

<header>
  <div class="nav">
    <div class="logo"></div>
    <div class="site-name">NeedSurveyResponses</div>
  </div>
</header>

<main>
  <div class="card">

    <h1>Create an account</h1>

    <form method="post" action="signup.php">

      <label>Full Name</label>
      <input type="text" name="fullname">

      <label>Email Address</label>
      <input type="email" name="email">

      <label>Password</label>
      <input type="password" name="password">

      <label>Confirm Password</label>
      <input type="password" name="confirm_password">

      <div class="actions">
        <button type="reset" class="btn-secondary">Discard</button>
        <button type="submit" class="btn-primary">Sign Up</button>
      </div>

    </form>

  </div>
</main>

</body>
</html>
