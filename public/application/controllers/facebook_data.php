<?php
namespace Application\Controller;

use Facebook\Facebook;

class FacebookData
{
    private $facebook;

    public function __construct()
    {
        $options= [
            'app_id' => getenv('FB_APP_ID'),
            'app_secret' => getenv('FB_APP_SECRET'),
            'default_graph_version' => 'v3.2',
        ];
        $this->facebook = new Facebook($options);
    }

    public function getAllAlbums()
    {
        try {
            $response = $this->facebook->get(
                '/' . getenv('FB_PAGE_ID') .'/albums?fields=photo_count,name,picture{url}',
                getenv('FB_ACCESS_TOKEN')
            );
            return $response->getGraphEdge()->asArray();
        } catch (Facebook\Exceptions\FacebookResponseException $e) {
            throw new UserMessageException(t('Graph returned an error: ' . $e->getMessage()));
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            throw new UserMessageException(t('Facebook SDK returned an error: ' . $e->getMessage()));
        }
    }

    public function getAllPhotos(string $id)
    {
        try {
            $response = $this->facebook->get(
                '/' . $id .'?fields=name,photo_count,photos{webp_images}',
                getenv('FB_ACCESS_TOKEN')
            );
            return $response->getGraphNode()->asArray();
        } catch (Facebook\Exceptions\FacebookResponseException $e) {
            throw new UserMessageException(t('Graph returned an error: ' . $e->getMessage()));
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            throw new UserMessageException(t('Facebook SDK returned an error: ' . $e->getMessage()));
        }
    }
}
