<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: January 6 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://localhost";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.4.2.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre><h1>Authenticating requests</h1>
<p>Authenticate requests to this API's endpoints by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p><h1>Auth</h1>
<h2>Register a new user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"quos","email":"eos","phone":"neque","password":"et"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "quos",
    "email": "eos",
    "phone": "neque",
    "password": "et"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "name": "John Doe",
    "email": "test@test.com",
    "phone": "3305550125",
    "token": "1|fiennkasosdf78asnasdfn7a0adnafsoi"
}</code></pre>
<div id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"></code></pre>
</div>
<div id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</div>
<form id="form-POSTapi-register" data-method="POST" data-path="api/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-register" onclick="tryItOut('POSTapi-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-register" onclick="cancelTryOut('POSTapi-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phone" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>
</p>

</form>
<h2>Log In</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"fugiat","password":"voluptate"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "fugiat",
    "password": "voluptate"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "name": "John Doe",
    "email": "test@test.com",
    "phone": "3305550125",
    "token": "1|fiennkasosdf78asnasdfn7a0adnafsoi"
}</code></pre>
<div id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</div>
<div id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</div>
<form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-login" onclick="tryItOut('POSTapi-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-login" onclick="cancelTryOut('POSTapi-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-login" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-login" data-component="body" required  hidden>
<br>
</p>

</form>
<h2>Delete a users api tokens</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-tokens" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-tokens"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-tokens"></code></pre>
</div>
<div id="execution-error-DELETEapi-tokens" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-tokens"></code></pre>
</div>
<form id="form-DELETEapi-tokens" data-method="DELETE" data-path="api/tokens" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-tokens', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-tokens" onclick="tryItOut('DELETEapi-tokens');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-tokens" onclick="cancelTryOut('DELETEapi-tokens');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-tokens" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/tokens</code></b>
</p>
</form>
<h2>Get the current user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "name": "John Doe",
    "email": "test@test.com",
    "phone": "3305550125"
}</code></pre>
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form><h1>Races</h1>
<h2>Fetches the list of resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/races/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-races-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-races-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-races-search"></code></pre>
</div>
<div id="execution-error-POSTapi-races-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-races-search"></code></pre>
</div>
<form id="form-POSTapi-races-search" data-method="POST" data-path="api/races/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-races-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-races-search" onclick="tryItOut('POSTapi-races-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-races-search" onclick="cancelTryOut('POSTapi-races-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-races-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/races/search</code></b>
</p>
</form>
<h2>Creates a batch of new resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/races/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["accusamus"]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "accusamus"
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-races-batch" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-races-batch"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-races-batch"></code></pre>
</div>
<div id="execution-error-POSTapi-races-batch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-races-batch"></code></pre>
</div>
<form id="form-POSTapi-races-batch" data-method="POST" data-path="api/races/batch" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-races-batch', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-races-batch" onclick="tryItOut('POSTapi-races-batch');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-races-batch" onclick="cancelTryOut('POSTapi-races-batch');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-races-batch" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/races/batch</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>resources</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="resources.0" data-endpoint="POSTapi-races-batch" data-component="body" required  hidden>
<input type="text" name="resources.1" data-endpoint="POSTapi-races-batch" data-component="body" hidden>
<br>
</p>

</form>
<h2>Update a batch of resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "http://localhost/api/races/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["et"]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "et"
    ]
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PATCHapi-races-batch" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-races-batch"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-races-batch"></code></pre>
</div>
<div id="execution-error-PATCHapi-races-batch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-races-batch"></code></pre>
</div>
<form id="form-PATCHapi-races-batch" data-method="PATCH" data-path="api/races/batch" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-races-batch', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-races-batch" onclick="tryItOut('PATCHapi-races-batch');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-races-batch" onclick="cancelTryOut('PATCHapi-races-batch');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-races-batch" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/races/batch</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>resources</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="resources.0" data-endpoint="PATCHapi-races-batch" data-component="body" required  hidden>
<input type="text" name="resources.1" data-endpoint="PATCHapi-races-batch" data-component="body" hidden>
<br>
</p>

</form>
<h2>Deletes a batch of resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/races/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-races-batch" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-races-batch"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-races-batch"></code></pre>
</div>
<div id="execution-error-DELETEapi-races-batch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-races-batch"></code></pre>
</div>
<form id="form-DELETEapi-races-batch" data-method="DELETE" data-path="api/races/batch" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-races-batch', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-races-batch" onclick="tryItOut('DELETEapi-races-batch');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-races-batch" onclick="cancelTryOut('DELETEapi-races-batch');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-races-batch" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/races/batch</code></b>
</p>
</form>
<h2>Fetches the list of resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/races" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-races" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-races"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-races"></code></pre>
</div>
<div id="execution-error-GETapi-races" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-races"></code></pre>
</div>
<form id="form-GETapi-races" data-method="GET" data-path="api/races" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-races', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-races" onclick="tryItOut('GETapi-races');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-races" onclick="cancelTryOut('GETapi-races');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-races" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/races</code></b>
</p>
</form>
<h2>Create a race.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/races" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"aut","description":"delectus","start_time":"est","distance_number":205.158896953,"distance_units":"est"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "aut",
    "description": "delectus",
    "start_time": "est",
    "distance_number": 205.158896953,
    "distance_units": "est"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-races" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-races"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-races"></code></pre>
