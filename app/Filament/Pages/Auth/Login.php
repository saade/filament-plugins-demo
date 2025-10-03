<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\Login as BaseLogin;

class Login extends BaseLogin
{
    public function mount(): void
    {
        parent::mount();

        $this->form->fill([
            'email' => 'saade@saade.dev',
            'password' => 'Fil@ment1sTh3Go@t!',
            'remember' => true,
        ]);
    }
}
