# API


## Destroy an authenticated session.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/logout"
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


<div id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"></code></pre>
</div>
<div id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout"></code></pre>
</div>
<form id="form-POSTapi-logout" data-method="POST" data-path="api/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-logout" onclick="tryItOut('POSTapi-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-logout" onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/logout</code></b>
</p>
</form>


## Send a reset link to the given user.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/forgot-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/forgot-password"
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


<div id="execution-results-POSTapi-forgot-password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-forgot-password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-forgot-password"></code></pre>
</div>
<div id="execution-error-POSTapi-forgot-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-forgot-password"></code></pre>
</div>
<form id="form-POSTapi-forgot-password" data-method="POST" data-path="api/forgot-password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-forgot-password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-forgot-password" onclick="tryItOut('POSTapi-forgot-password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-forgot-password" onclick="cancelTryOut('POSTapi-forgot-password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-forgot-password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/forgot-password</code></b>
</p>
</form>


## Reset the user&#039;s password.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/reset-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/reset-password"
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


<div id="execution-results-POSTapi-reset-password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-reset-password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-reset-password"></code></pre>
</div>
<div id="execution-error-POSTapi-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-reset-password"></code></pre>
</div>
<form id="form-POSTapi-reset-password" data-method="POST" data-path="api/reset-password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-reset-password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-reset-password" onclick="tryItOut('POSTapi-reset-password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-reset-password" onclick="cancelTryOut('POSTapi-reset-password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-reset-password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/reset-password</code></b>
</p>
</form>


## Update the user&#039;s profile information.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/user/profile-information" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user/profile-information"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-user-profile-information" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-user-profile-information"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-user-profile-information"></code></pre>
</div>
<div id="execution-error-PUTapi-user-profile-information" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-user-profile-information"></code></pre>
</div>
<form id="form-PUTapi-user-profile-information" data-method="PUT" data-path="api/user/profile-information" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-user-profile-information', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-user-profile-information" onclick="tryItOut('PUTapi-user-profile-information');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-user-profile-information" onclick="cancelTryOut('PUTapi-user-profile-information');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-user-profile-information" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/user/profile-information</code></b>
</p>
</form>


## Update the user&#039;s password.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/user/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-user-password" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-user-password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-user-password"></code></pre>
</div>
<div id="execution-error-PUTapi-user-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-user-password"></code></pre>
</div>
<form id="form-PUTapi-user-password" data-method="PUT" data-path="api/user/password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-user-password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-user-password" onclick="tryItOut('PUTapi-user-password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-user-password" onclick="cancelTryOut('PUTapi-user-password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-user-password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/user/password</code></b>
</p>
</form>


## Confirm the user&#039;s password.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/user/confirm-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user/confirm-password"
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


<div id="execution-results-POSTapi-user-confirm-password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-confirm-password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-confirm-password"></code></pre>
</div>
<div id="execution-error-POSTapi-user-confirm-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-confirm-password"></code></pre>
</div>
<form id="form-POSTapi-user-confirm-password" data-method="POST" data-path="api/user/confirm-password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-confirm-password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-confirm-password" onclick="tryItOut('POSTapi-user-confirm-password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-confirm-password" onclick="cancelTryOut('POSTapi-user-confirm-password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-confirm-password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user/confirm-password</code></b>
</p>
</form>



