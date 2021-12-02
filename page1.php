<?php include_once 'head.php'?>
<body>

<?php include_once 'jum.php'?>
<?php include_once 'nav.php' ?>
<?php
if($_SESSION['user']==''){
  header ("location:index.php");
}
?>
<div class="container" style="margin-top:30px">
  <!--<div class="row">-->
    <h3>หน้าที่ 1</h3><br>
    <h4>ผู้ใช้งาน <?php echo $_SESSION['user'].''.$_SESSION['name']?></h4>

  </div>
</div>

<?php include_once 'foot.php'?>

</body>
</html>
