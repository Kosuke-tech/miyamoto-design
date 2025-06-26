"use strict";

// スティッキーヘッダー

{
document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('#header');
    const scrollThreshold = 1; // 1pxでもスクロールしたらスティッキーにする（調整可能）

    window.addEventListener('scroll', function () {
        const isMobile = window.innerWidth <= 1024;

        if (window.scrollY > scrollThreshold && isMobile) {
            // モバイルかつスクロール量が閾値を超えたらクラスを追加
            header.classList.add('is-sticky'); // クラス名に # は不要
        } else {
            // それ以外の場合はクラスを削除
            // (PC画面の場合、またはモバイル画面でもスクロールが0に戻った場合)
            header.classList.remove('is-sticky');
        }
    });
});
}


// LINE modal (グローバルスコープの{}はつけてはダメ。)

function openModal() {
    document.getElementById('lineModal').style.display = 'block';
}
function closeModal() {
    document.getElementById('lineModal').style.display = 'none';
}


// ---------------key visual --------------------------------------------

//   Intersection Observer (keyvisual catch)
{
    const callback = function (entries, observer) {
        entries.forEach(function (entry, index) {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1; //表示
                entry.target.style.transform = 'translateY(0)';
                entry.target.style.transitionDelay = '0.1s';
                observer.unobserve(entry.target);
            } else {
                entry.target.style.opacity = 0; //非表示
                entry.target.style.transform = 'translateY(100px)';
            }
        });
    };

    const options = {
        root: null,
        rootMargin: '-100px',
        // threshold: 1,
    };

    const observer = new IntersectionObserver(callback, options);

    const keyVisualcatch = document.querySelectorAll('#keyvisual__catch');

    keyVisualcatch.forEach(function (item) {
        observer.observe(item);
    });
}

//   Intersection Observer (keyvisual SP画像)
{
    const callback = function (entries, observer) {
        entries.forEach(function (entry, index) {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1; //表示
                entry.target.style.transform = 'translateY(0)';
                entry.target.style.transitionDelay = '0.3s';
                observer.unobserve(entry.target);
            } else {
                entry.target.style.opacity = 0; //非表示
                entry.target.style.transform = 'translateY(100px)';
            }
        });
    };

    const options = {
        root: null,
        rootMargin: '-100px',
        // threshold: 1,
    };

    const observer = new IntersectionObserver(callback, options);

    const keyVisualImgWrapSp = document.querySelectorAll('#keyvisual__imgWrapSp');

    keyVisualImgWrapSp.forEach(function (item) {
        observer.observe(item);
    });
}




//   Intersection Observer (keyvisual text)
{
    const callback = function (entries, observer) {
        entries.forEach(function (entry, index) {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1; //表示
                entry.target.style.transform = 'translateY(0)';
                entry.target.style.transitionDelay = '0.5s';
                observer.unobserve(entry.target);
            } else {
                entry.target.style.opacity = 0; //非表示
                entry.target.style.transform = 'translateY(100px)';
            }
        });
    };

    const options = {
        root: null,
        rootMargin: '-100px',
        // threshold: 1,
    };

    const observer = new IntersectionObserver(callback, options);

    const keyvisualText = document.querySelectorAll('#keyvisual__text');

    keyvisualText.forEach(function (item) {
        observer.observe(item);
    });
}

// ---------------issue --------------------------------------------

{
    const createObserver = (selector, delay) => {
        const callback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                    entry.target.style.transitionDelay = delay;
                    observer.unobserve(entry.target);
                } else {
                    entry.target.style.opacity = 0;
                    entry.target.style.transform = 'translateY(100px)';
                }
            });
        };

        const options = {
            root: null,
            rootMargin: '-100px',
        };

        const observer = new IntersectionObserver(callback, options);
        document.querySelectorAll(selector).forEach(item => observer.observe(item));
    };


    // --- PCとSPでdelayを変える ---
    const isMobile = window.innerWidth <= 575;

    if (isMobile) {
        // スマホ表示の場合：全て0.4s
        createObserver('#issue__card1', '0.2s');
        createObserver('#issue__card2', '0.2s');
        createObserver('#issue__card3', '0.2s');
        createObserver('#issue__card4', '0.2s');
    } else {
        // PC表示の場合：バラバラに指定
        createObserver('#issue__card1', '0.1s');
        createObserver('#issue__card2', '0.3s');
        createObserver('#issue__card3', '0.5s');
        createObserver('#issue__card4', '0.7s');
    }
}


// ---------------こんな企業さま事業主さまにおすすめです。 --------------------------------------------

{
    const createObserver = (selector, delay) => {
        const callback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                    entry.target.style.transitionDelay = delay;
                    observer.unobserve(entry.target);
                } else {
                    entry.target.style.opacity = 0;
                    entry.target.style.transform = 'translateY(100px)';
                }
            });
        };

        const options = {
            root: null,
            rootMargin: '-100px',
        };

        const observer = new IntersectionObserver(callback, options);
        document.querySelectorAll(selector).forEach(item => observer.observe(item));
    };


    // --- PCとSPでdelayを変える ---
    const isMobile = window.innerWidth <= 575;

    if (isMobile) {
        // スマホ表示の場合：全て0.2s
        createObserver('#recommend__contentsWrap1', '0.2s');
        createObserver('#recommend__contentsWrap2', '0.2s');
        createObserver('#recommend__contentsWrap3', '0.2s');
        createObserver('#recommend__contentsWrap4', '0.2s');
    } else {
        // PC表示の場合：バラバラに指定
        createObserver('#recommend__contentsWrap1', '0.1s');
        createObserver('#recommend__contentsWrap2', '0.3s');
        createObserver('#recommend__contentsWrap3', '0.5s');
        createObserver('#recommend__contentsWrap4', '0.7s');
    }
}