</div>
<div id="execution-error-POSTapi-races" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-races"></code></pre>
</div>
<form id="form-POSTapi-races" data-method="POST" data-path="api/races" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-races', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-races" onclick="tryItOut('POSTapi-races');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-races" onclick="cancelTryOut('POSTapi-races');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-races" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/races</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-races" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-races" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>start_time</code></b>&nbsp;&nbsp;<small>Datatime</small>  &nbsp;
<input type="text" name="start_time" data-endpoint="POSTapi-races" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>distance_number</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="distance_number" data-endpoint="POSTapi-races" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>distance_units</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="distance_units" data-endpoint="POSTapi-races" data-component="body" required  hidden>
<br>
</p>

</form>
<h2>Fetches resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/races/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-races--race-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-races--race-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-races--race-"></code></pre>
</div>
<div id="execution-error-GETapi-races--race-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-races--race-"></code></pre>
</div>
<form id="form-GETapi-races--race-" data-method="GET" data-path="api/races/{race}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-races--race-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-races--race-" onclick="tryItOut('GETapi-races--race-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-races--race-" onclick="cancelTryOut('GETapi-races--race-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-races--race-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/races/{race}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="GETapi-races--race-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update a race.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/races/odio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"similique","description":"aperiam","start_time":"ea","distance_number":286730973.443494,"distance_units":"aut"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/odio"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "similique",
    "description": "aperiam",
    "start_time": "ea",
    "distance_number": 286730973.443494,
    "distance_units": "aut"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PUTapi-races--race-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-races--race-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-races--race-"></code></pre>
</div>
<div id="execution-error-PUTapi-races--race-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-races--race-"></code></pre>
</div>
<form id="form-PUTapi-races--race-" data-method="PUT" data-path="api/races/{race}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-races--race-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-races--race-" onclick="tryItOut('PUTapi-races--race-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-races--race-" onclick="cancelTryOut('PUTapi-races--race-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-races--race-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/races/{race}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/races/{race}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="PUTapi-races--race-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-races--race-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="PUTapi-races--race-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>start_time</code></b>&nbsp;&nbsp;<small>Datatime</small>  &nbsp;
<input type="text" name="start_time" data-endpoint="PUTapi-races--race-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>distance_number</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="distance_number" data-endpoint="PUTapi-races--race-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>distance_units</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="distance_units" data-endpoint="PUTapi-races--race-" data-component="body" required  hidden>
<br>
</p>

</form>
<h2>Deletes a resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/races/quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/quo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-races--race-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-races--race-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-races--race-"></code></pre>
</div>
<div id="execution-error-DELETEapi-races--race-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-races--race-"></code></pre>
</div>
<form id="form-DELETEapi-races--race-" data-method="DELETE" data-path="api/races/{race}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-races--race-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-races--race-" onclick="tryItOut('DELETEapi-races--race-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-races--race-" onclick="cancelTryOut('DELETEapi-races--race-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-races--race-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/races/{race}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="DELETEapi-races--race-" data-component="url" required  hidden>
<br>
</p>
</form><h1>Races/Invites</h1>
<h2>Fetch the list of relation resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/races/totam/race-invites/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/totam/race-invites/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-races--race--race-invites-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-races--race--race-invites-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-races--race--race-invites-search"></code></pre>
</div>
<div id="execution-error-POSTapi-races--race--race-invites-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-races--race--race-invites-search"></code></pre>
</div>
<form id="form-POSTapi-races--race--race-invites-search" data-method="POST" data-path="api/races/{race}/race-invites/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-races--race--race-invites-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-races--race--race-invites-search" onclick="tryItOut('POSTapi-races--race--race-invites-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-races--race--race-invites-search" onclick="cancelTryOut('POSTapi-races--race--race-invites-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-races--race--race-invites-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/races/{race}/race-invites/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="POSTapi-races--race--race-invites-search" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Create a batch of new relation resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/races/sit/race-invites/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["ut"]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/sit/race-invites/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "ut"
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-races--race--race-invites-batch" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-races--race--race-invites-batch"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-races--race--race-invites-batch"></code></pre>
</div>
<div id="execution-error-POSTapi-races--race--race-invites-batch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-races--race--race-invites-batch"></code></pre>
</div>
<form id="form-POSTapi-races--race--race-invites-batch" data-method="POST" data-path="api/races/{race}/race-invites/batch" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-races--race--race-invites-batch', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-races--race--race-invites-batch" onclick="tryItOut('POSTapi-races--race--race-invites-batch');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-races--race--race-invites-batch" onclick="cancelTryOut('POSTapi-races--race--race-invites-batch');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-races--race--race-invites-batch" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/races/{race}/race-invites/batch</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="POSTapi-races--race--race-invites-batch" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>resources</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="resources.0" data-endpoint="POSTapi-races--race--race-invites-batch" data-component="body" required  hidden>
<input type="text" name="resources.1" data-endpoint="POSTapi-races--race--race-invites-batch" data-component="body" hidden>
<br>
</p>

