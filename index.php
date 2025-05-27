<!DOCTYPE html>
<html lang="en-US">
<head>
    <script>
      var gform;
      gform || (document.addEventListener('gform_main_scripts_loaded', function () {gform.scriptsLoaded = !0;}), document.addEventListener('gform/theme/scripts_loaded', function () {gform.themeScriptsLoaded = !0;}), window.addEventListener('DOMContentLoaded', function () {gform.domLoaded = !0;}), gform = {
        domLoaded: !1,
        scriptsLoaded: !1,
        themeScriptsLoaded: !1,
        isFormEditor: () => 'function' == typeof InitializeEditor,
        callIfLoaded: function (o) {return !(!gform.domLoaded || !gform.scriptsLoaded || !gform.themeScriptsLoaded && !gform.isFormEditor() || (gform.isFormEditor() && console.warn('The use of gform.initializeOnLoaded() is deprecated in the form editor context and will be removed in Gravity Forms 3.1.'), o(), 0));},
        initializeOnLoaded: function (o) {gform.callIfLoaded(o) || (document.addEventListener('gform_main_scripts_loaded', () => {gform.scriptsLoaded = !0, gform.callIfLoaded(o);}), document.addEventListener('gform/theme/scripts_loaded', () => {gform.themeScriptsLoaded = !0, gform.callIfLoaded(o);}), window.addEventListener('DOMContentLoaded', () => {gform.domLoaded = !0, gform.callIfLoaded(o);}));},
        hooks: { action: {}, filter: {} },
        addAction: function (o, r, e, t) {gform.addHook('action', o, r, e, t);},
        addFilter: function (o, r, e, t) {gform.addHook('filter', o, r, e, t);},
        doAction: function (o) {gform.doHook('action', o, arguments);},
        applyFilters: function (o) {return gform.doHook('filter', o, arguments);},
        removeAction: function (o, r) {gform.removeHook('action', o, r);},
        removeFilter: function (o, r, e) {gform.removeHook('filter', o, r, e);},
        addHook: function (o, r, e, t, n) {
          null == gform.hooks[o][r] && (gform.hooks[o][r] = []);
          var d = gform.hooks[o][r];
          null == n && (n = r + '_' + d.length), gform.hooks[o][r].push({
            tag: n,
            callable: e,
            priority: t = null == t ? 10 : t
          });
        },
        doHook: function (r, o, e) {
          var t;
          if (e = Array.prototype.slice.call(e, 1), null != gform.hooks[r][o] && ((o = gform.hooks[r][o]).sort(function (o, r) {return o.priority - r.priority;}), o.forEach(function (o) {'function' != typeof (t = o.callable) && (t = window[t]), 'action' == r ? t.apply(null, e) : e[0] = t.apply(null, e);})), 'filter' == r) return e[0];
        },
        removeHook: function (o, r, t, n) {
          var e;
          null != gform.hooks[o][r] && (e = (e = gform.hooks[o][r]).filter(function (o, r, e) {return !!(null != n && n != o.tag || null != t && t != o.priority);}), gform.hooks[o][r] = e);
        }
      });
    </script>

    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
    <style>img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }</style>

    <!-- This site is optimized with the Yoast SEO plugin v24.6 - https://yoast.com/wordpress/plugins/seo/ -->
    <!-- Admin only notice: this page does not show a meta description because it does not have one, either write it for this page specifically or go into the [Yoast SEO - Settings] menu and set up a template. -->
    <link rel="canonical" href="https://loboley.com/g/tx/" class="yoast-seo-meta-tag"/>
    <meta property="og:locale" content="en_US" class="yoast-seo-meta-tag"/>
    <meta property="og:type" content="website" class="yoast-seo-meta-tag"/>
    <meta property="og:title" content="Abogados de Accidentes en Texas" class="yoast-seo-meta-tag"/>
    <meta property="og:description"
          content="MÁXIMA COMPENSACIÓN 26+ AÑOS DE EXPERIENCIA GANAMOS A LO GRANDE Compensaciones 3.5 Veces Mas Grandes Cuando Usted Tiene Un Abogado Según estudios del &#8220;Insurance Research Council&#8221;(IRC), las víctimas de accidentes de carros con lesiones personales que contratan un abogado, reciben en promedio 3.5 veces más de compensación. ¡Hemos recuperado millones anualmente! Expertos: Durante los últimos [&hellip;]"
          class="yoast-seo-meta-tag"/>
    <meta property="og:url" content="https://loboley.com/g/tx/" class="yoast-seo-meta-tag"/>
    <meta property="og:site_name" content="Lobo Ley Abogados De Accidentes" class="yoast-seo-meta-tag"/>
    <meta property="article:modified_time" content="2025-04-27T22:44:37+00:00" class="yoast-seo-meta-tag"/>
    <meta property="og:image" content="https://loboley.com/g/tx/wp-content/uploads/2024/12/gus_steve_banner1.webp"
          class="yoast-seo-meta-tag"/>
    <meta property="og:image:width" content="1920" class="yoast-seo-meta-tag"/>
    <meta property="og:image:height" content="1241" class="yoast-seo-meta-tag"/>
    <meta property="og:image:type" content="image/webp" class="yoast-seo-meta-tag"/>
    <meta name="twitter:card" content="summary_large_image" class="yoast-seo-meta-tag"/>
    <script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://loboley.com/g/tx/",
                    "url": "https://loboley.com/g/tx/",
                    "name": "Abogados de Accidentes en Texas",
                    "isPartOf": {
                        "@id": "https://loboley.com/g/tx/#website"
                    },
                    "about": {
                        "@id": "https://loboley.com/g/tx/#organization"
                    },
                    "primaryImageOfPage": {
                        "@id": "https://loboley.com/g/tx/#primaryimage"
                    },
                    "image": {
                        "@id": "https://loboley.com/g/tx/#primaryimage"
                    },
                    "thumbnailUrl": "https://loboley.com/g/tx/wp-content/uploads/2024/12/gus_steve_banner1.webp",
                    "datePublished": "2025-01-03T20:24:18+00:00",
                    "dateModified": "2025-04-27T22:44:37+00:00",
                    "breadcrumb": {
                        "@id": "https://loboley.com/g/tx/#breadcrumb"
                    },
                    "inLanguage": "en-US",
                    "potentialAction": [
                        {
                            "@type": "ReadAction",
                            "target": [
                                "https://loboley.com/g/tx/"
                            ]
                        }
                    ]
                },
                {
                    "@type": "ImageObject",
                    "inLanguage": "en-US",
                    "@id": "https://loboley.com/g/tx/#primaryimage",
                    "url": "https://loboley.com/g/tx/wp-content/uploads/2024/12/gus_steve_banner1.webp",
                    "contentUrl": "https://loboley.com/g/tx/wp-content/uploads/2024/12/gus_steve_banner1.webp",
                    "width": 1920,
                    "height": 1241
                },
                {
                    "@type": "BreadcrumbList",
                    "@id": "https://loboley.com/g/tx/#breadcrumb",
                    "itemListElement": [
                        {
                            "@type": "ListItem",
                            "position": 1,
                            "name": "Home"
                        }
                    ]
                },
                {
                    "@type": "WebSite",
                    "@id": "https://loboley.com/g/tx/#website",
                    "url": "https://loboley.com/g/tx/",
                    "name": "Lobo Ley Abogados De Accidentes",
                    "description": "Crim &amp; Villalpando, PC",
                    "publisher": {
                        "@id": "https://loboley.com/g/tx/#organization"
                    },
                    "potentialAction": [
                        {
                            "@type": "SearchAction",
                            "target": {
                                "@type": "EntryPoint",
                                "urlTemplate": "https://loboley.com/g/tx/?s={search_term_string}"
                            },
                            "query-input": {
                                "@type": "PropertyValueSpecification",
                                "valueRequired": true,
                                "valueName": "search_term_string"
                            }
                        }
                    ],
                    "inLanguage": "en-US"
                },
                {
                    "@type": "Organization",
                    "@id": "https://loboley.com/g/tx/#organization",
                    "name": "Lobo Ley Abogados De Accidentes",
                    "url": "https://loboley.com/g/tx/",
                    "logo": {
                        "@type": "ImageObject",
                        "inLanguage": "en-US",
                        "@id": "https://loboley.com/g/tx/#/schema/logo/image/",
                        "url": "https://loboley.com/g/tx/wp-content/uploads/2024/12/lobo-logo-1.png",
                        "contentUrl": "https://loboley.com/g/tx/wp-content/uploads/2024/12/lobo-logo-1.png",
                        "width": 700,
                        "height": 220,
                        "caption": "Lobo Ley Abogados De Accidentes"
                    },
                    "image": {
                        "@id": "https://loboley.com/g/tx/#/schema/logo/image/"
                    }
                }
            ]
        }
    </script>
    <!-- / Yoast SEO plugin. -->


    <title>Abogados de Accidentes de Carro en Texas</title>
    <style id='wp-block-image-inline-css'>
        .wp-block-image > a, .wp-block-image > figure > a {
            display: inline-block
        }

        .wp-block-image img {
            box-sizing: border-box;
            height: auto;
            max-width: 100%;
            vertical-align: bottom
        }

        @media not (prefers-reduced-motion) {
            .wp-block-image img.hide {
                visibility: hidden
            }

            .wp-block-image img.show {
                animation: show-content-image .4s
            }
        }

        .wp-block-image[style*=border-radius] img, .wp-block-image[style*=border-radius] > a {
            border-radius: inherit
        }

        .wp-block-image.has-custom-border img {
            box-sizing: border-box
        }

        .wp-block-image.aligncenter {
            text-align: center
        }

        .wp-block-image.alignfull > a, .wp-block-image.alignwide > a {
            width: 100%
        }

        .wp-block-image.alignfull img, .wp-block-image.alignwide img {
            height: auto;
            width: 100%
        }

        .wp-block-image .aligncenter, .wp-block-image .alignleft, .wp-block-image .alignright, .wp-block-image.aligncenter, .wp-block-image.alignleft, .wp-block-image.alignright {
            display: table
        }

        .wp-block-image .aligncenter > figcaption, .wp-block-image .alignleft > figcaption, .wp-block-image .alignright > figcaption, .wp-block-image.aligncenter > figcaption, .wp-block-image.alignleft > figcaption, .wp-block-image.alignright > figcaption {
            caption-side: bottom;
            display: table-caption
        }

        .wp-block-image .alignleft {
            float: left;
            margin: .5em 1em .5em 0
        }

        .wp-block-image .alignright {
            float: right;
            margin: .5em 0 .5em 1em
        }

        .wp-block-image .aligncenter {
            margin-left: auto;
            margin-right: auto
        }

        .wp-block-image :where(figcaption) {
            margin-bottom: 1em;
            margin-top: .5em
        }

        .wp-block-image.is-style-circle-mask img {
            border-radius: 9999px
        }

        @supports ((-webkit-mask-image:none) or (mask-image:none)) or (-webkit-mask-image:none) {
            .wp-block-image.is-style-circle-mask img {
                border-radius: 0;
                -webkit-mask-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"/></svg>');
                mask-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"/></svg>');
                mask-mode: alpha;
                -webkit-mask-position: center;
                mask-position: center;
                -webkit-mask-repeat: no-repeat;
                mask-repeat: no-repeat;
                -webkit-mask-size: contain;
                mask-size: contain
            }
        }

        :root :where(.wp-block-image.is-style-rounded img,.wp-block-image .is-style-rounded img) {
            border-radius: 9999px
        }

        .wp-block-image figure {
            margin: 0
        }

        .wp-lightbox-container {
            display: flex;
            flex-direction: column;
            position: relative
        }

        .wp-lightbox-container img {
            cursor: zoom-in
        }

        .wp-lightbox-container img:hover + button {
            opacity: 1
        }

        .wp-lightbox-container button {
            align-items: center;
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            backdrop-filter: blur(16px) saturate(180%);
            background-color: #5a5a5a40;
            border: none;
            border-radius: 4px;
            cursor: zoom-in;
            display: flex;
            height: 20px;
            justify-content: center;
            opacity: 0;
            padding: 0;
            position: absolute;
            right: 16px;
            text-align: center;
            top: 16px;
            width: 20px;
            z-index: 100
        }

        @media not (prefers-reduced-motion) {
            .wp-lightbox-container button {
                transition: opacity .2s ease
            }
        }

        .wp-lightbox-container button:focus-visible {
            outline: 3px auto #5a5a5a40;
            outline: 3px auto -webkit-focus-ring-color;
            outline-offset: 3px
        }

        .wp-lightbox-container button:hover {
            cursor: pointer;
            opacity: 1
        }

        .wp-lightbox-container button:focus {
            opacity: 1
        }

        .wp-lightbox-container button:focus, .wp-lightbox-container button:hover, .wp-lightbox-container button:not(:hover):not(:active):not(.has-background) {
            background-color: #5a5a5a40;
            border: none
        }

        .wp-lightbox-overlay {
            box-sizing: border-box;
            cursor: zoom-out;
            height: 100vh;
            left: 0;
            overflow: hidden;
            position: fixed;
            top: 0;
            visibility: hidden;
            width: 100%;
            z-index: 100000
        }

        .wp-lightbox-overlay .close-button {
            align-items: center;
            cursor: pointer;
            display: flex;
            justify-content: center;
            min-height: 40px;
            min-width: 40px;
            padding: 0;
            position: absolute;
            right: calc(env(safe-area-inset-right) + 16px);
            top: calc(env(safe-area-inset-top) + 16px);
            z-index: 5000000
        }

        .wp-lightbox-overlay .close-button:focus, .wp-lightbox-overlay .close-button:hover, .wp-lightbox-overlay .close-button:not(:hover):not(:active):not(.has-background) {
            background: none;
            border: none
        }

        .wp-lightbox-overlay .lightbox-image-container {
            height: var(--wp--lightbox-container-height);
            left: 50%;
            overflow: hidden;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            transform-origin: top left;
            width: var(--wp--lightbox-container-width);
            z-index: 9999999999
        }

        .wp-lightbox-overlay .wp-block-image {
            align-items: center;
            box-sizing: border-box;
            display: flex;
            height: 100%;
            justify-content: center;
            margin: 0;
            position: relative;
            transform-origin: 0 0;
            width: 100%;
            z-index: 3000000
        }

        .wp-lightbox-overlay .wp-block-image img {
            height: var(--wp--lightbox-image-height);
            min-height: var(--wp--lightbox-image-height);
            min-width: var(--wp--lightbox-image-width);
            width: var(--wp--lightbox-image-width)
        }

        .wp-lightbox-overlay .wp-block-image figcaption {
            display: none
        }

        .wp-lightbox-overlay button {
            background: none;
            border: none
        }

        .wp-lightbox-overlay .scrim {
            background-color: #fff;
            height: 100%;
            opacity: .9;
            position: absolute;
            width: 100%;
            z-index: 2000000
        }

        .wp-lightbox-overlay.active {
            visibility: visible
        }

        @media not (prefers-reduced-motion) {
            .wp-lightbox-overlay.active {
                animation: turn-on-visibility .25s both
            }

            .wp-lightbox-overlay.active img {
                animation: turn-on-visibility .35s both
            }

            .wp-lightbox-overlay.show-closing-animation:not(.active) {
                animation: turn-off-visibility .35s both
            }

            .wp-lightbox-overlay.show-closing-animation:not(.active) img {
                animation: turn-off-visibility .25s both
            }

            .wp-lightbox-overlay.zoom.active {
                animation: none;
                opacity: 1;
                visibility: visible
            }

            .wp-lightbox-overlay.zoom.active .lightbox-image-container {
                animation: lightbox-zoom-in .4s
            }

            .wp-lightbox-overlay.zoom.active .lightbox-image-container img {
                animation: none
            }

            .wp-lightbox-overlay.zoom.active .scrim {
                animation: turn-on-visibility .4s forwards
            }

            .wp-lightbox-overlay.zoom.show-closing-animation:not(.active) {
                animation: none
            }

            .wp-lightbox-overlay.zoom.show-closing-animation:not(.active) .lightbox-image-container {
                animation: lightbox-zoom-out .4s
            }

            .wp-lightbox-overlay.zoom.show-closing-animation:not(.active) .lightbox-image-container img {
                animation: none
            }

            .wp-lightbox-overlay.zoom.show-closing-animation:not(.active) .scrim {
                animation: turn-off-visibility .4s forwards
            }
        }

        @keyframes show-content-image {
            0% {
                visibility: hidden
            }
            99% {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }

        @keyframes turn-on-visibility {
            0% {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }

        @keyframes turn-off-visibility {
            0% {
                opacity: 1;
                visibility: visible
            }
            99% {
                opacity: 0;
                visibility: visible
            }
            to {
                opacity: 0;
                visibility: hidden
            }
        }

        @keyframes lightbox-zoom-in {
            0% {
                transform: translate(calc((-100vw + var(--wp--lightbox-scrollbar-width)) / 2 + var(--wp--lightbox-initial-left-position)), calc(-50vh + var(--wp--lightbox-initial-top-position))) scale(var(--wp--lightbox-scale))
            }
            to {
                transform: translate(-50%, -50%) scale(1)
            }
        }

        @keyframes lightbox-zoom-out {
            0% {
                transform: translate(-50%, -50%) scale(1);
                visibility: visible
            }
            99% {
                visibility: visible
            }
            to {
                transform: translate(calc((-100vw + var(--wp--lightbox-scrollbar-width)) / 2 + var(--wp--lightbox-initial-left-position)), calc(-50vh + var(--wp--lightbox-initial-top-position))) scale(var(--wp--lightbox-scale));
                visibility: hidden
            }
        }
    </style>
    <style id='wp-block-group-inline-css'>
        .wp-block-group {
            box-sizing: border-box
        }

        :where(.wp-block-group.wp-block-group-is-layout-constrained) {
            position: relative
        }
    </style>
    <style id='wp-block-heading-inline-css'>
        h1.has-background, h2.has-background, h3.has-background, h4.has-background, h5.has-background, h6.has-background {
            padding: 1.25em 2.375em
        }

        h1.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]), h1.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]), h2.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]), h2.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]), h3.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]), h3.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]), h4.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]), h4.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]), h5.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]), h5.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]), h6.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]), h6.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]) {
            rotate: 180deg
        }
    </style>
    <style id='wp-block-paragraph-inline-css'>
        .is-small-text {
            font-size: .875em
        }

        .is-regular-text {
            font-size: 1em
        }

        .is-large-text {
            font-size: 2.25em
        }

        .is-larger-text {
            font-size: 3em
        }

        .has-drop-cap:not(:focus):first-letter {
            float: left;
            font-size: 8.4em;
            font-style: normal;
            font-weight: 100;
            line-height: .68;
            margin: .05em .1em 0 0;
            text-transform: uppercase
        }

        body.rtl .has-drop-cap:not(:focus):first-letter {
            float: none;
            margin-left: .1em
        }

        p.has-drop-cap.has-background {
            overflow: hidden
        }

        :root :where(p.has-background) {
            padding: 1.25em 2.375em
        }

        :where(p.has-text-color:not(.has-link-color)) a {
            color: inherit
        }

        p.has-text-align-left[style*="writing-mode:vertical-lr"], p.has-text-align-right[style*="writing-mode:vertical-rl"] {
            rotate: 180deg
        }
    </style>
    <!-- FLAG -->
    <link rel='stylesheet' id='wp-block-cover-css'
          href='https://loboley.com/g/tx/wp-includes/blocks/cover/style.min.css?ver=6.8.1' media='all'/>
    <style id='wp-block-columns-inline-css'>
        .wp-block-columns {
            align-items: normal !important;
            box-sizing: border-box;
            display: flex;
            flex-wrap: wrap !important
        }

        @media (min-width: 782px) {
            .wp-block-columns {
                flex-wrap: nowrap !important
            }
        }

        .wp-block-columns.are-vertically-aligned-top {
            align-items: flex-start
        }

        .wp-block-columns.are-vertically-aligned-center {
            align-items: center
        }

        .wp-block-columns.are-vertically-aligned-bottom {
            align-items: flex-end
        }

        @media (max-width: 781px) {
            .wp-block-columns:not(.is-not-stacked-on-mobile) > .wp-block-column {
                flex-basis: 100% !important
            }
        }

        @media (min-width: 782px) {
            .wp-block-columns:not(.is-not-stacked-on-mobile) > .wp-block-column {
                flex-basis: 0;
                flex-grow: 1
            }

            .wp-block-columns:not(.is-not-stacked-on-mobile) > .wp-block-column[style*=flex-basis] {
                flex-grow: 0
            }
        }

        .wp-block-columns.is-not-stacked-on-mobile {
            flex-wrap: nowrap !important
        }

        .wp-block-columns.is-not-stacked-on-mobile > .wp-block-column {
            flex-basis: 0;
            flex-grow: 1
        }

        .wp-block-columns.is-not-stacked-on-mobile > .wp-block-column[style*=flex-basis] {
            flex-grow: 0
        }

        :where(.wp-block-columns) {
            margin-bottom: 1.75em
        }

        :where(.wp-block-columns.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-column {
            flex-grow: 1;
            min-width: 0;
            overflow-wrap: break-word;
            word-break: break-word
        }

        .wp-block-column.is-vertically-aligned-top {
            align-self: flex-start
        }

        .wp-block-column.is-vertically-aligned-center {
            align-self: center
        }

        .wp-block-column.is-vertically-aligned-bottom {
            align-self: flex-end
        }

        .wp-block-column.is-vertically-aligned-stretch {
            align-self: stretch
        }

        .wp-block-column.is-vertically-aligned-bottom, .wp-block-column.is-vertically-aligned-center, .wp-block-column.is-vertically-aligned-top {
            width: 100%
        }
    </style>
    <style id='outermost-icon-block-style-inline-css'>
        .wp-block-outermost-icon-block {
            display: flex;
            line-height: 0
        }

        .wp-block-outermost-icon-block.has-border-color {
            border: none
        }

        .wp-block-outermost-icon-block .has-icon-color svg, .wp-block-outermost-icon-block.has-icon-color svg {
            color: currentColor
        }

        .wp-block-outermost-icon-block .has-icon-color:not(.has-no-icon-fill-color) svg, .wp-block-outermost-icon-block.has-icon-color:not(.has-no-icon-fill-color) svg {
            fill: currentColor
        }

        .wp-block-outermost-icon-block .icon-container {
            box-sizing: border-box
        }

        .wp-block-outermost-icon-block a, .wp-block-outermost-icon-block svg {
            height: 100%;
            transition: transform .1s ease-in-out;
            width: 100%
        }

        .wp-block-outermost-icon-block a:hover {
            transform: scale(1.1)
        }

        .wp-block-outermost-icon-block svg {
            transform: rotate(var(--outermost--icon-block--transform-rotate, 0deg)) scaleX(var(--outermost--icon-block--transform-scale-x, 1)) scaleY(var(--outermost--icon-block--transform-scale-y, 1))
        }

        .wp-block-outermost-icon-block .rotate-90, .wp-block-outermost-icon-block.rotate-90 {
            --outermost--icon-block--transform-rotate: 90deg
        }

        .wp-block-outermost-icon-block .rotate-180, .wp-block-outermost-icon-block.rotate-180 {
            --outermost--icon-block--transform-rotate: 180deg
        }

        .wp-block-outermost-icon-block .rotate-270, .wp-block-outermost-icon-block.rotate-270 {
            --outermost--icon-block--transform-rotate: 270deg
        }

        .wp-block-outermost-icon-block .flip-horizontal, .wp-block-outermost-icon-block.flip-horizontal {
            --outermost--icon-block--transform-scale-x: -1
        }

        .wp-block-outermost-icon-block .flip-vertical, .wp-block-outermost-icon-block.flip-vertical {
            --outermost--icon-block--transform-scale-y: -1
        }

        .wp-block-outermost-icon-block .flip-vertical.flip-horizontal, .wp-block-outermost-icon-block.flip-vertical.flip-horizontal {
            --outermost--icon-block--transform-scale-x: -1;
            --outermost--icon-block--transform-scale-y: -1
        }

    </style>
    <style id='wp-block-list-inline-css'>
        ol, ul {
            box-sizing: border-box
        }

        :root :where(.wp-block-list.has-background) {
            padding: 1.25em 2.375em
        }

        ul.is-style-checkmark-list {
            list-style-type: "\2713";
        }

        ul.is-style-checkmark-list li {
            padding-inline-start: 1ch;
        }
    </style>
    <style id='wp-block-details-inline-css'>
        .wp-block-details {
            box-sizing: border-box
        }

        .wp-block-details summary {
            cursor: pointer
        }
    </style>
    <style id='wp-block-post-content-inline-css'>
        .wp-block-post-content {
            display: flow-root
        }
    </style>
    <style id='wp-emoji-styles-inline-css'>

        img.wp-smiley, img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='wp-block-library-inline-css'>
        :root {
            --wp-admin-theme-color: #007cba;
            --wp-admin-theme-color--rgb: 0, 124, 186;
            --wp-admin-theme-color-darker-10: #006ba1;
            --wp-admin-theme-color-darker-10--rgb: 0, 107, 161;
            --wp-admin-theme-color-darker-20: #005a87;
            --wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
            --wp-admin-border-width-focus: 2px;
            --wp-block-synced-color: #7a00df;
            --wp-block-synced-color--rgb: 122, 0, 223;
            --wp-bound-block-color: var(--wp-block-synced-color)
        }

        @media (min-resolution: 192dpi) {
            :root {
                --wp-admin-border-width-focus: 1.5px
            }
        }

        .wp-element-button {
            cursor: pointer
        }

        :root {
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 42px
        }

        :root .has-very-light-gray-background-color {
            background-color: #eee
        }

        :root .has-very-dark-gray-background-color {
            background-color: #313131
        }

        :root .has-very-light-gray-color {
            color: #eee
        }

        :root .has-very-dark-gray-color {
            color: #313131
        }

        :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
            background: linear-gradient(135deg, #00d084, #0693e3)
        }

        :root .has-purple-crush-gradient-background {
            background: linear-gradient(135deg, #34e2e4, #4721fb 50%, #ab1dfe)
        }

        :root .has-hazy-dawn-gradient-background {
            background: linear-gradient(135deg, #faaca8, #dad0ec)
        }

        :root .has-subdued-olive-gradient-background {
            background: linear-gradient(135deg, #fafae1, #67a671)
        }

        :root .has-atomic-cream-gradient-background {
            background: linear-gradient(135deg, #fdd79a, #004a59)
        }

        :root .has-nightshade-gradient-background {
            background: linear-gradient(135deg, #330968, #31cdcf)
        }

        :root .has-midnight-gradient-background {
            background: linear-gradient(135deg, #020381, #2874fc)
        }

        .has-regular-font-size {
            font-size: 1em
        }

        .has-larger-font-size {
            font-size: 2.625em
        }

        .has-normal-font-size {
            font-size: var(--wp--preset--font-size--normal)
        }

        .has-huge-font-size {
            font-size: var(--wp--preset--font-size--huge)
        }

        .has-text-align-center {
            text-align: center
        }

        .has-text-align-left {
            text-align: left
        }

        .has-text-align-right {
            text-align: right
        }

        #end-resizable-editor-section {
            display: none
        }

        .aligncenter {
            clear: both
        }

        .items-justified-left {
            justify-content: flex-start
        }

        .items-justified-center {
            justify-content: center
        }

        .items-justified-right {
            justify-content: flex-end
        }

        .items-justified-space-between {
            justify-content: space-between
        }

        .screen-reader-text {
            border: 0;
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important
        }

        .screen-reader-text:focus {
            background-color: #ddd;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000
        }

        html :where(.has-border-color) {
            border-style: solid
        }

        html :where([style*=border-top-color]) {
            border-top-style: solid
        }

        html :where([style*=border-right-color]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-color]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-color]) {
            border-left-style: solid
        }

        html :where([style*=border-width]) {
            border-style: solid
        }

        html :where([style*=border-top-width]) {
            border-top-style: solid
        }

        html :where([style*=border-right-width]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-width]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-width]) {
            border-left-style: solid
        }

        html :where(img[class*=wp-image-]) {
            height: auto;
            max-width: 100%
        }

        :where(figure) {
            margin: 0 0 1em
        }
    </style>
    <!-- FLAG -->
    <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--base: #FFFFFF;
            --wp--preset--color--contrast: #111111;
            --wp--preset--color--accent-1: #1a2c56;
            --wp--preset--color--accent-2: #e6b743;
            --wp--preset--color--accent-3: #c2ad77;
            --wp--preset--color--accent-4: #ff0000;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 0.875rem;
            --wp--preset--font-size--medium: clamp(1rem, 1rem + ((1vw - 0.2rem) * 0.169), 1.125rem);
            --wp--preset--font-size--large: clamp(1.125rem, 1.125rem + ((1vw - 0.2rem) * 0.339), 1.375rem);
            --wp--preset--font-size--x-large: clamp(1.75rem, 1.75rem + ((1vw - 0.2rem) * 0.339), 2rem);
            --wp--preset--font-size--xx-large: clamp(2.15rem, 2.15rem + ((1vw - 0.2rem) * 1.153), 3rem);
            --wp--preset--font-family--manrope: Manrope, sans-serif;
            --wp--preset--font-family--fira-code: "Fira Code", monospace;
            --wp--preset--font-family--biorhyme: BioRhyme, serif;
            --wp--preset--spacing--20: 10px;
            --wp--preset--spacing--30: 20px;
            --wp--preset--spacing--40: 30px;
            --wp--preset--spacing--50: clamp(30px, 5vw, 50px);
            --wp--preset--spacing--60: clamp(30px, 7vw, 70px);
            --wp--preset--spacing--70: clamp(50px, 7vw, 90px);
            --wp--preset--spacing--80: clamp(70px, 10vw, 140px);
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :root {
            --wp--style--global--content-size: 1200px;
            --wp--style--global--wide-size: 1500px;
        }

        :where(body) {
            margin: 0;
        }

        .wp-site-blocks {
            padding-top: var(--wp--style--root--padding-top);
            padding-bottom: var(--wp--style--root--padding-bottom);
        }

        .has-global-padding {
            padding-right: var(--wp--style--root--padding-right);
            padding-left: var(--wp--style--root--padding-left);
        }

        .has-global-padding > .alignfull {
            margin-right: calc(var(--wp--style--root--padding-right) * -1);
            margin-left: calc(var(--wp--style--root--padding-left) * -1);
        }

        .has-global-padding :where(:not(.alignfull.is-layout-flow) > .has-global-padding:not(.wp-block-block, .alignfull)) {
            padding-right: 0;
            padding-left: 0;
        }

        .has-global-padding :where(:not(.alignfull.is-layout-flow) > .has-global-padding:not(.wp-block-block, .alignfull)) > .alignfull {
            margin-left: 0;
            margin-right: 0;
        }

        .wp-site-blocks > .alignleft {
            float: left;
            margin-right: 2em;
        }

        .wp-site-blocks > .alignright {
            float: right;
            margin-left: 2em;
        }

        .wp-site-blocks > .aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }

        :where(.wp-site-blocks) > * {
            margin-block-start: 0rem;
            margin-block-end: 0;
        }

        :where(.wp-site-blocks) > :first-child {
            margin-block-start: 0;
        }

        :where(.wp-site-blocks) > :last-child {
            margin-block-end: 0;
        }

        :root {
            --wp--style--block-gap: 0rem;
        }

        :root :where(.is-layout-flow) > :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-flow) > :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-flow) > * {
            margin-block-start: 0rem;
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained) > :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-constrained) > :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained) > * {
            margin-block-start: 0rem;
            margin-block-end: 0;
        }

        :root :where(.is-layout-flex) {
            gap: 0rem;
        }

        :root :where(.is-layout-grid) {
            gap: 0rem;
        }

        .is-layout-flow > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-flow > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-flow > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-constrained > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-constrained > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained > .alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex > :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid > :is(*, div) {
            margin: 0;
        }

        body {
            background-color: var(--wp--preset--color--base);
            color: var(--wp--preset--color--contrast);
            font-family: var(--wp--preset--font-family--manrope);
            font-size: var(--wp--preset--font-size--large);
            font-weight: 300;
            letter-spacing: -0.1px;
            line-height: 1.4;
            --wp--style--root--padding-top: 0px;
            --wp--style--root--padding-right: 0;
            --wp--style--root--padding-bottom: 0px;
            --wp--style--root--padding-left: 0;
        }

        a:where(:not(.wp-element-button)) {
            color: currentColor;
            text-decoration: underline;
        }

        :root :where(a:where(:not(.wp-element-button)):hover) {
            text-decoration: none;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 400;
            letter-spacing: -0.1px;
            line-height: 1.125;
        }

        h1 {
            font-size: var(--wp--preset--font-size--xx-large);
        }

        h2 {
            font-size: var(--wp--preset--font-size--x-large);
        }

        h3 {
            font-size: var(--wp--preset--font-size--large);
        }

        h4 {
            font-size: var(--wp--preset--font-size--medium);
        }

        h5 {
            font-size: var(--wp--preset--font-size--small);
            letter-spacing: 0.5px;
        }

        h6 {
            font-size: var(--wp--preset--font-size--small);
            font-weight: 700;
            letter-spacing: 1.4px;
            text-transform: uppercase;
        }

        :root :where(.wp-element-button, .wp-block-button__link) {
            background-color: var(--wp--preset--color--contrast);
            border-width: 0;
            color: var(--wp--preset--color--base);
            font-family: inherit;
            font-size: var(--wp--preset--font-size--medium);
            line-height: inherit;
            padding-top: 1rem;
            padding-right: 2.25rem;
            padding-bottom: 1rem;
            padding-left: 2.25rem;
            text-decoration: none;
        }

        :root :where(.wp-element-button:hover, .wp-block-button__link:hover) {
            background-color: color-mix(in srgb, var(--wp--preset--color--contrast) 85%, transparent);
            border-color: transparent;
            color: var(--wp--preset--color--base);
        }

        :root :where(.wp-element-button:focus, .wp-block-button__link:focus) {
            outline-color: var(--wp--preset--color--accent-4);
            outline-offset: 2px;
        }

        :root :where(.wp-element-caption, .wp-block-audio figcaption, .wp-block-embed figcaption, .wp-block-gallery figcaption, .wp-block-image figcaption, .wp-block-table figcaption, .wp-block-video figcaption) {
            font-size: var(--wp--preset--font-size--small);
            line-height: 1.4;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-base-color {
            color: var(--wp--preset--color--base) !important;
        }

        .has-contrast-color {
            color: var(--wp--preset--color--contrast) !important;
        }

        .has-accent-1-color {
            color: var(--wp--preset--color--accent-1) !important;
        }

        .has-accent-2-color {
            color: var(--wp--preset--color--accent-2) !important;
        }

        .has-accent-3-color {
            color: var(--wp--preset--color--accent-3) !important;
        }

        .has-accent-4-color {
            color: var(--wp--preset--color--accent-4) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-base-background-color {
            background-color: var(--wp--preset--color--base) !important;
        }

        .has-contrast-background-color {
            background-color: var(--wp--preset--color--contrast) !important;
        }

        .has-accent-1-background-color {
            background-color: var(--wp--preset--color--accent-1) !important;
        }

        .has-accent-2-background-color {
            background-color: var(--wp--preset--color--accent-2) !important;
        }

        .has-accent-3-background-color {
            background-color: var(--wp--preset--color--accent-3) !important;
        }

        .has-accent-4-background-color {
            background-color: var(--wp--preset--color--accent-4) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-base-border-color {
            border-color: var(--wp--preset--color--base) !important;
        }

        .has-contrast-border-color {
            border-color: var(--wp--preset--color--contrast) !important;
        }

        .has-accent-1-border-color {
            border-color: var(--wp--preset--color--accent-1) !important;
        }

        .has-accent-2-border-color {
            border-color: var(--wp--preset--color--accent-2) !important;
        }

        .has-accent-3-border-color {
            border-color: var(--wp--preset--color--accent-3) !important;
        }

        .has-accent-4-border-color {
            border-color: var(--wp--preset--color--accent-4) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .has-xx-large-font-size {
            font-size: var(--wp--preset--font-size--xx-large) !important;
        }

        .has-manrope-font-family {
            font-family: var(--wp--preset--font-family--manrope) !important;
        }

        .has-fira-code-font-family {
            font-family: var(--wp--preset--font-family--fira-code) !important;
        }

        .has-biorhyme-font-family {
            font-family: var(--wp--preset--font-family--biorhyme) !important;
        }

        :root :where(.wp-block-columns-is-layout-flow) > :first-child {
            margin-block-start: 0;
        }

        :root :where(.wp-block-columns-is-layout-flow) > :last-child {
            margin-block-end: 0;
        }

        :root :where(.wp-block-columns-is-layout-flow) > * {
            margin-block-start: var(--wp--preset--spacing--50);
            margin-block-end: 0;
        }

        :root :where(.wp-block-columns-is-layout-constrained) > :first-child {
            margin-block-start: 0;
        }

        :root :where(.wp-block-columns-is-layout-constrained) > :last-child {
            margin-block-end: 0;
        }

        :root :where(.wp-block-columns-is-layout-constrained) > * {
            margin-block-start: var(--wp--preset--spacing--50);
            margin-block-end: 0;
        }

        :root :where(.wp-block-columns-is-layout-flex) {
            gap: var(--wp--preset--spacing--50);
        }

        :root :where(.wp-block-columns-is-layout-grid) {
            gap: var(--wp--preset--spacing--50);
        }

        :root :where(.wp-block-list) {
            margin-bottom: var(--wp--preset--spacing--20);
        }

        :root :where(.wp-block-list li) {
            margin-top: 0.5rem;
        }

        :root :where(.wp-block-heading) {
            color: var(--wp--preset--color--accent-3);
            margin-bottom: 0;
        }

        :root :where(.wp-block-heading a:where(:not(.wp-element-button))) {
            color: var(--wp--preset--color--accent-3);
        }

        :root :where(p) {
            margin-bottom: var(--wp--preset--spacing--20);
        }

        :root :where(.wp-block-group) {
            margin-top: 0;
            margin-bottom: 0;
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
        }

        :root :where(.wp-block-group-is-layout-flow) > :first-child {
            margin-block-start: 0;
        }

        :root :where(.wp-block-group-is-layout-flow) > :last-child {
            margin-block-end: 0;
        }

        :root :where(.wp-block-group-is-layout-flow) > * {
            margin-block-start: var(--wp--preset--spacing--20);
            margin-block-end: 0;
        }

        :root :where(.wp-block-group-is-layout-constrained) > :first-child {
            margin-block-start: 0;
        }

        :root :where(.wp-block-group-is-layout-constrained) > :last-child {
            margin-block-end: 0;
        }

        :root :where(.wp-block-group-is-layout-constrained) > * {
            margin-block-start: var(--wp--preset--spacing--20);
            margin-block-end: 0;
        }

        :root :where(.wp-block-group-is-layout-flex) {
            gap: var(--wp--preset--spacing--20);
        }

        :root :where(.wp-block-group-is-layout-grid) {
            gap: var(--wp--preset--spacing--20);
        }

        :root :where(.wp-block-details) {
            border-color: var(--wp--preset--color--accent-3);
            border-width: 1px;
            border-top-color: var(--wp--preset--color--accent-3);
            border-top-width: 1px;
            border-top-style: solid;
            border-right-color: var(--wp--preset--color--accent-3);
            border-right-width: 1px;
            border-right-style: solid;
            border-bottom-color: var(--wp--preset--color--accent-3);
            border-bottom-width: 1px;
            border-bottom-style: solid;
            border-left-color: var(--wp--preset--color--accent-3);
            border-left-width: 1px;
            border-left-style: solid;
            padding-top: var(--wp--preset--spacing--20);
            padding-right: var(--wp--preset--spacing--20);
            padding-bottom: var(--wp--preset--spacing--20);
            padding-left: var(--wp--preset--spacing--20);
        }

        :root :where(.wp-block-details-is-layout-flow) > :first-child {
            margin-block-start: 0;
        }

        :root :where(.wp-block-details-is-layout-flow) > :last-child {
            margin-block-end: 0;
        }

        :root :where(.wp-block-details-is-layout-flow) > * {
            margin-block-start: var(--wp--preset--spacing--20);
            margin-block-end: 0;
        }

        :root :where(.wp-block-details-is-layout-constrained) > :first-child {
            margin-block-start: 0;
        }

        :root :where(.wp-block-details-is-layout-constrained) > :last-child {
            margin-block-end: 0;
        }

        :root :where(.wp-block-details-is-layout-constrained) > * {
            margin-block-start: var(--wp--preset--spacing--20);
            margin-block-end: 0;
        }

        :root :where(.wp-block-details-is-layout-flex) {
            gap: var(--wp--preset--spacing--20);
        }

        :root :where(.wp-block-details-is-layout-grid) {
            gap: var(--wp--preset--spacing--20);
        }
    </style>
    <style id='core-block-supports-inline-css'>
        .wp-elements-ba0fe6648f69577ef79f8d88e929d3b0 a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--accent-2);
        }

        .wp-container-core-group-is-layout-1ab1a5d2 {
            gap: var(--wp--preset--spacing--10);
            flex-direction: column;
            align-items: flex-end;
        }

        .wp-container-core-group-is-layout-17124a9a {
            flex-wrap: nowrap;
            justify-content: flex-end;
        }

        .wp-container-core-group-is-layout-ed8b6e70 {
            flex-wrap: nowrap;
            justify-content: space-between;
        }

        .wp-container-core-group-is-layout-72190d31 > .alignfull {
            margin-right: calc(0px * -1);
            margin-left: calc(0px * -1);
        }

        .wp-elements-6f8d332dd56693db6afb7bf64ae3b11e a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--accent-3);
        }

        .wp-elements-ce78e2c4965f420114c4f52fa935836a a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--base);
        }

        .wp-elements-13b80215229f9199e56a7be55d08d6e6 a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--base);
        }

        .wp-elements-04e9bb4deb756ac4199c0abc33a14965 a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--base);
        }

        .wp-container-core-group-is-layout-2c471116 {
            gap: var(--wp--preset--spacing--20);
            justify-content: center;
        }

        .wp-container-core-cover-is-layout-097725cd > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: 1200px;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .wp-container-core-cover-is-layout-097725cd > .alignwide {
            max-width: 1200px;
        }

        .wp-container-core-cover-is-layout-097725cd .alignfull {
            max-width: none;
        }

        .wp-container-core-cover-is-layout-097725cd > .alignfull {
            margin-right: calc(var(--wp--preset--spacing--30) * -1);
            margin-left: calc(var(--wp--preset--spacing--30) * -1);
        }

        .wp-container-core-cover-is-layout-097725cd > * {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        .wp-container-core-cover-is-layout-097725cd > * + * {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        .wp-elements-a92d91980be48ad3dc7114067b7e8dda a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--base);
        }

        .wp-container-core-group-is-layout-1eb5a0b4 {
            flex-direction: column;
            align-items: center;
        }

        .wp-elements-0ce7d870a9ee4a16a62b2ea03ad3f66f a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--base);
        }

        .wp-container-core-group-is-layout-c113826b {
            flex-direction: column;
            align-items: center;
        }

        .wp-elements-a730705981fde5a63844f2702d120f48 a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--base);
        }

        .wp-container-core-columns-is-layout-28232c24 {
            flex-wrap: nowrap;
            gap: 0 0;
        }

        .wp-container-core-group-is-layout-cca5d157 {
            gap: var(--wp--preset--spacing--50);
            justify-content: center;
        }

        .wp-container-core-group-is-layout-e20a85ec > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: 1500px;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .wp-container-core-group-is-layout-e20a85ec > .alignwide {
            max-width: 1500px;
        }

        .wp-container-core-group-is-layout-e20a85ec .alignfull {
            max-width: none;
        }

        .wp-container-core-group-is-layout-e20a85ec > .alignfull {
            margin-right: calc(0px * -1);
            margin-left: calc(0px * -1);
        }

        .wp-container-core-group-is-layout-e20a85ec > * {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        .wp-container-core-group-is-layout-e20a85ec > * + * {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        .wp-container-core-group-is-layout-e4ad4815 > .alignfull {
            margin-right: calc(var(--wp--preset--spacing--30) * -1);
            margin-left: calc(var(--wp--preset--spacing--30) * -1);
        }

        .wp-container-core-group-is-layout-e4ad4815 > * {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        .wp-container-core-group-is-layout-e4ad4815 > * + * {
            margin-block-start: var(--wp--preset--spacing--30);
            margin-block-end: 0;
        }

        .wp-elements-d8cd257fec1cc25c49bc78bb1f9a9e1b a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--accent-1);
        }

        .wp-elements-6e69d06a2fd7bbc0482c7f3598530f7a a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--base);
        }

        .wp-container-core-group-is-layout-c385debf > .alignfull {
            margin-right: calc(var(--wp--preset--spacing--20) * -1);
            margin-left: calc(var(--wp--preset--spacing--20) * -1);
        }

        .wp-container-core-group-is-layout-fe9cc265 {
            flex-direction: column;
            align-items: flex-start;
        }

        .wp-container-core-columns-is-layout-4109350d {
            flex-wrap: nowrap;
        }

        .wp-container-core-group-is-layout-7bf9fb5f > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: 1200%;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .wp-container-core-group-is-layout-7bf9fb5f > .alignwide {
            max-width: 1200%;
        }

        .wp-container-core-group-is-layout-7bf9fb5f .alignfull {
            max-width: none;
        }

        .wp-container-core-group-is-layout-7bf9fb5f > .alignfull {
            margin-right: calc(var(--wp--preset--spacing--30) * -1);
            margin-left: calc(var(--wp--preset--spacing--30) * -1);
        }

        .wp-container-core-group-is-layout-ce155fab {
            flex-direction: column;
            align-items: center;
        }

        .wp-container-core-group-is-layout-d774db39 {
            justify-content: center;
        }

        .wp-container-core-group-is-layout-11c1ca01 > .alignfull {
            margin-right: calc(var(--wp--preset--spacing--50) * -1);
            margin-left: calc(var(--wp--preset--spacing--50) * -1);
        }

        .wp-container-core-group-is-layout-a1c9ff4d {
            flex-wrap: nowrap;
            gap: var(--wp--preset--spacing--20);
        }

        .wp-container-core-columns-is-layout-9c9a1810 {
            flex-wrap: nowrap;
        }

        .wp-elements-57e5d641226bc99800b05091854d301f a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--base);
        }

        .wp-container-core-group-is-layout-9ae43232 {
            flex-direction: column;
            align-items: flex-start;
        }

        .wp-elements-bfb44c4559143a63ded2b28383f2024e a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--base);
        }

        .wp-elements-51a319938c0b5f0691a4d830c5600ec3 a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--base);
        }

        .wp-container-core-columns-is-layout-28f84493 {
            flex-wrap: nowrap;
        }

        .wp-container-core-group-is-layout-ea040023 > .alignfull {
            margin-right: calc(var(--wp--preset--spacing--20) * -1);
            margin-left: calc(var(--wp--preset--spacing--20) * -1);
        }

        .wp-elements-305f4e28fbc36398e0c5cc5afa92f89c a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--base);
        }

        .wp-container-core-details-is-layout-6384a6bc > * {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        .wp-container-core-details-is-layout-6384a6bc > * + * {
            margin-block-start: var(--wp--preset--spacing--20);
            margin-block-end: 0;
        }

        .wp-container-core-details-is-layout-057de46b > * {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        .wp-container-core-details-is-layout-057de46b > * + * {
            margin-block-start: var(--wp--preset--spacing--20);
            margin-block-end: 0;
        }

        .wp-container-core-group-is-layout-4bf83969 > .alignfull {
            margin-right: calc(var(--wp--preset--spacing--20) * -1);
            margin-left: calc(var(--wp--preset--spacing--20) * -1);
        }

        .wp-container-core-group-is-layout-89031bc3 > .alignfull {
            margin-right: calc(0px * -1);
            margin-left: calc(0px * -1);
        }

        .wp-container-core-group-is-layout-55eed55b {
            flex-wrap: nowrap;
            gap: 0;
            justify-content: center;
        }

        .wp-container-core-group-is-layout-a77db08e > * {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        .wp-container-core-group-is-layout-a77db08e > * + * {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        .wp-elements-d5c19089211abcd7a299c7d1256c2af4 a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--base);
        }

        .wp-container-core-group-is-layout-ec6bdd48 > .alignfull {
            margin-right: calc(var(--wp--preset--spacing--20) * -1);
            margin-left: calc(var(--wp--preset--spacing--20) * -1);
        }

        .wp-container-core-group-is-layout-ec6bdd48 > * {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        .wp-container-core-group-is-layout-ec6bdd48 > * + * {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        .wp-elements-935e88689a395fedd35ff2646e14525c a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--base);
        }

        .wp-container-core-group-is-layout-0b40682b > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: 1500px;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .wp-container-core-group-is-layout-0b40682b > .alignwide {
            max-width: 1500px;
        }

        .wp-container-core-group-is-layout-0b40682b .alignfull {
            max-width: none;
        }
    </style>
    <style id='wp-block-template-skip-link-inline-css'>

        .skip-link.screen-reader-text {
            border: 0;
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute !important;
            width: 1px;
            word-wrap: normal !important;
        }

        .skip-link.screen-reader-text:focus {
            background-color: #eee;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000;
        }
    </style>
    <link rel='stylesheet' id='twentytwentyfive-style-css'
          href='https://loboley.com/g/tx/wp-content/themes/twentytwentyfive/style.css?ver=6.8.1' media='all'/>
    <link rel='stylesheet' id='gravity_forms_theme_reset-css'
          href='https://loboley.com/g/tx/wp-content/plugins/gravityforms/assets/css/dist/gravity-forms-theme-reset.min.css?ver=2.9.8'
          media='all'/>
    <link rel='stylesheet' id='gravity_forms_theme_foundation-css'
          href='https://loboley.com/g/tx/wp-content/plugins/gravityforms/assets/css/dist/gravity-forms-theme-foundation.min.css?ver=2.9.8'
          media='all'/>
    <link rel='stylesheet' id='gravity_forms_theme_framework-css'
          href='https://loboley.com/g/tx/wp-content/plugins/gravityforms/assets/css/dist/gravity-forms-theme-framework.min.css?ver=2.9.8'
          media='all'/>
    <link rel='stylesheet' id='gravity_forms_orbital_theme-css'
          href='https://loboley.com/g/tx/wp-content/plugins/gravityforms/assets/css/dist/gravity-forms-orbital-theme.min.css?ver=2.9.8'
          media='all'/>
    <script src="https://loboley.com/g/tx/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="https://loboley.com/g/tx/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
            id="jquery-migrate-js"></script>
    <script defer='defer' src="https://loboley.com/g/tx/wp-content/plugins/gravityforms/js/jquery.json.min.js?ver=2.9.8"
            id="gform_json-js"></script>
    <script id="gform_gravityforms-js-extra">
      var gf_global = {
        'gf_currency_config': {
          'name': 'U.S. Dollar',
          'symbol_left': '$',
          'symbol_right': '',
          'symbol_padding': '',
          'thousand_separator': ',',
          'decimal_separator': '.',
          'decimals': 2,
          'code': 'USD'
        },
        'base_url': 'https:\/\/loboley.com\/g\/tx\/wp-content\/plugins\/gravityforms',
        'number_formats': [],
        'spinnerUrl': 'https:\/\/loboley.com\/g\/tx\/wp-content\/plugins\/gravityforms\/images\/spinner.svg',
        'version_hash': '1a52dce124bc2e81226b79da626a6962',
        'strings': {
          'newRowAdded': 'New row added.',
          'rowRemoved': 'Row removed',
          'formSaved': 'The form has been saved.  The content contains the link to return and complete the form.'
        }
      };
      var gf_global = {
        'gf_currency_config': {
          'name': 'U.S. Dollar',
          'symbol_left': '$',
          'symbol_right': '',
          'symbol_padding': '',
          'thousand_separator': ',',
          'decimal_separator': '.',
          'decimals': 2,
          'code': 'USD'
        },
        'base_url': 'https:\/\/loboley.com\/g\/tx\/wp-content\/plugins\/gravityforms',
        'number_formats': [],
        'spinnerUrl': 'https:\/\/loboley.com\/g\/tx\/wp-content\/plugins\/gravityforms\/images\/spinner.svg',
        'version_hash': '1a52dce124bc2e81226b79da626a6962',
        'strings': {
          'newRowAdded': 'New row added.',
          'rowRemoved': 'Row removed',
          'formSaved': 'The form has been saved.  The content contains the link to return and complete the form.'
        }
      };
      var gform_i18n = {
        'datepicker': {
          'days': {
            'monday': 'Mo',
            'tuesday': 'Tu',
            'wednesday': 'We',
            'thursday': 'Th',
            'friday': 'Fr',
            'saturday': 'Sa',
            'sunday': 'Su'
          },
          'months': {
            'january': 'January',
            'february': 'February',
            'march': 'March',
            'april': 'April',
            'may': 'May',
            'june': 'June',
            'july': 'July',
            'august': 'August',
            'september': 'September',
            'october': 'October',
            'november': 'November',
            'december': 'December'
          },
          'firstDay': 1,
          'iconText': 'Select date'
        }
      };
      var gf_legacy_multi = { '1': '' };
      var gform_gravityforms = {
        'strings': {
          'invalid_file_extension': 'This type of file is not allowed. Must be one of the following:',
          'delete_file': 'Delete this file',
          'in_progress': 'in progress',
          'file_exceeds_limit': 'File exceeds size limit',
          'illegal_extension': 'This type of file is not allowed.',
          'max_reached': 'Maximum number of files reached',
          'unknown_error': 'There was a problem while saving the file on the server',
          'currently_uploading': 'Please wait for the uploading to complete',
          'cancel': 'Cancel',
          'cancel_upload': 'Cancel this upload',
          'cancelled': 'Cancelled'
        }, 'vars': { 'images_url': 'https:\/\/loboley.com\/g\/tx\/wp-content\/plugins\/gravityforms\/images' }
      };
    </script>
    <script defer='defer'
            src="https://loboley.com/g/tx/wp-content/plugins/gravityforms/js/gravityforms.min.js?ver=2.9.8"
            id="gform_gravityforms-js"></script>
    <script defer='defer'
            src="https://loboley.com/g/tx/wp-content/plugins/gravityforms/assets/js/dist/utils.min.js?ver=d1f4caf9d41e0123f387bd5029d08d19"
            id="gform_gravityforms_utils-js"></script>
    <script id="wfi18njs-js-extra">
      var WordfenceI18nStrings = {
        '${totalIPs} addresses in this network': '${totalIPs} addresses in this network',
        '%s in POST body: %s': '%s in POST body: %s',
        '%s in cookie: %s': '%s in cookie: %s',
        '%s in file: %s': '%s in file: %s',
        '%s in query string: %s': '%s in query string: %s',
        '%s is not valid hostname': '%s is not valid hostname',
        '.htaccess Updated': '.htaccess Updated',
        '.htaccess change': '.htaccess change',
        '404 Not Found': '404 Not Found',
        'Activity Log Sent': 'Activity Log Sent',
        'Add action to allowlist': 'Add action to allowlist',
        'Add code to .htaccess': 'Add code to .htaccess',
        'All Hits': 'All Hits',
        'All capabilties of admin user %s were successfully revoked.': 'All capabilties of admin user %s were successfully revoked.',
        'An error occurred': 'An error occurred',
        'An error occurred when adding the request to the allowlist.': 'An error occurred when adding the request to the allowlist.',
        'Are you sure you want to allowlist this action?': 'Are you sure you want to allowlist this action?',
        'Authentication Code': 'Authentication Code',
        'Background Request Blocked': 'Background Request Blocked',
        'Block This Network': 'Block This Network',
        'Blocked': 'Blocked',
        'Blocked By Firewall': 'Blocked By Firewall',
        'Blocked WAF': 'Blocked WAF',
        'Blocked by Wordfence': 'Blocked by Wordfence',
        'Blocked by Wordfence plugin settings': 'Blocked by Wordfence plugin settings',
        'Blocked by the Wordfence Application Firewall and plugin settings': 'Blocked by the Wordfence Application Firewall and plugin settings',
        'Blocked by the Wordfence Security Network': 'Blocked by the Wordfence Security Network',
        'Blocked by the Wordfence Web Application Firewall': 'Blocked by the Wordfence Web Application Firewall',
        'Bot': 'Bot',
        'Cancel Changes': 'Cancel Changes',
        'Cellphone Sign-In Recovery Codes': 'Cellphone Sign-In Recovery Codes',
        'Cellphone Sign-in activated for user.': 'Cellphone Sign-in activated for user.',
        'Click here to download a backup copy of this file now': 'Click here to download a backup copy of this file now',
        'Click here to download a backup copy of your .htaccess file now': 'Click here to download a backup copy of your .htaccess file now',
        'Click to fix .htaccess': 'Click to fix .htaccess',
        'Close': 'Close',
        'Crawlers': 'Crawlers',
        'Diagnostic report has been sent successfully.': 'Diagnostic report has been sent successfully.',
        'Directory Listing Disabled': 'Directory Listing Disabled',
        'Directory listing has been disabled on your server.': 'Directory listing has been disabled on your server.',
        'Disabled': 'Disabled',
        'Dismiss': 'Dismiss',
        'Don\'t ask again': 'Don\'t ask again',
        'Download': 'Download',
        'Download Backup File': 'Download Backup File',
        'Each line of 16 letters and numbers is a single recovery code, with optional spaces for readability. When typing your password, enter "wf" followed by the entire code like "mypassword wf1234 5678 90AB CDEF". If your site shows a separate prompt for entering a code after entering only your username and password, enter only the code like "1234 5678 90AB CDEF". Your recovery codes are:': 'Each line of 16 letters and numbers is a single recovery code, with optional spaces for readability. When typing your password, enter "wf" followed by the entire code like "mypassword wf1234 5678 90AB CDEF". If your site shows a separate prompt for entering a code after entering only your username and password, enter only the code like "1234 5678 90AB CDEF". Your recovery codes are:',
        'Email Diagnostic Report': 'Email Diagnostic Report',
        'Email Wordfence Activity Log': 'Email Wordfence Activity Log',
        'Enter a valid IP or domain': 'Enter a valid IP or domain',
        'Enter the email address you would like to send the Wordfence activity log to. Note that the activity log may contain thousands of lines of data. This log is usually only sent to a member of the Wordfence support team. It also contains your PHP configuration from the phpinfo() function for diagnostic data.': 'Enter the email address you would like to send the Wordfence activity log to. Note that the activity log may contain thousands of lines of data. This log is usually only sent to a member of the Wordfence support team. It also contains your PHP configuration from the phpinfo() function for diagnostic data.',
        'Error': 'Error',
        'Error Enabling All Options Page': 'Error Enabling All Options Page',
        'Error Restoring Defaults': 'Error Restoring Defaults',
        'Error Saving Option': 'Error Saving Option',
        'Error Saving Options': 'Error Saving Options',
        'Failed Login': 'Failed Login',
        'Failed Login: Invalid Username': 'Failed Login: Invalid Username',
        'Failed Login: Valid Username': 'Failed Login: Valid Username',
        'File hidden successfully': 'File hidden successfully',
        'File restored OK': 'File restored OK',
        'Filter Traffic': 'Filter Traffic',
        'Firewall Response': 'Firewall Response',
        'Full Path Disclosure': 'Full Path Disclosure',
        'Get a new license': 'Get a new license',
        'Google Bot': 'Google Bot',
        'Google Crawlers': 'Google Crawlers',
        'HTTP Response Code': 'HTTP Response Code',
        'Human': 'Human',
        'Humans': 'Humans',
        'IP': 'IP',
        'Key:': 'Key:',
        'Last Updated: %s': 'Last Updated: %s',
        'Learn more about repairing modified files.': 'Learn more about repairing modified files.',
        'Loading...': 'Loading...',
        'Locked Out': 'Locked Out',
        'Locked out from logging in': 'Locked out from logging in',
        'Logged In': 'Logged In',
        'Logins': 'Logins',
        'Logins and Logouts': 'Logins and Logouts',
        'Look up IP or Domain': 'Look up IP or Domain',
        'Manual block by administrator': 'Manual block by administrator',
        'Next Update Check: %s': 'Next Update Check: %s',
        'No activity to report yet. Please complete your first scan.': 'No activity to report yet. Please complete your first scan.',
        'No issues have been ignored.': 'No issues have been ignored.',
        'No new issues have been found.': 'No new issues have been found.',
        'No rules were updated. Please verify you have permissions to write to the \/wp-content\/wflogs directory.': 'No rules were updated. Please verify you have permissions to write to the \/wp-content\/wflogs directory.',
        'No rules were updated. Please verify your website can reach the Wordfence servers.': 'No rules were updated. Please verify your website can reach the Wordfence servers.',
        'No rules were updated. Your website has reached the maximum number of rule update requests. Please try again later.': 'No rules were updated. Your website has reached the maximum number of rule update requests. Please try again later.',
        'Note: Status will update when changes are saved': 'Note: Status will update when changes are saved',
        'OK': 'OK',
        'Pages Not Found': 'Pages Not Found',
        'Paid Members Only': 'Paid Members Only',
        'Please enter a valid IP address or domain name for your whois lookup.': 'Please enter a valid IP address or domain name for your whois lookup.',
        'Please enter a valid email address.': 'Please enter a valid email address.',
        'Please include your support ticket number or forum username.': 'Please include your support ticket number or forum username.',
        'Please make a backup of this file before proceeding. If you need to restore this backup file, you can copy it to the following path from your site\'s root:': 'Please make a backup of this file before proceeding. If you need to restore this backup file, you can copy it to the following path from your site\'s root:',
        'Please specify a reason': 'Please specify a reason',
        'Please specify a valid IP address range in the form of "1.2.3.4 - 1.2.3.5" without quotes. Make sure the dash between the IP addresses in a normal dash (a minus sign on your keyboard) and not another character that looks like a dash.': 'Please specify a valid IP address range in the form of "1.2.3.4 - 1.2.3.5" without quotes. Make sure the dash between the IP addresses in a normal dash (a minus sign on your keyboard) and not another character that looks like a dash.',
        'Please specify either an IP address range, Hostname or a web browser pattern to match.': 'Please specify either an IP address range, Hostname or a web browser pattern to match.',
        'Recent Activity': 'Recent Activity',
        'Recovery Codes': 'Recovery Codes',
        'Redirected': 'Redirected',
        'Redirected by Country Blocking bypass URL': 'Redirected by Country Blocking bypass URL',
        'Referer': 'Referer',
        'Registered Users': 'Registered Users',
        'Restore Defaults': 'Restore Defaults',
        'Rule Update Failed': 'Rule Update Failed',
        'Rules Updated': 'Rules Updated',
        'Save Changes': 'Save Changes',
        'Scan Complete.': 'Scan Complete.',
        'Scan the code below with your authenticator app to add this account. Some authenticator apps also allow you to type in the text version instead.': 'Scan the code below with your authenticator app to add this account. Some authenticator apps also allow you to type in the text version instead.',
        'Security Event': 'Security Event',
        'Send': 'Send',
        'Sorry, but no data for that IP or domain was found.': 'Sorry, but no data for that IP or domain was found.',
        'Specify a valid IP range': 'Specify a valid IP range',
        'Specify a valid hostname': 'Specify a valid hostname',
        'Specify an IP range, Hostname or Browser pattern': 'Specify an IP range, Hostname or Browser pattern',
        'Success deleting file': 'Success deleting file',
        'Success removing option': 'Success removing option',
        'Success restoring file': 'Success restoring file',
        'Success updating option': 'Success updating option',
        'Successfully deleted admin': 'Successfully deleted admin',
        'Successfully revoked admin': 'Successfully revoked admin',
        'Test Email Sent': 'Test Email Sent',
        'The \'How does Wordfence get IPs\' option was successfully updated to the recommended value.': 'The \'How does Wordfence get IPs\' option was successfully updated to the recommended value.',
        'The Full Path disclosure issue has been fixed': 'The Full Path disclosure issue has been fixed',
        'The admin user %s was successfully deleted.': 'The admin user %s was successfully deleted.',
        'The file %s was successfully deleted.': 'The file %s was successfully deleted.',
        'The file %s was successfully hidden from public view.': 'The file %s was successfully hidden from public view.',
        'The file %s was successfully restored.': 'The file %s was successfully restored.',
        'The option %s was successfully removed.': 'The option %s was successfully removed.',
        'The request has been allowlisted. Please try it again.': 'The request has been allowlisted. Please try it again.',
        'There was an error while downgrading to a free license.': 'There was an error while downgrading to a free license.',
        'There was an error while sending the email.': 'There was an error while sending the email.',
        'This will be shown only once. Keep these codes somewhere safe.': 'This will be shown only once. Keep these codes somewhere safe.',
        'Throttled': 'Throttled',
        'Two Factor Status': 'Two Factor Status',
        'Type': 'Type',
        'Type: %s': 'Type: %s',
        'URL': 'URL',
        'Unable to automatically hide file': 'Unable to automatically hide file',
        'Use one of these %s codes to log in if you are unable to access your phone. Codes are 16 characters long, plus optional spaces. Each one may be used only once.': 'Use one of these %s codes to log in if you are unable to access your phone. Codes are 16 characters long, plus optional spaces. Each one may be used only once.',
        'Use one of these %s codes to log in if you lose access to your authenticator device. Codes are 16 characters long, plus optional spaces. Each one may be used only once.': 'Use one of these %s codes to log in if you lose access to your authenticator device. Codes are 16 characters long, plus optional spaces. Each one may be used only once.',
        'User Agent': 'User Agent',
        'User ID': 'User ID',
        'Username': 'Username',
        'WHOIS LOOKUP': 'WHOIS LOOKUP',
        'We are about to change your <em>.htaccess<\/em> file. Please make a backup of this file before proceeding.': 'We are about to change your <em>.htaccess<\/em> file. Please make a backup of this file before proceeding.',
        'We can\'t modify your .htaccess file for you because: %s': 'We can\'t modify your .htaccess file for you because: %s',
        'We encountered a problem': 'We encountered a problem',
        'Wordfence Firewall blocked a background request to WordPress for the URL %s. If this occurred as a result of an intentional action, you may consider allowlisting the request to allow it in the future.': 'Wordfence Firewall blocked a background request to WordPress for the URL %s. If this occurred as a result of an intentional action, you may consider allowlisting the request to allow it in the future.',
        'Wordfence is working...': 'Wordfence is working...',
        'You are using Nginx as your web server. You\'ll need to disable autoindexing in your nginx.conf. See the <a target=\'_blank\'  rel=\'noopener noreferrer\' href=\'https:\/\/nginx.org\/en\/docs\/http\/ngx_http_autoindex_module.html\'>Nginx docs for more info<\/a> on how to do this.': 'You are using Nginx as your web server. You\'ll need to disable autoindexing in your nginx.conf. See the <a target=\'_blank\'  rel=\'noopener noreferrer\' href=\'https:\/\/nginx.org\/en\/docs\/http\/ngx_http_autoindex_module.html\'>Nginx docs for more info<\/a> on how to do this.',
        'You are using an Nginx web server and using a FastCGI processor like PHP5-FPM. You will need to manually delete or hide those files.': 'You are using an Nginx web server and using a FastCGI processor like PHP5-FPM. You will need to manually delete or hide those files.',
        'You are using an Nginx web server and using a FastCGI processor like PHP5-FPM. You will need to manually modify your php.ini to disable <em>display_error<\/em>': 'You are using an Nginx web server and using a FastCGI processor like PHP5-FPM. You will need to manually modify your php.ini to disable <em>display_error<\/em>',
        'You forgot to include a reason you\'re blocking this IP range. We ask you to include this for your own record keeping.': 'You forgot to include a reason you\'re blocking this IP range. We ask you to include this for your own record keeping.',
        'You have unsaved changes to your options. If you leave this page, those changes will be lost.': 'You have unsaved changes to your options. If you leave this page, those changes will be lost.',
        'You may close this alert and try again later, or click the button below to register for a new free Wordfence license.': 'You may close this alert and try again later, or click the button below to register for a new free Wordfence license.',
        'Your .htaccess has been updated successfully. Please verify your site is functioning normally.': 'Your .htaccess has been updated successfully. Please verify your site is functioning normally.',
        'Your Wordfence activity log was sent to %s': 'Your Wordfence activity log was sent to %s',
        'Your rules have been updated successfully.': 'Your rules have been updated successfully.',
        'Your rules have been updated successfully. You are currently using the free version of Wordfence. Upgrade to Wordfence premium to have your rules updated automatically as new threats emerge. <a href="https:\/\/www.wordfence.com\/wafUpdateRules1\/wordfence-signup\/">Click here to purchase a premium license<\/a>. <em>Note: Your rules will still update every 30 days as a free user.<\/em>': 'Your rules have been updated successfully. You are currently using the free version of Wordfence. Upgrade to Wordfence premium to have your rules updated automatically as new threats emerge. <a href="https:\/\/www.wordfence.com\/wafUpdateRules1\/wordfence-signup\/">Click here to purchase a premium license<\/a>. <em>Note: Your rules will still update every 30 days as a free user.<\/em>',
        'Your test email was sent to the requested email address. The result we received from the WordPress wp_mail() function was: %s<br \/><br \/>A \'True\' result means WordPress thinks the mail was sent without errors. A \'False\' result means that WordPress encountered an error sending your mail. Note that it\'s possible to get a \'True\' response with an error elsewhere in your mail system that may cause emails to not be delivered.': 'Your test email was sent to the requested email address. The result we received from the WordPress wp_mail() function was: %s<br \/><br \/>A \'True\' result means WordPress thinks the mail was sent without errors. A \'False\' result means that WordPress encountered an error sending your mail. Note that it\'s possible to get a \'True\' response with an error elsewhere in your mail system that may cause emails to not be delivered.',
        'blocked by firewall': 'blocked by firewall',
        'blocked by firewall for %s': 'blocked by firewall for %s',
        'blocked by real-time IP blocklist': 'blocked by real-time IP blocklist',
        'blocked by the Wordfence Security Network': 'blocked by the Wordfence Security Network',
        'blocked for %s': 'blocked for %s',
        'locked out from logging in': 'locked out from logging in'
      };
    </script>
    <!-- FLAG -->
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start':
            new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-PW98KFM');</script>
    <!-- End Google Tag Manager -->
    <style>

        header {
            position: relative;
        }

        .wc-phone-number a {
            display: none;
        }

        /*.header_right {*/
        /*    width: 216px;*/
        /*}*/

        .show .wc-phone-number a {
            display: flex;
        }

        .logo-svg svg {
            /*max-height: 70%;*/
            width: auto;
        }

        .page-id-316 .header_info {
            display: block;
        }

        .display_none {
            display: none !important;
        }

        .main_menu_container {
            position: relative;
        }

        /*.main_menu_container,*/
        /*.main_menu_container * {*/
        /*    display: block !important;*/
        /*}*/

        /* Make the hamburger menu container clickable */
        .hamburger {
            cursor: pointer; /* Make the entire container clickable */
            width: 40px; /* Adjust to your desired width */
            height: 30px; /* Adjust to your desired height */
            position: relative; /* Important for precise positioning of spans */
            /*border: 1px solid red;*/
        }

        /* Style the hamburger lines */
        .hamburger div {
            width: 30px; /* Ensure the span width matches the container's width */
            height: 4px; /* Adjust thickness of lines */
            background-color: #fff; /* Set the bars to white */
            transition: all 0.3s ease; /* Smooth transition for transform and positioning */
            position: absolute; /* Absolute position for precise control */
        }

        /* Position the spans vertically within the container */
        .hamburger div:nth-child(1) {
            top: 0; /* First span at the top */
        }

        .hamburger div:nth-child(2) {
            top: 50%; /* Middle span in the center */
            transform: translateY(-50%); /* Ensure it is vertically centered */
        }

        .hamburger div:nth-child(3) {
            bottom: 0; /* Third span at the bottom */
        }

        /* When the menu is active (crossed lines) */
        .hamburger.active div:nth-child(1) {
            transform: translateY(18px) rotate(45deg); /* Move the first line down and rotate */
        }

        .hamburger.active div:nth-child(2) {
            opacity: 0; /* Hide the middle line */
        }

        .hamburger.active div:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg); /* Move the third line up and rotate */
        }


        /* Optional: hide menu by default for mobile */
        /* Base styles for the menu */
        .theme-navigation {
            list-style: none;
            padding: 0 0 20px;
            margin: 0;
            position: absolute;
            z-index: 9;
            left: 0;
            width: 100%;
            background: #1a2c56;
            /*background: #fff;*/
            /*top: -9999em;*/
            font-weight: 700;
            /*visibility: hidden;*/
            /*height: 0;*/
            /*opacity: 0;*/
            /*min-height: 70px;*/
        }

        .theme-navigation a {
            text-decoration: none;
            display: block;
            padding: 10px 0;
            color: #c2ad77;
        }

        .theme-navigation.active {
            display: block;
        }

        .theme-navigation .menu-item {
            position: relative;
        }

        .theme-navigation .sub-menu {
            padding: 0;
            margin: 0;
            display: none;
            background: #007cba;
        }

        .theme-navigation .main-wrapper {
            padding: 0 1.2rem;
            margin: 0;
        }

        .theme-navigation li:first-child {
            border-top: 1px solid #e6b743;
        }

        .theme-navigation li {
            list-style: none;
            border-bottom: 1px solid #e6b743;
        }

        .theme-navigation .open-sub {
            width: 40px;
            height: 40px;
            position: absolute;
            top: 10px;
            right: 0;
            cursor: pointer;
        }

        .theme-navigation .sub-menu li:last-child {
            border-bottom: none;
        }

        /*.main-wrapper > li.menu-item-has-children:nth-of-type(1) > .sub-menu {*/
        /*    background-color: red; !* Dark gray *!*/
        /*}*/

        /*.main-wrapper > li.menu-item-has-children:nth-of-type(2) > .sub-menu {*/
        /*    background-color: green; !* Navy blue *!*/
        /*}*/

        /*.main-wrapper > li.menu-item-has-children:nth-of-type(3) > .sub-menu {*/
        /*    background-color: white; !* Slightly lighter blue *!*/
        /*}*/

        .gold-button {
            color: #1a2c56 !important;
            font-weight: 700;
            text-decoration: none;
            padding: .9rem 1rem;
            border-radius: 50px;
            display: block;
            text-align: center;
            background: #c2ad77;
        }

        /*.page-id-316 .show .gold-button {*/
        /*    background: #c2ad77;*/
        /*}*/

        .scrolled header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 99999999;
        }

        .home_secondary_copy_wrapper .wp-block-cover .wp-block-cover__inner-container {
            text-transform: uppercase;
        }

        .footer_disclaimer {
            padding-bottom: 20px;
        }

        .footer_disclaimer a {
            text-decoration: none !important;
        }

        footer .wc-phone-number a {
            background: unset;
            color: #fff !important;
            display: inline-block;
            font-weight: inherit;
            padding: 0;
        }

        @media (max-width: 1090px) {
            .home_secondary_copy h4 {
                color: #1a2c56 !important;
            }

            .hide_at_1090 {
                display: none !important;
            }

            .home_secondary_copy_wrapper {
                padding: 20px !important;
            }

            .secondary_copy_text {
                padding: 20px 0 !important;
            }
        }

        @media (max-width: 900px) {
            .footer_photos.is-layout-flex {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto auto;
            }

            .footer_photos figure:nth-child(1) {
                grid-column: 1; /* First figure in the first column */
                grid-row: 2; /* First row */
            }

            .footer_photos figure:nth-child(2) {
                grid-column: 1 / span 2; /* Second figure spans across both columns in the top row */
                grid-row: 1; /* First row */
            }

            .footer_photos figure:nth-child(3) {
                grid-column: 2; /* Third figure in the second column */
                grid-row: 2; /* Second row */
            }
        }

        @media (max-width: 650px) {

            .hero_section:before {
                display: block;
                content: '';
                border: 1px solid #c2ad77;
                position: absolute;
                height: calc(100% - 40px);
                width: calc(100% - 40px);
                z-index: 2;
                top: 20px;
            }

            .hero_section {
                align-items: flex-end !important;
            }

            .hero_section .wp-block-cover__background {
                background: rgba(26, 44, 86, 0.6) !important;
                opacity: 1 !important;
            }

            .hero_content {
                background: none !important;
                text-align: center;
            }

            /*.hero_content .hero_opaque_box {*/
            /*    font-size: 12px;*/
            /*}*/
        }

        @media (max-width: 470px) {

            .hero_section .wp-block-cover__inner-container {
                padding: 10px;
            }

            .hero_opaque_box {
                font-size: 18px !important;
            }

            header .wp-block-site-logo {
                margin: 0 auto;
            }

            header .custom-logo {
                height: 50px;
                width: auto;
            }

            header .header_wrapper {
                padding: 10px 5px !important;
            }

            .header_info_consult {
                font-size: 10px !important;
            }

            .site-logo img {
                height: 70px !important;
                width: auto !important;
            }

            .alternate_header_phone .header_info .wp-block-button__link {
                font-size: 1.5rem !important;
                padding: 8px;
            }

            .page-template-wp-custom-template-alternate-phone-header .hero_section h1 {
                font-size: 2.5rem !important;
            }

            .page-template-wp-custom-template-alternate-phone-header .hero_section h2,
            .page-template-wp-custom-template-alternate-phone-header .hero_section h3 {
                margin: 0 !important;
            }

            .footer_logo_wrapper figure {
                display: flex;
                justify-content: center;
            }

            footer .wp-block-columns .wp-block-column:nth-child(3) {
                text-align: center;
            }

            footer .wc-phone-number {
                font-size: 1.4rem !important;
                font-weight: 700;
                margin: 25px 0 0;
            }
        }

        @media (max-width: 360px) {
            .hero_opaque_box {
                font-size: 16px !important;
            }

            .header_info_phone {
                font-size: 20px !important;
            }
        }
    </style>
    <style>
        .gforms-menu-icon {
            float: left;
            width: 26px !important;
            height: 30px !important;
            background-repeat: no-repeat;
            background-position: 0 6px;
            background-size: 20px;
        }
    </style>
    <style class='wp-fonts-local'>
        @font-face {
            font-family: Manrope;
            font-style: normal;
            font-weight: 200 800;
            font-display: fallback;
            src: url('https://loboley.com/g/tx/wp-content/themes/twentytwentyfive/assets/fonts/manrope/Manrope-VariableFont_wght.woff2') format('woff2');
        }

        @font-face {
            font-family: "Fira Code";
            font-style: normal;
            font-weight: 300 700;
            font-display: fallback;
            src: url('https://loboley.com/g/tx/wp-content/themes/twentytwentyfive/assets/fonts/fira-code/FiraCode-VariableFont_wght.woff2') format('woff2');
        }

        @font-face {
            font-family: BioRhyme;
            font-style: normal;
            font-weight: 700;
            font-display: fallback;
            src: url('https://loboley.com/g/tx/wp-content/uploads/fonts/1cXeaULHBpDMsHYW_GZNh7loEHurwOIGadI205trrbeBgQs4OtUlmiOki-gkRDE.woff2') format('woff2');
        }

        @font-face {
            font-family: BioRhyme;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('https://loboley.com/g/tx/wp-content/uploads/fonts/1cXeaULHBpDMsHYW_GZNh7loEHurwOIGadI205trrbeBgQs4OjIimiOki-gkRDE.woff2') format('woff2');
        }
    </style>
    <link rel="icon" href="https://loboley.com/g/tx/wp-content/uploads/2024/12/cropped-lobo-logo-favicon-32x32.png"
          sizes="32x32"/>
    <link rel="icon" href="https://loboley.com/g/tx/wp-content/uploads/2024/12/cropped-lobo-logo-favicon-192x192.png"
          sizes="192x192"/>
    <link rel="apple-touch-icon"
          href="https://loboley.com/g/tx/wp-content/uploads/2024/12/cropped-lobo-logo-favicon-180x180.png"/>
    <meta name="msapplication-TileImage"
          content="https://loboley.com/g/tx/wp-content/uploads/2024/12/cropped-lobo-logo-favicon-270x270.png"/>
