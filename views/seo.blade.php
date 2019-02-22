    <title>{{ Shevaua\LaravelSeo\Facade\SeoPage::getTitle() }}</title>
    
@foreach (Shevaua\LaravelSeo\Facade\SeoPage::getMeta() as $name => $content)
    <meta name="{{ $name }}" content="{{ $content }}">
@endforeach

@foreach (Shevaua\LaravelSeo\Facade\SeoPage::getOg() as $property => $content)
    <meta property="{{ $property }}" content="{{ $content }}">
@endforeach
    