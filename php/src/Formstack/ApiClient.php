<?php
namespace Formstack;

class ApiClient
{
    protected $endpoint = "https://www.formstack.com/api/v2/%";
    protected $api_token = false;
    protected $client_id = false;
    protected $redirect_uri = false;

    protected $client;

    public function __construct($api_token, $client_id, $redirect_uri) {
        $this->api_token = $api_token;
        $this->client_id = $client_id;
        $this->redirect_uri = $redirect_uri;

        $this->client = new \GuzzleHttp\Client();
    }

    public function getAuthorize()
    {
        $code = trim($_GET['code']);
        $res = $this->client->request(
            'GET',
            sprintf($this->endpoint, 'authorize'),
            [
                'client_id' => $this->client_id,
                'redirect_uri' => $this->redirect_uri,
                'response_type' => 'code'
            ]
        );

        $body = $res->getBody();
        if ($res->getStatusCode() != 200) {
            throw new \Exception("{$body->status}: {$body->error}");
        }

        // This should popout a modal or something to authorize, then
        // AJAX post to get access token.
    }

    public function postGetAccessToken()
    {
        
    }

    public function __clone__() {}
    public function __invoke() {}

}
