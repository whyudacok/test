
<?php
// Get the anime ID from the URL parameter
$anime_id = isset($_GET['id']) ? $_GET['id'] : '';

// Initialize a variable to track if there's an error
$error = false;

// Check if the anime ID is provided
if ($anime_id) {
    // Construct the API URL with the dynamic anime ID
    $api_url = 'https://rest-api-one-swart.vercel.app/api/anime/' . urlencode($anime_id);

    // Fetch data from the API
    $data = json_decode(file_get_contents($api_url), true);

    // Check if data is successfully fetched
    if (!$data) {
        $error = true;
    }
} else {
    // Anime ID not provided in the URL
    $error = true;
}

// Function to check if the Anime ID is valid (modify as needed)
function isValidAnimeID($anime_id) {
    // Implement your validation logic here
    // For simplicity, assuming any non-empty string is valid
    return !empty($anime_id);
}

// Check if Anime ID is not valid and redirect to 404.php
if ($error || !isValidAnimeID($anime_id)) {
    header("Location: /404.php");
    exit();
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="id" prefix="og: https://ogp.me/ns#"><head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="revisit-after" content="1 days">
<meta name="rating" content="general">
<meta name="distribution" content="global">
<meta name="target" content="global">
<meta content="All-Language" http-equiv="Content-Language">
<meta name="DC.title" content="<?php echo $data['title']; ?> | Anieku">
<title><?php echo $data['title']; ?> | Anieku</title>
<meta name="keywords" content="<?php echo $data['title']; ?>">
<link rel="shortcut icon" href="images/Icon-Anieku.png" type="image/x-icon">

<meta name="description" content="Download &amp; Streaming Series <?php echo $data['title']; ?> dengan kualitas terbaik yang kami sediakan dan dengan jaminan ketersedian file yang akan selalu ada selama">
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
<link rel="canonical" href="https://anieku.my.id/anime?id=<?php echo isset($_GET['id']) ? $_GET['id'] : 'default'; ?>">
<meta property="og:locale" content="id_ID">
<meta property="og:type" content="article">
<meta property="og:title" content="<?php echo $data['title']; ?> | Anieku">
<meta property="og:description" content="Download &amp; Streaming Series <?php echo $data['title']; ?> dengan kualitas terbaik yang kami sediakan dan dengan jaminan ketersedian file yang akan selalu ada selama">
<meta property="og:url" content="https://anieku.my.id/anime?id=<?php echo isset($_GET['id']) ? $_GET['id'] : 'default'; ?>">
<meta property="og:site_name" content="Anieku">
<meta property="article:publisher" content="https://www.facebook.com/Anieku">
<meta property="article:author" content="https://www.facebook.com/Anieku">
<meta property="og:updated_time" content="2024-02-02T19:57:28+07:00">
<meta property="og:image" content="<?php echo $data['thumb']; ?>">
<meta property="og:image:secure_url" content="<?php echo $data['thumb']; ?>">
<meta property="og:image:width" content="225">
<meta property="og:image:height" content="319">
<meta property="og:image:alt" content="<?php echo $data['title']; ?>">
<meta property="og:image:type" content="image/jpeg">
<meta property="article:published_time" content="2024-01-05T23:14:23+07:00">
<meta property="article:modified_time" content="2024-02-02T19:57:28+07:00">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $data['title']; ?> | Anieku">
<meta name="twitter:description" content="Download &amp; Streaming <?php echo $data['title']; ?> dengan kualitas terbaik yang kami sediakan dan dengan jaminan ketersedian file yang akan selalu ada selama">
<meta name="twitter:site" content="@Anieku">
<meta name="twitter:creator" content="@Anieku">
<meta name="twitter:image" content="<?php echo $data['thumb']; ?>">
<script type="application/ld+json" class="rank-math-schema">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"/#organization","name":"@MyMaster","sameAs":["https://www.facebook.com/Anieku","https://twitter.com/Anieku"],"logo":{"@type":"ImageObject","@id":"/#logo","url":"/wp-content/uploads/2019/12/Icon-Anieku.png","contentUrl":"/wp-content/uploads/2019/12/Icon-Anieku.png","caption":"Anieku","inLanguage":"id","width":"100","height":"100"}},{"@type":"WebSite","@id":"/#website","url":"","name":"Anieku","alternateName":"Anieku","publisher":{"@id":"/#organization"},"inLanguage":"id"},{"@type":"ImageObject","@id":"/wp-content/uploads/2024/01/1704471269.jpg","url":"/wp-content/uploads/2024/01/1704471269.jpg","width":"225","height":"319","inLanguage":"id"},{"@type":"WebPage","@id":"/series/sasaki-to-pii-chan/#webpage","url":"/series/sasaki-to-pii-chan/","name":"Sasaki To Pii-chan | Anieku","datePublished":"2024-01-05T23:14:23+07:00","dateModified":"2024-02-02T19:57:28+07:00","isPartOf":{"@id":"/#website"},"primaryImageOfPage":{"@id":"/wp-content/uploads/2024/01/1704471269.jpg"},"inLanguage":"id"},{"@type":"Person","@id":"/series/sasaki-to-pii-chan/#author","name":"@MyMaster","image":{"@type":"ImageObject","@id":"https://secure.gravatar.com/avatar/0c784a57e56e24642d0dd1b765cbe40c?s=96&d=mm&r=g","url":"https://secure.gravatar.com/avatar/0c784a57e56e24642d0dd1b765cbe40c?s=96&d=mm&r=g","caption":"@MyMaster","inLanguage":"id"},"sameAs":["https://www.gotakulovers.net"],"worksFor":{"@id":"/#organization"}},{"@type":"Article","headline":"Sasaki to Pii-chan | Anieku","datePublished":"2024-01-05T23:14:23+07:00","dateModified":"2024-02-02T19:57:28+07:00","author":{"@id":"/series/sasaki-to-pii-chan/#author","name":"@MyMaster"},"publisher":{"@id":"/#organization"},"description":"Download & Streaming Series Sasaki to Pii-chan dengan kualitas terbaik yang kami sediakan dan dengan jaminan ketersedian file yang akan selalu ada selama kami masih ada. Kami jamin tidak akan ada yang namanya file not found saat ingin mendownload maupun saat ingin streaming Series Sasaki to Pii-chan di Anieku . Kami menyediakan banyak server streaming dan server download yang akan menjamin hal itu. Download Series Sasaki to Pii-chan hanya di Anieku dan jangan lupa Download yang lainnya hanya di Anieku .","name":"Sasaki to Pii-chan | Anieku","@id":"/series/sasaki-to-pii-chan/#richSnippet","isPartOf":{"@id":"/series/sasaki-to-pii-chan/#webpage"},"image":{"@id":"/wp-content/uploads/2024/01/1704471269.jpg"},"inLanguage":"id","mainEntityOfPage":{"@id":"/series/sasaki-to-pii-chan/#webpage"}}]}</script>
<link rel="alternate" type="application/rss+xml" title="Anieku » Sasaki to Pii-chan Umpan Komentar" href="/series/sasaki-to-pii-chan/feed/">
<style id="rank-math-toc-block-style-inline-css" type="text/css">
.wp-block-rank-math-toc-block nav ol{counter-reset:item}.wp-block-rank-math-toc-block nav ol li{display:block}.wp-block-rank-math-toc-block nav ol li:before{content:counters(item, ".") " ";counter-increment:item}
</style>
<style id="classic-theme-styles-inline-css" type="text/css">
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id="global-styles-inline-css" type="text/css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<style id="dcl-front-style-dummy-inline-css" type="text/css">
#dcl_btn_container{text-align: center;margin-top:10px;margin-bottom:10px}
</style>
<!-- <link rel="stylesheet"href="/wp-content/plugins/report-content/static/css/styles.css?ver=6.4.3" media="all"> -->
<!-- <link rel="stylesheet"href="/wp-content/themes/mynimanov/style.css?ver=6.4.3" media="all"> -->
<!-- <link rel="stylesheet"href="/wp-content/themes/mynimanov/assets/css/sweetalert2.min.css?ver=6.4.3" media="all"> -->
<!-- <link rel="stylesheet"href="/wp-content/plugins/favorites/assets/css/favorites.css?ver=2.3.3" media="all"> -->
<link rel="stylesheet" type="text/css" href="css/bnrg9.css" media="all">
<script src="js/bnrg9.js" type="text/javascript"></script>
<!-- <script type="text/javascript" src="/wp-content/themes/mynimanov/assets/js/jquery.min.js" id="jquery-js"></script> -->
<script type="text/javascript" id="wprc-script-js-extra">
/* <![CDATA[ */
var wprcajaxhandler = {"ajaxurl":"https:\/\/www.Anieku.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script src="js/bnrg9_1.js" type="text/javascript"></script>
<!-- <script type="text/javascript" src="/wp-content/plugins/report-content/static/js/scripts.js?ver=6.4.3" id="wprc-script-js"></script> -->
<!-- <script type="text/javascript" src="/wp-content/themes/mynimanov/assets/js/sweetalert2.all.min.js?ver=6.4.3" id="Sweetalert JS-js"></script> -->
<script type="text/javascript" id="favorites-js-extra">
/* <![CDATA[ */
var favorites_data = {"ajaxurl":"https:\/\/www.Anieku.com\/wp-admin\/admin-ajax.php","nonce":"ca39c1f51f","favorite":"<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"21\" height=\"11.3\" fill=\"currentColor\" class=\"bi bi-heart-fill icon\" viewBox=\"0 0 3 16\">   <path fill-rule=\"evenodd\" d=\"M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z\"\/> <\/svg> Favorite","favorited":"<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"21\" height=\"11.3\" fill=\"currentColor\" class=\"bi bi-x-circle-fill\" viewBox=\"0 0 03 16\">   <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z\"\/> <\/svg> Remove","includecount":"","indicate_loading":"1","loading_text":"<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"21\" height=\"11.3\" fill=\"currentColor\" class=\"bi bi-exclamation-circle-fill\" viewBox=\"0 0 3 16\">   <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z\"\/> <\/svg> Loading","loading_image":"","loading_image_active":"","loading_image_preload":"","cache_enabled":"1","button_options":{"button_type":"custom","custom_colors":false,"box_shadow":false,"include_count":false,"default":{"background_default":false,"border_default":false,"text_default":false,"icon_default":false,"count_default":false},"active":{"background_active":false,"border_active":false,"text_active":false,"icon_active":false,"count_active":false}},"authentication_modal_content":"<p>Please login to add favorites.<\/p>\n<p><a href=\"#\" data-favorites-modal-close>Dismiss this notice<\/a><\/p>\n","authentication_redirect":"","dev_mode":"","logged_in":"","user_id":"0","authentication_redirect_url":"https:\/\/www.Anieku.com\/wp-login.php"};
/* ]]> */
</script>
<script src="js/bnrg9_2.js" type="text/javascript"></script>
<!-- <script type="text/javascript" src="/wp-content/plugins/favorites/assets/js/favorites.min.js?ver=2.3.3" id="favorites-js"></script> -->
<link rel="shortlink" href="/?p=178816">
<link rel="alternate" type="application/json+oembed" href="/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.Anieku.com%2Fseries%2Fsasaki-to-pii-chan%2F">
<link rel="alternate" type="text/xml+oembed" href="/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.Anieku.com%2Fseries%2Fsasaki-to-pii-chan%2F&amp;format=xml">
</head>
<body class="dark">
	    <?php
    if ($error) {
        // Redirect to 404.php if an error occurs
        header("Location: /404.php");
        exit();
    } else {
        // Display anime information as before
        ?>
<style>
/* CSS Untuk Mode APK */
#nav-apk{margin:10px}
#reportchap{margin:15px 15px 0;margin-top:0}
/* CSS Untuk Ngatur Iklan */
.ads {margin:0;margin-top:10px;margin-bottom:0}
.ads2 {margin:0}
.iklan {margin-right:5px;margin-left:5px;display: block;width: 49%;float: left;}
.iklan2 {margin-left:8px;display: block;width: 49%;float: left;}
.ads img {max-width:100%;height:80px;}
.ads2 img {max-width:100%;height:80px;}
/* CSS Untuk Ngatur Iklan */
/* CSS Anime */
.header-logo .icon{color:#2a93d5}
.header-logo:hover{color:#2a93d5}
.header-navigation .menu-item a:hover,.header-navigation .current-menu-item a{background:#2a93d5;color:#fff}
.header-navigation .menu-item.menu-item-has-children .sub-menu li a:hover,.header-navigation .menu-item.menu-item-has-children .sub-menu li.current_page_item a{background:#2a93d5;color:#fff}
.notif{background:#2a93d5}
.content h2 span{color:#2a93d5}
a.otherz{background:#2a93d5}
button.simplefavorites-clear{background:#2a93d5}
.flexbox-number{background:#2a93d5;border-top:solid 5px #8224e3}
.flexbox-episode{background:#2a93d5}
.flexbox-episode span{background:#8224e3}
.flexbox-episode span.eps{background:#2a93d5}
.flexbox-chapter1{background:#2a93d5}
.flexbox-chapter1 span{background:#8224e3}
.flexbox-chapter1 span.ch{background:#2a93d5}
.flexbox-item:hover .flexbox-title{color:#2a93d5}
.jadwalbox td .anime:hover {color:#2a93d5}
.navigasion .button{background:#2a93d5}
.lista a:hover {background:#2a93d5;border-color:#2a93d5;}
.flexbox2-side .synops::-webkit-scrollbar-thumb{background-color:#8224e3}
.flexbox2 .bookmark{background:#8224e3}
.flexbox2-side .genres a:hover{color:#2a93d5}
.flexbox2-side .info .season a:hover{color:#2a93d5}
.flexbox3-side .title a:hover{color:#2a93d5}
.flexbox3-side .episode{background:#2a93d5}
.flexbox3-side .episode span{background:#8224e3}
.flexbox3-side .episode span.eps{background:#2a93d5}
.pagination a:hover,.pagination .page-numbers.current{background:#2a93d5}
.animelist-nav{border-bottom:solid 4px #2a93d5}
.animelist-nav a:hover{background:#2a93d5}
.animelist-blc ul{color:#2a93d5}
.animelist-blc ul li a.series:hover{color:#2a93d5}
.advancedsearch .btn{background:#2a93d5}
.achlist li a:hover{background:#2a93d5}
.series-infolist a{color:#2a93d5}
.series-genres a{background:#8224e3;color:white}
.series-genres a:hover{background:#2a93d5}
.series-list li:hover{background:#2a93d5}
.series-list li:hover .flexeps-play{background:#8224e3}
.series-list li a:visited{color:#2a93d5}
.series-list::-webkit-scrollbar-thumb{background-color:#8224e3}
.dlboxb2::-webkit-scrollbar-thumb{background-color:#8224e3}
.mirror .the-button.active,.mirror .the-button:hover{background:#2a93d5}
.mirrorlist .the-button.active,.mirrorlist .the-button:hover{background:#2a93d5}
.downloadlist .the-button.active,.downloadlist .the-button:hover{background:#2a93d5}
.nextplaybtn a:hover{background:#2a93d5}
.download ul li b{background:#8224e3}
.download ul li a:hover{background:#2a93d5}
.download .dlbox2 a:hover{background:#2a93d5}
.dark .download .dlbox2 a:hover{background:#2a93d5}
.download .dlbox2 h3 {background: #2a93d5;padding: 8px;text-transform: uppercase;color: white;}
.download .dlboxb2 a:hover{background:#2a93d5}
.download .dlboxb2 h3 {background: #2a93d5;padding: 8px;text-transform: uppercase;color: white;}
#commentform input#submit{background:#2a93d5}
.reply{background:#2a93d5}
.pagenon span{font-size:20px;border-bottom:solid 3px #2a93d5}
.footertop-right a:hover{background:#2a93d5}
.footertop-left a:hover{color:#2a93d5}
.footerbody-widget h3 span{border-bottom:solid 4px #2a93d5}
.pagenon a{background:#2a93d5}
.scrollToTop{background:#2a93d5}
.searchbox:hover .searchbox-title{color:#2a93d5}
.theme-mode .switch{background:#2a93d5}
.dark .header-logo:hover{color:#2a93d5}
.dark .header-navigation .menu-item a:hover,.dark .header-navigation .current-menu-item a{background:#2a93d5;color:#fff}
.dark .series-genres a{background:#8224e3}
.dark .series-genres a:hover{background:#2a93d5}
.dark .achlist li a:hover{background:#2a93d5}
.dark .series-list li:hover{background:#2a93d5}
.dark .pagination a:hover{background:#2a93d5}
.dark .mirror .the-button.active,.dark .mirror .the-button:hover{background:#2a93d5}
.dark .download .dlboxb2 a:hover {background:#2a93d5}
.dark .mirrorlist .the-button.active,.dark .mirrorlist .the-button:hover{background:#2a93d5}
.dark .downloadlist .the-button.active,.dark .downloadlist .the-button:hover{background:#2a93d5}
.dark .nextplaybtn a:hover{background:#2a93d5}
.dark .download ul li b{background:#2a93d5}
.dark .download ul li a:hover{background:#2a93d5}
/* CSS Untuk Ngatur Iklan */
@media only screen and (max-width: 1045px) {
.iklan {margin:5px;width: 100%;margin-right:0;margin-left:0}
.iklan2 {width: 100%;margin-right:0;margin-left:0}
.ads img {max-width:100%;float:none;height:65px}
.ads2 img {max-width:100%;float:none;height:65px}
}
@media only screen and (max-width: 988px) {
.header-navigation .menu-item{border:1px solid #2a93d5}
.header-navigation .menu-item .sub-menu{border-top:1px solid #2a93d5}
.header-navigation .menu-item.menu-item-has-children .sub-menu .menu-item{border:1px solid #2a93d5}
}
/* CSS Untuk Ngatur Iklan */
@media (max-width:768px){
.header-menu #showmenu:checked~#navigation{border-top:solid 4px #2a93d5}
.header-right{border-top:solid 4px #2a93d5}
.header-menu #showsearch:checked~.header-right {border-top: solid 4px #8224e3}
}
.wprc-container button.wprc-switch, .wprc-container button.wprc-switch:active, .wprc-content button.wprc-submit, .wprc-content button.wprc-submit:active {
background: #edf2f7;
}
.disqus_button:hover {background:#8224e3;}
.dark .disqus_button.active,.dark .disqus_button:hover {background:#8224e3;}
.wprc-container .wprc-content {
border-left:solid #8224e3;
border-right:solid #8224e3;
border-bottom:solid #8224e3;
background:transparent;
}
.wprc-content .right-section textarea {border:solid #8224e3;}
.wprc-container { margin-bottom:0;}
div.wpforms-container {border:solid #8224e3;padding:20px}
.btnx.bookmark{background:#2a93d5}
.series-infoz.bookmark{background:#2a93d5}
.btnx.lamp{background:#2a93d5;color: white}
.button-flat {border: 1px solid #2a93d5;background-color: #2a93d5;}
.button-flat:active{background:#2a93d5;}
.button-flata {border: 1px solid #2a93d5;background-color: #2a93d5;}
.button-flata:active{background:#2a93d5;}
.button-flat {width: 49%;border-radius:10px}
.button-flata {width: 98.5%;margin-bottom: 5px;border-radius:10px}
/* CSS Komik */
.flexbox4-side ul.chapter li a:visited{background:#2a93d5;color:white}
.flexbox5-side ul.chapter li a:visited{background:#2a93d5;color:white}
.sidenav .chapx a:visited{color:#2a93d5}
.nav-chapter .list{background:#2a93d5}
.nav-chapter .setting{background:#8224e3}
.button-wrapper button{background:#2a93d5}
.button-wrapper button a{background:#8224e3}
.button-wrapper button a:hover{background:#2a93d5}
.sidenav .chapx a:hover, .sidenav .chapx a.active{color:#8224e3}
.sidenav .closebtn:hover{background:#2a93d5}
.sidenav .closebtn{background: #8224e3}
.sidenav .closebtns:hover{background:#2a93d5}
.sidenav .closebtns{background: #8224e3}
.sidenav .settingz #background .active a,.sidenav .settingz #font .active a{background:#2a93d5;border-color:#2a93d5;}
.sidenav .settingz h2{border-bottom:solid 4px #2a93d5;}
.sidenav::-webkit-scrollbar-thumb {background: #8224e3;}
.flexbox4-side .title a:hover{color:#2a93d5}
.flexbox5-side .title a:hover{color:#2a93d5}
.flexbox4-side ul.chapter li a:hover{background:#2a93d5}
.dark .flexbox4-side ul.chapter li a:hover{background:#2a93d5}
.flexbox5-side ul.chapter li a:hover{background:#2a93d5}
.dark .flexbox5-side ul.chapter li a:hover{background:#2a93d5}
.dark .flexbox4-side ul.chapter li a:visited{background:#2a93d5;color:white}
.dark .flexbox5-side ul.chapter li a:visited{background:#2a93d5;color:white}
.pagecontent{border:solid #8224e3;padding:20px;font-weight:1000;}
/* CSS Trakteer */
#trbtn-overlay-container-0 .trbtn-img{display: initial!important;vertical-align:middle;padding-top:0!important;padding-bottom:0!important;border:none;margin-top:0;margin-right:10px!important;margin-left:0!important;margin-bottom:3px!important;content:url('images/support-web.png')}.trbtn-overlay-container{display:inline-block!important;white-space:nowrap;min-width:110px}.trbtn-overlay-container.floating-left{position:fixed;bottom:20px;left:20px}.trbtn-overlay-container.floating-right{position:fixed;bottom:20px;right:20px}span.trbtn-txt{color:#fff !important;letter-spacing: -0.15px!important;text-wrap:none;vertical-align:middle;line-height:33px !important;padding:0;text-align:center;text-decoration:none!important; text-shadow: 0 1px 1px rgba(34, 34, 34, 0.05);}.trbtn-txt a{color:#fff !important;text-decoration:none:important;}.trbtn-txt a:hover{color:#fff !important;text-decoration:none}a.trbtn{box-shadow: 1px 1px 0px rgba(0, 0, 0, 0.2);line-height:36px!important;min-width:100px;display:inline-block!important;background-color:#be1e2d;padding:2px 24px !important;text-align:center !important;border-radius:9999px;color:#fff;cursor:pointer;overflow-wrap:break-word;vertical-align:middle;border:0 none #fff !important;font-family:'Quicksand',Helvetica,Century Gothic,sans-serif !important;text-decoration:none;text-shadow:none;font-weight:700!important;font-size:14px !important}a.trbtn:visited{color:#fff !important;text-decoration:none !important}a.trbtn:hover{opacity:.85;color:#f5f5f5 !important;text-decoration:none !important}a.trbtn:active{color:#f5f5f5 !important;text-decoration:none !important}.trbtn-txt img.trbtn-img {display: initial;animation: trbtn-wiggle 3s infinite; height: 22px;}@keyframes trbtn-wiggle{0%{transform:rotate(0) scale(1)}60%{transform:rotate(0) scale(1)}75%{transform:rotate(0) scale(1.12)}80%{transform:rotate(0) scale(1.1)}84%{transform:rotate(-10deg) scale(1.1)}88%{transform:rotate(10deg) scale(1.1)}92%{transform:rotate(-10deg) scale(1.1)}96%{transform:rotate(10deg) scale(1.1)}100%{transform:rotate(0) scale(1)}}.trbtn{transform-origin:top left;}
</style>
<header class="header">
<div class="container">
<div class="header-menu">
<input id="showmenu" type="checkbox" role="button"><label class="showmenu" for="showmenu"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list icon" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
</svg></label>
<div class="header-logo">
<a href="/" title="Anieku" rel="home"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond-half icon" viewBox="0 0 16 16">
<path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435zM8 .989c.127 0 .253.049.35.145l6.516 6.516a.495.495 0 0 1 0 .7L8.35 14.866a.493.493 0 0 1-.35.145V.989z"></path>
</svg> Anieku</a>
</div>
<ul id="navigation" class="header-navigation"><li id="menu-item-128121" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-home menu-item-128121"><a href="/">Home</a></li>
<li id="menu-item-97704" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-97704"><a href="#">Anime<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">   <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"></path> </svg></a>
<ul class="sub-menu">
<li id="menu-item-97710" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97710"><a href="/list-anime/">Anime list</a></li>
<li id="menu-item-97710" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97710"><a href="/list-ongoing/">List Ongoing</a></li>
<li id="menu-item-97717" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97717"><a href="/jadwal-rilis-anime/">Jadwal Rilis</a></li>
</ul>
</li>
<li id="menu-item-97705" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-97705"><a href="#">Komik<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">   <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"></path> </svg></a>
<ul class="sub-menu">
<li id="menu-item-97729" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97729"><a href="/list-manhua/">Manhua List</a></li>
<li id="menu-item-97728" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97728"><a href="/list-manhwa/">Manwhu List</a></li>
<li id="menu-item-97726" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97726"><a href="/list-manga/">Manga list</a></li>
</ul>
</li>
</ul>
<input id="showsearch" type="checkbox" role="button"><label class="showsearch" for="showsearch"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search icon" viewBox="0 0 16 16">
<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
</svg></label>
<div class="header-right">
<div class="header-searchbar">
<form action="/cari" id="form" method="get" itemprop="potentialAction" itemscope="" itemtype="http://schema.org/SearchAction">
<meta itemprop="target" content="/cari?s={query}">
<input class="search" id="search" onkeyup="fetchResults()" itemprop="query-input" type="text" placeholder="Search..." aria-label="Search" name="s" autocomplete="off">
<button type="submit" value="Submit" aria-label="Submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search icon" viewBox="0 0 16 16">
<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
</svg></button>
</form>
<div id="datafetch"></div>
</div>
</div>
</div>
</div>
</header>
<div class="container" id="adsconta" style="text-align: center;padding: 10px;">
<div id="trbtn-overlay-container-0" class="trbtn-overlay-container inline" style="width: 341px; height: 37px;"><a href="https://trakteer.id/Anieku/tip?open=true" title="Support Anieku" class="trbtn" style="background-color:#be1e2d;transform:scale(1);" target="_blank"><span class="trbtn-txt"><img src="images/support-web.png" alt="Support Anieku" class="trbtn-img" width="22" height="22"><span>Klik Disini (Jika Mau) Dukung Anieku</span></span></a></div>
</div>
<main>
<div class="content" itemscope="" itemtype="http://schema.org/Product">
<div class="series">
<div class="series-cover"> 
<div class="series-bg" style="background-image:url(<?php echo $data['thumb']; ?>);"></div>
</div>
<div class="container">
<div class="series-flex">
<div class="series-flexleft">
<div class="series-thumb">
<img src="<?php echo $data['thumb']; ?>" alt="<?php echo $data['title']; ?>" title="<?php echo $data['title']; ?>" width="225" height="319"></div>
<div class="series-info">
<div class="series-titlex"><h2><?php echo $data['title']; ?></h2><span><?php echo $data['japanase']; ?></span></div>
<div class="navigasion">
<?php
$batchLink = str_replace('batch/', '', parse_url($data['batch_link']['link'], PHP_URL_PATH));
echo '<a href="/batch?dl=' . $batchLink . '" class="button" style="background: red">Batch download</a>';
?>

</div>
<div style='text-align:center;'>
<?php include '../ads.php'; ?>
</div>
<div class="series-infoz block"><span class="type TV"><?php echo $data['type']; ?></span><span class="status <?php echo $data['status']; ?>"><?php echo $data['status']; ?></span></div>
<div class="series-infoz score" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating"><i class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
</svg></i> <span itemprop="ratingValue"><?php echo $data['score']; ?></span></div>

<ul class="series-infolist">
<h2><span>Info</span> Series</h2>

<li><b>Jumlah Di Lihat</b><span id="viewCount"><Views </span></li>
<li><b>Studios</b><span> <a><?php echo $data['studio']; ?></a></span></li>
<li><b>Produser</b><span> <a><?php echo $data['producer']; ?></a></span></li>
<li><b>Episodes</b><span><?php echo $data['total_episode']; ?></span></li>
<li><b>Aired</b><span><?php echo $data['release_date']; ?></span></li>
<li><b>Duration</b><span><?php echo $data['duration']; ?></span></li>
</ul>
</div>
</div> 
<div class="series-flexright">
<div class="series-title"><h2><?php echo $data['title']; ?></h2><span><?php echo $data['japanase']; ?></span></div>

<div class="series-genres"><h2><span>Genre</span> Series</h2><?php
                foreach ($data['genre_list'] as $genre) {
                    echo '<a>' . $genre['genre_name'] . '</a>';
}
?>
</div>
<div class="series-synops">
<h2><span>Synopsis</span> Series</h2>
<p><?php echo $data['synopsis']; ?></p>
</div>
<div style='text-align:center;'>
<?php include '../ads2.php'; ?>
</div>
<div class="series-episode" id="episode_list"><h2><span>Episode</span> List</h2><div class="searchinfo">
</div><ul class="series-list"><li>
            <?php
            foreach ($data['episode_list'] as $episode) {
                // Extract the path from the URL and remove "episode/" part
                $episodePath = str_replace('episode/', '', parse_url($episode['link'], PHP_URL_PATH));
                echo '<li>
<div class="flexeps">
<div class="flexeps-play">  
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-btn-fill icon" viewBox="0 0 16 16">
<path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"></path>
</svg>
</div>
<div class="flexeps-infoz">
<a href="/watch?id=' . $episodePath . '" title="' . $episode['title'] . '"><span><episode>' . $episode['title'] . '</episode></span><span class="date">' . $episode['uploaded_on'] . '</span></a>
</div>
</div>
</li>';
            }
            ?>
</ul></div>
</div>
</div>
<div class="comments">
<h2><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill icon" viewBox="0 0 16 16">
<path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"></path>
</svg></span> Comments</h2>
<div id="disqus_thread">
<div id="dcl_btn_container">
<button id="dcl_comment_btn" class="disqus_button">
Buka Komentar			</button>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
<footer>
<div class="footertop">
<div class="container">
<div class="footertop-left">
<a href="/" title="Anieku" rel="home"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond-half icon" viewBox="0 0 16 16">
<path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435zM8 .989c.127 0 .253.049.35.145l6.516 6.516a.495.495 0 0 1 0 .7L8.35 14.866a.493.493 0 0 1-.35.145V.989z"></path>
</svg> Anieku</a>
</div>
<div class="footertop-right">
<a href="https://www.facebook.com/" aria-label="Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook icon" viewBox="0 0 16 16">
<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
</svg></a>
<a href="https://chat.whatsapp.com/CGTnNMPgiJKJH84LAnPHJC" aria-label="WhatsApp"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp icon" viewBox="0 0 16 16">
<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
</svg></a>
<a href="/" aria-label="Twitter"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter icon" viewBox="0 0 16 16">
<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
</svg></a>
</div>
</div>
</div>
<div class="copyright">© Copyright 2024 - Anieku. All rights reserved.</div>
</footer>
    <script>
var currentPage = window.location.href;

        // Mengirim permintaan asinkron ke skrip view.php
        fetch('../view.php?page=' + currentPage)
        .then(response => response.text())
        .then(data => {
            // Menampilkan jumlah view ke dalam elemen dengan id 'viewCount'
            document.getElementById('viewCount').textContent = ' ' + data + ' View';
        })
        .catch(error => {
            console.error('Error fetching view count:', error);
        });
    </script>
<script type="text/javascript" id="dcl_comments-js-extra">
/* <![CDATA[ */
var countVars = {"disqusShortname":"Anieku"};
var embedVars = {"disqusConfig":{"integration":"wordpress 3.0.23"},"disqusIdentifier":"178816 https:\/\/www.Anieku.com\/?post_type=anime&p=178816","disqusShortname":"kyunimebiz","disqusTitle":"Sasaki to Pii-chan","disqusUrl":"https:\/\/www.Anieku.com\/series\/sasaki-to-pii-chan\/","postId":"178816"};
var dclCustomVars = {"dcl_progress_text":"Loading..."};
/* ]]> */
</script>
<script type="text/javascript" src="js/embed-click.min.js" data-cfasync="false"></script>
<a href="#" class="scrollToTop" aria-label="Scroll"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill icon" viewBox="0 0 16 16">
<path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"></path>
</svg></a>
<script type="text/javascript">var _0x5aa1=['animate','scrollTop','ready','fadeIn','fadeOut','.scrollToTop'];(function(_0x5002c7,_0x5aa1a1){var _0x1bbfe3=function(_0x82af6c){while(--_0x82af6c){_0x5002c7['push'](_0x5002c7['shift']());}};_0x1bbfe3(++_0x5aa1a1);}(_0x5aa1,0x123));var _0x1bbf=function(_0x5002c7,_0x5aa1a1){_0x5002c7=_0x5002c7-0x0;var _0x1bbfe3=_0x5aa1[_0x5002c7];return _0x1bbfe3;};var _0x548e97=_0x1bbf;$(document)[_0x548e97('0x5')](function(){var _0x26d1f6=_0x548e97;$(window)['scroll'](function(){var _0x19349a=_0x1bbf;$(this)[_0x19349a('0x4')]()>0x64?$(_0x19349a('0x2'))[_0x19349a('0x0')]():$(_0x19349a('0x2'))[_0x19349a('0x1')]();}),$(_0x26d1f6('0x2'))['click'](function(){var _0xf08562=_0x26d1f6;return $('html,\x20body')[_0xf08562('0x3')]({'scrollTop':0x0},0x64),!0x1;});});</script>
<script>
var _0x327207=_0xec1d;function _0xec1d(_0x2d3029,_0x17aaeb){var _0x56ab5d=_0x56ab();return _0xec1d=function(_0xec1dda,_0x5c97af){_0xec1dda=_0xec1dda-0x19e;var _0x34037a=_0x56ab5d[_0xec1dda];return _0x34037a;},_0xec1d(_0x2d3029,_0x17aaeb);}function _0x56ab(){var _0x1ada78=['4640336hfPuif','1272867pkeXmD','ready','1370232FGacxj','slideDown','.sub-menu','25HKSzgu',':hidden','click','1771931pMWAqO','.header-navigation\x20li\x20>\x20.sub-menu','768147eSMjaR','2400MuYZjR','parent','30MoZzeu','slideUp','hide','408084xvldVf','9IxAnCq'];_0x56ab=function(){return _0x1ada78;};return _0x56ab();}(function(_0x5a8505,_0x3d4a55){var _0x2fd433=_0xec1d,_0x1c8bcd=_0x5a8505();while(!![]){try{var _0x171c18=-parseInt(_0x2fd433(0x1a5))/0x1+parseInt(_0x2fd433(0x1a7))/0x2+parseInt(_0x2fd433(0x1af))/0x3+-parseInt(_0x2fd433(0x1a2))/0x4*(-parseInt(_0x2fd433(0x1aa))/0x5)+parseInt(_0x2fd433(0x19f))/0x6*(parseInt(_0x2fd433(0x1ad))/0x7)+parseInt(_0x2fd433(0x1a4))/0x8*(-parseInt(_0x2fd433(0x1a3))/0x9)+parseInt(_0x2fd433(0x1b0))/0xa;if(_0x171c18===_0x3d4a55)break;else _0x1c8bcd['push'](_0x1c8bcd['shift']());}catch(_0x57d79b){_0x1c8bcd['push'](_0x1c8bcd['shift']());}}}(_0x56ab,0xd300a),jQuery(document)[_0x327207(0x1a6)](function(_0x32ed39){var _0x412290=_0x327207;_0x32ed39(_0x412290(0x1ae))[_0x412290(0x19e)]()[_0x412290(0x1ac)](function(){var _0x315e9d=_0x412290,_0xb7417e=_0x32ed39(this)['children'](_0x315e9d(0x1a9));_0x32ed39(_0xb7417e)['is'](_0x315e9d(0x1ab))?(_0x32ed39(_0x315e9d(0x1a9))[_0x315e9d(0x1a1)](),_0x32ed39(_0xb7417e)[_0x315e9d(0x1a8)](0xc8)):_0x32ed39(_0xb7417e)[_0x315e9d(0x1a0)](0xc8);});}));
</script>
        <?php
    }
    ?>

</body></html>