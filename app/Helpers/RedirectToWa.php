<?php

use App\Models\User;

if (!function_exists('redirectToWhatsApp')) {
    /**
     * Redirect to WhatsApp with a pre-filled message.
     *
     * @param string $phoneNumber
     * @param string $message
     * @return \Illuminate\Http\RedirectResponse
     */
    function redirectToWhatsApp($message)
    {
        $phoneNumber = User::first()->pluck('telp');
        $url = 'https://api.whatsapp.com/send?phone=+62' . $phoneNumber . '&text=' . urlencode($message);
        return redirect($url);
    }
}
