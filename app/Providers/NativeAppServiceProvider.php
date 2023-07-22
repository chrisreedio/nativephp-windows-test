<?php

namespace App\Providers;

use Native\Laravel\Facades\ContextMenu;
use Native\Laravel\Facades\Dock;
use Native\Laravel\Facades\Window;
use Native\Laravel\GlobalShortcut;
use Native\Laravel\Menu\Menu;
use Native\Laravel\Facades\Notification;

class NativeAppServiceProvider
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Menu::new()
            ->appMenu()
            ->submenu('About', Menu::new()
                ->link('https://beyondco.de', 'Beyond Code')
                ->link('https://simonhamp.me', 'Simon Hamp')
            )
			// NativePHP for Windows 
			->submenu('About Chris Reed', Menu::new()
                ->link('https://chrisreed.io', 'Website')
                ->link('https://twitter.com/chrisreedtech', 'Twitter')
            )
			->submenu('About Kyle Knowles', Menu::new()
                ->link('https://twitter.com/knowlestech', 'Twitter')
            )
			///
            ->submenu('View', Menu::new()
                ->toggleFullscreen()
                ->separator()
                ->link('https://laravel.com', 'Learn More', 'CmdOrCtrl+L')
            )
            ->register();

        Window::open()
            ->title('NativePHP on Windows')
            ->width(1000)            
            ->height(1200)
            ->showDevTools(false)
            ->rememberState();


        /**
            Dock::menu(
                Menu::new()
                    ->event(DockItemClicked::class, 'Settings')
                    ->submenu('Help',
                        Menu::new()
                            ->event(DockItemClicked::class, 'About')
                            ->event(DockItemClicked::class, 'Learn More…')
                    )
            );

            ContextMenu::register(
                Menu::new()
                    ->event(ContextMenuClicked::class, 'Do something')
            );

            GlobalShortcut::new()
                ->key('CmdOrCtrl+Shift+I')
                ->event(ShortcutPressed::class)
                ->register();
        */
    }
}