</head>
<?php
$con = mysqli_connect( "localhost", "uqh4tkf3zm2rz", "yheveq0dssf7", "dbnkqdxelcogkp" );
//if ( ! $con ) {
//	error_log( "Database connection failed: " . mysqli_connect_error() );
//	die( "Database connection failed." );
//}

$prefix         = 'wp_';
$interest       = isset( $_GET['c'] ) && ! empty( $_GET['c'] ) ? $_GET['c'] : null;
$physical       = isset( $_GET['c2'] ) && ! empty( $_GET['c2'] ) ? $_GET['c2'] : null;
$city_overwrite = isset( $_GET['craig'] ) && ! empty( $_GET['craig'] ) ? $_GET['craig'] : "";
$keyword        = isset( $_GET['keyword'] ) && ! empty( $_GET['keyword'] ) ? $_GET['keyword'] : null;
$state          = 'TX';
$keyword        = $_GET['keyword'] ?? null;
$city           = '';
$phone          = '888-294-0056';

$send_no_record_found_email = false;
$to                         = "craig@localjungle.com";
//$to = "chucka@localjungle.com";

// Email headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";
$headers .= "From: Lobo Ley Accidentes New <info@loboley.com>\r\n";

// Get IP address
$ip = $_SERVER['HTTP_CLIENT_IP']
      ?? $_SERVER['HTTP_X_FORWARDED_FOR']
         ?? $_SERVER['REMOTE_ADDR'];

