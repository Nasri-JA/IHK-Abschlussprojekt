<?php

namespace App\Traits;

trait WithToast {

    // Shows a toastr message
    public function toast(string $type, string $message)
    {
        $this->dispatchBrowserEvent('toast', [
            'type' => $type,
            'message' => $message
        ]);
    }
}