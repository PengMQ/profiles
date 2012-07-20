<!--
<div class="profile">
  <?php print $user_profile; ?>
</div>
-->

<?php
profile_load_profile($account); 
// now you can call the profile field like profile_firstname
echo $account->profile_firstname;
?>



<div>
<?php dsm($profile); ?>
<?php dsm($account); ?>
</div>

<?php global $base_url; ?>

<div>
<?php echo $account->profile_username; ?></br>
<?php echo $account->profile_nickname; ?></br>
<?php echo $account->profile_gender; ?></br>
<?php echo $account->profile_jobtitle; ?></br>
<?php echo $account->profile_skills; ?></br>
<?php echo $account->profile_workexperience; ?></br>
<?php echo $account->profile_constellation; ?></br>
<?php echo $account->profile_personality; ?></br>
</div>
jfkelwjfklewjflkewjlfkejwfjkew

