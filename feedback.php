<?php include 'inc/header.php'; ?>
<?php
$sql='SELECT * FROM feedback_tb';
$result=mysqli_query($conn, $sql);
$feedback=mysqli_fetch_all($result, MYSQLI_ASSOC); 

?>
<main>
  <div class="container d-flex flex-column align-items-center">
   
    <h2>Feedback</h2>

   <?php  if(empty($feedback)): ?>
      <p>There's no feedback!</p>
  <?php endif;?>

  <?php foreach($feedback as $item): ?>
      <div class="card my-3 w-75">
     <div class="card-body text-center">
  <?php echo $item['body'];?>
    <div class="text-secondary mt-2">
      By <?php echo $item['name'];?>
      on <?php echo $item['date']; ?>
    </div> 
     </div>
   </div>
   <?php endforeach;?>
    

  
  </div>
</main>

<?php include 'inc/footer.php'; ?>

