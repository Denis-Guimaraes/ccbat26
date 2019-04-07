<?php

namespace Application\Theme\CCbat26;

use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;
use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme implements ThemeProviderInterface
{
    public function registerAssets()
    {
        $this->requireAsset('javascript', 'jquery');
    }

    public function getThemeAreaLayoutPresets()
    {
        $presets = array(
            array(
                'handle' => 'responsive_two_div',
                'name' => 'responsive two div',
                'container' => '<div class="row"></div>',
                'columns' => array(
                    '<div class="col-12 col-md-6"></div>',
                    '<div class="col-12 col-md-6"></div>'
                ),
            ),
        );
        return $presets;
    }
}