$url         = $_SERVER['REQUEST_URI'];
$send_email  = str_contains( $url, '?' );
$criteria    = $interest ?? $physical;
$city_result = null;

// Simple sanitization
$criteria_safe = mysqli_real_escape_string( $con, $criteria );

// Try a lookup if criteria exists
if ( $criteria_safe ) {
	$sql   = "SELECT * FROM {$prefix}googlead WHERE criteria = '{$criteria_safe}' LIMIT 1";
	$query = mysqli_query( $con, $sql );

	if ( ! $query ) {
		error_log( "MySQL query failed: " . mysqli_error( $con ) );
		die( "There was a problem querying the database." );
	}

	$result = mysqli_fetch_array( $query, MYSQLI_ASSOC );

	if ( $result && ! empty( $result['name_live'] ) ) {
		$city_result = $result['name_live'];
		$city        = $city_overwrite ?: $city_result;
		$phone       = $result['phone_live'] ?: $phone;
	} else {
		$send_no_record_found_email = true;
	}
}
?>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const params = new URLSearchParams(window.location.search);

    // Helper: safely get a parameter from URL
    const getParam = (key) => params.get(key) || "";

    const interest = getParam("c");
    const physical = getParam("c2");
    const keyword  = getParam("keyword");
    const city     = getParam("craig");

    const defaultPhone = "<?php echo htmlspecialchars($phone, ENT_QUOTES); ?>";

    // Function to send email via PHP file
    const sendSwapInfo = (swappedNumber) => {
      const url = new URL("https://loboley.com/ppc/es/tx/carro/swap-track.php", window.location.origin);
      url.searchParams.set("c", interest);
      url.searchParams.set("c2", physical);
      url.searchParams.set("keyword", keyword);
      url.searchParams.set("city", city);
      url.searchParams.set("phone", defaultPhone);
      url.searchParams.set("swapped_number", swappedNumber);

      fetch(url.toString());
    };

    // Wait up to 2.5s for the phone number to populate
    setTimeout(() => {
      const phoneAnchor = document.querySelector(".gold-button");

      if (phoneAnchor) {
        const swappedNumber = phoneAnchor.textContent.trim();
        sendSwapInfo(swappedNumber);
      } else {
        // Still send if element not found (optional)
        sendSwapInfo("Not Found");
      }
    }, 2500);
  });
