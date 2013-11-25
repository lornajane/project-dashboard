<?php
    // real things happen here

require '../vendor/autoload.php';
require '../config.php';

$client = new \Guzzle\Http\Client("https://api.github.com/");
// add our access token to all requests
$client->setDefaultOption("headers", array("Authorization" => "token " . $config['github']['access_token']));

// if this application had more than one page, this section would be a controller

$list_repos_request = $client->get("/orgs/joindin/repos");
$list_repos = $list_repos_request->send()->json();

$web2_commits_request = $client->get("/repos/joindin/joindin-web2/commits");
$web2_commits = $web2_commits_request->send()->json();

$api_commits_request = $client->get("/repos/joindin/joindin-api/commits");
$api_commits = $api_commits_request->send()->json();

// now output the views
require("../templates/header.php");
// content goes here
include("../templates/dashboard.php");
require("../templates/footer.php");
