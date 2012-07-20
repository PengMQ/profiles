<?php

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 */
?>

<div class="profile_user_name">
  <h2><?php print $account->content['UserProfiles']['profile_username']['#value']; ?></h2>
</div>

<div class="profiles">
	<div class="profile_float_left">
		<div class="profile_item">
			<span class="profile_title"><?php print $account->content['UserProfiles']['profile_nickname']['#title']; ?></span>
	  		<span class="profile_value"><?php print $account->content['UserProfiles']['profile_nickname']['#value']; ?></span>
	  	</div>
	  	<div class="profile_item">
	  		<span class="profile_title"><?php print $account->content['UserProfiles']['profile_gender']['#title']; ?></span>
	  		<span class="profile_value"><?php print $account->content['UserProfiles']['profile_gender']['#value']; ?></span>
	  	</div>
	  	<div class="profile_item">
	  		<span class="profile_title"><?php print $account->content['UserProfiles']['profile_constellation']['#title']; ?></span>
	  		<span class="profile_value"><?php print $account->content['UserProfiles']['profile_constellation']['#value']; ?></span>
	  	</div>
	  	<div class="profile_item">
	  		<span class="profile_title"><?php print $account->content['UserProfiles']['profile_jobtitle']['#title']; ?></span>
	  		<span class="profile_value"><?php print $account->content['UserProfiles']['profile_jobtitle']['#value']; ?></span>
	  	</div>
	  	<div class="profile_item"> 
	  		<span class="profile_title"><?php print $account->content['UserProfiles']['profile_skills']['#title']; ?></span>
	  		<span class="profile_value"><?php print $account->content['UserProfiles']['profile_skills']['#value']; ?></span>
	  	</div>
	  	<div class="profile_item">
		  	<span class="profile_title"><?php print $account->content['UserProfiles']['profile_workexperience']['#title']; ?></span>
		  	<span class="profile_value"><?php print $account->content['UserProfiles']['profile_workexperience']['#value']; ?></span>
	  	</div>
	  	<div class="profile_item">
	  		<span class="profile_title"><?php print $account->content['UserProfiles']['profile_personality']['#title']; ?></span>
	  		<span class="profile_value"><?php print $account->content['UserProfiles']['profile_personality']['#value']; ?></span>
	  	</div>
	</div>
	<div class="profile_float_right">
	  	<div class="profile_uploadpic"><?php print $account->content['UserProfiles']['profile_uploadpic']['#value']; ?></div>
	</div>
</div>


