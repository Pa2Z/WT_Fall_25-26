<!doctype html>
<html>
<head>
  <title>NeedSurveyResponses — Dashboard</title>
  <link rel="stylesheet" href="DASHBOARD.css"> 
</head>

<body>

<header>
  <div class="nav">
    <div class="brand">
      <div class="logo"></div>
      <div class="site-name">NeedSurveyResponses</div>
    </div>
    <div class="welcome">
  Welcome Student |
  <a href="../Userlogin/userlogin.php" style="text-decoration:none; color:inherit;">Logout</a>
</div>

  </div>
</header>

<main>
  <div class="left-col">
    <div class="card">
      <h2>Available Surveys</h2>
      <div class="muted">Surveys posted by other participants.</div>

      <ul class="survey-list">

        <li class="survey-item">
          <div class="survey-left">
            <div class="survey-title">
              <a href="../Surveyviewpage/surveyviewpage.php" style="color: inherit; text-decoration: none;">
                An Analytical Study on Digital Learning Adaptation
              </a>
            </div>
            <small class="muted">Exploring student adjustment trends</small>
          </div>
          <div class="survey-right">
            <div>12 Q • Open</div>
            <div>Credits: 5</div>
            <div>Responses: 7 / 10</div>
            <div>Time: 2 min</div>
          </div>
        </li>

        <li class="survey-item">
          <div class="survey-left">
            <div class="survey-title">Investigating Cognitive Load in Remote Education</div>
            <small class="muted">Measuring task complexity factors</small>
          </div>
          <div class="survey-right">
            <div>10 Q • Open</div>
            <div>Credits: 4</div>
            <div>Responses: 5 / 10</div>
            <div>Time: 3 min</div>
          </div>
        </li>

        <li class="survey-item">
          <div class="survey-left">
            <div class="survey-title">Evaluating Usability Metrics of Academic Platforms</div>
            <small class="muted">User experience indicators</small>
          </div>
          <div class="survey-right">
            <div>8 Q • Closed</div>
            <div>Credits: 3</div>
            <div>Responses: 10 / 10</div>
            <div>Time: 1 min</div>
          </div>
        </li>

      </ul>
    </div>

    <div class="card">
      <h2>My Surveys</h2>
      <div class="muted">Surveys created by you.</div>

      <ul class="survey-list">
        <li class="survey-item">
          <div class="survey-left">
            <div class="survey-title">Research Topic Selection Poll</div>
            <small class="muted">Consensus study for the semester</small>
          </div>
          <div class="survey-right">
            <div>5 Q • Open</div>
            <div>Credits: 2</div>
            <div>Responses: 3 / 10</div>
            <div>Time: 1 min</div>
          </div>
        </li>
      </ul>
    </div>

  </div>

  <div class="right-col">
    <div class="card">
      <h2>Submit Survey</h2>
      <div class="muted">Use this section to post your own survey.</div>

      <label>Title</label>
      <input type="text">

      <label>Subtitle</label>
      <input type="text">

      <label>Google Form link</label>
      <input type="text">

      <label>Credit</label>
      <input type="number">

      <label>Responses Needed</label>
      <input type="number">

      <label>Time (minutes)</label>
      <input type="number">

      <div class="actions">
        <button class="btn ghost">Discard</button>
        <button class="btn primary">Publish</button>
      </div>
    </div>
  </div>

</main>

</body>
</html>
