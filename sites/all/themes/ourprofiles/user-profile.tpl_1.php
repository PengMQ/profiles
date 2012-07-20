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

<div><?php echo $account->profile_username; ?></div>
<div><?php echo $account->profile_nickname; ?></div>
<div><?php echo $account->profile_gender; ?></div>
<div><?php echo $account->profile_jobtitle; ?></div>
<div><?php echo $account->profile_skills; ?></div>
<div><?php echo $account->profile_workexperience;?></div>
<div><?php echo $account->profile_constellation;?></div>
<div><?php echo $account->profile_personality;?></div>
<div><img src="<?php echo $base_url.'/'.$account->profile_uploadpic; ?>" /></div>