</script>
<?php

$clean_phone = preg_replace( '/\D/', '', $phone );

// Build message
$message = "URL: {$url}<br>" .
           "IP: {$ip}<br>" .
           "Keyword: {$keyword}<br>" .
           "Interest: {$interest}<br>" .
           "Physical: {$physical}<br>" .
           "Time: " . date( "Y-m-d H:i:s" ) . "<br>" .
           "DB City Name: " . ( $city_result ?? 'Not Found' ) . "<br>" .
           "Phone: " . $phone;

// Send main tracking email
if ( $send_email ) {
	mail( $to, 'Lobo PPC Carro New April 2025', $message, $headers );

	if ( $interest ) {
		mail( $to, 'PPC Carro New: C / Interest Parameter Set', $message, $headers );
	}
}

// Optional: notify if no DB match
if ( $send_no_record_found_email && $send_email ) {
	$subject = "PPC Carro New: Lobo LP Google Geocode Passed With No DB Match";
	$message .= "<br>City: " . ( $city_result ?? 'N/A' );
	mail( $to, $subject, $message, $headers );
}
?>

<body class="home wp-singular page-template page-template-wp-custom-template-alternate-phone-header page page-id-140 logged-in no-customize-support wp-custom-logo wp-embed-responsive wp-theme-twentytwentyfive wp-child-theme-twentytwentyfive-child">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PW98KFM"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wp-site-blocks">
    <header class="wp-block-template-part">
        <div class="wp-block-group alternate_header_phone has-accent-2-color has-text-color has-background has-link-color wp-elements-ba0fe6648f69577ef79f8d88e929d3b0 has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
             style="background-color:#1a2c56">
            <div class="wp-block-group alignwide header_wrapper is-content-justification-space-between is-nowrap is-layout-flex wp-container-core-group-is-layout-ed8b6e70 wp-block-group-is-layout-flex"
                 style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)">
                <figure class="wp-block-image size-full"><a href="https://loboley.com/g/tx/">
                        <picture decoding="async" class="wp-image-397">
                            <source type="image/webp"
                                    srcset="https://loboley.com/g/tx/wp-content/uploads/2025/04/lobo-logo-mobile-140x62-1.png.webp"/>
                            <img decoding="async" width="140" height="62"
                                 src="https://loboley.com/g/tx/wp-content/uploads/2025/04/lobo-logo-mobile-140x62-1.png"
                                 alt=""/>
                        </picture>
                    </a></figure>


                <div class="wp-block-group header_right is-content-justification-right is-nowrap is-layout-flex wp-container-core-group-is-layout-17124a9a wp-block-group-is-layout-flex">
                    <div class="wp-block-group header_info is-vertical is-content-justification-right is-layout-flex wp-container-core-group-is-layout-1ab1a5d2 wp-block-group-is-layout-flex">
                        <div class="wp-block-group wc-phone-number has-global-padding is-layout-constrained wp-block-group-is-layout-constrained">
                            <p><a class="gold-button" href="tel:<?php echo $clean_phone; ?>"><?php echo $phone; ?></a>
                            </p>
                        </div>
                    </div>


                    <div class="hamburger" id="hamburger">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="wp-block-group main_menu_container has-accent-1-background-color has-background has-global-padding is-layout-constrained wp-container-core-group-is-layout-72190d31 wp-block-group-is-layout-constrained"
             style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <nav class="theme-navigation" hidden>
                <ul class="main-wrapper">
                    <li class="menu-item"><a href="#abogado_gustavo">Abogado Gustavo</a></li>
                    <li class="menu-item"><a href="#tipos_de_casos">Tipos de Casos</a></li>
                    <li class="menu-item"><a href="#nuestro_processo">Nuestro Proceso</a></li>
                    <li class="menu-item"><a href="#preguntas">Preguntas</a></li>
                    <li class="menu-item"><a href="#contact">Contáctenos 24/7</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <main class="wp-block-group has-global-padding is-layout-constrained wp-container-core-group-is-layout-89031bc3 wp-block-group-is-layout-constrained"
          style="margin-top:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <div class="wp-block-group alignfull has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
             style="padding-top:0;padding-bottom:0">
            <div class="entry-content alignfull wp-block-post-content has-global-padding is-layout-constrained wp-block-post-content-is-layout-constrained">
                <div class="wp-block-cover alignfull is-light has-custom-content-position is-position-center-right hero_section"
                     style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30);min-height:600px;aspect-ratio:unset;">
                    <img fetchpriority="high" decoding="async" width="1920" height="1241"
                         class="wp-block-cover__image-background wp-image-37" alt=""
                         src="https://loboley.com/g/tx/wp-content/uploads/2024/12/gus_steve_banner1.webp"
                         style="object-position:10% 10%" data-object-fit="cover" data-object-position="10% 10%"
                         srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/gus_steve_banner1.webp 1920w, https://loboley.com/g/tx/wp-content/uploads/2024/12/gus_steve_banner1-300x194.webp 300w, https://loboley.com/g/tx/wp-content/uploads/2024/12/gus_steve_banner1-1024x662.webp 1024w, https://loboley.com/g/tx/wp-content/uploads/2024/12/gus_steve_banner1-768x496.webp 768w, https://loboley.com/g/tx/wp-content/uploads/2024/12/gus_steve_banner1-1536x993.webp 1536w"
                         sizes="(max-width: 1920px) 100vw, 1920px"/><span aria-hidden="true"
                                                                          class="wp-block-cover__background has-background-dim-0 has-background-dim"
                                                                          style="background-color:#b8a8ac"></span>
                    <div class="wp-block-cover__inner-container has-global-padding is-layout-constrained wp-container-core-cover-is-layout-097725cd wp-block-cover-is-layout-constrained">
                        <div class="wp-block-group alignfull hero_content has-background is-layout-flow wp-block-group-is-layout-flow"
                             style="background-color:#1a2c578a;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
                            <h1 class="wp-block-heading has-accent-3-color has-text-color has-link-color has-biorhyme-font-family wp-elements-6f8d332dd56693db6afb7bf64ae3b11e"
                                style="font-size:clamp(2.2rem, 2.2rem + ((1vw - 0.2rem) * 2.441), 4rem);letter-spacing:2px;line-height:1">
                                <strong>Abogados de Accidentes</strong></h1>

							<?php
							$keyword = isset( $_GET['keyword'] ) ? strtolower( $_GET['keyword'] ) : null;
							$type    = 'Carro';

							// Define match patterns to return values
							$map = [
								'camión' => 'Camión',
								'camion' => 'Camion',
								'carro'  => 'Carro',
								'auto'   => 'Auto',
								'choque' => 'Choque',
								'coche'  => 'Coche',
							];

							foreach ( $map as $pattern => $value ) {
								if ( str_contains( $keyword, $pattern ) ) {
									$type = $value;
									break;
								}
							}
							?>

                            <h2 class="wp-block-heading has-base-color has-text-color has-link-color wp-elements-ce78e2c4965f420114c4f52fa935836a"
                                style="margin-bottom:var(--wp--preset--spacing--20);font-size:clamp(1.502rem, 1.502rem + ((1vw - 0.2rem) * 1.353), 2.5rem);">
                                <strong>de <?php echo $type; ?>
                                    en <?php echo $city ? $city . ', TX' : 'Texas'; ?></strong></h2>


                            <p class="hero_opaque_box has-base-color has-text-color has-background has-link-color wp-elements-13b80215229f9199e56a7be55d08d6e6"
                               style="background-color:#c2ac769e;margin-bottom:var(--wp--preset--spacing--20);padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px;font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.441), 1.2rem);">
                                <strong>Hablamos Español, Pero Defendemos en Inglés<br>El Tiempo es Crítico, Llame Ahora</strong>
                            </p>


                            <h3 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20)"><strong>Consulta
                                    Gratis y Confidencial</strong><br><strong>Si No Gana, No Paga 24/7</strong></h3>


                            <div class="wp-block-group has-base-color has-text-color has-link-color wp-elements-04e9bb4deb756ac4199c0abc33a14965 is-content-justification-center is-layout-flex wp-container-core-group-is-layout-2c471116 wp-block-group-is-layout-flex"
                                 style="font-style:normal;font-weight:700">
                                <p>4.9</p>


                                <figure class="wp-block-image size-full is-resized">
                                    <picture decoding="async" class="wp-image-106" style="width:auto;height:25px">
                                        <source type="image/webp"
                                                srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/5-star-rating-review-star-transparent-free-png.png.webp"/>
                                        <img decoding="async" width="238" height="36"
                                             src="https://loboley.com/g/tx/wp-content/uploads/2024/12/5-star-rating-review-star-transparent-free-png.png"
                                             alt=""/>
                                    </picture>
                                </figure>


                                <p>446 comentarios de Google</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wp-block-columns hero_seo_row is-layout-flex wp-container-core-columns-is-layout-28232c24 wp-block-columns-is-layout-flex">
                    <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
                         style="flex-basis:33.34%">
                        <div class="wp-block-group has-base-color has-accent-3-background-color has-text-color has-background has-link-color wp-elements-a92d91980be48ad3dc7114067b7e8dda is-vertical is-content-justification-center is-layout-flex wp-container-core-group-is-layout-1eb5a0b4 wp-block-group-is-layout-flex"
                             style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40);font-style:normal;font-weight:700">
                            <p>MÁXIMA COMPENSACIÓN</p>
                        </div>
                    </div>


                    <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
                         style="flex-basis:33.34%">
                        <div class="wp-block-group has-base-color has-accent-1-background-color has-text-color has-background has-link-color wp-elements-0ce7d870a9ee4a16a62b2ea03ad3f66f is-vertical is-content-justification-center is-layout-flex wp-container-core-group-is-layout-c113826b wp-block-group-is-layout-flex"
                             style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40);font-style:normal;font-weight:700">
                            <p>26+ AÑOS DE EXPERIENCIA</p>
                        </div>
                    </div>


                    <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
                         style="flex-basis:33.33%">
                        <div class="wp-block-group has-base-color has-accent-3-background-color has-text-color has-background has-link-color wp-elements-a730705981fde5a63844f2702d120f48 is-vertical is-content-justification-center is-layout-flex wp-container-core-group-is-layout-c113826b wp-block-group-is-layout-flex"
                             style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40);font-style:normal;font-weight:700">
                            <p>GANAMOS A LO GRANDE</p>
                        </div>
                    </div>
                </div>


                <div class="wp-block-group alignfull is-style-default has-global-padding is-layout-constrained wp-container-core-group-is-layout-e20a85ec wp-block-group-is-layout-constrained"
                     style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
                    <div class="wp-block-group alignwide is-content-justification-center is-layout-flex wp-container-core-group-is-layout-cca5d157 wp-block-group-is-layout-flex">
                        <figure class="wp-block-image size-full"><img decoding="async" width="128" height="128"
                                                                      src="https://loboley.com/g/tx/wp-content/uploads/2024/12/advocates-forum.png"
                                                                      alt="" class="wp-image-22"/></figure>


                        <figure class="wp-block-image size-full is-resized">
                            <picture loading="lazy" decoding="async" class="wp-image-24"
                                     style="width:auto;height:128px">
                                <source type="image/webp"
                                        srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/lead_counsel_attorneys.png.webp 181w, https://loboley.com/g/tx/wp-content/uploads/2024/12/lead_counsel_attorneys-150x150.png.webp 150w"
                                        sizes="auto, (max-width: 181px) 100vw, 181px"/>
                                <img loading="lazy" decoding="async" width="181" height="180"
                                     src="https://loboley.com/g/tx/wp-content/uploads/2024/12/lead_counsel_attorneys.png"
                                     alt=""
                                     srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/lead_counsel_attorneys.png 181w, https://loboley.com/g/tx/wp-content/uploads/2024/12/lead_counsel_attorneys-150x150.png 150w"
                                     sizes="auto, (max-width: 181px) 100vw, 181px"/>
                            </picture>
                        </figure>


                        <figure class="wp-block-image size-full is-resized">
                            <picture loading="lazy" decoding="async" class="wp-image-25"
                                     style="width:auto;height:128px">
                                <source type="image/webp"
                                        srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/super_lawyers.png.webp"/>
                                <img loading="lazy" decoding="async" width="180" height="153"
                                     src="https://loboley.com/g/tx/wp-content/uploads/2024/12/super_lawyers.png"
                                     alt=""/>
                            </picture>
                        </figure>


                        <figure class="wp-block-image size-full is-resized">
                            <picture loading="lazy" decoding="async" class="wp-image-26"
                                     style="width:auto;height:128px">
                                <source type="image/webp"
                                        srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/texas_trial_lawyers.png.webp 179w, https://loboley.com/g/tx/wp-content/uploads/2024/12/texas_trial_lawyers-150x150.png.webp 150w"
                                        sizes="auto, (max-width: 179px) 100vw, 179px"/>
                                <img loading="lazy" decoding="async" width="179" height="180"
                                     src="https://loboley.com/g/tx/wp-content/uploads/2024/12/texas_trial_lawyers.png"
                                     alt=""
                                     srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/texas_trial_lawyers.png 179w, https://loboley.com/g/tx/wp-content/uploads/2024/12/texas_trial_lawyers-150x150.png 150w"
                                     sizes="auto, (max-width: 179px) 100vw, 179px"/>
                            </picture>
                        </figure>


                        <figure class="wp-block-image size-full is-resized">
                            <picture loading="lazy" decoding="async" class="wp-image-23"
                                     style="width:auto;height:128px">
                                <source type="image/webp"
                                        srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/excellent.png.webp"/>
                                <img loading="lazy" decoding="async" width="128" height="128"
                                     src="https://loboley.com/g/tx/wp-content/uploads/2024/12/excellent.png" alt=""/>
                            </picture>
                        </figure>
                    </div>
                </div>


                <div class="wp-block-group alignfull has-global-padding is-layout-constrained wp-container-core-group-is-layout-e4ad4815 wp-block-group-is-layout-constrained"
                     style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">
                    <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size">Compensaciones 3.5 Veces
                        Mas Grandes Cuando Usted Tiene Un Abogado</h2>


                    <p class="has-text-align-left">Según estudios del &#8220;Insurance Research Council&#8221;(IRC), las
                        víctimas de accidentes de carros con lesiones personales que contratan un abogado, reciben en
                        promedio 3.5 veces más de compensación.</p>
                </div>


                <div class="wp-block-cover alignfull" style="min-height:436px;aspect-ratio:unset;"><img loading="lazy"
                                                                                                        decoding="async"
                                                                                                        width="1500"
                                                                                                        height="996"
                                                                                                        class="wp-block-cover__image-background wp-image-59"
                                                                                                        alt=""
                                                                                                        src="https://loboley.com/g/tx/wp-content/uploads/2024/12/groups.webp"
                                                                                                        style="object-position:50% 30%"
                                                                                                        data-object-fit="cover"
                                                                                                        data-object-position="50% 30%"
                                                                                                        srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/groups.webp 1500w, https://loboley.com/g/tx/wp-content/uploads/2024/12/groups-300x199.webp 300w, https://loboley.com/g/tx/wp-content/uploads/2024/12/groups-1024x680.webp 1024w, https://loboley.com/g/tx/wp-content/uploads/2024/12/groups-768x510.webp 768w"
                                                                                                        sizes="auto, (max-width: 1500px) 100vw, 1500px"/><span
                            aria-hidden="true"
                            class="wp-block-cover__background has-background-dim-0 has-background-dim"
                            style="background-color:#74675d"></span>
                    <div class="wp-block-cover__inner-container is-layout-flow wp-block-cover-is-layout-flow">
                        <p class="has-text-align-center has-large-font-size"></p>
                    </div>
                </div>


                <div class="wp-block-group alignfull home_main_copy has-global-padding is-layout-constrained wp-container-core-group-is-layout-7bf9fb5f wp-block-group-is-layout-constrained"
                     style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
                    <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-4109350d wp-block-columns-is-layout-flex"
                         style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                        <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                            <h2 class="wp-block-heading has-accent-1-color has-text-color has-link-color wp-elements-d8cd257fec1cc25c49bc78bb1f9a9e1b"
                                style="margin-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:700">
                                ¡Hemos recuperado millones anualmente!</h2>


                            <p><strong>Expertos</strong>: Durante los últimos 26 años, hemos ayudado a miles de clientes
                                a obtener la compensación que se merecen después de accidentes de auto.</p>


                            <p><strong>Habilidad</strong>: Además de contar con abogados altamente experimentados,
                                expertos, tenemos un equipo dedicado de investigadores, paralegales y de soporte que
                                están enfocados en su caso y sus necesidades.</p>


                            <p><strong>Dedicados</strong>: Estamos disponibles las 24 horas del día, siete días a la
                                semana, y nuestro equipo bien capacitado habla español. Nos reuniremos con usted en su
                                casa, en el hospital y en otros lugares donde sea más conveniente para que nosotros
                                estemos con usted.</p>
                        </div>


                        <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
                             style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                            <div class="wp-block-group home_content_image_copy is-vertical is-layout-flex wp-container-core-group-is-layout-fe9cc265 wp-block-group-is-layout-flex">
                                <figure class="wp-block-image size-full">
                                    <picture loading="lazy" decoding="async" class="wp-image-60">
                                        <source type="image/webp"
                                                srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/lobo-home-copy.jpg.webp 1000w, https://loboley.com/g/tx/wp-content/uploads/2024/12/lobo-home-copy-300x240.jpg.webp 300w, https://loboley.com/g/tx/wp-content/uploads/2024/12/lobo-home-copy-768x614.jpg.webp 768w"
                                                sizes="auto, (max-width: 1000px) 100vw, 1000px"/>
                                        <img loading="lazy" decoding="async" width="1000" height="800"
                                             src="https://loboley.com/g/tx/wp-content/uploads/2024/12/lobo-home-copy.jpg"
                                             alt=""
                                             srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/lobo-home-copy.jpg 1000w, https://loboley.com/g/tx/wp-content/uploads/2024/12/lobo-home-copy-300x240.jpg 300w, https://loboley.com/g/tx/wp-content/uploads/2024/12/lobo-home-copy-768x614.jpg 768w"
                                             sizes="auto, (max-width: 1000px) 100vw, 1000px"/>
                                    </picture>
                                </figure>


                                <div class="wp-block-group floating_image_copy has-base-color has-text-color has-background has-link-color wp-elements-6e69d06a2fd7bbc0482c7f3598530f7a has-global-padding is-layout-constrained wp-container-core-group-is-layout-c385debf wp-block-group-is-layout-constrained"
                                     style="background-color:#1a2c57cf;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                                    <p>Cuando le representemos, desarrollaremos una relación personal y de confianza con
                                        usted. Pelearemos por usted sin descanso.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wp-block-group alignfull home_secondary_copy_wrapper has-global-padding is-layout-constrained wp-container-core-group-is-layout-11c1ca01 wp-block-group-is-layout-constrained"
                     id="tipos_de_casos"
                     style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                    <div class="wp-block-group is-vertical is-content-justification-center is-layout-flex wp-container-core-group-is-layout-ce155fab wp-block-group-is-layout-flex">
                        <h2 class="wp-block-heading alignfull has-text-align-center"
                            style="margin-bottom:var(--wp--preset--spacing--30);padding-right:0;padding-left:0">
                            <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-1-color">
                                <strong>Tipos de Caso</strong></mark>&nbsp;
                        </h2>
                    </div>


                    <div class="wp-block-group is-content-justification-center is-layout-flex wp-container-core-group-is-layout-d774db39 wp-block-group-is-layout-flex"
                         style="margin-bottom:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                        <p>• Automóvil</p>


                        <p>• Camiones</p>


                        <p>•Uber/Lyft</p>


                        <p>•Motocicleta</p>


                        <p>• Muerte Por Negligencia</p>


                        <p class="has-text-align-center">• Peatón</p>
                    </div>
                </div>


                <div class="wp-block-group alignfull home_secondary_copy_wrapper has-global-padding is-layout-constrained wp-container-core-group-is-layout-11c1ca01 wp-block-group-is-layout-constrained"
                     id="abogado_gustavo"
                     style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                    <div class="wp-block-columns are-vertically-aligned-center is-layout-flex wp-container-core-columns-is-layout-9c9a1810 wp-block-columns-is-layout-flex"
                         style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                        <div class="wp-block-column is-vertically-aligned-center has-border-color has-accent-3-border-color is-layout-flow wp-block-column-is-layout-flow"
                             style="border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                            <figure class="wp-block-image size-full"
                                    style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">
                                <picture loading="lazy" decoding="async" class="wp-image-151">
                                    <source type="image/webp"
                                            srcset="https://loboley.com/g/tx/wp-content/uploads/2025/01/11002-Crim-and-Villalpando-Law-Firm-Headshots-2021.jpg.webp 800w, https://loboley.com/g/tx/wp-content/uploads/2025/01/11002-Crim-and-Villalpando-Law-Firm-Headshots-2021-250x300.jpg.webp 250w, https://loboley.com/g/tx/wp-content/uploads/2025/01/11002-Crim-and-Villalpando-Law-Firm-Headshots-2021-768x923.jpg.webp 768w"
                                            sizes="auto, (max-width: 800px) 100vw, 800px"/>
                                    <img loading="lazy" decoding="async" width="800" height="961"
                                         src="https://loboley.com/g/tx/wp-content/uploads/2025/01/11002-Crim-and-Villalpando-Law-Firm-Headshots-2021.jpg"
                                         alt=""
                                         srcset="https://loboley.com/g/tx/wp-content/uploads/2025/01/11002-Crim-and-Villalpando-Law-Firm-Headshots-2021.jpg 800w, https://loboley.com/g/tx/wp-content/uploads/2025/01/11002-Crim-and-Villalpando-Law-Firm-Headshots-2021-250x300.jpg 250w, https://loboley.com/g/tx/wp-content/uploads/2025/01/11002-Crim-and-Villalpando-Law-Firm-Headshots-2021-768x923.jpg 768w"
                                         sizes="auto, (max-width: 800px) 100vw, 800px"/>
                                </picture>
                            </figure>
                        </div>


                        <div class="wp-block-column is-vertically-aligned-center is-layout-flow wp-block-column-is-layout-flow">
                            <h2 class="wp-block-heading has-biorhyme-font-family"
                                style="margin-bottom:var(--wp--preset--spacing--30)"><strong>Abogado Gustavo
                                    Villalpando</strong></h2>


                            <div class="wp-block-group is-nowrap is-layout-flex wp-container-core-group-is-layout-a1c9ff4d wp-block-group-is-layout-flex"
                                 style="margin-bottom:var(--wp--preset--spacing--20)">
                                <div class="wp-block-outermost-icon-block">
                                    <div class="icon-container"
                                         style="width:48px;transform:rotate(0deg) scaleX(1) scaleY(1)">
                                        <svg width="64px" height="64px" viewBox="0 0 48 48"
                                             xmlns="http://www.w3.org/2000/svg" fill="#1a2c56">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                               stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier"><title></title>
                                                <g id="Layer_2" data-name="Layer 2">
                                                    <g id="invisible_box" data-name="invisible box">
                                                        <rect width="48" height="48" fill="none"></rect>
                                                    </g>
                                                    <g id="Q3_icons" data-name="Q3 icons">
                                                        <g>
                                                            <rect x="5" y="36" width="38" height="4"></rect>
                                                            <path d="M44,42H4a2,2,0,0,0-2,2v2H46V44A2,2,0,0,0,44,42Z"></path>
                                                            <rect x="10" y="18" width="4" height="16"></rect>
                                                            <rect x="22" y="18" width="4" height="16"></rect>
                                                            <rect x="34" y="18" width="4" height="16"></rect>
                                                            <path d="M44.9,11.4,24,2,3.1,11.4A2.1,2.1,0,0,0,2,13.2V14a2,2,0,0,0,2,2H44a2,2,0,0,0,2-2v-.8A2.1,2.1,0,0,0,44.9,11.4Z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>


                                <p>Socio en Lobo Ley</p>
                            </div>


                            <div class="wp-block-group is-nowrap is-layout-flex wp-container-core-group-is-layout-a1c9ff4d wp-block-group-is-layout-flex"
                                 style="margin-bottom:var(--wp--preset--spacing--20)">
                                <div class="wp-block-outermost-icon-block">
                                    <div class="icon-container"
                                         style="width:48px;transform:rotate(0deg) scaleX(1) scaleY(1)">
                                        <svg height="64px" width="64px" version="1.1" id="_x32_"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns-xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                             xml:space="preserve" fill="#1a2c56"><g id="SVGRepo_bgCarrier"
                                                                                    stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                               stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <style type="text/css"> .st0 {
                                                        fill: #1a2c56;
                                                    } </style>
                                                <g>
                                                    <path class="st0"
                                                          d="M506.752,291.992h-28.989c-0.73,0-1.457,0.157-2.126,0.448l-25.459,11.32 c-1.895,0.841-3.114,2.722-3.114,4.788v17.583c0,0.791-0.178,1.574-0.524,2.286l-11.805,24.394h-12.946 c-0.68,0-1.353,0.135-1.98,0.392l-32.463,13.28c-1.706,0.698-3.65,0.449-5.126-0.662l-9.479-7.103 c-0.844-0.635-1.863-0.998-2.918-1.048l-14.583-0.627c-1.693-0.079-3.249-0.97-4.168-2.387l-35.184-54.302 c-0.74-1.148-1.004-2.536-0.74-3.876l13.522-67.596c0.495-2.486-0.855-4.966-3.213-5.899l-33.517-13.273 c-1.204-0.47-2.187-1.374-2.76-2.528l-27.407-54.815c-0.802-1.603-2.369-2.686-4.15-2.864l-17.608-1.824 c-2.048-0.214-4.032,0.798-5.069,2.572l-7.074,12.118c-0.713,1.232-1.895,2.116-3.277,2.45c-1.379,0.342-2.839,0.107-4.039-0.655 l-15.695-9.882c-1.218-0.762-2.07-1.994-2.352-3.405l-3.33-16.657c-0.218-1.09-0.784-2.087-1.61-2.843l-25.171-22.954 c-0.965-0.877-2.226-1.368-3.534-1.368h-22.317c-2.893,0-5.24,2.344-5.24,5.243v2.978h-34.87c-0.851,0-1.692-0.206-2.444-0.606 L43.826,83.006C43.07,82.607,42.23,82.4,41.378,82.4H5.244c-1.646,0-3.199,0.769-4.185,2.087c-0.991,1.311-1.311,3.014-0.855,4.596 l14.167,49.592c0.235,0.826,0.673,1.582,1.272,2.202l18.719,19.392c1.909,1.974,1.966,5.087,0.135,7.131l-7.042,7.872 c-0.958,1.069-1.436,2.487-1.318,3.919c0.118,1.438,0.819,2.757,1.941,3.662l28.081,22.599c0.851,0.691,1.47,1.631,1.763,2.678 l7.477,26.924c0.193,0.691,0.524,1.332,0.972,1.888l30.069,37.232c0.95,1.183,2.365,1.888,3.879,1.945 c1.51,0.057,2.974-0.542,4.015-1.639l6.946-7.36c1.696-1.795,1.909-4.531,0.516-6.561l-18.887-27.607 c-0.064-0.092-0.125-0.185-0.182-0.285L75.074,202.98c-0.228-0.384-0.406-0.798-0.531-1.226l-8.595-29.708 c-0.172-0.577-0.442-1.126-0.798-1.624l-25.152-34.575c-0.399-0.555-0.692-1.183-0.855-1.845l-7.15-29.409l26.624,12.168 c1.361,0.628,2.394,1.803,2.832,3.235l11.299,36.912c0.225,0.734,0.606,1.403,1.118,1.974l41.607,46.23 c1.24,1.382,1.66,3.306,1.107,5.072l-2.322,7.438c-0.556,1.774-0.128,3.705,1.118,5.087l68.953,76.003 c0.877,0.969,1.361,2.223,1.361,3.527v19.342l-4.909,1.511c-1.454,0.449-2.64,1.503-3.252,2.892 c-0.613,1.39-0.595,2.978,0.05,4.353l9.775,20.768c0.517,1.104,1.408,1.994,2.518,2.515l152.764,71.608 c1.999,0.94,4.371,0.526,5.935-1.04l17.234-17.226c0.98-0.984,2.316-1.54,3.705-1.54h12.582c1.094,0,2.166,0.342,3.057,0.984 l30.969,22.214c1.315,0.948,2.993,1.226,4.538,0.77c1.553-0.449,2.804-1.604,3.398-3.106l6.957-17.668 c0.766-1.938,2.604-3.242,4.688-3.32l13.714-0.506c2.818-0.106,5.051-2.422,5.051-5.236v-4.538c0-1.718-0.845-3.328-2.262-4.311 l-6.166-4.267c-1.415-0.976-2.259-2.586-2.259-4.31v-12.048h28.326c1.81,0,3.488-0.933,4.446-2.465l34.653-55.442 c0.52-0.827,0.798-1.796,0.798-2.779v-12.154C512,294.336,509.649,291.992,506.752,291.992z"></path>
                                                </g>
                                            </g></svg>
                                    </div>
                                </div>


                                <p>Nació en Ciudad Juárez, Chihuahua México Recibió su ciudadanía en 1986</p>
                            </div>


                            <div class="wp-block-group is-nowrap is-layout-flex wp-container-core-group-is-layout-a1c9ff4d wp-block-group-is-layout-flex"
                                 style="margin-bottom:var(--wp--preset--spacing--20)">
                                <div class="wp-block-outermost-icon-block">
                                    <div class="icon-container"
                                         style="width:48px;transform:rotate(0deg) scaleX(1) scaleY(1)">
                                        <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                               stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M12 17V12L9.5 10.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                                      stroke="#1a2c56" stroke-width="2" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>


                                <p>Cuarenta años de experiencia en lesiones personales</p>
                            </div>


                            <div class="wp-block-group is-nowrap is-layout-flex wp-container-core-group-is-layout-a1c9ff4d wp-block-group-is-layout-flex"
                                 style="margin-bottom:var(--wp--preset--spacing--20)">
                                <div class="wp-block-outermost-icon-block">
                                    <div class="icon-container"
                                         style="width:48px;transform:rotate(0deg) scaleX(1) scaleY(1)">
                                        <svg width="64px" height="64px" viewBox="0 0 512 512"
                                             xmlns="http://www.w3.org/2000/svg" fill="#1a2c56">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                               stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill="#1a2c56"
                                                      d="M156.3 41.88V222.6l-130.57 3c35.98 40.7 60.88 78.7 123.07 126 36.4-48.2 78.8-54.7 144.7 100.5l66.8 18c.7-49.4-15.2-97.8 126-155.3l-11.3-93-3-60.7-211.9-39.8V41.88z"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>


                                <p>Licencia para ejercer la abogacía por la Corte Suprema de Texas</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wp-block-group has-global-padding is-layout-constrained wp-container-core-group-is-layout-ea040023 wp-block-group-is-layout-constrained"
                     style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                    <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20)">¿Qué opinan
                        nuestros clientes?</h2>


                    <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-28f84493 wp-block-columns-is-layout-flex">
                        <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                            <div class="wp-block-group has-border-color has-accent-3-border-color has-base-color has-accent-1-background-color has-text-color has-background has-link-color wp-elements-57e5d641226bc99800b05091854d301f is-vertical is-layout-flex wp-container-core-group-is-layout-9ae43232 wp-block-group-is-layout-flex"
                                 style="border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                                <figure class="wp-block-image size-large is-resized"
                                        style="margin-bottom:var(--wp--preset--spacing--20)">
                                    <picture loading="lazy" decoding="async" class="wp-image-153" style="width:165px">
                                        <source type="image/webp"
                                                srcset="https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-1024x191.png.webp 1024w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-300x56.png.webp 300w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-768x143.png.webp 768w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-1536x286.png.webp 1536w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars.png.webp 2048w"
                                                sizes="auto, (max-width: 1024px) 100vw, 1024px"/>
                                        <img loading="lazy" decoding="async" width="1024" height="191"
                                             src="https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-1024x191.png"
                                             alt=""
                                             srcset="https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-1024x191.png 1024w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-300x56.png 300w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-768x143.png 768w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-1536x286.png 1536w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars.png 2048w"
                                             sizes="auto, (max-width: 1024px) 100vw, 1024px"/>
                                    </picture>
                                </figure>


                                <p class="has-medium-font-size">Gracias por toda la ayuda que me brindaron con el
                                    accidente de auto, volvería a buscarlos en el futuro por cualquier accidente de
                                    autos que tenga. Hacen un gran trabajo muchas gracias nuevamente ABOGADO
                                    VILLALPANDO.</p>


                                <p>&#8211; Rosita</p>
                            </div>
                        </div>


                        <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                            <div class="wp-block-group has-border-color has-accent-3-border-color has-base-color has-accent-1-background-color has-text-color has-background has-link-color wp-elements-bfb44c4559143a63ded2b28383f2024e is-vertical is-layout-flex wp-container-core-group-is-layout-9ae43232 wp-block-group-is-layout-flex"
                                 style="border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                                <figure class="wp-block-image size-large is-resized"
                                        style="margin-bottom:var(--wp--preset--spacing--20)">
                                    <picture loading="lazy" decoding="async" class="wp-image-153" style="width:165px">
                                        <source type="image/webp"
                                                srcset="https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-1024x191.png.webp 1024w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-300x56.png.webp 300w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-768x143.png.webp 768w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-1536x286.png.webp 1536w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars.png.webp 2048w"
                                                sizes="auto, (max-width: 1024px) 100vw, 1024px"/>
                                        <img loading="lazy" decoding="async" width="1024" height="191"
                                             src="https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-1024x191.png"
                                             alt=""
                                             srcset="https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-1024x191.png 1024w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-300x56.png 300w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-768x143.png 768w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-1536x286.png 1536w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars.png 2048w"
                                             sizes="auto, (max-width: 1024px) 100vw, 1024px"/>
                                    </picture>
                                </figure>


                                <p class="has-medium-font-size">Muy amables con su servicio ayudaron en mi caso de
                                    accidente de carro. Siempre estuvieron en contacto con todos los detalles al igual
                                    que respondiendo mis preguntas y dándome actualizaciones cada vez que las
                                    nesecitaba. Muchísimas gracias por sus servicios y 100% recomendados!</p>


                                <p>&#8211; Armida</p>
                            </div>
                        </div>


                        <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                            <div class="wp-block-group has-border-color has-accent-3-border-color has-base-color has-accent-1-background-color has-text-color has-background has-link-color wp-elements-51a319938c0b5f0691a4d830c5600ec3 is-vertical is-layout-flex wp-container-core-group-is-layout-9ae43232 wp-block-group-is-layout-flex"
                                 style="border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                                <figure class="wp-block-image size-large is-resized"
                                        style="margin-bottom:var(--wp--preset--spacing--20)">
                                    <picture loading="lazy" decoding="async" class="wp-image-153" style="width:165px">
                                        <source type="image/webp"
                                                srcset="https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-1024x191.png.webp 1024w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-300x56.png.webp 300w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-768x143.png.webp 768w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-1536x286.png.webp 1536w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars.png.webp 2048w"
                                                sizes="auto, (max-width: 1024px) 100vw, 1024px"/>
                                        <img loading="lazy" decoding="async" width="1024" height="191"
                                             src="https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-1024x191.png"
                                             alt=""
                                             srcset="https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-1024x191.png 1024w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-300x56.png 300w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-768x143.png 768w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars-1536x286.png 1536w, https://loboley.com/g/tx/wp-content/uploads/2025/01/lobo-ley-gold-five-stars.png 2048w"
                                             sizes="auto, (max-width: 1024px) 100vw, 1024px"/>
                                    </picture>
                                </figure>


                                <p class="has-medium-font-size">Resulte con muchas lesiones en mi cuerpo por un
                                    accidente de carro y contrate a estos abogados para que pelearan por mi, tuve una
                                    buena compensacion por mi danos y lesiones y ellos siempre estuvieron en
                                    comunicacion conmigo, Gracias Abogado Gustavo!</p>


                                <p>&#8211; Zaimar</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="nuestro_processo"
                     class="wp-block-group has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
                     style="margin-bottom:var(--wp--preset--spacing--30)">
                    <div class="wp-block-cover has-base-color has-text-color has-link-color wp-elements-305f4e28fbc36398e0c5cc5afa92f89c">
                        <picture loading="lazy" decoding="async">
                            <source type="image/webp"
                                    srcset="https://loboley.com/g/tx/wp-content/uploads/2025/01/240_F_422175260_eDxI4LhpWxClPXohH7EAZGbllTMY0u6U.jpg.webp 400w, https://loboley.com/g/tx/wp-content/uploads/2025/01/240_F_422175260_eDxI4LhpWxClPXohH7EAZGbllTMY0u6U-300x180.jpg.webp 300w"
                                    sizes="auto, (max-width: 400px) 100vw, 400px"/>
                            <img loading="lazy" decoding="async" width="400" height="240"
                                 class="wp-block-cover__image-background wp-image-175" alt=""
                                 src="https://loboley.com/g/tx/wp-content/uploads/2025/01/240_F_422175260_eDxI4LhpWxClPXohH7EAZGbllTMY0u6U.jpg"
                                 data-object-fit="cover"
                                 srcset="https://loboley.com/g/tx/wp-content/uploads/2025/01/240_F_422175260_eDxI4LhpWxClPXohH7EAZGbllTMY0u6U.jpg 400w, https://loboley.com/g/tx/wp-content/uploads/2025/01/240_F_422175260_eDxI4LhpWxClPXohH7EAZGbllTMY0u6U-300x180.jpg 300w"
                                 sizes="auto, (max-width: 400px) 100vw, 400px"/>
                        </picture>
                        <span aria-hidden="true"
                              class="wp-block-cover__background has-contrast-background-color has-background-dim-80 has-background-dim"></span>
                        <div class="wp-block-cover__inner-container has-global-padding is-layout-constrained wp-block-cover-is-layout-constrained">
                            <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"
                                style="margin-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:700">
                                Nuestro Proceso</h2>


                            <ol class="wp-block-list">
                                <li style="font-style:normal;font-weight:700">Consulta e Investigación</li>


                                <li style="font-style:normal;font-weight:700">Tratamientos Médico y Daños del Vehículo
                                </li>


                                <li style="font-style:normal;font-weight:700">Documentos Importantes</li>


                                <li style="font-style:normal;font-weight:700">Negociaciones</li>


                                <li style="font-style:normal;font-weight:700">Demanda (Si es necesario)</li>


                                <li style="font-style:normal;font-weight:700">Fuerte Compensación</li>
                            </ol>
                        </div>
                    </div>
                </div>


                <div id="preguntas"
                     class="wp-block-group has-global-padding is-layout-constrained wp-container-core-group-is-layout-4bf83969 wp-block-group-is-layout-constrained"
                     style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)">
                    <h2 class="wp-block-heading has-text-align-center"><strong>Preguntas Frecuentes</strong></h2>


                    <details
                            class="wp-block-details has-border-color has-accent-3-border-color is-layout-flow wp-container-core-details-is-layout-6384a6bc wp-block-details-is-layout-flow"
                            style="border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"
                            open>
                        <summary>¿Necesito ser ciudadano de los Estados Unidos para recibir ayuda?</summary>
                        <p>No. Estamos aquí para ayudarle sin importar su estatus migratorio.</p>
                    </details>


                    <details
                            class="wp-block-details has-border-color has-accent-3-border-color is-layout-flow wp-container-core-details-is-layout-6384a6bc wp-block-details-is-layout-flow"
                            style="border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                        <summary>¿Puedo obtener ayuda, aunque no tenga seguro?</summary>
                        <p>Sí, podemos ayudarte incluso si no tienes seguro. Nos encargamos de buscar la mejor solución
                            para tu caso.</p>
                    </details>


                    <details
                            class="wp-block-details has-border-color has-accent-3-border-color is-layout-flow wp-container-core-details-is-layout-057de46b wp-block-details-is-layout-flow"
                            style="border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                        <summary>¿Necesito una licencia de conducir válida?</summary>
                        <p>No, no necesita una licencia válida para recibir la compensación que merece.</p>
                    </details>


                    <details
                            class="wp-block-details has-border-color has-accent-3-border-color is-layout-flow wp-container-core-details-is-layout-6384a6bc wp-block-details-is-layout-flow"
                            style="border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                        <summary>¿Cuánto cuesta contratar un abogado de accidentes?</summary>
                        <p>¡Nada por adelantado! Trabajamos bajo un esquema de “No ganamos, no paga,” lo que significa
                            que solo cobramos si ganamos su caso.</p>
                    </details>


                    <details
                            class="wp-block-details has-border-color has-accent-3-border-color is-layout-flow wp-container-core-details-is-layout-6384a6bc wp-block-details-is-layout-flow"
                            style="border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                        <summary>¿Qué hago después de un accidente de auto?</summary>
                        <p>Llame a emergencias si es necesario.<br>Reúna evidencia (fotos, datos del otro conductor,
                            etc.).<br>Busque atención médica.<br>Contáctenos para una consulta gratuita.</p>
                    </details>


                    <details class="wp-block-details is-layout-flow wp-block-details-is-layout-flow">
                        <summary>¿Cuánto tiempo tarda resolver un caso?</summary>
                        <p>El tiempo varía según la complejidad del caso. Algunos se resuelven en meses, mientras que
                            otros pueden tardar más si requieren litigación. Nos esforzamos por resolver su caso lo
                            antes posible.</p>
                    </details>


                    <details class="wp-block-details is-layout-flow wp-block-details-is-layout-flow">
                        <summary>¿Qué tipo de compensación puedo recibir?</summary>
                        <p>Puede recibir compensación por:<br>Gastos médicos.<br>Pérdidas salariales.<br>Dolor y
                            sufrimiento.<br>Daños a su vehículo.</p>
                    </details>


                    <details class="wp-block-details is-layout-flow wp-block-details-is-layout-flow">
                        <summary>¿Qué pasa si la compañía de seguros me ofrece un acuerdo rápido?</summary>
                        <p>Recomendamos no aceptar ninguna oferta sin hablar con un abogado primero. Las aseguradoras
                            suelen ofrecer menos de lo que realmente merece.</p>
                    </details>


                    <details class="wp-block-details is-layout-flow wp-block-details-is-layout-flow">
                        <summary>¿Cómo se comunican conmigo durante el caso?</summary>
                        <p>Nuestro equipo te mantendrá informado en todo momento a través de llamadas, correos
                            electrónicos o mensajes de texto, según tu preferencia.</p>
                    </details>


                    <details class="wp-block-details is-layout-flow wp-block-details-is-layout-flow">
                        <summary>¿Necesito un abogado?</summary>
                        <p>No, pero según estudios del &#8220;Insurance Research Council&#8221;(IRC), las víctimas de
                            accidentes de carros con lesiones personales que contratan un abogado, reciben en promedio
                            3.5 veces más compensación.</p>
                    </details>
                </div>


                <div id="contact"
                     class="wp-block-group has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
                     style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
                    <div class="wp-block-group is-layout-flow wp-block-group-is-layout-flow"
                         style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
                        <h2 class="wp-block-heading has-text-align-center">¡PONTE EN CONTACTO HOY!</h2>


                        <p class="has-text-align-center">Disponible 24/7</p>


                        <div class='gf_browser_gecko gform_wrapper gform-theme gform-theme--foundation gform-theme--framework gform-theme--orbital'
                             data-form-theme='orbital' data-form-index='0' id='gform_wrapper_1'>
                            <style>#gform_wrapper_1[data-form-index="0"].gform-theme, [data-parent-form="1_0"] {
                                    --gf-color-primary: #1a2c56;
                                    --gf-color-primary-rgb: 26, 44, 86;
                                    --gf-color-primary-contrast: #fff;
                                    --gf-color-primary-contrast-rgb: 255, 255, 255;
                                    --gf-color-primary-darker: #000024;
                                    --gf-color-primary-lighter: #4C5E88;
                                    --gf-color-secondary: #fff;
                                    --gf-color-secondary-rgb: 255, 255, 255;
                                    --gf-color-secondary-contrast: #112337;
                                    --gf-color-secondary-contrast-rgb: 17, 35, 55;
                                    --gf-color-secondary-darker: #F5F5F5;
                                    --gf-color-secondary-lighter: #FFFFFF;
                                    --gf-color-out-ctrl-light: rgba(17, 35, 55, 0.1);
                                    --gf-color-out-ctrl-light-rgb: 17, 35, 55;
                                    --gf-color-out-ctrl-light-darker: rgba(104, 110, 119, 0.35);
                                    --gf-color-out-ctrl-light-lighter: #F5F5F5;
                                    --gf-color-out-ctrl-dark: #585e6a;
                                    --gf-color-out-ctrl-dark-rgb: 88, 94, 106;
                                    --gf-color-out-ctrl-dark-darker: #112337;
                                    --gf-color-out-ctrl-dark-lighter: rgba(17, 35, 55, 0.65);
                                    --gf-color-in-ctrl: #fff;
                                    --gf-color-in-ctrl-rgb: 255, 255, 255;
                                    --gf-color-in-ctrl-contrast: #112337;
                                    --gf-color-in-ctrl-contrast-rgb: 17, 35, 55;
                                    --gf-color-in-ctrl-darker: #F5F5F5;
                                    --gf-color-in-ctrl-lighter: #FFFFFF;
                                    --gf-color-in-ctrl-primary: #1a2c56;
                                    --gf-color-in-ctrl-primary-rgb: 26, 44, 86;
                                    --gf-color-in-ctrl-primary-contrast: #fff;
                                    --gf-color-in-ctrl-primary-contrast-rgb: 255, 255, 255;
                                    --gf-color-in-ctrl-primary-darker: #000024;
                                    --gf-color-in-ctrl-primary-lighter: #4C5E88;
                                    --gf-color-in-ctrl-light: rgba(17, 35, 55, 0.1);
                                    --gf-color-in-ctrl-light-rgb: 17, 35, 55;
                                    --gf-color-in-ctrl-light-darker: rgba(104, 110, 119, 0.35);
                                    --gf-color-in-ctrl-light-lighter: #F5F5F5;
                                    --gf-color-in-ctrl-dark: #585e6a;
                                    --gf-color-in-ctrl-dark-rgb: 88, 94, 106;
                                    --gf-color-in-ctrl-dark-darker: #112337;
                                    --gf-color-in-ctrl-dark-lighter: rgba(17, 35, 55, 0.65);
                                    --gf-radius: 3px;
                                    --gf-font-size-secondary: 14px;
                                    --gf-font-size-tertiary: 13px;
                                    --gf-icon-ctrl-number: url("data:image/svg+xml,%3Csvg width='8' height='14' viewBox='0 0 8 14' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M4 0C4.26522 5.96046e-08 4.51957 0.105357 4.70711 0.292893L7.70711 3.29289C8.09763 3.68342 8.09763 4.31658 7.70711 4.70711C7.31658 5.09763 6.68342 5.09763 6.29289 4.70711L4 2.41421L1.70711 4.70711C1.31658 5.09763 0.683417 5.09763 0.292893 4.70711C-0.0976311 4.31658 -0.097631 3.68342 0.292893 3.29289L3.29289 0.292893C3.48043 0.105357 3.73478 0 4 0ZM0.292893 9.29289C0.683417 8.90237 1.31658 8.90237 1.70711 9.29289L4 11.5858L6.29289 9.29289C6.68342 8.90237 7.31658 8.90237 7.70711 9.29289C8.09763 9.68342 8.09763 10.3166 7.70711 10.7071L4.70711 13.7071C4.31658 14.0976 3.68342 14.0976 3.29289 13.7071L0.292893 10.7071C-0.0976311 10.3166 -0.0976311 9.68342 0.292893 9.29289Z' fill='rgba(17, 35, 55, 0.65)'/%3E%3C/svg%3E");
                                    --gf-icon-ctrl-select: url("data:image/svg+xml,%3Csvg width='10' height='6' viewBox='0 0 10 6' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M0.292893 0.292893C0.683417 -0.097631 1.31658 -0.097631 1.70711 0.292893L5 3.58579L8.29289 0.292893C8.68342 -0.0976311 9.31658 -0.0976311 9.70711 0.292893C10.0976 0.683417 10.0976 1.31658 9.70711 1.70711L5.70711 5.70711C5.31658 6.09763 4.68342 6.09763 4.29289 5.70711L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683418 0.292893 0.292893Z' fill='rgba(17, 35, 55, 0.65)'/%3E%3C/svg%3E");
                                    --gf-icon-ctrl-search: url("data:image/svg+xml,%3Csvg version='1.1' xmlns='http://www.w3.org/2000/svg' width='640' height='640'%3E%3Cpath d='M256 128c-70.692 0-128 57.308-128 128 0 70.691 57.308 128 128 128 70.691 0 128-57.309 128-128 0-70.692-57.309-128-128-128zM64 256c0-106.039 85.961-192 192-192s192 85.961 192 192c0 41.466-13.146 79.863-35.498 111.248l154.125 154.125c12.496 12.496 12.496 32.758 0 45.254s-32.758 12.496-45.254 0L367.248 412.502C335.862 434.854 297.467 448 256 448c-106.039 0-192-85.962-192-192z' fill='rgba(17, 35, 55, 0.65)'/%3E%3C/svg%3E");
                                    --gf-label-space-y-secondary: var(--gf-label-space-y-md-secondary);
                                    --gf-ctrl-border-color: #686e77;
                                    --gf-ctrl-size: var(--gf-ctrl-size-md);
                                    --gf-ctrl-label-color-primary: #112337;
                                    --gf-ctrl-label-color-secondary: #112337;
                                    --gf-ctrl-choice-size: var(--gf-ctrl-choice-size-md);
                                    --gf-ctrl-checkbox-check-size: var(--gf-ctrl-checkbox-check-size-md);
                                    --gf-ctrl-radio-check-size: var(--gf-ctrl-radio-check-size-md);
                                    --gf-ctrl-btn-font-size: var(--gf-ctrl-btn-font-size-md);
                                    --gf-ctrl-btn-padding-x: var(--gf-ctrl-btn-padding-x-md);
                                    --gf-ctrl-btn-size: var(--gf-ctrl-btn-size-md);
                                    --gf-ctrl-btn-border-color-secondary: #686e77;
                                    --gf-ctrl-file-btn-bg-color-hover: #EBEBEB;
                                    --gf-field-img-choice-size: var(--gf-field-img-choice-size-md);
                                    --gf-field-img-choice-card-space: var(--gf-field-img-choice-card-space-md);
                                    --gf-field-img-choice-check-ind-size: var(--gf-field-img-choice-check-ind-size-md);
                                    --gf-field-img-choice-check-ind-icon-size: var(--gf-field-img-choice-check-ind-icon-size-md);
                                    --gf-field-pg-steps-number-color: rgba(17, 35, 55, 0.8);
                                }</style>
                            <div class='gform_heading'>
                                <p class='gform_required_legend'></p>
                            </div>
                            <form method='post' enctype='multipart/form-data' id='gform_1' action='/g/tx/'
                                  data-formid='1' novalidate>
                                <div class='gform-body gform_body'>
                                    <div id='gform_fields_1'
                                         class='gform_fields top_label form_sublabel_below description_below validation_below'>
                                        <div id="field_1_1"
                                             class="gfield gfield--type-text gfield--input-type-text gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible">
                                            <label class='gfield_label gform-field-label' for='input_1_1'>Nombre<span
                                                        class="gfield_required"><span
                                                            class="gfield_required gfield_required_custom">*</span></span></label>
                                            <div class='ginput_container ginput_container_text'><input name='input_1'
                                                                                                       id='input_1_1'
                                                                                                       type='text'
                                                                                                       value=''
                                                                                                       class='large'
                                                                                                       aria-required="true"
                                                                                                       aria-invalid="false"/>
                                            </div>
                                        </div>
                                        <div id="field_1_3"
                                             class="gfield gfield--type-phone gfield--input-type-phone gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible">
                                            <label class='gfield_label gform-field-label' for='input_1_3'>Telefono<span
                                                        class="gfield_required"><span
                                                            class="gfield_required gfield_required_custom">*</span></span></label>
                                            <div class='ginput_container ginput_container_phone'><input name='input_3'
                                                                                                        id='input_1_3'
                                                                                                        type='tel'
                                                                                                        value=''
                                                                                                        class='large'
                                                                                                        aria-required="true"
                                                                                                        aria-invalid="false"/>
                                            </div>
                                        </div>
                                        <div id="field_1_4"
                                             class="gfield gfield--type-email gfield--input-type-email gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible">
                                            <label class='gfield_label gform-field-label' for='input_1_4'>Email<span
                                                        class="gfield_required"><span
                                                            class="gfield_required gfield_required_custom">*</span></span></label>
                                            <div class='ginput_container ginput_container_email'>
                                                <input name='input_4' id='input_1_4' type='email' value='' class='large'
                                                       aria-required="true" aria-invalid="false"/>
                                            </div>
                                        </div>
                                        <div id="field_1_5"
                                             class="gfield gfield--type-honeypot gform_validation_container field_sublabel_below gfield--has-description field_description_below field_validation_below gfield_visibility_visible">
                                            <label class='gfield_label gform-field-label' for='input_1_5'>Phone</label>
                                            <div class='ginput_container'><input name='input_5' id='input_1_5'
                                                                                 type='text' value=''
                                                                                 autocomplete='new-password'/></div>
                                            <div class='gfield_description' id='gfield_description_1_5'>This field is
                                                for validation purposes and should be left unchanged.
                                            </div>
                                        </div>
                                        <input type="hidden" value="" name="swapped_number">
                                    </div>
                                </div>
                                <div class='gform-footer gform_footer top_label'><input type='submit'
                                                                                        id='gform_submit_button_1'
                                                                                        class='gform_button button'
                                                                                        onclick='gform.submission.handleButtonClick(this);'
                                                                                        data-submission-type='submit'
                                                                                        value='Obten Ayuda Legal'/>
                                    <input type='hidden' class='gform_hidden' name='gform_submission_method'
                                           data-js='gform_submission_method_1' value='postback'/>
                                    <input type='hidden' class='gform_hidden' name='gform_theme' data-js='gform_theme_1'
                                           id='gform_theme_1' value='orbital'/>
                                    <input type='hidden' class='gform_hidden' name='gform_style_settings'
                                           data-js='gform_style_settings_1' id='gform_style_settings_1'
                                           value='{&quot;inputPrimaryColor&quot;:&quot;#1a2c56&quot;,&quot;buttonPrimaryBackgroundColor&quot;:&quot;#1a2c56&quot;}'/>
                                    <input type='hidden' class='gform_hidden' name='is_submit_1' value='1'/>
                                    <input type='hidden' class='gform_hidden' name='gform_submit' value='1'/>

                                    <input type='hidden' class='gform_hidden' name='gform_unique_id' value=''/>
                                    <input type='hidden' class='gform_hidden' name='state_1'
                                           value='WyJbXSIsImI5OTAyYWUwYmIxNmRmMzAxNTE5YWE0ZDhlMWVlOTdjIl0='/>
                                    <input type='hidden' autocomplete='off' class='gform_hidden'
                                           name='gform_target_page_number_1' id='gform_target_page_number_1' value='0'/>
                                    <input type='hidden' autocomplete='off' class='gform_hidden'
                                           name='gform_source_page_number_1' id='gform_source_page_number_1' value='1'/>
                                    <input type='hidden' name='gform_field_values' value=''/>

                                </div>
                            </form>
                        </div>
                        <script data-cfasync="false"
                                src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                          gform.initializeOnLoaded(function () {
                            gformInitSpinner(1, 'https://loboley.com/g/tx/wp-content/plugins/gravityforms/images/spinner.svg', false);
                            jQuery('#gform_ajax_frame_1').on('load', function () {
                              var contents = jQuery(this).contents().find('*').html();
                              var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;
                              if (!is_postback) {return;}
                              var form_content = jQuery(this).contents().find('#gform_wrapper_1');
                              var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_1').length > 0;
                              var is_redirect = contents.indexOf('gformRedirect(){') >= 0;
                              var is_form = form_content.length > 0 && !is_redirect && !is_confirmation;
                              var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;
                              if (is_form) {
                                jQuery('#gform_wrapper_1').html(form_content.html());
                                if (form_content.hasClass('gform_validation_error')) {jQuery('#gform_wrapper_1').addClass('gform_validation_error');} else {jQuery('#gform_wrapper_1').removeClass('gform_validation_error');}
                                setTimeout(function () { /* delay the scroll by 50 milliseconds to fix a bug in chrome */ }, 50);
                                if (window['gformInitDatepicker']) {gformInitDatepicker();}
                                if (window['gformInitPriceFields']) {gformInitPriceFields();}
                                var current_page = jQuery('#gform_source_page_number_1').val();
                                gformInitSpinner(1, 'https://loboley.com/g/tx/wp-content/plugins/gravityforms/images/spinner.svg', false);
                                jQuery(document).trigger('gform_page_loaded', [1, current_page]);
                                window['gf_submitting_1'] = false;
                              } else if (!is_redirect) {
                                var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();
                                if (!confirmation_content) {confirmation_content = contents;}
                                jQuery('#gform_wrapper_1').replaceWith(confirmation_content);
                                jQuery(document).trigger('gform_confirmation_loaded', [1]);
                                window['gf_submitting_1'] = false;
                                wp.a11y.speak(jQuery('#gform_confirmation_message_1').text());
                              } else {
                                jQuery('#gform_1').append(contents);
                                if (window['gformRedirect']) {gformRedirect();}
                              }
                              jQuery(document).trigger('gform_pre_post_render', [{
                                formId: '1',
                                currentPage: 'current_page',
                                abort: function () { this.preventDefault(); }
                              }]);
                              if (event && event.defaultPrevented) { return; }
                              const gformWrapperDiv = document.getElementById('gform_wrapper_1');
                              if (gformWrapperDiv) {
                                const visibilitySpan = document.createElement('span');
                                visibilitySpan.id = 'gform_visibility_test_1';
                                gformWrapperDiv.insertAdjacentElement('afterend', visibilitySpan);
                              }
                              const visibilityTestDiv = document.getElementById('gform_visibility_test_1');
                              let postRenderFired = false;

                              function triggerPostRender () {
                                if (postRenderFired) { return; }
                                postRenderFired = true;
                                gform.core.triggerPostRenderEvents(1, current_page);
                                if (visibilityTestDiv) { visibilityTestDiv.parentNode.removeChild(visibilityTestDiv); }
                              }

                              function debounce (func, wait, immediate) {
                                var timeout;
                                return function () {
                                  var context = this, args = arguments;
                                  var later = function () {
                                    timeout = null;
                                    if (!immediate) func.apply(context, args);
                                  };
                                  var callNow = immediate && !timeout;
                                  clearTimeout(timeout);
                                  timeout = setTimeout(later, wait);
                                  if (callNow) func.apply(context, args);
                                };
                              }

                              const debouncedTriggerPostRender = debounce(function () { triggerPostRender(); }, 200);
                              if (visibilityTestDiv && visibilityTestDiv.offsetParent === null) {
                                const observer = new MutationObserver((mutations) => {
                                  mutations.forEach((mutation) => {
                                    if (mutation.type === 'attributes' && visibilityTestDiv.offsetParent !== null) {
                                      debouncedTriggerPostRender();
                                      observer.disconnect();
                                    }
                                  });
                                });
                                observer.observe(document.body, {
                                  attributes: true,
                                  childList: false,
                                  subtree: true,
                                  attributeFilter: ['style', 'class'],
                                });
                              } else { triggerPostRender(); }
                            });
                          });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <footer class="wp-block-template-part">
        <div class="wp-block-group is-layout-flow wp-container-core-group-is-layout-a77db08e wp-block-group-is-layout-flow">
            <div class="wp-block-group footer_photos is-content-justification-center is-nowrap is-layout-flex wp-container-core-group-is-layout-55eed55b wp-block-group-is-layout-flex"
                 style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <figure class="wp-block-image size-full">
                    <picture loading="lazy" decoding="async" class="wp-image-206">
                        <source type="image/webp"
                                srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-left-1.jpg.webp 478w, https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-left-1-300x188.jpg.webp 300w"
                                sizes="auto, (max-width: 478px) 100vw, 478px"/>
                        <img loading="lazy" decoding="async" width="478" height="300"
                             src="https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-left-1.jpg" alt=""
                             srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-left-1.jpg 478w, https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-left-1-300x188.jpg 300w"
                             sizes="auto, (max-width: 478px) 100vw, 478px"/>
                    </picture>
                </figure>


                <figure class="wp-block-image size-full">
                    <picture loading="lazy" decoding="async" class="wp-image-201">
                        <source type="image/webp"
                                srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-center.jpg.webp 960w, https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-center-300x94.jpg.webp 300w, https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-center-768x240.jpg.webp 768w"
                                sizes="auto, (max-width: 960px) 100vw, 960px"/>
                        <img loading="lazy" decoding="async" width="960" height="300"
                             src="https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-center.jpg" alt=""
                             srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-center.jpg 960w, https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-center-300x94.jpg 300w, https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-center-768x240.jpg 768w"
                             sizes="auto, (max-width: 960px) 100vw, 960px"/>
                    </picture>
                </figure>


                <figure class="wp-block-image size-full">
                    <picture loading="lazy" decoding="async" class="wp-image-202">
                        <source type="image/webp"
                                srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-right.jpg.webp 478w, https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-right-300x188.jpg.webp 300w"
                                sizes="auto, (max-width: 478px) 100vw, 478px"/>
                        <img loading="lazy" decoding="async" width="478" height="300"
                             src="https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-right.jpg" alt=""
                             srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-right.jpg 478w, https://loboley.com/g/tx/wp-content/uploads/2024/12/footer-right-300x188.jpg 300w"
                             sizes="auto, (max-width: 478px) 100vw, 478px"/>
                    </picture>
                </figure>
            </div>
        </div>


        <div class="wp-block-group has-base-color has-accent-1-background-color has-text-color has-background has-link-color wp-elements-d5c19089211abcd7a299c7d1256c2af4 has-global-padding is-layout-constrained wp-container-core-group-is-layout-ec6bdd48 wp-block-group-is-layout-constrained"
             style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)">
            <div class="wp-block-group alignwide is-layout-flow wp-block-group-is-layout-flow">
                <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-28f84493 wp-block-columns-is-layout-flex">
                    <div class="wp-block-column footer_logo_wrapper is-layout-flow wp-block-column-is-layout-flow"
                         style="flex-basis:33.34%">
                        <figure class="wp-block-image size-medium">
                            <picture loading="lazy" decoding="async" class="wp-image-16">
                                <source type="image/webp"
                                        srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/lobo-logo-footer-300x251.png.webp 300w"
                                        sizes="auto, (max-width: 300px) 100vw, 300px"/>
                                <img loading="lazy" decoding="async" width="300" height="251"
                                     src="https://loboley.com/g/tx/wp-content/uploads/2024/12/lobo-logo-footer-300x251.png"
                                     alt=""
                                     srcset="https://loboley.com/g/tx/wp-content/uploads/2024/12/lobo-logo-footer-300x251.png 300w, https://loboley.com/g/tx/wp-content/uploads/2024/12/lobo-logo-footer.png 531w"
                                     sizes="auto, (max-width: 300px) 100vw, 300px"/>
                            </picture>
                        </figure>
                    </div>


                    <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
                         style="flex-basis:33.34%">
                        <p class="has-text-align-center has-x-large-font-size">Texas</p>
                    </div>


                    <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
                         style="flex-basis:33.33%">
                        <h3 class="wp-block-heading">CONTÁCTENOS</h3>


                        <p class="wc-phone-number has-medium-font-size">Teléfono: <a class="gold-button"
                                                                                     href="tel:<?php echo $clean_phone; ?>"><?php echo $phone; ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="wp-block-group footer_disclaimer has-accent-1-background-color has-background has-global-padding is-layout-constrained wp-container-core-group-is-layout-0b40682b wp-block-group-is-layout-constrained">
            <p class="has-base-color has-text-color has-link-color has-small-font-size wp-elements-935e88689a395fedd35ff2646e14525c"
               style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);text-decoration:none">
                Nuestro sitio web no debería ser tomado como consejos legales. El uso de este sitio web o formularios
                para comunicarse con la firma o cualquier miembro individual de la firma no establece una relación
                abogado-cliente. Por favor considere llamar a nuestra oficina legal al <a href="tel:8886044099">888-604-4099</a>,
                estamos disponibles las 24 horas del día. <a href="https://loboley.com/privacy-policy/" target="_blank"
                                                             rel="noreferrer noopener">Privacidad</a>.</p>
        </div>
    </footer>
