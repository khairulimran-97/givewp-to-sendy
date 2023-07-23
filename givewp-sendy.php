<? php

add_action( 'give_insert_payment', 'subscribe_to_sendy_list', 10, 2 );

function subscribe_to_sendy_list( $payment_id, $payment_data ) {
    $user_info = $payment_data['user_info'];
    
    // Retrieve the email and name from the user_info array
    $email = $user_info['email'];
    $name = $user_info['first_name'] . ' ' . $user_info['last_name'];

    // Sendy API endpoint and credentials
    $sendy_url = 'https://newsletter.aplikasiniaga.com/subscribe';
    $list_id = 'tA6ohjmxlfgTGhqsAFcVlw';
    $api_key = 'X5ZPEnCj8xpPaZWJlxxb';
    
    // Prepare the data to be sent to Sendy
    $data = array(
        'name' => $name,
        'email' => $email,
        'list' => $list_id,
        'boolean' => 'true', // Set to 'true' to confirm subscription
        'api_key' => $api_key
    );

    // Make the API request to subscribe the user to the Sendy list
    $request = wp_remote_post( $sendy_url, array(
        'body' => $data,
        'timeout' => 30
    ) );

    // Check if the request was successful
    if ( ! is_wp_error( $request ) && 200 == wp_remote_retrieve_response_code( $request ) ) {
       $return = true;
    } else {
        // Subscription failed
        // You can handle errors or display error messages here
    }
}