</form>
<h2>Updates a batch of relation resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "http://localhost/api/races/magnam/race-invites/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["expedita"]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/magnam/race-invites/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "expedita"
    ]
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PATCHapi-races--race--race-invites-batch" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-races--race--race-invites-batch"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-races--race--race-invites-batch"></code></pre>
</div>
<div id="execution-error-PATCHapi-races--race--race-invites-batch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-races--race--race-invites-batch"></code></pre>
</div>
<form id="form-PATCHapi-races--race--race-invites-batch" data-method="PATCH" data-path="api/races/{race}/race-invites/batch" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-races--race--race-invites-batch', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-races--race--race-invites-batch" onclick="tryItOut('PATCHapi-races--race--race-invites-batch');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-races--race--race-invites-batch" onclick="cancelTryOut('PATCHapi-races--race--race-invites-batch');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-races--race--race-invites-batch" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/races/{race}/race-invites/batch</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="PATCHapi-races--race--race-invites-batch" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>resources</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="resources.0" data-endpoint="PATCHapi-races--race--race-invites-batch" data-component="body" required  hidden>
<input type="text" name="resources.1" data-endpoint="PATCHapi-races--race--race-invites-batch" data-component="body" hidden>
<br>
</p>

</form>
<h2>Deletes a batch of relation resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/races/porro/race-invites/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/porro/race-invites/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-races--race--race-invites-batch" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-races--race--race-invites-batch"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-races--race--race-invites-batch"></code></pre>
</div>
<div id="execution-error-DELETEapi-races--race--race-invites-batch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-races--race--race-invites-batch"></code></pre>
</div>
<form id="form-DELETEapi-races--race--race-invites-batch" data-method="DELETE" data-path="api/races/{race}/race-invites/batch" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-races--race--race-invites-batch', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-races--race--race-invites-batch" onclick="tryItOut('DELETEapi-races--race--race-invites-batch');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-races--race--race-invites-batch" onclick="cancelTryOut('DELETEapi-races--race--race-invites-batch');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-races--race--race-invites-batch" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/races/{race}/race-invites/batch</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="DELETEapi-races--race--race-invites-batch" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Associates resource with another resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/races/dolores/race-invites/associate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"related_key":"voluptatum"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/dolores/race-invites/associate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "related_key": "voluptatum"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-races--race--race-invites-associate" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-races--race--race-invites-associate"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-races--race--race-invites-associate"></code></pre>
</div>
<div id="execution-error-POSTapi-races--race--race-invites-associate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-races--race--race-invites-associate"></code></pre>
</div>
<form id="form-POSTapi-races--race--race-invites-associate" data-method="POST" data-path="api/races/{race}/race-invites/associate" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-races--race--race-invites-associate', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-races--race--race-invites-associate" onclick="tryItOut('POSTapi-races--race--race-invites-associate');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-races--race--race-invites-associate" onclick="cancelTryOut('POSTapi-races--race--race-invites-associate');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-races--race--race-invites-associate" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/races/{race}/race-invites/associate</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="POSTapi-races--race--race-invites-associate" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>related_key</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="related_key" data-endpoint="POSTapi-races--race--race-invites-associate" data-component="body" required  hidden>
<br>
</p>

</form>
<h2>Disassociates resource from another resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/races/qui/race-invites/est/dissociate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/qui/race-invites/est/dissociate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-races--race--race-invites--race_invite---dissociate" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-races--race--race-invites--race_invite---dissociate"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-races--race--race-invites--race_invite---dissociate"></code></pre>
</div>
<div id="execution-error-DELETEapi-races--race--race-invites--race_invite---dissociate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-races--race--race-invites--race_invite---dissociate"></code></pre>
</div>
<form id="form-DELETEapi-races--race--race-invites--race_invite---dissociate" data-method="DELETE" data-path="api/races/{race}/race-invites/{race_invite?}/dissociate" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-races--race--race-invites--race_invite---dissociate', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-races--race--race-invites--race_invite---dissociate" onclick="tryItOut('DELETEapi-races--race--race-invites--race_invite---dissociate');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-races--race--race-invites--race_invite---dissociate" onclick="cancelTryOut('DELETEapi-races--race--race-invites--race_invite---dissociate');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-races--race--race-invites--race_invite---dissociate" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/races/{race}/race-invites/{race_invite?}/dissociate</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="DELETEapi-races--race--race-invites--race_invite---dissociate" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>race_invite</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="race_invite" data-endpoint="DELETEapi-races--race--race-invites--race_invite---dissociate" data-component="url"  hidden>
<br>
</p>
</form>
<h2>Fetch the list of relation resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/races/qui/race-invites" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/qui/race-invites"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-races--race--race-invites" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-races--race--race-invites"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-races--race--race-invites"></code></pre>
</div>
<div id="execution-error-GETapi-races--race--race-invites" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-races--race--race-invites"></code></pre>
</div>
<form id="form-GETapi-races--race--race-invites" data-method="GET" data-path="api/races/{race}/race-invites" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-races--race--race-invites', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-races--race--race-invites" onclick="tryItOut('GETapi-races--race--race-invites');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-races--race--race-invites" onclick="cancelTryOut('GETapi-races--race--race-invites');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-races--race--race-invites" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/races/{race}/race-invites</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="GETapi-races--race--race-invites" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Create a race invite.</h2>
<p>Will trigger a notification to be sent to the person that is being invited.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/races/quidem/race-invites" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"contact_method_value":"ullam","contact_method_name":"maxime"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/quidem/race-invites"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "contact_method_value": "ullam",
    "contact_method_name": "maxime"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-races--race--race-invites" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-races--race--race-invites"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-races--race--race-invites"></code></pre>
