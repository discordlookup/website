<footer class="py-4 mt-auto" style="background-color: #23272A">
    <div class="container">
        <div class="row">
            <div class="col-12 text-md-start text-center">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                            @foreach (Config::get('languages') as $lang => $language)
                                <a class="dropdown-item text-white @if($lang == App::getLocale()) active @endif" href="{{ route('language.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                            @endforeach
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-6 text-md-start text-center">
                <small class="d-block mt-2 text-white">&copy; {{ date('Y') }} {{ env('COPYRIGHT') }}</small>
                <small class="text-muted mt-n3">{{ __('Not affiliated with Discord, Inc.') }}</small><br>
                <small class="text-muted mt-n3">{{ __('Discord is a registered trademark of Discord, Inc.') }}</small>
            </div>
            <div class="col-12 col-md-6 text-md-end text-center mt-md-auto mt-3">
                <small class="d-block">
                    <a class="text-white text-decoration-none" href="{{ route('legal.imprint') }}">{{ __('Imprint') }}</a>
                    {{-- <a class="text-white text-decoration-none ms-2" href="{{ route('legal.terms-of-service') }}">{{ __('Terms of Service') }}</a> --}}
                    <a class="text-white text-decoration-none ms-2" href="{{ route('legal.privacy') }}">{{ __('Privacy Policy') }}</a>
                </small>
            </div>
        </div>
    </div>
</footer>
