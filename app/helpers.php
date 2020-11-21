<?php
function setActive($route){
  if(request()->segments()){
  return request()->segments()[0]==$route ? 'active' :'no';
  }
}

?>