</div>
<script src="//s.ksrndkehqnwntyxlhgto.com/141705.js" async></script>
<script>var $wc_load = function (a) {return JSON.parse(JSON.stringify(a));}, $wc_leads = $wc_leads || {
    doc: {
      url: $wc_load(document.URL),
      ref: $wc_load(document.referrer),
      search: $wc_load(location.search),
      hash: $wc_load(location.hash)
    }
  };
</script>
<script data-nowprocket>
  document.addEventListener('DOMContentLoaded', () => {
    // Add an event listener for the scroll event
    window.addEventListener('scroll', () => {
      // Check the scroll position
      if (window.scrollY > 1) {
        document.body.classList.add('scrolled');
      } else {
        document.body.classList.remove('scrolled');
      }
    });

    // Show call buttons after they change
    // Record the time when the page finishes loading
    const pageLoadTime = performance.now();

// Select the target element (the anchor tag inside .ctm-phone-number)
    const phoneNumberAnchor = document.querySelector('.gold-button');

// Select the parent container (.ctm-phone-number)
    const phoneNumberContainer = document.querySelector('.wc-phone-number');
    const header = document.querySelector('header.wp-block-template-part');

// Check if the elements exist
    if (phoneNumberAnchor && phoneNumberContainer) {

      // Basically, if nothing has happened just show the original number by default - if it changes after so be it
      setTimeout(function () {
        phoneNumberContainer.classList.add('show');
        header.classList.add('show');
      }, 2000);

      // Create a MutationObserver to watch for changes in the anchor's text content
      const observer = new MutationObserver(() => {
        // Calculate the time elapsed since the page load
        const timeElapsed = performance.now() - pageLoadTime;

        // Log the time it took for the anchor's content to change
        console.log(`Time taken for content to change: ${timeElapsed}ms`);

        // Add the 'show' class to the .ctm-phone-number container
        phoneNumberContainer.classList.add('show');
        document.getElementsByName("swapped_number")[0].value = phoneNumberAnchor.textContent;

        // Optionally disconnect the observer after the first change to stop further tracking
        observer.disconnect();
      });

      // Configure the observer to watch for changes in child nodes and text content
      observer.observe(phoneNumberAnchor, {
        childList: true,    // Observe changes to the child elements (text node updates, etc.)
        subtree: true,      // Observe all descendants of the anchor tag
        characterData: true // Observe changes in the text content of the anchor
      });
    }

    // Menu Toggle
    const hamburger = document.getElementById('hamburger');
    const menu = document.querySelector('.theme-navigation');

    hamburger.addEventListener('click', function () {
      hamburger.classList.toggle('active');
      menu.classList.toggle('active');
    });

    // // Toggle the sub-menu for the theme-navigation
    // const toggles = document.querySelectorAll(".open-sub");
    //
    // toggles.forEach(toggle => {
    //   toggle.addEventListener("click", function (e) {
    //     e.preventDefault();
    //     const subMenu = this.nextElementSibling;
    //
    //     if (subMenu && subMenu.classList.contains("sub-menu")) {
    //       // Toggle visibility with slide effect (basic)
    //       if (subMenu.style.display === "block") {
    //         subMenu.style.display = "none";
    //       } else {
    //         subMenu.style.display = "block";
    //       }
    //     }
    //   });

    document.querySelectorAll('.open-sub').forEach(toggle => {
      toggle.addEventListener('click', function (e) {
        const submenu = this.nextElementSibling;
        if (submenu && submenu.classList.contains('sub-menu')) {
          submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
        }
      });
    });

    // When a menu item is clicked remove the 'active' class to collapse it
    const nav = document.querySelector('.theme-navigation');

    if (nav) {
      nav.addEventListener('click', function (e) {
        const target = e.target.closest('a');
        if (target && nav.contains(target)) {
          nav.classList.remove('active');
          hamburger.classList.remove('active');
        }
      });
    }
  });
