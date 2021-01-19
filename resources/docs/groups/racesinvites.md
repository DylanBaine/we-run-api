# Races/Invites


## Fetch the list of relation resources.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/races/sed/race-invites/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/sed/race-invites/search"
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


## Create a batch of new relation resources.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/races/nostrum/race-invites/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["ea"]}'

```

```javascript
const url = new URL(
    "http://localhost/api/races/nostrum/race-invites/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "ea"
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Updates a batch of relation resources.




> Example request:

```bash
curl -X PATCH \
    "http://localhost/api/races/dignissimos/race-invites/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["cum"]}'

```

```javascript
const url = new URL(
    "http://localhost/api/races/dignissimos/race-invites/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "cum"
    ]
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Deletes a batch of relation resources.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/races/voluptatem/race-invites/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/voluptatem/race-invites/batch"
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


## Associates resource with another resource.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/races/accusamus/race-invites/associate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"related_key":"omnis"}'

```

```javascript
const url = new URL(
    "http://localhost/api/races/accusamus/race-invites/associate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "related_key": "omnis"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Disassociates resource from another resource.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/races/perferendis/race-invites/perferendis/dissociate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/perferendis/race-invites/perferendis/dissociate"
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


## Fetch the list of relation resources.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/races/aut/race-invites" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/aut/race-invites"
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


## Create a race invite.


Will trigger a notification to be sent to the person that is being invited.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/races/ipsam/race-invites" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"contact_method_value":"ut","contact_method_name":"ullam"}'

```

```javascript
const url = new URL(
    "http://localhost/api/races/ipsam/race-invites"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "contact_method_value": "ut",
    "contact_method_name": "ullam"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Fetch a relation resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/races/atque/race-invites/aperiam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/atque/race-invites/aperiam"
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


## Update a race invite.


Will trigger a notification to be sent to the person that is being invited.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/races/quod/race-invites/vitae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"contact_method_value":"magni","contact_method_name":"aperiam"}'

```

```javascript
const url = new URL(
    "http://localhost/api/races/quod/race-invites/vitae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "contact_method_value": "magni",
    "contact_method_name": "aperiam"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Delete a relation resource.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/races/quisquam/race-invites/porro" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/races/quisquam/race-invites/porro"
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
</form>



