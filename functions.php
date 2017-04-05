<?php 

function titlecase($word) {
  $word = ucwords($word);
  return $word;
}

function capfirst($word) {
  $word = ucfirst($word);
  return $word;
}

function doSomething($theName, $theArray, $theActivity, $theQuantity) {
  if ($theActivity != 'nothing' && $theQuantity > 0) {
    $valid = true;
    $calories = $theArray[$theActivity];
    $total = $calories * $theQuantity;
    if ($theQuantity < 2) {
      $title = titlecase($theActivity).' for '.$theQuantity. ' hour ';
      $theTotal = 'Total Calories Burned:'.number_format($total, 0);
      $description = $theName.' did '.$theQuantity.' hours of '.$theActivity.'.';
    } elseif ($theQuantity > 50) {
      $title = 'No '.titlecase($theActivity).' for '.$theName;
      $theActivity = 'rediculous';
      $description = 'Don&rsquo;t be ridiculous, '.$theName.', that&rsquo;s more '.$activity.'than any one person can ever do! Also, you don&rsquo;t have any Energy!';
    } else {
      $title = titlecase($theActivity).' for '.$theQuantity. ' hours ';
      $theTotal = 'Total Calories Burned: '.number_format($total, 2);
      $description = $theName.' burned '.number_format($total).'.';
    }
  } else {
    $valid = false;
  };

  if ($valid == true) {
    return('
      <div class="card my-4 mx-auto" style="width: 20rem;">
        <img class="img-fluid" src="images/'.$theActivity.'.jpg" alt="Card image cap">
        <div class="card-block">
          <h2 class="h4 card-title">'.$title.'</h2>
          <p class="card-text">'.$description.'</p>
          <p class="h5">'.$theTotal.'</p>
        </div>
      </div>
    ');
  } else {
    return('
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="m-0"><strong>Oops!</strong> Pick a drink.</p>
      </div>
    ');
  }
}