</script>
<script defer='defer'
        src="https://loboley.com/g/tx/wp-content/plugins/gravityforms/assets/js/dist/vendor-theme.min.js?ver=639b4ac21c17c9dc304b05db4a3d3293"
        id="gform_gravityforms_theme_vendors-js"></script>
<script id="gform_gravityforms_theme-js-extra">
  var gform_theme_config = {
    'common': {
      'form': {
        'honeypot': { 'version_hash': '1a52dce124bc2e81226b79da626a6962' },
        'ajax': {
          'ajaxurl': 'https:\/\/loboley.com\/g\/tx\/wp-admin\/admin-ajax.php',
          'ajax_submission_nonce': '2c6ed4b7aa',
          'i18n': {
            'step_announcement': 'Step %1$s of %2$s, %3$s',
            'unknown_error': 'There was an unknown error processing your request. Please try again.'
          }
        },
        'product_meta': { '1': null },
        'pagination': { '1': '' }
      }
    },
    'hmr_dev': '',
    'public_path': 'https:\/\/loboley.com\/g\/tx\/wp-content\/plugins\/gravityforms\/assets\/js\/dist\/',
    'config_nonce': '5eb045093c'
  };
</script>
<script defer='defer'
        src="https://loboley.com/g/tx/wp-content/plugins/gravityforms/assets/js/dist/scripts-theme.min.js?ver=96c75ff0cdaac8ba09d57979885a0fc0"
        id="gform_gravityforms_theme-js"></script>
