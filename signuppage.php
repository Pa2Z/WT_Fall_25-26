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

      <button type="submit">Sign Up</button>

    </form>

  </div>
</main>

</body>
</html>
