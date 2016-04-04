# Sailor
Ahoy, Sailor! Drop your anchor and board our ship. We've got a theme for you to plunder.

Sailor is a modern, lightweight theme designed to work with Anchor CMS; why you may ask? Simply because Anchor CMS is possibly the best CMS I've ever used and as such it should have a vast library of amazing themes, or so you'd think. Due to Anchor sailing in the shadow of other CMS's like October and Wordpress, it appears like not too many developers have made themes for it. In this case, anchor needs momentum, so smaller = faster right? Definitely! That's why when designing this theme I intended to make it as lightweight as possible and by only using styles that were required.


Inspiration for this design came from the Anchor Docs and other online blog's I've been to. Not to mention that some of the code styles came from my experience with Github.

Anyway, you can view a live demo of ![Sailor](https://rossmacphee.com/Sailor/themes/sailor/img/logo.png) on my website which is located here: [Live Demo, woo hoo!](https://rossmacphee.com/Sailor/)

## Features

- [x] Completely mobile responsive
- [x] Includes Open-Graph protocol
- [x] Social-Media account icons
- [x] No-render blocking CSS
- [x] No-render blocking Javascript
- [x] A blazing-fast 1s load time
- [x] Emoji Support (Twemoji)

## More Features Please

Check out our submissions page on [FeatHub](http://feathub.com/)

[![Feature Requests](http://feathub.com/CaptainRoss/Sailor?format=svg)](http://feathub.com/CaptainRoss/Sailor)

### You're lying, 1s load time!?

Why should I lie? I love my theme, and you'll love the speed! Still don't believe me? Maybe this screenshot will help!

![The blazing fast 1 second load time](https://i.gyazo.com/7b9e8ebcadddb9818d66ca88aefe76e6.png)

> "I'm no wizard mate, but this can be faked with inspect element or Photoshop!", well the only way you'll see the speed, is by trying the theme yourself!

## Working with Emoji's

If you've ever been on reddit, you'll have seen that people make custom "Flairs" by using dummy links, so with this in mind I decided to implement custom dummy links for emojis. To use an emoji, do as follows:

```markdown
[](#{emojiname} "{emojiname} Emoji")
```

Replace {emojiname} with the name of the emoji you wish to use. A list of emoji's can be found (here)[http://www.emoji-cheat-sheet.com/], just make sure to remove the colons ("::") and replace underscores ("_") with hyphens ("-").

For example: ":heart_eyes:" becomes "heart-eyes", and this would be your {emojiname}! :smile:

## Social Media Accounts

One feature that this theme has, is the ability for social icons in the footer of your blog! Currently we only support; Twitter, Facebook, GitHub, Instagram and YouTube. This is still a fairly new feature added and it may not be fully refined yet, so if you have a problem, let me know in the issues section of this repo. To add a link to your accounts do the following:

1. Create a new custom variable under **Extend > Site Variables** in your admin panel.
2. Enter the following:
  - Name: (youtube, twitter, facebook, github or instagram)
  - Value: **Everything after the domain name** (/pages/{long_facebook_url}, /channel/{long_youtube_url}, /{handle})
3. Click Update
4. You should now see the desired Icon in the footer of your blog

## Consult the almighty FAQ

> Uhhhh, how do I remove that Sailor logo (But who'd want to do that, am I right?)

Firstly head over to this theme's image folder, located in "{Base_Folder}/themes/Sailor/img/". Next, you'll want to replace the file called "logo.png" with your own logo!

> What are the dimensions of the logo?

The dimensions of the logo are 22x22px, yes yes, I know it's small, but the smaller the better right?!; Don't forget, dynamically resizing images through "max-width" means increased loading time and mobile users along with Google hate Dynamic people, so don't be _that_ guy!

> Does this theme support all the aspects of markdown?

We support all shorthand styles so that includes, _italics_, **bold text**, tables and everything else under the sun, except coloured code blocks because that'd require a more advanced pre-processor and themes don't control this.