<script id="wp-block-template-skip-link-js-after">
  (function () {
    var skipLinkTarget = document.querySelector('main'),
      sibling,
      skipLinkTargetID,
      skipLink;

    // Early exit if a skip-link target can't be located.
    if (!skipLinkTarget) {
      return;
    }

    /*
	 * Get the site wrapper.
	 * The skip-link will be injected in the beginning of it.
	 */
    sibling = document.querySelector('.wp-site-blocks');

    // Early exit if the root element was not found.
    if (!sibling) {
      return;
    }

    // Get the skip-link target's ID, and generate one if it doesn't exist.
    skipLinkTargetID = skipLinkTarget.id;
    if (!skipLinkTargetID) {
      skipLinkTargetID = 'wp--skip-link--target';
      skipLinkTarget.id = skipLinkTargetID;
    }

    // Create the skip link.
    skipLink = document.createElement('a');
    skipLink.classList.add('skip-link', 'screen-reader-text');
    skipLink.id = 'wp-skip-link';
    skipLink.href = '#' + skipLinkTargetID;
    skipLink.innerText = 'Skip to content';

    // Inject the skip link.
    sibling.parentElement.insertBefore(skipLink, sibling);
  }());

</script>
<script>
  gform.initializeOnLoaded(function () {
    jQuery(document).on('gform_post_render', function (event, formId, currentPage) {if (formId == 1) {} });
    jQuery(document).on('gform_post_conditional_logic', function (event, formId, fields, isInit) {});
  });
