<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../styles/register.css">
<body>

<form id="regForm" method="POST" action="../back-end/register_education.php" enctype="multipart/form-data">
  <h1>Registro:</h1>
  <div class="tab">Curriculo educacional:
    <p><input placeholder="Escola/curso..." oninput="this.className = ''" name="cargo1"></p>
    <p><input placeholder="Perido(ex: 2015 - 2017)..." oninput="this.className = ''" name="time1"></p>
    <p><input placeholder="Descrição..." oninput="this.className = ''" name="desc1"></p>
    <p><input type="hidden" value="<?php echo htmlspecialchars($_SESSION["usu_id"]); ?>" oninput="this.className = ''" name="id"></p>
  </div>
  <div class="tab">Curriculo educacional:
    <p><input placeholder="Escola/curso..." oninput="this.className = ''" name="cargo2"></p>
    <p><input placeholder="Perido(ex: 2015 - 2017)..." oninput="this.className = ''" name="time2"></p>
    <p><input placeholder="Descrição..." oninput="this.className = ''" name="desc2"></p>
  </div>
  <div class="tab">Curriculo educacional:
    <p><input placeholder="Escola/curso..." oninput="this.className = ''" name="cargo3"></p>
    <p><input placeholder="Perido(ex: 2015 - 2017)..." oninput="this.className = ''" name="time3"></p>
    <p><input placeholder="Descrição..." oninput="this.className = ''" name="desc3"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Proximo</button>
      <button type="submit" id="submit" name="submit">Enviar</button>
    </div>
  </div>
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
<script src="../scripts/register.js"></script>

</body>
</html>