// ---------------ブログの更新やサイトの更新・保守など全部やっておいてほしい！ --------------------------------------------

const observerCallback = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            if (entry.target.id === 'agency__catchWrap') {
                entry.target.classList.add('animate-catch');
            } else if (entry.target.id === 'agency__textWrap') {
                entry.target.classList.add('animate-text');
            }
            observer.unobserve(entry.target);
        }
    });
};

const observerOptions = {
    root: null,
    rootMargin: '100px',
    threshold: 0.1,
};

const observer = new IntersectionObserver(observerCallback, observerOptions);

document.querySelectorAll('#agency__catchWrap, #agency__textWrap').forEach(el => {
    observer.observe(el);
});



// ---------------Miyamoto designに頼む理由 --------------------------------------------

{
    const createObserver = (selector, delay) => {
        const callback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                    entry.target.style.transitionDelay = delay;
                    observer.unobserve(entry.target);
                } else {
                    entry.target.style.opacity = 0;
                    entry.target.style.transform = 'translateY(100px)';
                }
            });
        };

        const options = {
            root: null,
            rootMargin: '-100px',
        };

        const observer = new IntersectionObserver(callback, options);
        document.querySelectorAll(selector).forEach(item => observer.observe(item));
    };


    // --- PCとSPでdelayを変える ---
    const isMobile = window.innerWidth <= 575;

    if (isMobile) {
        // スマホ表示の場合：全て0.2s
        createObserver('#ask__cardWrap1', '0.2s');
        createObserver('#ask__cardWrap2', '0.2s');
        createObserver('#ask__cardWrap3', '0.2s');
        createObserver('#ask__cardWrap4', '0.2s');
    } else {
        // PC表示の場合：バラバラに指定
        createObserver('#ask__cardWrap1', '0.1s');
        createObserver('#ask__cardWrap2', '0.3s');
        createObserver('#ask__cardWrap3', '0.5s');
        createObserver('#ask__cardWrap4', '0.7s');
    }
}




// ---------------How to use --------------------------------------------

{
    const createObserver = (selector, delay) => {
        const callback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                    entry.target.style.transitionDelay = delay;
                    observer.unobserve(entry.target);
                } else {
                    entry.target.style.opacity = 0;
                    entry.target.style.transform = 'translateY(100px)';
                }
            });
        };

        const options = {
            root: null,
            rootMargin: '-100px',
        };

        const observer = new IntersectionObserver(callback, options);
        document.querySelectorAll(selector).forEach(item => observer.observe(item));
    };



    // --- PCとSPでdelayを変える ---
    const isMobile = window.innerWidth <= 768;

    if (isMobile) {
        // スマホ表示の場合：全て0.2s
        createObserver('#use__contentsWrap1', '0.2s');
        createObserver('#use__contentsWrap2', '0.2s');
        createObserver('#use__contentsWrap3', '0.2s');
        createObserver('#use__contentsWrap4', '0.2s');
    } else {
        // PC表示の場合：バラバラに指定
        createObserver('#use__contentsWrap1', '0.1s');
        createObserver('#use__contentsWrap2', '0.3s');
        createObserver('#use__contentsWrap3', '0.5s');
        createObserver('#use__contentsWrap4', '0.7s');
    }
}



// PAGE TOPボタンのスムーススクロール

{
    document.addEventListener('DOMContentLoaded', function() {
    const footerUnderNav = document.querySelector('.footer__underNav');

    window.addEventListener('scroll', function() {
        // 現在のスクロール量 (document.documentElement.scrollTop は IE などの互換性用)
        const scrollY = window.scrollY || document.documentElement.scrollTop;

        // ドキュメント全体の高さ
        const documentHeight = document.documentElement.scrollHeight;

        // ブラウザの表示領域の高さ (ビューポートの高さ)
        const windowHeight = window.innerHeight;

        // ページのどこまでスクロールしたか (表示領域を含めたスクロール可能な最大の高さ)
        // ここで計算される 'maxScroll' は、スクロールバーが一番下に来た時の scrollY の最大値です。
        const maxScroll = documentHeight - windowHeight;

        // スクロール量がページの2/3を超えたかを判断する閾値
        // maxScroll の 2/3 を計算します。
        const threshold = maxScroll * (1 / 3);

        // スクロール量が閾値を超えたら表示
        if (scrollY > threshold) {
            footerUnderNav.classList.add('show');
        } else {
            footerUnderNav.classList.remove('show');
        }
    });
});



// 上に戻るの挙動

document.addEventListener('DOMContentLoaded', function() {
    const pageTopBtn = document.getElementById('page-top-btn');

    if (pageTopBtn) { // ボタンが存在することを確認
        pageTopBtn.addEventListener('click', function(e) {
            e.preventDefault(); // デフォルトのアンカーリンク動作をキャンセル

            window.scrollTo({
                top: 0, // ページの最上部へスクロール
                behavior: 'smooth' // スムーズスクロールを有効にする
            });
        });
    }
});

}

