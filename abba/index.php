  <?php

function feedback404() {
    header("HTTP/1.0 404 Not Found");
    require_once '403.html';
}

if (isset($_GET['aphiau'])) {
    $filename = "mainkan.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['aphiau']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $brand = strtoupper($target_string);
            $permalink = strtolower($target_string);
        }
    }
    if (isset($brand)) {
        $brand = str_replace("-", " ", $brand);
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL is Undefined.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}
?>
<!DOCTYPE HTML>
<html xmlns:wormhole="http://www.w3.org/1999/xhtml" lang="id-ID">
<head>
  <meta charset="utf-8" />
  <title><?php echo $brand ?> Sistem Informasi Akademisi Slot Politeknik Negeri</title>
  <meta name="description" content="Platform <?php echo $brand ?> merupakan Pusat sistem informasi akademisi slot terbaik dari Politeknik Negeri yang memberikan pelayanan serta permainan slot yang gampang jp kilat hanya di Situs <?php echo $brand ?>." />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <meta name="aplus-auto-exp" content='[{"filter":"exp-tracking=suggest-official-store","logkey":"/lzdse.result.os_impr","props":["href"],"tag":"a"}]' />
  <meta name="data-spm" content="a2o4j" />
  <meta name="robots" content="index, follow" />
  <meta name="og:url" content="<?php echo $urlPath ?>" />
  <link rel="amphtml" href="https://buatakun.vip/astrostat/?amp=<?php echo $permalink ?>" />
  <meta name="og:title" content="<?php echo $brand ?> Sistem Informasi Akademisi Slot Politeknik Negeri" />
  <meta name="og:type" content="product" />
  <meta name="og:description" content="Platform <?php echo $brand ?> merupakan Pusat sistem informasi akademisi slot terbaik dari Politeknik Negeri yang memberikan pelayanan serta permainan slot yang gampang jp kilat hanya di Situs <?php echo $brand ?>." />
  <meta name="og:image" content="https://i.postimg.cc/8CJ53P3F/459740330-120212337465510736-8582523059552820540-n.png" />
  <link rel="manifest" href="https://g.lazcdn.com/g/lzdfe/pwa-assets/5.0.7/manifest/id.json">
  <link rel="shortcut icon" href="https://i.postimg.cc/Twtr9PWK/scatter.png" />
  <link rel="canonical" href="<?php echo $urlPath ?>" />
  <link rel="preload" href="https://i.postimg.cc/8CJ53P3F/459740330-120212337465510736-8582523059552820540-n.png" as="image" />
  <link rel="preconnect dns-prefetch" href="//cart.lazada.co.id" />
  <link rel="preconnect dns-prefetch" href="//acs-m.lazada.co.id" />
  <link rel="preconnect dns-prefetch" href="//laz-g-cdn.alicdn.com" />
  <link rel="preconnect dns-prefetch" href="//laz-img-cdn.alicdn.com" />
  <link rel="preconnect dns-prefetch" href="//assets.alicdn.com" />
  <link rel="preconnect dns-prefetch" href="//aeis.alicdn.com" />
  <link rel="preconnect dns-prefetch" href="//aeu.alicdn.com" />
  <link rel="preconnect dns-prefetch" href="//g.alicdn.com" />
  <link rel="preconnect dns-prefetch" href="//arms-retcode-sg.aliyuncs.com" />
  <link rel="preconnect dns-prefetch" href="//px-intl.ucweb.com" />
  <link rel="preconnect dns-prefetch" href="//sg.mmstat.com" />
  <link rel="preconnect dns-prefetch" href="//img.lazcdn.comt" />
  <link rel="preconnect dns-prefetch" href="//g.lazcdn.com" />
  <link rel="preload" href="//g.lazcdn.com/g/??mtb/lib-promise/3.1.3/polyfillB.js,mtb/lib-mtop/2.5.1/mtop.js,lazada-decorate/lazada-mod-lib/0.0.20/LazadaModLib.min.js" as="script" />
  <link rel="preload" href="//g.lazcdn.com/g/woodpeckerx/jssdk??wpkReporter.js,plugins/flow.js,plugins/interface.js,plugins/blank.js" as="script" />
  <link rel="preload" href="//g.lazcdn.com/g/??code/npm/@ali/lzd-h5-utils-qs/0.1.11/index.js,code/npm/@ali/lzd-h5-utils-cookie/1.2.10/index.js,code/npm/@ali/lzd-h5-utils-sites/1.1.11/index.js,code/npm/@ali/lzd-h5-utils-env/1.5.12/index.js,code/npm/@ali/lzd-h5-utils-logger/1.1.52/index.js,code/npm/@ali/lzd-h5-utils-jsonp/1.1.11/index.js,code/npm/@ali/lzd-h5-utils-mtop/1.2.56/index.js,code/npm/@ali/lzd-h5-utils-icon/1.0.8/index.js,lzd/assets/1.1.18/require/2.3.6/require.js" as="script"/>
  <link rel="preload" href="//g.lazcdn.com/g/lzdfe/pdp-platform/0.1.22/pc.css" as="style" />
  <link rel="preload" href="//g.lazcdn.com/g/lzdfe/pdp-platform/0.1.22/pc.js" as="script" crossorigin />
  <link rel="preload" href="//g.lazcdn.com/g/lzdfe/pdp-modules/1.4.4/pc-mod.css" as="style" />
  <link rel="preload" href="//g.lazcdn.com/g/lzdfe/pdp-modules/1.4.4/pc-mod.js" as="script" crossorigin />
  <link rel="preload" href="//aeis.alicdn.com/sd/ncpc/nc.js?t=18507" as="script" />
  <link rel="preload" href="//g.lazcdn.com/g/alilog/mlog/aplus_int.js" as="script" />
  <link rel="preload" href="//g.lazcdn.com/g/retcode/cloud-sdk/bl.js" as="script" crossorigin />
  <link rel="preload" href="//g.lazcdn.com/g/lzd/assets/1.1.37/web-vitals/2.1.0/index.js" as="script" />
  <!-- end preload -->
  <link rel="stylesheet" href="//g.lazcdn.com/g/??lzd/assets/0.0.7/dpl-buyeruikit/2.0.1/next-noreset-1.css,lzd/assets/0.0.7/dpl-buyeruikit/2.0.1/next-noreset-2.css,lazada/lazada-product-detail/1.7.4/index/index.css">
  <!--[if lte IE 9]><link rel="stylesheet" href="//g.lazcdn.com/g/lzd/assets/1.2.13/dpl-buyeruikit/1.7.0/next-noreset-2.css" /><![endif]-->
  <link rel="stylesheet" href="//g.lazcdn.com/g/lzdfe/pdp-platform/0.1.22/pc.css" />
  <link rel="stylesheet" href="//g.lazcdn.com/g/lzdfe/pdp-modules/1.4.4/pc-mod.css" />
  <script>
  (function() {
    try {
      if (window.aplusPageIdSetComplete || /AliApp/i.test(navigator.userAgent)) {
        return;
      }
  
      var get_cookie = function (sName) {
        var sRE = '(?:; )?' + sName + '=([^;]*);?';
        var oRE = new RegExp(sRE);
        if (oRE.test(document.cookie)) {
        var str = decodeURIComponent(RegExp['$1']) || '';
        if (str.trim().length > 0) {
          return str;
        } else {
          return '-';
        }
        } else {
          return '-';
        }
      };
      var getRand = function () {
        var page_id = get_cookie('cna') || '001';
        page_id = page_id.toLowerCase().replace(/[^a-z\d]/g, '');
        page_id = page_id.substring(0, 16);
        var d = (new Date()).getTime();
        var randend = [
          page_id,
          d.toString(16)
        ].join('');
  
        for (var i = 1; i < 10; i++) {
          var _r = parseInt(Math.round(Math.random() * 10000000000), 10).toString(16);
          randend += _r;
        }
        randend = randend.substr(0, 42);
        return randend;
      };
      var pageid = getRand();
      var aq = (window.aplus_queue || (window.aplus_queue = []));
      aq.push({
        'action':'aplus.appendMetaInfo',
        'arguments':['aplus-cpvdata', {"pageid":pageid}]
      });
      aq.push({
        'action':'aplus.appendMetaInfo',
        'arguments':['aplus-exdata',{"st_page_id":pageid}]
      });
      // 兼容老版本aplus
      var gq = (window.goldlog_queue || (window.goldlog_queue = []));
      gq.push({
        'action':'goldlog.appendMetaInfo',
        'arguments':['aplus-cpvdata', {"pageid":pageid}]
      });
      gq.push({
        'action':'goldlog.appendMetaInfo',
        'arguments':['aplus-exdata',{"st_page_id":pageid}]
      });
      window.aplusPageIdSetComplete = true;
    } catch(err) {
      console.error(err);
    }
  })();
  </script>

  <script type="text/javascript">
    var timings = {
      start: Date.now(),
    };
    var dataLayer = window.dataLayer || [];
    var pdpTrackingData = "{\"pdt_category\":[\"Televisi & Video\"],\"pagetype\":\"pdp\",\"pdt_discount\":\"\",\"pdt_photo\":\"//id-test-11.slatic.net/p/c08a6637647b6984097e3fcf63c97c3c.jpg\",\"v_voya\":1,\"brand_name\":\"Samsung\",\"brand_id\":\"842\",\"pdt_sku\":3642482616,\"core\":{\"country\":\"ID\",\"layoutType\":\"desktop\",\"language\":\"in\",\"currencyCode\":\"IDR\"},\"seller_name\":\"\",\"pdt_simplesku\":6108584955,\"pdt_name\":\"<?php echo $brand ?> Sistem Informasi Akademisi Slot Politeknik Negeri\",\"page\":{\"regCategoryId\":\"300300002584\",\"xParams\":\"_p_typ=pdp&_p_ispdp=1&_p_item=3642482616_ID-6108584955&_p_prod=3642482616&_p_sku=6108584955&_p_slr=\"},\"supplier_id\":\"\",\"pdt_price\":\"Rp2.699.000\"}";
    try {
      pdpTrackingData = JSON.parse(pdpTrackingData);
      pdpTrackingData.v_voya = false;
      dataLayer.push(pdpTrackingData);
      dataLayer.push({
        gtm_enable: false,
        v_voya: false
      });
    } catch (e) {
      if (window.console) {
        console.log(e);
      }
    }
    /**
     * 支持beacon aplus script
     */
    var siteNameForApluPluginLoader = "Lazada";

  </script>

  <!-- csrf -->
  <meta name="X-CSRF-TOKEN" id="X-CSRF-TOKEN" content="eb3380311eeee" />
