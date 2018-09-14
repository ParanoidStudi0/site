<?php
 if(empty($errors)) {
  $user = R::dispense('users');
  $user->login = $data['login'];
  $user->email = $data['email'];
  $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
  $user->root = 0;
  R::store($user);
  ?>
  <script type="text/javascript">
    alert('Вы успешно зарегистрированы')
  </script>
  <?php
 } else {
  echo '<span style="color: red">'.array_shift($errors );'</div>';
 }