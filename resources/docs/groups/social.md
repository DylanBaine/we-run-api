# Social


## Fetches the list of resources.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/user-friends/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user-friends/search"
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


## Creates a batch of new resources.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/user-friends/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["ducimus"]}'

```

```javascript
const url = new URL(
    "http://localhost/api/user-friends/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "ducimus"
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Update a batch of resources.




> Example request:

```bash
curl -X PATCH \
    "http://localhost/api/user-friends/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resources":["vel"]}'

```

```javascript
const url = new URL(
    "http://localhost/api/user-friends/batch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "resources": [
        "vel"
    ]
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Deletes a batch of resources.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/user-friends/batch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user-friends/batch"
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


## Fetches the list of resources.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user-friends" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user-friends"
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


## Create a friend request.


Request another user to be a friend. Will send a notification to the user being invited.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/user-friends" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"invitee_id":11}'

```

```javascript
const url = new URL(
    "http://localhost/api/user-friends"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "invitee_id": 11
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Fetches resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user-friends/vero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user-friends/vero"
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


## Update a friend request.


Accept or remove the request.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/user-friends/odit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"status":"quia"}'

```

```javascript
const url = new URL(
    "http://localhost/api/user-friends/odit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "quia"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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


## Deletes a resource.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/user-friends/ad" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user-friends/ad"
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



