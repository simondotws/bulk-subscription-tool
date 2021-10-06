<?php
function completedArray($mandate, $subscription_id, $result, $message){
  Global $completed;
  $arr = [
    "mandate" => $mandate,
    "subscription_id" => $subscription_id,
    "result" => $result,
    "message" => $message
  ];
  $completed[] = $arr;
}
?>
