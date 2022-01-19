<html>
  <head>
    <title>Pengulangan</title>
    <style>
      label{
        display: block;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <form method="post">
        <center>
      <label>Program 2.1</label>
      <input type="number" name="satu">
      <input type="submit" name="kesatu" value="kirim">
      <?php
      if(isset($_POST['kesatu'])){
        $angka = $_POST['satu'];
        
        echo "<br>";
        $x = 1;
        while($x <= $angka){
          $y = 1;
          while($y <= $x){
            echo "$y ";
            $y++;
          }
          echo "<br>";
          $x++;
        }
      }
      ?>
      
      <label>Program 2.2</label>
      <input type="number" name="dua">
      <input type="submit" name="kedua" value="kirim">
      <?php
      if(isset($_POST['kedua'])){
        $angka = $_POST['dua'];
        
        echo "<br>";
        for($x = $angka; $x >= 1; $x--){
          for($y = $angka; $y > $x; $y--){
            echo "&nbsp";
          }
          for($z = 1; $z <= $x; $z++){
            echo "$z ";
          }
          echo "<br>";
        }
      }
      ?>
      
      <label>Program nomor 3.</label>
      <input type="number" name="tiga">
      <input type="submit" name="ketiga" value="kirim">
      <?php
      if(isset($_POST['ketiga'])){
        $angka = $_POST['tiga'];
        
        echo "<br>";
        $x = $angka;
        while($x >= 1){
          $y = $angka;
          while($y >= $x){
            echo "$y ";
            $y--;
          }
          echo "<br>";
          $x--;
        }
      }
      ?>
    </form>
    </center>
  </body>
</html>