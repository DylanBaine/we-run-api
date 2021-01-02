# Races


## Fetches the list of resources.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/races/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


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


## Creates a batch of new resources.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/races/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["voluptatum"]}'

```

```javascript
const url = new URL(
    "http://localhost/api/races/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "voluptatum"
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Update a batch of resources.




> Example request:

```bash
curl -X PATCH \
    "http://localhost/api/races/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["ex"]}'

```

```javascript
const url = new URL(
    "http://localhost/api/races/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "ex"
    ]
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Deletes a batch of resources.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/races/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


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


## Fetches the list of resources.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/races" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Create a race.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/races" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"corporis","description":"officiis","start_time":"quisquam","distance_number":371124.2876,"distance_units":"provident"}'

```

```javascript
const url = new URL(
    "http://localhost/api/races"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "corporis",
    "description": "officiis",
    "start_time": "quisquam",
    "distance_number": 371124.2876,
    "distance_units": "provident"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Fetches resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/races/quod" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/quod"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Update a race.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/races/quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"inventore","description":"quia","start_time":"natus","distance_number":577.65,"distance_units":"natus"}'

```

```javascript
const url = new URL(
    "http://localhost/api/races/quis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "inventore",
    "description": "quia",
    "start_time": "natus",
    "distance_number": 577.65,
    "distance_units": "natus"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Deletes a resource.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/races/asperiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/asperiores"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


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
</form>



