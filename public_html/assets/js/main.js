// Preloader
$.holdReady( true );

$('body').imagesLoaded({ background: ".background-holder" }, function(){
    $('#preloader').removeClass("loading");
    $.holdReady( false );
    setTimeout(function() {
        $('#preloader').remove();
    }, 800);
});

// Zanimation
$(window).on('load', function(){
    $('*[data-inertia]').each(function(){
        $(this).inertia();
    });
});

// Two possibilities exist: either we are alone in the Universe or we are not. 
// Both are equally terrifying.
// And this is a strange fix for menu hover on iPad
$(document).ready(function() {
    $('body').bind('touchstart', function() {});
});

// =========================================================
// 追従バナーの表示/非表示制御 (スクロール方向による切り替え) - 【フッター安定版 V2】
// =========================================================

$(document).ready(function() {
    const $banner = $('.floating-footer-banner'); 
    if ($banner.length === 0) return;

    let lastScrollTop = 0;
    const threshold = 5; // わずかな揺れで反応しないようにする閾値

    // --- 動作判定ロジック ---
    function checkMobileMode() {
        // 768px以下をモバイルと判定
        return $(window).width() <= 768; 
    }

    // --- スクロール制御関数 ---
    function handleScroll() {
        if (!checkMobileMode()) {
            // PCサイズの場合は制御しない
            return;
        }

        const scrollTop = $(this).scrollTop();
        const scrollDelta = scrollTop - lastScrollTop;

        // わずかなスクロールは無視
        if (Math.abs(scrollDelta) <= threshold) {
            lastScrollTop = scrollTop;
            return;
        }

        if (scrollDelta > 0) {
            // ▼ 下にスクロールしているとき -> 隠す
            $banner.addClass('is-hidden'); 
        } else if (scrollDelta < 0) {
            // ▲ 上にスクロールしているとき -> 表示する
            $banner.removeClass('is-hidden');
        } 
        
        lastScrollTop = scrollTop;
    }

    // --- イベントリスナーの適用 ---

    // ページロード時とサイズ変更時に、PCかモバイルかを再判定する
    $(window).on('resize orientationchange', function() {
        if (!checkMobileMode()) {
            // PCになったら、バナーを強制的に表示状態にする
            $banner.removeClass('is-hidden');
        } else {
            // モバイルに戻ったら初期表示状態にする（非表示クラスを解除）
            $banner.removeClass('is-hidden');
        }
    }).trigger('resize'); 

    // スクロールイベントの登録
    $(window).on('scroll', handleScroll);
    
});