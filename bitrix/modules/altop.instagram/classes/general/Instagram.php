<?
class Instagram
{
	const API_URL = 'https://graph.instagram.com/';

	const API_TOKEN_REFRESH_URL = 'https://graph.instagram.com/refresh_access_token';

	private $_mediaFields = 'caption, id, media_type, media_url, permalink, thumbnail_url, timestamp, username, children{id, media_type, media_url, permalink, thumbnail_url, timestamp, username}';

	private $_timeout = 90000;

	private $_connectTimeout = 20000;


    public function getItemInstagram($accessToken,$countItem)
    {
		$params = [
			'fields' => $this->_mediaFields
		];

		if (isset($params) && is_array($params)) {
			$paramString = '&' . http_build_query($params);
		}

		$url = self::API_URL."me/media?".$paramString."&limit=".$countItem."&access_token=" . $accessToken;


		$instagramCnct = curl_init();
		curl_setopt($instagramCnct, CURLOPT_URL, $url);
		curl_setopt($instagramCnct, CURLOPT_CONNECTTIMEOUT_MS, $this->_connectTimeout);
		curl_setopt($instagramCnct, CURLOPT_TIMEOUT_MS, $this->_timeout);
		curl_setopt($instagramCnct, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($instagramCnct, CURLOPT_SSL_VERIFYPEER, false);


		$media = json_decode(curl_exec($instagramCnct));

		curl_close($instagramCnct);

		return $media;
    }

    public function refreshToken($accessToken){

		$params = array(
			'grant_type' => 'ig_refresh_token',
			'access_token' => $accessToken
		);

		if (isset($params) && is_array($params)) {
			$paramString = '?' . http_build_query($params);
		}

		$url = self::API_TOKEN_REFRESH_URL."/".$paramString."&access_token=" . $accessToken;

		$instagramCnct = curl_init();
		curl_setopt($instagramCnct, CURLOPT_URL, $url);
		curl_setopt($instagramCnct, CURLOPT_CONNECTTIMEOUT_MS, $this->_connectTimeout);
		curl_setopt($instagramCnct, CURLOPT_TIMEOUT_MS, $this->_timeout);
		curl_setopt($instagramCnct, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($instagramCnct, CURLOPT_SSL_VERIFYPEER, false);


		$response = json_decode(curl_exec($instagramCnct));
		curl_close($instagramCnct);

		$accessToken = $response->access_token;

		return $accessToken;
	}

   

}

?>
