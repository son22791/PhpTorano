<?php
echo '<ul>';
foreach ($users as $user) {
  echo '<li>
    <a href="index.php?controller=users&action=showUser&user_id=' . $user->user_id . '">' . $user->user_name . '</a>
  </li>';
}
echo '</ul>';
?>