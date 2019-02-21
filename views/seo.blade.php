    <title>{{ SeoPage::getTitle() }}</title>
    
@foreach (SeoPage::getMeta() as $name => $content)
    <meta name="{{ $name }}" content="{{ $content }}">
@endforeach

@foreach (SeoPage::getOg() as $property => $content)
    <meta property="{{ $property }}" content="{{ $content }}">
@endforeach
    