</div>
<div id="execution-error-POSTapi-races--race--race-invites" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-races--race--race-invites"></code></pre>
</div>
<form id="form-POSTapi-races--race--race-invites" data-method="POST" data-path="api/races/{race}/race-invites" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-races--race--race-invites', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-races--race--race-invites" onclick="tryItOut('POSTapi-races--race--race-invites');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-races--race--race-invites" onclick="cancelTryOut('POSTapi-races--race--race-invites');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-races--race--race-invites" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/races/{race}/race-invites</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="POSTapi-races--race--race-invites" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>contact_method_value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="contact_method_value" data-endpoint="POSTapi-races--race--race-invites" data-component="body" required  hidden>
<br>
the user_id, phone number, or email of the person to invite</p>
<p>
<b><code>contact_method_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="contact_method_name" data-endpoint="POSTapi-races--race--race-invites" data-component="body" required  hidden>
<br>
the method to use to notify the user of the invite</p>

</form>
<h2>Fetch a relation resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/races/minima/race-invites/esse" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/minima/race-invites/esse"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-races--race--race-invites--race_invite--" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-races--race--race-invites--race_invite--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-races--race--race-invites--race_invite--"></code></pre>
</div>
<div id="execution-error-GETapi-races--race--race-invites--race_invite--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-races--race--race-invites--race_invite--"></code></pre>
</div>
<form id="form-GETapi-races--race--race-invites--race_invite--" data-method="GET" data-path="api/races/{race}/race-invites/{race_invite?}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-races--race--race-invites--race_invite--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-races--race--race-invites--race_invite--" onclick="tryItOut('GETapi-races--race--race-invites--race_invite--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-races--race--race-invites--race_invite--" onclick="cancelTryOut('GETapi-races--race--race-invites--race_invite--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-races--race--race-invites--race_invite--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/races/{race}/race-invites/{race_invite?}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="GETapi-races--race--race-invites--race_invite--" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>race_invite</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="race_invite" data-endpoint="GETapi-races--race--race-invites--race_invite--" data-component="url"  hidden>
<br>
</p>
</form>
<h2>Update a race invite.</h2>
<p>Will trigger a notification to be sent to the person that is being invited.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/races/inventore/race-invites/suscipit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"contact_method_value":"quod","contact_method_name":"aut"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/inventore/race-invites/suscipit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "contact_method_value": "quod",
    "contact_method_name": "aut"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PUTapi-races--race--race-invites--race_invite--" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-races--race--race-invites--race_invite--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-races--race--race-invites--race_invite--"></code></pre>
</div>
<div id="execution-error-PUTapi-races--race--race-invites--race_invite--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-races--race--race-invites--race_invite--"></code></pre>
</div>
<form id="form-PUTapi-races--race--race-invites--race_invite--" data-method="PUT" data-path="api/races/{race}/race-invites/{race_invite?}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-races--race--race-invites--race_invite--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-races--race--race-invites--race_invite--" onclick="tryItOut('PUTapi-races--race--race-invites--race_invite--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-races--race--race-invites--race_invite--" onclick="cancelTryOut('PUTapi-races--race--race-invites--race_invite--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-races--race--race-invites--race_invite--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/races/{race}/race-invites/{race_invite?}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/races/{race}/race-invites/{race_invite?}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="PUTapi-races--race--race-invites--race_invite--" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>race_invite</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="race_invite" data-endpoint="PUTapi-races--race--race-invites--race_invite--" data-component="url"  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>contact_method_value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="contact_method_value" data-endpoint="PUTapi-races--race--race-invites--race_invite--" data-component="body" required  hidden>
<br>
the user_id, phone number, or email of the person to invite</p>
<p>
<b><code>contact_method_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="contact_method_name" data-endpoint="PUTapi-races--race--race-invites--race_invite--" data-component="body" required  hidden>
<br>
the method to use to notify the user of the invite</p>

