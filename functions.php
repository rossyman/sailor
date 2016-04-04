<?php

/*
	Custom theme functions

	Note: we recommend you prefix all your functions to avoid any naming
	collisions or wrap your functions with if function_exists braces.
*/
function numeral($number, $hideIfOne = false) {
	if($hideIfOne === true and $number == 1) {
		return '';
	}

	$test = abs($number) % 10;
	$ext = ((abs($number) % 100 < 21 and abs($number) % 100 > 4) ? 'th' : (($test < 4) ? ($test < 3) ? ($test < 2) ? ($test < 1) ? 'th' : 'st' : 'nd' : 'rd' : 'th'));
	return $number . $ext;
}

function count_words($str) {
	return count(preg_split('/\s+/', strip_tags($str), null, PREG_SPLIT_NO_EMPTY));
}

function pluralise($amount, $str, $alt = '') {
	return intval($amount) === 1 ? $str : $str . ($alt !== '' ? $alt : 's');
}

function relative_time($date) {
	if(is_numeric($date)) $date = '@' . $date;

	$user_timezone = new DateTimeZone(Config::app('timezone'));
	$date = new DateTime($date, $user_timezone);

	// get current date in user timezone
	$now = new DateTime('now', $user_timezone);

	$elapsed = $now->format('U') - $date->format('U');

	if($elapsed <= 1) {
		return 'Just now';
	}

	$times = array(
		31104000 => 'year',
		2592000 => 'month',
		604800 => 'week',
		86400 => 'day',
		3600 => 'hour',
		60 => 'minute',
		1 => 'second'
	);

	foreach($times as $seconds => $title) {
		$rounded = $elapsed / $seconds;

		if($rounded > 1) {
			$rounded = round($rounded);
			return $rounded . ' ' . pluralise($rounded, $title) . ' ago';
		}
	}
}

function twitter_account() { if (substr(site_meta('twitter', ''), 0, 1) == "@") { return substr(site_meta('twitter', ''), 1, strlen(site_meta('twitter', '')) - 1); } else { return site_meta('twitter', ''); } }
function twitter_url() { return 'https://twitter.com/' . twitter_account(); }
function facebook_account() { return site_meta('facebook', ''); }
function facebook_title() { if (substr(site_meta('facebook', ''), 0, 6) == "pages/") { return substr(site_meta('facebook', ''), 6, strlen(site_meta('facebook', '')) - 1); } else { return site_meta('facebook', ''); } }
function facebook_url() { return 'https://www.facebook.com/' . facebook_account(); }
function github_account() { return site_meta('github', ''); }
function github_url() { return 'https://github.com/' . github_account(); }
function instagram_account() { return site_meta('instagram', ''); }
function instagram_url() { return 'https://www.instagram.com/' . instagram_account(); }
function youtube_account() { return site_meta('youtube', ''); }
function youtube_title() { if (substr(site_meta('youtube', ''), 0, 8) == "channel/") { return substr(site_meta('youtube', ''), 8, strlen(site_meta('youtube', '')) - 1); } else { return site_meta('youtube', ''); } }
function youtube_url() { return 'https://www.youtube.com/' . youtube_account(); }

function total_articles() {
	return Post::where(Base::table('posts.status'), '=', 'published')->count();
}