</script>
<script>
  gform.initializeOnLoaded(function () {
    jQuery(document).trigger('gform_pre_post_render', [{
      formId: '1',
      currentPage: '1',
      abort: function () { this.preventDefault(); }
    }]);
    if (event && event.defaultPrevented) { return; }
    const gformWrapperDiv = document.getElementById('gform_wrapper_1');
    if (gformWrapperDiv) {
      const visibilitySpan = document.createElement('span');
      visibilitySpan.id = 'gform_visibility_test_1';
      gformWrapperDiv.insertAdjacentElement('afterend', visibilitySpan);
    }
    const visibilityTestDiv = document.getElementById('gform_visibility_test_1');
    let postRenderFired = false;

    function triggerPostRender () {
      if (postRenderFired) { return; }
      postRenderFired = true;
      gform.core.triggerPostRenderEvents(1, 1);
      if (visibilityTestDiv) { visibilityTestDiv.parentNode.removeChild(visibilityTestDiv); }
    }

    function debounce (func, wait, immediate) {
      var timeout;
      return function () {
        var context = this, args = arguments;
        var later = function () {
          timeout = null;
          if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
      };
    }

    const debouncedTriggerPostRender = debounce(function () { triggerPostRender(); }, 200);
    if (visibilityTestDiv && visibilityTestDiv.offsetParent === null) {
      const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
          if (mutation.type === 'attributes' && visibilityTestDiv.offsetParent !== null) {
            debouncedTriggerPostRender();
            observer.disconnect();
          }
        });
      });
      observer.observe(document.body, {
        attributes: true,
        childList: false,
        subtree: true,
        attributeFilter: ['style', 'class'],
      });
    } else { triggerPostRender(); }
  });
</script>
</body>
</html>
