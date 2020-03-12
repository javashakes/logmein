# LogMeIn

An ExpressionEngine Plugin that Logs a specified user in.

**Orignally developed by:** <a href="https://github.com/bencroker" target="_blank" title="Ben Croker on GitHub">Ben Croker</a> of <a href="https://putyourlightson.com/" target="_blank" title="Check out Ben Croker's company!">PutYourLightsOn</a>.

*Orignal plugin (EE 1x and 2x) can be downloaded for free at <a href="https://devot-ee.com/add-ons/logmein" target="_blank" title="Visit devot:ee">devot:ee</a>.*

> Ben,
> I couldn't find this being maintained anywhere, so I took it over because it's still useful to me. Yell at me if want to take it back over!

## Requirements

ExpressionEngine v2+

*Compatible with EE v2-5*

## Installation

- **EE v2:** Copy `format_this` directory into `/system/expressionengine/third_party/`
- **EE v3:** Copy `format_this` directory into `/system/user/addons/`
- **EE v4:** Copy `format_this` directory into `/system/user/addons/`
- **EE v5:** Copy `format_this` directory into `/system/user/addons/`

## Usage

### `{exp:logmein:now}`

Logs in a specified user.

##### `username` *(required)*

The username of the account you want to log into.

- **Type:** string

##### `if_member_group` *(optional)*

Defines the member group id that the currently logged in user must belong to

- **Type:** int

##### `expire` *(optional)*

Sets the cookie expiration time (in seconds).

- **Type:** int
- **Default:** `86400` *(24 hours)*

#### Examples

Put the following line into any template to log the specified user/visitor in

```
{exp:logmein:now username="priveleged_guest" if_member_group="3" expire="3600"}
```

## Changelog

### 2.0.0 *(2020-03-12)*

- ExpressionEngine 3+ compatibility
- Overhauled documentation
- Refactored `now` method
- Removed `{exp:logmein:logout}` tag/method
- Added License
- Added Disclaimer

### 1.5.0 *(~2015-10-09)*

- EE v2 compatibility

### 1.4.0 *(~2008-10-03)*

- Initial release (EE v1)

## License

Copyright © Matthew Kirkpatrick and individual contributors. All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
3. Neither the name of the author nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

## Disclaimer

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
