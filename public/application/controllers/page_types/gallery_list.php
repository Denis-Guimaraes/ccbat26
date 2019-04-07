<?php
namespace Application\Controller\PageType;

use Concrete\Core\Page\Controller\PageTypeController;
use Application\Controller\FacebookData;

class GalleryList extends PageTypeController
{
    public function view()
    {
        $albums = $this->getAlbums();
        $this->set('albums', $albums);
    }

    private function getAlbums()
    {
        $facebook_data = new FacebookData();
        $allAlbums = $facebook_data->getAllAlbums();
        $albums = array_filter($allAlbums, function ($album) {
            $result = $album['name'] !== 'Profile Pictures'
            && $album['name'] !== 'Mobile Uploads'
            && $album['name'] !== 'Cover Photos'
            && $album['photo_count'] > 0;
            return $result;
        });
        return $albums;
    }
}
