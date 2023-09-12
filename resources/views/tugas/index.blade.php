<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous">
    </script>

  <title>Fan Book Site</title>

  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@200;300;400;500;600;700;900&display=swap"
    rel="stylesheet">
  <style>
    * {
      font-family: 'Noto Serif KR', serif;
    }

    .mypic {
      width: 100%;
      height: 300px;

      background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://cdn.tigthai.com/imguploads/202106/14/07651250016236802892272_200_M.jpg');
      background-position: center 30%;
      background-size: cover;

      color: rgb(255, 255, 255);

      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .mypost {
      width: 95%;
      max-width: 500px;
      margin: 20px auto 20px auto;

      box-shadow: 0px 0px 3px 0px black;
      padding: 20px;
    }

    .mypost>button {
      margin-top: 15px;
    }

    .mycards {
      width: 95%;
      max-width: 500px;
      margin: auto;
    }

    .mycards>.card {
      margin-top: 10px;
      margin-bottom: 10px;
    }
  </style>
</head>


<body style="background-color: rgb(117, 10, 10);">
  <div class="mypic">
    <h1>Jujutsu Fan Book</h1>
  </div>
  <div class="mypost">
    <div class="form-floating mb-3">
      <input type="text" class="form-control" class="" id="name" placeholder="url">
      <label for="floatingInput">Nickname</label>
    </div>
    <div class="form-floating">
      <textarea class="form-control" placeholder="Leave a comment here" id="comment" style="height: 100px"></textarea>
      <label for="floatingTextarea2">Fan Message</label>
    </div>
    <button onclick="save_comment()" type="button" class="btn btn-dark">Leave a fan message</button>
  </div>
  <div class="mycards" id="comment-list">
    <div class="card">
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>I love this anime</p>
          <footer class="blockquote-footer">Breadboy9000</footer>
        </blockquote>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>Best anime!</p>
          <footer class="blockquote-footer">ClassicWonder19</footer>
        </blockquote>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>Cool</p>
          <footer class="blockquote-footer">Wonderbread10</footer>
        </blockquote>
      </div>
    </div>
  </div>
</body>

</html>