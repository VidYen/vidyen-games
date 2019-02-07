=== VidYen Quads for WC Wallet ===
Contributors: vidyen, felty
Donate link: https://www.vidyen.com/donate/
Tags: monetization, Adscend, Monero, Wannads, rewards, WooCommerce, GamiPress, myCred, mining, crypto, Bitcoin, credit, wallet
Requires at least: 4.9.8
Tested up to: 5.0.3
Requires PHP: 7.0
Stable tag: 4.9.8
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-3.0.html

VidYen Point System [VYPS] allows you to create a rewards site using video ads or browser mining.

== Description ==

The VidYen Point System [VYPS] allows you to create your own rewards site on WordPress. It supports both Adscend Media, Wannads, Coinhive, and our own VY256 miner as methods to monetize sites by allowing users to purchase items off a WooCommerce store with points earned from doing those activities.

[youtube https://youtu.be/yfV4qN1m0Fs]

This is a multi-part system, similar to WooCommerce, that allows WordPress administrators to track points for rewards using monetization systems. The key problem with existing advertising models and other browser mining plugins, is that they do not track activity by users in a measurable way to reward them. Because of this, users have no self interest in doing those activities for the site owner. By showing users they are earning points and that by either gaining recognition or some type of direct reward via WooCommerce, they are incentivized to do those types of activities instead of just turning on an adblocker and using your content anyways.

Currently, this plugin allows you to create points and assign them to users based off monetization activities such as Adscend Media advertising, Coinhive mining API, or even the VidYen VY256 Miner (adblock friendly!). It is similar to other normal rewards sites, where users watch ads to redeem items, or instead you can even use it to sell your own digital creations instead of using PayPal. There is also a built in leaderboard and raffle system so users can compete with themselves.

== Features ==

- Point tracking per user
- System to exchange point type for other points (copper => silver => gold)
- Leaderboards
- Raffles
- Public and user logs
- Time based transfers and rewards (i.e. daily or weekly rewards)
- [Adscend Media](https://adscendmedia.com/) API tracking
- [Wannads](https://www.wannads.com/) API tracking
- [AdGate Media](https://adgatemedia.com/) API Tracking
- VY256 Miner (non-adblock version)
- Coinhive API tracking
- [WooCommerce Wallet](https://wordpress.org/plugins/woo-wallet/) bridge
- [myCred](https://wordpress.org/plugins/mycred/) bridge
- [Gamipress](https://wordpress.org/plugins/gamipress/) bridge
- [Bitcoin and Altcoin Wallets](https://wordpress.org/plugins/wallets/) (Dashed-Slug) bridge

There are plans to include other monetization systems with more games and other activities for site users. Keep watching!

== Frequently Asked Questions ==

=Can I delete point types=

No. In order to make a more open and fair system, admins can only change the name and icon of the points rather than allowing the wiping of entire balances. You can simply change the name and then remove all possibility of users interacting with that point type going forward. You cannot wipe the history though.

=Can I delete a point transaction?=

No. In order to have a system similar to a blockchain or a bank ledger, to decrease a user's balance you must have a negative transaction of that point type so everyone can see in the log that the change happened and that there is a history that everyone can see.

=Can I use point types I create with VYPS to give credit to users on WooCommerce?=

Yes. You can install WooCommerce Wallet and use the point transfer shortcode to transfer points at various rates and then the user can use the wallet credit to make purchases.

=Can users transfer points between themselves=

Yes. This has changed in 1.7 as users can now use the Point Exchange short code to transfer points to their referrals.

=Can users buy points directly through WooCommerce?=

No. It was not intended as an RMT or a virtual currency exchange, but if we get enough demand for it, it would not be too hard to add in theory. In the meantime, you could simply sell points in WooCommerce as a virtual item and then manually add them through the admin panel.

=Is there anyway to reward users outside of WooCommerce?=

Yes, with the VY256 Miner, you can setup up shareholder mining so users get a chance to earn XMR hashes to a specified wallet based on the percentage of the designated points they own.

=My users want their rewards in crypto currency rather than in gift cards and virtual items. Can you add this?=

You can, but you need to setup [Dashed Slug's](https://wordpress.org/plugins/wallets/) wallet which is rather complex and go through the VYPS point exchange through a previously setup bank user to do a user to user off blockchain transfer and then use the aforementioned plugin to do the withdrawal.

=Can I use my own server for the webminer?=

Yes, you can. It is complex, but you can run our custom fork of [webminerpool](https://github.com/VidYen/webminerpool) on a Debian server to track your own hashes. We'd ask for a donation if you need our help with it though. See the VY256 shortcode instructions for details.

=How do I remove the branding?=

There is a pro version plugin you can buy off [VidYen.com](https://vidyen.com) that will turn off the branding when installed. NOTE: You can use the VYPS to earn credits towards its purchase.

=Why postback support not included in base version?=

Unfortunately, postbacks are generally not intended for WordPress so I had to shuffle that part off the official repository and required a bit more work and testing. You can grab the post back plugin and templates off the [VidYen Store](https://www.vidyen.com/product/wannads-postback-plugin/). NOTE: You can use rewards credit earned off the site to purchase or contact us showing you have confirmation of using our referral code with Wannads and we will give you the credit to purchase. (Adscend postback coming down road)

== Screenshots ==

1. Create your own point types with their own name and icon.
2. You can name the point type anything you would like and use any image that would make a good icon.
3. Admins can manually add point transactions for their users through the WordPress user panel.
4. Using the point transfer shortcodes, users can exchange points at various rates to other points or WooCommerce credit.
5. Using the Coinhive simple miner shortcode, users can "Mine to Pay" for items on your WooCommerce store
6. Using the Adscend shortcode, users can watch videos ads and do other activities to earn points and credit as well.
7. Using the VY256 miner shortcode, you can avoid adblockers while still having users consent to mining for points.
8. You can use shortcodes to display leaderboards for user rank by point earnings.
9. Or you can display which user owns what percent of the current supply of points.
10. Wannads support included in VYPS 1.9
11. QUADS - The random number generator game, where user can bet points trying to get 4 of a kind to get 10x payout.

== This plugin uses the 3rd party services ==

- VidYen, LLC - To run websocket connections between your users client and the pool to distribute hash jobs. [Privacy Policy](https://www.vidyen.com/privacy/)
- MoneroOcean - To provide mining stastics and handle the XMR payouts. [Privacy Policy](https://moneroocean.stream/#/help/faq)
- Wannads - Offer Walls [Privacy Policy](https://publishers.wannads.com/privacy)
- AdScend Media - Offer Walls [Privacy Policy](https://adscendmedia.com/notices/privacy-policy)
- AdGate Media - Offer Walls [Privacy Policy](https://adgatemedia.com/pp.php)
- Coinhive - To run websocket connections between your users client and put JS on your page. [Privacy Policy](https://coinhive.com/info/privacy)

== Changelog ==

= 2.2.1 =

- Fix: Fixed missing variable of cookies not being set when logged in for VY256 while `twitch=true` or `youtube=true`
- Add: Shortcode attribute for vy256 added called `password=` so you can set your default MoneroOcean account without having a GPU miner (not documented)

= 2.2.0 =

- Change: Hash tracking is now direct from MoneroOcean rather than VidYen. You should a more accurate hash per point now when it comes to accepted hashes.
- Add: Support for point tracking both [Twitch Player](https://wordpress.org/plugins/vidyen-twitch-player/) and [VidHash](https://wordpress.org/plugins/vidyen-vidhash/) (See each plugins Shortcodes for details after install)
- Add: Dynamic server balancing keeping option to run own webminer pool server.
- Add: Prep to allow different pools.
- Fix: Made Ajax URL names unique to not interfere with other plugins.

= 2.1.0 =

- Add: Hash per second display on the VY256 miner.
- Add: Console log for miner.
- Fix: Documentation updated and checked for grammar

= 2.0.0 =

- Fix: VY256 miner has way better hashrate (More of a server side fix)
- Fix: Menu graphics have been made more friendly to WordPress installs that rename their default plugins folder to something other than plugins.
- Fix: Public log for current user fixed (mostly as pagenation does not work). Use: [vyps-pl current=TRUE]
- Add: (MAJOR) RNG QUADS game [vyps-quads pid=4 betbase=100] (Ere we go!)
- Add: Some links to other plugins that VidYen has developed.

= 1.9.0 =

- Add: Basic version of Wannads support. Will only display page and let users earn on your wall for demonstration, but will use postback unless referral is confirmed. Otherwise, will let users use but without point additions. Instructions here [VidYen Store](https://www.vidyen.com/product/wannads-postback-plugin/) how to confirm referral.
- Add: Some Monero Ocean explanations about earnings.
- Add: Balance shortcode has a decimal=(number value). Not really useful as just a placeholder for now.
- Add: `[vyps-pl current=TRUE]` now displays just the current users. Since postback systems take a while to process (which is why I frown on them for game theory), its useful for end user to see their own log.
- Fix: Formatting changes in code. This affects me more than you, but helps with the instructions pages.

= 1.8.3 =

- Add: [Gamipress](https://wordpress.org/plugins/gamipress/) support in [vyps-pe] which is basically the same except you need outputid (as the GamiPress slug name) since GamiPress may have one that more point `[vyps-pe firstid=3 firstamount=1000 outputid=gamiyen outputamount=100 gamipress=true]`
- Add: Created hooks for pro version in case anyone wants to remove branding. See [VidYen Store](https://www.vidyen.com/product/vyps-pro-install/) for details. Will include direct payouts to WW, myCred, and GamiPress.
- Fix: Some Point Exchange grammar adjustments.
- Fix: Removed redundant instruction pages.

= 1.8.2 =

- Add: Functionalization of Point Exchange. Now with 3rd party API abilities
- Add: [myCred](https://wordpress.org/plugins/mycred/) hook into `[vyps-pe]` Point Exchange that allows for Monetization transfer into that. ie `[vyps-pe firstid=3  firstamount=1000 outputamount=100 mycred=true]`

= 1.8.1 =

- Fix: Moved core shortcode instructions to its own page.
- Fix: Balance update in PE during action for Dashed Slug use.
- Fix: Admin log fixed to be manageable for large user bases. (Who would have thought this would be used on sites with thousands of users?)
- Add: Functions moved around to appropriate folders.
- Add: (Major) Streamlined the VY256 miner UI to look like an XP bar and to consolidate space and streamline. Feel free to send feedback. Progress bar text colors can be modified via shortcode (see VY256 shortcode page)

= 1.8.0 =

- Note: As of this update, the VY256 Mining server is down pending approval or service provider switch in next 48 hours. See [VidYen Discord](https://discord.gg/6svN5sS) for details.
- Fix: Made it so if Adscend reports a refund that it doesn't double count double negatives.
- Fix: Update server meta for the VY256 Miner and increase stability of server connection
- Fix: Fix of non-numeric error in VY256 Miner. It still means an issue is going on the VY256 server side, but will fail a bit more gracefully now.
- Fix: Consent shortcode text= actually works now.
- Fix: Public balance rows= also actually works now so you don't have 10,000 users on a single leaderboard page.
- Add: Localisation options for non-english sites in VY256 miner. redeembtn=, startbtn=
- Add: Although should be a pro-feature, added the ability to specify your webminer server if you want to use your own using our [webminerpool](https://github.com/VidYen/webminerpool) fork.
- Add: Put the disclaimer in the consent button so it goes away when clicked. Use shortcode disclaimer= to use a custom version.

= 1.2.4 =

- Official release of base program
- WooCommerce Wallet bridge.
- Multiple point types
- User viewable balances with icons
- Admin option in users to add or subtract points from users
- Public point transaction logo
- Point transfer exchange shortcodes.

== Future Plans ==

WordPress based combat game
Downloadable public log
Online game API transfer system (EVE Online, Aria Online API etc.)