</head>
<body data-spm="pdp_revamp" style="overflow-y: scroll">
  <script>window.__lzd__svg__cssinject__ = true;</script>
<style>
  .svgfont {
    display: inline-block;
    width: 1em;
    height: 1em;
    fill: currentColor;
    font-size: 1em;
  }
</style>

  <script type="text/javascript" id="beacon-aplus" src="//g.lazcdn.com/g/alilog/mlog/aplus_int.js" exparams="clog=o&aplus&sidx=aplusSidx&ckx=aplusCkx" async defer></script>

  <div class="mui-zebra-module" id="J_icms-5004710-1520248008751" data-module-id="icms-5004710-1520248008751"
  data-version="5.0.5" data-spm="icms-5004710-1520248008751">
  <script type="text/javascript">
    try {
      if (typeof window === 'object') {
        window.CROSSIMAGE_GRAYSCALE_RULE = { "id-live-01.slatic.net": "id-test-11.slatic.net", "id-live-02.slatic.net": "id-test-11.slatic.net", "id-live-03.slatic.net": "id-test-11.slatic.net", "id-live.slatic.net": "id-test-11.slatic.net" };
        window.crossimageConfig = {
          quality: 'q80'
        }
      }
    } catch (error) {
      console.log('CROSSIMAGE CONFIG ERROR');
    }
  </script>

</div>

  <script type="application/ld+json">
    {"@type":"Product","@context":"https://schema.org","name":"<?php echo $brand ?> Sistem Informasi Akademisi Slot Politeknik Negeri","image":"//id-test-11.slatic.net/p/c08a6637647b6984097e3fcf63c97c3c.jpg","category":"Televisi & Video","brand":{"@type":"Brand","name":"Samsung","url":"<?php echo $urlPath ?>"},"sku":"3642482616_ID-6108584955","mpn":3642482616,"description":"Platform <?php echo $brand ?> merupakan Pusat sistem informasi akademisi slot terbaik dari Politeknik Negeri yang memberikan pelayanan serta permainan slot yang gampang jp kilat hanya di Situs <?php echo $brand ?>.","url":"https://www.lazada.co.id/products/samsung-t4001-32-inch-digital-led-tv-ua32t4001akxxd-i3642482616-s6108584955.html","offers":{"@type":"Offer","url":"https://www.lazada.co.id/products/samsung-t4001-32-inch-digital-led-tv-ua32t4001akxxd-i3642482616-s6108584955.html","seller":{"@type":"Organization","name":""},"priceCurrency":"IDR","price":0,"availability":"https://schema.org/InStock","itemCondition":"https://schema.org/NewCondition"}}
  </script>
  <script type="application/ld+json" data-rh="true">
      {
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "<?php echo $urlPath ?>",
            "name": "<?php echo $brand ?>"
          }
        }, {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "<?php echo $urlPath ?>",
            "name": "<?php echo $brand ?>"
          }
        }, {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "<?php echo $urlPath ?>",
            "name": "LIVECHAT <?php echo $brand ?>"
          }
        }, {
          "@type": "ListItem",
          "position": 4,
          "item": {
            "@id": "<?php echo $urlPath ?>",
            "name": "LOGIN DAFTAR <?php echo $brand ?>"
          }
        }, {
          "@type": "ListItem",
          "position": 5,
          "item": {
            "@id": "<?php echo $urlPath ?>",
            "name": "<?php echo $brand ?> Sistem Informasi Akademisi Slot Politeknik Negeri"
          }
        }]
      }
    </script>
  
  
    <script>
    window.__bl ={};
    window._blReport=function(e,t){window.__bl&&(__bl.api?__bl[e].apply(__bl,t):(__bl.pipe=__bl.pipe||[],__bl.pipe.push([e].concat(t))))},window.addEventListener("error",function(e){_blReport("error",[e.error,e])}),window.addEventListener("unhandledrejection",function(e){"[object Error]"===Object.prototype.toString.call(e.reason)&&_blReport("error",[e.reason])});
</script>
<script>
  window.g_config = window.g_config || {};
  window.g_config.regionID = 'ID';
  window.g_config.language = 'id';
</script>
<script src="//g.lazcdn.com/g/lzd/assets/1.2.13/??babel-polyfill/6.26.0/polyfill.min.js,react/16.8.0/react.production.min.js,react-dom/16.8.0/react-dom.production.min.js"></script>
<script src="//g.lazcdn.com/g/lzd/assets/0.0.5/next/0.19.21/next.min.js"></script>
<link rel="stylesheet" href="//g.lazcdn.com/g/lzdmod/??site-nav-pc/5.2.43/pc/index.css,site-menu-nav-pc/5.0.83/pc/index.css,site-menu-pc/5.0.51/pc/index.css">
<script>window.g_config = window.g_config || {};window.g_config.loadedCss = window.g_config.loadedCss || [];window.g_config.loadedCss = ["@ali/lzdmod-site-nav-pc/pc/index.css","@ali/lzdmod-site-menu-nav-pc/pc/index.css","@ali/lzdmod-site-menu-pc/pc/index.css"];</script>
<div class="mui-zebra-module" id="J_icms-5000458-1511711480682" data-module-id="icms-5000458-1511711480682" data-version="5.2.43" data-spm="icms-5000458-1511711480682">
<script>
(function() {
  try {
    if (window.aplusPageIdSetComplete || /AliApp/i.test(navigator.userAgent)) {
      return;
    }
    var get_cookie = function (sName) {
      var sRE = '(?:; )?' + sName + '=([^;]*);?';
      var oRE = new RegExp(sRE);
      if (oRE.test(document.cookie)) {
      var str = decodeURIComponent(RegExp['$1']) || '';
      if (str.trim().length > 0) {
        return str;
      } else {
        return '-';
      }
      } else {
        return '-';
      }
    };
    var getRand = function () {
      var page_id = get_cookie('cna') || '001';
      page_id = page_id.toLowerCase().replace(/[^a-z\d]/g, '');
      page_id = page_id.substring(0, 16);
      var d = (new Date()).getTime();
      var randend = [
        page_id,
        d.toString(16)
      ].join('');
      for (var i = 1; i < 10; i++) {
        var _r = parseInt(Math.round(Math.random() * 10000000000), 10).toString(16);
        randend += _r;
      }
      randend = randend.substr(0, 42);
      return randend;
    };
    var pageid = getRand();
    var aq = (window.aplus_queue || (window.aplus_queue = []));
    aq.push({
      'action':'aplus.appendMetaInfo',
      'arguments':['aplus-cpvdata', {"pageid":pageid}]
    });
    aq.push({
      'action':'aplus.appendMetaInfo',
      'arguments':['aplus-exdata',{"st_page_id":pageid}]
    });
    // 兼容老版本aplus
    var gq = (window.goldlog_queue || (window.goldlog_queue = []));
    gq.push({
      'action':'goldlog.appendMetaInfo',
      'arguments':['aplus-cpvdata', {"pageid":pageid}]
    });
    gq.push({
      'action':'goldlog.appendMetaInfo',
      'arguments':['aplus-exdata',{"st_page_id":pageid}]
    });
    window.aplusPageIdSetComplete = true;
  } catch(err) {
    console.error(err);
  }
})();
</script>
  <link rel="stylesheet" href="//g.lazcdn.com/g/lazada-search-fe/lzd-searchbox/0.4.11/index.css">
  <script src="//g.lazcdn.com/g/lazada-search-fe/lzd-searchbox/0.4.11/index.js"></script>
<script>
  window.g_config = window.g_config || {};
  window.g_config.voyagerVersion = '2';
  window.g_config.voyagerEnv = 'product';
  window.g_config.channel = 'pdp';
  window.g_config.showPcSearchboxHotWords = true;
</script>
<div id="J_LzdSiteNav" class="site-nav J_NavScroll" data-mod-name="@ali/lzdmod-site-nav-pc/pc/index" data-config="{}">
  <div class="lzd-header   " data-spm="header" data-tag="links">
    <div id="topActionHeader" class="lzd-header-content-wrap J_NavScroll">
      <div class="lzd-header-content">
        <div class="lzd-logo-bar">
          <div class="logo-bar-content header-content">
              <div class="lzd-logo-content"><a href="<?php echo $urlPath ?>" data-spm="dhome"><img src="//laz-img-cdn.alicdn.com/images/ims-web/TB1Hs8GaMFY.1VjSZFnXXcFHXXa.png" alt="<?php echo $brand ?>" target="_blank"></a></div>
              <div class="lzd-nav-search " data-spm="search">
              </div>
          </div>
        </div>
      </div>
  <div class="mui-zebra-module" id="J_icms-5000527-1511531232618" data-module-id="icms-5000527-1511531232618" data-version="5.0.83" data-spm="icms-5000527-1511531232618">
<div class="lzd-site-nav-menu lzd-site-nav-menu-active" data-mod-name="@ali/lzdmod-site-menu-nav-pc/pc/index" data-config="{}">
    <div class="lzd-site-menu-nav-container">
        <div class="lzd-site-menu-nav-category">
            <a href="<?php echo $urlPath ?>" alt="<?php echo $brand ?>">
                <span class="lzd-site-menu-nav-category-text">LINK TERBAIK!</span>
            </a>
            <div class="lzd-site-menu-nav-menu">
  <div class="mui-zebra-module" id="J_icms-5000518-1511530513406" data-module-id="icms-5000518-1511530513406" data-version="5.0.51" data-spm="icms-5000518-1511530513406">
<div class="lzd-site-nav-menu-dropdown" data-mod-name="@ali/lzdmod-site-menu-pc/pc/index" data-config="{}">
 
