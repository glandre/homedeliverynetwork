<?php
/**
 * Helper Functions
 */

function cart() {
    return \App\Order::where('user_id', Auth::user()->id ?? 0)
                     ->where('status', 'Cart')->first() ?? new \App\Order();
}