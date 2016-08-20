<?php
namespace Formstack;

class Config
{

    /**
     * @var integer Client ID assigned
     */
    protected $client_id;

    /*
     * @var string API Key assigned
     */
    protected $api_key;

    /**
     * Set in FormStack Dashboard, Where to redirect on Authentication
     * @var string
     */
    protected $redirect_uri;

    /**
     * Formstack assigned subdomain
     * @var string
     */
    protected $subdomain;

}
