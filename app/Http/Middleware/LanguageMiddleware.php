<?php
// project file path: ant_laravel/app/Http/Middleware/LanguageMiddleware.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class LanguageMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // ✅ Сессия уже должна быть запущена, получаем язык
        $locale = $request->session()->get('locale', config('app.locale'));

        if (!in_array($locale, ['ka', 'en', 'ru'])) {
            $locale = config('app.locale');
        }

        // ✅ Устанавливаем локаль в Laravel
        App::setLocale($locale);
        Log::info("✅ Middleware применил язык: " . App::getLocale() . " | Сессия: " . $request->session()->get('locale'));

        return $next($request);
    }
}