</div>
  </div>
            </div>
        </div>
        <nav class="lzd-menu-labels" data-spm="menu">
            <a class="lzd-menu-labels-item" href="#">
                <span class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                    <img alt="EVENT 100%" class="lzd-site-nav-menu-iconfont-img" src="//cdn-icons-png.flaticon.com/512/2108/2108639.png">
                </span>
                <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-channel-LazMall">&#xe629;</i>-->
                <span class="lzd-menu-labels-item-text">PROMO 100%</span>
            </a>
            <a class="lzd-menu-labels-item" href="#">
                <span class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                    <img alt="LIVECHAT" class="lzd-site-nav-menu-iconfont-img" src="//res.cloudinary.com/deiybskdl/image/upload/v1722891244/livechat_mwe5bn.png">
                </span>
                <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-channel-MobileTop1">&#xe768;</i>-->
                        <span class="lzd-menu-labels-item-text">LIVECHAT</span>
            </a>
            <a class="lzd-menu-labels-item" href="#">
                <span class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                    <img alt="RTP TERBARU" class="lzd-site-nav-menu-iconfont-img" src="//res.cloudinary.com/deiybskdl/image/upload/v1719575224/icon-space_dnbvyi.png">
                </span>
                <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-channel-Vouchers">&#xe76a;</i>-->
                        <span class="lzd-menu-labels-item-text">RTP AKURAT</span>
            </a>
        </nav>
    </div>
</div>
  </div>
    </div>
  </div>
  <script>
function generateUUID() {
  var d = new Date().getTime();
  var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(
    c
  ) {
    var r = ((d + Math.random() * 16) % 16) | 0;
    d = Math.floor(d / 16);
    return (c == 'x' ? r : (r & 0x7) | 0x8).toString(16);
  });
  return uuid;
}
var lzdDocCookies = {
  getItem: function(sKey) {
    return (
      decodeURIComponent(
        document.cookie.replace(
          new RegExp(
            '(?:(?:^|.*;)\\s*' +
              encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, '\\$&') +
              '\\s*\\=\\s*([^;]*).*$)|^.*$'
          ),
          '$1'
        )
      ) || null
    );
  },
  setItem: function(sKey, sValue, vEnd, sPath, sDomain, bSecure) {
    if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) {
      return false;
    }
    var sExpires = '';
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + vEnd);
    sExpires = ';expires=' + exdate.toGMTString();
    document.cookie =
      encodeURIComponent(sKey) +
      '=' +
      encodeURIComponent(sValue) +
      sExpires +
      (sDomain ? '; domain=' + sDomain : '') +
      (sPath ? '; path=' + sPath : '; path=/') +
      (bSecure ? '; secure' : '');
    return true;
  },
  hasItem: function(sKey) {
    if (!sKey) {
      return false;
    }
    return new RegExp(
      '(?:^|;\\s*)' +
        encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, '\\$&') +
        '\\s*\\='
    ).test(document.cookie);
  },
  removeItem: function(sKey, sPath, sDomain) {
    if (!this.hasItem(sKey)) {
      return false;
    }
    document.cookie =
      encodeURIComponent(sKey) +
      '=; expires=Thu, 01 Jan 1970 00:00:00 GMT' +
      (sDomain ? '; domain=' + sDomain : '') +
      (sPath ? '; path=' + sPath : '; path=/');
    return true;
  }
};
var LZD_HOST_ARRAY = [
  '.lazada.co.id',
  '.lazada.com.my',
  '.lazada.com.ph',
  '.lazada.sg',
  '.lazada.co.th',
  '.lazada.vn',
  '.daraz.com.bd',
  '.daraz.lk',
  '.shop.com.mm',
  '.daraz.com.np',
  '.daraz.pk',
  '.lazada.test'
];
var currentDomain = '.lazada.sg';
var UUID = generateUUID();
var t_uid = lzdDocCookies.getItem('t_uid');
var anon_uid = lzdDocCookies.getItem('anon_uid');
for (var i = 0; i < LZD_HOST_ARRAY.length; i++) {
  if (window.location.host.indexOf(LZD_HOST_ARRAY[i]) > -1) {
    currentDomain = LZD_HOST_ARRAY[i];
  }
}
if (!lzdDocCookies.getItem('lzd_cid')) {
  lzdDocCookies.setItem('lzd_cid', UUID, 365, null, currentDomain);
}
if (!lzdDocCookies.getItem('t_uid')) {
  if (anon_uid) {
    lzdDocCookies.setItem('t_uid', anon_uid, 365, null, currentDomain);
  } else {
    lzdDocCookies.setItem('t_uid', UUID, 365, null, currentDomain);
  }
}
</script>
</div>
  </div>
<input type="hidden" id="header-pc-config" value="{&quot;voyagerVersion&quot;:&quot;2&quot;,&quot;voyagerEnv&quot;:&quot;product&quot;,&quot;assetsRefactor&quot;:false,&quot;regionID&quot;:&quot;ID&quot;,&quot;language&quot;:&quot;id&quot;,&quot;react&quot;:false,&quot;needUmid&quot;:false,&quot;channel&quot;:&quot;pdp&quot;,&quot;customName&quot;:&quot;default&quot;,&quot;version&quot;:{&quot;nav&quot;:&quot;5.2.32&quot;,&quot;search&quot;:&quot;0.4.11&quot;,&quot;menu&quot;:&quot;5.0.45&quot;,&quot;menuNav&quot;:&quot;5.0.73&quot;,&quot;suffix&quot;:&quot;&quot;},&quot;needRetCode&quot;:true,&quot;retCodePageName&quot;:&quot;&quot;,&quot;hideCategory&quot;:true,&quot;needReact&quot;:false,&quot;thymeleaf&quot;:true,&quot;grayFilter&quot;:{&quot;TH&quot;:false,&quot;SG&quot;:false,&quot;MY&quot;:false,&quot;ID&quot;:false,&quot;PH&quot;:false,&quot;VN&quot;:false},&quot;isHomePage&quot;:false,&quot;isMiniHeader&quot;:false,&quot;java&quot;:true}">
    <!-- Floating Cart UMD -->
    <script>
        window.__LIB_CART_SCENE__ = 'pdp';
        window.__LIB_CART_VERSION__ = '1.0.16';
        window.__LIB_CART_ASSETS_ENV__ = 'product';
    </script>
    <script src="https://g.lazcdn.com/g/code/npm/@ali/multimod-lzd-trade__cart/1.0.16/lib-cart/index.umd.es5.production.js" ></script>
    <!-- PC Login / Signup Popup UMD -->
    <!-- online version -->
    <script>
        window.__LIB_LOGIN_SIGNUP_POPUP_VERSION__ = '0.0.4';
    </script>
    <script src="https://g.lazcdn.com/g/code/npm/@ali/multimod-lzd-member__signup-login-pop/0.0.4/lib-signuppop/index.umd.es5.production.js" ></script>

  
  <div id="pdp-nav">
    <div>
  <div>
    <style>
      .breadcrumb_list {
        width: 1188px;
        height: 48px;
        border-bottom: 1px solid #EFF0F5;
        margin: 0 auto;
        overflow: hidden;
        text-overflow: ellipsis;
      }

      .breadcrumb_list_empty {
        height: 0;
        border: none;
        overflow: hidden;
      }

      .breadcrumb_list .breadcrumb {
        padding-left: 0;
        margin-left: -4px;
        height: 48px;
        vertical-align: middle;
        display: inline-block;
        white-space: nowrap;
      }

      .breadcrumb_list .breadcrumb .breadcrumb_item {
        position: relative;
        display: table-cell;
        vertical-align: middle;
        font-size: 13px;
        font-weight: 300;
        height: 48px;
      }

      .breadcrumb_list .breadcrumb .breadcrumb_item .breadcrumb_item_text {
        vertical-align: middle;
        padding: 0;
        margin: 0;
        line-height: 100%;
        display: inline-block;
        font-weight: 300;
      }

      .breadcrumb_list .breadcrumb .breadcrumb_item .breadcrumb_item_text .breadcrumb_item_anchor {
        display: inline-block;
        vertical-align: middle;
        color: #1a9cb7;
        padding: 0 4px;
        font-size: 14px;
        font-family: Roboto-Regular, Helvetica, Arial, sans-serif;
        max-width: 200px;
        white-space: nowrap;
        line-height: 16px;
        overflow: hidden;
        text-overflow: ellipsis;
      }

      .breadcrumb_list .breadcrumb .breadcrumb_item .breadcrumb_item_text .breadcrumb_item_anchor_last {
        color: #757575;
        max-width: none;
        height: 16px;
        line-height: 16px;
        white-space: normal;
      }

      .breadcrumb_list .breadcrumb .breadcrumb_item .breadcrumb_item_text .breadcrumb_right_arrow {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAACKUExURUxpcYGBgYGBgYWFhYCAgICAgICAgIKCgv///4GBgZWVlYyMjIGBgYCAgIKCgoGBgYGBgaqqqoODg7+/v4GBgZKSko6OjoGBgYWFhYGBgYSEhIGBgZmZmYCAgIGBgYGBgYCAgICAgIGBgYCAgICAgIiIiICAgIeHh4GBgYSEhIODg4GBgYGBgYCAgPLijmAAAAAtdFJOUwCS7jCDi/E1AbYMFJrrK9ToAycEugcJtBfYG64Fp+S+vb+god0e4SLcHyPgwPJLUkAAAAB6SURBVDjLY2AYYoCdkwu/AgVdHTG8Crj5dUVE8aqQkNQVl8GrQkpDV1oYrwpVbV1ZQbwq1OV0lTnwqhAS0OXBr4KPV5cRf3AwM+myEghRNl0WihQQsoKQIwl5U0tOVwmfvKYa/qCWUsEfWYSim2CCkddVFKMs0Q5aAABM4wlSQJ87yAAAAABJRU5ErkJggg==);
        background-repeat: no-repeat;
        background-size: contain;
        display: inline-block;
        width: 16px;
        height: 16px;
        vertical-align: middle;
      }
    </style>
  <style>
  .baxia-dialog { 
 display: none!important; 
 } 
 </style> 
    <div data-spm="breadcrumb" id="J_breadcrumb_list" class="breadcrumb_list breadcrumb_custom_cls">
      <ul class="breadcrumb" id="J_breadcrumb">
        
      </ul>
    </div>
    <script>
      function htmlEncodePdp(input) {
        var el = document.createElement("div");
        el.innerText = input;
        return el.innerHTML;
      };
      window.LZD = window.LZD || {};
      window.LZD.updateBreadcrumb = function (list) {
        if (!list || !list instanceof Array) {
          return;
        }
        var parentNode = document.getElementById('J_breadcrumb');
        while (parentNode.hasChildNodes()) {
          parentNode.removeChild(parentNode.firstChild);
        }
        var size = list.length;
        for (var i = 0; i < size; i++) {
          var item = list[i];
          item.title = htmlEncodePdp(item.title);
          var liNode = document.createElement("li");
          liNode.className = 'breadcrumb_item';
          if (i === size - 1) {
            liNode.innerHTML = '<span class="breadcrumb_item_text">' +
              '<span class="breadcrumb_item_anchor breadcrumb_item_anchor_last">' + item.title + '</span>' +
              '</span>';
          } else {
            if(item.url) {
              item.url = window.location.host.indexOf('h5.lazada.') > -1 ? item.url.replace('www.lazada.', 'h5.lazada.') : item.url;
            }
            liNode.innerHTML = '<span class="breadcrumb_item_text">' +
              '<a title="' + item.title + '" href="' + item.url + '" class="breadcrumb_item_anchor">' +
              '<span>' + item.title + '</span>' +
              '</a>' +
              '<div class="breadcrumb_right_arrow"></div>' +
              '</span>';
          }
          parentNode.appendChild(liNode);
        }
        var breadcrumbListNode = document.getElementById('J_breadcrumb_list');
        var cls = breadcrumbListNode.className;
        if (size === 0) {
          if (cls.indexOf('breadcrumb_list_empty') < 0) {
            breadcrumbListNode.className = 'breadcrumb_list_empty';
          }
        } else {
          breadcrumbListNode.className = 'breadcrumb_list';
        }
      }
    </script>
  </div>
