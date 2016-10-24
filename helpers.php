<?php
/**
 * Helper Functions
 */

function cart() {
    return \App\Order::where('user_id', Auth::user()->id)
                     ->where('status', 'Cart')->first() ?? new \App\Order();
}