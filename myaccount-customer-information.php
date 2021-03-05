 add_action('woocommerce_account_dashboard','ava_get_user');

function ava_get_user() {
	if ( is_user_logged_in()) {
		$user = wp_get_current_user();
		echo "<table>
		<tr>
		<td> <div id='header-welcome'><b>First Name:</b> ". $user->first_name ."</div> </td>
		<td> <div id='header-welcome'><b>Last Name:</b> ". $user->last_name ."</div> </td>
		</tr>
		
		<tr>
		<td> <div id='header-welcome'><b>Display Name:</b> ". $user->display_name ."</div> </td>
		<td> <div id='header-welcome'><b>User Email:</b> ". $user->user_email ."</div> </td>
		</tr>
		
		<tr>
		<td> <div id='header-welcome'><b>Street Address:</b> ". $user->billing_address_1 ." , ". $user->billing_address_2 ." , ". $user->billing_address_3 ."</div> </td>
		<td> <div id='header-welcome'><b>Town/City:</b> ". $user->billing_city ."</div> </td>
		</tr>
		
		<tr>
		<td> <div id='header-welcome'><b>Country / Region:</b> ". $user->billing_country ."</div> </td>
		<td> <div id='header-welcome'><b>State :</b> ". $user->billing_state ."</div> </td>
		</tr>
		
		<tr>
		<td> <div id='header-welcome'><b>Company Name:</b> ". $user->billing_company ."</div> </td>
		<td> <div id='header-welcome'><b>Zip Code :</b> ". $user->billing_postcode ."</div> </td>
		</tr>
		
		<tr>
		<td> <div id='header-welcome'><b>Phone:</b> ". $user->billing_phone ."</div> </td>
		<td> <div id='header-welcome'><b>Phone Ext :</b> ". $user->billing_phone_ext ."</div> </td>
		</tr>
		
		</table>";
	}
	
	
}