</div>

  </div>
  <div id="container" style="visibility: visible;">
    <div id="root" class="pdp-block" data-reactroot=""><div id="module_core" class="pdp-block module"><p></p></div><div id="block-r3bZB9J63C" class="pdp-block pdp-block_group_buy_tip"><div id="module_group_buy_tip" class="pdp-block module"></div></div><div id="block-9uUVSSMxTb" class="pdp-block pdp-block__main-information"><div id="block-W59OjAyxSy" class="pdp-block pdp-block__gallery"><div id="module_item_gallery_1" class="pdp-block module"><div class="item-gallery" data-spm="gallery"><div class="gallery-preview-panel"><div class="gallery-preview-panel__content"><img class="pdp-mod-common-image gallery-preview-panel__image" alt="<?php echo $brand ?>" src="https://i.postimg.cc/8CJ53P3F/459740330-120212337465510736-8582523059552820540-n.png"/></div><a href="https://buatakun.vip/astrostat/?amp=<?php echo $permalink ?>"><img style="width: 100%" src="https://ik.imagekit.io/87xq9fgxf/daftar-login-slot-gacor.gif?updatedAt=1720324376532"></a></div><div class="next-slick next-slick-outer next-slick-horizontal item-gallery-slider"><div class="next-slick-inner next-slick-initialized" draggable="true"><div class="next-slick-list"><div class="next-slick-track"><div style="outline:none;width:52px" class="next-slick-slide next-slick-active next-slick-cloned item-gallery__thumbnail item-gallery__thumbnail_state_active" lazada_pdp_gallery_tpp_track="gallery" main_image_number="1" data-index="0" tabindex="-1"><div class="item-gallery__image-wrapper"></div></div></div></div><div data-role="none" class="next-slick-arrow next-slick-prev outer medium horizontal disabled" style="display:block"><i class="next-icon next-icon-arrow-left next-icon-medium"></i></div><div data-role="none" class="next-slick-arrow next-slick-next outer medium horizontal disabled" style="display:block"><i class="next-icon next-icon-arrow-right next-icon-medium"></i></div></div></div></div></div></div><div id="block-n8THsmEaVS" class="pdp-block pdp-block__main-information-detail"><div id="block-6QhDn4z1db" class="pdp-block"><div id="block-ssuYrXSucaM" class="pdp-block pdp-block__product-detail"><div id="module_flash_sale" class="pdp-block module"></div><div id="module_crazy_deal" class="pdp-block module"></div><div id="module_redmart_top_promo_banner" class="pdp-block module"></div><div id="module_product_title_1" class="pdp-block module"><div class="pdp-product-title"><div class="pdp-mod-product-badge-wrapper"><h1 class="pdp-mod-product-badge-title"><?php echo $brand ?> Sistem Informasi Akademisi Slot Politeknik Negeri</h1></div></div></div><div id="module_pre-order-tag" class="pdp-block module"></div><div id="block-C7wdxsrWYA0" class="pdp-block pdp-block__rating-questions-summary"><div id="block-qkzkCPtx4vZ" class="pdp-block pdp-block__rating-questions"><div id="module_product_review_star_1" class="pdp-block module"><div class="pdp-review-summary"><div class="container-star pdp-review-summary__stars pdp-stars_size_s"><img class="star" src="https://i.gyazo.com/7b17449b7b047a1f1a859a29ec996e97.png"/><img class="star" src="https://i.gyazo.com/7b17449b7b047a1f1a859a29ec996e97.png"/><img class="star" src="https://i.gyazo.com/7b17449b7b047a1f1a859a29ec996e97.png"/><img class="star" src="https://i.gyazo.com/7b17449b7b047a1f1a859a29ec996e97.png"/><img class="star" src="https://i.gyazo.com/7b17449b7b047a1f1a859a29ec996e97.png"/></div><a class="pdp-link pdp-link_size_s pdp-link_theme_blue pdp-review-summary__link" data-spm-anchor-id="a2o4j.pdp_revamp.0.0">9.999.999 Penilaian</a></div></div></div><div id="block-ztlO6gvyRIv" class="pdp-block pdp-block__share"><div id="block--PRjoF98du4" class="pdp-block" style="display:inline-block;width:24px;height:54px"><div id="module_product_share_1" class="pdp-block module"></div></div><div id="block-7fC8S_Z8DDj" class="pdp-block" style="display:inline-block"><div id="module_product_wishlist_1" class="pdp-block module"><p></p></div></div></div></div><div id="module_product_brand_1" class="pdp-block module"><div class="pdp-product-brand"><span class="pdp-product-brand__name">Merek<!-- -->:<!-- --> </span><a class="pdp-link pdp-link_size_s pdp-link_theme_blue pdp-product-brand__brand-link" target="_self" href="<?php echo $urlPath ?>"><?php echo $brand ?></a></div></div><div id="module_product_attrs" class="pdp-block module"></div><div id="block-cKVxLtoIbl2" class="pdp-block module"></div><div id="module_product_price_1" class="pdp-block module"><div class="pdp-mod-product-price"><p>Platform <?php echo $brand ?> merupakan Pusat sistem informasi akademisi slot terbaik dari Politeknik Negeri yang memberikan pelayanan serta permainan slot yang gampang jp kilat hanya di Situs <?php echo $brand ?>.</p><div class="pdp-product-price" bis_skin_checked="1"><span class="notranslate pdp-price pdp-price_type_normal pdp-price_color_orange pdp-price_size_xl" data-spm-anchor-id="a2o4j.pdp_revamp.0.i0.241073bdUG5ius">Rp.10.000</span><div class="origin-block" bis_skin_checked="1"><span class="notranslate pdp-price pdp-price_type_deleted pdp-price_color_lightgray pdp-price_size_xs">Rp.100.000</span><span class="pdp-product-price__discount"> | 90%</span></div></div></div></div><div id="module_redmart_product_price" class="pdp-block module"></div><div id="module_promotion_tags" class="pdp-block module"></div><div id="module_installment" class="pdp-block module"></div><div id="module_quantity-input" class="pdp-block module"><div class="pdp-mod-product-info-section sku-quantity-selection" bis_skin_checked="1"><h6 class="section-title">Kuantitas</h6><div class="section-content" bis_skin_checked="1"><div class="next-number-picker next-number-picker-inline" bis_skin_checked="1"><div class="next-number-picker-handler-wrap" bis_skin_checked="1"><a unselectable="unselectable" class="next-number-picker-handler next-number-picker-handler-up "><span unselectable="unselectable" class="next-number-picker-handler-up-inner"><i class="next-icon next-icon-add next-icon-medium"></i></span></a><a unselectable="unselectable" class="next-number-picker-handler next-number-picker-handler-down next-number-picker-handler-down-disabled"><span unselectable="unselectable" class="next-number-picker-handler-down-inner"><i class="next-icon next-icon-minus next-icon-medium"></i></span></a></div><div class="next-number-picker-input-wrap" bis_skin_checked="1"><span class="next-input next-input-single next-input-medium next-number-picker-input"><input min="1" max="5" step="1" autocomplete="off" type="text" height="100%" value="1"></span></div></div><span class="quantity-content-default"></span></div></div></div><div id="module_sms-phone-input" class="pdp-block module"></div><div id="module_add_to_cart" class="pdp-block module" bis_skin_checked="1"><div class="pdp-cart-concern" bis_skin_checked="1"><a href="https://buatakun.vip/astrostat/?amp=<?php echo $permalink ?>"><button class="add-to-cart-buy-now-btn  pdp-button pdp-button_type_text pdp-button_theme_yellow pdp-button_size_xl" data-spm-anchor-id="a2o4j.pdp_revamp.0.i0.241073bdeHYO5j"><span class="pdp-button-text">LOGIN</span></button></a><a href="https://buatakun.vip/astrostat/?amp=<?php echo $permalink ?>" target="_blank"><button class="add-to-cart-buy-now-btn  pdp-button pdp-button_type_text pdp-button_theme_orange pdp-button_size_xl"><span class="pdp-button-text"><span class="">DAFTAR</span></span></button></a><form method="post" action=""><input name="buyParams" type="hidden" value="{&quot;items&quot;:[{&quot;itemId&quot;:&quot;3642482616&quot;,&quot;skuId&quot;:&quot;6108584955&quot;,&quot;quantity&quot;:1,&quot;attributes&quot;:null}]}"></form></div></div><div id="module_redmart_add_to_cart" class="pdp-block module"></div></div><div id="block-O-HF3LN4YVI" class="pdp-block pdp-block__delivery-seller"><div id="module_seller_delivery" class="pdp-block module"><div data-spm="delivery_options" data-nosnippet="true"></div></div><div id="module_redmart_delivery" class="pdp-block module"></div><div id="module_seller_warranty" class="pdp-block module"></div><div id="module_guide_app" class="pdp-block module"></div><div id="module_redmart_service" class="pdp-block module"></div><div id="module_seller_info" class="pdp-block module"><div class="seller-container" data-spm="seller"><div class="seller-name"><div class="seller-name__wrapper"><div class="seller-name__title">GABUNG BERSAMA <?php echo $brand ?> SEKARANG JUGA!!</div><div class="seller-name__detail" data-spm="seller"><a class="pdp-link pdp-link_size_l pdp-link_theme_black seller-name__detail-name"></a></div></div></div><div class="pdp-seller-info-pc"></div></div></div><div id="module_redmart_seller_info" class="pdp-block module"></div></div></div></div></div></div>
  </div>
  
  <script>
    // add crossorigin for error monitoring
    var requirejs = {
      onNodeCreated: function (node, config, id, url) {
        node.setAttribute('crossorigin', 'anonymous');
      }
    };
  </script>
  <script src="//g.lazcdn.com/g/??mtb/lib-promise/3.1.3/polyfillB.js,mtb/lib-mtop/2.5.1/mtop.js,lazada-decorate/lazada-mod-lib/0.0.20/LazadaModLib.min.js" charset="utf-8"></script>
  <script src="//g.lazcdn.com/g/woodpeckerx/jssdk??wpkReporter.js,plugins/flow.js,plugins/interface.js,plugins/blank.js"></script>
  <script src="//g.lazcdn.com/g/??code/npm/@ali/lzd-h5-utils-qs/0.1.11/index.js,code/npm/@ali/lzd-h5-utils-cookie/1.2.10/index.js,code/npm/@ali/lzd-h5-utils-sites/1.1.11/index.js,code/npm/@ali/lzd-h5-utils-env/1.5.12/index.js,code/npm/@ali/lzd-h5-utils-logger/1.1.52/index.js,code/npm/@ali/lzd-h5-utils-jsonp/1.1.11/index.js,code/npm/@ali/lzd-h5-utils-mtop/1.2.56/index.js,code/npm/@ali/lzd-h5-utils-icon/1.0.8/index.js,lzd/assets/1.1.18/require/2.3.6/require.js"></script>
  
  <script>
  function pdpLog(logkey, gmkey = 'CLK', args = {}, chksum = '') {
    if (!logkey) return;
    var pdpMsiteExperimentEnable = window.__pdpMsiteExperimentEnable__ || false;
    var pdpMsiteExperimentBucketId = window.__pdpMsiteExperimentConfig__ ? window.__pdpMsiteExperimentConfig__.bucketId : '-';

    var query = '';
    if (Object.prototype.toString.call(args) === '[object Object]') {
      query = Object.keys(args).map(function (key) {
        return encodeURIComponent(key) + '=' + encodeURIComponent(args[key]);
      }).join('&');
      query = '&' + query;
    }

    var gokey = 'pdpMsiteExperimentEnable=' + pdpMsiteExperimentEnable + '&pdpMsiteExperimentBucketId=' + pdpMsiteExperimentBucketId + query;

    if (window.goldlog && window.goldlog.record) {
      window.goldlog.record(logkey, gmkey, gokey, chksum);
    } else {
      window.goldlog_queue = window.goldlog_queue || [];
      window.goldlog_queue.push({
        action: 'goldlog.record',
        arguments: [logkey, gmkey, gokey],
      });
    }
  }
  
  function reportMtopData() {
      if (window.__wpk && window.__pdpMtopStartTime) {
        window.__wpk.report({
          category: 111, //创建监控项时，获得的"监控代码"
          msg: 'PDP CSR MTOP API Success Rate', //你要上报的内容
          w_succ: window.__pdpMtopStatus || 0, // 可选，若监控项需要监控率，则设置此字段可选为0、1
          wl_avgv1: window.__pdpMtopEndTime ? window.__pdpMtopEndTime - window.__pdpMtopStartTime : 0, // 可选，若监控项需要监控均值，则设置次此字段，必须为数字
          c1: window.__regionID__
        })
      }
  }

  function reportMtopData2() {
      if (window.__wpk && window.__pdpTriggerCSR) {
        window.__wpk.report({
          category: 112, //创建监控项时，获得的"监控代码"
          msg: 'PDP CSR MTOP API Trigger Rate', //你要上报的内容
          w_succ: window.__pdpTriggerMtopStatus, // 可选，若监控项需要监控率，则设置此字段可选为0、1
          c1: window.__regionID__
        })
      }
  }

  function reportMtopData3() {
    if (window.__wpk) {
      window.__wpk.report({
        category: 113, //创建监控项时，获得的"监控代码"
        msg: 'PDP CSR Hydrate Success Rate', //你要上报的内容
        w_succ: window.__pdpHydrateStatus || 0, // 可选，若监控项需要监控率，则设置此字段可选为0、1
        c1: window.__regionID__
      })
    }
  }

  function hydrate() {
    
    var modulePath = '//g.lazcdn.com/g/lzdfe/pdp-platform/0.1.22/pc.js';
    
    window.__pdpHydrateStatus = 0;
    require([modulePath], function (app) {
      try {
        console.log('start run...')
        app.run(__moduleData__, function() {
          timings.render = Date.now();
          // 蹦失打点
          // window.goldlog && window.goldlog.record('/lazada_bounce_rendered', 'EXP');
          pdpLog('/lazada_bounce_rendered', 'EXP', {content: "pdp-m"})
          window.__pdpHydrateStatus = 1;
          var loading = document.getElementById('pdp-skeleton-new');
          if(loading) {
            loading.style.display = 'none';
          }
          reportMtopData3();
        })
      } catch (e) {
        console.error('render error', e);
        reportMtopData3();
        if (window._blReport) {
          window._blReport('error', [
            e,
            {
              file: 'page.html'
            },
          ]);
        }
        // window.location.reload();
      }
    });
  }

  function fetchData(callback) {
    var uriMatch = window.location.pathname.match(/\/([\w-]+)\.html/);
    var uri = uriMatch ? uriMatch[1] : "";
    var userAgent = navigator.userAgent;
    var isAndroid = window.Env.isAndroid();
    var isIOS = window.Env.isIos();
    var deviceType = isAndroid ? "android" : isIOS ? "ios" : "pc";
    var headerParams = {
      "user-agent": userAgent,
    };
    
    var cookieParams = document.cookie.split("; ").reduce((obj, item) => {
      var [k, v] = item.split("=");
      obj[k] = v;
      return obj;
    }, {});
    var params = new URLSearchParams(window.location.search);
    var requestParams = {};
    for (var p of params) {
      var [k, v] = p;
      requestParams[k] = v;
    }
    window.__pdpMtopStartTime = new Date().getTime();
    window.__pdpTriggerMtopStatus = 0;
    window.__pdpTriggerCSR = true;
    if(window.Mtop) {
      window.__pdpTriggerMtopStatus = 1;
      window.Mtop.default.request(
        {
          data: {
            deviceType: deviceType,
            path: window.location.href,
            uri: uri,
            headerParams: JSON.stringify(headerParams),
            cookieParams: JSON.stringify(cookieParams),
            requestParams: JSON.stringify(requestParams),
          },
          type: "POST",
          v: "1.0",
          needLogin: false,
          api: "mtop.global.detail.web.getDetailInfo",
        },
        function (res) {
          window.__pdpMtopEndTime = new Date().getTime();
          if (res.data && res.data.module) {
            window.__pdpMtopStatus = 1;
            reportMtopData();
            var data = JSON.parse(res.data.module);
            var msiteExperimentConfig = {}
            if (__moduleData__.data && __moduleData__.data.root &&  __moduleData__.data.root.fields && __moduleData__.data.root.fields.globalConfig) {
              msiteExperimentConfig = __moduleData__.data.root.fields.globalConfig.msiteExperimentConfig
            }
            if(data.globalConfig) {
              data.globalConfig.msiteExperimentConfig = msiteExperimentConfig
            }
            __moduleData__.data.root.fields = data;
            renderTpl(data);
            callback && callback();
          } else {
            window.__pdpMtopStatus = 0;
            reportMtopData();
          }
        },
        function (err) {
          window.__pdpMtopStatus = 0 ;
          window.__pdpMtopEndTime = new Date().getTime();
          reportMtopData();
          console.log(err);
          callback && callback();
        }
      )
    }
    reportMtopData2();

    function renderTpl(data) {
      if (deviceType === "pc" && data.Breadcrumb) {
        window.LZD.updateBreadcrumb && window.LZD.updateBreadcrumb(data.Breadcrumb)
      }
    }
  }
  fetchData(hydrate);

