<?php

namespace StubModuleNamespace\StubClassNamePrefix\Providers;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Facades\FilamentColor;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class StubClassNamePrefixPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('StubModuleName')
            ->path('StubModuleName')
            ->globalSearch(false)
            ->databaseNotifications()
            ->databaseNotificationsPolling('10s')
            // Authentication features
            ->login()
            ->profile()
            ->registration()
            ->emailVerification(isRequired: false)
            ->passwordReset()
            // end Authentication features
            ->discoverResources(
                in: __DIR__.'/../Filament/Resources',
                for: 'GovDigital\\StubClassNamePrefix\\Filament\\Resources'
            )
            ->discoverPages(
                in: __DIR__.'/../Filament/Pages',
                for: 'GovDigital\\StubClassNamePrefix\\Filament\\Pages'
            )
            ->discoverWidgets(
                in: __DIR__.'/../Filament/Widgets',
                for: 'GovDigital\\StubClassNamePrefix\\Filament\\Widgets'
            )
            ->pages([
                Dashboard::class,
            ])
            ->viteTheme('app-modules/StubModuleName/resources/css/filament/theme.css')
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
                // TODO: KillSwitchMiddleware::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->bootUsing(function (Panel $panel): void {
                FilamentColor::register([
                    'primary' => '#348682',
                    'secondary' => '#FCB146',
                ]);

                $panel
                    ->brandName(fn () => config('app.name'))
                    ->brandLogo(fn () => null)
                    ->favicon(fn () => null);
            });
    }
}