</form>
<h2>Delete a relation resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/races/officia/race-invites/repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/officia/race-invites/repellat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-races--race--race-invites--race_invite--" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-races--race--race-invites--race_invite--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-races--race--race-invites--race_invite--"></code></pre>
</div>
<div id="execution-error-DELETEapi-races--race--race-invites--race_invite--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-races--race--race-invites--race_invite--"></code></pre>
</div>
<form id="form-DELETEapi-races--race--race-invites--race_invite--" data-method="DELETE" data-path="api/races/{race}/race-invites/{race_invite?}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-races--race--race-invites--race_invite--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-races--race--race-invites--race_invite--" onclick="tryItOut('DELETEapi-races--race--race-invites--race_invite--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-races--race--race-invites--race_invite--" onclick="cancelTryOut('DELETEapi-races--race--race-invites--race_invite--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-races--race--race-invites--race_invite--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/races/{race}/race-invites/{race_invite?}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="DELETEapi-races--race--race-invites--race_invite--" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>race_invite</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="race_invite" data-endpoint="DELETEapi-races--race--race-invites--race_invite--" data-component="url"  hidden>
<br>
</p>
</form><h1>Races/Participants</h1>
<h2>Fetch the list of relation resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/races/natus/race-participants/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/natus/race-participants/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-races--race--race-participants-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-races--race--race-participants-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-races--race--race-participants-search"></code></pre>
</div>
<div id="execution-error-POSTapi-races--race--race-participants-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-races--race--race-participants-search"></code></pre>
</div>
<form id="form-POSTapi-races--race--race-participants-search" data-method="POST" data-path="api/races/{race}/race-participants/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-races--race--race-participants-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-races--race--race-participants-search" onclick="tryItOut('POSTapi-races--race--race-participants-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-races--race--race-participants-search" onclick="cancelTryOut('POSTapi-races--race--race-participants-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-races--race--race-participants-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/races/{race}/race-participants/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="POSTapi-races--race--race-participants-search" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Create a batch of new relation resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/races/ut/race-participants/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["doloremque"]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/ut/race-participants/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "doloremque"
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-races--race--race-participants-batch" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-races--race--race-participants-batch"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-races--race--race-participants-batch"></code></pre>
</div>
<div id="execution-error-POSTapi-races--race--race-participants-batch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-races--race--race-participants-batch"></code></pre>
</div>
<form id="form-POSTapi-races--race--race-participants-batch" data-method="POST" data-path="api/races/{race}/race-participants/batch" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-races--race--race-participants-batch', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-races--race--race-participants-batch" onclick="tryItOut('POSTapi-races--race--race-participants-batch');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-races--race--race-participants-batch" onclick="cancelTryOut('POSTapi-races--race--race-participants-batch');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-races--race--race-participants-batch" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/races/{race}/race-participants/batch</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="POSTapi-races--race--race-participants-batch" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>resources</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="resources.0" data-endpoint="POSTapi-races--race--race-participants-batch" data-component="body" required  hidden>
<input type="text" name="resources.1" data-endpoint="POSTapi-races--race--race-participants-batch" data-component="body" hidden>
<br>
</p>

</form>
<h2>Updates a batch of relation resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "http://localhost/api/races/impedit/race-participants/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["ut"]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/impedit/race-participants/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "ut"
    ]
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PATCHapi-races--race--race-participants-batch" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-races--race--race-participants-batch"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-races--race--race-participants-batch"></code></pre>
</div>
<div id="execution-error-PATCHapi-races--race--race-participants-batch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-races--race--race-participants-batch"></code></pre>
</div>
<form id="form-PATCHapi-races--race--race-participants-batch" data-method="PATCH" data-path="api/races/{race}/race-participants/batch" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-races--race--race-participants-batch', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-races--race--race-participants-batch" onclick="tryItOut('PATCHapi-races--race--race-participants-batch');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-races--race--race-participants-batch" onclick="cancelTryOut('PATCHapi-races--race--race-participants-batch');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-races--race--race-participants-batch" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/races/{race}/race-participants/batch</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="PATCHapi-races--race--race-participants-batch" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>resources</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="resources.0" data-endpoint="PATCHapi-races--race--race-participants-batch" data-component="body" required  hidden>
<input type="text" name="resources.1" data-endpoint="PATCHapi-races--race--race-participants-batch" data-component="body" hidden>
<br>
</p>