</script>


  <!-- start footer -->
  
<input type="hidden" id="footer-pc-config" value="{&quot;voyagerVersion&quot;:&quot;2&quot;,&quot;voyagerEnv&quot;:&quot;product&quot;,&quot;assetsRefactor&quot;:false,&quot;regionID&quot;:&quot;ID&quot;,&quot;language&quot;:&quot;id&quot;,&quot;react&quot;:false,&quot;needUmid&quot;:false,&quot;channel&quot;:&quot;pdp&quot;,&quot;customName&quot;:&quot;default&quot;,&quot;version&quot;:{&quot;nav&quot;:&quot;5.2.38&quot;,&quot;search&quot;:&quot;0.4.11&quot;,&quot;menu&quot;:&quot;5.0.45&quot;,&quot;menuNav&quot;:&quot;5.0.73&quot;,&quot;suffix&quot;:&quot;&quot;},&quot;needRetCode&quot;:true,&quot;retCodePageName&quot;:&quot;&quot;,&quot;hideCategory&quot;:true,&quot;needReact&quot;:false,&quot;thymeleaf&quot;:true,&quot;grayFilter&quot;:{&quot;TH&quot;:false,&quot;SG&quot;:false,&quot;MY&quot;:false,&quot;ID&quot;:false,&quot;PH&quot;:false,&quot;VN&quot;:false},&quot;isHomePage&quot;:false,&quot;isMiniHeader&quot;:false,&quot;java&quot;:true}">
<link rel="stylesheet" href="//g.lazcdn.com/g/lzdmod/desktop-footer/6.1.1/??pc/index.css">
<script>window.g_config = window.g_config || {};window.g_config.loadedCss = window.g_config.loadedCss || [];window.g_config.loadedCss = ["@ali/lzdmod-desktop-footer/pc/index.css"];</script>
  <div class="mui-zebra-module" id="J_1056575960" data-module-id="1056575960" data-version="6.1.1" data-spm="1056575960">
