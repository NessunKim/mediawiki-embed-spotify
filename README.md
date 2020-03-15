# EmbedSpotify
MediaWiki extension to embed Spotify player

## Installation
Download the `zip` file of the latest release [here](https://github.com/NessunKim/mediawiki-embed-spotify/releases) and unzip into `extensions/EmbedSpotify` directory.

Add the following code at the bottom of your LocalSettings.php:

```php
wfLoadExtension( 'EmbedSpotify' );
```

## Usage
Copy the embed code from the Spotify app. The code should be something like:

```html
<iframe src="https://open.spotify.com/embed/album/6EmLwnyjJRVgNOmOUpVhzz" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
```

You need to copy the text between `<iframe src="https://open.spotify.com/embed/` and `" width`. In the example, it is the `album/6EmLwnyjJRVgNOmOUpVhzz` part. It can start with `album/`, `playlist/`, or `artist/` depending on the type of the song list you embed.

To embed the player, paste the copied text between `<spotify>` and `</spotify>`.

So, `<spotify>album/6EmLwnyjJRVgNOmOUpVhzz</spotify>` is the text you have to insert into your wiki page.

You can specify the width and height of the player in the tag's attributes such as `<spotify width="300" height="200">album/6EmLwnyjJRVgNOmOUpVhzz</spotify>`. If not specified, 300 and 380 will be used for width and height respectively.