</form>
<h2>Deletes a batch of relation resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/races/ab/race-participants/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/ab/race-participants/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-races--race--race-participants-batch" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-races--race--race-participants-batch"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-races--race--race-participants-batch"></code></pre>
</div>
<div id="execution-error-DELETEapi-races--race--race-participants-batch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-races--race--race-participants-batch"></code></pre>
</div>
<form id="form-DELETEapi-races--race--race-participants-batch" data-method="DELETE" data-path="api/races/{race}/race-participants/batch" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-races--race--race-participants-batch', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-races--race--race-participants-batch" onclick="tryItOut('DELETEapi-races--race--race-participants-batch');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-races--race--race-participants-batch" onclick="cancelTryOut('DELETEapi-races--race--race-participants-batch');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-races--race--race-participants-batch" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/races/{race}/race-participants/batch</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="DELETEapi-races--race--race-participants-batch" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Associates resource with another resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/races/maiores/race-participants/associate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"related_key":"numquam"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/maiores/race-participants/associate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "related_key": "numquam"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-races--race--race-participants-associate" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-races--race--race-participants-associate"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-races--race--race-participants-associate"></code></pre>
</div>
<div id="execution-error-POSTapi-races--race--race-participants-associate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-races--race--race-participants-associate"></code></pre>
</div>
<form id="form-POSTapi-races--race--race-participants-associate" data-method="POST" data-path="api/races/{race}/race-participants/associate" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-races--race--race-participants-associate', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-races--race--race-participants-associate" onclick="tryItOut('POSTapi-races--race--race-participants-associate');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-races--race--race-participants-associate" onclick="cancelTryOut('POSTapi-races--race--race-participants-associate');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-races--race--race-participants-associate" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/races/{race}/race-participants/associate</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="POSTapi-races--race--race-participants-associate" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>related_key</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="related_key" data-endpoint="POSTapi-races--race--race-participants-associate" data-component="body" required  hidden>
<br>
</p>

</form>
<h2>Disassociates resource from another resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/races/sequi/race-participants/non/dissociate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/sequi/race-participants/non/dissociate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-races--race--race-participants--race_participant---dissociate" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-races--race--race-participants--race_participant---dissociate"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-races--race--race-participants--race_participant---dissociate"></code></pre>
</div>
<div id="execution-error-DELETEapi-races--race--race-participants--race_participant---dissociate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-races--race--race-participants--race_participant---dissociate"></code></pre>
</div>
<form id="form-DELETEapi-races--race--race-participants--race_participant---dissociate" data-method="DELETE" data-path="api/races/{race}/race-participants/{race_participant?}/dissociate" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-races--race--race-participants--race_participant---dissociate', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-races--race--race-participants--race_participant---dissociate" onclick="tryItOut('DELETEapi-races--race--race-participants--race_participant---dissociate');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-races--race--race-participants--race_participant---dissociate" onclick="cancelTryOut('DELETEapi-races--race--race-participants--race_participant---dissociate');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-races--race--race-participants--race_participant---dissociate" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/races/{race}/race-participants/{race_participant?}/dissociate</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="DELETEapi-races--race--race-participants--race_participant---dissociate" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>race_participant</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="race_participant" data-endpoint="DELETEapi-races--race--race-participants--race_participant---dissociate" data-component="url"  hidden>
<br>
</p>
</form>
<h2>Fetch the list of relation resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/races/quaerat/race-participants" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/quaerat/race-participants"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-races--race--race-participants" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-races--race--race-participants"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-races--race--race-participants"></code></pre>
</div>
<div id="execution-error-GETapi-races--race--race-participants" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-races--race--race-participants"></code></pre>
</div>
<form id="form-GETapi-races--race--race-participants" data-method="GET" data-path="api/races/{race}/race-participants" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-races--race--race-participants', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-races--race--race-participants" onclick="tryItOut('GETapi-races--race--race-participants');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-races--race--race-participants" onclick="cancelTryOut('GETapi-races--race--race-participants');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-races--race--race-participants" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/races/{race}/race-participants</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="GETapi-races--race--race-participants" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Create a race participant.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/races/dignissimos/race-participants" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":236161229.2,"inviter_id":8404}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/dignissimos/race-participants"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 236161229.2,
    "inviter_id": 8404
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-races--race--race-participants" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-races--race--race-participants"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-races--race--race-participants"></code></pre>
</div>
<div id="execution-error-POSTapi-races--race--race-participants" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-races--race--race-participants"></code></pre>
</div>
<form id="form-POSTapi-races--race--race-participants" data-method="POST" data-path="api/races/{race}/race-participants" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-races--race--race-participants', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-races--race--race-participants" onclick="tryItOut('POSTapi-races--race--race-participants');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-races--race--race-participants" onclick="cancelTryOut('POSTapi-races--race--race-participants');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-races--race--race-participants" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/races/{race}/race-participants</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="POSTapi-races--race--race-participants" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-races--race--race-participants" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>inviter_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="inviter_id" data-endpoint="POSTapi-races--race--race-participants" data-component="body"  hidden>
<br>
</p>