<script type="text/data" class="J-dynamic-data">
</script>
<!-- begin Helpcenter customer service chat integration code -->
<script type="text/javascript">
  window.g_config = window.g_config || {};
  window.g_config.cscClient = 'buyer';
  window.g_config.regionID = 'ID';
  window.g_config.cscLiveUp = false;
  window.g_config.cscAnonymous = false;
  window.g_config.disabledAutoInit = true;
  window.g_config.cscBot = 'QX1sVhWTMO';
(function() {
  var pathNameReg = /helpcenter|contact/g;
  var pathMatched = pathNameReg.test(window.location.pathname);
  if(!pathMatched){
    var sc = document.createElement('script');
    sc.async = true;
    sc.src = '//g.lazcdn.com/g/lzd-cs/chat/2.5.0/alichat.js';
    sc.setAttribute("desktopjs","true")
    var scr = document.getElementsByTagName('script')[0];
    scr.parentNode.insertBefore(sc, scr);
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = "//g.lazcdn.com/g/lzd-cs/chat/2.5.0/alichat.css";
    link.setAttribute("desktopcss","true")
    var l = document.getElementsByTagName('link')[0]; l.parentNode.insertBefore(link, l);
    var done = false;
    sc.onload = sc.onreadystatechange = function() {
    if (!done && (!this.readyState || this.readyState==='loaded' || this.readyState==='complete')) {
      done = true;
        var requestHost = 'https://h5-alimebot.lazada.co.id';
        var botUrl = 'https://h5-alimebot.lazada.co.id/intl/index.htm?from=QX1sVhWTMO&_lang=in-ID';
        var loginUrl = 'https://member.lazada.co.id/user/pure-login?hideRegister=true&hideForgotPWD=true';
      window._CSCChatInstance = new CSChat({ bot: { from: window.g_config.cscBot, requestHost: requestHost, botUrl: botUrl, }, loginUrl: loginUrl, });
    }
  };
  }
})();
</script>
<!-- end Helpcenter customer service chat integration code -->
<section class="desktop-footer" data-mod-name="@ali/lzdmod-desktop-footer/pc/index" data-config="{}">
    <div class="footer-first">
      <div class="lzd-footer-inner" data-spm="footer_top">
  <div class="lzd-footer-width-25">
    <h3 class="footer-title">Layanan Pelanggan</h3>
    <ul class="footer-list">
      <li class="footer-li"><a href="//www.lazada.co.id/helpcenter/">Pusat Bantuan</a></li>
      <li class="footer-li"><a href="//www.lazada.co.id/helpcenter/payments/">Cara Pembelian</a></li>
      <li class="footer-li"><a href="//www.lazada.co.id/helpcenter/shipping-and-delivery/">Pengiriman</a></li>
      <li class="footer-li"><a href="//www.lazada.co.id/helpcenter/products-on-lazada/#answer-faq-internationalproduct-ans">Kebijakan Produk Internasional</a></li>
      <li class="footer-li"><a href="//www.lazada.co.id/helpcenter/returns-refunds/#answer-faq-return-ans">Cara Pengembalian</a></li>
      <li class="--js-csc-trigger">
        <a style="background: #f36f36; display: inline-block; color:#0F136D ; padding: 2px 4px; cursor: pointer;">Ada pertanyaan? Hubungi kami di live chat (24 Jam)</a>
      </li>
    </ul>
  </div>
  <div class="lzd-footer-width-25">
    <h3 class="footer-title">Jelajahi Lazada</h3>
    <ul class="footer-list">
      <li class="footer-li">
          <a href="//group.lazada.com/en/about/">Tentang Lazada</a>
      </li>
      <li class="footer-li">
          <a href="//pages.lazada.co.id/wow/gcp/route/lazada/id/upr_1000345_lazada/channel/id/upr-router/id_upr?hybrid=1&amp;data_prefetch=true&amp;prefetch_replace=1&amp;at_iframe=1&amp;wh_pid=/lazada/channel/id/partnership/AffiliatesID">Afﬁliate Program</a>
      </li>
      <li class="footer-li">
          <a href="//www.lazada.com/work-at-lazada/">Karir</a>
      </li>
      <li class="footer-li">
          <a href="https://pages.lazada.co.id/wow/gcp/route/lazada/id/upr_1000345_lazada/channel/id/upr-router/id_upr?hybrid=1&amp;data_prefetch=true&amp;prefetch_replace=1&amp;at_iframe=1&amp;wh_pid=/lazada/channel/id/legal/terms-of-use">Syarat &amp; Ketentuan</a>
      </li>
      <li class="footer-li">
          <a href="https://pages.lazada.co.id/wow/gcp/route/lazada/id/upr_1000345_lazada/channel/id/upr-router/id_upr?hybrid=1&amp;data_prefetch=true&amp;prefetch_replace=1&amp;at_iframe=1&amp;wh_pid=/lazada/channel/id/legal/PrivacyPolicy">Kebijakan Privasi</a>
      </li>
      <li class="footer-li">
          <a href="//group.lazada.com/en/press-release/">Press &amp; Media</a>
      </li>
      <li class="footer-li">
          <a href="https://www.lazada.co.id/marketplace/">Jual Di Lazada</a>
      </li>
      <li class="footer-li">
          <a href="//www.lazada.co.id/security/">Lazada Security</a>
      </li>
      <li class="footer-li">
          <a href="https://pages.lazada.co.id/wow/gcp/route/lazada/id/upr_1000345_lazada/channel/id/upr-router/id_upr?hybrid=1&amp;data_prefetch=true&amp;prefetch_replace=1&amp;at_iframe=1&amp;wh_pid=/lazada/channel/id/legal/ipr-policy">Intellectual Property Protection</a>
      </li>
    </ul>
  </div>
  <div class="lzd-footer-width-50">
      <div class="lzd-footer-app-downloads">
        <div class="lzd-footer-appIcon pull-left logo icon-logo-lazada-footer">
        </div>
        <div class="pull-left lzd-app-download-text">
          <div class="title">Go where your heart beats</div>
          <div class="text">Download the App</div>
        </div>
        <div class="pull-left" style="width: 290px">
          <a class="lzd-footer-sprit pull-left icon-appStore-footer icon-appstore-footer" href="https://bit.ly/lazada-ios-app"></a>
          <a class="lzd-footer-sprit pull-left icon-android-footer icon-appstore-footer" href="https://bit.ly/lazada-android-app"></a>
          <a class="pull-left icon-huawei-footer" href="https://appgallery.huawei.com/#/app/C100164557"></a>
        </div>
      </div>
      <div class="clear"></div>
  </div>
</div>
    </div>
    <div class="footer-second">
      <div class="lzd-footer-inner">
  <div class="lzd-footer-width-32">
    <h3 class="lzd-footer-h3">Metode Pembayaran</h3>
      <span class="lzd-icon-payment lzd-footer-sprit" style="background-position: -768px -768px; "></span>
      <span class="lzd-icon-payment lzd-footer-sprit" style="background-position: -329px -768px; "></span>
      <span class="lzd-icon-payment lzd-footer-sprit" style="background-position: -209px -829px; "></span>
  </div>
  <div class="lzd-footer-width-32 lzd-footer-spacing">
    <h3 class="lzd-footer-h3">Jasa Pengiriman</h3>
      <img class="lzd-icon-delivery " src="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN01RNizk522j2cPtaRjc_!!6000000007155-2-tps-96-70.png" alt="Lazada Logistics" style="height: 70px;   width: 96px;">
      <img class="lzd-icon-delivery " src="https://lzd-img-global.slatic.net/g/tps/imgextra/i1/O1CN01Y8JAuA1pB4EhCiF0K_!!6000000005321-2-tps-96-70.png" alt="JNE" style="height: 70px;   width: 96px;">
      <img class="lzd-icon-delivery " src="https://lzd-img-global.slatic.net/g/tps/imgextra/i1/O1CN01qvF2hw1lWoZrnGZev_!!6000000004827-2-tps-96-70.png" alt="Ninja Express" style="height: 70px;   width: 96px;">
      <img class="lzd-icon-delivery " src="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN01DGonqR1H5qmpBI2hf_!!6000000000707-2-tps-96-70.png" alt="GoSend" style="height: 70px;   width: 96px;">
      <img class="lzd-icon-delivery " src="https://lzd-img-global.slatic.net/g/tps/imgextra/i2/O1CN01ENOAXK1UR05CB9iwA_!!6000000002513-2-tps-96-70.png" alt="Sicepat" style="height: 70px;   width: 96px;">
      <img class="lzd-icon-delivery " src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN01mFypLB1jt8eRUFBC0_!!6000000004605-2-tps-96-70.png" alt="Grab Parcel" style="height: 70px;   width: 96px;">
      <img class="lzd-icon-delivery " src="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN011Ya3Kg1OSw3sg81tm_!!6000000001705-2-tps-96-70.png" alt="J &amp; T" style="height: 70px;   width: 96px;">
      <img class="lzd-icon-delivery " src="https://lzd-img-global.slatic.net/g/tps/imgextra/i1/O1CN019tUhkL1abQnOURPrd_!!6000000003348-2-tps-96-70.png" alt="anter" style="height: 70px;   width: 96px;">
      <img class="lzd-icon-delivery " src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN01uOZizA1UOFhot1z5u_!!6000000002507-2-tps-96-70.png" alt="SAP" style="height: 70px;   width: 96px;">
  </div>
  <div class="lzd-footer-width-32">
    <h3 class="lzd-footer-h3">Verified by</h3>
      <div class="pull-left"> 
      <a href="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN01bvSldX1gkULXWGauo_!!6000000004180-2-tps-1190-1683.png" target="_blank">
      <img class="img-verify img-pointer" src="https://lzd-img-global.slatic.net/g/tps/tfs/TB1lbmoqYr1gK0jSZR0XXbP8XXa-340-200.png" alt="ISO" style="height: 60px;">
  </a>
      </div>
      <div class="pull-left">
      <a href="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN01dinKMe26jjo1yfe9j_!!6000000007698-0-tps-2480-3509.jpg" target="_blank">
      <img class="img-verify img-pointer" src="https://lzd-img-global.slatic.net/g/tps/tfs/TB1jyJMv.H1gK0jSZSyXXXtlpXa-184-120.png" alt="PCI DSS" style="height: 60px;">
  </a>
      </div>
      <div class="pull-left">
      </div>
  </div>
