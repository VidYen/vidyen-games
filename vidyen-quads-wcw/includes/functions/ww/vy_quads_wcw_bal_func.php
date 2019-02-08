<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//Rather than making the point exchange shortcode even larger
//I am moving the WooWallet move function here.

/*** WOOWALLET BALANCE FUNCTION ***/
function vy_quads_wcw_bal_func($atts)
{
  //Check if user is logged in.
  //I've decided that the ! bothers me. Readability over efficiency.
  if ( is_user_logged_in() == FALSE )
  {
    return; //GET OUT!
  }

  $atts = shortcode_atts(
		array(
				'firstid' => '0',
				'secondid' => '0',
				'outputid' => '0',
				'firstamount' => '0',
				'secondamount' => '0',
				'outputamount' => '0',
        'refer' => 0,
				'days' => '0',
				'hours' => '0',
				'minutes' => '0',
        'symbol' => '',
        'amount' => 0,
        'from_user_id' => 0,
        'to_user_id' => 0,
        'fee' => 0,
        'comment' => '',
        'skip_confirm' => true,
        'mobile' => false,
        'woowallet' => false,
		), $atts, 'vy-quads-wcw' );

  //$user_id = $atts['from_user_id']; //This should be a solution
  $user_id = get_current_user_id(); //Since this doesn't carry over from the shortcode $atts (thank god hard ware is improving exponentially)

  $woo_balance = vy_quads_get_wallet_balance($user_id); //turns out it already gets balance of current user

  return $woo_blance_number; //With balance, there should be a number returned.
}

/*** WooWallet function ***/

//NOTE: I had to rewrite the WooWallet FUNCTION

///GAAAAAH!

function vy_quads_get_wallet_balance( $user_id = '', $context = 'view' )
{
  global $wpdb;
  if (empty( $user_id ) ) {
      $user_id = get_current_user_id();
  }
  $this->set_user_id( $user_id );
  $this->wallet_balance = 0;
  $args = apply_filters( 'woo_wallet_wc_price_args', array(
      'ex_tax_label' => false,
      'currency' => '',
      'decimal_separator' => wc_get_price_decimal_separator(),
      'thousand_separator' => wc_get_price_thousand_separator(),
      'decimals' => wc_get_price_decimals(),
      'price_format' => get_woocommerce_price_format(),
          ), $this->user_id );
  if ( $this->user_id ) {
      $credit_amount = array_sum(wp_list_pluck( get_wallet_transactions( array( 'user_id' => $this->user_id, 'where' => array( array( 'key' => 'type', 'value' => 'credit' ) ) ) ), 'amount' ) );
      $debit_amount = array_sum(wp_list_pluck( get_wallet_transactions( array( 'user_id' => $this->user_id, 'where' => array( array( 'key' => 'type', 'value' => 'debit' ) ) ) ), 'amount' ) );
      $balance = $credit_amount - $debit_amount;
  }
  return $balance;
}