</form>
<h2>Fetch a relation resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/races/perferendis/race-participants/labore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/perferendis/race-participants/labore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-races--race--race-participants--race_participant--" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-races--race--race-participants--race_participant--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-races--race--race-participants--race_participant--"></code></pre>
</div>
<div id="execution-error-GETapi-races--race--race-participants--race_participant--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-races--race--race-participants--race_participant--"></code></pre>
</div>
<form id="form-GETapi-races--race--race-participants--race_participant--" data-method="GET" data-path="api/races/{race}/race-participants/{race_participant?}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-races--race--race-participants--race_participant--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-races--race--race-participants--race_participant--" onclick="tryItOut('GETapi-races--race--race-participants--race_participant--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-races--race--race-participants--race_participant--" onclick="cancelTryOut('GETapi-races--race--race-participants--race_participant--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-races--race--race-participants--race_participant--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/races/{race}/race-participants/{race_participant?}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="GETapi-races--race--race-participants--race_participant--" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>race_participant</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="race_participant" data-endpoint="GETapi-races--race--race-participants--race_participant--" data-component="url"  hidden>
<br>
</p>
</form>
<h2>Update a race participant.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/races/magnam/race-participants/beatae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":504264.472052,"inviter_id":14627.6209725}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/magnam/race-participants/beatae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 504264.472052,
    "inviter_id": 14627.6209725
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PUTapi-races--race--race-participants--race_participant--" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-races--race--race-participants--race_participant--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-races--race--race-participants--race_participant--"></code></pre>
</div>
<div id="execution-error-PUTapi-races--race--race-participants--race_participant--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-races--race--race-participants--race_participant--"></code></pre>
</div>
<form id="form-PUTapi-races--race--race-participants--race_participant--" data-method="PUT" data-path="api/races/{race}/race-participants/{race_participant?}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-races--race--race-participants--race_participant--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-races--race--race-participants--race_participant--" onclick="tryItOut('PUTapi-races--race--race-participants--race_participant--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-races--race--race-participants--race_participant--" onclick="cancelTryOut('PUTapi-races--race--race-participants--race_participant--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-races--race--race-participants--race_participant--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/races/{race}/race-participants/{race_participant?}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/races/{race}/race-participants/{race_participant?}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="PUTapi-races--race--race-participants--race_participant--" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>race_participant</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="race_participant" data-endpoint="PUTapi-races--race--race-participants--race_participant--" data-component="url"  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-races--race--race-participants--race_participant--" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>inviter_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="inviter_id" data-endpoint="PUTapi-races--race--race-participants--race_participant--" data-component="body"  hidden>
<br>
</p>

</form>
<h2>Delete a relation resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/races/est/race-participants/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/races/est/race-participants/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-races--race--race-participants--race_participant--" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-races--race--race-participants--race_participant--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-races--race--race-participants--race_participant--"></code></pre>
</div>
<div id="execution-error-DELETEapi-races--race--race-participants--race_participant--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-races--race--race-participants--race_participant--"></code></pre>
</div>
<form id="form-DELETEapi-races--race--race-participants--race_participant--" data-method="DELETE" data-path="api/races/{race}/race-participants/{race_participant?}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-races--race--race-participants--race_participant--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-races--race--race-participants--race_participant--" onclick="tryItOut('DELETEapi-races--race--race-participants--race_participant--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-races--race--race-participants--race_participant--" onclick="cancelTryOut('DELETEapi-races--race--race-participants--race_participant--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-races--race--race-participants--race_participant--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/races/{race}/race-participants/{race_participant?}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>race</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="race" data-endpoint="DELETEapi-races--race--race-participants--race_participant--" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>race_participant</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="race_participant" data-endpoint="DELETEapi-races--race--race-participants--race_participant--" data-component="url"  hidden>
<br>
</p>
</form><h1>Social</h1>
<h2>Fetches the list of resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/user-friends/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-friends/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-user-friends-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-friends-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-friends-search"></code></pre>
</div>
<div id="execution-error-POSTapi-user-friends-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-friends-search"></code></pre>
</div>
<form id="form-POSTapi-user-friends-search" data-method="POST" data-path="api/user-friends/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-friends-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-friends-search" onclick="tryItOut('POSTapi-user-friends-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-friends-search" onclick="cancelTryOut('POSTapi-user-friends-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-friends-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user-friends/search</code></b>
</p>
</form>
<h2>Creates a batch of new resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/user-friends/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["quod"]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-friends/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "quod"
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-user-friends-batch" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-friends-batch"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-friends-batch"></code></pre>
</div>
<div id="execution-error-POSTapi-user-friends-batch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-friends-batch"></code></pre>
</div>
<form id="form-POSTapi-user-friends-batch" data-method="POST" data-path="api/user-friends/batch" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-friends-batch', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-friends-batch" onclick="tryItOut('POSTapi-user-friends-batch');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-friends-batch" onclick="cancelTryOut('POSTapi-user-friends-batch');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-friends-batch" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user-friends/batch</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>resources</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="resources.0" data-endpoint="POSTapi-user-friends-batch" data-component="body" required  hidden>
<input type="text" name="resources.1" data-endpoint="POSTapi-user-friends-batch" data-component="body" hidden>
<br>
</p>

</form>
<h2>Update a batch of resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "http://localhost/api/user-friends/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["et"]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-friends/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "et"
    ]
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PATCHapi-user-friends-batch" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-user-friends-batch"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-user-friends-batch"></code></pre>
</div>
<div id="execution-error-PATCHapi-user-friends-batch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-user-friends-batch"></code></pre>
</div>
<form id="form-PATCHapi-user-friends-batch" data-method="PATCH" data-path="api/user-friends/batch" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-user-friends-batch', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-user-friends-batch" onclick="tryItOut('PATCHapi-user-friends-batch');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-user-friends-batch" onclick="cancelTryOut('PATCHapi-user-friends-batch');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-user-friends-batch" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/user-friends/batch</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>resources</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="resources.0" data-endpoint="PATCHapi-user-friends-batch" data-component="body" required  hidden>
<input type="text" name="resources.1" data-endpoint="PATCHapi-user-friends-batch" data-component="body" hidden>
<br>
</p>