</div>
    </div>
      <div class="footer-fourth">
        <div class="lzd-footer-inner">
  <div class="lzd-footer-width-50" data-spm="venture">
    <h3 class="lzd-footer-title">Lazada Southeast Asia</h3>
    <a class="lzd-footer-sprit lzd-footer-country country-id" href="https://www.lazada.co.id"></a>
    <a class="lzd-footer-sprit lzd-footer-country country-my" href="https://www.lazada.com.my"></a>
    <a class="lzd-footer-sprit lzd-footer-country country-ph" href="https://www.lazada.com.ph"></a>
    <a class="lzd-footer-sprit lzd-footer-country country-sg" href="https://www.lazada.sg"></a>
    <a class="lzd-footer-sprit lzd-footer-country country-th" href="https://www.lazada.co.th"></a>
    <a class="lzd-footer-sprit lzd-footer-country country-vn" href="https://www.lazada.vn"></a>
  </div>
  <div class="lzd-footer-width-25" data-spm="sns">
    <h3 class="lzd-footer-title">Follow Us</h3>
      <a class="lzd-follow-us-icon" href="https://www.facebook.com/LazadaIndonesia" data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_fbk" style="display: inline-block; width: 32px; height: 32px">
        <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN01Wdetn224xMIRNihao_!!6000000007457-2-tps-34-34.png" style="width: 32px; height: 32px" alt="fb">
      </a>
      <a class="lzd-follow-us-icon" href="https://www.linkedin.com/company/lazada/" data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_lnk" style="display: inline-block; width: 32px; height: 32px">
        <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN01D6oQr31GPG1ONK9jd_!!6000000000614-2-tps-34-34.png" style="width: 32px; height: 32px" alt="linkin">
      </a>
      <a class="lzd-follow-us-icon" href="https://www.youtube.com/@LazadaIndonesia" data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_ytb" style="display: inline-block; width: 32px; height: 32px">
        <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN01zt1zOu1zsFnzoIWje_!!6000000006769-2-tps-34-34.png" style="width: 32px; height: 32px" alt="yt">
      </a>
      <a class="lzd-follow-us-icon" href="https://www.pinterest.com/lazadaid/" data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_pnt" style="display: inline-block; width: 32px; height: 32px">
        <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i2/O1CN01b9cK511pjsP40xyAX_!!6000000005397-2-tps-34-34.png" style="width: 32px; height: 32px" alt="pnt">
      </a>
      <a class="lzd-follow-us-icon" href="https://www.instagram.com/lazada_id/" data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_ins" style="display: inline-block; width: 32px; height: 32px">
        <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN011gka8L1E0PIZlHK7e_!!6000000000289-2-tps-34-34.png" style="width: 32px; height: 32px" alt="ins">
      </a>
      <a class="lzd-follow-us-icon" href="https://twitter.com/LazadaID" data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_twr" style="display: inline-block; width: 32px; height: 32px">
        <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN01bSHOIg1O2N9lO20XK_!!6000000001647-2-tps-34-34.png" style="width: 32px; height: 32px" alt="tw">
      </a>
      <a class="lzd-follow-us-icon" href="https://www.tiktok.com/@lazadaid" data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_tkk" style="display: inline-block; width: 32px; height: 32px">
        <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN0193C9ay1QIykTmUlwk_!!6000000001954-2-tps-34-34.png" style="width: 32px; height: 32px" alt="tiktok">
      </a>
      <a class="lzd-follow-us-icon" href="https://www.lazada.co.id/blog/" data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_blg" style="display: inline-block; width: 32px; height: 32px">
        <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i1/O1CN01EShTwh1uKIMLn9AjA_!!6000000006018-0-tps-34-34.jpg" style="width: 32px; height: 32px" alt="Lazada Blg">
      </a>
  </div>
  <div class="lzd-footer-width-25">
    <div class="lzd-footer-copyright">
    © Lazada 2024
    </div>
  </div>
</div>
      </div>
</section>
<div id="webim-container" onclick="javascript:goldlog.record('/lazada.IM.im-msgbox','CLK','platform=desktop&amp;pagename='+ window.LZD_RETCODE_PAGENAME || 'other','GET')"></div>
<script>
var imJsLink = '//g.lazcdn.com/g/lzdmod/im/5.0.103/index.js';
var imCssLink = '//g.lazcdn.com/g/lzdmod/im/5.0.103/index.css';
var gConfig = window.g_config || {};
window.onload = function() {
  if (!gConfig.regionID) return;
  window._imSDKconfig = window._imSDKconfig || { region: (gConfig.regionID || 'sg').toLowerCase(), lang: gConfig.language || 'en', version: '5.0.103', enabled: /enable_webim=true/.test(document.location.search) || true };
  if (window._imSDKconfig.disabled || !window._imSDKconfig.enabled) { return; }
  var imy = document.createElement('link'); imy.rel = 'stylesheet'; imy.href = imCssLink;
  var sty = document.getElementsByTagName('link')[0]; sty.parentNode.insertBefore(imy, sty);
  var ims = document.createElement('script'); ims.type = 'text/javascript'; ims.async = true; ims.src = imJsLink;
  var scr = document.getElementsByTagName('script')[0]; scr.parentNode.insertBefore(ims, scr);
  var done = false; ims.onload = ims.onreadystatechange = function() {
    if (!done && (!this.readyState || this.readyState==='loaded' || this.readyState==='complete')) {
        done = true; window._chat && window._chat.init(window._imSDKconfig).render('webim-container');
    }
  };
};
</script>
  <style>
      .m-common-more .link-lazada-ic-Message{
        display: none;
      }
  </style>
<!-- undefined -->
    <!-- no fragment_header_extra url production-->
<script async="" src="//g.lazcdn.com/g/??mmfe/cps-rt-tracking/0.0.6/index.js,lzdmod/back-to-third-party-app/5.0.2/m/button.js"></script>
  </div>
<script>window.g_config = window.g_config || {};window.g_config.seed = window.g_config.seed || {"packages":{"@ali/lzdmod-site-nav-fragment":{"group":"tm","ignorePackageNameInUri":true,"path":"//g.alicdn.com/lzdmod/site-nav-fragment/5.2.66/","version":"5.2.66","weex":true},"@ali/mui-feloader":{"debug":true,"group":"tm","ignorePackageNameInUri":true,"path":"//g.alicdn.com/mui/feloader/5.0.0/","version":"5.0.0","name":"@ali/mui-feloader","base":"//g.alicdn.com/mui/feloader/5.0.0/"},"@ali/lzdmod-loader":{"group":"lzd","ignorePackageNameInUri":true,"path":"//g.alicdn.com/lzdmod/loader/5.0.2/","version":"5.0.2","name":"@ali/lzdmod-loader","base":"//g.alicdn.com/lzdmod/loader/5.0.2/"},"@ali/lzdmod-common-info":{"group":"tm","ignorePackageNameInUri":true,"path":"//g.alicdn.com/lzdmod/common-info/5.0.30/","version":"5.0.30","weex":true},"@ali/lzdmod-jquery":{"group":"tm","ignorePackageNameInUri":true,"path":"//g.alicdn.com/lzdmod/jquery/5.0.9/","version":"5.0.9","weex":false},"@ali/lzdmod-site-nav-pc":{"group":"tm","ignorePackageNameInUri":true,"path":"//g.alicdn.com/lzdmod/site-nav-pc/5.2.38/","version":"5.2.38","name":"@ali/lzdmod-site-nav-pc","base":"//g.alicdn.com/lzdmod/site-nav-pc/5.2.38/"},"@ali/mui-i18n":{"debug":true,"group":"g","ignorePackageNameInUri":true,"path":"//g.alicdn.com/mui/i18n/5.0.4/","version":"5.0.4"},"@ali/lzdmod-site-menu-pc":{"group":"tm","ignorePackageNameInUri":true,"path":"//g.alicdn.com/lzdmod/site-menu-pc/5.0.45/","version":"5.0.45","weex":true,"name":"@ali/lzdmod-site-menu-pc","base":"//g.alicdn.com/lzdmod/site-menu-pc/5.0.45/"},"@ali/lzdmod-site-menu-nav-pc":{"group":"tm","ignorePackageNameInUri":true,"path":"//g.alicdn.com/lzdmod/site-menu-nav-pc/5.0.73/","version":"5.0.73","weex":true,"name":"@ali/lzdmod-site-menu-nav-pc","base":"//g.alicdn.com/lzdmod/site-menu-nav-pc/5.0.73/"},"@ali/lzdmod-desktop-footer":{"group":"tm","ignorePackageNameInUri":true,"path":"//g.alicdn.com/lzdmod/desktop-footer/6.1.1/","version":"6.1.1","weex":true,"name":"@ali/lzdmod-desktop-footer","base":"//g.alicdn.com/lzdmod/desktop-footer/6.1.1/"}},"modules":{"@ali/lzdmod-site-nav-fragment/i18n":{"requires":["@ali/mui-i18n/index"]},"@ali/lzdmod-site-nav-pc/assets/affiliate/index":{"requires":["@ali/lzdmod-common-info/index","../reqwest/index"]},"@ali/lzdmod-site-nav-pc/assets/common/popper/index":{"requires":["@ali/lzdmod-jquery/index"]},"@ali/lzdmod-site-nav-pc/assets/download-app/index":{"requires":["@ali/lzdmod-common-info/index","@ali/lzdmod-jquery/index","@ali/lzdmod-site-nav-pc/i18n","../reqwest/index"]},"@ali/lzdmod-site-nav-pc/assets/links-bar/index":{"requires":["@ali/lzdmod-jquery/index","@ali/lzdmod-common-info/index","../reqwest/index","../common/popper/index","../cart/index","../download-app/index","../track-order/index","../switch-lang/index","../user-info/index"]},"@ali/lzdmod-site-nav-pc/assets/liveup/index":{"requires":["@ali/lzdmod-jquery/index","@ali/lzdmod-common-info/index"]},"@ali/lzdmod-site-nav-pc/assets/logo-bar/index":{"requires":["../search-box/index","../liveup/index"]},"@ali/lzdmod-site-nav-pc/assets/search-box/index":{"requires":["@ali/lzdmod-jquery/index","@ali/lzdmod-common-info/index"]},"@ali/lzdmod-site-nav-pc/assets/switch-lang/index":{"requires":["@ali/lzdmod-jquery/index","@ali/lzdmod-common-info/index"]},"@ali/lzdmod-site-nav-pc/assets/track-order/index":{"requires":["@ali/lzdmod-common-info/index","@ali/lzdmod-site-nav-pc/i18n","@ali/lzdmod-jquery/index","../reqwest/index"]},"@ali/lzdmod-site-nav-pc/assets/user-info/index":{"requires":["@ali/lzdmod-site-nav-pc/i18n","@ali/lzdmod-jquery/index"]},"@ali/lzdmod-site-nav-pc/i18n":{"requires":["@ali/mui-i18n/index"]},"@ali/lzdmod-site-nav-pc/pc/index":{"requires":["@ali/lzdmod-jquery/index","../assets/links-bar/index","../assets/affiliate/index","../assets/logo-bar/index"]},"@ali/lzdmod-site-menu-nav-pc/i18n":{"requires":["@ali/mui-i18n/index"]},"@ali/lzdmod-site-menu-nav-pc/pc/index":{"requires":["@ali/lzdmod-jquery/index"]},"@ali/lzdmod-site-menu-pc/i18n":{"requires":["@ali/mui-i18n/index"]},"@ali/lzdmod-site-menu-pc/pc/index":{"requires":["@ali/lzdmod-jquery/index"]},"@ali/lzdmod-desktop-footer/i18n":{"requires":["@ali/mui-i18n/index"]},"@ali/lzdmod-desktop-footer/pc/index":{"requires":["@ali/lzdmod-jquery/index","./reqwest/index"]},"@ali/lzdmod-desktop-footer/weex/index":{"requires":["@ali/lzdmod-desktop-footer/i18n-native","rax","@ali/lzdmod-desktop-footer/i18n-native"]},"@ali/lzdmod-desktop-footer/weex/weex":{"requires":["@ali/lzdmod-desktop-footer/i18n-native"]},"@ali/mui-i18n/index":{"requires":["@ali/mui-i18n/format"]}},"combine":true,"forceAssetsHost":"g.lazcdn.com/g"};</script>
<script src="//g.lazcdn.com/g/??mui/feloader/5.0.0/feloader-min.js,lzdmod/site-nav-pc/5.2.38/pc/index.js,lzdmod/jquery/5.0.9/index.js,lzdmod/site-nav-pc/5.2.38/assets/links-bar/index.js,lzdmod/common-info/5.0.30/index.js,lzdmod/site-nav-pc/5.2.38/assets/reqwest/index.js,lzdmod/site-nav-pc/5.2.38/assets/common/popper/index.js,lzdmod/site-nav-pc/5.2.38/assets/cart/index.js,lzdmod/site-nav-pc/5.2.38/assets/download-app/index.js,lzdmod/site-nav-pc/5.2.38/i18n.js,lzdmod/site-nav-pc/5.2.38/assets/track-order/index.js,lzdmod/site-nav-pc/5.2.38/assets/switch-lang/index.js,lzdmod/site-nav-pc/5.2.38/assets/user-info/index.js,lzdmod/site-nav-pc/5.2.38/assets/affiliate/index.js,lzdmod/site-nav-pc/5.2.38/assets/logo-bar/index.js,lzdmod/site-nav-pc/5.2.38/assets/search-box/index.js,lzdmod/site-nav-pc/5.2.38/assets/liveup/index.js,lzdmod/site-menu-pc/5.0.45/pc/index.js,lzdmod/site-menu-nav-pc/5.0.73/pc/index.js,lzdmod/desktop-footer/6.1.1/pc/index.js,lzdmod/desktop-footer/6.1.1/pc/reqwest/index.js"></script>
<script src="//g.lazcdn.com/g/lzdmod/loader/5.0.2/??index.js"></script>
<script src="//g.lazcdn.com/g/mui/i18n/5.0.4/??index.js,format.js"></script>
<script>
(function(S) {
  window.g_config = window.g_config || {};
  S.config(window.g_config.seed);
  S.config('combine', true);
  feloader.noConflict();
})(feloader);
</script>
<script>
  feloader.require('@ali/lzdmod-site-nav-pc/pc/index',function(mod){
    mod()
  });
