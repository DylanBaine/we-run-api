# Races/Participants


## Fetch the list of relation resources.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/races/numquam/race-participants/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/numquam/race-participants/search"
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


## Create a batch of new relation resources.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/races/totam/race-participants/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["molestias"]}'

```

```javascript
const url = new URL(
    "http://localhost/api/races/totam/race-participants/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "molestias"
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Updates a batch of relation resources.




> Example request:

```bash
curl -X PATCH \
    "http://localhost/api/races/et/race-participants/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["rerum"]}'

```

```javascript
const url = new URL(
    "http://localhost/api/races/et/race-participants/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "rerum"
    ]
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Deletes a batch of relation resources.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/races/eaque/race-participants/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/eaque/race-participants/batch"
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


## Associates resource with another resource.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/races/ipsum/race-participants/associate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"related_key":"facere"}'

```

```javascript
const url = new URL(
    "http://localhost/api/races/ipsum/race-participants/associate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "related_key": "facere"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Disassociates resource from another resource.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/races/sequi/race-participants/nostrum/dissociate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/sequi/race-participants/nostrum/dissociate"
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


## Fetch the list of relation resources.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/races/doloribus/race-participants" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/doloribus/race-participants"
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


## Create a race participant.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/races/rerum/race-participants" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":418036.188028968,"inviter_id":8.382}'

```

```javascript
const url = new URL(
    "http://localhost/api/races/rerum/race-participants"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 418036.188028968,
    "inviter_id": 8.382
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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
<b><code>inviter_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="inviter_id" data-endpoint="POSTapi-races--race--race-participants" data-component="body" required  hidden>
<br>
</p>

</form>


## Fetch a relation resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/races/maiores/race-participants/vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/maiores/race-participants/vel"
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


## Update a race participant.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/races/commodi/race-participants/velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":62485.23,"inviter_id":89188}'

```

```javascript
const url = new URL(
    "http://localhost/api/races/commodi/race-participants/velit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 62485.23,
    "inviter_id": 89188
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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
<b><code>inviter_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="inviter_id" data-endpoint="PUTapi-races--race--race-participants--race_participant--" data-component="body" required  hidden>
<br>
</p>

</form>


## Delete a relation resource.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/races/rerum/race-participants/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/rerum/race-participants/qui"
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
</form>