</form>
<h2>Deletes a batch of resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/user-friends/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-friends/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-user-friends-batch" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-user-friends-batch"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-user-friends-batch"></code></pre>
</div>
<div id="execution-error-DELETEapi-user-friends-batch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-user-friends-batch"></code></pre>
</div>
<form id="form-DELETEapi-user-friends-batch" data-method="DELETE" data-path="api/user-friends/batch" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-user-friends-batch', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-user-friends-batch" onclick="tryItOut('DELETEapi-user-friends-batch');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-user-friends-batch" onclick="cancelTryOut('DELETEapi-user-friends-batch');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-user-friends-batch" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/user-friends/batch</code></b>
</p>
</form>
<h2>Fetches the list of resources.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/user-friends" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-friends"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-user-friends" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user-friends"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user-friends"></code></pre>
</div>
<div id="execution-error-GETapi-user-friends" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user-friends"></code></pre>
</div>
<form id="form-GETapi-user-friends" data-method="GET" data-path="api/user-friends" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user-friends', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user-friends" onclick="tryItOut('GETapi-user-friends');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user-friends" onclick="cancelTryOut('GETapi-user-friends');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user-friends" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user-friends</code></b>
</p>
</form>
<h2>Create a friend request.</h2>
<p>Request another user to be a friend. Will send a notification to the user being invited.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/user-friends" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"invitee_id":15}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-friends"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "invitee_id": 15
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-user-friends" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-friends"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-friends"></code></pre>
</div>
<div id="execution-error-POSTapi-user-friends" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-friends"></code></pre>
</div>
<form id="form-POSTapi-user-friends" data-method="POST" data-path="api/user-friends" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-friends', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-friends" onclick="tryItOut('POSTapi-user-friends');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-friends" onclick="cancelTryOut('POSTapi-user-friends');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-friends" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user-friends</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>invitee_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="invitee_id" data-endpoint="POSTapi-user-friends" data-component="body" required  hidden>
<br>
the id of the user to invite as a friend</p>

</form>
<h2>Fetches resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/user-friends/commodi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-friends/commodi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-user-friends--user_friend-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user-friends--user_friend-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user-friends--user_friend-"></code></pre>
</div>
<div id="execution-error-GETapi-user-friends--user_friend-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user-friends--user_friend-"></code></pre>
</div>
<form id="form-GETapi-user-friends--user_friend-" data-method="GET" data-path="api/user-friends/{user_friend}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user-friends--user_friend-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user-friends--user_friend-" onclick="tryItOut('GETapi-user-friends--user_friend-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user-friends--user_friend-" onclick="cancelTryOut('GETapi-user-friends--user_friend-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user-friends--user_friend-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user-friends/{user_friend}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user_friend</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_friend" data-endpoint="GETapi-user-friends--user_friend-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update a friend request.</h2>
<p>Accept or remove the request.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/user-friends/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"status":"ut"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-friends/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "ut"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PUTapi-user-friends--user_friend-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-user-friends--user_friend-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-user-friends--user_friend-"></code></pre>
</div>
<div id="execution-error-PUTapi-user-friends--user_friend-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-user-friends--user_friend-"></code></pre>
</div>
<form id="form-PUTapi-user-friends--user_friend-" data-method="PUT" data-path="api/user-friends/{user_friend}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-user-friends--user_friend-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-user-friends--user_friend-" onclick="tryItOut('PUTapi-user-friends--user_friend-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-user-friends--user_friend-" onclick="cancelTryOut('PUTapi-user-friends--user_friend-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-user-friends--user_friend-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/user-friends/{user_friend}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/user-friends/{user_friend}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user_friend</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_friend" data-endpoint="PUTapi-user-friends--user_friend-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="status" data-endpoint="PUTapi-user-friends--user_friend-" data-component="body" required  hidden>
<br>
can be updated to "accepted" or "declined"</p>

</form>
<h2>Deletes a resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/user-friends/eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-friends/eum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-user-friends--user_friend-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-user-friends--user_friend-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-user-friends--user_friend-"></code></pre>
</div>
<div id="execution-error-DELETEapi-user-friends--user_friend-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-user-friends--user_friend-"></code></pre>
</div>
<form id="form-DELETEapi-user-friends--user_friend-" data-method="DELETE" data-path="api/user-friends/{user_friend}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-user-friends--user_friend-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-user-friends--user_friend-" onclick="tryItOut('DELETEapi-user-friends--user_friend-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-user-friends--user_friend-" onclick="cancelTryOut('DELETEapi-user-friends--user_friend-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-user-friends--user_friend-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/user-friends/{user_friend}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user_friend</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_friend" data-endpoint="DELETEapi-user-friends--user_friend-" data-component="url" required  hidden>
<br>
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>