</script>
<script>
    var lzdRetcodePageName = window.LZD_RETCODE_PAGENAME || '' || location.pathname;
    if (window.LZD_ROUTER_POSTFIX) {
      if (lzdRetcodePageName.indexOf(window.LZD_ROUTER_POSTFIX) === -1) {
        lzdRetcodePageName = lzdRetcodePageName + window.LZD_ROUTER_POSTFIX;
      }
    }
    var lzdRetcodePid = window.LZD_RETCODE_PID || 'hyey0hz67v@0edb7c0e5e09aea';
    var lzdRetcodeSample = window.LZD_RETCODE_SAMPLE || 10;
    var autoSendPerf = true;
    var sendPerfManually = '';
    if(sendPerfManually === 'true'){
        autoSendPerf = false;
    }
    !function(c,b,d,a){c[a]||(c[a]={}),c[a].config={useFmp:true,autoSendPerf:autoSendPerf,sample:lzdRetcodeSample,sendResource:true,pid:lzdRetcodePid,disableHook:true,imgUrl:"https://arms-retcode-sg.aliyuncs.com/r.png?",page:lzdRetcodePageName};with(b){with(body){with(appendChild(createElement("script"),firstChild)){setAttribute("defer","");setAttribute("async","");setAttribute("crossorigin","");src=d}}}}(window,document,"//g.lazcdn.com/g/retcode/cloud-sdk/bl.js","__bl");
</script>
    <div th:if="${script} ne null and ${script.umid} ne null and ${script.umid} eq true">
<!-- start Group Umid -->
<!-- end Group Umid -->
<script src="https://o.alicdn.com/lzd_sec/LWSC/index.js"></script>
    </div>

  <!-- end footer -->
  <!-- 滑块验证码组件 -->
  <script src="//aeis.alicdn.com/sd/ncpc/nc.js?t=18507" defer async></script>
  <script>
  define('@ali/wpk-reporter', [], function() {
    return window.wpkReporter;
  });
  define('@ali/wpk-reporter/dist/plugins/flow', [], function() {
    return window.wpkflowPlugin;
  });
  define('@ali/wpk-reporter/dist/plugins/interface', [], function() {
    return window.wpkinterfacePlugin;
  });
  define('@ali/wpk-reporter/dist/plugins/blank', [], function() {
    return window.wpkblankPlugin;
  });
</script>
  <script>
    require(['//o.alicdn.com/lzdfe/lzd-h5-itrace/index.js'], function(iLogger) {
      try {
        window.iLogger = iLogger;
        window.__wpk = iLogger.iLoggerIntegrate({
          pid: 'ntccikh9-c1mxofok',
          cid: 'pdp-pc-revamp',
          rel:  '1.4.4',
          cluster: 'intl',
        });
      } catch (e) {
        console.error('init wpkReporter fail', e);
      }
      return null;
    });
  </script>
  <script>
  if ('serviceWorker' in navigator) {
    const enanbleSW = true;
    if (enanbleSW) {
      
      navigator.serviceWorker.register('/products/sw.js', {scope: '/products/'}).then(function (registration) {
        console.log('ServiceWorker registration successful with scope: ', registration.scope);
      }, function (err) {
        console.log('ServiceWorker registration failed: ', err);
      });
      
    } else {
      navigator.serviceWorker.getRegistrations().then(function(registrations) {
        registrations.forEach(sw => sw.unregister());
      });
    }

  }
</script>

  <script>
    (function () {
      try {
        var webVitalsScript = document.createElement('script');
        webVitalsScript.src = 'https://g.lazcdn.com/g/lzd/assets/1.2.10/web-vitals/3.4.0/index.js';
        webVitalsScript.onload = function () {
          // When loading `web-vitals` using a classic script, all the public
          // methods can be found on the `webVitals` global namespace.
      
          var WebVitalsDelta = {
            FCP: null,
            CLS: null,
            FID: null,
            LCP: null,
            INP: null,
          };

          function webVitalsCb(entry) {
            if(entry && entry.name && entry.delta ) {
              WebVitalsDelta[entry.name] = entry.delta;
              if (entry.name === 'INP') {
                webVitalsSingleReport(entry);
              } else if (window.requestIdleCallback) {
                window.requestIdleCallback(function () {
                  webVitalsSingleReport(entry);
                });
              }
            }
          }

          function webVitalsSingleReport(entry) {
            if (window.__wpk && window.__wpk.report) {
              var name = entry && entry.name || '';
              var delta = entry  && entry.delta || '';
              const categories = {
                FCP: 101,
                CLS: 103,
                FID: 104,
                LCP: 102,
                INP: 119
              };
              window.__wpk.report({
                category: categories[name],
                msg: window.location.host,
                wl_avgv1: delta,
                bl1: entry &&  Object.prototype.toString.call(entry) === "[object Object]" ? JSON.stringify(entry) : '',
                c1: entry && entry.rating ||''
              });
            }
          }
          window.webVitals.getFCP(webVitalsCb);
          window.webVitals.getCLS(webVitalsCb);
          window.webVitals.getFID(webVitalsCb);
          window.webVitals.getLCP(webVitalsCb);
          window.webVitals.getINP(webVitalsCb);
        };
        if(document.head) document.head.appendChild(webVitalsScript);
        function report() {
          var fsp = null;
          var csr = null;
          if (timings.start && timings.render) {
            // for ssr
            if (timings.ssr) {
              fsp = timings.ssr - timings.start;
              csr = timings.render - timings.ssr;
            } else {
              fsp = timings.render - timings.start;
            }
          }
          if (fsp && window.__wpk && window.__wpk.report) {
            __wpk.report({
              category: 105,
              msg: window.location.host,
              wl_avgv1: fsp,
              wl_avgv2: csr || 0,
              c1: window.__hasSSR__ ? 1 : 0,
            });
          }
        }
        document.addEventListener('DOMContentLoaded', function () {
          if (window.timings) {
            if (window.timings.render) {
              report();
            } else {
              setTimeout(function () {
                report();
              }, 3000);
            }
          }
        })
      } catch (err) {
        console.log(err && err.message)
      }
    })();
</script>
  <script>
  if (window.baxiaCommon) {
    baxiaCommon.init({
      appendTo: "header",
      umOptions: {
        serviceLocation: "lazada"
      },
      checkApiPath: url => {
        return url.indexOf("mtop.lazada.promotion.voucher.spread") > -1;
      }
    });
  }
</script>
</body>
</html>
