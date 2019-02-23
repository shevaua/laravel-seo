# Seo Tools for Laravel Framework

## Installing 

    composer require shevaua/laravel-seo

## Adding to layout:

    <head>
        @seo
        ...
        <!-- other tags here -->
    </head>

## Setting Seo Information with Facade:

    <?php

    namespace App\Http\Controllers;

    use SeoPage;

    class TestSeoController extends Controller
    {
        
        public function getTestSeoPage()
        {

            $title = 'Hello world!';
            $description = 'This is the test page';

            SeoPage::getInstance()
                ->setTitle($title);

            SeoPage::getInstance()
                ->setMeta('description', $description)
                ->setMeta('author', 'Igor Sheviakov')

                ->setOg('title', $title)
                ->setOg('description', $description);

            return view('test.seopage');

        }

    }

## Setting Seo Information with Injected object:

    <?php

    namespace App\Http\Controllers;

    use Shevaua\LaravelSeo\SeoPage;

    class TestSeoController extends Controller
    {
        
        public function getTestSeoPage(SeoPage $page)
        {

            $title = 'Hello world!';
            $description = 'This is the test page';

            $page
                ->setTitle($title);

            $page
                ->setMeta('description', $description)
                ->setMeta('author', 'Igor Sheviakov')

                ->setOg('title', $title)
                ->setOg('description', $description);

            return view('test.seopage');

        }

    }

## References:

### Using Facade:

`SeoPage::getInstance()` - method for getting singleton with seo information

### Using instance:

`SeoPage->setTitle(string $title)` - setting title

`SeoPage->setMeta(string $name, string $content)` - setting meta 

`SeoPage->setOg(string $property, string $content)` - setting meta with og prefix 
