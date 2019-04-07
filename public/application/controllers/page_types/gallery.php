<?php
namespace Application\Controller\PageType;

use Concrete\Core\Page\Controller\PageTypeController;
use Application\Controller\FacebookData;

class Gallery extends PageTypeController
{
    public function view(string $id)
    {
        $photos = $this->getPhotos($id);
        $this->set('photos', $photos);
    }

    private function getPhotos($id)
    {
        $facebook_data = new FacebookData();
        $allPhotos = $facebook_data->getAllPhotos($id);
        $photos = array_map(function ($photo) {
            return [
                'small' => $photo['webp_images'][count($photo['webp_images'])-1]['source'],
                'big' => $photo['webp_images'][0]['source'],
            ];
        }, $allPhotos['photos']);
        $allPhotos['photos'] = $photos;
        return $allPhotos;
    }
}
